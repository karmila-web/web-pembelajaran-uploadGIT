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
                    <h1 class="section-heading text-center">Materi Instalasi Windows</h1>
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
                    <figcaption class="text-center">Assalamualaikum, Selamat berjumpa kembali dalam perkuliahan daring matakuliah Instalasi Komputer materi kali ini adalah Instalasi Windows.
                    Selamat Belajar😊</figcaption>    
                </div>
                <hr>

                <div class="text">
                    <h2 class="text-center">KATA PENGANTAR</h2>
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <p>Segala puji bagi Allah SWT yang telah memberikan kami kemudahan sehingga kami dapat menyelesaikan makalah ini dengan tepat waktu. Tanpa pertolongan-Nya tentunya kami tidak akan sanggup untuk menyelesaikan makalah ini dengan baik. Shalawat serta salam semoga terlimpah curahkan kepada baginda tercinta kita yaitu Nabi Muhammad SAW yang kita nanti-natikan syafa’atnya di akhirat nanti.</p>
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi tugas dari mata kuliah Pengelolaan Instalasi Komputer dengan judul <strong>“Proses Instalasi Windows 10”</strong>.</p>
                    <p>Penulis tentu menyadari bahwa makalah ini masih jauh dari kata sempurna dan masih banyak terdapat kesalahan serta kekurangan di dalamnya. Untuk itu, penulis mengharapkan kritik serta saran dari pembaca untuk makalah ini, supaya makalah ini nantinya dapat menjadi makalah yang lebih baik lagi. Kemudian apabila terdapat banyak kesalahan pada makalah ini penulis mohon maaf yang sebesar-besarnya.</p>
                    <p>Penulis juga mengucapkan terima kasih kepada semua pihak khususnya kepada guru Bahasa Indonesia kami yang telah membimbing dalam menulis makalah ini.</p>
                    <p>Demikian, semoga makalah ini dapat bermanfaat. Terima kasih.</p>
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
                         A. Proses instalan windows 10<br><br>
                    <b>BAB III PENUTUP</b><br>
                         A. Saran <br>
                    <b>DAFTAR PUSTAKA</b>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB I</h1>
                        <h1 class="text-center">PENDAHULUAN</h1>
                    </div>
                    <h4>A. Latar Belakang</h4>
                    <p>Pada windows 10 tentunya lebih sempurna dari pada windows sebelumnyaa, di dalam fitur-fitur windows 10 terasa lebih lengkap dan tampilannya pun lebih menarik.</p>
                    <p>Windows 10 merupakan sistem operasi komputer pribadi yang dikembangkan oleh Microsoft sebagai bagian dari keluarga sistem operasi Windows NT. Diperkenalkan pada tanggal 30 September 2014,[3] dirilis pada 29 Juli 2015 dan pada November 2015, Threshold 2 dari Windows 10 (v10.0.10586) dirilis ke publik.</p>

                    <p>Pertama diperkenalkan pada bulan April 2014 pada Konferensi Build, Windows 10 bertujuan untuk mengatasi kekurangan dalam antarmuka pengguna pertama kali diperkenalkan oleh Windows 8 dengan menambahkan mekanik tambahan yang dirancang untuk meningkatkan pengalaman pengguna untuk perangkat yang tidak ada layar sentuh (seperti komputer meja dan laptop), termasuk kebangkitan menu Mulai yang terlihat di Windows 7, sistem desktop maya, dan kemampuan untuk menjalankan aplikasi Bursa Windows dalam jendela pada desktop dari pada modus layar penuh.</p>
                    <h4>B. Tujuan</h4>
                    <p>
                        <ul>
                            <li>Untuk menambah wawasan tentang Windows 10</li>
                            <li>Untuk memenuhi tugas</li>
                        </ul>
                        <H4>C. Rumusan Masalah</H4>
                        <ul>
                            <li>Bagaimana prosedure proses instalasi windows 10</li>
                        </ul>
                    </p>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB II</h1>
                        <h1 class="text-center">PEMBAHASAN</h1>
                    </div>
                    <h4>A. Proses Instal Windows 10</h4><br>
                    <h5>Persiapan Penginstalan</h5>
                    <p>Sebelum memulai instalasi, Pastikan memenuhi persyaratan umum berikut untuk membantu khususnya bagi pemula sehingga memudahkan proses penginstalan:</p>
                    <ul>
                        <li>Perhatikan spesifikasi minimum PC telah memenuhi syarat.</li>
                        <li>Ketahui tipe processor 32-bit atau 64-bit.</li>
                        <li>Wajib siapkan driver windows yang dibutuhkan untuk memaksimalkan kinerja sistem windows. Namun ini dilakukan setelah instalasi selesai.</li>
                        <li>Siapkan software atau aplikasi untuk komputer dan laptop yang paling penting dan sering digunakan, karena setelan windows aslinya hanya menyediakan program yang terbatas.
                        <p>Pada saat memulai instalasi kita perlu “boot”</p></li>
                    </ul>
                    <h6>Instalasi Windows 10</h6>
                    <p>Untuk menginstal windows 10 pada komputer dan laptop:</p>
                    <ul>
                        <li>Nyalakan komputer atau Laptop. masukan terlebih dahulu Flashdisknya sebelum PC dinyalakan, agar terdeteksi dengan PC.</li>
                        <li>Atur “Boot” atau “Booting” Pertama di Menu BIOS atau UEFI</li>
                        <br><img src="assets/img/win1.png"><br><br>
                        <p>Masuk Menu BIOS dengan menekan tombol “F2” terus-menerus dengan cepat SAAT menyalakan PC, mungkin pada merk lain dapat mencoba menekan tombol F1 / F9 / F10 / Del.</p>
                        <p>Sesudah masuk Menu “BIOS”, kemudian cari “Boot” dan Pastikan Booting pertama menggunakan Flashdisk sebagai medianya. Boot ini pada merk lain terkadang harus dicari dan disesuaikan.</p>
                        <li>Masukan DVD Windows 10 buat yang memakai drive-optic sebagai medianya.</li>
                        <li>Jika pengaturan Boot sudah benar, maka simpan atau “save” dan “restart”, nanti akan tampil seperti gambar dibawah, kemudian tekan ENTER untuk memulai proses instalasinya.</li>
                        <br><img src="assets/img/win2.png"><br><br>
                        <li>Pilih Bahasa “English” kemudian klik “Next”.</li>
                        <br><img src="assets/img/win3.png"><br><br>
                        <li>Klik “Install now” untuk melanjutkan.</li>
                        <li>Masukan “Product Key” windows 10..</li>
                        <br><img src="assets/img/win4.png"><br><br>
                        <li>Klik kotak kecil “I Accept the license terms”, dan kemudian klik “Next”.</li>
                        <br><img src="assets/img/accept.png"><br><br>
                        <li>Pilih “Custom: Install Windows only (Advanced)”. Ini adalah prosedur “Clean Install” dan mulai instalasi dari awal agar sistem operasi terbebas dari virus dan bersih.</li>
                        <br><img src="assets/img/win5.png"><br><br>
                        <li>Atur Partisi untuk memilih penginstalan sistem sesuai dengan keinginan. Tapi harap di ingat Partisi sistem operasi sebelumnya harus dihapus dengan menekan “Delete” kemudian ganti dengan partisi baru. Pengaturan ini bisa dilakuin memakai kursor mouse yang di atur pada partisi tertentu, nanti tombol pengaturan lengkap akan tersedia.</li>
                        <br><img src="assets/img/win6.png"><br><br>
                        <p>- <br>"New"</br> untuk membuat partisi baru<br>
                            - <b>“Delete”</b> untuk menghapus Partisi <br>
                            - <b>“Format”</b> untuk format Partisi. <br>
                            - Harap diperhatikan, Pastikan Partisi yang berisi data penting tidak terhapus, ini merupakan langkah yang sangat penting dan harus hati-hati, dan jika tidak yakin simpan aja dulu data penting pada tempat lain yang aman dan ulangi lagi prosesnya dari awal. <br>
                            - Atur kursor pada partisi yang diinginkan untuk instalasi windows yang baru, kemudian klik Next seperti gambar di atas untuk melanjutkan.</p>
                        <li>Memulai Proses trensfer dan instalasi secara otomatis</li>
                        <br><img src="assets/img/win7.png"><br><br>
                    </ul>
                </div>
                <br><br><hr><br>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB III</h1>
                        <h1>PENUTUPAN</h1>
                    </div>
                    <h4>Kesimpulan</h4>
                    <ul>
                        <li>Pada langkah awal yang perlu kita lakukan adalah mempersetujui lisensi penginstalan.</li>
                    </ul>
                    <br><br><br>
                </div>
                <hr>
                <div>
                    <br><br>
                    <div class="text">
                        <h2 class="text-center">DAFTAR PUSTAKA</h2><br><br>
                    </div>
                    <ul>
                        <li><a href="https://aura-ilmu.com/wiki/cara-instal-windows-10/">https://aura-ilmu.com/wiki/cara-instal-windows-10/</a></li>
                        <li><a href="https://id.wikipedia.org/wiki/Windows_10">https://id.wikipedia.org/wiki/Windows_10</a></li>
                    </ul>
                </div><br><br>
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
