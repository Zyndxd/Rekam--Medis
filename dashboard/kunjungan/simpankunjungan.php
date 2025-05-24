<?php
include '../../Vesperr/koneksi/koneksi.php';

$tgl_kunjungan = $_POST['tgl_kunjungan'];  
$no_pasien = $_POST['no_pasien'];
$kd_poli = $_POST['kd_poli'];          
$jam_kunjungan = $_POST['jam_kunjungan'];

$query = "INSERT INTO kunjungan (tgl_kunjungan, no_pasien, kd_poli, jam_kunjungan) 
          VALUES ('$tgl_kunjungan', '$no_pasien', '$kd_poli', '$jam_kunjungan')";

if(mysqli_query($connection, $query)) {
    header('Location: kunjungan.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
