<?php 
$host = "localhost";
$username ="root";
$pw = ""; 
$database = "rekam_medis";    

$connection = mysqli_connect('localhost', 'root', '', 'rekam_medis', 3311);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
