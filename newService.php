<?php 
    session_start();
    require ("functions.php");

    if(isset($_POST["submit"])){
        if(buatCustomer($_POST) > 0 )
        {
            echo "
                    <script>
                        alert ('service berhasil di tambahkan');
                        document.location.href ='customer.php';
                    </script>
            ";
        } else {
            echo "
            <script>
                alert ('service tidak berhasil di tambahkan');
                document.location.href ='newService.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data Customer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <a href="https://icons8.com/icon/he8U4VPWGpWe/"></a>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/881c7896df.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="view.php">
                        Aotlie Service
                    </a>
                </li>
                <li>
                    <a href="view.php">Home</a>
                </li>
                <li>
                    <a href="customer.php">Customer</a>
                </li>
                <li>
                    <a href="mobil.php">Mobil</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <h1>Tambahkan Data Customer</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-4">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Input Nama Customer"></input>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Input Alamat Customer"></input>
            </div>
            <div class="mb-3">
                <label for="No_Handphone" class="form-label">No Handphone</label>
                <input class="form-control" id="No_Handphone" name="No_Handphone" placeholder="Input No Handphone Customer"></input>
            </div>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset" name="submit">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</div>
</html>