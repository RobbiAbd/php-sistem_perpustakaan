<?php 


 function DataTable()
{
	include '../koneksi.php';
	$query = $conn->query(" SELECT * from user where level = 'siswa' ") or die(mysql_error($conn)) ;

	if ($row = $query->num_rows > 0) {
		while ($data = $query->fetch_assoc()) {
			
		echo 
		'<tr>
		<td>'.$data['id'].'</td>
		<td>'.$data['nama'].'</td>
		<td>'.$data['username'].'</td>
		<td><center>---</center></td>
		<td>'.$data['level'].'</td>
		<td><center><a href="handle-form-dashboard/handle-edit-table/index.php?id= '.$data["id"].' " class="btn btn-primary" role="submit">EDIT</a></center></td>
		<td><center><a href="handle-form-dashboard/handle-hapus-table/index.php?id= '.$data["id"].' " class="btn btn-danger" role="submit">DELETE</a></center></td>
		</tr>
		';
	}
}
	else {
		die("menampilkan data gagal");
	}
}

