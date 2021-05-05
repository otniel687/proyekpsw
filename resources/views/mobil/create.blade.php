<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data Mobil</title>
    <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('css/simple-sidebar.css')}} " rel="stylesheet">
    <a href="https://icons8.com/icon/he8U4VPWGpWe/"></a>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/881c7896df.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand mt-3">
                    <h3 href="view.php">
                        Aotlie Service
                    </h3>
                </li>
                <li>
                    <a href="{{asset('/')}} ">Home</a>
                </li>
                <li>
                    <a href="{{asset('admin/customer')}}">Customer</a>
                </li>
                <li>
                    <a href="{{asset('admin/mobil')}}">Mobil</a>
                </li>
                <li>
                    <a href="{{asset('')}}">Log Out</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <h1>Tambahkan Data Mobil</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-4">
            <a href="{{asset('admin/mobil')}} " class="btn btn-warning">Kembali ke daftar Mobil</a><br><br>
            <form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="Jenis" class="form-label">Jenis Mobil</label>
                <input type="text" class="form-control" id="Jenis" name="Jenis" placeholder="Input Jenis Mobil">
            </div>
            <div class="mb-3">
                <label for="Merek" class="form-label">Merek</label>
                <input class="form-control" id="Merek" name="Merek" placeholder="Input Merek Mobil">
            </div>
            <div class="mb-3">
                <label for="Plat_Nomor" class="form-label">Plat Nomor Kendaraan</label>
                <input class="form-control" id="Plat_Nomor" name="Plat_Nomor" placeholder="Input Plak Nomor Kendaraan Mobil">
            </div>
            <div class="mb-3">
                <label for="Pemilik" class="form-label">Pemilik Kendaraan </label>
                <input class="form-control" id="Pemilik" name="Pemilik" placeholder="Input Pemilik Kendaraan">
            </div>
            <div class="mb-3">
                <label for="stnk" class="form-label">No. STNK</label>
                <input class="form-control" id="stnk" name="stnk" placeholder="Input Keluhan Mobil">
            </div>
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                 <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" rows="5" placeholder="Masukkan Konten Blog">{{ old('keluhan') }}</textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset" name="submit">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</div>
</html>