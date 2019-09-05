<?php 
include '../../template/framework-link/index.php';
include '../../template/function-form-pinjam/index.php';
include '../../koneksi.php';
session_start();

$tanggal= mktime(date("m"),date("d"),date("Y"));
date_default_timezone_set('Asia/Jakarta');
$waktu=date("H:i:s");

$jam = date("H");



$sql = 'SELECT * from peminjaman';

$query = mysqli_query($conn, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Tabel Laporan</title>
    <!-- framework -->
  <?php echo Linkcss(); ?>
  <link rel="stylesheet" type="text/css" href="../../assets/style-css/pinjam.css">
  <link rel="stylesheet" type="text/css" href="../../assets/style-css/laporan-table.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style-css/style-bersama.css">

</head>
<body>

 
  
    <?php echo tagHeader(); ?>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">ID Buku</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">tgl pinjam</th>
      <th scope="col">Batas Waktu Kembali</th>
      <th scope="col">tgl kembali</th>
      <th scope="col">Denda</th>
      <th scope="col">status buku</th>
    </tr>
  </thead>
  <tbody>
<?php 
$angka  = 1;
$denda = 3000;

while ($row = $query->fetch_assoc())
{

$batas = $row['tgl_kembali'];
$tgl_pengembalian = $row['tgl_pengembalian'];



 ?>
  <?php 
  if ($row['status_buku'] == true) {

    $status = 'dikembalikan';

    //menghapus data
    $id_data_hapus = $row['id'];
    if ($jam == 10) {
      $hapus_data = $conn->query("DELETE from peminjaman where id = '$id_data_hapus' ");
    }


  }else {
    $status = 'dipinjam';
  }
  echo ' <tr>
          <td>'.$angka.'</td>
          <td>'.$row['nama'].'</td>
          <td>'.$row['id_buku'].'</td>
          <td>'.$row['nm_buku'].'</td>
          <td>'.$row['tgl_pinjam'].'</td>
          <td>'.$row['tgl_kembali'].'</td>
          <td>'.$row['tgl_pengembalian'].'</td>
          <td>coming soon bitch</td>
          <td>'.$status.'</td>
        </tr>';
  $angka++;
   ?>


<?php } ?>
  </tbody>
</table>








 <?php echo Linkjs(); ?>
</body>
</html>