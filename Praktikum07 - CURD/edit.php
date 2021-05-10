<?php
//include database
include_once("config.php");

//cek parameter $_POST terisi, update data jika iya
if (isset($_POST['update'])) {
    $idkaryawan = $_POST['id_karyawan'];
    $name = $_POST['nama'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];

    // update data
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET name='$name',email='$email',mobile='$mobile',alamat='$alamat',jeniskelamin='$jeniskelamin',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir' WHERE id=$id");

    // Redirect kembali ke halaman utama
    header("Location: index.php");
}
?>
<?php
//mengambil ID dan menampilkan data berdasarkan ID yang didapat
$id = $_GET['id'];

//fetch user data
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id_karyawan=$id");
while ($user_data = mysqli_fetch_array($result)) {
    $idkaryawan =$user_data['id_karyawan'];
    $name = $user_data['nama'];
    $mobile = $user_data['mobile'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
}
?>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>Id Karyawan</td>
                <td><input type="int" name="id_karyawan" value=<?php echo $idkaryawan;?>></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $name; ?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email; ?>></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jeniskelamin" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggallahir" value=<?php echo $mobile; ?>></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>