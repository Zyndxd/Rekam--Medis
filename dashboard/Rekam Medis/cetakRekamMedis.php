<?php
include '../../Vesperr/koneksi/koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM rekam_medis WHERE no_rm = '$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cetak Rekam Medis</title>
    <link rel="stylesheet" href="../dist/assets/css/style-cetak.css">
</head>
<body onload="window.print()">
    <div class="container">
        <h2>Data Rekam Medis Pasien</h2>
        <table>
            <tr><th>Diagnosa</th><td><?= $data['diagnosa']; ?></td></tr>
            <tr><th>Resep</th><td><?= $data['resep']; ?></td></tr>
            <tr><th>Keluhan</th><td><?= $data['keluhan']; ?></td></tr>
            <tr><th>Tanggal Pemeriksaan</th><td><?= date('d-m-Y', strtotime($data['tgl_pemeriksaan'])); ?></td></tr>
            <tr><th>Keterangan</th><td><?= $data['ket']; ?></td></tr>
        </table>
        <div class="footer">
        </div>
    </div>
</body>
</html>
