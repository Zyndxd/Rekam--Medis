<?php
include '../../Vesperr/koneksi/koneksi.php';

$nm_obat = $_POST['nm_obat'];  
$jml_obat = $_POST['jml_obat'];
$ukuran = $_POST['ukuran'];          
$harga = $_POST['harga'];          

$query = "INSERT INTO obat (nm_obat, jml_obat, ukuran, harga) 
          VALUES ('$nm_obat', '$jml_obat', '$ukuran', '$harga')";

if(mysqli_query($connection, $query)) {
    header('Location: obat.php');
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connection);
}
?>
