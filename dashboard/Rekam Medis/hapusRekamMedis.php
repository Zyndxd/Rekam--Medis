<?php
include '../../Vesperr/koneksi/koneksi.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit();
}

$no_rm = $_GET['id'];

$get = mysqli_query($connection, "SELECT kd_obat, jumlah_pakai FROM rekam_medis WHERE no_rm = '$no_rm'");
$data = mysqli_fetch_assoc($get);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

$kd_obat = $data['kd_obat'];
$jumlah_pakai = $data['jumlah_pakai'];

mysqli_query($connection, "UPDATE obat SET jml_obat = jml_obat + $jumlah_pakai WHERE kd_obat = '$kd_obat'");

$hapus = mysqli_query($connection, "DELETE FROM rekam_medis WHERE no_rm = '$no_rm'");

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus. Stok obat dikembalikan.');
        window.location.href='DRekamMedis.php?status=hapus_sukses';
    </script>";
    exit();
} else {
    echo "Data gagal dihapus.";
}
?>
