<?php 
include '../../koneksi.php';

if (isset($_POST['submit'])) {
	$tgl_pengembalian = date('Y-m-d');
	$id_hapus = $_POST['id_hapus'];
	$status = true;

	$query = $conn->query("UPDATE peminjaman set tgl_pengembalian = '$tgl_pengembalian' , status_buku = '$status' where id_buku = '$id_hapus' ");

	if ($query == false) {
		header("location: ../../handle-error/error/index.php");
	}
	 header("location: ../../peminjam/form-pinjam/index.php");
	}