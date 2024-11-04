<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use App\Notifications\SendOtp;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    public function __construct()
    {
        // No middleware needed here
    }

    public function showOtpForm()
    {
        if (!session('auth_email')) {
            return redirect()->route('login');
        }

        return view('pages.auth.otp', ['email' => session('auth_email')]);
    }

    public function verifyOtp(Request $request)
    {
        \Log::info('Starting OTP verification');
        
        $email = session('auth_email');
        if (!$email) {
            \Log::error('No auth_email in session');
            return redirect()->route('login');
        }

        if (RateLimiter::tooManyAttempts('otp-verify:' . $email, 5)) {
            \Log::info('Too many attempts');
            return back()->withErrors(['otp' => 'Too many invalid attempts. Please try again later.']);
        }

       $request->validate([
            'otp' => 'required|digits:6',
        ]);

    
        \Log::info('Looking for user with email: ' . $email);
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            \Log::error('User not found for email: ' . $email);
            return redirect()->route('login');
        }

        \Log::info('Found user: ' . $user->id);

        $otp = Otp::where('user_id', $user->id)
                  ->where('otp', $request->otp)
                  ->where('expires_at', '>', Carbon::now())
                  ->first();

        if (!$otp) {
            \Log::info('Invalid or expired OTP for user: ' . $user->id);
            RateLimiter::hit('otp-verify:' . $email);
            return back()->withErrors(['otp' => 'Invalid or expired OTP']);
        }

        \Log::info('Valid OTP found');
        RateLimiter::clear('otp-verify:' . $email);
        
        try {
            DB::transaction(function () use ($otp, $user) {
                \Log::info('Starting transaction');
                
                // Delete the used OTP
                $otp->delete();
                \Log::info('OTP deleted');
                
                // Log the user in
                Auth::login($user, true);
                \Log::info('User logged in: ' . Auth::id());
            });

            // Clear session after successful login
            session()->forget('auth_email');
            \Log::info('Auth email cleared from session');

            // Check if user needs to complete onboarding
            if (!$user->hasCompletedOnboarding()) {
                \Log::info('Redirecting to onboarding');
                return redirect('/onboarding/step1');
            }
            
            \Log::info('Redirecting to feed');
            return redirect('/feed');
            
        } catch (\Exception $e) {
            \Log::error('OTP verification error: ' . $e->getMessage());
            \Log::error($e->getTraceAsString());
            return back()->withErrors(['otp' => 'An error occurred during verification.']);
        }
    }

    public function resendOtp(Request $request)
    {
        $email = session('auth_email');
        if (!$email) {
            return redirect()->route('login');
        }

        if (RateLimiter::tooManyAttempts('otp-resend:' . $email, 3)) {
            return back()->withErrors(['otp' => 'Too many resend attempts. Please try again later.']);
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->route('login');
        }

        try {
            self::generateAndSendOtp($user);
            RateLimiter::hit('otp-resend:' . $email);
            return back()->with('message', 'New OTP has been sent');
        } catch (\Exception $e) {
            \Log::error('OTP resend error: ' . $e->getMessage());
            return back()->withErrors(['otp' => 'Failed to resend OTP. Please try again.']);
        }
    }

    public static function generateAndSendOtp($user)
    {
        try {
            $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            
            DB::transaction(function () use ($user, $otp) {
                // Delete any existing OTPs for this user
                Otp::where('user_id', $user->id)->delete();
                
                // Create new OTP
                Otp::create([
                    'user_id' => $user->id,
                    'otp' => $otp,
                    'expires_at' => Carbon::now()->addMinutes(5), // Increased expiry time
                ]);

                // Send OTP notification
                $user->notify(new SendOtp($otp));
            });

            // Store email in session
            session(['auth_email' => $user->email]);
            
            return redirect()->route('otp.form')
                           ->with('message', 'Please check your email for OTP');

        } catch (\Exception $e) {
            \Log::error('OTP Generation error: ' . $e->getMessage());
            throw $e;
        }
    }
}
