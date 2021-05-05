<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="{{asset('css/Image/logo.jpeg')}} " />
    <title>Home | AOTLIE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!--Style CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <!--Style Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  </head>
  <body>
    
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
                <a class="nav-link" aria-current="page" href="{{asset('/about')}} ">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/service')}} ">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/registrasi')}} ">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{url('/kontak')}} ">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="{{asset('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!--Akhir Navbar-->

    <!--Header-->
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading">Jujur, Berkualitas dan Terjangkau</div>
        <div class="masthead-heading text-uppercase">Menjamin kenyamanan Anda</div>
        <a class="btn btn-primary btn-xl text-uppercase tekan" href="{{asset('login')}} ">Mari Bergabung</a>
      </div>
    </header>

    <!--Akhir Header-->

    <!--informasi -->
    <div class="row justify-content-center">
      <div class="col-md-3 col-lg-3 info-panel">
        <div class="row text-center">
          <i class="bi bi-tools" style="font-size: 80px"></i>
          <h4>Mekanik Berpengalaman</h4>
          <p>Kami memiliki mekanik yang berpengalaman dengan keahlian khusus sesuai bidang yang ditekuninya</p>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 info-panel">
        <div class="row text-center">
          <i class="bi bi-clock-history" style="font-size: 80px"></i>
          <h3>Layanan 24 Jam</h3>
          <p>Kami siap dan siaga melayani anda. Kapanpun anda membutuhkan jasa kami akan kami layani.</p>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 info-panel">
        <div class="row text-center">
          <i class="bi bi-person-fill" style="font-size: 80px"></i>
          <h3>Montir Panggilan</h3>
          <p>Kapanpun anda membutuhkan jasa perbaikan mobil. Kami akan mendatangi tempat anda berada</p>
        </div>
      </div>
    </div>
    <!--akhir Informasi-->

    <!--isi-->
    <section class="text-center" style="margin-top: 100px; margin-bottom: 50px">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Kemudahan Dalam Satu Platform</h1>
          </div>
        </div>
        <div class="row ms-4">
          <div class="col">
            <p>
              Kami menyediakan proses layanan cepat di Tempat Service kami. Aotlie adalah salah satu tempat service mobil terbaik yang masuk akal, tempat kami dapat memperbaiki hampir semua model mobil. Layanan kami meliputi perbaikan /
              penggantian layar sentuh, perbaikan kerusakan cairan dan air, perbaikan kerusakan dan kerusakan fisik, Service AC, Ganti Oli, Tune Up, Overhaul. Dan dikerjakan dengan cepat dan tepat. Jadi jangan sungkan sungkan untuk
              menggunakan layanan kami di Aotlie Service.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--Akhir isi-->

    <div class="container" style="margin-bottom: 100px">
      <div class="card mt-4">
        <img class="card-img-top img-fluid" src="css/Image/service.jpg" alt="..." />
        <div class="card-body">
          <h3 class="card-title">Sejarah AOTLIE</h3>
          <p class="card-text">
            Aotlie Service merupakan salah satu servis mobil yang berada di Laguboti, Toba, Sumatera Utara. Bengkel ini berdiri pada tahun 2011 yang dikelola oleh Jeremy Parasian WIbowo dengan Dita Sarah. Seiring berkembangnya waktu,
            dibarengi dengan kemampuan montirnya yang baik serta pelayanan yang ramah,
            <a href="{{asset('/about')}} ">Selengkapnya</a>
          </p>
        </div>
      </div>
    </div>
    <!--Akhir Penting -->

    <!--Footer-->
    <div id="footer" class="text-center">
      <p>&copy;Copyright By Aotlie | 2021</p>
    </div>
    <!--Akhir Footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/91f0fcadf9.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
