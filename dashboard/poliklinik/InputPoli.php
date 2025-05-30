<?php
session_start();
ini_set('display_errors', 0);
error_reporting(0);
include('../../Vesperr/koneksi/koneksi.php');

if (!isset($_SESSION['admin_akses']) || !in_array("pasien", $_SESSION['admin_akses'])) {
  header("Location: ../template/404.php");
  exit();
}
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
                    <form action="SimpanPoli.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="nm_poli">Nama Poli</label>
                        <input type="text" name="nm_poli" class="form-control" placeholder="Nama Poli" required>
                      </div>
                      <div class="form-group">
                        <label for="lantai">Lantai</label>
                        <input type="text" name="lantai" class="form-control" placeholder="Lantai" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>