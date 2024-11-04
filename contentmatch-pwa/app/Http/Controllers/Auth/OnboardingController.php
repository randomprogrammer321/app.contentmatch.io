<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Blaspsoft\Blasp\Facades\Blasp;

class OnboardingController extends Controller
{
    public function showStep1()
    {
       

        return view('pages.onboarding.step1');
    }

    public function saveStep1(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:30',
                'unique:users,username,' . auth()->id(),
                'regex:/^[a-zA-Z0-9_]+$/',
                'blasp_check', // Add Blasp validation
            ],
            'full_name' => [
                'required',
                'string',
                'max:50',
                'blasp_check', // Add Blasp validation
            ],
            'bio' => [
                'required',
                'string',
                'max:160',
                'blasp_check', // Add Blasp validation
            ],
            'dob' => [
                'required',
                'date',
                'before:' . Carbon::now()->subYears(13)->format('Y-m-d'),
            ],
            'gender' => [
                'required',
                Rule::in(['male', 'female', 'non_binary', 'other', 'prefer_not_to_say']),
            ],
            'profile_image' => [
                'nullable',
                'image',
                'max:5120', // 5MB
                'mimes:jpeg,png,jpg,gif',
            ],
            'banner_image' => [
                'nullable',
                'image',
                'max:5120', // 5MB
                'mimes:jpeg,png,jpg,gif',
            ],
        ]);

        // Additional profanity check with Blasp
        $checkUsername = Blasp::check($validated['username']);
        $checkFullName = Blasp::check($validated['full_name']);
        $checkBio = Blasp::check($validated['bio']);

        if ($checkUsername->hasProfanity() || $checkFullName->hasProfanity() || $checkBio->hasProfanity()) {
            return back()
                ->withInput()
                ->withErrors(['message' => 'Please keep it clean! Inappropriate content detected.']);
        }

        try {
            $user = auth()->user();

            // Handle profile image upload
            if ($request->hasFile('profile_image')) {
                $profilePath = $request->file('profile_image')->store('profile-images', 'public');
                $validated['profile_image_url'] = Storage::url($profilePath);
            }

            // Handle banner image upload
            if ($request->hasFile('banner_image')) {
                $bannerPath = $request->file('banner_image')->store('banner-images', 'public');
                $validated['banner_url'] = Storage::url($bannerPath);
            }

            // Update user profile
            $user->update([
                'username' => $validated['username'],
                'full_name' => $validated['full_name'],
                'bio' => $validated['bio'],
                'dob' => $validated['dob'],
                'gender' => $validated['gender'],
                'profile_image_url' => $validated['profile_image_url'] ?? $user->profile_image_url,
                'banner_url' => $validated['banner_url'] ?? $user->banner_url,
            ]);

            // Update onboarding progress
            $user->onboardingProgress()->updateOrCreate(
                ['step' => 1],
                ['completed_at' => now()]
            );

            return redirect()->route('onboarding.step2');

        } catch (\Exception $e) {
            \Log::error('Onboarding Step 1 Error: ' . $e->getMessage());

            dd($e);
            // return back()
            //     ->withInput()
            //     ->withErrors(['message' => 'An error occurred while saving your profile. Please try again.']);
        }
    }

    public function showStep2()
    {
        return view('pages.onboarding.step2');
    }

    public function saveStep2(Request $request)
    {
        // Validate and save social links
        return redirect()->route('onboarding.step3');
    }

    public function showStep3()
    {
        return view('pages.onboarding.step3');
    }

    public function saveStep3(Request $request)
    {
        // Validate and save additional social links
        return redirect()->route('onboarding.step4');
    }

    public function showStep4()
    {
        return view('pages.onboarding.step4');
    }

    public function saveStep4(Request $request)
    {
        // Validate and save more social links
        return redirect()->route('onboarding.step5');
    }

    public function showStep5()
    {
        return view('pages.onboarding.step5');
    }

    public function saveStep5(Request $request)
    {
        // Validate and save interests and causes
        return redirect()->route('onboarding.step6');
    }

    public function showStep6()
    {
        return view('pages.onboarding.step6');
    }

    public function saveStep6(Request $request)
    {
        // Validate and save content type and audience size
        return redirect()->route('onboarding.step7');
    }

    public function showStep7()
    {
        return view('pages.onboarding.step7');
    }

    public function saveStep7(Request $request)
    {
        // Save group follows and complete onboarding
        return redirect()->route('dashboard');
    }

    public function skip()
    {
        // Mark onboarding as completed but skipped
        return redirect()->route('dashboard');
    }
}
