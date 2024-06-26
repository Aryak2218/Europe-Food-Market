<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpeg" />
    <link rel="stylesheet" href="kategori-entry.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catshop Admin | Categories Entry</title>
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
                <a href="../transaction/transaction.php">
                    <i class="bx bxs-wallet"></i>
                    <span class="links_name">Pembelian</span>
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
                <span class="admin_name">MarMin</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Input Categories</h3>
            <div class="form-login">
                <form action="kategori-proses.php" method="post">
                    <label for="categories">Categories</label>
                    <input class="input" type="text" name="categories" id="categories" placeholder="Categories" />
                    <label for="categories">Price</label>
                    <input class="input" type="text" name="price" id="price" placeholder="Price" />
                    <label for="categories">Name</label>
                    <input class="input" type="text" name="description" id="Description" placeholder="Description" />
                    <label for="photo">Region</label>
                    <input class="input" type="text" name="region" id="Region" placeholder="Region" />
                    <button type="submit" class="btn btn-simpan" name="simpan">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
