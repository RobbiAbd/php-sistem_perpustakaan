<?php 


 function DataTableSemua()
{
	include '../koneksi.php';
	$query = $conn->query(" SELECT * from user") or die(mysql_error($conn)) ;

	if ($row = $query->num_rows > 0) {
		while ($data = $query->fetch_assoc()) {
			
		echo 
		'<tr>
		<td>'.$data['id'].'</td>
		<td>'.$data['nama'].'</td>
		<td>'.$data['username'].'</td>
		<td><center>---</center></td>
		<td>'.$data['level'].'</td>
		</tr>
		';
	}
}
	else {
		die("menampilkan data gagal");
	}
}

