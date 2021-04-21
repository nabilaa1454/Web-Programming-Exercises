<?php

//buka file
$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "a") or die("File tidak bisa dibuka!");

//input data
$nim1 = $_POST['nim'];
$nama1 = $_POST['nama'];
$tgllahir1 = $_POST['tgllahir'];
$t4lahir = $_POST['t4lahir'];

fwrite($myFile, "\n".$nim1."|".$nama1."|".$tgllahir1."|"$t4lahir."");
fclose($myFile);

echo "Data berhasil ditambahkan!";
?>