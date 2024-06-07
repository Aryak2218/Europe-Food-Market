<?php
include 'db_connection.php';

if(isset($_POST['simpan'])) {
    $category = $_POST['category'];
    $price = $_POST['price']; 
    $description = $_POST['description'];
    $region = $_POST['region'];

    if(empty($category) || empty($price) || empty($description) || empty($region)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'kategori-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO categories (category, price, description, region) VALUES ('$category', '$price', '$description', '$region')"; 
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location = 'kategori.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'kategori-entry.php';
                </script>
            ";
        }
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $category = $_POST['category'];
    $price = $_POST['price']; 
    $description = $_POST['description'];
    $region = $_POST['region'];

    $sql = "UPDATE categories SET
            category = '$category', 
            price = '$price',
            description = '$description'
            region = '$region',        
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'kategori-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM categories WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
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
} else {
    header('location: kategori.php');
}
?>
