<?php
include 'db_connection.php';

if(isset($_POST['simpan'])) {
    $region = $_POST['region'];
    $category = $_POST['categories']; 
    $price = $_POST['price'];
    $description = $_POST['description'];

    if(empty($region) || empty($category) || empty($price) || empty($description)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'kategori-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO categories (region, category, price, description) VALUES ('$region', '$category', '$price', '$description')"; // Mengubah 'categories' menjadi 'category'
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
    $region = $_POST['region'];
    $category = $_POST['category']; 
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE categories SET 
            region = '$region',
            category = '$category',
            price = '$price',
            description = '$description'
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
