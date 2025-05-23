<?php
session_start();
include('../../Vesperr/koneksi/koneksi.php');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$Password = isset($_POST['password']) ? $_POST['password'] : '';

if (!empty($username) && !empty($Password)) {
    $sql = "SELECT * FROM Login WHERE username = '$username'";
    $hasil = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($hasil) > 0) {
        $user = mysqli_fetch_assoc($hasil);
    
        if (password_verify($Password, $user['password'])) {
            $login_id = $user['kd_user'];
    
            $akses = [];
            $sql_akses = "SELECT * FROM admin_akses WHERE login_id = '$login_id'";
            $q1 = mysqli_query($connection, $sql_akses);
            while ($r1 = mysqli_fetch_array($q1)) {
                $akses[] = $r1['akses_id'];
            }
    
            $_SESSION["Login"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["admin_akses"] = $akses;
    
            header("Location: ../index.php");
            exit();
        } else {
            echo "Password salah.";
        }
    }
     else {
        echo "Username tidak terdaftar.";
    }
} else {
    echo "Data masih kosong.";
}
?>
