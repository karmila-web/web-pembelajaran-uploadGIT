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

    <!-- isi postingan -->
    <div class="container-fluid ngeblog">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                <!-- Postingan pertama -->
                        <div class="intro">
                            <h1 class="section-heading text-center">Materi Proses Instalasi Ubuntu 20.04</h1>
                                <p class="text-center">
                                    <span class="by">by</span>
                                     <a href="#">Team</a>
                                    <span class="date">Juli, 2021 </span>
                                </p>
                                <br>
                            <img class="img-fluid d-block" style="display: block; margin-left: auto; margin-right: auto;" src="../../../img/logos/logostmik.png" width="100px"      height="100px"><br>
                            <figcaption class="text-center">Assalamualaikum, Selamat berjumpa kembali dalam perkuliahan daring matakuliah Instalasi Komputer materi kali ini adalah Instalasi Linux Ubuntu .
                            Selamat Belajar😊 </figcaption>    
                        </div>
                        <hr>
                <div class="text">
                    <h2 class="text-center p-0">KATA PENGANTAR</h2>
                    <p>Assalamu’alaikum warahmatullahi wabarakatuh<p>  

                    <p>Segala puji bagi Allah SWT yang telah memberikan kami kemudahan sehingga kami dapat menyelesaikan materi ini dengan tepat waktu. Tanpa pertolongan-Nya tentunya kami tidak akan sanggup untuk menyelesaikan materi ini dengan baik. Shalawat serta salam semoga terlimpah curahkan kepada baginda tercinta kita yaitu Nabi Muhammad SAW yang kita nanti-natikan syafa’atnya di akhirat nanti.</p>
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi materi dari mata kuliah Instalasi Komputer dengan judul <strong>“Proses Instalasi Ubuntu 20.04”</strong>.</p>
                    <p>Penulis tentu menyadari bahwa materi ini masih jauh dari kata sempurna dan masih banyak terdapat kesalahan serta kekurangan di dalamnya. Untuk itu, penulis mengharapkan kritik serta saran dari pembaca untuk materi ini, supaya materi ini nantinya dapat menjadi makalah yang lebih baik lagi. Kemudian apabila terdapat banyak kesalahan pada materi ini penulis mohon maaf yang sebesar-besarnya.</p>
                    <p>Penulis juga mengucapkan terima kasih kepada semua pihak khususnya kepada Dosen kami yang telah membimbing dalam menulis materi ini.</p>
                    <p>Demikian, semoga materi ini dapat bermanfaat dan dapat dengan mudah untuk dicerna. Terima kasih.</p>
                    <br><br>
                    <p><strong>Makassar, Juli 2021</p>
                    <br>
                    Team</strong>
                    <br><br>
                </div>
                <hr>
                <div class="text">
                    <h2 class="text-center p-0">DAFTAR ISI</h2>
                    <b>KATA PENGANTAR</b><br>
                    <b>DAFTAR ISI</b><br><br>
                    <b>BAB I PENDAHULUAN</b><br>
                         A. Latar Belakang <br>
                         B. Tujuan <br>
                         C. Rumusan Masalah <br><br>
                    <b>BAB II PEMBAHASAN</b><br>
                         A. Proses instalan Ubuntu 20.04<br><br>
                    <b>BAB III PENUTUP</b><br>
                         A. Kesimpulan <br>
                </div>
                <br><br><hr>

                <!-- Postingan Kedua -->
                <div>
                    <div class="intro">
                    <h1 class="text-center p-0">BAB I</h1>
                    <h1 class="text-center p-0">PENDAHULUAN</h1>
                    </div>
                    <h4>A. Latar Belakang</h4>
                    <p>Pada ubuntu 20.04 tentunya lebih sempurna dari pada ubuntu sebelumnya, fitur-fitur ubuntu 20.04 mengalami peningkatan atau perubahan yang sangat baik seperti lock screen baru, walpaper baru, Ukuran .iso image yang lebih kecil, peningkatan bermain games dll.            <p>Windows 10 merupakan sistem operasi komputer pribadi yang dikembangkan oleh Microsoft sebagai bagian dari keluarga sistem operasi Windows NT. Diperkenalkan pada tanggal 30 September 2014,[3] dirilis pada 29 Juli 2015 dan pada November 2015, Threshold 2 dari Windows 10 (v10.0.10586) dirilis ke publik.</p>

                    <p> Rilis perdana pada 20 Oktober 2004, Tujuan dari distribusi Linux Ubuntu adalah membawa semangat yang terkandung di dalam filosofi Ubuntu ke dalam dunia perangkat lunak. </p>
                    <h4>B. Tujuan</h4>
                    <p>
                    <ul>
                        <li>Untuk menambah wawasan tentang ubuntu 20.04</li>
                        <li>Diharapkan semua Mahasiswa dapat menerapkan proses instalasi ubuntu 20.04 ini</li>
                    </ul>
                    <H4>C. Rumusan Masalah</H4>
                    <ul>
                        <li>Bagaimana prosedure proses instalan ubuntu 20.04</li>
                    </ul>
                </p>
                </div>
                <br><br>
                <hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center p-0">BAB II</h1>
                        <h1 class="text-center p-0">PEMBAHASAN</h1>                        
                    </div>
                    <h4>A. Proses Instalasi Ubuntu 20.04 LTS</h4><br>
                    <!-- <h5>Persiapan Penginstalan</h5>
                    <p>Sebelum memulai instalasi, Pastikan memenuhi persyaratan umum berikut untuk membantu khususnya bagi pemula sehingga memudahkan proses penginstalan:</p>
                    <ul>
                        <li>Perhatikan spesifikasi minimum PC telah memenuhi syarat.</li>
                        <li>Ketahui tipe processor 32-bit atau 64-bit.</li>
                        <li>Wajib siapkan driver ubuntu yang dibutuhkan untuk memaksimalkan kinerja sistem windows. Namun ini dilakukan setelah instalasi selesai.</li>
                        <li>Siapkan software atau aplikasi untuk komputer dan laptop yang paling penting dan sering digunakan, karena setelan windows aslinya hanya menyediakan program yang terbatas.
                        <p>Pada saat memulai instalasi kita perlu “boot”</p></li>
                    </ul> -->
                    
                    <h6>Instalasi ubuntu 20.04 LTS</h6>
                    <p>Untuk menginstal ubuntu 20.04 LTS pada komputer dan laptop:</p>
                    <h6>1. Download driver ubuntu 20.04 LTS</h6>
                    <p>Untuk mendownload driver ubuntu 20.04 silahkan menuju situs utama <a href="https://ubuntu.com/#download">ubuntu<i>(klik disini).</i></a>
                    <br>Selanjutnya klik tombol hijau "20.04 LTS" seperti gambar dibawah ini
                    </p>
                    <br><img width="70%" src="assets/img/U1.PNG"><br><br>
                    <p>Setelah mendownload driver ubuntu 20.04 LTS kita juga butuh tool untuk menyimpan ubuntu di flash disk. disini, kita akan menginstall ubuntu  di flashdisk dengan aplikasi <a href="https://www.pendrivelinux.com/universal-usb-installer-easy-as-1-2-3/">Universal USB Installer<i>(klik disini)</i></a>.
                    sekarang colok flashdisk anda.jika sudah selesai proses download lalu buka aplikasinya.</p>
                    <img width="70%" src="assets/img/U2.PNG"><br><br>
                    <p>Selanjutnya klik saja <b>“I Agree”</b> -->  <b>“Step 1”</b> silahkan pilih Ubuntu. --> <b>“Step 2”</b>, pilih file Ubuntu yang sudah kita download. --> <b>“Step 3”</b>, pilih Flash Disk anda. Untuk menghindari adanya gangguan kita bisa melakukakn format flashdisk dengan cara memberi tanda centang pada <b>“Fat32 Format Drive"</b> Jika ruang kosong mencukupi kita tidak perlu melakukan format. selanjutnya tunggu hingga Ubuntu dipindahkan ke Flash Disk.</p>
                    <h6>2. Pengaturan boot komputer agar menggunakan Flash Disk</h6>
                    <p>Untuk melakukan pengaturan boot komputer agar menggunakan  ini caranya berbeda-beda disetiap komputer. Disini daya menggunakan merk laptop <b>HP</b></p>
                    <p>Kemudian restart komputer --> Sebelum layar menyala tekan tompol ESC berulang kali hingga layar memunculkan tampilan seperti dibawah --> tekan tombo "f9" untuk memilih <b> “Boot Device Options”</b>. </p>
                    <img width="70%" src="assets/img/U3.PNG">
                    <p>Selanjutnya, kita akan masuk ke layar <b>“Boot Manager”</b>. Temukan merk flash disk yang terpasang dan pilih menggunakan keyboard. Jika sudah terpilih, tekan tombol enter.</p>
              <img width="50%" src="assets/img/U4.PNG">
              <p>Tunggu proses diatas sampai diminta untuk memilih opsi <b>Boot ubuntu</b>. Selanjutnya pilih opsi yang pertama yang tulisannya hanya <b>Ubuntu</b> saja </p>
              <h6>3. Install Ubuntu</h6>
              <p>Setelah menunggu, akan muncul tampilan seperti dibawah</p>
              <img width="70%" src="assets/img/U5.PNG">
              <p>Selanjutnya klik <b>Install Ubuntu</b></p>
              <img width="70%" src="assets/img/U7.PNG">
                <p>Pada bagian <b>“Keyboard Layout”</b>, biarkan saja pengaturan secara default lalu klik <b>“Continue”</b></p>
              <img width="70%" src="assets/img/U6.PNG">
              <p>Pada bagian<b>“Installation type”</b> ada 2 opsi. Pertama yaitu <b>“Erase disk and install Ubuntu"</b> di opsi Ini
                 ubuntu akan menghapus seluruh data di hard drive. Namun jika masih ada data anda lainnya, klik pilihan <b>“Something else”</b>  Disini, saya memilih opsi pertama dan klik <b>“Install Now”</b>.</p>
              <img width="70%" src="assets/img/U8.PNG">
              <p>Selanjutnya akan muncul pemberitahuan seperti diatas.Selanjutnya ubuntu melakukan konfirmasi. Jika kita sudah yakin, klik <b>“Continue”</b></p>
              <img width="70%" src="assets/img/U9.PNG">
              <p>Pada bagian <b>“Where are you”</b>, pilihlah kota dimana tempat kita tinggal. lalu, klik <b>“Continue”</b></p>
              <img width="70%" src="assets/img/U10.PNG">
              <p>Selanjutnya pada bagian <b>“Who are you”</b> silahkan lengkapi data anda dan password yang anda masukkan akan di gunakan pada saan komputer dinyalakan. Selanjutnya klik <b>"Continue"</b> lalu tunggu proses instalasi selesai. jika sudah selesai, silahkan klik <b>"Restart Now..."</b>  </p>
              <h6>4. Selesai install Ubuntu 20.04</h6> 
              <p>Jika proses restart sudah selesai atau komputer sudah menyala kembali silahkan masukkan password anda yang sudah kita buat untuk memulai menggunakan Ubuntu 20.04</p>
              
                </div>
                <br><br>
                <hr><br>
                <div>
                    <div class="intro">
                        <h1 class="text-center p-0">BAB III</h1>
                        <h1 class="text-center p-0">PENUTUPAN</h1><br>
                    </div>
                <h4>Kesimpulan</h4><br>
                <p>Disetiap rilis ubuntu selalu mecoba mempermudah proses istalasi yang semakin mudah dan penjelasan yang sudah semakin jelas. Dengan update keamanan dan perbaikan selama 5 tahun sehingga sangat cocok dan sangat baik digunakan saat bekerja <br> Sekian dan Terima kasih <br> Wassalamualaikum Wr. Wb.</p>
                </div><br>
                <hr>
                <div>
                    <br>    
                   
                </div><br><br>
    
            </div>
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

    <!-- Theme JavaScript -->
    <script src="../../../js/stmik.t.js"></script>

</body>

</html>
