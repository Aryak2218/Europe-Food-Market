<?php
session_start();
if($_SESSION['username'] == null) {
    header('location:../Login.php');
}
include 'db_connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM transaction WHERE ID_transaction = $id";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="europe.png" />
    <link rel="stylesheet" href="kategori-entry.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Market | Edit Transaction</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxs-window-alt"></i>
            <span class="logo_name">Europe Food Market</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bxs-flag-checkered"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="kategori.php">
                    <i class="bx bxs-store-alt"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="transaction.php">
                    <i class="bx bxs-wallet"></i>
                    <span class="links_name">Pembelian</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bxs-log-out-circle"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin Market</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Edit Transaction</h3>
            <div class="form-login">
                <form action="transaksi-proses.php" method="post">
                    <input type="hidden" name="id_transaction" value="<?php echo $data['ID_transaction']; ?>">
                    <label for="tanggal_pesanan">Tanggal Pesanan</label>
                    <input class="input" type="text" name="tanggal_pesanan" id="tanggal_pesanan" value="<?php echo $data['tanggal_pesanan']; ?>" />
                    <label for="nama_pesanan">Nama Pesanan</label>
                    <input class="input" type="text" name="nama_pesanan" id="nama_pesanan" value="<?php echo $data['nama_pesanan']; ?>" />
                    <label for="jumlah">Jumlah</label>
                    <input class="input" type="text" name="jumlah" id="jumlah" value="<?php echo $data['jumlah']; ?>" />
                    <label for="metode_transaction">Metode Transaction</label>
                    <input class="input" type="text" name="metode_transaction" id="metode_transaction" value="<?php echo $data['metode_transaction']; ?>" />
                    <button type="submit" class="btn btn-simpan" name="edit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>
