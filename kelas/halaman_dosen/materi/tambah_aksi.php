<?php 

include '../../koneksi/koneksi.php';

$modul_materi = $_POST['modul_materi'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$judul_materi = $_POST['judul_materi'];
$petunjuk_materi = $_POST['petunjuk_materi'];

// $rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','docx','doc','pdf','xlsx','pptx');
$filename = $_FILES['file_materi']['name'];
$ukuran = $_FILES['file_materi']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $filename;
		move_uploaded_file($_FILES['file_materi']['tmp_name'], '../../halaman/halaman_pembelajaran/'.$filename);
		mysqli_query($koneksi, "INSERT INTO tb_materi VALUES(NULL,'$modul_materi','$mata_pelajaran','$judul_materi','$petunjuk_materi','$xx')");
		header("location:../index.php?alert=berhasil");
	}else{
		header("location:../index.php?alert=gagak_ukuran");
	}
}