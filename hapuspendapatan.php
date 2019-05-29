<?php
include "koneksi.php";

$pendapatan = $_GET["id"];

$delete = $koneksi->query("DELETE FROM pendapatan WHERE id_pendapatan = '$_GET[id_data]'");

if ($delete) {
    echo "<script>alert('Data Berhasil Dihapus!')</script>";
} else {
    echo "<script>alert('Data GAGAL Dihapus!')</script>";
}
?>
<script>
    location.replace("pendapatan.php?id=<?php echo $_GET['id']?>");
</script>