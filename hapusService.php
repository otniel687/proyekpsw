<?php 

    session_start();
    if(!isset($_SESSION["admin_has_login"])){
        header("login.php");
    }

    require ("functions.php");

    $ID_Customer = $_GET["ID_Customer"];

    if(hapusCustomer($ID_Customer) > 0 )
        {
            echo "
                    <script>
                        alert ('service berhasil di hapus');
                        document.location.href ='customer.php';
                    </script>
            ";
        } else {
            echo "
            <script>
                alert ('service tidak berhasil di hapus');
                document.location.href ='customer.php';
            </script>
            ";
        }
?>
