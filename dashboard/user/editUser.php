<?php  
session_start();
if (!in_array("pasien", $_SESSION['admin_akses'])) {
  echo "
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel='stylesheet' href='../dist/assets/vendors/feather/feather.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/mdi/css/materialdesignicons.min.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/ti-icons/css/themify-icons.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/font-awesome/css/font-awesome.min.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/typicons/typicons.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/simple-line-icons/css/simple-line-icons.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/css/vendor.bundle.base.css'>
    <link rel='stylesheet' href='../dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel='stylesheet' href='../dist/assets/css/style.css'>
    <!-- endinject -->
    <link rel='shortcut icon' href='../dist/assets/images/favicon.png' />
  </head>
  <body>
    <div class='container-scroller'>
      <div class='container-fluid page-body-wrapper full-page-wrapper'>
        <div class='content-wrapper d-flex align-items-center text-center error-page bg-primary'>
          <div class='row flex-grow'>
            <div class='col-lg-7 mx-auto text-white'>
              <div class='row align-items-center d-flex flex-row'>
                <div class='col-lg-6 text-lg-right pr-lg-4'>
                  <h1 class='display-1 mb-0'>404</h1>
                </div>
                <div class='col-lg-6 error-page-divider text-lg-left pl-lg-4'>
                  <h2>SORRY!</h2>
                  <h3 class='fw-light'>The page you’re looking for was not found.</h3>
                </div>
              </div>
              <div class='row mt-5'>
                <div class='col-12 text-center mt-xl-2'>
                  <a class='text-white fw-medium' href='../template/index.php'>Back to home</a>
                </div>
              </div>
              <div class='row mt-5'>
                <div class='col-12 mt-xl-2'>
                  <p class='text-white fw-medium text-center'>Copyright &copy; 2021 All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src='../dist/assets/vendors/js/vendor.bundle.base.js'></script>
    <script src='../dist/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js'></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src='../dist/assets/js/off-canvas.js'></script>
    <script src='../dist/assets/js/template.js'></script>
    <script src='../dist/assets/js/settings.js'></script>
    <script src='../dist/assets/js/hoverable-collapse.js'></script>
    <script src='../dist/assets/js/todolist.js'></script>
    <!-- endinject -->
  </body>
</html>
  ";
  exit();
}

?>

<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_user = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM login WHERE kd_user='$kd_user'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $username       = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $update = mysqli_query($connection, "UPDATE login SET 
        username='$username',
        password='$password'
        WHERE kd_user='$kd_user'");

    if ($update) {
        header("Location: user.php?status=sukses_edit");
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
                    <h4 class="card-title">Input Data Pasien</h4>
                    <p class="card-description"> Silahkan Input Data Pasien </p>
                    <form action="" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $data['username']; ?>" required>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $data['password']; ?>" required>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                      <a href="user.php" class="btn btn-light">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
          </div>
<?php include('../template/footer.php'); ?>