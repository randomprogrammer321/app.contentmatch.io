<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Blaspsoft\Blasp\Facades\Blasp;
use App\Models\Platform;
use App\Models\Interest;

class OnboardingController extends Controller
{
    public function showStep1()
    {
       

        return view('pages.onboarding.step1');
    }

    public function saveStep1(Request $request)
    {
        try {
            // Log incoming request data
            \Log::info('Step 1 Request Data:', [
                'all_data' => $request->all()
            ]);

            $validated = $request->validate([
                'username' => [
                    'required',
                    'string',
                    'max:30',
                    'unique:users,username,' . auth()->id(),
                    'regex:/^[a-zA-Z0-9_]+$/',
                    'blasp_check',
                ],
                'full_name' => [
                    'required',
                    'string',
                    'max:50',
                    'blasp_check',
                ],
                'bio' => [
                    'nullable',
                    'string',
                    'max:160',
                    'blasp_check',
                ],
                'dob' => [
                    'required',
                    'date',
                    'before:' . Carbon::now()->subYears(13)->format('Y-m-d'),
                ],
                'gender' => [
                    'required',
                    Rule::in(['male', 'female', 'other']),
                ],
                'profile_image' => [
                    'nullable',
                    'image',
                    'max:5120',
                    'mimes:jpeg,png,jpg,gif',
                ],
                'banner_image' => [
                    'nullable',
                    'image',
                    'max:5120',
                    'mimes:jpeg,png,jpg,gif',
                ],
            ]);

            // Log validated data
            \Log::info('Step 1 Validated Data:', [
                'validated' => $validated
            ]);

            // Additional profanity check with Blasp
            $checkUsername = Blasp::check($validated['username']);
            $checkFullName = Blasp::check($validated['full_name']);
            $checkBio = Blasp::check($validated['bio']);

            if ($checkUsername->hasProfanity() || $checkFullName->hasProfanity() || $checkBio->hasProfanity()) {
                \Log::warning('Profanity detected in Step 1:', [
                    'username_profanity' => $checkUsername->hasProfanity(),
                    'fullname_profanity' => $checkFullName->hasProfanity(),
                    'bio_profanity' => $checkBio->hasProfanity()
                ]);
                
                return back()
                    ->withInput()
                    ->withErrors(['message' => 'Please keep it clean! Inappropriate content detected.']);
            }

            $user = auth()->user();

            // Map gender values to database format
            $genderMap = [
                'male' => 'M',
                'female' => 'F',
                'other' => 'OTHER'
            ];

            // Log file uploads if present
            if ($request->hasFile('profile_image')) {
                \Log::info('Profile image present');
                $profilePath = $request->file('profile_image')->store('profile-images', 'public');
                $validated['profile_image_url'] = Storage::url($profilePath);
            }

            if ($request->hasFile('banner_image')) {
                \Log::info('Banner image present');
                $bannerPath = $request->file('banner_image')->store('banner-images', 'public');
                $validated['banner_url'] = Storage::url($bannerPath);
            }

            // Log data before update
            \Log::info('About to update user:', [
                'user_id' => $user->id,
                'update_data' => [
                    'username' => $validated['username'],
                    'full_name' => $validated['full_name'],
                    'bio' => $validated['bio'],
                    'dob' => $validated['dob'],
                    'gender' => $genderMap[$validated['gender']],
                    'profile_image_url' => $validated['profile_image_url'] ?? $user->profile_image_url,
                    'banner_url' => $validated['banner_url'] ?? $user->banner_url,
                ]
            ]);

            // Update user profile
            $updated = $user->update([
                'username' => $validated['username'],
                'full_name' => $validated['full_name'],
                'bio' => $validated['bio'],
                'dob' => $validated['dob'],
                'gender' => $genderMap[$validated['gender']],
                'profile_image_url' => $validated['profile_image_url'] ?? $user->profile_image_url,
                'banner_url' => $validated['banner_url'] ?? $user->banner_url,
            ]);

            // Log update result
            \Log::info('User update result:', [
                'success' => $updated,
                'user_after_update' => $user->fresh()->toArray()
            ]);

            // Update onboarding progress
            $progress = $user->onboardingProgress()->updateOrCreate(
                ['step' => 1],
                ['completed_at' => now()]
            );

            \Log::info('Onboarding progress updated:', [
                'progress' => $progress->toArray()
            ]);

            return redirect()->route('step2');

        } catch (\Exception $e) {
            \Log::error('Onboarding Step 1 Error:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);
            
            return back()
                ->withInput()
                ->withErrors(['message' => 'Error updating profile: ' . $e->getMessage()]);
        }
    }

    public function showStep2()
    {
        return view('pages.onboarding.step2');
    }

    public function saveStep2(Request $request)
    {
        try {
            $validated = $request->validate([
                'instagram_url' => [
                    'nullable',
                    'url',
                    'regex:/^https?:\/\/(www\.)?instagram\.com\/.*$/',
                ],
                'youtube_url' => [
                    'nullable',
                    'url',
                    'regex:/^https?:\/\/(www\.)?(youtube\.com|youtu\.be)\/.*$/',
                ],
                'tiktok_url' => [
                    'nullable',
                    'url',
                    'regex:/^https?:\/\/(www\.)?(tiktok\.com|vm\.tiktok\.com)\/.*$/',
                ],
                'discord_url' => [
                    'nullable',
                    'url',
                    'regex:/^https?:\/\/(www\.)?(discord\.gg|discord\.com)\/.*$/',
                ],
                'twitter_url' => [
                    'nullable',
                    'url',
                    'regex:/^https?:\/\/(www\.)?twitter\.com\/.*$/',
                ],
            ]);

            $user = auth()->user();
            $updates = [];

            foreach ($validated as $urlKey => $url) {
                if (!empty($url)) {
                    $platformName = str_replace('_url', '', $urlKey);
                    $platform = Platform::where('name', $platformName)->first();
                    
                    if ($platform) {
                        $updates[$platform->id] = [
                            'platform_url' => $url,
                            'verified_at' => null
                        ];
                    }
                }
            }

            $user->platforms()->syncWithoutDetaching($updates);

            $progress = $user->onboardingProgress()->updateOrCreate(
                ['step' => 2],
                ['completed_at' => now()]
            );

            return redirect()->route('step3');

        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->withErrors(['message' => 'Error saving social links: ' . $e->getMessage()]);
        }
    }

    public function showStep3()
    {
        return view('pages.onboarding.step3');
    }

    public function saveStep3(Request $request)
    {
        try {
            $validated = $request->validate([
                'interests' => ['required', 'array', 'min:1'],
                'interests.*' => ['exists:interests,id']
            ]);

            $user = auth()->user();
            
            // Sync the selected interests
            $user->interests()->sync($validated['interests']);

            // Update onboarding progress
            $user->onboardingProgress()->updateOrCreate(
                ['step' => 3],
                ['completed_at' => now()]
            );

            return redirect()->route('step4');

        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->withErrors(['message' => 'Error saving interests: ' . $e->getMessage()]);
        }
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
