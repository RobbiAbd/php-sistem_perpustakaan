<?php 
//mengaktifkan session pada php
session_start();

//koneksi
include '../../koneksi.php';

//menangkap data yang di kirim
if (!isset($_POST['submit'])) {

	$username = addslashes(trim($_POST['username']));
	$password = md5(addslashes(trim($_POST['password'])));
}


//memilih user dan password yang sesuai dengan di database
$login = $conn->query("SELECT * from user where username='$username' and password='$password'");


//menghitung data yang di temukan
$cek = mysqli_num_rows($login);

//cek apakah user dan password di temukan
if ($cek > 0) {
	
	$data = mysqli_fetch_assoc($login);
	
	
	//mengecek jika user adalah admin 
	if ($data['level'] == "admin") {
		//buat session login 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		//alihkan ke halaman dasboard
		header("location: ../../dashboard/");
	}

	//mengecek jika user adalah siswa
	else if ($data['level'] == "siswa"){
		//buat session login 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";

		//alihkan ke halaman peminjaman
		header("location: ../../peminjam/form-pinjam/");
	}
	//mengecek jika user adalah petugas
	else if ($data['level'] == "petugas"){
		//buat session login 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		//alihkan ke halaman peminjaman
		header("location: ../../dashboard/");
	}
	else {
		//alihkan ke halaman login lagi
		header("location: ../../petugas/form-login/index.php?pesan=gagal");
	}
}else{
		header("location: ../../petugas/form-login/index.php?pesan=gagal");
}

 ?>