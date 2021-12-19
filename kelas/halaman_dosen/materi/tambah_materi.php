<!DOCTYPE html>
<html>
<head>
	<title>Tambah Materi</title>

	<link rel="icon" href="../../img/logos/logostmik.png">
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="icon" href="../../../img/logos/logostmik.png">
</head>
<body>
	<div class="container"><br><br>
		<h2 style="text-align: center;">Tambah Materi</h2>
		<form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Mata Pelajaran :</label>
				<select name="mata_pelajaran" class="form-control form-select" aria-label="Default select example">
				  <option selected>--Pilih--</option>
				  <option value="Instalasi Sistem Operasi">Instalasi Sistem Operasi</option>
				  <option value="Pemprograman Python">Pemrograman Python</option>
				  <option value="Pemprograman Java">Pemprograman Java</option>
				  <option value="Digital Marketing">Digital Marketing</option>
				</select>	
				<!-- <input type="text" class="form-control" name="mata_pelajaran" required="required"> -->
			</div>
            <div class="form-group">
				<label>Modul Materi :</label>
				<input type="text"x class="form-control" name="modul_materi" required="required">
			</div>
			<div class="form-group">
				<label>Judul Materi :</label>
				<input type="text" class="form-control" name="judul_materi" required="required">
			</div>
			<div class="form-group">
				<label>Petunjuk Materi :</label>
				<textarea class="form-control" name="petunjuk_materi" required="required"></textarea>
			</div>
			<div class="form-group">
				<label>File Materi :</label>
				<input type="file" class="form-control" name="file_materi" required="required">
			</div>			
			<!-- <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .pdf | .docx | .xls | .ppt</p>
			</div>			 -->
			<!-- <input type="submit" name="" value="Simpan" class="btn btn-primary btn-lg"> -->
			<input class="btn btn-primary" type="submit" value="Input">
			<a class="btn btn-primary" href="../index.php" role="button">Kembali</a>
		</form>
	</div>

</body>
</html>