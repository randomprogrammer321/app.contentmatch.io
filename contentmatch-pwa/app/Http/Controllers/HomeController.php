<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index(): View
    {
        return view('pages.home.index');
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return redirect()->to('https://contentmatch.io/about');

    }
    /**
     * Show the contact page.
     */
    public function privacy()
    {
        return redirect()->away('https://contentmatch.io/privacy');
    }

    /**
     * Show the terms page.
     */
    public function terms()
       {
        return redirect()->away('https://contentmatch.io/eula');
    }
}
