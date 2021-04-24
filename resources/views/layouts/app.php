<?php 
    require ("functions.php");

    session_start();
    if(isset($_POST["submit"]))
    {
        global $conn;

        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($query) === 1)
        {
            $lemari = mysqli_fetch_assoc($query);
            if($email == $lemari["email"] AND $password == $lemari["password"])
            {
                $_SESSION["has_login"] = $email;
                header("Location:daftarPesanan.php");
            }else {
                header("Location:login.php");
            }
        }
    }
?>