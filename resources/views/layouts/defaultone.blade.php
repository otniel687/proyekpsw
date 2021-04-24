<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title') | AOTLIE </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!--Style CSS-->
    <link rel="stylesheet" href="css/style.css" />

    <!--Style Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  </head>
  <body style="background-color: rgb(219, 219, 219)">
    <!--Navbar-->
    @yield('navbar')

    <!--Akhir Navbar-->
    @yield('content')
    <!--informasi -->
   <!--Akhir Informasi-->
    @yield('map')
  

    <!--Footer-->
    <div id="footer" class="text-center">
      <p>&copy;Copyright By Aotlie | 2021</p>
    </div>
    <!--Akhir Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <a href="https://icons8.com/icon/he8U4VPWGpWe/"></a>
  </body>
</html>
