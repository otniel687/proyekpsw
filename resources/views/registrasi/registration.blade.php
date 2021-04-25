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
            <div>
              <form action="" method="POST">
                <div>
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" />
                </div>
                <div>
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" />
                </div>
                <div>
                  <label for="no.handphone" class="form-label">No. Handphone</label>
                  <input type="text" class="form-control" id="no.handphone" name="no.handphone" />
                  <h6>No. Handphone harus diawali dengan +62</h6>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5" >
            <h3>Booking Information</h3>
            <div>
              <form action="" method="POST">
                <div>
                  <label for="jenis" class="form-label">Jenis</label>
                  <input type="text" class="form-control" id="jenis" name="jenis" />
                </div>
                <div>
                  <label for="merek" class="form-label">Merek</label>
                  <input type="text" class="form-control" id="merek" name="merek" />
                </div>
                <div>
                  <label for="platnomor" class="form-label">Plat Nomor</label>
                  <input type="text" class="form-control" id="platnomor" name="platnomor" />
                </div>
                <div>
                  <label for="stnk" class="form-label">Atas Nama pada STNK</label>
                  <input type="text" class="form-control" id="stnk" name="stnk" />
                </div>
                <div>
                  <label for="servis" class="form-label">Tipe Servis</label><br />
                  <select id="servis" name="servis" class="pilihan">
                    <option>Pilih tipe servis</option>
                    <option>Tune Up</option>
                    <option>Ganti Oli</option>
                    <option>Servis AC</option>
                    <option>Pemasangan Audio Mobil</option>
                    <option>Overhaul</option>
                  </select>
                </div>
                <div>
                  <label for="masalah" class="form-label">Masalah pada Mobil</label><br>
                  <textarea id="masalah" name="masalah" class="deskripsi"></textarea>
                </div>
                <br />
                <button type="submit" class="submit btn btn-light submit" name="submit" style="margin-right: 40px;">RESET</button>
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
