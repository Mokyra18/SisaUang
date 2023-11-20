<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icondashboard.png">
    <title>SisaUang</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            background: url(img/bghome.jpg);
            background-attachment: fixed;
            /* background-size: cover; */
            background-repeat: no-repeat;
        }   

        .parallax2 {
            background: url(img/bgtips.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <img src="img/logo.png" width="20px" style="margin-right: 10px; margin-bottom: 2px;">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">SisaUang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="login" class="nav-link">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <header id="home" class="text-light parallax">
        <div class="container konten">
            <h1 style="font-size: 36pt;">Selamat Datang di SisaUang</h1>
            <p class="lead" style="font-size: 16pt;">Aplikasi pencatatan keuangan harian dengan
                fitur
                transaksi terbaik</p>
            <a href="login" class="btn btn-outline-light button">Mulai</a>
        </div>
    </header>
    <!-- header -->

    <!-- features -->
    <section id="features" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FEATURES</div>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">SisaUang</h4>
                <p class="isi-fitur text-center">SisaUang adalah aplikasi web pencatatan keuangan harian yang
                    mempunyai fitur-fitur menarik untuk memonitoring keuangan harian anda. Direkomendasikan bagi para
                    mahasiswa yang kesulitan dalam melakukan pengelolaan keuangannya. </p>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/transaksi.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Transaksi Harian</h4>
                    <p class="isi-fitur">
                        Kami memberikan fitur transaksi harian yang akan menampilkan data
                        harian yang bisa mempermudah anda dalam mengelola keuangan pribadi. dan data keuangan anda akan
                        tersimpan dengan aman di dalam aplikasi ini.</p>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs text-right">
                    <h4 class="headline">Rekening Pribadi</h4>
                    <p class="isi-fitur">Kami menyediakan fitur rekening pribadi yang dapat mempermudah anda dalam
                        melakukan pengelolaan keuangan di dompet dan juga di rekening anda. Dengan fitur ini,
                        pengelolaan
                        uang anda di rekening menjadi lebih mudah dan terkelola dengan baik.</p>
                </div>
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/rekening.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row2">
                <div class="col-lg-6 fiturs">
                    <div class="gbr">
                        <div class="box">
                            <img src="img/monitor.jpg" class="gambar-fitur img" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fiturs">
                    <h4 class="headline">Monitoring Keuangan</h4>
                    <p class="isi-fitur">Monitoring keuangan tentunya sangat diperlukan untuk mengelola pengeluaran dan
                        pemasukan kita. kami menyediakan dashboard yang berisi beberapa fitur, seperti saldo, total
                        uang yang masuk dan keluar, dan rekening.</p>
                </div>
            </div>

        </div>
    </section>
    <!-- features -->

    <!-- about us -->
    <section id="about" class="bg-primary parallax2">
        <div class="container">
            <div style="color: white;" class="garis garis3 text-center">TIPS HEMAT</div>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/catat.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Mencatat Keuangan</h3>
                            <p>Pencatatan keuangan ini mempermudah untuk melakukan evaluasi dalam mengatur keuangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/prioritas.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Prioritas Kebutuhan</h3>
                            <p>Dengan memprioritaskan kebutuhan, harapannya pengeluaran keuangan bisa ditekan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/menabung.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Menabung</h3>
                            <p>Bertujuan untuk memenuhi kebutuhan di waktu yang akan datang serta menyiapkan dana saat ada kejadian tak terduga.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="garis garis2 text-center">CONTACT US</div>
                    <div class="row text-center">
                        <div class="col col1">
                            <a href="https://www.facebook.com/muhammadrizkyr.r?mibextid=2JQ9oc" target="_blank">
                                <!-- <img src="icons/facebook.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/facebook.png" width="60%">
                            </a>
                        </div>
                        <div class="col col2">
                            <a href="https://wa.me/+6287737737184" target="_blank">
                                <!-- <img src="icons/google-plus.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/whatsapp.png" width="60%">
                            </a>
                        </div>
                        <div class="col col3">
                            <a href="https://instagram.com/rzy_ram?igshid=MzMyNGUyNmU2YQ==" target="_blank">
                                <!-- <img src="icons/instagram.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/instagram-new.png" width="60%">
                            </a>
                        </div>
                        <div class="col col5">
                            <a href="mailto:rizkyramadhani181102@gmail.com" target="_blank">
                                <!-- <img src="icons/pinterest.png" width="70%"> -->
                                <img src="https://img.icons8.com/color/480/000000/gmail.png" width="60%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->

    <!-- Footer -->
    <div class="py-3 bg-dark">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Main</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="#home" class="js-scroll-trigger foot-link">Home</a> </li>
                        <li> <a href="#features" class="js-scroll-trigger foot-link">Features</a> </li>
                        <li> <a href="#about" class="js-scroll-trigger foot-link">About Us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Others</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="faq" class="foot-link">FAQ</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>About</b> </h5>
                    <p class="mb-0">Website SisaUang dilengkapi dengan fitur menarik yang dapat mempermudah user mengelola keuangannya.</p>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5><b>Follow us</b></h5>
                    <div class="row">
                        <div class="col-md-12 d-flex">
                            <a href="https://www.facebook.com/muhammadrizkyr.r?mibextid=2JQ9oc" class="foot-link" target="_blank">
                                <i class="d-block fa fa-facebook-official warna-icon fa-lg mr-1"></i>
                            </a>
                            <a href="https://instagram.com/rzy_ram?igshid=MzMyNGUyNmU2YQ==" class="foot-link" target="_blank">
                                <i class="d-block fa fa-instagram warna-icon fa-lg mx-1"></i>
                            </a>
                            <a href="mailto:rizkyramadhani181102@gmail.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-envelope warna-icon fa-lg ml-1"></i>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2 text-light">Copyright © 2023 All rights reserved.</p> 
                </div>
            </div>
        </div>
    </div>

    <!-- js utama -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html>