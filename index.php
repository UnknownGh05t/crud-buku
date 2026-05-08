<?php
include 'config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Buku</h2>

<a href="tambah.php" class="btn">Tambah Data</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while($row = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td>
            <img src="assets/upload/<?= $row['foto_sampul'] ?>" width="80">
        </td>
        <td><?= $row['judul_buku'] ?></td>
        <td><?= $row['nama_pengarang'] ?></td>
        <td><?= $row['tahun_terbit'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>dy>
</html>