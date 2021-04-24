<?php 

    $conn = mysqli_connect("localhost","root","","db_aotlieservice");

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
    //  get daftar service
    function daftarCustomer(){
        global $conn;

        $query = mysqli_query($conn, "SELECT * FROM customer");
        $data = [];
        while($ada = mysqli_fetch_assoc($query)){
            $data[] = $ada;
        }

        return $data;
    }
    //  get daftar service
    function daftarMobil(){
        global $conn;

        $query = mysqli_query($conn, "SELECT * FROM mobil");
        $data = [];
        while($ada = mysqli_fetch_assoc($query)){
            $data[] = $ada;
        }

        return $data;
    }

    //  get daftar pesanan
    function daftarPesanan($pengguna){
        global $conn;

        $emailPengguna = $pengguna;
        $query = mysqli_query($conn, "SELECT * FROM pesanan WHERE email = '$emailPengguna'");
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

    // buat pesanan
    function buatPesanan($data)
    {
        global $conn;
        
        date_default_timezone_set("Asia/jakarta");

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nama = $data["nama"];
            $email = $data["email"];
            $alamat =$data["alamat"];
            $plat_mobil =$data["plat_mobil"];
            $deskripsi_kendala = $data["deskripsi_kendala"];
            $tanggalPesananDibuat = date("Y/m/d h:i");
        }
        $tambah = "INSERT INTO pesanan VALUES ('','$nama','$email','$alamat','$plat_mobil','$deskripsi_kendala', '', '', '$tanggalPesananDibuat')";
        
        mysqli_query($conn, $tambah);

        return mysqli_affected_rows($conn);
    }
        // buat keluhan
    function buatKeluhan($data)
    {
        global $conn;
        

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $nama = $data["nama"];
            $email = $data["email"];
            $keluhan =$data["keluhan"];
            $rating =$data["rating"];
        }
        $tambah = "INSERT INTO keluhan VALUES ('','$nama','$email','$keluhan','$rating')";
        
        mysqli_query($conn, $tambah);

        return mysqli_affected_rows($conn);
    }
    // new Service
    function buatCustomer($data)
    {
        global $conn;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $ID_Customer = $data["ID_Customer"];
            $Nama = $data["Nama"];
            $Alamat =$data["Alamat"];
            $No_Telepon =$data["No_Telepon"];
        }
        $tambah = "INSERT INTO customer VALUES ('','$ID_Customer','$Nama','$Alamat',$No_Telepon)";
        mysqli_query($conn, $tambah);
        return mysqli_affected_rows($conn);
    }

    function update($data)
    {
        global $conn;
        
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $kategori_id = $data["kategori_id"];
            $supplier_id = $data["supplier_id"];
            $nama_produk =$data["nama_produk"];
            $satuan =$data["satuan"];
            $stok = $data["stok"];
            $harga_produk = $data["harga_produk"];
        }
        $tambah = "INSERT INTO produk VALUES ('','$kategori_id','$supplier_id','$nama_produk','$satuan','$stok',$harga_produk)";
        
        mysqli_query($conn, $tambah);

         return mysqli_affected_rows($conn);
    }
    function cari($cari)

    {
            $query = "SELECT * FROM produk 
                    WHERE 
                    kategori_id LIKE '%$cari%' OR
                    supplier_id LIKE '%$cari%' OR
                    nama_produk LIKE '%$cari%' OR
                    satuan LIKE '%$cari%' OR
                    stok LIKE '%$cari%' OR
                    harga_produk LIKE '%$cari%' 
            ";

            return read($query);
    }
    // hapus Service
    function hapusService($ID_Customer)
    {
        global $conn;

        mysqli_query($conn, "DELETE FROM customer WHERE ID_Customer = '$ID_Customer' ");
        return mysqli_affected_rows($conn);
    }

    // hapus pesanan
    function hapusPesanan($pesanan_id)
    {
        global $conn;

        mysqli_query($conn, "DELETE FROM pesanan WHERE pesanan_id = '$pesanan_id' ");
        return mysqli_affected_rows($conn);
    }
    // edit Service
    function edit($data, $ID_Customer)
    {
        global $conn;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $Nama = $data["Nama"];
            $Alamat = $data["Alamat"];
            $No_Telepon = $data["No_Telepon"];
        }
        $tambah = "UPDATE customer SET 
                ID_Customer = '$ID_Customer',
                Nama = '$Nama',
                Alamat = '$Alamat',
                No_Telepon = '$No_Telepon'
                WHERE ID_Customer = '$ID_Customer'
                ";
        
        mysqli_query($conn, $tambah);

        return mysqli_affected_rows($conn);
    }
    // update pesanan
    function updatePesanan($data, $ID_Mobil)
    {
        global $conn;

        
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $jenis_service = $data["jenis_service"];
            $tanggalService = $data["tanggalService"];
        }
        $tambah = "UPDATE pesanan SET 
                jenis_service = '$jenis_service',
                tanggalService = '$tanggalService'
                WHERE ID_Mobil = '$ID_Mobil'
                ";
        
        mysqli_query($conn, $tambah);

        return mysqli_affected_rows($conn);
    }
?>  