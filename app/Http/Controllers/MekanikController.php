<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MekanikController extends Controller
{

    public function index()
    {
        $mobils = Mobil::latest()->simplePaginate(5);

        return view('mekanik.index',compact('mobils'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Mobil $mobil)
    {
        return view('mekanik.show',compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        //
    }

    public function update(Request $request, Mobil $mobil)
    {
        //
    }

    public function destroy(Mobil $mobil)
    {
        //
    }
}
