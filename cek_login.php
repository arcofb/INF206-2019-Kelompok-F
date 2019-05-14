<?php
include "koneksi.php";

$nope = $_POST['nope'];
$pass = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM akun WHERE nope = '$nope' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['nope'] == $nope AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['nope'] = $row['nope'];
  $_SESSION['password'] = $row['password'];
  header('location:masuk.php');
}
else
{
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
        Username atau Password Anda tidak benar.<br>";
    echo "<br>";
  echo "<input class='btn btn-blue' type=button value='ULANGI LAGI' onclick=location.href='login.php'></a></center>";

}
?>