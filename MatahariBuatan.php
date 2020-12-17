<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/matahari.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>MATAHARI BUATAN BERHASIL DINYALAKAN</title>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    <header>
        <div class="banner">
            <h1>myfeed</h1>
        </div>
    </header>


    <nav class="navbar two bg-light" style="height: 100px; position: sticky; top: 0px;">
        <ul>
            <li><a href="index.html">Covid-19</a></li>
            <li><a href="index.html">Business</a></li>
            <li><a href="index.html">Politics</a></li>
            <li><a href="index.html">Travel</a></li>
            <li><a href="index.html">International</a></li>
            <li><a href="index.html">Technology</a></li>
            <li><a href="index.html">Lifestyle</a></li>
        </ul>
    </nav>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
        <header>
            <div class="navbar-brand">
                <a href="index.html"><img src="logo.png" alt="myfeed image"></a>
            </div>
        </header>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>about</a></li>
            <li>
                <a href="#"><i class="fas fa-exclamation"></i> Policy</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-envelope"></i> Contact</a>
            </li>

            <li><a href="#"><i id="" class="fas fa-lightbulb"></i> Dark / Light Mode</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="one">
            <h5>Positive Case</h5>
            <h3>598,933</h3>
        </div>
        <div class="two">
            <h5>Recovered</h5>
            <h3>491,975</h3>
        </div>
        <div class="three">
            <h5>Dead</h5>
            <h3>18,336</h3>
        </div>
        <div class="four">
            <h5>World Case</h5>
            <h6>Positive : 70,715,337</h6>
            <h6>Recovered : 49,145,270</h6>
            <h6>Dead : 1,588,297</h6>
        </div>
    </div>



    <div id="kecil" class="container-md-fluid">
        <div class="col-md-8">
            <h1>MATAHARI BUATAN BERHASIL DINYALAKAN</h1>
            <h6 style="opacity: .5;">Date: 10 Desember 2020 20.00</h6>
            <img src="img/amaterasu.jpg" alt="">
            <p>Akhirnya negara China berhasil menyalakan Matahari buatan yang mereka buat dengan menggunakan tenaga nuklir. Matahari itu diklaim bisa menghasilkan energi yang tidak terbatas dan ini juga diklaim bisa menciptakan energi yang lebih aman dan
                juga lebih bersih ketimbang reaktor nuklir biasa. Matahari ini bernama HL-2M Tokamak merupakan eksperimen penelitian nuklir tercanggih dan terbesar yang pernah ada di dunia untuk saat ini. Peneliti mereka mengklaim reaktornya dapat membuka
                sumber energi bersih yang kuat dan juga ramah terhadap lingkungan.</p>
            <br>
            <p>Suhu matahari ini mencapai lebih dari 150 juta derajat Celcius yang suhunya ini lebih panas 10 kali lipat dibandingkan dengan inti matahari. Matahari ini menggunakan medan magnet untuk memadukan plasma panas. Reaktor ini sering disebut "matahari
                buatan" dikarenakan panas yang dihasilkan sangatlah besar. Versi yang lebih kecil dari reaktor ini telah dikembangkan sejak 2006 oleh ilmuwan China.</p>
            <br>
            <p>Matahari ini sepertinya bisa memiliki banyak manfaat untuk umat manusia. Semoga saja dengan adanya matahari ini, dunia akan menjadi lebih baik daripada sebelumnya.</p>
            <form action="" method="POST">
                <label> Name: <br>
                    <input type="text" name="Name" class="Input" style="width: 225px" required>
                </label>
                <br><br>
                <label> Comment: <br>
                    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
                </label>
                <br><br>
                <input type="submit" name="Submit" value="Send Comment" class="Submit">
            </form>
            <?php

            if ($_POST['Submit']) {
                $Name = $_POST['Name'];
                $Comment = $_POST['Comment'];
                #Get old comments
                $old = fopen("comments4.txt", "r+t");
                $old_comments = fread($old, 1024);
                #Delete everything, write down new and old comments
                $write = fopen("comments4.txt", "w+");
                $string = "<b>" . $Name . "</b><br>" . $Comment . "<br>\n" . $old_comments;
                fwrite($write, $string);
                fclose($write);
                fclose($old);
            }

            #Read comments
            $read = fopen("comments4.txt", "r+t");
            echo "<br><br>Comments<hr>" . fread($read, 1024);
            fclose($read);

            ?>
        </div>

        <div class="col-md-4">
            <h4>BERITA TERKINI</h4>


            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col">
                        <a href="MatahariBuatan.php"><img src="img/amaterasu.jpg" class="card-img" alt="..."></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">MATAHARI BUATAN BERHASIL DINYALAKAN</h5>
                            <p class="card-text">Akhirnya negara China berhasil menyalakan Matahari buatan yang mereka buat dengan menggunakan tenaga ...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col">
                        <a href="Mensos Korupsi.php" target="_blank" style="pointer-events: fill;"><img src="img/mensos.jpg" class="card-img" alt="..."></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Mensos Tersangka Korupsi Dana Bansos</h5>
                            <p class="card-text">Belakangan ini beredar kabar bahwa menteri sosial Indonesia yang bernama Juliari Peter Batubara di tetapkan sebagai ...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col">
                        <a href="windows.php"><img src="img/internasional.jpg" class="card-img" alt="..."></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Windows akan multifungsi di 2021</h5>
                            <p class="card-text">Pada 2021 ada kabar bahwa Aplikasi Android bisa dipakai di windows 10 pada tahun 2021 mendatang. Kalau biasanya aplikasi ...</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col">
                        <a href="Tambah 6.033 Pasien, Kasus Covid-19 RI Hampir Tembus 600.000.php"><img src="img/FotoBeritaPertama.jpg" class="card-img" alt="..."></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Tambah 6.033 Pasien, Kasus Covid-19 RI Hampir Tembus 600.000</h5>
                            <p class="card-text">Total Kasus virus corona (Covid-19) di Indonesia nyaris mencapai 600.000 orang ...
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>













    <footer>
        <div class="footer-content">
            <div class="left box">
                <h2>About us</h2>
                <div class="contentfoot">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam iusto voluptate, quae delectus fugit necessitatibus numquam neque dolorem facere harum, possimus alias. Dolorem, praesentium magnam. Voluptates saepe optio unde corrupti.</p>
                    <div class="social">
                        <a href=""><span class="fab fa-facebook-f"></span></a>
                        <a href=""><span class="fab fa-twitter"></span></a>
                        <a href=""><span class="fab fa-instagram"></span></a>
                        <a href=""><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>

            <div class="center box">
                <h2>Address</h2>
                <div class="contentfoot">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">President University, Jababeka</span>
                    </div>

                    <div class="phone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+062-87875275934</span>
                    </div>

                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">myfeed@example.com</span>
                    </div>
                </div>
            </div>


            <div class="right box">
                <h2>Contact Us</h2>
                <div class="contentfoot">
                    <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>

                        <div class="msg">
                            <div class="text">Message</div>
                            <textarea cols="25" rows="2" required></textarea>
                        </div>
                        <div class="btn">
                            <button class="btn btn-primary" type="submit" style="padding: 5px 10px; margin-left: -13px;">Send</button>
                        </div>

                </div>
            </div>


        </div>
    </footer>

</body>

</html>