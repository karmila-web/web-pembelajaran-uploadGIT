<!DOCTYPE html>
<html>
<head>
	<title>Tambah Materi</title>

	<link rel="icon" href="../../../../img/logos/logostmik.png">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="icon" href="../../../../img/logos/logostmik.png">
</head>
<body>
	<div class="container"><br><br>
		<h2 style="text-align: center;">Tambah Tugas</h2>

		<?php
			include '../../../koneksi/koneksi.php';
			$id_tugas = $_GET['id_tugas'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_tugas where id_tugas='$id_tugas'");
			while($d = mysqli_fetch_array($data)){
		?>

		<form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
			<div class="form-group">

				<input type="hidden" name="id_tugas" value="<?= $d['id_tugas']; ?>">
				<label>Mata Pelajaran :</label>
				<select name="mata_pelajaran" class="form-control form-select" aria-label="Default select example">
				  <!-- <option selected>--Pilih--</option> -->
				  <?php 

	 			if ($d['mata_pelajaran'] == "Instalasi Sistem Operasi") { ?>
				   <option value="Instalasi Sistem Operasi" selected > Instalasi Sistem Operasi</option>
				   <option value="Pemprograman Python">Pemrograman Python</option>
				   <option value="Pemprograman Java">Pemprograman Java</option>
				   <option value="Digital Marketing">Digital Marketing</option>
				</select>

				<?php } elseif ($d['mata_pelajaran'] == "Pemprograman Python") { ?>
				  <option value="Instalasi Sistem Operasi">Instalasi Sistem Operasi</option>
				  <option value="Pemprograman Python" selected>Pemrograman Python</option>
				  <option value="Pemprograman Java">Pemprograman Java</option>
				  <option value="Digital Marketing">Digital Marketing</option>
				</select>

				<?php } elseif ($d['mata_pelajaran'] == "Pemprograman Java") { ?>
				  <option value="Instalasi Sistem Operasi">Instalasi Sistem Operasi</option>
				  <option value="Pemprograman Python">Pemrograman Python</option>
				  <option value="Pemprograman Java" selected>Pemprograman Java</option>
				  <option value="Digital Marketing">Digital Marketing</option>
				</select>
				<?php } else { ?>
				  <option value="Instalasi Sistem Operasi">Instalasi Sistem Operasi</option>
				  <option value="Pemprograman Python">Pemrograman Python</option>
				  <option value="Pemprograman Java">Pemprograman Java</option>
				  <option value="Digital Marketing" selected>Digital Marketing</option>
				</select>

				<?php } ?>
			</div>
			<div class="form-group">
				<label>Judul Tugas :</label>
				<input type="text" class="form-control" name="judul_tugas" required="required" value="<?= $d['judul_tugas']; ?>">
			</div>
			<div class="form-group">
				<label>Petunjuk Tugas :</label>
				<input class="form-control" name="petunjuk_tugas" required="required" value="<?= $d['petunjuk_tugas']; ?>"></input>
			</div>
			<div class="form-group">
				<label>File Tugas :</label>
				<input type="file" class="form-control" name="file_tugas" required="required" value="<?= $d['file_tugas']; ?>" >
			</div>		

			<?php } ?>	
			<!-- <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .pdf | .docx | .xls | .ppt</p>
			</div>			 -->
			<!-- <input type="submit" name="" value="Simpan" class="btn btn-primary btn-lg"> -->
			<input class="btn btn-primary" type="submit" value="Input">
			<a class="btn btn-primary" href="list_instalasi.php" role="button">Kembali</a>
		</form>
	</div>

</body>
</html>