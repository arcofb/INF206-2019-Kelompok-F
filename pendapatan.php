<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fisherman Log</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
        <h1 align="center">FISHERMAN LOG</h1>
        <h2><span class="badge badge-secondary">PENDAPATAN</span></h2>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">

                    <table class="table table-dark table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width:5%;">NO.</th>
                                <th scope="col" style="width:50%;">JENIS PENDAPATAN</th>
                                <th scope="col" style="width:25%;">HARGA</th>
                                <th scope="col" style="width:20%;">PILIHAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td class="text-center">
                                    <button class="btn btn-secondary btn-sm">Edit</button>
                                    <button class="btn btn-secondary btn-sm">Hapus</button>
                                    <button class="btn btn-secondary btn-sm">Tambah</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
            height: 500px;
            margin: 10px;
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