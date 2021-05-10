<html>
<head>
    <title>Tambah Karyawan</title>
</head>

<body>
    <button><a href="index.php">Kembali</a></button>
    <br /><br />
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jeniskelamin" value="pria">Pria</td>
                <td><input type="radio" name="jeniskelamin" value="wanita">Wanita</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggallahir"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>  
        </table>
    </form>
    <?php

// Cek apakah ada parameter $_POST yang terisi, jika iya masukkan dalam DB.
if(isset($_POST['Submit'])) {
$name = $_POST['nama'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];

// include database 
include_once("config.php");

// Insert data
$result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,email,mobile,alamat,jeniskelamin,tempatlahir,tanggallahir) VALUES('$name','$email','$mobile','$alamat','$jeniskelamin','$tempatlahir','$tanggallahir')");

// Menampilkan data telah berhasil
echo "Karyawan berhasil ditambahkan! <a href='index.php'>View Karyawan</a>";
echo mysqli_error($mysqli);
}
    ?>
</body>

</html>