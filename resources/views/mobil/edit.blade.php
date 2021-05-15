@extends('layouts.app')
@section('title', 'Daftar Mobil | Admin')
@section('judul', 'Isi Data Dibawah Ini Dengan Benar')
    
@section('content')
     <div class="containerr mt-4">
            <a href="{{asset('admin/mobil')}} " class="btn btn-warning">Kembali ke daftar Mobil</a><br><br>

            <form action="{{ route('mobil.update',$mobil->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
			<div class="mb-3">
                <label for="Jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="Jenis" name="Jenis" value="{{ old('Jenis', $mobil->Jenis) }}">
            </div>
            <div class="mb-3">
                <label for="Merek" class="form-label">Merek</label>
                <input type="text" class="form-control" id="Merek" name="Merek" value="{{ old('Merek', $mobil->Merek) }}">
            </div>
            <div class="mb-3">
                <label for="Plat_Nomor" class="form-label">Plat Nomor Kendaraan</label>
                <input type="text" class="form-control" id="Plat_Nomor" name="Plat_Nomor" value="{{ old('Plat_Nomor', $mobil->Plat_Nomor) }}">
            </div>
            <div class="mb-3">
                <label for="Pemilik" class="form-label">Pemilik Kendaraan</label>
                <input type="text" class="form-control" id="Pemilik" name="Pemilik" value="{{ old('Pemilik', $mobil->Pemilik) }}">
            </div>
        <div class="mb-3">
                <label for="stnk" class="form-label">No. STNK</label>
                <input class="form-control" id="stnk" name="stnk"  value="{{ old('stnk', $mobil->stnk) }}">
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                    <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" rows="5" placeholder="Masukkan Konten Blog">{{ old('keluhan', $mobil->Pemilik) }}</textarea>
            </div>
            <div class="text-center">
                    <button class="btn btn-danger text-white" type="reset">Reset</button>
                    <button class="btn btn-info text-white" type="submit" name="submit">Edit</button>
            </div>
        </form>
    </div>
@endsection