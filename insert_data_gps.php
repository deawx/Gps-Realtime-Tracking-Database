<?php
include "koneksi.php";

//tangkap parameter
$id_gps		= "1";
$latitude	= $_GET['lat'];
$longitude	= $_GET['long'];
$tanggal_waktu= 'CURRENT_TIMESTAMP';

$sql	= "INSERT INTO `tracking`(`id_gps`, `lat`, `long`, `tanggal_waktu`) VALUES ('$id_gps', $latitude, $longitude, $tanggal_waktu)";

$eksekusi = mysqli_query($connection, $sql);

if($eksekusi){
	$sql2 = "UPDATE tracking SET `lat` = $latitude, `long` = $longitude WHERE id_gps = 1";
	$hasil = mysqli_query($connection, $sql2) or die ("Maaf ada yang error".mysqli_error($connection));
	echo "Data berhasil diupdate.";
}else{
	$sql3 = "UPDATE tracking SET `lat` = $latitude, `long` = $longitude WHERE id_gps = 1";
	$hasil = mysqli_query($connection, $sql3) or die ("Maaf ada yang error".mysqli_error($connection));
	echo "Data berhasil diupdate.";
}
?>
