<!-- <?php 
    require ("functions.php");

    if(isset($_POST["submit"]))
    {
        validasi($_POST);

        if($_POST["password"] === $_POST["konfirmasiPassword"]){
            global $conn;

            $email = $_POST["email"];

            $query = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

            if(mysqli_num_rows($query) === 1)
            {
                echo "
                    <script>
                        alert ('email sudah terdaftar');
                        document.location.href ='register.php';
                    </script>
                ";
            }else{
                if(register($_POST) > 0 )
                {
                    echo "
                            <script>
                                alert ('user berhasil di tambahkan');
                                document.location.href ='login.php';
                            </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert ('user tidak berhasil di tambahkan');
                            document.location.href ='register.php';
                        </script>
                    ";
                }
            }
            
        }
    }
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="css/style3.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <title>Create Akun</title>
  </head>
  <style>
    body {
      height: 100vh;
      background-color: #bebbbb94;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    * {
      margin: 0;
      padding: 0;
      outline: 0;
      font-family: "Open Sans", sans-serif;
    }
  </style>
  <body background="css/Image/background.jpeg">
    <div class="register">
      <center>
        <h1>Daftarkan Akun Anda!</h1>
        <hr color="black" width="40%" />
        <br />
        <h2>AOTLIE service</h2>
      </center>
      <br />
      <form action="" method="POST">
        <label for="nama" class="form-label" font-style="bold">Nama</label><br />
        <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama" /><br /><br />
        <label for="email" class="form-label">E-mail</label><br />
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" />
        <div id="emailHelp" class="form-text">Kami tidak akan memnyebarluaskan alamat email anda</div>
        <br />
        <label for="password" class="form-label">Password</label><br />
        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" />
        <div id="passwordHelp" class="form-text">Password harus 8-20 karakter</div>
        <br />
        <label for="konfirmasiPassword" class="form-label">Konfirmasi Password</label><br />
        <input type="password" class="form-control" id="konfirmasiPassword" name="konfirmasiPassword" aria-describedby="konfirmasiPasswordHelp" />
        <div id="konfirmasiPasswordHelp" class="form-text">konfirmasi Password harus sama dengan password</div>
        <br />
        <div class="button b">
          <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
        </div>
      </form>
    </div>
  </body>
</html>
