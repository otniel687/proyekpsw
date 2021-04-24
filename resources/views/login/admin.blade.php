<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <link href="{{asset('css/style.css')}} " rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
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
  </style>
  <body>
    <div class="login">
      <center>
        <h1>Login</h1>
        <hr color="black" width="28%" />
        <br />
        <h2>AOTLIE service</h2>
      </center>
      <br />
      <form action="" method="POST">
        <label for="email" class="form_label">Username</label><br />
        <input type="email" class="form_control" id="email" aria-describedby="emailHelp" name="email" /><br /><br />
        <label for="password" class="form_label">Password</label><br />
        <input type="password" class="form_control" id="password" name="password" aria-describedby="passwordHelp" /><br /><br /><br />
        <div class="button">
          <a class="a" href="customer.php">Login </a>
          <a class="b" href="register.php">Create Akun </a>
        </div>
      </form>
    </div>
  </body>
</html>
