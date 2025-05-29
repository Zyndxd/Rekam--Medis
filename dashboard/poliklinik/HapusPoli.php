<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$kd_poli = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM poliklinik WHERE kd_poli = '$kd_poli'");

if ($hapus) {
    header("Location: poliklinik.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
