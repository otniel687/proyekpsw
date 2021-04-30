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

<!doctype html>
<html lang="en">
  <head>
    <link href="style3.css" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
    <center><h1>Login</h1>
    <hr color="black" width="28%"> <br>
    <h2>AOTLIE service</h2></center><br>
        <form action="" method="POST">
            <label for="email" class="form-label">Username</label><br>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"><br><br>
            <label for="password" class="form-label">Password</label><br>
            <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp"><br><br><br>
        <div class="button">
            <a class="a" href="customer.php">Login </a>
            <a class="b" href="register.php">Create Akun </a>
        </div>
        </form>
    </div>
  </body>
</html>