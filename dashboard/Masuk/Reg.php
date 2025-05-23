<?php

include('../../Vesperr/koneksi/koneksi.php');

$username = $_POST['username'];
$Password = $_POST['password'];

if (!empty($username) && !empty($Password)) {

    $HashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Login (username, Password)
            VALUES ('$username', '$HashedPassword')";
    
    $hasil = mysqli_query($connection, $sql);

    if ($hasil) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Data tidak dapat disimpan: " . mysqli_error($connection);
    }

} else {
    echo "Data masih kosong";
}

?>
