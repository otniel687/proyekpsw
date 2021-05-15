<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{

    public function index()
    {
        $mobils = Mobil::latest()->simplePaginate(5);

        return view('mobil.index',compact('mobils'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $id = Mobil::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'MBL/'.$blt.'/'.$idbaru;

         $this->validate($request,[
             'Plat_Nomor'       =>  'required | string | min:3 | max:100',
             'Pemilik'         =>   'required | string | min:3 | max:100',
             'Merek'            =>  'required | string | min:3 | max:100',
             'stnk'             =>  'required | string | min:3 | max:100',
             'keluhan'          =>  'required | string | min:3 | max:255',
             'Jenis'            =>  'required | string | min:3 | max:100 '
        ]);

        $mobil = Mobil::create([
            'ID_Registrasi'     =>  $no_pengembalian,
            'Jenis'             =>  $request->Jenis,
            'Merek'             =>  $request->Merek,
            'Plat_Nomor'        =>  $request->Plat_Nomor,
            'Pemilik'           =>  $request->Pemilik,
            'stnk'              =>  $request->stnk,
            'keluhan'           =>  $request->keluhan
            ]);
        
        return redirect()->route('mobil.index')
                        ->with('success', 'Data telah Ditambahkan');
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
        $id = Mobil::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'MBL/'.$blt.'/'.$idbaru;

         $request->validate([
            'Jenis'            =>  'required | string | min:3 | max:100',
            'Merek'            =>  'required | string | min:3 | max:100',
            'Plat_Nomor'       =>  'required | string | min:3 | max:100',
            'Pemilik'          =>  'required | string | min:3 | max:100',
            'stnk'             =>  'required | string | min:3 | max:255',
            'keluhan'          =>  'required | string | min:3 | max:100 '
        ]);

        Mobil::where('id', $mobil->id)
        ->update([
          'ID_Registrasi'       =>  $no_pengembalian,
            'Jenis'             =>  $request->Jenis,
            'Merek'             =>  $request->Merek,
            'Plat_Nomor'        =>  $request->Plat_Nomor,
            'Pemilik'           =>  $request->Pemilik,
            'stnk'              =>  $request->stnk,
            'keluhan'           =>  $request->keluhan
        ]);

        return redirect()->route('mobil.index')
                        ->with('success','Data telah Diubah');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobil.index')
                        ->with('success','Data Berhasil Dihapus');
    }
}
