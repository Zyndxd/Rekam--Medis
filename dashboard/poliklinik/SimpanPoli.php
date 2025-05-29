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
