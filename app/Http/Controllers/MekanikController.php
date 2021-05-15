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

    public function show(Mobil $mobil, $id)
    {
      $mobil = Mobil::find($id);

	    return view('mekanik.show',compact('mobil'));
    }

  
}
