<?php
include "koneksi.php";

$lat = $_GET['lat'];
$long= $_GET['long'];
$sql2 = "UPDATE tracking SET `lat` = $lat, `long` = $long WHERE id_gps = 1";
$hasil = mysqli_query($connection, $sql2) or die ("Maaf ada yang error".mysqli_error($connection));

if($hasil){
	header("location:form_test.php");	
}else{
	echo "Data gagal diupdate.";	
}

?>