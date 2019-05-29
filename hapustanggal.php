<?php
include "koneksi.php";

$koneksi->query("DELETE FROM rekapitulasi WHERE ID = '$_GET[id]'");
$koneksi->query("DELETE FROM pengeluaran WHERE id_rekapitulasi = '$_GET[id]'");
$koneksi->query("DELETE FROM pendapatan WHERE id_rekapitulasi = '$_GET[id]'");
echo "<script>";
echo "alert('data terhapus')";
echo "</script>";

header("Location: rekapitulasi.php");
