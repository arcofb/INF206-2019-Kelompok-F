<?php
include "koneksi.php";

$pengeluaran = $_GET["id"];

$delete = $koneksi->query("DELETE FROM pengeluaran WHERE id_pengeluaran = '$_GET[id_data]'");

if ($delete) {
    echo "<script>alert('Data Berhasil Dihapus!')</script>";
} else {
    echo "<script>alert('Data GAGAL Dihapus!')</script>";
}
?>
<script>
    location.replace("pengeluaran.php?id=<?php echo $_GET['id']?>");
</script>