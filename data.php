<?php
    include "koneksi.php";
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nope = $_POST['nope'];
    $password = md5($_POST['password']);
    if(!mysqli_query($koneksi,"insert into akun(nama,nope,alamat,password) values('$nama','$nope','$alamat','$password')" )){
        printf("Error Message :%s/n",mysqli_error($koneksi));
    }
    echo "<center><br><br><br><br><br><br><b>PENDAFTARAN SUKSES! </b><br>
        Silahkan login kembali untuk masuk.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='Login' onclick=location.href='login.php'></a></center>";


?>