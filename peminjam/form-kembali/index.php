<?php 
include '../../template/framework-link/index.php';
include '../../template/function-form-pinjam/index.php';
session_start();

$id_pinjam = $_SESSION['id'];
$daftar_pinjam = $conn->query("SELECT * from peminjaman where id_data = '$id_pinjam'");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Pengembalian</title>
		<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/style-css/style-kembali.css">
		<link rel="stylesheet" type="text/css" href="../../assets/style-css/style-bersama.css">
</head>
<body>

	

		<?php echo tagHeader(); ?>
	
		<main id="main">
		<div class="container">
			<div class="row">
				<!-- sidebar form -->
				<?php echo tagSidebar(); ?>
				
				<div class="col-md-9">					
					<article id="article">
						<h2 class="article-title">
							Form Pengembalian Buku
						</h2>
						<section class="article-content">
							<p>Anda hanya perlu memasukan ID buku yang anda pinjam untuk melakukan proses pengembalian :</p>
							<ul>
								<!-- <li>
									<span class="label">Nama:</span> Robbi Abdul Rohman
								</li>
								<li>
									<span class="label">Kelas:</span> XI RPL 2
								</li>
								<li>
									<span class="label">TTL:</span> Majalengka, 12/20/2001
								</li>
								<li>
									<span class="label">Alamat:</span> Cikjing
								</li> -->
							</ul>

					
					<!-- form identitas diri dan buku -->
	<form method="post" action="../../handle-form/handle-pengembalian/index.php">
  	<div class="form-group">


  <div class="form-group">
    <label for="exampleInputId">ID Buku</label>
    <input type="text" class="form-control" id="exampleInputId" placeholder="Enter ID Book Name" aria-describedby="IdBookHelp" name="id_hapus">
    <small id="IdBookHelp" class="form-text text-muted">pastikan id sama dengan yang ada di buku.</small>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Saya Setuju </label>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>


						</section>
					</article>
				</div>
			</div>
		</div>		
	</main>




			<!-- framework -->
	<?php echo Linkjs(); ?>


	<script>
	
		$(function () {
  $('[data-toggle="popover"]').popover()
})


</script>
</body>
</html>