<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pembelajaran Media Interaktif</title>

    <link rel="stylesheet" href="../../../img/logos/fontawesome/css/all.min.css">
    <link rel="icon" href="../../../img/logos/logostmik.png">

    <!-- Bootstrap Core CSS -->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="../../../css/stmik.t.css" rel="stylesheet">

</head>

<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../../login_dosen/index.php?pesan=belum_login");
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
                <img  class="img img-responsive" src="../../../img/logos/logostmik(1).png" height="120px" width="120px" >
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="../index.php">Kembali</a>
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

    <!-- Isi Postingan -->
    <div class="container-fluid ngeblog">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="intro">
                    <h1 class="section-heading text-center">Materi Percabangan</h1>
                        <p class="text-center">
                            <span class="by"></span>
                            <a href="#">Team</a>
                            <span class="date">Juli, 2021</span>
                        </p>
                    <center> 
                    <img class="img-fluid d-block" src="../../../img/logos/logostmik.png" width="100px" height="100px">
                    </center>
                    <figcaption class="text-center">Assalamualaikum, Selamat berjumpa kembali dalam perkuliahan daring matakuliah Pemrograman Python.
                    Selamat Belajar😊</figcaption>    
                </div>
                <hr>

                <div class="text">
                    <h2 class="text-center">KATA PENGANTAR</h2>
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <p>Segala puji bagi Allah SWT yang telah memberikan kami kemudahan sehingga kami dapat menyelesaikan materi ini dengan tepat waktu. Tanpa pertolongan-Nya tentunya kami tidak akan sanggup untuk menyelesaikan materi ini dengan baik. Shalawat serta salam semoga terlimpah curahkan kepada baginda tercinta kita yaitu Nabi Muhammad SAW yang kita nanti-natikan syafa’atnya di akhirat nanti.</p>
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi materi dari mata kuliah Pemprograman Python dengan judul <strong>“Materi Percabangan”</strong>.</p>
                    <p>Penulis tentu menyadari bahwa materi ini masih jauh dari kata sempurna dan masih banyak terdapat kesalahan serta kekurangan di dalamnya. Untuk itu, penulis mengharapkan kritik serta saran dari pembaca untuk materi ini, supaya materi ini nantinya dapat menjadi makalah yang lebih baik lagi. Kemudian apabila terdapat banyak kesalahan pada materi ini penulis mohon maaf yang sebesar-besarnya.</p>
                    <p>Penulis juga mengucapkan terima kasih kepada semua pihak khususnya kepada Dosen kami yang telah membimbing dalam menulis materi ini.</p>
                    <p>Demikian, semoga materi ini dapat bermanfaat dan dapat dengan mudah untuk dicerna. Terima kasih.</p>
                    <br><br>
                    <p><strong>Makasssar, 28 Juli 2021</p><br>
                    Karmila S<br>NIM:   10184047</strong>
                    <br><br>
                </div>
                <hr>
                <div class="text">
                    <h2 class="text-center">DAFTAR ISI</h2>
                    <b>KATA PENGANTAR</b><br>
                    <b>DAFTAR ISI</b><br><br>
                    <b>BAB I PENDAHULUAN</b><br>
                         A. Latar Belakang <br>
                         B. Tujuan <br>
                         C. Rumusan Masalah <br><br>
                    <b>BAB II PEMBAHASAN</b><br>
                         A. Pengertian Percabangan<br>
                         B. Struktur Percabangan if<br>
                         C. Struktur Percabangan if - else<br>
                         D. Struktur Percabangan if - elif - else
                         <br><br>
                    <b>BAB III PENUTUP</b><br>
                         A. Kesimpulan <br>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB I</h1>
                        <h1 class="text-center">PENDAHULUAN</h1>
                    </div>
                    <h4>A. Latar Belakang</h4>
                    <p>Python merupakan bahasa pemrograman tingkat tinggi yang  Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991.</p>
                    <p>Python banyak digunakan untuk membuat berbagai macam program, seperti: program CLI, Program GUI (desktop), Aplikasi Mobile, Web, IoT, Game, Program untuk Hacking, dsb.</p>
                    <p>Python sangat baik untuk dipelajari karna mudah dimengerti, Gratis, Dynamic, Multiplatform, lagi Hype</p>
                    <h4>B. Tujuan</h4>
                    <p>
                        <ul>
                            <li>Diharapkan mahasiswa mampu memahami logika percabangan pada python</li>
                            <li>Diharapkan mahasiswa mampu memahami logika if </li>
                            <li>Diharapkan mahasiswa mampu memahami logika if - else </li>
                            <li>Diharapkan mahasiswa mampu memahami logika if - elif - else</li>
                        </ul>
                        <H4>C. Rumusan Masalah</H4>
                        <ul>
                            <li>Apa yang dimaksud perbandingan</li>
                            <li>Bagaimana menerapkan if, if - else dan if - elif - else pada python</li>
                        </ul>
                    </p>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB II</h1>
                        <h1 class="text-center">PEMBAHASAN</h1>
                    </div>
                    <h4>A. Pengertian Percabangan</h4>
                    <p>Percabangan merupakan seleksi yang melakukan pengecekan suatu kondisi untuk mengarahkan program agar berjalan sesuai dengan keinginan. Percabangan pada python dibagi menjadi beberapa bentuk, diantaranya :</p>

                    <ul>
                        <li>Perintah if</li>
                        <li>Perintah if - else</li>
                        <li>Perintah if - elif - else</li>
                    </ul><br>

                    <h4>B. Struktur Percabangan if</h4>
                    <p>Percabangan if digunakan hanya ada satu pilihan keputusan.</p>
                    <p>Selain If, terdapat Else juga yang akan dieksekusi apabila kondisi LULUS == "ya" (true).</p>

                    <h5>Contoh kasus</h5>
                    <p>Jika lulus ujian, maka tidak remidial.Disini hanya memiliki satu pilihan keputusan selain dari itu tidak akan dieksekusi</p>
                    <h5>Flowchart</h5>
                    <img width="35%" src="assets/img/f.png">
                    <h5>Script python</h5>
                    <p>Mari kita coba script pythonnya:</p>
                    <img width="60%" src="assets/img/c.png">

                    <br><br>
                    <h4>C. Struktur Percabangan if - else</h4>

                    <p>Percabangan if digunakan hanya ada satu pilihan keputusan saat ada satu pilihan dan hanya mimilih satu pilihan keputusan.</p>
                    <h6>Contoh kasus</h6>
                    <p>Jika tidak lulus ujian, maka remidial. Tapi jika lulus maka tidak remidial.</p>
                    <img width="54%" src="assets/img/f1.png">
                    <p>Mari kita coba script pythonnya:</p>
                    <img width="60%" src="assets/img/c1.png">

                    <br><br>
                    <h4>D. Struktur Percabangan if - elif - else</h4>

                    <p>Struktur percabangan If/Elif/Else digunakan jika terdapat lebih dari dua pilihan keputusan.</p>
                    <p>elif artinya Else if, ini berfungsi untuk membuat kondisi/logika tambahan jika kondisi/logika pertama salah.</p>

                    <h6>Contoh kasus</h6>
                    <p>Jika hari Sabtu maka saya kerja, jika hari Minggu saya libur. Selain hari sabtu dan minggu maka saya kuliah</p>
                    <img width="60%" src="assets/img/f2.png">
                    <p>Mari kita coba script pythonnya:</p>
                    <img width="40%" src="assets/img/c2.png">
                    <p>Hasil dari Script di atas</p>
                    <img width="50%" src="assets/img/c2_1.png">

                </div>
                <br><br><hr><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB III</h1>
                        <h1 class="text-center">PENUTUPAN</h1>
                    </div>
                    <h4>Kesimpulan</h4>
                    <p>Percabangan merupakan seleksi yang melakukan pengecekan suatu kondisi untuk mengarahkan program agar berjalan sesuai dengan keinginan. Percabangan pada python dibagi menjadi beberapa bentuk, diantaranya :</p>

                    <ul>
                        <li>Perintah if</li>
                        <li>Perintah if - else</li>
                        <li>Perintah if - elif - else</li>
                    </ul>
                    <p>Percabangan if digunakan hanya ada satu pilihan keputusan.</p>
                    <p>Percabangan if digunakan hanya ada satu pilihan keputusan saat ada satu pilihan dan hanya mimilih satu pilihan keputusan.</p>
                    <p>Struktur percabangan If/Elif/Else digunakan jika terdapat lebih dari dua pilihan keputusan.</p>

                    <p>if artinya penyeleksian suatu kondisi jika kondisi if bernilai True maka akan mengeksekusi kode yang ada di dalam if.</p>
                    <p>elif artinya Else if, ini berfungsi untuk membuat kondisi/logika tambahan jika kondisi/logika pertama salah.</p>
                    <p>else artinya jika eksekusi if(kondisi pertama) bernilai False dan eksekusi elif bernilai False juga maka akan mengeksekusi kode yang ada didalam else.</p>
                        


                </div>
                <hr>
                
            </div>
        </div>     
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; STMIK PROFESIONAL MAKASSAR</span>
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
    <script src="../../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="../../../js/jqBootstrapValidation.js"></script>
    <script src="../../../js/contact_me.js"></script>

    <!-- Theme JavaScript  -->
    <script src="../../../js/stmik.t.js"></script>

</body>

</html>
