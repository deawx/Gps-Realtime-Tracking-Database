<?php
	include "koneksi.php";
	$sql = mysqli_query($connection, "select * from tracking where id_gps = '1' ");
	while ($data = mysqli_fetch_array($sql)){
		echo $data['lat'];
	}
?>
