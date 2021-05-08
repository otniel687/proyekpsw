<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{asset('css/Image/logo.jpeg')}} " />
    <title>Registration | AOTLIE</title>
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
                <a class="nav-link" aria-current="page" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/service')}}">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/registrasi')}}">Registration</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/kontak')}}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-item btn btn-primary tombol" href="{{url('login')}}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <br />
    <div class="container judul">
      <h2>&nbsp;Booking Service</h2>
    </div>
    <div class="container">
      <section class="regis ">
        
        <div class="row" >

          <div class="col-md-5" >
            <h3>Personal Information</h3>
              <form action="{{ route('store.booking') }}" method="POST">
                @csrf
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>  
                @endif
                <div>
                  <label for="Nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="Nama" name="Nama" />
                </div>
                <div>
                  <label for="Alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="Alamat" name="Alamat" />
                </div>
                <div>
                  <label for="NoTelp" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" id="NoTelp" name="NoTelp" />
                  <h6>No. Handphone harus diawali dengan +62</h6>
                </div>
                <button type="reset" class="submit btn btn-light submit" name="submit" style="margin-right: 40px;">RESET</button>
                <button type="submit" class="submit btn btn-primary submit" name="submit" style="margin-right: 40px">SUBMIT</button>

          </div>
          <div class="col-md-5" >
            <h3>Booking Information</h3>
            <div>

                <div>
                  <label for="Jenis" class="form-label">Jenis Mobil</label>
                  <input type="text" class="form-control" id="Jenis" name="Jenis" />
                </div>
                <div>
                  <label for="Merek" class="form-label">Merek</label>
                  <input type="text" class="form-control" id="Merek" name="Merek" />
                </div>
                <div>
                  <label for="Plat_Nomor" class="form-label">Plat Nomor</label>
                  <input type="text" class="form-control" id="Plat_Nomor" name="Plat_Nomor" />
                </div>
                <div>
                  <label for="Pemilik" class="form-label">Pemilik Kendaraan</label>
                  <input type="text" class="form-control" id="Pemilik" name="Pemilik" />
                </div>
                <div>
                  <label for="stnk" class="form-label">Atas Nama pada STNK</label>
                  <input type="text" class="form-control" id="stnk" name="stnk" />
                </div>
                <div>
                  <label for="keluhan" class="form-label">Masalah pada Mobil</label><br>
                  <textarea class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" rows="5" placeholder="Masukkan Keluhan Mobil">{{ old('keluhan') }}</textarea>
                </div>
                <br />
                <button type="reset" class="submit btn btn-light submit" name="submit" style="margin-right: 40px;">RESET</button>
                <button type="submit" class="submit btn btn-primary submit" name="submit" style="margin-right: 40px">SUBMIT</button>
              </form>
            </div>
          </div>
        </div>

      </section>
              </div>
    </div>
  </body>
</html>
