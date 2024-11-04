<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
       return $this->profile();
    }

    public function profile()
    {
        return view('pages.settings.profile');
    }

    public function notifications()
    {
        return view('pages.settings.notifications');
    }

    public function languages()
    {
        return view('pages.settings.languages');
    }

    public function billing()
    {
        return view('pages.settings.billing');
    }

    public function blocked()
    {
        return view('pages.settings.blocked');
    }

    public function deactivate()
    {
        return view('pages.settings.deactivate');
    }
}
