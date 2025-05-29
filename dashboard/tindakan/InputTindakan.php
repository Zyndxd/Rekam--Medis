<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>

<div class="content-wrapper">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Laboratorium</h4>
          <p class="card-description"> Silahkan Edit Data Laboratorium </p>
          <form action="SimpanTindakan.php" method="POST" class="forms-sample">
            <div class="form-group">
              <label for="nm_tindakan">Nama Tindakan</label>
              <input type="text" name="nm_tindakan" class="form-control" placeholder="Nama Tindakan" required>
            </div>
            <div class="form-group">
              <label for="ket">Keterangan</label>
              <input type="text" name="ket" class="form-control" placeholder="Keterangan" required>
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
