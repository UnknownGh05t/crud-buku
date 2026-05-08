<?php
$koneksi = mysqli_connect("localhost", "root", "", "crud_buku");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>