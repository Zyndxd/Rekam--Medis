<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$kd_lab = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM laboratorium WHERE kd_lab = '$kd_lab'");

if ($hapus) {
    header("Location: laboratorium.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
