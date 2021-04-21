<!DOCTYPE html>
<html>
<head>
<title> DATA UKURAN TABUNG </title>
</head>
<body>
<!-- tabel -->
<p> DATA TABUNG </P>
<table border="1">
  <th>Nama Tabung</th>
  <th>Diameter</th>
  <th>Tinggi</th>
  <th>Luas</th>

<!-- php -->
<?php

// buka file
$myfile = fopen("datatabung.dat", "r") or die("Tidak bisa buka file!");
while(!feof($myfile)) {
  $line = fgets($myfile);
  $part = explode(",", $line);
  echo "<tr><td height='10'>".$part[0]."</td>
        <td>".$part[1]."</td>
        <td>".$part[2]."</td>
        <td><a href='hitungluas.php?n=$part[0]&d=$part[1]&t=$part[2]'>view</a></td>
        </tr>";
}
fclose($myfile);

?>
</table>
</html>