<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_tindakan = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM tindakan WHERE kd_tindakan='$kd_tindakan'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

if (isset($_POST['update'])) {
    $nm_tindakan     = $_POST['nm_tindakan'];
    $ket       = $_POST['ket'];

    $update = mysqli_query($connection, "UPDATE tindakan SET 
        nm_tindakan='$nm_tindakan',,
        ket='$ket' 
        WHERE kd_tindakan='$kd_tindakan'");

    if ($update) {
        header("Location: tindakan.php?status=sukses_edit");
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
          <h4 class="card-title">Edit Tindakan</h4>
          <p class="card-description"> Silahkan Edit Data Tindakan </p>
          <form action="" method="POST" class="forms-sample">
            <div class="form-group">
              <label for="ket">Nama Tindakan</label>
              <input type="text" name="ket" class="form-control" value="<?= $data['nm_tindakan']; ?>" required>
            </div>
            <div class="form-group">
              <label for="ket">Keterangan</label>
              <input type="text" name="ket" class="form-control" value="<?= $data['ket']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('../template/footer.php'); ?>
