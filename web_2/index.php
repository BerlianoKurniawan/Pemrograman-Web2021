<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Daily News</title>
    <link rel="stylesheet" type="text/css" href="src/res/layout.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .greeting {
            text-align: center;
            background-color: #ff8000;
            color: #ffffff;
            margin: -20px -20px 20px -20px;
            padding: 100px 0 100px 0;
        }

        .greeting a {
            color: #ffffff;
        }

        .span-2 {
            display: inline-block;
        }

        .span-2 img {
            width: 433px;
        }
        
        .card {
            background-color: #f1f1f1;
            padding: 10px;
            margin-bottom: 10px;
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
            <h1>Home - Daily News</h1>
        </div>
        <div id="topnav" class="topnav">
            <a href="#">Home</a>
            <a href="article.php">Article</a>
            <a href="about.html">About</a>
        </div>
        <div class="content">
            <div class="greeting">
                <h1>Hai, Selamat Datang. </h1>
                <p>Mencari berita terkini? Disini tempatnya portal berita paling baru.</p>
                <br>
                <h2>Klik pada 
                    <a href="article.php">
                        tautan berikut
                    </a>
                !</h2>
            </div>
            <span>
                <a href="article1.html">
                    <img 
                        src="src/img/1. pratama-arhan_169.jpeg"
                        alt="Pratama Arhan Ingin Merumput di Luar Negeri, Bagaimana Studinya di Udinus?"
                        style="width: 872px;"
                    >
                </a>
            </span>
            <span class="span-2">
                <a href="article2.html">
                    <img 
                        src="src/img/2. timnas-indonesia-vs-timnas-uni-emirat-arab-uea-2_169.jpeg"
                        alt="Sibuk di Timnas Indonesia, Arhan Terpaksa Kuliah Jarak Jauh"
                    >
                </a>
                <br>
                <a href="article3.html">
                    <img 
                        src="src/img/3. ilustrasi-nft_169.jpeg"
                        alt="Mengenal NFT Foto Selfie Ghozali yang Bernilai Miliaran"
                    >
                </a>
            </span>
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