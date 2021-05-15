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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <a href="https://icons8.com/icon/he8U4VPWGpWe/"></a>
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
                 @if (Route::has('login'))
                <div class="hidden fixed sm:block">
                  @auth
                      <a class="nav-item btn btn-danger tombol" href="{{route('logout')}}">Log Out</a>
                  @else
                      <a class="nav-item btn btn-primary tombol" href="{{asset('login')}}">Login</a>
                  @endif
                </div>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br />
    <div class="container judul">
      <h2>&nbsp;Booking Service</h2>
      <h5 class="mb-2">Note: Untuk melakukan registrasi, customer login terlebih dahulu.</h5>
    </div>
    <div class="container">
      <section class="regis ">        
        <div class="row" >
          <div class="col-md-5" >
            <h3>Personal Information</h3>
              <form action="/booking" method="POST">
                @csrf
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>  
                @endif
                <div>
                  <label for="Nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="Nama" name="Nama" />
                  @error('Nama')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                <div>
                  <label for="Alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="Alamat" name="Alamat" />
                  @error('Alamat')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                <div>
                  <label for="NoTelp" class="form-label">No. Telepon</label>
                  <input type="text" class="form-control" id="NoTelp" name="NoTelp" />
                  <p>Nb: *Anda harus mengisi No. Telepon, agar dapat di hubungi oleh Admin. </p>
                  @error('NoTelp')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
          </div>
          <div class="col-md-5" >
            <h3>Booking Information</h3>
            <div>
                <div>
                  <label for="Jenis" class="form-label">Jenis Mobil</label>
                  <input type="text" class="form-control" id="Jenis" name="Jenis" />
                  @error('Jenis')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div>
                  <label for="Merek" class="form-label">Merek</label>
                  <input type="text" class="form-control" id="Merek" name="Merek" />
                  @error('Merek')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div>
                  <label for="Plat_Nomor" class="form-label">Plat Nomor</label>
                  <input type="text" class="form-control" id="Plat_Nomor" name="Plat_Nomor" />
                  @error('Plat_Nomor')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div>
                  <label for="Pemilik" class="form-label">Pemilik Kendaraan</label>
                  <input type="text" class="form-control" id="Pemilik" name="Pemilik" />
                  @error('Pemilik')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div>
                  <label for="stnk" class="form-label">Nomor STNK</label>
                  <input type="text" class="form-control" id="stnk" name="stnk" />
                  @error('stnk')
                    <div class="alert alert-danger mt-1">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div>
                  <label for="keluhan" class="form-label">Masalah pada Mobil</label><br>
                  <textarea class="form-control @error('keluhan') is-invalid @enderror deskripsi" name="keluhan" rows="10" >{{ old('keluhan') }}</textarea>
                  @error('keluhan')
                    <div class="alert alert-danger mt-1">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <br />
                <button type="reset" class="submit btn btn-light submit" name="submit" style="margin-right: 40px;">RESET</button>
                @if (Route::has('login'))
                <div class="hidden fixed sm:block">
                  @auth
                      <button type="submit" class="submit btn btn-primary submit" name="submit" style="margin-right: 40px">SUBMIT</button>
                  @else
                      <button onClick="alert('Anda harus login terlebih dahulu!')" class="submit btn btn-primary submit"  style="margin-right: 40px">SUBMIT</button>
                  @endif
                </div>
                @endif
                
              </form>
            </div>
          </div>
        </div>
      </section>
      </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('status'))
        
            toastr.success('{{ session('status') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script> --}}
  </body>
</html>
