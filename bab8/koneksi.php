<?php
$host = "localhost"; // ganti dengan host database Anda
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$database = "europe_food_market"; // ganti dengan nama database Anda

// Buat koneksi ke database
$db_connection = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$db_connection) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
