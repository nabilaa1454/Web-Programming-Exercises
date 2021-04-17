<?php

$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "r") or die("File tidak bisa dibuka!");

//judul
echo "<h1>Data Mahasiswa</h1>";
echo "Jumlah data : ".count(file($namaFile));

//hari ini
$date1 = explode("-", date("Y-m-d"));
$day1 = $date1 [2];
$month1 = $date1 [1];
$year1 = $date1 [0];
$jd2 = gregoriantojd($month1, $day1, $year1);


//umur
function hitungUmur(String $dateLahir, $jd2){
    $dateLahir = explode("-", $dateLahir);
    $dayLahir = $dateLahir[2];
    $monthLahir = $dateLahir[1];
    $yearLahir = $dateLahir[0];
    $jd1 = gregoriantojd($monthLahir, $dayLahir, $yearLahir);
    $umur = intval(($jd2 - $jd1) / 365.25);
    return $umur;
}

//tabel
echo "<br>";
echo "<table border='1'>";
echo("<tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mhs</th>
        <th>Tanggal Lahir</th>
        <th>Tempat Lahir</th>
        <th>Usia (Tahun)</th>
    <tr>");
$nomor = 1;
while (!feof($myFile)){
    echo("<tr>");
    $datamhs = explode("|", fgets($myFile));

    if ($datamhs[0] != ''){
        $usia = hitungUmur($datamhs[2], $jd2);
        echo("
            <td>$nomor</td>
            <td>$datamhs[0]</td>
            <td>$datamhs[1]</td>
            <td>$datamhs[2]</td>
            <td>$datamhs[3]</td>
            <td>$usia</td>");
        $nomor++;
    }
    echo("</tr>");
}
echo "</table>";


//penutup
fclose($myFile);
?>
