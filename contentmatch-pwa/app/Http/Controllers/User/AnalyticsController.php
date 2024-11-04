<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function show(): View
    {
        // Fetch user analytics data
        // ...

        return view('user.analytics.show', [
            'analyticsData' => $analyticsData
        ]);
    }
}
