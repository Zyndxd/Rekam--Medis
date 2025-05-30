<?php
include '../../Vesperr/koneksi/koneksi.php';


$no_rm = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM rekam_medis WHERE no_rm='$no_rm'");
$data = mysqli_fetch_assoc($query);

$tindakan = mysqli_query($connection, "SELECT kd_tindakan, nm_tindakan FROM tindakan");
$obat = mysqli_query($connection, "SELECT kd_obat, nm_obat FROM obat");
$user = mysqli_query($connection, "SELECT kd_user, username FROM login");
$pasien = mysqli_query($connection, "SELECT no_pasien, nm_pasien FROM pasien");

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $kd_tindakan       = $_POST['kd_tindakan'];
    $kd_obat_baru      = $_POST['kd_obat'];
    $kd_user           = $_POST['kd_user'];
    $no_pasien         = $_POST['no_pasien'];
    $diagnosa          = $_POST['diagnosa'];
    $resep             = $_POST['resep'];
    $keluhan           = $_POST['keluhan'];
    $tgl_pemeriksaan   = $_POST['tgl_pemeriksaan'];
    $ket               = $_POST['ket'];
    $jumlah_pakai_baru = $_POST['jumlah_pakai'];

    // Ambil data lama dari rekam_medis
    $old = mysqli_query($connection, "SELECT kd_obat, jumlah_pakai FROM rekam_medis WHERE no_rm='$no_rm'");
    $old_data = mysqli_fetch_assoc($old);

    $kd_obat_lama      = $old_data['kd_obat'];
    $jumlah_pakai_lama = $old_data['jumlah_pakai'];


    mysqli_query($connection, "
        UPDATE obat 
        SET jml_obat = jml_obat + $jumlah_pakai_lama 
        WHERE kd_obat = '$kd_obat_lama'
    ");

    $cek_stok = mysqli_query($connection, "SELECT jml_obat FROM obat WHERE kd_obat = '$kd_obat_baru'");
    $stok = mysqli_fetch_assoc($cek_stok)['jml_obat'];

    if ($stok < $jumlah_pakai_baru) {
        echo "Stok obat tidak mencukupi!";
        exit();
    }

    mysqli_query($connection, "
        UPDATE obat 
        SET jml_obat = jml_obat - $jumlah_pakai_baru 
        WHERE kd_obat = '$kd_obat_baru'
    ");

    $update = mysqli_query($connection, "UPDATE rekam_medis SET 
        kd_tindakan='$kd_tindakan',
        kd_obat='$kd_obat_baru',
        kd_user='$kd_user',
        no_pasien='$no_pasien',
        diagnosa='$diagnosa',
        resep='$resep',
        keluhan='$keluhan',
        tgl_pemeriksaan='$tgl_pemeriksaan',
        jumlah_pakai='$jumlah_pakai_baru',
        ket='$ket'
        WHERE no_rm='$no_rm'");

    if ($update) {
        header("Location: DRekamMedis.php?status=sukses_edit");
        exit();
    } else {
        echo "Gagal update data: " . mysqli_error($connection);
    }
}
?>

<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Rekam Medis</h4>
                    <p class="card-description"> Silahkan Input Rekam Medis </p>
                    <form action="" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="kd_tindakan">Pilih Tindakan</label>
                        <select class="form-select" name="kd_tindakan" required>
                            <option value="">--Pilih Tindakan--</option>
                            <?php while ($row = mysqli_fetch_assoc($tindakan)) { ?>
                            <option value="<?= $row['kd_tindakan'] ?>" <?= $row['kd_tindakan'] == $data['kd_tindakan'] ? 'selected' : '' ?>>
                                <?= $row['nm_tindakan'] ?>
                            </option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="kd_obat">Pilih Obat</label>
                        <select class="form-select" name="kd_obat" required>
                            <option value="">--Pilih Obat--</option>
                            <?php while ($row = mysqli_fetch_assoc($obat)) { ?>
                            <option value="<?= $row['kd_obat'] ?>" <?= $row['kd_obat'] == $data['kd_obat'] ? 'selected' : '' ?>>
                                <?= $row['nm_obat'] ?>
                            </option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_pakai">Jumlah Obat Dipakai</label>
                        <input type="number" name="jumlah_pakai" class="form-control" min="1" value="<?= $data['jumlah_pakai']; ?>" required>
                      </div>

                      <div class="form-group">
                      <label for="kd_user">Pilih User</label>
                        <select class="form-select" name="kd_user" required>
                            <option value="">--Pilih User--</option>
                            <?php while ($row = mysqli_fetch_assoc($user)) { ?>
                            <option value="<?= $row['kd_user'] ?>"<?= $row['kd_user'] == $data['kd_user'] ? 'selected' : '' ?>>
                                <?= $row['username'] ?>
                            </option>
                            <?php } ?>
                        </select><br>
                      </div>
                      <div class="form-group">
                      <label for="no_pasien">Pilih Pasien</label>
                        <select class="form-select" name="no_pasien" required>
                            <option value="">--Pilih Pasien--</option>
                            <?php while ($row = mysqli_fetch_assoc($pasien)) { ?>
                            <option value="<?= $row['no_pasien'] ?>"<?= $row['no_pasien'] == $data['no_pasien'] ? 'selected' : '' ?>>
                                <?= $row['nm_pasien'] ?>
                            </option>
                            <?php } ?>
                        </select><br>
                      </div>
                      <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" value="<?= $data['diagnosa']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="resep">Resep</label>
                        <input type="text" name="resep" class="form-control" value="<?= $data['resep']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" value="<?= $data['keluhan']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
                        <input type="date" name="tgl_pemeriksaan" class="form-control" value="<?= $data['tgl_pemeriksaan']; ?>" required>
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
          </div>
<?php include('../template/footer.php'); ?>