<?php

namespace App\Http\Controllers\Premium;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PremiumController extends Controller
{
    public function index(): View
    {
        return view('premium.index');
    }

    // Add other premium methods...
}
