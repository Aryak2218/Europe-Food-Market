<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="logo.jpeg" />
   <link rel="stylesheet" href="transaksi.css" />
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Admin Market | Transaction</title>
</head>
<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bxs-window-al"></i>
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
            <a href="transaksi.php">
               <i class="bx bxs-wallet"></i>
               <span class="links_name">Transaksi</span>
            </a>
         </li>
         <li>
            <a href="#">
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
         <h3>Transaction</h3>
         <button type="button" class="btn btn-tambah">
				<a href="transaksi-entry.php">Tambah Data</a>
			</button>
         <button type="button" class="btn btn-export">
				<a href="transaksi-cetak.php">Export</a>
</button>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal pesanan</th>
                  <th>Nama pesanan</th>
                  <th>Jumlah</th>
                  <th>Metode transaction</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  include 'db_connection.php';
                  $sql = "SELECT * FROM transaction";
                  $result = mysqli_query($koneksi, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
               ?>
               <tr>
                  <td><?php echo $row['tanggal_pesanan']; ?></td>
                  <td><?php echo $row['nama_pesanan']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['metode_transaction']; ?></td>
                  <td>
                     <a href="edit_transaksi.php?id=<?php echo $row['ID_transaction']; ?>">Edit</a>
                     <a href="hapus_transaksi.php?id=<?php echo $row['ID_transaction']; ?>">Hapus</a>
                  </td>
               </tr>
               <?php
                  }
               ?>
            </tbody>
         </table>
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
