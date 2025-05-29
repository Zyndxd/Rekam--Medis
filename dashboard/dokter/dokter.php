<?php include('../template/header.php');  ?>
<?php include('../template/sidebar.php');  ?>

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
                                        <th class="text-center">Kd Dokter</th>
                                        <th class="text-center">Kd Poli</th>
                                        <th class="text-center">Tgl Kunjungan</th>
                                        <th class="text-center">Kd User</th>
                                        <th class="text-center">Nama Dokter</th>
                                        <th class="text-center">SIP</th>
                                        <th class="text-center">Tempat Lahir</th>
                                        <th class="text-center">Telepon</th>
                                        <th class="text-center">Alamat</th>
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
                                        $query = mysqli_query($connection, "
                                            SELECT dokter.*, poliklinik.nm_poli 
                                            FROM dokter 
                                            LEFT JOIN poliklinik ON dokter.kd_poli = poliklinik.kd_poli
                                        ");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr>
                                            <td class="text-center"><h6><?= $no++; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['kd_dokter']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['nm_poli']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['tgl_kunjungan']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['kd_user']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['nm_dokter']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['SIP']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['tempat_lhr']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['no_telp']; ?></h6></td>
                                            <td class="text-center"><h6><?= $data['alamat']; ?></h6></td>
                                            <td>
                                                <span title="<?= htmlspecialchars($data['ket']) ?>" style="display: inline-block; max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; cursor: help;">
                                                    <?= mb_strimwidth($data['ket'], 0, 50, "..."); ?>
                                                </span>
                                            </td>


                                            <td class="text-start">
                                                <a href="../dokter/EditDokter.php?id=<?= $data['kd_dokter']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="../dokter/HapusDokter.php?id=<?= $data['kd_dokter']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
<?php include('../template/footer.php');  ?>

          