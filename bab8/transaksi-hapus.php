<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
}
include 'db_connection.php';

$id_transaction = $_GET['id'];
$sql = "DELETE FROM transaction WHERE ID_transaction = $id_transaction";

if (mysqli_query($koneksi, $sql)) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location = 'transaction.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus');
            window.location = 'transaction.php';
        </script>
    ";
}
?>
