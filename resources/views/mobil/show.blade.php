<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>View Detail Data Mobil</title>
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
                    <a href="{{route('logout')}}">Log Out</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <h1>Data Mobil Aotlie Service</h1>
                    </div>
                </div>
            </div>
            <br><br>
    <div class="container">
    <br><a href="{{asset('admin/mobil')}} " class="btn btn-warning">Kembali ke daftar Mobil</a><br><br>
    <table>
    <form action="" method="post" enctype="multipart/form-data" class="row">
        <div class="mb-3">
            <label for="Jenis" class="form-label"><strong>Jenis</strong> </label><br>
            <p>{{ $mobil->Jenis }}</p>
        </div>
        <div class="mb-3">
            <label for="Merek" class="form-label"><strong>Merek</strong> </label>
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
</div>
    </div>
 <script src="{{asset('js/jquery.js')}} "></script>
<script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
