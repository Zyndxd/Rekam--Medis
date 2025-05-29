<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_dokter = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM dokter WHERE kd_dokter='$kd_dokter'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

$poli = mysqli_query($connection, "SELECT kd_poli, nm_poli FROM poliklinik");
$tgl = mysqli_query($connection, "SELECT tgl_kunjungan FROM kunjungan");

if (isset($_POST['update'])) {
    $kd_poli = $_POST['kd_poli'];
    $tgl_kunjungan = $_POST['tgl_kunjungan'];
    $kd_user = $_POST['kd_user'];
    $nm_dokter = $_POST['nm_dokter'];
    $SIP = $_POST['SIP'];
    $tempat_lhr = $_POST['tempat_lhr'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $ket = $_POST['ket'];

    $update = mysqli_query($connection, "UPDATE dokter SET 
        kd_poli='$kd_poli',
        tgl_kunjungan='$tgl_kunjungan',
        kd_user='$kd_user',
        nm_dokter='$nm_dokter',
        SIP='$SIP',
        tempat_lhr='$tempat_lhr',
        no_telp='$no_telp',
        alamat='$alamat',
        ket='$ket'
        WHERE kd_dokter='$kd_dokter'");

    if ($update) {
        header("Location: dokter.php?status=sukses_edit");
        exit();
    } else {
        echo "Gagal update data.";
    }
}
?>

<?php
include('../template/header.php');
include('../template/sidebar.php');
?>

<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Dokter</h4>
                    <p class="card-description"> Silahkan Input Dokter </p>
                    <form action="" method="POST" class="forms-sample">
                      <div class="form-group">
                      <label for="kd_poli">Kd Poli</label>
                        <select class="form-select" name="kd_poli" required>
                            <option value="">--Kd Poli--</option>
                            <?php while ($row = mysqli_fetch_assoc($poli)) { ?>
                                <option value="<?= $row['kd_poli'] ?>" <?= $row['kd_poli'] == $data['kd_poli'] ? 'selected' : '' ?>><?= $row['nm_poli'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="tgl_kunjungan">Tgl Kunjungan</label>
                        <select class="form-select" name="tgl_kunjungan" required>
                            <option value="">--Tgl Kunjungan--</option>
                            <?php while ($row = mysqli_fetch_assoc($tgl)) { ?>
                                <option value="<?= $row['tgl_kunjungan'] ?>"<?= $row['tgl_kunjungan'] == $data['tgl_kunjungan'] ? 'selected' : ''   ?>><?= $row['tgl_kunjungan'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kd_user">Kd User</label>
                        <input type="text" name="kd_user" class="form-control" value="<?= $data['kd_user']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="nm_dokter">Nama Dokter</label>
                        <input type="text" name="nm_dokter" class="form-control" value="<?= $data['nm_dokter']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="SIP">SIP</label>
                        <input type="text" name="SIP" class="form-control" value="<?= $data['SIP']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="tempat_lhr">Tempat Lahir</label>
                        <input type="text" name="tempat_lhr" class="form-control" value="<?= $data['tempat_lhr']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="<?= $data['no_telp']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" name="ket" class="form-control" value="<?= $data['ket']; ?>" required>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
<?php include('../template/footer.php'); ?>