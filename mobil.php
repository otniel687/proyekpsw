<?php 
    require ("functions.php");

    $data = daftarMobil();
?>
<DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Data Mobil</title>
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
                    <a href="">Home</a>
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
                        <h1>Data Customer Aotlie Service</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-1">
            <a href="newMobil.php" class="btn btn-outline-info">+ Mobil Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Mobil</th>
                    <th>ID Customer</th>
                    <th>Jenis</th>
                    <th>Merek</th>
                    <th>Plat Nomor Kendaraan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($data as $item){ ?>
            <tbody>
                <tr>
                    <td><?= $item["ID_Registrasi"]; ?></td>
                    <td><?= $item["ID_Customer"]; ?></td>
                    <td><?= $item["Jenis"]; ?></td>
                    <td><?= $item["Merek"]; ?></td>
                    <td><?= $item["Plat_Nomor"]; ?></td>
                    <td>
                    <a href="hapusMobil.php?ID_Registrasi=<?=$item['ID_Registrasi']?>" class="btn btn-danger text-white">hapus</a>
                    <a href="view.php?ID_Registrasi=<?=$item['ID_Registrasi']?>" class="btn btn-info text-white">view</a> 
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>
<html>