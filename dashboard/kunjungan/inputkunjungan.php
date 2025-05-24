<?php
include '../../Vesperr/koneksi/koneksi.php';

$poli = mysqli_query($connection, "SELECT kd_poli, nm_poli FROM poliklinik");
$pasien = mysqli_query($connection, "SELECT no_pasien, nm_pasien FROM pasien");
?>
<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Kunjungan</h4>
                    <p class="card-description"> Silahkan Input Kunjungan </p>
                    <form action="SimpanKunjungan.php" method="POST" class="forms-sample">

                        <div class="form-group">
                            <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                            <input type="date" name="tgl_kunjungan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="no_pasien">No Pasien</label>
                            <select class="form-select" name="no_pasien" required>
                                <option value="">--No Pasien--</option>
                                <?php while ($row = mysqli_fetch_assoc($pasien)) { ?>
                                    <option value="<?= $row['no_pasien'] ?>">
                                        <?= $row['no_pasien'] . ' - ' . $row['nm_pasien']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="kd_poli">Kode Poli</label>
                            <select class="form-select" name="kd_poli" required>
                            <option value="">--Kode Poli--</option>
                            <?php while ($row = mysqli_fetch_assoc($poli)) { ?>
                                <option value="<?= $row['kd_poli'] ?>"><?= $row['nm_poli'] ?></option>
                            <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jam_kunjungan">Jam Kunjungan</label>
                            <input type="datetime-local" name="jam_kunjungan" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-light">Cancel</button>

                        </form>

                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>