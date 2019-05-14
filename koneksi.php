<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "pengguna";
    
    $koneksi = mysqli_connect($host,$user,$password,$database);

    if($koneksi->connect_error){
        echo "Connection Failed".$koneksi->connect_error;
    }
    else{
    //    echo "Pendaftaran Berhasil!";
    }
?>
