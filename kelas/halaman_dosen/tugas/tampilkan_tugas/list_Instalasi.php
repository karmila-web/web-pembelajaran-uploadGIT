<?php include '../../../koneksi/koneksi.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pembelajaran Interaktif - Upload file tugas</title>

	<link rel="icon" href="../../../../img/logos/logostmik.png">

	<link rel="stylesheet" href="../../../../img/logos/fontawesome/css/all.min.css">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container"><br><br>
		<h2 style="text-align: center;">List Tugas Instalasi Sistem Operasi</h2>
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
			}elseif($_GET['alert']=="berhasilhapus"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i>Success</h4>
					Berhasil Hapus Data
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
				<th width="15%">Judul Tugas</th>
				<th width="30%">Petunjuk Tugas</th>
				<th width="30%">File Tugas</th>
				<th width="10%">AKSI</th>
			</tr>
			<?php 
			$data = mysqli_query($koneksi,"SELECT * FROM tb_tugas WHERE mata_pelajaran = 'Instalasi Sistem Operasi'");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?= $d['judul_tugas']; ?></td>
					<td><?= $d['petunjuk_tugas']; ?></td>
					<td><a href="../../../halaman/halaman_tugas/<?= $d['file_tugas'] ?>"><i class="fas fa-download"></i></a> | <?= $d['file_tugas']?></td>
					<td><a class="btn btn-danger" href="deleteI.php?id_tugas=<?= $d['id_tugas']; ?>" role="button"><i class="fas fa-trash-alt"></i></a> || <a class="btn btn-warning" href="edit.php?id_tugas=<?= $d['id_tugas']; ?>"><i class="fas fa-edit"></i></a></td>
				</tr>
				<?php
			}

			?>
		</table>
	</div>
</body>
</html>