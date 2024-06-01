<?php
include('db_connection.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;


// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dompdf = new Dompdf();


$query = mysqli_query($koneksi, "SELECT * FROM transaction");
if (!$query) {
    die('Query Error: ' . mysqli_error($koneksi));
}

$html = '<html><head><title>Laporan Transaksi</title></head><body><center><h3>Data Transaksi</h3></center><hr><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>Tanggal pesanan</th>
                <th>Nama pesanan</th>
                <th>Jumlah</th>
                <th>Metode Pembayaran</th>
            </tr>';

while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . htmlspecialchars($transaction['tanggal_pesanan']) . "</td>
                <td>" . htmlspecialchars($transaction['nama_pesanan']) . "</td>
                <td>" . htmlspecialchars($transaction['jumlah']) . "</td>
                <td>" . htmlspecialchars($transaction['metode_transaction']) . "</td>
            </tr>";
}

$html .= "</table></body></html>";


$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>