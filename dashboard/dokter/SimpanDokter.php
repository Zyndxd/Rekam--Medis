<?php
    include('../../Vesperr/koneksi/koneksi.php');
    $kd_poli = $_POST['kd_poli'];
    $tgl_kunjungan = $_POST['tgl_kunjungan'];
    $kd_user = $_POST['kd_user'];
    $nm_dokter = $_POST['nm_dokter'];
    $sip = $_POST['sip'];
    $tempat_lhr = $_POST['tempat_lhr'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $ket = $_POST['ket'];

    if(($kd_poli!="") && ($tgl_kunjungan!="") && ($kd_user!="") && ($nm_dokter!="") && ($sip!="") && ($tempat_lhr!="") && ($no_telp!="") && ($alamat!="") && ($ket!="")) {
        $sql = "INSERT INTO dokter (kd_poli, tgl_kunjungan, kd_user, nm_dokter, sip, tempat_lhr, no_telp, alamat, ket) 
                VALUES ('$kd_poli', '$tgl_kunjungan', '$kd_user', '$nm_dokter', '$sip', '$tempat_lhr', '$no_telp', '$alamat', '$ket')";
        $hasil = mysqli_query ($connection,$sql);
        if ($hasil) {
            header("Location:dokter.php");
        } else {
            echo "Data Gagal Disimpan";
        }
    } else {
        echo "Data tidak boleh kosong";
    }

    ?>