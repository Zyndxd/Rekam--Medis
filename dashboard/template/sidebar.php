 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="../template/index.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Pasien</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-account-group-outline"></i>
                <span class="menu-title">Pasien</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../pasien/pasien.php">Data Pasien</a></li>
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
                <i class="menu-icon mdi mdi-medication-outline"></i>
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
                  <li class="nav-item"> <a class="nav-link" href="../laboratorium/InputLab.php">Input Laboratorium</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Dokter" aria-expanded="false" aria-controls="Dokter">
                <i class="menu-icon mdi mdi-doctor"></i>
                <span class="menu-title">Dokter</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="Dokter">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../Dokter/Dokter.php">Data Dokter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../Dokter/InputDokter.php">Input Dokter</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Tindakan" aria-expanded="false" aria-controls="Tindakan">
                <i class="menu-icon mdi mdi-needle"></i>
                <span class="menu-title">Tindakan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="Tindakan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../tindakan/tindakan.php">Data Tindakan</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../tindakan/InputTindakan.php">Input Tindakan</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Obat" aria-expanded="false" aria-controls="Obat">
                <i class="menu-icon mdi mdi-pill"></i>
                <span class="menu-title">Obat</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="Obat">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../Obat/Obat.php">Data Obat</a></li>
<?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?> 
                  <li class="nav-item"> <a class="nav-link" href="../Obat/InputObat.php">Input Obat</a></li>
<?php } ?>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#Poliklinik" aria-expanded="false" aria-controls="Poliklinik">
                <i class="menu-icon mdi mdi-room-service-outline"></i>
                <span class="menu-title">Poliklinik</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="Poliklinik">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../poliklinik/poliklinik.php">Data Poli</a></li>
<?php if (in_array("pasien", $_SESSION['admin_akses'])) { ?>   
                  <li class="nav-item"> <a class="nav-link" href="../poliklinik/InputPoli.php">Input Poli</a></li>
<?php } ?>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->