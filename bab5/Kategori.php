<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.jpeg" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="kategori.css">
    <title>Admin Market</title>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MarMin</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="active">
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
                        <span class="links_name">Transaction</span>
                    </a>
                </li>
                  <li>
                    <a href="#">
                        <i class="bx bxs-log-out-circle"></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                </div>
            </nav>
            <h3>Categories</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='categories-entry.php'">
                Tambah Data
            </button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Region</th>
                        <th>Categories</th>
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 15%">Price</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Italia</td>
                        <td>Junk Food</td>
                        <td>Pizza</td>
                        <td>$15</td>
                        <td>
                            <button class="btn btn-success" onclick="editCategory()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteCategory()">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
