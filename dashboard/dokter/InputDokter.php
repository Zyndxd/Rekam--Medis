<?php
include '../../Vesperr/koneksi/koneksi.php';

$poli = mysqli_query($connection, "SELECT kd_poli, nm_poli FROM poliklinik");
$tgl = mysqli_query($connection, "SELECT tgl_kunjungan FROM kunjungan");
?>

<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Dokter</h4>
                    <p class="card-description"> Silahkan Input Dokter </p>
                    <form action="SimpanDokter.php" method="POST" class="forms-sample">
                      <div class="form-group">
                      <label for="kd_poli">Kd Poli</label>
                        <select class="form-select" name="kd_poli" required>
                            <option value="">--Kd Poli--</option>
                            <?php while ($row = mysqli_fetch_assoc($poli)) { ?>
                                <option value="<?= $row['kd_poli'] ?>"><?= $row['nm_poli'] ?></option>
                            <?php } ?>
                        </select>
                      <div class="form-group">
                        <label for="tgl_kunjungan">Tgl Kunjungan</label>
                        <select class="form-select" name="tgl_kunjungan" required>
                            <option value="">--Tgl Kunjungans--</option>
                            <?php while ($row = mysqli_fetch_assoc($tgl)) { ?>
                                <option value="<?= $row['tgl_kunjungan'] ?>"><?= $row['tgl_kunjungan'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kd_user">Kd User</label>
                        <input type="text" name="kd_user" class="form-control" placeholder="Kd User" required>
                      </div>
                      <div class="form-group">
                        <label for="nm_dokter">Nama Dokter</label>
                        <textarea name="nm_dokter" rows="2" class="form-control" placeholder="Nama Dokter" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="sip">SIP</label>
                        <input type="text" name="sip" class="form-control" placeholder="SIP" required>
                      </div>
                      <div class="form-group">
                        <label for="tempat_lhr">Tempat Lahir</label>
                        <input type="number" name="tempat_lhr" class="form-control" placeholder="Tempat Lahir" required>
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon" required>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                      </div>
                      <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" name="ket" class="form-control" placeholder="Keterangan" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>