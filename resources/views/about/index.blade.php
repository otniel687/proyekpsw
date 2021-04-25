<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="css/Image/logo.jpeg" />
    <title>About | AOTLIE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--Style CSS-->
    <link rel="stylesheet" href="css/style.css" />
    <!--Style Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
</head>
<body background="css/Image/background.jpg" style="background-repeat: no-repeat; background-size: 100%">
  <!--Navbar-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{asset('/')}} ">
          <h1><img src="css/Image/logo.jpeg" class="rounded-circle" style="width: 45px" alt="" />AOTLIE Service</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{asset('/tentang')}} ">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/service')}} ">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/registrasi')}}">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/kontak')}} ">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="{{asset('/login')}}l">Login</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <H2><br>Informasi Singkat</H2><br>
    <div class="row pagging">
      <div class="col m-4">
      <p>Aotlie Service merupakan salah satu servis mobil yang berada di Laguboti, Toba, Sumatera Utara. Bengkel ini berdiri pada tahun 2011 yang dikelola oleh Jeremy Parasian Wibowo
        dengan Dita Sarah. Seiring berkembangnya waktu, dibarengi dengan kemampuan montirnya yang baik serta pelayanan yang ramah, bengkel Aotlie berkembang dengan pesat. Aotlie dapat 
        mengatasi berbagai masalah pada mobil, seperti tone-up, ganti oli, servis AC, overhaul, dan lainnya, pastinya dengan hasil yang memuaskan. Keberhasilan Aotlie Service dalam 
        memuaskan atau mengatasi keluhan pelanggan didasari dengan adanya komitmen dan terus mengikuti perkembangan teknologi pada industri otomotif.<br><br>
        Sekarang, masyarakat dapat mendaftarkan kendala pada mobil melalui website ini, dengan melakukan registrasi online dalam form yang telah disediakan. Jika belum paham, atau 
        mengalami kesulihan dalam melakukan registrasi, teman-teman dapat datang ke tempat agar administrator membantu dalam melakukan registrasi.</p>
    </div>
    </div>

    <H2><br>Fasilitas</H2><br>
    <section class="call-to-action">
      <div class="row">
        <div class="col-md-6"><img src="css/Image/area luas.jpg" width="455" height="250" style="border-radius: 20px;">
          <div class="textgambar">
            <h4>Memiliki Area yang Luas</h4>
          </div>
        </div>
        <div class="col-md-6"><img src="css/Image/Peralatan.jpg" width="455" height="250" style="border-radius: 20px;">
          <div class="textgambar">
            <h4>Peralatan yang Lengkap</h4>
          </div>
        </div>
      </div>
    </section><br>

    <section class="call-to-action">
      <div class="row">
        <div class="col-md-6"><img src="css/Image/mekanik.jpg" width="455" height="250" style="border-radius: 20px;">
          <div class="textgambar">
            <h4>Mekanik yang Handal</h4>
          </div>
        </div>
        <div class="col-md-6"><img src="css/Image/pelayanan.jpg" width="455" height="250" style="border-radius: 20px;">
          <div class="textgambar">
            <h4>Pelayanan yang Ramah</h4>
          </div>
        </div>
      </div>
    </section><br>
      
  <div id="footer" class="text-center">
    <p>&copy;Copyright By Aotlie | 2021</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous">
  </script>
</body>
</html>