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
                                        <th class="text-center">No Pasien</th>
                                        <th class="text-center">Nama Pasien</th>
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Agama</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Tanggal Lahir</th>
                                        <th class="text-center">Usia</th>
                                        <th class="text-center">Telepon</th>
                                        <th class="text-center">Nama KK</th>
                                        <th class="text-center">Hub. Keluarga</th>
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
                                        $query = mysqli_query($connection, "SELECT * FROM pasien");

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <tr class="text-center">
                                            <td><h6><?= $no++; ?></h6></td>
                                            <td><h6><?= $data['no_pasien']; ?></h6></td>
                                            <td><h6><?= $data['nm_pasien']; ?></h6></td>
                                            <td><h6><?= $data['j_kel']; ?></h6></td>
                                            <td><h6><?= $data['agama']; ?></h6></td>
                                            <td><h6><?= $data['alamat']; ?></h6></td>
                                            <td><h6><?= $data['tgl_lhr']; ?></h6></td>
                                            <td><h6><?= $data['usia']; ?></h6></td>
                                            <td><h6><?= $data['no_telp']; ?></h6></td>
                                            <td><h6><?= $data['nm_kk']; ?></h6></td>
                                            <td><h6><?= $data['hub_kel']; ?></h6></td>
                                            <td class="text-start">
                                                <a href="../pasien/editPasien.php?id=<?= $data['no_pasien']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="../pasien/hapusPasien.php?id=<?= $data['no_pasien']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
          