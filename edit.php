<?php
include 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])) {

    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn, "UPDATE buku SET
        judul_buku='$judul',
        nama_pengarang='$pengarang',
        tahun_terbit='$tahun'
        WHERE id='$id'
    ");

    header("Location: index.php");
}
?>

<form method="POST">

    <input type="text" name="judul"
    value="<?= $row['judul_buku'] ?>">

    <br><br>

    <input type="text" name="pengarang"
    value="<?= $row['nama_pengarang'] ?>">

    <br><br>

    <input type="text" name="tahun"
    value="<?= $row['tahun_terbit'] ?>">

    <br><br>

    <button type="submit" name="submit">
        Update
    </button>

</form>