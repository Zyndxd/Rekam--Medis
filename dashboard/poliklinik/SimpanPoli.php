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

$nm_poli = $_POST['nm_poli'];  
$lantai = $_POST['lantai'];          

$query = "INSERT INTO poliklinik (nm_poli, lantai) 
          VALUES ('$nm_poli', '$lantai')";

if(mysqli_query($connection, $query)) {
    header('Location: poliklinik.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
