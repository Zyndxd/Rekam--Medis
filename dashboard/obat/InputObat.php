<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Obat</h4>
                    <p class="card-description"> Silahkan Input Obat </p>
                    <form action="SimpanObat.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="nm_obat">Nama Obat</label>
                        <input type="text" name="nm_obat" class="form-control" placeholder="Nama Obat" required>
                      </div>
                      <div class="form-group">
                        <label for="jml_obat">Jumlah Obat</label>
                        <input type="text" name="jml_obat" class="form-control" placeholder="Jumlah Obat" required>
                      </div>
                      <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" name="ukuran" class="form-control" placeholder="Ukuran" required>
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>