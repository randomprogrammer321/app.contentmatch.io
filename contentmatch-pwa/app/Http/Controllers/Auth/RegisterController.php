<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Otp;
use App\Notifications\SendOtp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Http\Controllers\Auth\OtpController;

class RegisterController extends Controller
{
    public function __construct()
    {
//        $this->middleware('guest')->except(['completeOnboarding']);
    }

    public function showRegistrationForm()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request) //register with email address 
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        // Check if the user already exists
        if (User::where('email', $data['email'])->exists()) {
            return back()->withErrors([
                'email' => 'Sorry, a user with this email already exists.',
            ])->withInput();
        }

        try {
            $user = $this->registerUser($data);

            if (!Auth::login($user)){
                return back()->withErrors([
                    'email' => 'Error during registration. Please try again.',
                ])->withInput();
            }


            OtpController::generateAndSendOtp($user);


            return redirect()->route('onboarding.step1');

            
        } catch (Exception $e) {
            \Log::error('Registration error: ' . $e->getMessage());
            return back()->withErrors([
                'email' => 'Error during registration. Please try again.',
            ])->withInput();
        }
    }

    // public function handleSocialCallback(Request $request, $provider)
    // {
    //     try {
    //         $socialUser = Socialite::driver($provider)->user();
            
    //         // Check if user exists with this email
    //         $user = User::where('email', $socialUser->email)->first();
            
    //         if ($user) {
    //             // Update OAuth credentials
    //             $user->update([
    //                 $provider.'_id' => $socialUser->id,
    //             ]);
    //         } else {
    //             // Create new user
    //             $user = User::create([
    //                 'email' => $socialUser->email,
    //                 $provider.'_id' => $socialUser->id,
    //                 'status' => 'active',
    //             ]);
    //         }

    //         Auth::login($user);

    //         // Redirect based on onboarding status
    //         if (!$user->onboarding_completed_at) {
    //             return redirect()->route('onboarding.step1');
    //         }

    //         return redirect('/feed');

    //     } catch (Exception $e) {
    //         \Log::error('Social auth error: ' . $e->getMessage());
    //         return redirect()->route('login')
    //             ->withErrors(['email' => 'Error during social authentication.']);
    //     }
    // }

    public function completeOnboarding(Request $request)
    {
        $user = auth()->user();
        
        if ($user->onboarding_completed_at) {
            return redirect('/feed');
        }
        

        // Update user with onboarding completion
        $user->update([
            'onboarding_completed_at' => now(),
        ]);

        return redirect('/feed');
    }

    protected function registerUser($data) // register data  
    {
        DB::transaction(function () use ($data, &$user) {
            // Create user with minimal data
            $user = User::create([
                'email' => $data['email'],
                'status' => 'active',
                'google_id' => $data['google_id'] ?? null,
                'discord_id' => $data['discord_id'] ?? null,
            ]);

            // Use the centralized OTP generation
        });

        return $user;
    }
}
