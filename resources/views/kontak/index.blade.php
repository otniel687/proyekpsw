@extends('layouts.defaultone')

@section('title', 'Kontak ')

<!--Navbar-->
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
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{asset('/about')}} ">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/service')}}">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{asset('/registrasi')}}">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{asset('/kontak')}} ">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="{{asset('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br />
@endsection
<!--Akhir Navbar-->

@section('content')
    <h1><b style="margin-left: 160px; color: black">CONTACT US</b></h1>
    <!--informasi -->
    <div class="row justify-content-center">
      <div class="col-md-3 col-lg-3 info-panel2">
        <div class="row text-center">
          <h4>Telepon</h4>
          <i class="bi bi-telephone" style="font-size: 80px"></i>
          <p>+62 890 0807 0980</p>
          <p>+62 989 0976 0865</p>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 info-panel2">
        <div class="row text-center">
          <h3>Alamat</h3>
          <i class="bi bi-geo-alt-fill" style="font-size: 80px"></i>
          <p><br />Jln. Permana percaya</p>
        </div>
      </div>
      <div class="col-md-3 col-lg-3 info-panel2">
        <div class="row text-center">
          <h3>Email</h3>
          <i class="bi bi-envelope" style="font-size: 80px"></i>
          <p><br />Aotlie0789@gmail.com</p>
        </div>
      </div>
    </div>
    <br /><br /><br /><br />
    @endsection
    @section('map')
        <div class="container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3671224869795!2d99.14667841446966!3d2.383292298263138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1618912789403!5m2!1sid!2sid"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      >
      </iframe>
    </div>
    <br /><br />
    @endsection
    

    <!--akhir Informasi-->

    