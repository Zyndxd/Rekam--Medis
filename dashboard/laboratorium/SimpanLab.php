<?php
include '../../Vesperr/koneksi/koneksi.php';

$no_rm = $_POST['no_rm'];  
$Hasil_Lab = $_POST['Hasil_Lab'];
$ket = $_POST['ket'];          

$query = "INSERT INTO laboratorium (no_rm, Hasil_Lab, ket) 
          VALUES ('$no_rm', '$Hasil_Lab', '$ket')";

if(mysqli_query($connection, $query)) {
    header('Location: laboratoium.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
