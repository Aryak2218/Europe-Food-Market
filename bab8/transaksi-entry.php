<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpeg" />
    <link rel="stylesheet" href="transaksi-entry.css" /> 
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Market | Transaction Entry</title>
</head>
<body>
    <div class="sidebar">
        <!-- Sidebar content -->
    </div>
    <section class="home-section">
        <nav>
            <!-- Navigation bar content -->
        </nav>
        <div class="home-content">
            <h3>Input Transaction</h3>
            <div class="form-login">
                <form action="transaksi-proses.php" method="post">
                    <label for="tanggal_pesanan">Tanggal Pesanan</label>
                    <input class="input" type="text" name="tanggal_pesanan" id="tanggal_pesanan" placeholder="Tanggal Pesanan" />
                    <label for="nama_pesanan">Nama Pesanan</label>
                    <input class="input" type="text" name="nama_pesanan" id="nama_pesanan" placeholder="Nama Pesanan" />
                    <label for="jumlah">Jumlah</label>
                    <input class="input" type="text" name="jumlah" id="jumlah" placeholder="Jumlah" />
                    <label for="metode_transaction">Metode Transaction</label>
                    <input class="input" type="text" name="metode_transaction" id="metode_transaction" placeholder="Metode Transaction" />
                    <button type="submit" class="btn btn-simpan" name="simpan">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
