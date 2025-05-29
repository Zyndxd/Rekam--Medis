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
                                        <th class="text-center">Kd Poli</th>
                                        <th class="text-center">Nama Poli</th>
                                        <th class="text-center">Lantai</th>
                                    <?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?>   
                                        <th>Aksi</th>
                                    <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../Vesperr/koneksi/koneksi.php';

                                        if (!$connection) {
                                        die("Koneksi gagal: " . mysqli_connect_error());
                                        }

                                        $no = 1;
                                        $query = mysqli_query($connection, "SELECT * FROM poliklinik");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><h6><?= $data['kd_poli']; ?></h6></td>
                                            <td><h6><?= $data['nm_poli']; ?></h6></td>
                                            <td><h6><?= $data['lantai']; ?></h6></td>
                                        <?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?>   
                                            <td class="text-start">
                                                <a href="EditPoli.php?id=<?= $data['kd_poli']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="HapusPoli.php?id=<?= $data['kd_poli']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                                </td>
                                        <?php } ?>
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