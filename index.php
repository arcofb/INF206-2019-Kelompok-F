<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fisherman Log</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 align="center" id="text"><marquee onmouseout="this.start()" onmouseover="this.stop()">Welcome to Fisherman Log</marquee>  </h1>
		</div>
		<div class="main">
			<div class="left">
				<h3  align="center">Menu</h3>
					<ul>
						<strong><li><a href="index.php">Home</a></li></strong>
						<strong><li><a href="#">Rekapitulasi</a></li></strong>
						<strong><li><a href="#">Kalkulator</a></li></strong>
					</ul>
				
			</div>
			<div class="middle">
				<h3 align="center">Apa itu Fisherman Log?</h3>
				<p  align="center"><strong>Sulit menghitung berapa pengeluaran dan pendapatan yang Anda peroleh serta bingung apakah Anda mendapatkan untung atau malah rugi? Nah Anda mengunjungi website yang tepat.	</strong></p>
				<p  align="center"><strong>Dalam fisherman log, kamu dapat menghitung pendapatan atau pengeluaran kamu selama berlayar. Bukan itu saja kamu juga dapat menyimpan data pelayaran kamu dan tentunya data data kamu akan aman</strong></p>
			</div>
			
			<div class="right">
				<h3 align="center">Akun</h3>
				<p>
					<ul>
					<strong><li><a href="register.php">Daftar</a></li></strong>
					<strong><li><a href="login.php">Masuk</a></li></strong>
					</ul>
				</p>
			</div>	
		</div>
	
		<div class="footer">
				<p align="center"><a href="http://facebook.com"><img src="images/fb.png"></a></p>
				<p align="center"><a href="http://facebook.com">Follow Us on Facebook</a></p>				
		</div>		

	</div>	
	<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/daun-berguguran.js" type="text/javascript"></script>		
<style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
	background-image: url('images/1.jpg');
	background-size: cover;
	font-family	: 'Verdana',arial,sans-serif;
	font-size	: 15px;
	
}

#text{
	position: relative;
	display: center;
    font-size: 25px;
    text-transform: uppercase;
    color: aqua;
    text-shadow: 3px 3px 0px #D7DACC, 8px 8px 0px rgba(0, 0, 0, 0.1);
}

p{
	margin-bottom	: 20px;
	line-height		: 1.5em;
	color: white;
}



h3{
	margin-bottom	: 20px;
	border-bottom	: 1px solid #aaa;
	color:aqua;
}

a{
	text-decoration	: none;
	color			:orange;
	font-size: 15px;
	
}

a:hover{
	color	: #DDA0DD;
}

.container{
	max-width	: 1080px;
	margin		: 20px auto;
	background:	
	rgba(0,0,0, 0.4);
	overflow	: hidden;
	padding		: 10px;
	
}

.header{
	border		: 1px solid #dedede;
	padding		: 10px;
	margin		: 10px;
	background	: orange;
}


/* main */
	.left{
		width		: 250px;
		margin		: 10px;
		float		: left;
	}
		.left ul{
			list-style-type	: none;
		}
		
		.left ul li{
			display	: block;
		}
		
		.left ul li a{
			display			:block;
			border-bottom	: 3px solid #dedede;
			margin-bottom	: 10px;
			padding			: 10px 5px;
			font-color		: #D3D2ED;
		}
		
		.left ul li a:hover{
			color:white;
		}
	
	
	.middle{
		width	: 500px;
		padding	: 10px;
		margin	: 10px;
		float	: left;
	}
		.middle img{
			max-width	: 100%;
			height		: auto;
		}
		
		.middle a{
			font-wight:bold;
		}
		
	.right{
		width	: 250px;
		padding	: 10px;
		margin	: 10px;
		float	: left;
	}

		.right img{
			max-width	: 100%;
			height		: auto;
		}
	
		.right ul{
			list-style-type	: none;
			
		}
		
		.right ul li{
			display	: block;
			
		}
		
		.right ul li a{
			display			:block;
			border-bottom	: 3px solid #dedede;
			margin-bottom	: 10px;
			padding			: 10px 5px;
		}
		
		.right ul li a:hover{
			color:white;
		}
		
	.footer{
		clear	: both;
		border	: 1px solid #dedede;
		padding	: 15px;
		margin	: 10px;
		background	: orange;
	
	}

	.footer img{
		width : 30px;
		height: 30px;
		margin :-30px;
		align-content: center;
	}

	.footer a{
		color: black;
	}
	.footer a:hover{
		color: white;
	}

@media screen and (max-width:959px){
	#container{
		width	: 100%;
	}
	#left-column{
		width	: 70%;
	}
	#right-column{
		width	: 30%;
		}
	img{
		width	: 100%;
	}
}
/******************************************
	MEDIA QUERIES ( Responsive )
*******************************************/
@media screen and (max-width:1080px){
		.container{
			width	: 100%;
		}
		
		.left{
			width		: 25%;
		}
		
		.middle{
			width	: 68%;
			float	: right;
			
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
	
	.header, 
	.footer{
		text-align: center;
	}
	.left {
		width: auto;
		float: none;
	}
	
	.middle {
		width: auto;
		float: none;
	}
	
	.right {
		width: auto;
		float: none;
	}

}


</style>


</body>	
</html>	