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
$jumlah_pakai = $_POST['jumlah_pakai'];

$cek = mysqli_query($connection, "SELECT jml_obat FROM obat WHERE kd_obat = '$kd_obat'");
$stok = mysqli_fetch_assoc($cek)['jml_obat'];

if ($stok < $jumlah_pakai) {
    echo "Gagal: Stok obat tidak mencukupi!";
    exit();
}

$query = "INSERT INTO rekam_medis (kd_tindakan, kd_obat, jumlah_pakai, kd_user, no_pasien, diagnosa, resep, keluhan, tgl_pemeriksaan, ket) 
          VALUES ('$kd_tindakan', '$kd_obat', $jumlah_pakai, '$kd_user', '$no_pasien', '$diagnosa', '$resep', '$keluhan', '$tgl_pemeriksaan', '$ket')";

if(mysqli_query($connection, $query)) {
    mysqli_query($connection, "UPDATE obat SET jml_obat = jml_obat - $jumlah_pakai WHERE kd_obat = '$kd_obat'");
    
    header('Location: DRekamMedis.php?status=sukses');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
