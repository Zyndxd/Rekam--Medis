<div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="statistics-details d-flex align-items-center justify-content-between">
                          <?php
                            include '../../Vesperr/koneksi/koneksi.php';

                            if (!$connection) {
                            die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            $no = 1;
                            $query = mysqli_query($connection, "SELECT * FROM obat");

                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <div>
                              <p class="statistics-title"><?= $data['nm_obat']; ?></p>
                              <h3 class="rate-percentage"><?= $data['jml_obat']; ?>/100</h3>
                              <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
</div>