<?php

namespace App\Http\Controllers;

use App\Models\AudienceSize;
use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function showStep4()
    {
        $audienceSizes = AudienceSize::where('is_active', true)->get();
        
        return view('pages.onboarding.step4', compact('audienceSizes'));
    }
} 