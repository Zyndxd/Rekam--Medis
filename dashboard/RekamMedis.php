<?php
include '../Vesperr/koneksi/koneksi.php';

$tindakan = mysqli_query($connection, "SELECT kd_tindakan, nm_tindakan FROM tindakan");
$obat = mysqli_query($connection, "SELECT kd_obat, nm_obat FROM obat");
$user = mysqli_query($connection, "SELECT kd_user, username FROM login");
$pasien = mysqli_query($connection, "SELECT no_pasien, nm_pasien FROM pasien");
?>

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Rekam Medis</h4>
                    <p class="card-description"> Silahkan Input Rekam Medis </p>
                    <form action="simpanRK.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="no_tindakan">Pilih Tindakan</label>
                        <select class="form-select" name="no_tindakan" required>
                            <option value="">--Pilih Tindakan--</option>
                            <?php while ($row = mysqli_fetch_assoc($tindakan)) { ?>
                            <option value="<?= $row['kd_tindakan'] ?>"><?= $row['nm_tindakan'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="kd_obat">Pilih Obat</label>
                        <select class="form-select" name="kd_obat" required>
                            <option value="">--Pilih Obat--</option>
                            <?php while ($row = mysqli_fetch_assoc($obat)) { ?>
                            <option value="<?= $row['kd_obat'] ?>"><?= $row['nm_obat'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="kd_user">Pilih User</label>
                        <select class="form-select" name="kd_user" required>
                            <option value="">--Pilih User--</option>
                            <?php while ($row = mysqli_fetch_assoc($user)) { ?>
                            <option value="<?= $row['kd_user'] ?>"><?= $row['username'] ?></option>
                            <?php } ?>
                        </select><br>
                      </div>
                      <div class="form-group">
                      <label for="no_pasien">Pilih Pasien</label>
                        <select class="form-select" name="no_pasien" required>
                            <option value="">--Pilih Pasien--</option>
                            <?php while ($row = mysqli_fetch_assoc($pasien)) { ?>
                            <option value="<?= $row['no_pasien'] ?>"><?= $row['nm_pasien'] ?></option>
                            <?php } ?>
                        </select><br>
                      </div>
                      <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control" placeholder="Diagnosa" required>
                      </div>
                      <div class="form-group">
                        <label for="resep">Resep</label>
                        <input type="text" name="resep" class="form-control" placeholder="Resep" required>
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" placeholder="Keluhan" required>
                      </div>
                      <div class="form-group">
                        <label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
                        <input type="date" name="tgl_pemeriksaan" class="form-control" placeholder="Tanggal Pemeriksaan" required>
                      </div>
                      <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" name="ket" class="form-control" placeholder="Keterangan" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button typer="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('footer.php'); ?>