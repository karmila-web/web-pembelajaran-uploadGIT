<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pembelajaran Media Interaktif</title>

    <link rel="stylesheet" href="../../img/logos/fontawesome/css/all.min.css">
    <link rel="icon" href="../../img/logos/logostmik.png">

    <!-- Bootstrap Core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../css/stmik.t.css" rel="stylesheet">

</head>

 <!-- cek apakah sudah login -->
    <?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../login/index.php?pesan=belum_login");
    }
    ?>

<body id="page-top" class="index"> 
    
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img  class="img img-responsive" src="../../img/logos/logostmik(1).png" height="120px" width="120px" >
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../koneksi/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header --> 
    <header>
        <div class="container">
            <div class="intro-text">
            </div>
        </div>
    </header> 


    <div class="container">
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Materi Pembelajaran</h2>
                        <h3 class="section-subheading text-muted">Silahkan memulai pembelajaran</h3>
                        <!-- <h3 class="section-subheading"><a href="#services" class="page-scroll btn btn-xl"><i class="fa-stack fa-plus"></i></a></h3> -->
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Instalasi Sistem Operasi</h4>
                            <a href="halaman_pembelajaran/instalwindows.php" target="_blank">Modul I</a> <br>
                            <a href="halaman_pembelajaran/instalubuntu.php" target="_blank">Modul II</a><br>
                            <a href="tampilkan_modul/list_Instalasi.php">List Materi</a><br>
                            <a href="tampilkan_tugas/list_Instalasi.php">List Tugas</a><br>

                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-python fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Pemrograman Python</h4>
                        <a href="halaman_pembelajaran/python1.php" target="_blank">Modul I</a> <br>
                        <a href="halaman_pembelajaran/python2.php" target="_blank">Modul II</a><br>
                        <a href="tampilkan_modul/list_PemprogramanPython.php">List Materi</a><br>
                         <a href="tampilkan_tugas/list_PemprogramanPython.php">List Tugas</a><br>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fab fa-java fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Pemprograman Java</h4>
                            <a href="halaman_pembelajaran/java1.php" target="_blank">Modul I</a> <br>
                            <a href="halaman_pembelajaran/java2.php" target="_blank">Modul II</a><br>
                            <a href="tampilkan_modul/list_PemprogramanJava.php">List Materi</a><br>
                            <a href="tampilkan_tugas/list_PemprogramanJava.php">List Tugas</a><br>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-headset fa-stack-1x fa-inverse"></i>
                            <!-- <i class="fas fa-ad fa-stack-1x fa-inverse"></i> -->
                        </span>
                        <h4 class="service-heading">Digital Marketing</h4>
                        <a href="halaman_pembelajaran/market1.php" target="_blank">Modul I</a> <br>
                        <a href="halaman_pembelajaran/market2.php" target="_blank">Modul II</a><br>
                        <a href="tampilkan_modul/list_DigitalMarketing.php">List Materi</a><br>
                        <a href="tampilkan_tugas/list_DigitalMarketing.php">List Tugas</a><br>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; STMIK PROFESIONAL MAKASSAR</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/stmikpro" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://web.facebook.com/stmikprof/?_rdc=1&_rdr" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/stmik_profesional_official/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <li><a href="https://www.youtube.com/channel/UC_c14WMsXhQX5Eh2d8taaDg" target="_blank"><i class="fa fa-youtube"></i></a></li>    
                        </li>
                    </ul>
                </div>
                <div style='text-align: right;'>
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script src="../../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../js/stmik.t.js"></script>

</body>

</html>
