<?php 
    require ("functions.php");
    $ID_Registrasi = $_GET["ID_Registrasi"];
    $data = read("SELECT * FROM registrasi WHERE ID_Registrasi = $ID_Registrasi");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>View Detail Data Mobil</title>
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
                        <h1>Data Mobil Aotlie Service</h1>
                    </div>
                </div>
            </div>
            <br><br>
    <div class="container">
    <a href="mobil.php." class="btn btn-outline-info">Kembali ke daftar Mobil</a><br>
    <table>
    <form action="" method="post" enctype="multipart/form-data" class="row">
        <div class="mb-3">
            <label for="Jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control" id="Jenis" name="Jenis" value="<?= $data[0]["Jenis"] ?>">
        </div>
        <div class="mb-3">
            <label for="Merek" class="form-label">Merek</label>
            <input type="text" class="form-control" id="Merek" name="Merek" value="<?= $data[0]["Merek"] ?>">
        </div>
        <div class="mb-3">
            <label for="Plat_Nomor" class="form-label">Plat Nomor Kendaraan</label>
            <input type="text" class="form-control" id="Plat_Nomor" name="Plat_Nomor" value="<?= $data[0]["Plat_Nomor"] ?>">
        </div>
        <div class="mb-3">
            <label for="Atas_Nama" class="form-label">Pemilik Kendaraan</label>
            <input type="text" class="form-control" id="Atas_Nama" name="Atas_Nama" value="<?= $data[0]["Atas_Nama"] ?>">
        </div>
        <div class="mb-3">
            <label for="Tipe_servis" class="form-label">Servis Yang di Inginkan</label>
            <input type="text" class="form-control" id="Tipe_servis" name="Tipe_servis" value="<?= $data[0]["Tipe_servis"] ?>">
        </div>
        <div class="mb-3">
            <label for="Keluhan" class="form-label">Masalah Pada Mobil</label>
            <input type="text" row="3" class="form-control" id="Keluhan" name="Keluhan" value="<?= $data[0]["Keluhan"] ?>"><br>
        </div>
    </form>
    </table>
    </div>
</div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
