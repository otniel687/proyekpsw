@extends('layouts.defaultone')

@section('title', 'Service')
    
@section('navbar')
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
            <ul class="navbar-nav ms-auto mb-2">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{asset('/about')}} ">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{asset('/service')}} ">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/registrasi')}} ">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/kontak')}} ">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="{{asset('login')}} ">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br /><br />
@endsection
    
@section('content')
 <div class="row justify-content ms-5 kuntul">
      <h2>Service</h2>
    </div>

    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('css/Image/service1.jpeg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h1>Tune Up</h1>
            <div class="mb-3">
              <img src="https://img.icons8.com/wired/64/000000/car-service.png" style="font-size: 70px" />
            </div>
            <div class="info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.150.000</strong>
              </h4>
            </div>
            <p class="lead mb-0">Layanan servis mobil yang membersihkan bagian filter udara, busi, timing belt, filter bahan bakar, klep, dan karburator.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('css/Image/service2.jpeg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h1>Ganti Oli</h1>
            <div class="mb-3">
              <img src="https://img.icons8.com/wired/64/000000/oil-industry.png" style="font-size: 70px" />
            </div>
            <div class="info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.80.000</strong>
              </h4>
            </div>
            <p class="lead mb-0">Layanan Ganti Oli mobil yang berfungsi meredam panas saat pengereman dan oli power steering yang digunakan pada stir mobil.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('css/Image/service3.jpeg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h1>Service AC</h1>
            <div class="mb-3">
              <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v3 text-center.png style=" style="font-size: 70px" />
            </div>
            <div class="info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.300.000</strong>
              </h4>
            </div>
            <p class="lead mb-0">Layanan Servis AC terdiri dari pemasangan atau penggantian ac dan juga pengisian ulang freon agar ac kembali dingin.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('css/Image/service4.jpeg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h1>Pemasangan Audio Mobil</h1>
            <div class="mb-3">
              <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v3 text-center.png style=" style="font-size: 70px" />
            </div>
            <div class="info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.600.000</strong>
              </h4>
            </div>
            <p class="lead mb-0">Layanan Servis Audio Mobil yaitu untuk memperbaiki audio yang rusak atau memodifikasi audio agar menghasilkan suara yang lebih jernih.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('css/Image/service5.jpeg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h1>Overhaul</h1>
            <div class="mb-3">
              <img src="https://img.icons8.com/dotty/80/000000/car-fire.png" style="font-size: 70px" />
            </div>
            <div class="info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.500.000</strong>
              </h4>
            </div>
            <p class="lead mb-0">Layanan Overhaul ini servis mobil berupa proses turun mesin yang menunjukkan bahwa harus dilakukan saat mesin mobil tidak memiliki tenaga.</p>
          </div>
        </div>
      </div>
    </section>
@endsection
  
