<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
     public function kontak()
    {
        return view('kontak.index');
    }
    public function tentang()
    {
        return view('about.index');
    }
}
