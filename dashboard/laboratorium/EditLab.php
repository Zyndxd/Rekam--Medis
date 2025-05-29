<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_lab = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM laboratorium WHERE kd_lab='$kd_lab'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

$rekdis = mysqli_query($connection, "SELECT no_rm FROM laboratorium");

if (isset($_POST['update'])) {
    $no_rm     = $_POST['no_rm'];
    $hasil_lab = $_POST['hasil_lab'];
    $ket       = $_POST['ket'];

    $update = mysqli_query($connection, "UPDATE laboratorium SET 
        no_rm='$no_rm',
        hasil_lab='$hasil_lab',
        ket='$ket' 
        WHERE kd_lab='$kd_lab'");

    if ($update) {
        header("Location: laboratorium.php?status=sukses_edit");
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
          <h4 class="card-title">Edit Laboratorium</h4>
          <p class="card-description"> Silahkan Edit Data Laboratorium </p>
          <form action="" method="POST" class="forms-sample">
            <div class="form-group">
              <label for="no_rm">No Rekam Medis</label>
              <select class="form-select" name="no_rm" required>
                <option value="">--Pilih No Rekam Medis--</option>
                <?php while ($row = mysqli_fetch_assoc($rekdis)) { ?>
                  <option value="<?= $row['no_rm'] ?>" <?= $row['no_rm'] == $data['no_rm'] ? 'selected' : '' ?>>
                    <?= $row['no_rm'] ?>
                  </option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="hasil_lab">Hasil Lab</label>
              <input type="text" name="hasil_lab" class="form-control" value="<?= $data['hasil_lab']; ?>" required>
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
