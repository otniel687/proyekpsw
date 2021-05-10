<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobil;

class BookingController extends Controller
{
    public function index()
    {
        return view('registrasi.registration');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $id = Customer::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'SVC/'.$blt.'/'.$idbaru;

        // dd($data);
        
        $customer = new Customer;
        $customer->ID_customer = $no_pengembalian; 
        $customer->Nama = $data['Nama'];
        $customer->Alamat = $data['Alamat'];
        $customer->NoTelp = $data['NoTelp'];
        $customer->save();

        $id = Mobil::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'MBL/'.$blt.'/'.$idbaru;

        $mobil = new Mobil;
        $mobil->ID_Registrasi = $no_pengembalian;
        $mobil->Jenis = $data['Jenis'];
        $mobil->Merek = $data['Merek'];
        $mobil->Plat_Nomor = $data['Plat_Nomor'];
        $mobil->Pemilik = $data['Pemilik'];
        $mobil->stnk = $data['stnk'];
        $mobil->keluhan = $data['keluhan'];
        $mobil->save();

        return redirect()->back()->with('status','Data Berhasil Dimasukkan');
        
    }
}

