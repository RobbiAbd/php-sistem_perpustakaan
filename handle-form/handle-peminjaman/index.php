<?php 

include '../../koneksi.php';
session_start();

$nama = $_SESSION['user'];
$id_user = $_SESSION['id'];
$tgl = date('Y-m-d');
$b = date("d");

if (isset($_POST['submit'])) {

$buku = $_POST['buku'];
$id_buku = $_POST['id_buku'];
$estimasi = $_POST['estimasi'];
$c = $b+$estimasi;
$tgl_kembali = date('Y-m-'.$c);

$query = $conn->query("INSERT into peminjaman (nama,id_data,nm_buku,id_buku,tgl_pinjam,estimasi_kembali,tgl_kembali) values ('$nama','$id_user','$buku','$id_buku','$tgl','$estimasi','$tgl_kembali')");

if ($query) {
	header('location: ../../peminjam/form-pinjam/');
}else {
	echo "gagal";
}
}

