<?php 

include '../../koneksi/koneksi.php';

$mata_pelajaran = $_POST['mata_pelajaran'];
$judul_tugas = $_POST['judul_tugas'];
$petunjuk_tugas = $_POST['petunjuk_tugas'];

// $rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','docx','doc','pdf','xlsx','pptx');
$filename = $_FILES['file_tugas']['name'];
$ukuran = $_FILES['file_tugas']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 104407099){		
		$xx = $filename;
		move_uploaded_file($_FILES['file_tugas']['tmp_name'], '../../halaman/halaman_tugas/'.$filename);
		mysqli_query($koneksi, "INSERT INTO tb_tugas VALUES(NULL,'$mata_pelajaran','$judul_tugas','$petunjuk_tugas','$xx')");
		header("location:../index.php?alert=berhasil");
	}else{
		header("location:../index.php?alert=gagak_ukuran");
	}
}