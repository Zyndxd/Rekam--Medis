<?php
include('../../Vesperr/koneksi/koneksi.php');

$tgl_kunjungan = $_GET['id'];

// Ambil data kunjungan dengan JOIN ke tabel pasien dan poli
$query = mysqli_query($connection, "SELECT kunjungan.*, pasien.nm_pasien, poliklinik.nm_poli 
    FROM kunjungan 
    JOIN pasien ON kunjungan.no_pasien = pasien.no_pasien 
    JOIN poliklinik ON kunjungan.kd_poli = poliklinik.kd_poli
    WHERE kunjungan.tgl_kunjungan = '$tgl_kunjungan'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit();
}

// Ambil data pasien dan poli untuk dropdown
$pasien = mysqli_query($connection, "SELECT * FROM pasien");
$poli   = mysqli_query($connection, "SELECT * FROM poliklinik");

if (isset($_POST['update'])) {
    $tgl_kunjungan = $_POST['tgl_kunjungan'];
    $no_pasien     = $_POST['no_pasien'];
    $kd_poli       = $_POST['kd_poli'];
    $jam_kunjungan = $_POST['jam_kunjungan'];

    $update = mysqli_query($connection, "UPDATE kunjungan SET 
        tgl_kunjungan='$tgl_kunjungan',
        no_pasien='$no_pasien',
        kd_poli='$kd_poli',
        jam_kunjungan='$jam_kunjungan'
        WHERE tgl_kunjungan='{$_GET['id']}'");

    if ($update) {
        header("Location: kunjungan.php?status=sukses_edit");
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
                    <p class="card-description">Silahkan Input Data Pasien</p>
                    <form action="" method="POST" class="forms-sample">
                        <div class="form-group">
                            <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                            <input type="date" name="tgl_kunjungan" class="form-control" value="<?= $data['tgl_kunjungan']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="no_pasien">No Pasien</label>
                            <select class="form-select" name="no_pasien" required>
                                <option value="<?= $data['no_pasien']; ?>"><?= $data['no_pasien'] . ' - ' . $data['nm_pasien']; ?></option>
                                <?php while ($row = mysqli_fetch_assoc($pasien)) { ?>
                                    <option value="<?= $row['no_pasien']; ?>">
                                        <?= $row['no_pasien'] . ' - ' . $row['nm_pasien']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kd_poli">Kode Poli</label>
                            <select class="form-select" name="kd_poli" required>
                                <option value="<?= $data['kd_poli']; ?>"><?= $data['kd_poli'] . ' - ' . $data['nm_poli']; ?></option>
                                <?php while ($row = mysqli_fetch_assoc($poli)) { ?>
                                    <option value="<?= $row['kd_poli']; ?>"><?= $row['kd_poli'] . ' - ' . $row['nm_poli']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jam_kunjungan">Jam Kunjungan</label>
                            <input type="datetime-local" name="jam_kunjungan" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($data['jam_kunjungan'])); ?>" required>
                        </div>

                        <button type="submit" name="update" class="btn btn-primary me-2">Submit</button>
                        <a href="kunjungan.php" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../template/footer.php'); ?>
