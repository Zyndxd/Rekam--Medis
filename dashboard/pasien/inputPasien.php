<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>
<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Input Data Pasien</h4>
                    <p class="card-description"> Silahkan Input Data Pasien </p>
                    <form action="SimpanPasien.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="nm_pasien">Nama Pasien</label>
                        <input type="text" name="nm_pasien" class="form-control" placeholder="Nama Pasien" required>
                      <div class="form-group">
                        <label for="j_kel">Jenis Kelamin</label>
                        <input type="text" name="j_kel" class="form-control" placeholder="Laki-laki/Perempuan" required>
                      </div>
                      <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" rows="2" class="form-control" placeholder="Alamat" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="tgl_lhr">Tanggal Lahir</label>
                        <input type="date" name="tgl_lhr" class="form-control" placeholder="Tanggal Lahir" required>
                      </div>
                      <div class="form-group">
                        <label for="usia">Usia<</label>
                        <input type="number" name="usia" class="form-control" placeholder="Usia" required>
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon" required>
                      </div>
                      <div class="form-group">
                        <label for="nm_kk">Nama Kepala Keluarga</label>
                        <input type="text" name="nm_kk" class="form-control" placeholder="Nama Kepala Keluarga" required>
                      </div>
                      <div class="form-group">
                        <label for="hub_kel">Hubungan Keluarga</label>
                        <input type="text" name="hub_kel" class="form-control" placeholder="Hubungan Keluarga" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>