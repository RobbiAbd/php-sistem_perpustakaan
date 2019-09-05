<?php 
include '../../koneksi.php';
include '../../fucntion/tampil-data-table.php';



$id = (isset($_GET['id']) ? $_GET['id'] : '');
$id = $_GET['id'];

$query = $conn->query("DELETE from user where id = '$id' ") or die(mysqli_error($conn)) ;

if ($query) {

	  header("location: ../../index.php");
	

}

else {

	die("proses hapus data user gagal !");

}