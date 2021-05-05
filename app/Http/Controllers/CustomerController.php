<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
         $customers = Customer::latest()->paginate(10);

        return view('customer.index',compact('customers'))
            ->with('i',(request()->input('page',1) - 1) * 10);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Nama'              =>  'required',
            'Alamat'            =>  'required',
            'NoTelp'            =>  'required'
        ]);

        $customer = Customer::create([
            'ID_customer'       =>  'S00020--',
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
        $request->validate([
            'ID_customer'       =>  'required',
            'Nama'              =>  'required',
            'Alamat'            =>  'required',
            'NoTelp'            =>  'required'
        ]);

        Customer::where('id', $customer->id)
        ->update([
            'ID_customer'       =>  'ID_customer',
            'Nama'              =>  $request->Nama,
            'Alamat'            =>  $request->Alamat,
            'NoTelp'            =>  $request->NoTelp
        ]);

        return redirect()->route('customer.index')
                        ->with('success','Data Berhasil Disimpan!');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
                        ->with('success','Kuliah Berhasil Dihapus');
    }
}
