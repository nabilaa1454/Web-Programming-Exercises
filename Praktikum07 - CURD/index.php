<?php

include_once("config.php");
$result = mysqli_query($koneksi, "SELECT * FROM karyawan order by id desc");
?>
<html>

<head>
    <title>Tabel Karyawan</title>
</head>

<body>
    <div id="container">
        <center>
        <h1>Welcome!</h1>
        </center>
        <button><a href="add.php">Tambah Karyawan</a></button>
    </div>
    <section id="table">
            <table width='100%' border=1>
                <tr>
                    <th>Id Karyawan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Edit</th>
                </tr>
                <?php
                while ($user_data = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <tr><?php echo Sistem["Nama"]; ?></tr>
                    <tr><?php echo Sistem["Email"]; ?></tr>
                    <tr><?php echo Sistem["Telepon"]; ?></tr>
                    <tr><?php echo Sistem["Alamat"]; ?></tr>
                    <tr><?php echo Sistem["Jenis kelamin"]; ?></tr>
                    <tr><?php echo Sistem["Tempat Lahir"]; ?></tr>
                    <tr><?php echo Sistem["Tanggal Lahir"]; ?></tr>
                    <tr>Aksi</tr>
                </tr>
                <?php
                }
                ?>
            </table>
    </section>
</body>
</html>