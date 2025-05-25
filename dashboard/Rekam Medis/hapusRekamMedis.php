<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_rm = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM rekam_medis WHERE no_rm = '$no_rm'");

if ($hapus) {
    header("Location: DRekamMedis.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
