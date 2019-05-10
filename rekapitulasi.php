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
    <div class="middle">
        <h3 align="center">FISHERMAN LOG</h3>
        <div class="left">

        </div>
        <div class="right">

        </div>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

    </div>
    <div class="footer">
        <p align="center"><a href="http://facebook.com"><img src="images/fb.png"></a></p>
        <p align="center"><a href="http://facebook.com">Follow Us on Facebook</a></p>
    </div>
    <style>
        body {
            background-image: url('images/1.jpg');
            background-size: cover;
        }



        .footer {
            clear: both;
            border: 1px solid #dedede;
            padding: 10px;
            margin: 10px;
            background: orange;

        }

        .footer img {
            /* margin-left: 60px; */
            width: 30px;
            height: 30px;
            margin: -20px;
            align-content: center;
        }

        .footer a {
            color: black;
        }

        .footer a:hover {
            color: white;
        }

        .middle {
            width: 1080px;
            height: 500px;
            margin: 20px auto;
            background:
                rgba(0, 0, 0, 0.4);
            overflow: hidden;
            padding: 10px;

        }

        .right {
            width: 250px;

            /* border	: 1px solid #dedede; */
            /* box-shadow: 7px 7px; */
            /* background-color: #dedede; */
            padding: 10px;
            margin: 10px;
            float: left;
        }

        .right img {
            max-width: 100%;
            height: auto;
        }

        .left {
            width: 450px;
            /* border: 2px solid black; */
            /* background-color: white; */
            margin: 10px;
            float: left;
            /* box-shadow: 7px 7px; */
            /* background-color:  */
        }

        /* Remove margins and padding from the list, and add a black background color */
        ul.topnav {
            list-style-type: none;
            padding: 10px;
            margin: 10px;
            overflow: hidden;
            background-color: orange;
        }

        /* Float the list items side by side */
        ul.topnav li {
            float: left;
        }

        /* Style the links inside the list items */
        ul.topnav li a {
            display: inline-block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of links on hover */
        ul.topnav li a:hover {
            background-color: white;
        }

        /* Hide the list item that contains the link that should open and close the topnav on small screens */
        ul.topnav li.icon {
            display: none;
        }

        /* Saat lebar layar kurang dari 680 pixel, sembunyikan semua menu item kecuali item 
yang pertama yaitu("Home"). Tampilkan juga list item yang berisi link untuk membuka 
menu yaitu (li.icon) 
*/
        @media screen and (max-width:680px) {
            ul.topnav li:not(:first-child) {
                display: none;
            }

            ul.topnav li.icon {
                float: right;
                display: inline-block;
            }

            .middle {
                width: 68%;
                float: center;

            }

            .left {
                width: 25%;
                /* background	: #D6CCFE; */
            }


            .right {
                clear: both;
                padding: 1% 4%;
                width: auto;
                float: none;
                /* background	: #D6CCFE; */
            }
        }

        /* Class dengan nama "responsive" akan ditambahkan oleh JavaScript saat user mengklik icon. 
   Munculnya Class ini akan mendisplay isi list menu
*/
        @media screen and (max-width:680px) {
            ul.topnav.responsive {
                position: relative;
            }

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

            .middle {
                width: 68%;
                float: center;

            }

            .left {
                width: 25%;
                /* background	: #D6CCFE; */
            }

            .right {
                clear: both;
                padding: 1% 4%;
                width: auto;
                float: none;
                /* background	: #D6CCFE; */
            }

            img {
                width: 100%;
            }
        }
    </style>


</body>
<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
    }
</script>

</html>