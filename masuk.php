<!DOCTYPE html>
<html>
 <head>
 <title>Fisherman Log</title>
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
<div class="middle"><h1 align="center">Welcome to Fisherman Log</h1>
    <div class="left">
		<p>Nelayan adalah istilah bagi orang-orang yang sehari-harinya bekerja menangkap ikan atau biota lainnya yang hidup di dasar, kolom maupun permukaan perairan. Perairan yang menjadi daerah aktivitas 
			 nelayan ini dapat merupakan perairan tawar, payau maupun laut. </p>
		<p>Dalam fisherman log, kamu dapat menghitung pendapatan atau pengeluaran kamu selama berlayar. Bukan itu saja kamu juga dapat menyimpan data pelayaran kamu dan tentunya data data kamu akan aman.</P>
		<p>Terdapat fitur-fitur yang dapat membantu para nelayan agar mudah memperhitungkan semuanya, yaitu fitur rekapitulasi dan fitur kalkulator. Dimana Fitur rekapitulasi ini bisa membuat data rekapitulasi baru,
			 meriview data rekapitulasi yang sudah ada juga mengedit data rekapitulasi dan fifitur kalkulator nelayan bisa mencari pengahasilan kotor dan bersih dalam berlayar, 
			 nmengetahui gaji kru kapan juga mengetahui rugi selama berlayar</p>

		</div>
    <div class="right">
		<img src="images/home.jpg">
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
p{
	margin-bottom	: 20px;
	line-height		: 1.5em;
	color: white;
}
a{
	text-decoration	: none;
	color			:white;
	font-size: 15px;
	
}

a:hover{
	color	: orange;
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

  .middle{
	width	: 1080px;
  height : 500px;
	margin		: 20px auto;
	background:	rgba(0,0,0, 0.4);
	overflow	: hidden;
	padding		: 10px;
	
}

.right{
		width	: 310px;
		padding	: 10px;
		margin	: 10px;
		float	: right;
	}
  .right img{
			max-width	: 100%;
			height		: 420px;
			width			: 310px;
		}

.left{
		width		: 450px;
		margin		: 10px;
		float		: left;
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
 
ul.topnav li a:hover {background-color: white;}
 
ul.topnav li.icon {display: none;}
 

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