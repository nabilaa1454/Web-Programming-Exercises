<?php
$n = $_GET['n'];
$d = $_GET['d'];
$t = $_GET['t'];

//hitung Luas Tabung
$r = $d/2;
$phi = 22/7;
$luas = 2*$phi*$r*($r+$t);

//hasil
echo "Luas tabung $n dengan diameter $d dan tinggi $t adalah $luas satuan luas"

?>