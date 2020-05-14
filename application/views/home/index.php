<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets') ?>/b4/dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">

	<title>Aplikasi Lacak No HP</title>
</head>

<body>



	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Hp Number Tracker</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
				aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link nav-home" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<h2 class="judul text-center">Aplikasi Lacak Nomer Handphone</h2>
		<h6 class="deskripsi text-center">
			Aplikasi ini saya buat untuk mencari tahu identitas no hanphone seseorang. cara kerjanya yaitu anda tinggal
			memasukan no hp dan sistem akan memindai no nik yang di daftarkan di no hp tersebut. setelah selesai akan
			menampilkan data dari nik. <br> <br>
			Silahkan mencoba ...
		</h6>
	</div>

	<div class="container konten">
		<form action="" method="post" id="myform">
			<label for=""> Masukan format : 0812-XXXX-XXXX harus sama</label><br>
			<div class="input-group mb-3">
				<input type="tel" pattern="^\d{4}-\d{4}-\d{4}$" required class="form-control"
					placeholder="Masukan No Hp ex:0812-XXXX-XXXX" aria-label="Recipient's username"
					aria-describedby="basic-addon2" name="no_hp">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit" id="tombol">Cari</button>
				</div>
			</div>
		</form>
	</div>

	<!-- <div class="preloader">
		<div class="loading">
			<img src="<?= base_url('assets/image/') ?>poi.gif" width="80">
			<p>Harap Tunggu</p>
		</div>
	</div> -->

	<?php if($_POST) { ?>
	<div class="container-fluid hasil">
		<h5 class="text-center">Sedang mencari no <?= $_POST['no_hp'] ?></h5>
		<div class="hasil-cari text-center">
			wkwkwkwkkw .... <br>
			Hanya bercanda ... <br>
			Saya membuat ini karena kesal di rumah gak ada kerjaan <br>
			bagikan ke yang lain biar merasakannya juga <br>
		</div>
	</div>
	<?php } ?>

	<div class="footer text-center bg-dark fixed-bottom">
		Copyright &copy; 2020 Created By <a href="https//andi.dherpl.site"></a>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url('assets') ?>/js/jquery-3.4.1.min.js">
	</script>
	<script src="<?= base_url('assets') ?>/js/popper.min.js">
	</script>
	<script src="<?= base_url('assets') ?>/b4/dist/js/bootstrap.min.js">
	</script>

</body>

</html>
