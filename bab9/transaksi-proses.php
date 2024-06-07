<?php
include 'db_connection.php';

if(isset($_POST['simpan'])) {
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $nama_pesanan = $_POST['nama_pesanan']; 
    $jumlah = $_POST['jumlah'];
    $metode_transaction = $_POST['metode_transaction'];

    if(empty($tanggal_pesanan) || empty($nama_pesanan) || empty($jumlah) || empty($metode_transaction)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'transaksi-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO `transaction` (tanggal_pesanan, nama_pesanan, jumlah, metode_transaction) VALUES ('$tanggal_pesanan', '$nama_pesanan', '$jumlah', '$metode_transaction')";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location = 'transaksi.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'transaksi-entry.php';
                </script>
            ";
        }
    }
} elseif(isset($_POST['edit'])) {
    $id_transaction = $_POST['id_transaction'];
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $nama_pesanan = $_POST['nama_pesanan']; 
    $jumlah = $_POST['jumlah'];
    $metode_transaction = $_POST['metode_transaction'];

    $sql = "UPDATE `transaction` SET 
            tanggal_pesanan = '$tanggal_pesanan',
            nama_pesanan = '$nama_pesanan',
            jumlah = '$jumlah',
            metode_transaction = '$metode_transaction'
            WHERE ID_transaction = $id_transaction";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'transaksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id_transaction = $_POST['id_transaction'];

    $sql = "DELETE FROM `transaction` WHERE ID_transaction = $id_transaction";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'transaksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location = 'transaksi.php';
            </script>
        ";
    }
} else {
    header('location: transaksi.php');
}
?>
