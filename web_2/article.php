<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - Daily News</title>
    <link rel="stylesheet" type="text/css" href="src/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .card {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
        }

        span {
            display: inline-block;
        }

        img {
            width: 310px;
            margin-bottom: -20px;
            margin-right: 20px;
        }

        .echo-data {
            margin: 25px 0 10px 0;
            background-color: #00ff00;
            width: 500px
        }
    </style>
</head>
    <body>
        <div class="header">
            <h1>Article - Daily News</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="index.php">Home</a>
            <a href="#">Article</a>
            <a href="about.html">About</a>
        </div>
        <div class="content">
            <div class="card">
                <span>
                    <img 
                        src="src/img/1. pratama-arhan_169.jpeg"
                        alt="Pratama Arhan Ingin Merumput di Luar Negeri, Bagaimana Studinya di Udinus?"
                    >
                </span>
                <span>
                    <p><i>Selasa, 11 Jan 2022 19:02 WIB</i></p>
                    <h2>Pratama Arhan Ingin Merumput di Luar Negeri, Bagaimana Studinya di Udinus?</h2>
                    <p>Semarang - Pemain Timnas Indonesia Pratama Arhan memiliki impian berkarier di luar negeri, bahkan dikabarkan sudah dilirik</p>
                    <p>tim dari Korea Selatan.</p>
                    <a href="article1.html "><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="src/img/2. timnas-indonesia-vs-timnas-uni-emirat-arab-uea-2_169.jpeg"
                        alt="Sibuk di Timnas Indonesia, Arhan Terpaksa Kuliah Jarak Jauh"
                    >
                </span>
                <span>
                    <p><i>Selasa, 11 Jan 2022 20:28 WIB</i></p>
                    <h2>Sibuk di Timnas Indonesia, Arhan Terpaksa Kuliah Jarak Jauh</h2>
                    <p>Jakarta, CNN Indonesia -- Bintang baru sepak bola Indonesia, Pratama Arhan, harus menjalani kuliah jarak jauh karena</p>
                    <p>kesibukan di lapangan hijau. Arhan yang sedang</p>
                    <a href="article2.html "><p>baca selengkapnya...</p></a>
                </span>
            </div>
            <div class="card">
                <span>
                    <img 
                        src="src/img/3. ilustrasi-nft_169.jpeg"
                        alt="Mengenal NFT Foto Selfie Ghozali yang Bernilai Miliaran"
                    >
                </span>
                <span>
                    <p><i>Kamis, 13 Jan 2022 16:41 WIB</i></p>
                    <h2>Mengenal NFT Foto Selfie Ghozali yang Bernilai Miliaran</h2>
                    <p>Jakarta, CNN Indonesia -- Ghozali Everyday belakangan ramai diperbincangkan di media sosial lantaran menjual hampir 1.000</p>
                    <p>Non-Fungible Token atau NFT berupa foto selfie yang bernilai miliaran rupiah di Opensea.</p>
                    <a href="article3.html "><p>baca selengkapnya...</p></a>
                </span>
            </div>
        </div>
        <div class="content">
            <div class="card">
                <h3 style="text-align: center;">Berlangganan berita terbaru gratis!</h3>
                <table align="center">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <tr>
                            <td><label>Nama: </label></td>
                            <td><input type="text" name="fnama"></td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><input type="email" name="femail"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Submit"></td>
                        </tr>
                    </form>
                </table>
                <center>
                    <div class="echo-data">
                        <?php 
                            if(isset($_POST ['fnama'])){
                                $nama = $_POST['fnama'];
                                $email =$_POST['femail'];

                                echo "<b>Nama: </b> $nama, <b>Email: </b> $email";
                            }
                        ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="footer">
            <h3>Copyright &copy; <script>document.write(new Date().getFullYear())</script> by Daily News. All Rights Reserved.</h3>
        </div>


        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("topnav");
            var fixed = header.offsetTop;

            function myFunction() {
                if (window.pageYOffset > fixed) {
                    header.classList.add("fixed");
                } else {
                    header.classList.remove("fixed");
                }
            }
        </script>
    </body>
</html>