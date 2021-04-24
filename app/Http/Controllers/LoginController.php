<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function admin()
    {
        return view('login.admin');
    }
    public function mekanik()
    {
        return view('login.mekanik');
    }
    public function customer()
    {
        return view('login.customer');
    }
}
