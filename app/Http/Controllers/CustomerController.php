<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
         $customers = Customer::latest()->simplePaginate(5);

        return view('customer.index',compact('customers'))
            ->with('i',(request()->input('page',1) - 1) * 5);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $id = Customer::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'SVC/'.$blt.'/'.$idbaru;

        $this->validate($request,[
            'Nama'              =>  'required',
            'Alamat'            =>  'required',
            'NoTelp'            =>  'required'
        ]);

        $customer = Customer::create([
            'ID_customer'       =>  $no_pengembalian,
            'Nama'              =>  $request->Nama,
            'Alamat'            =>  $request->Alamat,
            'NoTelp'            =>  $request->NoTelp
        ]);
        
        return redirect()->route('customer.index')
                        ->with('success','Data telah Ditambahkan');
    }

    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $id = Customer::getId();
        foreach($id as $value);
        $idlm = $value->id;
        $idbaru = $idlm + 1;
        $blt = date('d-m-y');

        $no_pengembalian = 'SVC/'.$blt.'/'.$idbaru;

        $request->validate([
            'ID_customer'       =>  'required',
            'Nama'              =>  'required',
            'Alamat'            =>  'required',
            'NoTelp'            =>  'required'
        ]);

        Customer::where('id', $customer->id)
        ->update([
            'ID_customer'       =>  $request->$no_pengembalian,
            'Nama'              =>  $request->Nama,
            'Alamat'            =>  $request->Alamat,
            'NoTelp'            =>  $request->NoTelp
        ]);

         return redirect()->route('customer.index')
                        ->with('success','Data telah Ditambahkan');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
                        ->with('success','Data Berhasil Dihapus');
    }
}
