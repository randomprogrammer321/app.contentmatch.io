<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Otp;
use App\Notifications\SendOtp;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\OtpController;

class LoginController extends Controller
{
    public function __construct()
    {
       // Constructor kept as is
    }

    public function showLoginForm()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request) 
    {
        try {
            $request->validate([
                'email' => ['required', 'email'],
            ]);

            $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);
            $user = User::where('email', $email)->first();
            
            if (!$user) {
                return $this->handleNewUserRegistration($email);
            }

            // Generate OTP and redirect
            return $this->generateAndSendOtp($user);
            //return redirect()->route('onboarding.step1');

        } catch (\Exception $e) {
            \Log::error('Login error: ' . $e->getMessage());
            return back()->withErrors([
                'email' => 'An error occurred during login. Please try again.',
            ])->withInput($request->only('email'));
        }
    }

    protected function handleNewUserRegistration($email)
    {
        try {
            $user = DB::transaction(function () use ($email) {
                $user = User::create([
                    'email' => $email,
                    'status' => 'active',
                ]);

                $this->generateAndSendOtp($user);
                return $user;
            });

            session(['auth_email' => $email]);
            return redirect()->route('otp.form')->with('message', 'Please check your email for OTP');

        } catch (\Exception $e) {
            \Log::error('Registration error: ' . $e->getMessage());
            return back()->withErrors([
                'email' => 'Error during registration. Please try again.',
            ])->withInput(['email' => $email]);
        }
    }

    protected function generateAndSendOtp(User $user)
    {
        return OtpController::generateAndSendOtp($user);
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect('/');
    }
}
