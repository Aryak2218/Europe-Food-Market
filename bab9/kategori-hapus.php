<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
}
include 'db_connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE id = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location = 'kategori.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus');
            window.location = 'kategori.php';
        </script>
    ";
}
?>
