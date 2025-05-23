<?php
include('../Vesperr/koneksi/koneksi.php');

$no_pasien = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM pasien WHERE no_pasien='$no_pasien'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $nama       = $_POST['nm_pasien'];
    $jk         = $_POST['j_kel'];
    $agama      = $_POST['agama'];
    $alamat     = $_POST['alamat'];
    $tgl_lhr    = $_POST['tgl_lhr'];
    $usia       = $_POST['usia'];
    $telp       = $_POST['no_telp'];
    $kk         = $_POST['nm_kk'];
    $hub_kel    = $_POST['hub_kel'];

    $update = mysqli_query($connection, "UPDATE pasien SET 
        nm_pasien='$nama',
        j_kel='$jk',
        agama='$agama',
        alamat='$alamat',
        tgl_lhr='$tgl_lhr',
        usia='$usia',
        no_telp='$telp',
        nm_kk='$kk',
        hub_kel='$hub_kel'
        WHERE no_pasien='$no_pasien'");

    if ($update) {
        header("Location: index.php?status=sukses_edit");
        exit();
    } else {
        echo "Gagal update data.";
    }
}
?>

<?php
include('header.php');
include('sidebar.php');
?>

<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Data Pasien</h4>
                    <p class="card-description"> Silahkan Input Data Pasien </p>
                    <form action="" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="nm_pasien">Nama Pasien</label>
                        <input type="text" name="nm_pasien" class="form-control" value="<?= $data['nm_pasien']; ?>" required>
                      <div class="form-group">
                        <label for="j_kel">Jenis Kelamin</label>
                        <input type="text" name="j_kel" class="form-control" value="<?= $data['j_kel']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" value="<?= $data['agama']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" rows="2" class="form-control" required><?= $data['alamat']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="tgl-lhr">Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr" class="form-control"  value="<?= $data['tgl_lhr']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="usia">Usia<</label>
                        <input type="number" name="usia" class="form-control" value="<?= $data['usia']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="nm_kk">Nama Kepala Keluarga</label>
                        <input type="text" name="nm_kk" class="form-control" value="<?= $data['nm_kk']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="hub_kel">Hubungan Keluarga</label>
                        <input type="text" name="hub_kel" class="form-control" value="<?= $data['hub_kel']; ?>" required>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                      <a href="index.php" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('footer.php'); ?>