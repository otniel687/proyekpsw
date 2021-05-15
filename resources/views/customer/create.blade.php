@extends('layouts.app')
@section('title', 'Daftar Customer | Admin')
@section('judul', 'Isi Data Dibawah Ini Dengan Benar!')
@section('content')
     <div class="containerr mt-4">
            <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
             @csrf
			<div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Input Nama Customer">
				@error('Nama')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Input Alamat Customer">
				@error('Alamat')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="mb-3">
                <label for="NoTelp" class="form-label">No Telepon</label>
                <input class="form-control" id="NoTelp" name="NoTelp" placeholder="Input No Handphone Customer">
				@error('NoTelp')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset" name="submit">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Tambahkan</button>
            </div>
        </form>
    </div>
@endsection