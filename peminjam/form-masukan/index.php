<?php 
include '../../template/framework-link/index.php';
include '../../template/function-form-pinjam/index.php';
include '../../koneksi.php';
include("publishcomment.php"); 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Masukan</title>
	<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" href="../../assets/style-css/style-masukan.css">
	 <link rel="stylesheet" type="text/css" href="../../assets/style-css/style-bersama.css">
</head>
<body>
<style>

#publishcomment {
border: 2px solid #848484;
box-shadow: 12px 12px 7px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: auto;
font-size: 12px;
line-height: 15px;
}
p {
  display: block;
}

</style>




<style>
	input[type=email] {
   width: 100%; /* Full width */
  padding: 12px; /* Some padding */  
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */ 
}
</style>
	<?php echo tagHeader(); ?>
	

	<div class="container-fluid">
  <form name="submitcomment" method="post" action="submitcomment.php">

    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Your name..">

	  <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <label for="website">Website</label>
    <input type="text" id="website" name="website" placeholder="Your Website..">

    <input name="art_id" value="1" type="hidden">
    <input name="art_url" value="contoh.php" type="hidden">

    <label for="subject">Subject</label>
    <textarea rows="2" cols="10" wrap="hard" id="subject" name="komentar" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" name="tombol" value="Kirim">
  
  </form>

</div>
<div id="publishcomment">
<?php
//method menampilkan seluruh komen yang ada 
 echo getcomment("1"); 
?>
</div>
        
      <hr>




				<!-- framework -->
	<?php echo Linkjs(); ?>
</body>
</html>