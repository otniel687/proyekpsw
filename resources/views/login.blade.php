<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{asset('css/Image/logo.jpeg')}} " />
    <title>Login | AOTLIE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}} " />
    <link rel="stylesheet" href="{{asset('css/style_login.css')}} " />
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div class="img" style="background-image: url({{url('css/Image/admin.jpg')}} )"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <a href="{{asset('/')}} "><h3 class="mb-4">Log In</h3></a>
                  </div>
                </div>
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form action="{{url('proses_login')}}" method="POST" id="logForm" class="signin-form">
                  {{ csrf_field() }}
                  @error('login_gagal')
                  
                  <div class="alert alert-warning alert-dismissible fade show mb-2" role="alert">
                  <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @enderror
                  <div class="form-group mt-3">
                    <input type="text" name="username" id="inputEmailAddress" class="form-control" required />
                    <label class="form-control-placeholder" for="username">Username</label>
                    @if($errors->has('username'))
                    <span class="error">{{ $errors->first('username') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <input id="password-field" type="password" class="form-control" id="inputPassword" name="password" required />
                    <label class="form-control-placeholder" for="password">Password</label>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    @if($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <a href="{{url('register')}}">Sign Up</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
