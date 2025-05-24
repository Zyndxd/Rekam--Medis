<?php
include '../../Vesperr/koneksi/koneksi.php';

$kd_tindakan = $_POST['no_tindakan'];  
$kd_obat = $_POST['kd_obat'];
$kd_user = $_POST['kd_user'];          
$no_pasien = $_POST['no_pasien'];
$diagnosa = $_POST['diagnosa'];
$resep = $_POST['resep'];
$keluhan = $_POST['keluhan'];
$tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
$ket = $_POST['ket'];

$query = "INSERT INTO rekam_medis (kd_tindakan, kd_obat, kd_user, no_pasien, diagnosa, resep, keluhan, tgl_pemeriksaan, ket) 
          VALUES ('$kd_tindakan', '$kd_obat', '$kd_user', '$no_pasien', '$diagnosa', '$resep', '$keluhan', '$tgl_pemeriksaan', '$ket')";

if(mysqli_query($connection, $query)) {
    header('Location: RekamMedis.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
