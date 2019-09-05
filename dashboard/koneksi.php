<?php 

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "sistem_perpustakaan_2019";

// mengecek koneksi

	//buat koneksi
$conn = new mysqli($servername,$username,$password,$dbname);



//cek koneksi
if ($conn->connect_error) {
	die("Koneksi Gagal : ". $conn->connect_error);
}