<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{asset('css/Image/logo.jpeg')}} " />
    <title>Registrasi | AOTLIE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('css/style_registrasi.css')}} " />
  </head> 
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="login-wrap p-4 p-md-5">
              <a href="{{asset('/')}}"><h3 class="text-center mb-4">Daftar Akun Anda</h3></a>
              <form action="{{ route('simpanregister') }}" class="signup-form" method="POST">
                @csrf
                <div class="form-group mb-3">
                  <label class="label" for="name">Nama</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="username">Username</label>
                <input id="username" type="text" class="form-control @error('email') is-invalid @enderror" name="username" value="{{ old('email') }}" required autocomplete="username">
                  @error('username')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                 </div>
                 <div class="form-group mb-3">
                   <label class="label" for="email">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror                  
                 
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('Register') }}</button>
                </div>
              </form>
              <p>I'm already a member! <a href="{{url('/login')}} ">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="{{asset('js/jquery.min.js')}} "></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
