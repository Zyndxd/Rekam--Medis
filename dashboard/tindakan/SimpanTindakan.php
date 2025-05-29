<?php
include '../../Vesperr/koneksi/koneksi.php';

$nm_tindakan = $_POST['nm_tindakan'];  
$ket = $_POST['ket'];          

$query = "INSERT INTO tindakan (nm_tindakan, ket) 
          VALUES ('$nm_tindakan', '$ket')";

if(mysqli_query($connection, $query)) {
    header('Location: tindakan.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
