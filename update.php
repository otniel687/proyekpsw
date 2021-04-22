<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>ID Customer:</label>
            <input type="text" name="ID_Customer" class="form-control" value="<?php echo $data['ID_Customer']; ?>" />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="Nama" class="form-control" value="<?php echo $data['Nama']; ?>"/>

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="Alamat" class="form-control" rows="5" required> <?php echo $data['Alamat']; ?></textarea>

        </div>
        <div class="form-group">
            <label>No Handphone:</label>
            <input type="text" name="NoTelp" class="form-control" value="<?php echo $data['NoTelp']; ?>"/>

        <input type="hidden" name="ID_Customer" value="<?php echo $data['ID_Customer']; ?>" />
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
    if (isset($_GET['ID_Customer'])) {
        $ID_Customer=input($_GET["ID_Customer"]);

        $sql="select * from customer where ID_Customer=$ID_Customer";
        $hasil=mysqli_query($kon,$sql);
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $ID_Customer=htmlspecialchars($_POST["ID_Customer"]);
        $Nama=input($_POST["Nama"]);
        $Alamat=input($_POST["Alamat"]);
        $NoTelp=input($_POST["NoTelp"]);

        //Query update data pada tabel anggota
        $sql="update customer set
			ID_Customer ='$ID_Customer',
			Nama='$Nama',
			Alamat='$Alamat',
			NoTelp ='$NoTelp',
			where ID_Customer=$ID_Customer";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


</div>
</body>
</html>