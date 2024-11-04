<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleCallback(Request $request, $provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            
            // Check if user exists with this email
            $user = User::where('email', $socialUser->email)->first();
            
          
            if ($user) {
                // Update OAuth credentials
                $user->update([
                    $provider.'_id' => $socialUser->id,
                ]);
            } else {
                // Create new user
                $user = User::create([
                    'email' => $socialUser->email,
                    $provider.'_id' => $socialUser->id,
                    'status' => 'active',
                ]);
            }

            Auth::login($user);

           

            // Redirect based on onboarding status
            if (!$user->onboarding_completed_at) {
                return redirect('/onboarding/step1');
            }

            return redirect('/feed');

        } catch (Exception $e) {
            \Log::error('Social auth error: ' . $e->getMessage());
            return redirect()->route('login')
                ->withErrors(['email' => 'Error during social authentication.']);
        }
    }
} 