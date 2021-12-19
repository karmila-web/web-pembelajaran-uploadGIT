<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nip = $_POST['nip'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM tb_dosen WHERE nip='$nip' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nip'] = $nip;
	$_SESSION['status'] = "login";
	header("location:../halaman_dosen/index.php");
}else{
	header("location:../login_dosen/index.php?pesan=gagal");
}
?>