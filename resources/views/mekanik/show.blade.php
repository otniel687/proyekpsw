@extends('layouts.app')
@section('title','Daftar Mobil | Mekanik')
@section('judul','Data Mobil Aotlie Service')
@section('content')
    <div class="container">
        <br><a href="{{asset('mekanik')}} " class="btn btn-warning">Kembali ke daftar Mobil</a><br><br>
            <table>
                <form action="" method="post" enctype="multipart/form-data" class="row">
                    <div class="mb-3">
                        <label for="Jenis" class="form-label"><strong>Jenis</strong></label><br>
                        <p>{{ $mobil->Jenis }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="Merek" class="form-label"><strong>Merek</strong></label>
                        <p>{{ $mobil->Merek }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="Plat_Nomor" class="form-label"><strong>Plat Nomor Kendaraan</strong> </label>
                        <p>{{ $mobil->Plat_Nomor }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="Pemilik" class="form-label"><strong>Pemilik Kendaraan</strong> </label>
                        <p>{{ $mobil->Pemilik }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="stnk" class="form-label"><strong>No. STNK</strong> </label>
                        <p >{{ $mobil->stnk }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label"><strong>Masalah dalam Mobil</strong> </label>
                        <p class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Blog">{{ $mobil->keluhan }}</p>
                    </div>
                </form>
            </table>
        </div>
@endsection
