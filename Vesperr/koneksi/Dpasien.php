    <?php
    include('koneksi.php');
    $nama = $_POST['nm_pasien'];
    $jk = $_POST['j_kel'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $usia = $_POST['usia'];
    $no_telp = $_POST['no_telp'];
    $nm_kk = $_POST['nm_kk'];
    $hub_kel = $_POST['hub_kel'];

    if(($nama!="") && ($jk!="") && ($agama!="") && ($alamat!="") && ($tgl_lhr!="") && ($usia!="") && ($no_telp!="") && ($nm_kk!="") && ($hub_kel!="")) {
        $sql = "INSERT INTO pasien (nm_pasien, j_kel, agama, alamat, tgl_lhr, usia, no_telp, nm_kk, hub_kel) 
                VALUES ('$nama', '$jk', '$agama', '$alamat', '$tgl_lhr', '$usia', '$no_telp', '$nm_kk', '$hub_kel')";
        $hasil = mysqli_query ($connection,$sql);
        if ($hasil) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Data Gagal Disimpan";
        }
    } else {
        echo "Data tidak boleh kosong";
    }

    ?>