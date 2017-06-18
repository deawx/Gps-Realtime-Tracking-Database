<?php
    $host="localhost";
    $username="root";
    $passwd="";
    $db_name="realtime-gps-tracking";
    $connection = mysqli_connect($host,$username,$passwd,$db_name) or die("Error " . mysqli_error($connection));
?>