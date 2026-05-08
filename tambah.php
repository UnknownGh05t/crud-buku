<?php
include 'config/koneksi.php';

if(isset($_POST['submit'])) {

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "assets/upload/" . $foto);

    mysqli_query($conn, "INSERT INTO buku VALUES(
        NULL,
        '$judul',
        '$pengarang',
        '$tahun',
        '$foto'
    )");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Data Buku</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="judul" placeholder="Judul Buku" required><br><br>

    <input type="text" name="pengarang" placeholder="Nama Pengarang" required><br><br>

    <input type="text" name="tahun" placeholder="Tahun Terbit" required><br><br>

    <input type="file" name="foto" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

</body>
</html>