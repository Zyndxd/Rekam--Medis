<?php
    include('../../Vesperr/koneksi/koneksi.php');
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    if(($username!="") && ($password!="")) {
        $sql = "INSERT INTO login (username, password) 
                VALUES ('$username', '$password')";
        $hasil = mysqli_query ($connection,$sql);
        if ($hasil) {
            header("Location: user.php");
        } else {
            echo "Data Gagal Disimpan";
        }
    } else {
        echo "Data tidak boleh kosong";
    }

    ?>