<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOnboardingStatus
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && !auth()->user()->onboarding_completed_at) {
            // Check if we're already on an onboarding route
            if (!$request->is('onboarding*')) {
                // Get the user's latest onboarding progress or default to step1
                $latestStep = auth()->user()->onboardingProgress()
                    ->latest()
                    ->first();

                $nextStep = $latestStep ? 'step' . ($latestStep->step + 1) : 'step1';
                
                return redirect()->route($nextStep); // Redirect to the next onboarding step
            }
        }

        return $next($request);
    }
} 