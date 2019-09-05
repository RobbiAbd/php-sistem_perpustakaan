<?php 
include '../../koneksi.php';
session_start();

//menghapus semua session
session_destroy();
mysqli_close($conn);
//mengalihkan halaman
header("location: ../../");
 ?>