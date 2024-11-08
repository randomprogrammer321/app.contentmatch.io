<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOnboardingStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $user = auth()->user();

            // If onboarding is completed and trying to access onboarding pages
            if ($user->onboarding_completed_at && $request->is('onboarding*')) {
                return redirect()->route('settings.index');
            }

            // If onboarding is not completed and trying to access non-onboarding pages
            if (!$user->onboarding_completed_at && !$request->is('onboarding*')) {
                return redirect()->route('step1');
            }
        }

        return $next($request);
    }
} 