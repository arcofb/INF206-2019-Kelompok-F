<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<ul class="topnav">
  <li><a href="masuk.php">Home</a></li>
  <li><a href="rekapitulasi.php">Rekapitulasi</a></li>
  <li><a href="kalkulator.php">Kalkulator</a></li>
  <li><a href="logout.php">Keluar</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
  </li>
</ul>
<script type="text/javascript">
      function valid(kalkulator){
        if (kalkulator.bil1.value == ""){
          alert("Modal tidak boleh kosong");
		  kalkulator.bil1.focus();
          return (false);
        }
		if (kalkulator.bil2.value == ""){
          alert("Pendapatan tidak boleh kosong");
		  kalkulator.bil2.focus();
          return (false);
        }
		if (kalkulator.bil3.value == ""){
          alert("Pengeluaran tidak boleh kosong");
		  kalkulator.bil3.focus();
          return (false);
        }
		if (kalkulator.bil4.value == ""){
          alert("Persen Gaji Anda tidak boleh kosong");
		  kalkulator.bil4.focus();
          return (false);
        }
		if (kalkulator.bil5.value == ""){
          alert("Jumlah Kru tidak boleh kosong");
		  kalkulator.bil5.focus();
          return (false);
        }
      return (true);
		}
</script>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1']; //modal
		$bil2 = $_POST['bil2']; //pendapatan 
		$bil3 = $_POST['bil3']; //pengeluaran 
		$bil4 = $_POST['bil4']; //persen
		$bil5 = $_POST['bil5']; //kru
		
		$pkotor = $bil2; //penghasilan kotor
		$pbersih = $pkotor-$bil3; // penghasilan bersih
		
		$persen = $bil4*0.01; //persen gbos

		$gbos = $persen*$pbersih; // gaji boss

		$sisa = $pbersih-$gbos; //sisa peghasilan bersih setelah dikurang gaji bos

		$gkru = $sisa/$bil5; // gaji per kru

		$untung = $gbos-$bil1; //jumlah keuntungan

		$rugi = $bil1-$gbos; // jumlah kerugian
		}
	?>
	<div class="middle">
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="" onsubmit="return valid(this)">
		<input type="text" name="bil1" min="0" class="bil" autocomplete="off" placeholder="Masukkan Harga Sewa Kapal(Rp.)">
			<input type="text" name="bil2" min="0" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Pendapatan(Rp.)">
			<input type="text" name="bil3" min="0" class="bil"  autocomplete="off" placeholder="Masukkan Jumlah Pengeluaran(Rp.)">
            <input type="text" name="bil4" min="0" class="bil" autocomplete="off" placeholder="Masukkan Persen Gaji yang Anda ambil(%)"> 
            <input type="text" name="bil5" min="0" class="bil" autocomplete="off" placeholder="Masukkan Jumlah Kru Kapal Anda">
			<input type="submit" name="hitung" value="Hitung" class="tombol">	
		</form>
		
		<?php if(isset($_POST['hitung'])){ ?>
			
			<input type="text" value="Penghasilan Kotor       : Rp. <?php
				if($pkotor>0){
					$p_pkotor = number_format($pkotor,0,",",".");
					echo $p_pkotor;
				}
				else{
					echo "-";
				 }
				?>" class="bil">
			<input type="text" value="Penghasilan Bersih      : Rp. <?php
				if($pbersih>=0){
					$p_pbersih = number_format($pbersih,0,",",".");
					echo $p_pbersih;
				}
				 else{
					echo "-";
				 }
				?>" class="bil">
			<input type="text" value="Modal Anda                : Rp. <?php 
			$p_bil1 = number_format($bil1,0,",",".");
			echo $p_bil1; ?>" class="bil">
			<input type="text" value="Gaji Anda                   : Rp. <?php
				if($gbos>=0){
					$p_gbos = number_format($gbos,0,",",".");
					echo $p_gbos;
				}
				else{
					echo "-";
				 }
				?>" class="bil">
			<input type="text" value="Gaji per Kru Anda        : Rp. <?php 
				if($gkru>=0){
					$p_gkru = number_format($gkru,0,",",".");
					echo $p_gkru;
				}else{
					echo "-";
				}
			?>" class="bil">
			<input type="text" value="<?php
			if($gbos>$bil1){
				echo "Anda Untung Sebesar  : Rp. ";
				$p_untung = number_format($untung,0,",",".");
				echo $p_untung;
			}else if($gbos==$bil1){
				echo "Anda tidak untung maupun rugi";
			}
			else if($bil1>$gbos){
				echo "Anda rugi sebesar       : Rp. ";
				$p_rugi = number_format($rugi,0,",",".");
				echo $p_rugi;
			}
			?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
		<a href="tampilkan.php"><input type="submit" value="Tampilkan Data" class="tombol"></a>
		<?php
		if (isset($_POST['hitung'])) {
			
			include "koneksi.php";
			if($gbos>$bil1){
				mysqli_query($koneksi, "INSERT INTO kalkulator (pKotor, pBersih, pModal, pGaji, pKru, pUntung) VALUES ('$p_pkotor', '$p_pbersih', '$p_bil1', '$p_gbos', '$p_gkru', '$p_untung')");
			}else if($bil1>$gbos){
				mysqli_query($koneksi, "INSERT INTO kalkulator (pKotor, pBersih, pModal, pGaji, pKru, pRugi) VALUES ('$p_pkotor', '$p_pbersih', '$p_bil1', '$p_gbos', '$p_gkru', '$p_rugi')");
			}else{
				mysqli_query($koneksi, "INSERT INTO kalkulator (pKotor, pBersih, pModal, pGaji, pKru) VALUES ('$p_pkotor', '$p_pbersih', '$p_bil1', '$p_gbos', '$p_gkru')");
            }
        }
		?>
	</div>
	
		</div>
	
	<div class="footer">
				<p align="center"><a href="https://web.facebook.com/Fishermanlog/"><img src="images/fb.png"></a></p>
				<p align="center"><a href="https://web.facebook.com/Fishermanlog/">Follow Us on Facebook</a></p>				
		</div>
		
	<style>
body{
	background-image: url('images/1.jpg');
	background-size: cover;
	font-family: sans-serif;
}
 
.kalkulator{
	width: 600px;
	background: #2F495A;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}
 
.bil{
	width: 500px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}
 
.tombol{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 20px;
	margin-bottom: 5px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}

.middle{
	width	: 1080px;
  /* height : 00px; */
	margin		: 20px auto;
	background:	
	rgba(0,0,0, 0.4);
	overflow	: hidden;
	padding		: 10px;
}
.brand{
	color: #eee;
	font-size: 11pt;
	float: right;
	text-decoration: none;
	margin: 12px;
}
 
.judul{
	text-align: center;
	color: #eee;
	font-weight: normal;
}

.footer{
		clear	: both;
		border	: 1px solid #dedede;
		padding		: 10px;
	margin		: 10px;
		background	: orange;
	
	}

  .footer img{
		width : 30px;
		height: 30px;
		margin :-20px;
		align-content: center;
	}

	.footer a{
		color: black;
	}
	.footer a:hover{
		color: white;
	}

ul.topnav {
    list-style-type: none;
    padding		: 10px;
	margin		: 10px;
    overflow: hidden;
    background-color: orange;
}
 
ul.topnav li {float: left;}
 
ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
 
ul.topnav li a:hover {background-color: black;}
 
ul.topnav li.icon {display: none;}

@media screen and (max-width:1080px){
		.kalkulator{
			width	: 100%;
		}
		
		.bil{
			width	: 25%;
		}
		.tombol{
			width	: 25%;
		}
}
@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
  .middle{
			width	: 68%;
			float	: center;
			
		}
    .left{
			width		: 25%;
		}
    .right{
			clear	: both;
			padding	: 1% 4%;
			width: auto;
			float	: none;
		}
}
/* untuk ukuran layar 700px kebawah */
@media screen and (max-width: 780px) {
	.kalkulator{
		text-align: center;
	}
	.bil{
		width: auto;
		float: none;
	}
	.tombol{
		width: auto;
		float: none;
	}
}
@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
  .middle{
			width	: 68%;
			float	: center;
			
		}
    .left{
			width		: 25%;
		}

    .right{
			clear	: both;
			padding	: 1% 4%;
			width: auto;
			float	: none;
		}
    img{
		width	: 100%;
	}
}
</style>
</body>
<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
 </script>
</html>