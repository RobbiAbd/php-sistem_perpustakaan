<?php
include '../../koneksi.php';
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];
$art_id=$_POST["art_id"];
$art_url=$_POST["art_url"];
if(empty($nama))
$_POST["nama"]='anonymous';
if(empty($komentar)){
echo "<meta http-equiv='refresh' content='2; url=$art_url'>";
die("komentar harus diisi");}
}

$sql=$conn->query("INSERT INTO comment (nama, email, website, komentar, art_id, art_url,
date)
VALUES
('$nama','$email','$website', '$komentar',
'$art_id', '$art_url', NOW())");
if (!$sql)
 {
 die('Error: ' . mysqli_error());
 }
 header("location: index.php");
//Memutuskan koneksi
mysqli_close($conn);
?>