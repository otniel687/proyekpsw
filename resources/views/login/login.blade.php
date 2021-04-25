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
              <div class="img" style="background-image: url({{url('css/Image/mekanik.jpg')}} )"></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Log In Sebagai</h3>
                  </div>
                </div>
                <form action="#" class="signin-form logins">
                  <a href="{{url('/login/admin')}} " class="btn btn-primary">Admin</a>
                  <a href="{{url('/login/customer')}} " class="btn btn-secondary">Customer</a>
                  <a href="{{url('/login/mekanik')}} " class="btn btn-warning">Mekanik</a>
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
