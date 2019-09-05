<?php
include '../../koneksi.php';




function tagHeader2()
{  
	echo '<nav id="main-navigation">
		<div class="container">
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" href="../form-pinjam/"><i class="fas fa-book"></i> Peminjaman</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../../peminjam/form-kembali/"><i class="fas fa-book"></i>
 Pengembalian</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" href="../tabel-laporan/"><i class="fas fa-table"></i> Laporan Peminjaman/Pengembalian</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../../peminjam/form-masukan/"><i class="fas fa-envelope"></i> Kirim Masukan</a>
			  </li>
			  <li class="nav-item">
			<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lainnya
  </button>
  <div class="dropdown-menu">
         <a class="dropdown-item " href="../../handle-form/handle-form-logout/"><i class="fas fa-sign-out-alt"></i> Log out</a>

  </div>
</div>
			  </li>

			</ul>
		</div>
	</nav>';
}

function tagHeader() {

	echo '
	<header id="masthead">
		<div class="container">
			<center>
				<h1><i class="fas fa-user"></i> Selamat datang </h1>
			</center>
		</div>
	</header>
	<nav id="main-navigation">
		<div class="container">
			<ul class="nav">
			  <li class="nav-item">
			    <a class="nav-link active" href="../form-pinjam/"><i class="fas fa-book"></i> Peminjaman</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../../peminjam/form-kembali/"><i class="fas fa-book"></i>
 Pengembalian</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active" href="../tabel-laporan/"><i class="fas fa-table"></i> Laporan Peminjaman/Pengembalian</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="../../peminjam/form-masukan/"><i class="fas fa-envelope"></i> Kirim Masukan</a>
			  </li>
			  <li class="nav-item">
			<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Lainnya
  </button>
  <div class="dropdown-menu">
         <a class="dropdown-item " href="../../handle-form/handle-form-logout/"><i class="fas fa-sign-out-alt"></i> Log out</a>

  </div>
</div>
			  </li>

			</ul>
		</div>
	</nav>
';
}

function tagSidebar () {

	echo '
	<link rel="stylesheet" type="text/css" href="../../assets/style-css/style-bersama.css">

	<div class="col-md-3">
					
					<button type="button" class="btn btn-secondary " data-container="body" data-toggle="popover" data-placement="bottom" data-content="Jika anda sudah melakukan proses pengembalian , segera serahkan buku ke petugas perpustakaan.">
					  Catatan !	
					</button>	
					
							
				</div>';
				
}

function tagFooter() {
	echo '	<footer id="site-footer" class="text-center">
		<div class="container">
			<small>SMKN 1 Talaga &copy;</small>
		</div>
	</footer>';
}
