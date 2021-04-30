<?php 

    $conn = mysqli_connect("localhost","root","","aotlie_service");

    // baca data data dari db
    function read($cara)
    {
        global $conn;
        $query = mysqli_query($conn,$cara);
        $lemari = [];
        while ($ada = mysqli_fetch_assoc($query)) {
            
            $lemari[] = $ada;
        }
        return $lemari;
    }
    //  get daftar customer
    function daftarCustomer(){
        global $conn;

        $query = mysqli_query($conn, "SELECT * FROM customer");
        $data = [];
        while($ada = mysqli_fetch_assoc($query)){
            $data[] = $ada;
        }

        return $data;
    }
    //  get daftar Mobil
    function daftarMobil(){
        global $conn;

        $query = mysqli_query($conn, "SELECT * FROM registrasi");
        $data = [];
        while($ada = mysqli_fetch_assoc($query)){
            $data[] = $ada;
        }

        return $data;
    }

    // register
    function register($data)
    {
        global $conn;
        
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nama = $data["nama"];
            $email = $data["email"];
            $password = $data["password"];
            $role = 'user';
        }
        $tambah = "INSERT INTO users VALUES ('','$nama','$email','$role','$password')";
        
        mysqli_query($conn, $tambah);

        return mysqli_affected_rows($conn);
    }
    // validasi
    function validasi($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // new Customer
    function buatCustomer($data)
    {
        global $conn;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ID_Customer = $data["ID_Customer"];
            $Nama = $data["Nama"];
            $Alamat =$data["Alamat"];
            $No_Handphone =$data["No_Handphone"];
        }
        $tambah = "INSERT INTO customer VALUES ('','$Nama','$Alamat','$No_Handphone')";
        mysqli_query($conn, $tambah);
        return mysqli_affected_rows($conn);
    }

    // new Mobil
    function buatMobil($data)
    {
        global $conn;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ID_Registrasi = $ada["ID_Registrasi"];
            $ID_Customer = $data["ID_Customer"];
            $Jenis = $data["Jenis"];
            $Merek =$data["Merek"];
            $Plat_Nomor =$data["Plat_Nomor"];
            $Atas_Nama =$data["Atas_Nama"];
            $Tipe_servis =$data["Tipe_servis"];
            $Keluhan =$data["Keluhan"];
        }
        $tambah = "INSERT INTO registrasi VALUES ('','$ID_Customer','$Jenis','$Merek','$Plat_Nomor','$Atas_Nama','$Tipe_servis','$Keluhan')";
        mysqli_query($conn, $tambah);
        return mysqli_affected_rows($conn);
    }

    // hapus Customer
    function hapusCustomer($ID_Customer)
    {
        global $conn;

        mysqli_query($conn, "DELETE FROM customer WHERE ID_Customer = '$ID_Customer' ");
        return mysqli_affected_rows($conn);
    }

    // hapus Mobil
    function hapusMobil($ID_Registrasi)
    {
        global $conn;

        mysqli_query($conn, "DELETE FROM registrasi WHERE ID_Registrasi = '$ID_Registrasi' ");
        return mysqli_affected_rows($conn);
    }
?>  