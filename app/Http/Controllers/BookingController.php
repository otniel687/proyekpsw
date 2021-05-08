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
        $id = Customer::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'SVC/'.$blt.'/'.$idbaru;

        $data = $request->all();
        // dd($data);
        $customer = new Customer;
        $customer->id = $data['id'];
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
        $mobil->id = $customer->id;
        $mobil->Jenis = $data['Jenis'];
        $mobil->Merek = $data['Merek'];
        $mobil->Plat_Nomor = $data['Plat_Nomor'];
        $mobil->Pemilik = $data['Pemilik'];
        $mobil->stnk = $data['stnk'];
        $mobil->keluhan = $data['keluhan'];
        $mobil->save();

        return redirect()->back()->with('status','Data Berahasil Dimasukkan');
    }
}

