<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_tugas = $_GET['id_tugas'];
 

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tb_tugas WHERE id_tugas='$id_tugas'");
 
// mengalihkan halaman kembali ke index.php
header("location:list_DigitalMarketing.php?alert=berhasilhapus");
 
?>