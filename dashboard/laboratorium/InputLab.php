<?php
include '../../Vesperr/koneksi/koneksi.php';

$rekdis = mysqli_query($connection, "SELECT no_rm FROM rekam_medis");
?>

<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Laboratorium</h4>
                    <p class="card-description"> Silahkan Input Laboratorium </p>
                    <form action="SimpanLab.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="no_rm">No Rekam Medis</label>
                        <select class="form-select" name="no_rm" required>
                            <option value="">--No Rekam Medis--</option>
                            <?php while ($row = mysqli_fetch_assoc($rekdis)) { ?>
                                <option value="<?= $row['no_rm'] ?>"><?= $row['no_rm'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="hasil_lab">Hasil Lab</label>
                        <input type="text" name="hasil_lab" class="form-control" placeholder="hasil_lab" required>
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