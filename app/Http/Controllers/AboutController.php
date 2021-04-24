<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function tentang()
    {
        return view('about.index');
    }
    public function regis()
    {
        return view('registrasi.registration');
    }
}
