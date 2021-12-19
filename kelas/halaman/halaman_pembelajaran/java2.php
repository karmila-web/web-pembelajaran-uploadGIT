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
                    <h1 class="section-heading text-center">Materi Text Field, Button & JOptionPane</h1>
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
                    <p>Penulis mengucapkan syukur kepada Allah SWT atas limpahan nikmat sehat-Nya, baik itu berupa sehat fisik maupun akal pikiran, sehingga penulis mampu untuk menyelesaikan pembuatan untuk memenuhi materi dari mata kuliah Pemprograman Java dengan judul <strong>“Text Field, Button & JOptionPane”</strong>.</p>
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
                         A. Memulai Program <br>
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
                            <li>Diharapkan Mahasiswa Mampu membuat program sederhana</li>
                        </ul><br>
                        <H4>C. Rumusan Masalah</H4>
                        <ul>
                            <li>Bagaimana cara membuat project</li>
                            <li>Bagaimana memberi id pada tiap komponen</li>
                            <li>Bagaimana mengatur tiap komponen</li>
                        </ul>
                    </p>
                </div>
                <br><br><hr>
                <div>
                    <div class="intro">
                        <h1 class="text-center">BAB II</h1>
                        <h1 class="text-center">PEMBAHASAN</h1>
                    </div><br>
                    <h4>A. Memulai Program</h4>
                    <p>1. Klik File →New Project</p>
                    <img width="65%" src="assets/img/J1.PNG"><br><br>
                    
                    <p>2. Tulis nama project dan lokasi penyimpanan</p>
                    <img width="65%" src="assets/img/J2.PNG"><br><br>

                    <p>3. Klik kanan default package</p>
                    <img width="65%" src="assets/img/J3.PNG"><br><br>

                    <p>4. Buat nama form</p>
                    <img width="65%" src="assets/img/J4.PNG"><br><br>

                    <p>5. Berikut jendela tampilan form</p>
                    <img width="65%" src="assets/img/J5.PNG"><br><br>

                    <p>6. Atur komponen yang akan digunakan</p>
                    <img width="35%" src="assets/img/J6.PNG"><br><br>

                    <!-- <p>6. Ubah properties dari komponen</p>
                    <img width="45%" src="assets/img/J7.PNG"><br><br> -->

                    <h4>B. Class / Komponen GUI</h4>
                    <p>Beberapa komponen GUI diataranya :</p>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama Komponen</th>
                            <th>Properties</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>jPanel1</td>
                            <td>Border = Line Border</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>jPanel2</td>
                            <td>Border = Line Border</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>jPanel3</td>
                            <td>Border = Line Border</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>jPanel4</td>
                            <td>Border = Line Border</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>jLabel1</td>
                            <td>BorderFont (CTRL+Space) = Tahoma, Bold, 
                                14
                                Text = Keliling Persegi Panjang = Line Border
                            </td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>jLabel2</td>
                            <td> Text = Panjang</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>jLabel3</td>
                            <td> Text = Lebar</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>jLabel4</td>
                            <td> Text = Hitung</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>jLabel5</td>
                            <td> Text = Cm</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>jLabel6</td>
                            <td> Text = Cm</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>jLabel7</td>
                            <td> Text = Cm</td>
                        </tr>
                        <tr>
                            <td>12.</td>
                            <td>jButton1 </td>
                            <td>Propertise :Text = Hitung
                            Code :Variabel Name = Hitung
                            </td>
                        </tr>
                        <tr>
                            <td>13.</td>
                            <td>jButton2</td>
                            <td>Propertise : Text = Bersihkan
                            Code : Variabel Name =Bersihkan</td>
                        </tr>
                        <tr>
                            <td>14.</td>
                            <td>jButton3</td>
                            <td>Propertise : Text = Keluar
                            Code : Variabel Name = Keluar</td>
                        </tr>
                        <tr>
                            <td>15.</td>
                            <td>jFrame</td>
                            <td>Propertise : Title = Program Hitung 
                                Keliling
                                Code :
                                Form Size = [329, 329]
                                Generate Size = true 
                                Generate Center =true
                                </td>
                        </tr>
                        <tr>
                            <td>16.</td>
                            <td>jTextField1 </td>
                            <td>Code : Variabel Nama= panjang</td>
                        </tr>
                        <tr>
                            <td>17.</td>
                            <td>jTextFiel21 </td>
                            <td>Code : Variabel Nama= lebar</td>
                        </tr>
                        <tr>
                            <td>18.</td>
                            <td>jTextField3 </td>
                            <td>Code : Variabel Nama= hasil</td>
                        </tr>

                    </table><br>
   

                    <p>8.   Hasil perubahan properties</p>
                    <img width="35%" src="assets/img/J7.PNG"><br><br>
                    
                    
                
                    <br>
                <div><hr>
                    <div class="intro">
                        <h1 class="text-center">BAB III</h1>
                        <h1 class="text-center">PENUTUPAN</h1>
                    </div><br>
                    <h4>Kesimpulan</h4>
                    <p>MEMULAI PROGRAM dengan cara</p>
                    <ul>
                        <li>1. Klik File →New Project</li>
                        <li>2. Tulis nama project dan lokasi penyimpanan</li>
                        <li>3. Klik kanan default package</li>
                        <li>4. Buat nama form</li>
                        <li>5. Menampilkan jendela tampilan form</li>
                        <li>6. Atur komponen yang akan digunakan</li>
                    </ul>
                    <br>
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
