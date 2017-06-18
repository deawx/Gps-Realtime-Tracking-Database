<?php
	//mysqli_connect("localhost","root","") or die ("Koneksi Gagal"); //koneksi
	//mysqli_select_db("smartroro") or die ("Database tidak ditemukan");
	include "koneksi.php";
	$sql = mysqli_query($connection, "select * from tracking where id_gps = '1' "); //query untuk mendapatkan semua data mahasiswa
	while ($data = mysqli_fetch_array($sql)){ // data akan di ulang
		echo $data['long'];
	}
?>