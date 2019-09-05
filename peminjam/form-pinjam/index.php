<?php 
session_start();
include '../../template/framework-link/index.php';
include '../../template/function-form-pinjam/index.php';
include '../../koneksi.php';

$username = $_SESSION['username'];
$query = $conn->query("SELECT nama,id from user where username = '$username' ");
$cek = mysqli_num_rows($query);

if ($cek > 0) {
 $data = mysqli_fetch_assoc($query);

 $nama = $data['nama'];
 $_SESSION['id'] = $data['id'];
 $_SESSION['user'] = $data['nama'];

}
$id_pinjam = $data['id'];
$daftar_pinjam = $conn->query("SELECT * from peminjaman where id_data = '$id_pinjam'");

$ket_status = $conn->query("SELECT * from peminjaman where id_data = '$id_pinjam'");


/*
*untuk mencetak waktu yang ada di server
*/
$tanggal= mktime(date("m"),date("d"),date("Y"));
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$a = date ("H");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Sistem Perpustakaan >> Peminjaman</title>
	<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" type="text/css" href="../../assets/style-css/pinjam.css">
	<link rel="stylesheet" type="text/css" href="../../assets/style-css/style-bersama.css">

	</head>
<body>

	<style>
	@media only screen and (max-width: 600px) {
    body {
        background-color: lightblue;
        background-image: none
    }
}
</style>

	<?php 
	// memeriksa apakah level tersedia
	if ($_SESSION['level']=="") {
		header("location: ../../petugas/form-login/index.php?pesan=gagal");
	}
	 ?>

		<header id="masthead">
		<div class="container">
			<?php 
			//mencetak tanggal dan waktu
			echo "Tanggal : <b>".date("Y-m-d", $tanggal)."</b> ";//menampilkan tgl
			echo "| Pukul : <b>". $jam." "."</b>";//menampilkan waktu
			 ?>
			<center>
				<h1><i class="fas fa-user"></i> 
					<?php 
					//mengecek waktu
						if (($a>=6) && ($a<=11)){
						echo "Selamat Pagi ";
						}
						else if(($a>11) && ($a<=15))
						{
						echo "Selamat Siang ";}
						else if (($a>15) && ($a<=18)){
						echo "Selamat Sore ";}
						else { echo "Selamat Malam ";}
				 ?> 	<?php echo $nama; ?></h1>
			</center>
		</div>
	</header>
	<?php echo tagHeader2(); ?>

	<main id="main">
		<div class="container">
			<div class="row">

				<!-- sidebar form -->
				<!-- menampilkan buku yang belum di kembalikan -->
			<div class="col-md-3">
					<aside id="sidebar">
					 Ket : <p>dipinjam <i class="fas fa-times-circle"></i></p>
						   <p>dikembalikan <i class="fas fa-check"></i></p>
						Daftar Buku : 
					
						<ul class="list-unstyled"> 
						<?php 
						if ($daftar_pinjam->num_rows > 0) {
							while ($cek_daftar = $daftar_pinjam->fetch_assoc()) {
							?>

							<li>
								<?php
								//mencetak buku	
			echo $cek_daftar['nm_buku'];
			echo " : id ";
			echo $cek_daftar['id_buku'];

					if ($cek_daftar['status_buku'] == true) {
						echo '<span> <i class="fas fa-check"></i></span><br>';
					}
					else {
						echo '<span> <i class="fas fa-times-circle"></i></span><br>';
					}
				}
				
								?>
								
							</li>
							
							<?php  
						
						}
						?>	
						 

						</ul>
					</aside>
					<button type="button" class="btn btn-secondary " data-container="body" data-toggle="popover" data-placement="bottom" data-content="Jika anda sudah melakukan proses pengembalian , segera serahkan buku ke petugas perpustakaan.">
					  Catatan !	
					</button>
					<button type="button" class="btn btn-secondary " data-container="body" data-toggle="popover" data-placement="bottom" data-content="jika buku sudah di kembalikan , daftar buku akan hilang dengan sendirinya.">
					  Catatan 2 !	
					</button>
				</div>



				<div class="col-md-9">					
					<article id="article">
						<h2 class="article-title">
							Form Peminjaman Buku
						</h2>
						<section class="article-content">
							<p>Masukan identitas anda dan identitas buku :</p>
							<ul>
								
							</ul>




					<!-- form identitas diri dan buku -->
	<form action="../../handle-form/handle-peminjaman/" method="post">

  <div class="form-group">
    <label for="exampleInputBuku">Nama Buku</label>
    <input type="text" class="form-control" name="buku" id="exampleInputBuku" placeholder="Enter Book Name" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputId">ID Buku</label>
    <input type="text" class="form-control" name="id_buku" id="exampleInputId" placeholder="Enter ID Book Name" aria-describedby="IdBookHelp" required="">
    <small id="IdBookHelp" class="form-text text-muted">pastikan id sama dengan yang ada di buku.</small>
  </div>

  <!-- form validasi tanggal -->
	 <div class="form-row">
	  <div class="form-group col-md-6">
      <label for="inputState">Estimasi Pengembalian</label>
      <select name="estimasi" id="inputState" class="form-control">
        <option selected>Pilih...</option>
        <option value="1">1 hari</option>
        <option value="2">2 hari</option>
        <option value="3">3 hari</option>
        <option value="4">4 hari</option>
        <option value="5">5 hari</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="disabledInput">Tanggal Peminjaman</label>
      <input type="text" class="form-control" id="disabledInput" value="<?php echo date("Y-m-d", $tanggal); ?>" disabled="">
    </div>
     <div class="form-group col-md-3">
      <label for="disabledInput">Waktu Peminjaman</label>
      <input type="text" class="form-control" id="disabledInput" value="<?php echo date('H:i:s'); ?>" disabled="">
    </div>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Saya Setuju </label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>



						</section>
					</article>
				</div>
			</div>
		</div>		
	</main>


	<!-- footer -->

		<!-- framework -->
	<?php echo Linkjs(); ?>
<script>
	
		$(function () {
  $('[data-toggle="popover"]').popover()
})


</script>
</body>
</html>