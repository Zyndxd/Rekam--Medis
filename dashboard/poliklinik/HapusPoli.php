<?php
session_start();
ini_set('display_errors', 0);
error_reporting(0);
include('../../Vesperr/koneksi/koneksi.php');

if (!isset($_SESSION['admin_akses']) || !in_array("pasien", $_SESSION['admin_akses'])) {
  header("Location: ../template/404.php");
  exit();
}
?>

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
