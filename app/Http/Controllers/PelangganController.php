<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class PelangganController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('customer');
    // }
    public function index()
    {
        return ('Halaman ini untuk Customer');
    }


}