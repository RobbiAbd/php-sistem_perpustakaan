<?php 

include '../../koneksi.php';

if (isset($_POST['nama']) AND isset($_POST['username']) AND isset($_POST['password'])) {
	//mengecek ketersedian 
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
}else {
	die('Maaf, Proses Daftar gagal . harap coba lagi di halaman daftar !
		</br>
		<a href="../../petugas/form-daftar/" role="button"> Kembali ke Form Daftar</a>');
}if (empty($nama) || empty($username) || empty($password)) {
	die('<strong>Maaf, form tidak boleh ada yang kosong silahkan coba mendaftar kembali</strong>
		</br>
		<a href="../../petugas/form-daftar/" role="button"> Kembali ke Form Daftar</a>');	
}


$query = $conn->query("INSERT into user (nama,username,password,level) values('$nama','$username','$password','siswa')");

if ($query == false) {
	echo "error";
}else {
	header("location: ../../petugas/form-login/");
}

 ?>