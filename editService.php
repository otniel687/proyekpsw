<?php 
    require ("functions.php");

    $ID_Customer = $_GET["ID_Customer"];

    $data = read("SELECT * FROM customer WHERE ID_Customer = $ID_Customer");

    if(isset($_POST["submit"])){
        if(edit($_POST,$ID_Customer) > 0 )
        {
            echo "
                    <script>
                        alert ('service berhasil di edit');
                        document.location.href ='customer.php';
                    </script>
            ";
        } else {
            echo "
            <script>
                alert ('service tidak berhasil di edit');
                document.location.href ='customer.php';
            </script>
            ";
        }
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Data Customer</title>
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
                        <h1>Isi data di bawah ini!</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-4">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="ID_Customer" class="form-label">ID_Customer</label>
                <input type="text" class="form-control" id="ID_Customer" placeholder="service ban bocor" name="ID_Customer" value="<?= $data[0]['ID_Customer']?>">
            </div>
            <div class="mb-3">
               <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" placeholder="service ban bocor" name="Nama" value="<?= $data[0]['Nama']?>">
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" placeholder="service ban bocor" name="Alamat" value="<?= $data[0]['Alamat']?>">
            </div>
            <div class="mb-3">
                <label for="No_Handphone" class="form-label">No Handphone</label>
                <input type="text" class="form-control" id="No_Handphone" name="No_Handphone" value="<?= $data[0]['No_Handphone']?>">
            </div><br>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Edit</button>
            </div>
        </form>
    </div>
    </div>
</html>