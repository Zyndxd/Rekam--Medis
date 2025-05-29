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
                                        <th class="text-center">Kd Tindakan</th>
                                        <th class="text-center">Nama Tindakan</th>
                                        <th class="text-center">ket</th>
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
                                        $query = mysqli_query($connection, "SELECT * FROM tindakan");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><h6><?= $data['kd_tindakan']; ?></h6></td>
                                            <td><h6><?= $data['nm_tindakan']; ?></h6></td>
                                            <td><h6><?= $data['ket']; ?></h6></td>
                                            <td class="text-start">
                                                <a href="EditTindakan.php?id=<?= $data['kd_tindakan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="HapusTindakan.php?id=<?= $data['kd_tindakan']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
          </div>
          <!-- content-wrapper ends -->
<?php include('../template/footer.php');  ?>