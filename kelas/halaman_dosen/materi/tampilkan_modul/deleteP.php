<?php 
// koneksi database
include '../../../koneksi/koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_materi = $_GET['id_materi'];
 

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tb_materi WHERE id_materi='$id_materi'");
 
// mengalihkan halaman kembali ke index.php
header("location:list_PemprogramanPython.php?alert=berhasilhapus");
 
?>