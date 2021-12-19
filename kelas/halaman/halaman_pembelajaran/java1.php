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

    <style>
        /*design table 1*/
.table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
}
 
.table1, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
}
    </style>
    
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
                    <h1 class="section-heading text-center">Materi Graphical User Interface (GUI)</h1>
                        <p class="text-center">
                            <span class="by"></span>
                            <a href="#">Team</a>
                            <span class="date">Juli, 2021</span>
                        </p>
                    <br>    
                    <center> 
                    <img class="img-fluid d-block" src="../../../img/logos/logostmik.png" width="100px" height="100px">
                    </center>
                    <br>
                    <figcaption class="text-center">Assalamualaikum, Selamat berjumpa kembali dalam perkuliahan daring matakuliah Pemprograman Java.
                    Selamat Belajar😊</figcaption>    
                </div>
                <hr>

                <div class="text">
                    <h2 class="text-center">KATA PENGANTAR</h2>
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <p>Segala puji bagi Allah SWT yang telah memberikan kami kemudahan sehingga kami dapat menyelesaikan materi ini dengan tepat waktu. Tanpa pertolongan-Nya tentunya kami tidak akan sanggup untuk menyelesaikan materi ini dengan baik. Shalawat serta salam semoga terlimpah curahkan kepada baginda tercinta kita yaitu Nabi Muhammad SAW yang kita nanti-natikan syafa’atnya di akhirat nanti.</p>
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi materi dari mata kuliah Pemprograman Java dengan judul <strong>“Graphical User Interface (GUI)”</strong>.</p>
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
                    <b>BAB II PEMBAHASAN</b> <br>
                         A. Konsep Pemprograman GUI <br>
                         B. Class/Komponen GUI <br>
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
                    <p>Seiring dengan perkembangan teknologi internet, banyak hal mengalami perubahan menjadi lebih Hitech. Banyak hal yang beberapa dekade lalu hanya bisa dilakukan secara offline dan manual, saat ini sudah bisa dilakukan secara online. Mulai dari urusan komunikasi, hiburan bahkan belanja sekarang sudah bisa dilakukan secara online.</p>
                    <p>Dengan semakin banyaknya orang yang sadar akan potensi internet berdampak kepada semakin menjamurnya website. </p>
                    <p>Sebagai penggiat IT ini merupakan sebuah peluang yang sangat baik dan sangat mubadzir untuk dilewatkan. Itulah sebabnya seolah kemampuan untuk membuat website dan sosial media marketing menjadi sesuatu yang esensial dan sangat dianjurkan untuk dikuasai.</p>
                    <p>Melihat potensinya yang sedemikian besar, membuat banyak orang ingin belajar bagaimana cara memulai bisnis online. Tapi memulai bisnis online bukanlah sebuah perkara mudah, sehingga banyak orang kesulitan dalam mendalaminya, terlebih bagi mereka yang belum memiliki wawasan fundamental tentang internet marketing.</p><br>

                    <h4>B. Tujuan</h4>
                    <p>
                        <ul>
                            <li>Diharapkan Mahasiswa Memahami Apa itu Pemrograman GUI</li>
                            <li>Diharapkan Mahasiswa Memahami Apa itu AWT</li>
                            <li>Diharapkan Mahasiswa Memahami Apa itu Swing</li>
                        </ul><br>
                        <H4>C. Rumusan Masalah</H4>
                        <ul>
                            <li>Apa itu Pemrograman GUI</li>
                            <li>bagaimana penerapan konsep Pemrograman GUI</li>
                        </ul>
                    </p>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB II</h1>
                        <h1 class="text-center">PEMBAHASAN</h1>
                    </div><br>
                    <h4>A. Konsep Pemrograman GUI</h4>
                    <p>Pemrograman GUI adalah pemrograman yang mengandalkan 
                    kemampuan tampilan dalam bentuk grafik, dimana program yang dibuat 
                    dapat memberikan kenikmatan tersediri pada penggunanya, tidak lagi 
                    monoton dengan hitam putih dan mode dos.
                    </p>
                    <p>Dalam pemrograman GUI, kita dapat menggunakan komponen 
                    GUI untuk menciptakan sebuah tampilan atau interface yang diinginkan 
                    dengan menyertakan package yang kita butuhkan didalam program yang 
                    kita buat. Package tersebut diantaranya AWT (Application Windowing 
                    Toolkit) dan Swing.</p>
                    <p>AWT adalah GUI toolkit pertama pada Bahasa pemrograman 
                    java, namun package ini kekurang komponen yang bisa digunakan untuk 
                    membangun sebuah aplikasi desktop. AWT merupakan aplikasi native, 
                    dimanan jika aplikasi yang dibagun dengan package AWT dijalankan pada 
                    sistem operasi windows maka aplikasi tersebut akan terlihat seperti 
                    aplikasi windows pada umumnya, begitu pula jika dijalankan pada sistem 
                    operasi Mac maupun GNU/Linux. Hal ini dikarena AWT benar-benar 
                    memanggil native subrutin untuk menggambar setiap komponennya ke 
                    layar.</p>
                    <p>Swing adalah package/library java yang digunakan untuk 
                    menciptakan grafik User Interface (GUI), dengan java swing kita dapat 
                    membuat user interface yang cross platform atau OS independent. Cross 
                    platform artinya user interface yang kita buat dapat dijalankan pada 
                    sistem operasi apa saja (OS yang support Java) dengan tampilan yang 
                    relative sama. Kita dapat membuat user interface yang menyerupai 
                    windows XP, MAC atau Linux tanpa tergantung dengan sistem operasi 
                    yang kita gunakan. Swing adalah bagian dari Java Foundation Classes 
                    (JFC) yang mana terdapat fasilitas untuk menambahakan Rich Graphical 
                    Functionality</p>
                    <p>Tipe program yang berbasis pada GUI komponen, diataranya :</p>
                    <p>1. Graphical componens (GUI)</p>
                    <p>Yaitu berupa rancangan tampilan program yang dikemas dengan 
                    menggunakan komponen-komponen grafik</p>
                    <p>2. Listener Methods</p>
                    <p>Yaitu berfungsi untuk menerima dan merespon event yang 
                    terjadi</p>
                    <p>3. Application Methods</p>
                    <p>Fungsi atau baris perintah yang berguna bagi pengguna untuk 
                    menghasilkan kegiatan dalam bentuk respon.</p>


                    <h4>B. Class / Komponen GUI</h4>
                    <p>Beberapa komponen GUI diataranya :</p>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama Komponen</th>
                            <th>Kegunaan</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>JWindow</td>
                            <td>Membuat window</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </table>
   
                    <br>
                <div><hr>
                    <div class="intro">
                        <h1 class="text-center">BAB III</h1>
                        <h1 class="text-center">PENUTUPAN</h1>
                    </div><br>
                    <h4>Kesimpulan</h4>
                    <p>Pemrograman GUI adalah pemrograman yang mengandalkan kemampuan tampilan dalam bentuk grafik, dimana program yang dibuat dapat memberikan kenikmatan tersediri pada penggunanya, tidak lagi monoton dengan hitam putih dan mode dos. </p>
                    <p>AWT adalah GUI toolkit pertama pada Bahasa pemrograman java, namun package ini kekurang komponen yang bisa digunakan untuk membangun sebuah aplikasi desktop.</p>
                    <p>Swing adalah package/library java yang digunakan untuk menciptakan grafik User Interface (GUI), dengan java swing kita dapat membuat user interface yang cross platform atau OS independent.</p><br>
                </div><hr>
                
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
