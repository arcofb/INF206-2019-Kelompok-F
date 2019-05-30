<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM kalkulator");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <th>Hari ke-</th>
            <th>Penghasilan Kotor</th>
            <th>Penghasilan Bersih</th>
            <th>Modal</th>
            <th>Gaji Anda</th>
            <th>Gaji Per Kru</th>
            <th>Untung</th>
            <th>Rugi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["pKotor"];?></td>
            <td><?php echo $data["pBersih"];?></td>
            <td><?php echo $data["pModal"];?></td>
            <td><?php echo $data["pGaji"];?></td>
            <td><?php echo $data["pKru"];?></td>
            <td><?php echo $data["pUntung"];?></td>
            <td><?php echo $data["pRugi"];?></td>
            <td><a href="hapusdata.php?id=<?php echo $data['id_kalku']; ?>">Hapus</a></td>
            <td><a href="cetak.php">Cetak</a></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
        <!-- <a href="kalkulator.php">Hitung Ulang</a> -->
    </table>
    <a href="kalkulator.php" class="hitung">Hitung Lagi</a>
<style>
  table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
  margin-bottom :20px;
}
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
  align :center;
}
.hitung{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 20px;
    margin-left: 10px;
	margin-bottom: 5px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}
    </style>
</form>