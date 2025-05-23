<?php
include '../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_pasien = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM pasien WHERE no_pasien = '$no_pasien'");

if ($hapus) {
    header("Location: index.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
