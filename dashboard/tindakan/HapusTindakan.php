<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$kd_tindakan = $_GET['id'];

$hapus = mysqli_query($connection, "DELETE FROM tindakan WHERE kd_tindakan = '$kd_tindakan'");

if ($hapus) {
    header("Location: tindakan.php?status=hapus_sukses");
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
