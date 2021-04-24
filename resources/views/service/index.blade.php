@extends('layouts.defaultone')

@section('title', 'service')
    
@section('navbar')
    <header>
      <nav class="navbar navbar-expand-lg navbar-inverse navbar-light">
        <div class="container">
          <a class="navbar-brand" href="{{asset('/')}} ">
            <h1>AOTLIE Service</h1>
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

    <div class="text-center">
      <div class="row justify-content-left">
        <div class="col-sm-3 info-paneel">
          <div class="d-flex justify-content-center text-center figure">
            <img src="css/Image/service1.jpeg" rowspan="5" colspan="5" alt="" class="img-infopaneel" width="450px" height="250px" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-md-5 ms-5 mt-1 mb-3">
              <h3>Tune Up</h3>
              <img src="https://img.icons8.com/wired/64/000000/car-service.png" style="font-size: 70px" />
            </div>
            <div class="col-md-6 mt-1 info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.150.000</strong>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col ms-5 mt-md-4 mb-5">
              <h4>Layanan servis mobil yang membersihkan bagian filter udara, busi, timing belt, filter bahan bakar, klep, dan karburator.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-left">
        <div class="col-sm-3 info-paneel">
          <div class="d-flex justify-content-center text-center figure">
            <img src="css/Image/service2.jpeg" rows="5" alt="" class="img-infopaneel" width="450px" height="250px" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-md-5 ms-5 mt-1 mb-3">
              <h3>Ganti Oli</h3>
              <img src="https://img.icons8.com/wired/64/000000/oil-industry.png" style="font-size: 70px" />
            </div>
            <div class="col-md-6 mt-1 info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.80.000</strong>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col ms-5 mt-md-4 mb-5">
              <h4>Layanan Ganti Oli mobil yang berfungsi meredam panas saat pengereman dan oli power steering yang digunakan pada stir mobil.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-left">
        <div class="col-sm-3 info-paneel">
          <div class="d-flex justify-content-center text-center figure">
            <img src="css/Image/service3.jpeg" rows="5" alt="" class="img-infopaneel" width="450px" height="250px" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-md-5 ms-5 mt-1 mb-3">
              <h3>Service AC</h3>
              <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v3 text-center.png style=" style="font-size: 70px" />
            </div>
            <div class="col-md-6 mt-1 info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.300.000</strong>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col ms-5 mt-md-4 mb-5">
              <h4>Layanan Servis AC terdiri dari pemasangan atau penggantian ac dan juga pengisian ulang freon agar ac kembali dingin.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-left">
        <div class="col-sm-3 info-paneel">
          <div class="d-flex justify-content-center text-center figure">
            <img src="css/Image/service4.jpeg" rows="5" alt="" class="img-infopaneel" width="450px" height="250px" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-md-5 ms-5 mt-1 mb-3">
              <h3>Pemasangan Audio Mobil</h3>
              <img src="https://img.icons8.com/pastel-glyph/64/000000/air-conditioner--v3 text-center.png style=" style="font-size: 70px" />
            </div>
            <div class="col-md-6 mt-1 info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.600.000</strong>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col ms-5 mt-md-4 mb-5">
              <h4>Layanan Servis Audio Mobil yaitu untuk memperbaiki audio yang rusak atau memodifikasi audio agar menghasilkan suara yang lebih jernih.</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-left">
        <div class="col-md-3 col-lg-3 info-paneel">
          <div class="d-flex justify-content-center text-center figure">
            <img src="css/Image/service5.jpeg" rows="5" alt="" class="img-infopaneel" width="450px" height="250px" />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="row">
            <div class="col-md-5 ms-5 mt-1 mb-3">
              <h3>Overhaul</h3>
              <img src="https://img.icons8.com/dotty/80/000000/car-fire.png" style="font-size: 70px" />
            </div>
            <div class="col-md-6 mt-1 info-panell d-flex align-center">
              <h4>
                Harga mulai dari
                <strong>Rp.500.000</strong>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col ms-5 mt-md-4 mb-5">
              <h4>Layanan Overhaul ini servis mobil berupa proses turun mesin yang menunjukkan bahwa harus dilakukan saat mesin mobil tidak memiliki tenaga.</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
    
@endsection
  
