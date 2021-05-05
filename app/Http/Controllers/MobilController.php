<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{

    public function index()
    {
        $mobils = Mobil::latest()->paginate(10);

        return view('mobil.index',compact('mobils'))
            ->with('i',(request()->input('page',1) - 1) * 10);
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
            'Jenis'            =>  'required',
            'Merek'            =>  'required',
            'Plat_Nomor'       =>  'required',
            'Pemilik'         =>  'required',
            'stnk'             =>  'required',
            'keluhan'          =>  'required'
        ]);

        $mobil = Mobil::create([
            'ID_Registrasi'     =>  'S00020--',
            'Jenis'             =>  $request->Jenis,
            'Merek'             =>  $request->Merek,
            'Plat_Nomor'        =>  $request->Plat_Nomor,
            'Pemilik'           =>  $request->Pemilik,
            'stnk'              =>  $request->stnk,
            'keluhan'           =>  $request->keluhan
            ]);
        
        return redirect()->route('mobil.index')
                        ->with('success','Data telah Ditambahkan');
    }

    public function show(Mobil $mobil)
    {
        return view('mobil.show',compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobil.edit',compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
         $request->validate([
            'Jenis'            =>  'required',
            'Merek'            =>  'required',
            'Plat_Nomor'       =>  'required',
            'Pemilik'          =>  'required',
            'stnk'             =>  'required',
            'keluhan'          =>  'required'
        ]);

        Mobil::where('id', $mobil->id)
        ->update([
          'ID_Registrasi'     =>  'S00020--',
            'Jenis'             =>  $request->Jenis,
            'Merek'             =>  $request->Merek,
            'Plat_Nomor'        =>  $request->Plat_Nomor,
            'Pemilik'           =>  $request->Pemilik,
            'stnk'              =>  $request->stnk,
            'keluhan'           =>  $request->keluhan
        ]);

        return redirect()->route('mobil.index')
                        ->with('success','Data Berhasil Disimpan!');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobil.index')
                        ->with('success','Kuliah Berhasil Dihapus');
    }
}
