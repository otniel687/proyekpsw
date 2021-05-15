@extends('layouts.app')
@section('title', 'Data Customer | Admin')
@section('judul', 'Isi Data Dibawah Ini Dengan Benar !')
@section('content')
    <div class="containerr mt-4">
            <form action="{{ route('customer.update',$customer->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
			<div class="mb-3">
                <label for="ID_customer" class="form-label">ID_Customer</label>
                <p>{{  $customer->ID_customer }}</p>
            </div>
            <div class="mb-3">
               <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama"  name="Nama" value="{{ old('Nama', $customer->Nama) }}">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat"  name="Alamat" value="{{ old('Alamat', $customer->Alamat) }}">
            </div>
            <div class="mb-3">
                <label for="NoTelp" class="form-label">No Handphone</label>
                <input type="text" class="form-control" id="NoTelp" name="NoTelp" value="{{ old('NoTelp', $customer->NoTelp) }}">
            </div><br>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Edit</button>
            </div>
        </form>
    </div>
@endsection