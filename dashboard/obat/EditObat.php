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

<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_obat = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM obat WHERE kd_obat='$kd_obat'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $nm_obat     = $_POST['nm_obat'];
    $jml_obat = $_POST['jml_obat'];
    $ukuran       = $_POST['ukuran'];
    $harga       = $_POST['harga'];

    $update = mysqli_query($connection, "UPDATE obat SET 
        nm_obat='$nm_obat',
        jml_obat='$jml_obat',
        ukuran='$ukuran', 
        harga='$harga' 
        WHERE kd_obat='$kd_obat'");

    if ($update) {
        header("Location: Obat.php?status=sukses_edit");
        exit();
    } else {
        echo "Gagal update data.";
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
                    <h4 class="card-title">Input Obat</h4>
                    <p class="card-description"> Silahkan Input Obat </p>
                    <form action="" method="POST" class="forms-sample">
                      <div class="form-group">
                        <label for="nm_obat">Nama Obat</label>
                        <input type="text" name="nm_obat" class="form-control" value="<?= $data['nm_obat']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="jml_obat">Jumlah Obat</label>
                        <input type="text" name="jml_obat" class="form-control" value="<?= $data['jml_obat']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text" name="ukuran" class="form-control" value="<?= $data['ukuran']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" value="<?= $data['harga']; ?>" required>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>

<?php include('../template/footer.php'); ?>
