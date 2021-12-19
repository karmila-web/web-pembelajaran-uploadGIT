<?php include '../../../koneksi/koneksi.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pembelajaran - List Materi</title>
	
	<link rel="icon" href="../../../../img/logos/logostmik.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="../../../../img/logos/fontawesome/css/all.min.css">
   
</head>
<body>
	<br><br>
	<div class="container">
		<h2 style="text-align: center;">List Materi Instalasi Sistem Operasi</h2>	
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
			<a href="../../index.php" class="btn btn-dark btn-sm"><i class="fas fa-backward"></i></a>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr>
				<!-- <th width="20%">Mata Pelajaran</th> -->
				<th width="9%">Modul Materi</th>
				<th width="9%">Judul Materi</th>
				<th width="25%">Petunjuk Materi</th>
				<th width="25%">File Materi</th>
				<th width="9%">AKSI</th>
				<!-- <th width="20%">Foto</th> -->
			</tr>
			<?php 
			$data = mysqli_query($koneksi,"SELECT * FROM tb_materi WHERE mata_pelajaran = 'Instalasi Sistem Operasi'");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?= $d['modul_materi']; ?></td>
					<td><?= $d['judul_materi']; ?></td>
					<td><?= $d['petunjuk_materi']; ?></td>
					<td><a href="../../../halaman/halaman_pembelajaran/<?= $d['file_materi'] ?>"><i class="fas fa-download"></i></a> | <?= $d['file_materi']?></td>
					<td><a class="btn btn-danger" href="deleteI.php?id_materi=<?= $d['id_materi']; ?>" role="button"><i class="fas fa-trash-alt"></i></a> || <a class="btn btn-warning" href="edit.php?id_materi=<?= $d['id_materi']; ?>"><i class="fas fa-edit"></i></a></td>
				</tr>
				<?php
			}

			?>
		</table>
	</div>
</body>
</html>