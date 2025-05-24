<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_pasien = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM kunjungan WHERE tgl_kunjungan = '$tgl_kunjungan'");

if ($hapus) {
    header("Location: kunjungan.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
