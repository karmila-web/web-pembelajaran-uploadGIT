<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar Akun</title>
  	<link rel="icon" href="../../img/logos/logostmik.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(../../img/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Silahkan isi dibawah ini!</h3>
		      	<form method="post" action="../koneksi/tambah.php" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text" name="nim" class="form-control" placeholder="Nim Anda" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Buat Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" type="reset" class="form-control btn btn-primary submit px-3">Kirim</button>
	            </div>
	            <a class="form-control btn btn-primary submit" href="../login/index.php">Batal</a>
	          </form>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

