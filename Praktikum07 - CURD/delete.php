<?php
// include database
include_once("config.php");

// Mengambil ID
$id = $_GET['id'];

// Menghapus baris data dengan ID yang berkesesuaian
$result = mysqli_query($mysqli, "DELETE FROM id_karyawan WHERE id=$id");

// Redirect kembali ke halaman utama
header("Location:index.php");
?>