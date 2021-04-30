<?php 

    session_start();
    if(!isset($_SESSION["admin_has_login"])){
        header("login.php");
    }

    require ("functions.php");

    $ID_Registrasi = $_GET["ID_Registrasi"];

    if(hapusMobil($ID_Registrasi) > 0 )
        {
            echo "
                    <script>
                        alert ('service berhasil di hapus');
                        document.location.href ='mobil.php';
                    </script>
            ";
        } else {
            echo "
            <script>
                alert ('service tidak berhasil di hapus');
                document.location.href ='mobil.php';
            </script>
            ";
        }
?>
