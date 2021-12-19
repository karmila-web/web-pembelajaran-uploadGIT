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
                    <h1 class="section-heading text-center">Materi Instalasi Python, Instalasi visual studio code, Variable, Typedata dan Operator</h1>
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
                    <figcaption class="text-center">Assalamualaikum, Selamat berjumpa kembali dalam perkuliahan daring matakuliah Pemrograman Python.
                    Selamat Belajar😊</figcaption>    
                </div>
                <hr>

                <div class="text">
                    <h2 class="text-center">KATA PENGANTAR</h2>
                    <p>Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                    <p>Segala puji bagi Allah SWT yang telah memberikan kami kemudahan sehingga kami dapat menyelesaikan materi ini dengan tepat waktu. Tanpa pertolongan-Nya tentunya kami tidak akan sanggup untuk menyelesaikan materi ini dengan baik. Shalawat serta salam semoga terlimpah curahkan kepada baginda tercinta kita yaitu Nabi Muhammad SAW yang kita nanti-natikan syafa’atnya di akhirat nanti.</p>
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi materi dari mata kuliah Pemprograman Python dengan judul <strong>“Instalasi Python, Instalasi visual studio code, Variable, Typedata dan Operator”</strong>.</p>
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
                         A. Instalasi Python<br>
                         B. Instalasi visual studio code<br>
                         C. Variable danTypedata<br>
                         D. Operator
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
                            <li>Diharapkan Mahasiswa mampu melakukan proses install python dengan baik</li>
                            <li>Diharapkan mampu melakukan proses install Visual Studio Code dengan baik</li>
                        </ul>
                        <H4>C. Rumusan Masalah</H4>
                        <ul>
                            <li>Bagaimana prosedure proses instal python</li>
                            <li>Bagaimana prosedure proses instal Visual Studio Code</li>
                        </ul>
                    </p>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB II</h1>
                        <h1 class="text-center">PEMBAHASAN</h1>
                    </div>
                    <h4>A. Pengenalan Python</h4><br>
                    <h5>Kenapa belajar python?</h5>
                    <ul>
                        <li>Mudah dimengerti</li>
                        <li>Gratis</li>
                        <li>Dynamic</li>
                        <li>Multi platform(Web development, Mobile apps dan Desktop App)</li>
                        <li>Lagi Hype(Data scients, Robotics, Mechine Learning, Data Analysis)</li>
                    </ul>
                    <h6>Kenapa python populer?</h6>
                    Karna untuk menampilkan Hello world di Python itu lebih simple dibandingkan pemprograman yang lain contohnya:</p>
                    <h6>C++</h6><img width="40%" src="assets/img/P1.png">
                    <h6>Java</h6><img width="40%" src="assets/img/P2.png">
                    <h6>Python</h6><img width="40%" src="assets/img/P3.png"><br><br>
                    <h6>Pembuat bahasa python</h6>
                    <img width="40%" src="assets/img/P4.png">
                    <p>Nama Pembuat Python: Guido Van Rossum</p>
                    <br>
                    <h4>B. Install Python dan Visual Code</h4><br>
                    <h6>1. Instalasi Python</h6>
                    <p>Search url: python.org --> Download --> Windows --> Python 3.9.6</p>
                    <img width="70%" src="assets/img/P5.png">
                    <p>Jika sudah klik tombol Python 3.9.6 lalu simpan di penyimpanan laptop dan silahkan menunggu proses download seperti dibawah ini</p>
                    <img width="50%" src="assets/img/P6.png">
                    <p>Setelah Download selesai buka/jalankan file python-3.9.6-amd64.exe hingga terbuka tampilan seperti gambar dibawah</p>
                    <img width="50%" src="assets/img/P7.png">
                    <p>Kemudian klik tombol Run dan jangan lupa klik centang untuk Add Python 3.9 to PATH dan klik Install Now seperti gambar di bawah</p>
                    <img width="50%" src="assets/img/P8.png">
                    <p>Lalu tunggu proses Install Python hingga selesai</p>
                    <img width="50%" src="assets/img/P9.png">
                    <p>Jika Proses install sudah selesai maka akan muncul tampilan seperti gambar dibawah ini kemudia klik Close</p>
                    <img width="50%" src="assets/img/P10.png">
                    <p>Silahkan melakukan pencarian seperti dibawah ini untuk memastikan install python telah berhasil</p>
                    <img width="50%" src="assets/img/P11.png">
                    <p>Search url: code.visualstudio.com-->klik Download for windows-->buka/jalankan filenya untuk melakukan proses install Visual studio code</p>
                    <img width="50%" src="assets/img/V2.png">
                    <p>Kemudian akan muncul tampilan seperti dibawah lalu pilih I accept the agreement --> klik Next</p>
                    <img width="50%" src="assets/img/V3.png">
                    <p>Kemudian pilih semua opsi Additional Tasks --> Klik Next</p>
                    <img width="50%" src="assets/img/V4.png">
                    <p>Kemudian klik Install</p>
                    <img width="50%" src="assets/img/V5.png">
                    <p>Kemudian tunggu proses install visual studio codenya</p>
                    <img width="50%" src="assets/img/V6.png">
                    <p>Lalu klik Finish</p>
                    <img width="50%" src="assets/img/V7.png">
                    <p>Kemudian tunggu hingga muncul tampilan seperti di bawah ini</p>
                    <img width="95%" src="assets/img/V8.png">
                    <p>Install extention Python di visual studio code</p>
                    <img width="50%" src="assets/img/V9.png">
                    <p>Kemudian tunggu proses installnya dan klik Install juga di bagian kanan bawah</p>
                    <img width="100%" src="assets/img/V10.png">
                    <p>Kemudian Search: Edit Environtment variable --> Open edit environtment variable --> Klik tombol edit environtment --> pada bagian System variabels pilih Path --> klik Edit --> Klik New -->Tulis script</p>
                    <img width="65%" src="assets/img/V12.png">
                    <p>Kemudian tulis scriptnya seperti gambar dibawah ini lalu klik OK --> OK --> OK</p>
                    <img width="100%" src="assets/img/V13.png">
                    <p>Kemudian klik reload required</p>
                    <img width="100%" src="assets/img/V14.png">
                    <p>Kemudian visual studio akan mereload dan akan tampil seperti gambar berikut ini</p>
                    <img width="100%" src="assets/img/V15.png"><br>
                    <br>
                    <h4>C. Variabel</h4><br>
                    <p>Variabel merupakan tempat menyimpan data yang bersifat sementara atau bisa berubah ubah, sedangkan tipe data adalah jenis data yang tersimpan dalam variabel.</p>
                    <img width="100%" src="assets/img/T1.PNG">
                    <p>Variabel di python dapat dibuat dengan format seperti ini:</p>
                    <p>nama_var = nilai</p>
                    <p>contoh:</p>
                    <img width="60%" src="assets/img/L1.PNG">
                    <h6>Aturan Penulisan Variabel</h6>
                    <p>1. Nama variabel boleh diawali menggunakan huruf atau garis bawah (_), contoh: nama, _nama, namaKu, nama_variabel.</p>
                    <p>2. Karakter selanjutnya dapat berupa huruf, garis bawah (_) atau angka, contoh: __nama, n2, nilai1.</p>
                    <p>3. Karakter pada nama variabel bersifat sensitif (case-sensitif). Artinya huruf besar dan kecil dibedakan. Misalnya, my_var dan My_var, keduanya adalah variabel yang berbeda.</p>
                    <p>4. Nama variabel tidak boleh menggunakan kata kunci yang sudah ada dalam python seperti if, while, for, dsb.</p><br>

                    <h4>D. Tipe Data</h4><br>
                    <p>Cara mengisi nilai variabel ditentukan dengan jenis datanya, misalkan untuk tipe data teks (string) maka harus diapit dengan tanda petik ("..."). Sedangkan untuk angka (integer) dan boolean tidak perlu diapit dengan tanda petik.</p>
                    <p>Contoh:</p>
                    <img width="60%" src="assets/img/L2.PNG">
                    <p>Python akan secara otomatis mengenali tipe data yang tersimpan dalam sebuah variabel.</p>
                    <p>Gunakan fungsi type().</p>
                    <p>Contoh:</p>
                    <img width="60%" src="assets/img/L3.PNG">
                    <br><br>
                    <h6>Jenis-jenis Tipe Data</h6>
                    <h6>1. Tipe Data Angka</h6>
                    <p>Tipe data terbagi lagi:</p>
                    <p>int (Integer): bilangan bulat, contoh 32, 22, 12, 10, dsb.</p>
                    <p>float: bilangan pecahan, contoh 1.3, 4.2, 22.3, dsb.</p>
                    <p>Contoh:</p>

                    <p>Angka = 100 #tipe int</p>
                    <p>BB = 23.12 #float</p>
                    <p>jarak = 3e3 #float 3000.0, huruf e artinya eksponen 10</p>

                    <h6>2. Tipe Data Teks</h6>
                    <p>Tipe data teks dibagi menjadi dua jenis lagi:</p>
                    <p>Char: Karakter, contoh 'M'.</p>
                    <p>String: Kumpulan karakter, contoh "Makanan ini enak".</p>

                    <h6>3. Tipe data boolean</h6>
                    <p>Tipe data boolean adalah tipe data yang hanya memiliki dua nilai yaitu True dan False atau 0 dan 1</p>
                    <p>Penulisan True dan False, huruf pertamanya harus kapital dan tanpa tanda petik.</p>
                    <p>Contoh:</p>
                    <img width="60%" src="assets/img/L4.PNG"><br>
                    <br>
                    <h4>E. Operator</h4><br>
                    <p>Operator di dalam Python adalah simbol khusus yang berfungsi untuk menjalankan suatu operasi tertentu</p>
                    <h6>Jenis-jenis operator pada python</h6>
                    <h6>1. Operator aritmatika</h6>
                    <p>Operator matematika adalah operator yang kita gunakan untuk menghitung operasi matematika, mulai dari penjumlahan, pengurangan, perkalian, perpangkatan, dan lain sebagainya. </p>

                    <table>
                        <tr>
                            <th>Simbol</th>
                            <th>Nama</th>
                            <th>Tugas</th>
                            <th>Contoh</th>
                        </tr>
                        <tr>
                            <td>+</td>
                            <td>penjumlahan</td>
                            <td>Untuk menjumlahkan nilai</td>
                            <td>4 + 4 = 8</td>
                        </tr>
                        <tr>
                            <td>-</td>
                            <td>Pengurangan</td>
                            <td>Untuk Mengurangkan nilai</td>
                            <td>4 - 2 = 2</td>
                        </tr>
                        <tr>
                            <td>*</td>
                            <td>Perkalian</td>
                            <td>Untuk mengalikan nilai</td>
                            <td>2 * 5 = 10</td>
                        </tr>
                        <tr>
                            <td>/</td>
                            <td>Pembagian</td>
                            <td>Untuk membagikan nilai</td>
                            <td>2 / 8 = 4</td>
                        </tr>
                        <tr>
                            <td>%</td>
                            <td>Modulus</td>
                            <td>Untuk menghitung sisa hasil bagi dari operan</td>
                            <td>10 / 3 = 1</td>
                        </tr>
                        <tr>
                            <td>**</td>
                            <td>Perpangkatan</td>
                            <td>Untuk menghitung sisa hasil bagi dari operan</td>
                            <td>2 ** 3 = 8</td>
                        </tr>
                        <tr>
                            <td>//</td>
                            <td>Pembagian Bulat</td>
                            <td>Untuk membagi operan lalu membulatkannya dengan menghapus angka dibelakang koma</td>
                            <td>10 // 3 = 3</td>
                        </tr>
                    </table>
                    <p>coba satu-persatu dari masing-masing operator di atas.</p>
                    <img width="60%" src="assets/img/L5.PNG">
                    <br><br>
                    <h6>2. Operator komparasi atau perbandingan</h6>

                    <p>Operator perbandingan adalah operator yang bertugas untuk membandingkan antar dua operan. </p>
                    <img width="60%" src="assets/img/L6.PNG">
                    <p>Contoh penggunaan</p>
                    <img width="60%" src="assets/img/L7.PNG">

                    <h6>3. Operator logika</h6>
                    <p>Operator logika adalah operator yang sangat berkaitan erat dengan operator perbandingan. Dan kedua-duanya juga mengembalikan nilai dengan tipe data yang sama yaitu boolean.</p>
                    <img width="60%" src="assets/img/L8.PNG">

                    <p>Contoh penggunaan</p>
                    <img width="60%" src="assets/img/L9.PNG">
                </div>
                <br><br><hr><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB III</h1>
                        <h1>PENUTUPAN</h1>
                    </div>
                    <h4>Kesimpulan</h4>
                    <ul>
                        <p>Python merupakan bahasa pemrograman tingkat tinggi yang  Dibuat oleh Guido van Rossum dan pertama kali dirilis pada tahun 1991. </p>
                        <p>Python banyak digunakan untuk membuat berbagai macam program, seperti: program CLI, Program GUI (desktop), Aplikasi Mobile, Web, IoT, Game, Program untuk Hacking, dsb.</p>
                        <p>Python sangat baik untuk dipelajari karna mudah dimengerti, Gratis, Dynamic, Multiplatform, lagi Hype</p>
                        <br>
                        <p>Variabel merupakan tempat menyimpan data yang bersifat sementara atau bisa berubah ubah, sedangkan tipe data adalah jenis data yang tersimpan dalam variabel.</p>
                        <p>Operator di dalam Python adalah simbol khusus yang berfungsi untuk menjalankan suatu operasi tertentu.</p>
                    </ul>
                    <br><br><br>
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
