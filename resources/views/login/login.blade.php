<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Login</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      outline: 0;
      font-family: "Open Sans", sans-serif;
    }
    body {
      height: 100vh;
      background-color: #bebbbb94;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    h1 {
      color: black;
    }
  </style>
  <body>
    <div class="sebagai">
      <center>
        <h1>Login</h1>
        <hr style="border: 2px solid black" width="75%" />
        <br />
        <h2>Login Sebagai</h2>
      </center>
      <br />
      <form action="" class="valid d-flex justify-content-center" method="POST">
        <a href="{{asset('/login/customer')}} " class="btn btn-primary">Customer</a>
        <a href="{{asset('/login/mekanik')}}" class="btn btn-secondary">Mekanik</a>
        <a href="{{asset('/login/admin')}}" class="btn btn-warning">Admin</a>
      </form>
    </div>
  </body>
</html>
