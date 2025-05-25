<?php include('../template/header.php'); ?>
<?php include('../template/sidebar.php'); ?>

<div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-lg-12 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="table-responsive w-100">
                                    <table class="table select-table w-100">
                                      <thead>
                                      <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Tindakan</th>
                                        <th class="text-center">Kode Obat</th>
                                        <th class="text-center">Kode User</th>
                                        <th class="text-center">No Pasien</th>
                                        <th class="text-center">Diagnosa</th>
                                        <th class="text-center">Resep</th>
                                        <th class="text-center">Keluhan</th>
                                        <th class="text-center">Tanggal Pemeriksaan</th>
                                        <th class="text-center">Keterangan</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../Vesperr/koneksi/koneksi.php';

                                        if (!$connection) {
                                        die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        $no = 1;
                                        $query = mysqli_query($connection, "SELECT * FROM rekam_medis");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><h6><?= $no++; ?></h6></td>
                                            <td><h6><?= $data['kd_tindakan']; ?></h6></td>
                                            <td><h6><?= $data['kd_obat']; ?></h6></td>
                                            <td><h6><?= $data['kd_user']; ?></h6></td>
                                            <td><h6><?= $data['no_pasien']; ?></h6></td>
                                            <td><h6><?= $data['diagnosa']; ?></h6></td>
                                            <td><h6><?= $data['resep']; ?></h6></td>
                                            <td><h6><?= $data['keluhan']; ?></h6></td>
                                            <td><h6><?= $data['tgl_pemeriksaan']; ?></h6></td>
                                            <td><h6><?= $data['ket']; ?></h6></td>
                                            <td class="text-start">
                                                <a href="editPasien.php?id=<?= $data['no_rm']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="hapusRekamMedis.php?id=<?= $data['no_rm']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                                <a href="cetakRekamMedis.php?id=<?= $data['no_rm']; ?>" class="btn btn-sm btn-info" target="_blank">Cetak</a>                                                
                                            </td>

                                        </tr>
                                        <?php } ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->


<?php include('../template/footer.php'); ?>