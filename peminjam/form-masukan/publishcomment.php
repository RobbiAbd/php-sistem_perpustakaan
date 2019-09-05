<?php

function getcomment($art_id){
	include '../../koneksi.php';
$commentquery = $conn->query("SELECT * FROM comment WHERE art_id='$art_id'
ORDER BY id DESC");

$commentNum = mysqli_num_rows($commentquery);

echo "<h4>" . "Current comment(s)..." . "</h4>";
echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
while($row = mysqli_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['date'] . "</i>" . "<br />" . "<br /><p>" . $row['komentar'] . "</p><br />";
 echo "<hr>";
 }
}

?>