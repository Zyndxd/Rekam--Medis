<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$kd_dokter = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM laboratorium WHERE kd_dokter = '$kd_dokter'");

if ($hapus) {
    header("Location: dokter.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
