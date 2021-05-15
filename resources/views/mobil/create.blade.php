@extends('layouts.app')
@section('title', 'Data Mobil | Admin')
@section('judul', 'Isi Data Dibawah Ini Dengan Benar ')

@section('content')
    <div class="containerr mt-4">
            <a href="{{asset('admin/mobil')}} " class="btn btn-warning">Kembali ke daftar Mobil</a><br><br>
            <form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Jenis" class="form-label">Jenis Mobil</label>
                <input type="text" class="form-control" id="Jenis" name="Jenis" placeholder="Input Jenis Mobil">
                @error('Jenis')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
            </div>
            <div class="mb-3">
                <label for="Merek" class="form-label">Merek</label>
                <input class="form-control" id="Merek" name="Merek" placeholder="Input Merek Mobil">
                @error('Merek')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
            </div>
            <div class="mb-3">
                <label for="Plat_Nomor" class="form-label">Plat Nomor Kendaraan</label>
                <input class="form-control" id="Plat_Nomor" name="Plat_Nomor" placeholder="Input Plak Nomor Kendaraan Mobil">
                @error('Plat_Nomor')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
            </div>
            <div class="mb-3">
                <label for="Pemilik" class="form-label">Pemilik Kendaraan </label>
                <input class="form-control" id="Pemilik" name="Pemilik" placeholder="Input Pemilik Kendaraan">
                @error('Pemilik')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
            </div>
            <div class="mb-3">
                <label for="stnk" class="form-label">No. STNK</label>
                <input class="form-control" id="stnk" name="stnk" placeholder="Masukkan No. STNK Mobil">
                @error('stnk')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                 <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" rows="5" placeholder="Masukkan Keluhan Mobil">{{ old('keluhan') }}</textarea>
                 @error('keluhan')
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