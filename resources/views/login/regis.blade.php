<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="{{asset('css/Image/logo.jpeg')}} " />
    <title>Registrasi | AOTLIE</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('css/style_registrasi.css')}} " />
  </head> 
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center"></div>
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="login-wrap p-4 p-md-5">
              <h3 class="text-center mb-4">Daftar Akun Anda</h3>
              <form action="#" class="signup-form">
                <div class="form-group mb-3">
                  <label class="label" for="name">Nama</label>
                  <input type="text" class="form-control" placeholder="Nama Anda" />
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="email">Emails</label>
                  <input type="text" class="form-control" placeholder="Email Anda" />
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input id="password-field" type="password" class="form-control" placeholder="Password" />
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Konfirmasi Password</label>
                  <input id="password-field" type="password" class="form-control" placeholder="Konfirmasi Password" />
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                </div>
              </form>
              <p>I'm already a member! <a href="{{url('/login')}} ">Sign In</a></p>
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
