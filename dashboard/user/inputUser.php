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
                    <h4 class="card-title">Input Data User</h4>
                    <p class="card-description"> Silahkan Input Data User </p>
                    <form action="simpanUser.php" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button typer="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>