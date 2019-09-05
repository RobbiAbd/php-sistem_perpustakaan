<?php 
include 'template/framework-link/index.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Online</title>

	<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" type="text/css" href="assets/style-css/style-landing.css">
	
</head>
<body background="https://conficio.design/wp-content/uploads/2017/05/pencil-bg-e1493978556373.gif">

<style>
	@media only screen and (max-width: 600px) {
    body {
           background: linear-gradient(to top , aquamarine , red);
       }
       .tombol {
       	margin-bottom: 125px;
       }
}
</style>
	
	<!-- header navbar-->
	<div class="pos-f-t">
	  <div class="collapse" id="navbarToggleExternalContent">
	    <div class="bg-dark p-4"">
	      <h5 class="text-white h4">Masuk Sebagai Petugas</h5>
	      <span class="text-muted">
	      	<a href="petugas/form-login/"><i class="fas fa-tools"></i> Masuk </a>
	      </span>
	      <h5 class="text-white h4">Buat Akun Siswa</h5>
	      <span class="text-muted">
	      	<a href="petugas/form-daftar/"><i class="fas fa-tools"></i> Daftar </a>
	      </span>
	    </div>
	  </div>
  <nav class="navbar navbar-dark bg-dark">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
  </nav>

  	<!-- content title -->
	</div>
		<div class="title-landing">
			<center><p>Perpustakaan</p></center>
		</div>
		<div class="sub-title-landing">
			<center><p>Aplikasi ini untuk memudahkan anda meminjam dan mengembalikan buku , secara online.</p></center>
		</div>
	


			<!-- button -->
			<div class="tombol">
	<center>
	<a href="petugas/form-login/" role="submit" class="btn btn-primary">
		Pinjam Buku
	</a>
	<a href="handle-form/lihat-kometar/" role="submit" class="btn btn-primary">
		Lihat Komentar
	</a>
	</center>
	</div>

















	<!-- framework -->
	<?php echo Linkjs(); ?>
</body>
</html>