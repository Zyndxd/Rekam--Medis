 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Pasien</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-account-group-outline"></i>
                <span class="menu-title">Pasien</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../template/index.php">Data Pasien</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../pasien/inputPasien.php">Input Pasien</a></li>
                </ul>
              </div>
            </li>
<?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?>            
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-account-outline"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="../user/user.php">Data User</a></li>
                  <li class="nav-item"><a class="nav-link" href="../user/inputUser.php">Input User</a></li>
                </ul>
              </div>
            </li>
<?php } ?>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-medication"></i>
                <span class="menu-title">Rekam Medis</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../Rekam Medis/DRekamMedis.php">Data Rekam Medis</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Rekam Medis/RekamMedis.php">Input Rekam Medis</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#kunjungan" aria-expanded="false" aria-controls="kunjungan">
                <i class="menu-icon mdi mdi-login-variant"></i>
                <span class="menu-title">Kunjungan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="kunjungan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../kunjungan/kunjungan.php">Data Kunjungan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../kunjungan/inputkunjungan.php">Input Kunjungan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Laboratorium" aria-expanded="false" aria-controls="Laboratorium">
                <i class="menu-icon mdi mdi-label-outline"></i>
                <span class="menu-title">Laboratorium</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="Laboratorium">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../laboratorium/laboratorium.php">Data Laboratorium</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../kunjungan/inputkunjungan.php">Input Laboratorium</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->