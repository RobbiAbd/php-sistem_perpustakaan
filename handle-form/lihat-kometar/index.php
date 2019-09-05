<?php 
include '../../template/framework-link/index.php';
include("../../peminjam/form-masukan/publishcomment.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Komentar</title>
		<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/style-css/lihat-komen.css">
</head>
<body background="https://conficio.design/wp-content/uploads/2017/05/pencil-bg-e1493978556373.gif">

<style>
		@media only screen and (max-width: 600px) {
.btn {
    margin-bottom: 10px;
}
		}
</style>


<div class="container">
  <div id="publishcomment">
<?php
//method menampilkan seluruh komen yang ada 
 echo getcomment("1"); 
?>
</div>
	<center>
	<a href="../../petugas/form-login/" role="submit" class="btn btn-primary">
		Login untuk berkomentar
	</a>
	<a href="../../" role="submit" class="btn btn-primary">
		kembali ke halaman awal
	</a>
	</center>
</div>







	<!-- framework -->
	<?php echo Linkjs(); ?>
</body>
</html>