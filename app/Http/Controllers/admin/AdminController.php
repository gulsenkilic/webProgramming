<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function redirectToLogin()
    {
        return redirect()->route('adminLoginPage');
    }
    public function logout()
    {
        return redirect()->route('homepage');
    }
    public function dashboard()
    {
        return  view('admin.dashboard');

    }
}
