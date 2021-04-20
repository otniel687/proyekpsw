<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <br>
    <h4>Data Customer Aotlie Service</h4>
    <a href="create.php" class="btn btn-primary" role="button">+ Tambah customer</a>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['ID_Customer'])) {
        $id_anggota=htmlspecialchars($_GET["ID_Customer"]);

        $sql="delete from anggota where ID_Customer='$ID_Customer' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


    <table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>ID Customer</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Handphone</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>
        <?php
        include "koneksi.php";
        $sql="select * from customer order by ID_Customer asc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["ID_Customer"]; ?></td>
                <td><?php echo $data["Nama"];   ?></td>
                <td><?php echo $data["Alamat"];   ?></td>
                <td><?php echo $data["NoTelp"];   ?></td>
                <td>
                    <a href="update.php?ID_Customer=<?php echo htmlspecialchars($data['ID_Customer']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>ID_Customer=<?php echo $data['ID_Customer']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    

</div>

</body>
</html>
