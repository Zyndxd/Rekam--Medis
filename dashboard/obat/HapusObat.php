<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$kd_obat = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM obat WHERE kd_obat = '$kd_obat'");

if ($hapus) {
    header("Location: obat.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
