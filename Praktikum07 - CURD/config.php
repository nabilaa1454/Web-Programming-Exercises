<?php
/**
* menggunakan mysqli
*/

$databaseHost = "localhost";
$databaseName = "crud_db";
$databaseUsername = "root";
$databasePassword = "";

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (!$koneksi){
    echo("Error".mysqli_connect_error($mysqli));
}
?>