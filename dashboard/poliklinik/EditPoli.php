<?php
include('../../Vesperr/koneksi/koneksi.php');

$kd_poli = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM poliklinik WHERE kd_poli='$kd_poli'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}


if (isset($_POST['update'])) {
    $nm_poli     = $_POST['nm_poli'];
    $lantai = $_POST['lantai'];

    $update = mysqli_query($connection, "UPDATE poliklinik SET 
        nm_poli='$nm_poli',
        lantai='$lantai'
        WHERE kd_poli='$kd_poli'");

    if ($update) {
        header("Location: poliklinik.php?status=sukses_edit");
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
          <h4 class="card-title">Edit Poliklinik</h4>
          <p class="card-description"> Silahkan Edit Data Poliklinik </p>
          <form action="" method="POST" class="forms-sample">
                <div class="form-group">
                    <label for="nm_poli">Nama Poli</label>
                    <input type="text" name="nm_poli" class="form-control" value="<?= $data['nm_poli']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="lantai">Lantai</label>
                    <input type="text" name="lantai" class="form-control" value="<?= $data['lantai']; ?>" required>
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
