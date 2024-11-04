<?php

namespace App\Http\Controllers\Collaboration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CollaborationController extends Controller
{
    public function index(): View
    {
        return view('collaborations.index');
    }

    // Add other collaboration methods...
}
