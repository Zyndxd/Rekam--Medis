<main class="main">

<!-- Hero Section -->
<section id="Home" class="hero section">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Selamat Datang di Rekam Medis</h1>
        <p>Optimalkan pelayanan kesehatan dengan manajemen data pasien yang terintegrasi.</p>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="Vesperr/assets/assets/img/hero-img.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->


    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section light-background">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Dokter</h2>
  <p>Profil Dokter</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 2,
            "spaceBetween": 20
          }
        }
      }
    </script>
    <div class="swiper-wrapper">


    <?php
        include 'Vesperr/koneksi/koneksi.php';

        if (!$connection) {
          die("Koneksi gagal: " . mysqli_connect_error());
        }

        $no = 1;
        $query = mysqli_query($connection, "
          SELECT dokter.*, poliklinik.nm_poli 
          FROM dokter 
          JOIN poliklinik ON dokter.kd_poli = poliklinik.kd_poli
        ");
        while ($data = mysqli_fetch_array($query)) {
        ?>
      <div class="swiper-slide">
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <h3><?= $data['nm_dokter']; ?></h3>
            <h4><?= $data['nm_poli']; ?></h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span><?= $data['ket']; ?></span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div>
      </div><!-- End testimonial item -->
      <?php } ?>

      

    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>
</section><!-- /Testimonials Section -->

 <!-- About Section -->
 <section id="about" class="about section">

<!-- Section Title -->
<div class="container section-title text-center" data-aos="fade-up">
  <h2>Poliklinik</h2>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-5 justify-content-center">

    <div class="col-xl-7 mx-auto" data-aos="fade-up" data-aos-delay="200">
      <div class="row gy-4">

        <div class="col-md-6 icon-box position-relative d-flex flex-column align-items-center text-center">
          <i class="bi bi-people-fill"></i>
          <h4><a href="" class="stretched-link">Poli Umum</a></h4>
          <p>Poli ini menangani keluhan kesehatan umum seperti demam, batuk, flu, sakit kepala, pusing, nyeri otot, dan keluhan ringan lainnya.</p>
        </div><!-- Icon-Box -->

        <div class="col-md-6 icon-box position-relative d-flex flex-column align-items-center text-center">
          <i class="fa-solid fa-tooth"></i>
          <h4><a href="" class="stretched-link">Poli Gigi</a></h4>
          <p>Poli ini memberikan layanan pemeriksaan dan perawatan untuk masalah kesehatan gigi dan mulut. Biasanya ditangani oleh dokter gigi.</p>
        </div><!-- Icon-Box -->

        <div class="col-md-6 icon-box position-relative d-flex flex-column align-items-center text-center">
          <i class="fa-solid fa-children"></i>
          <h4><a href="" class="stretched-link">Poli Anak</a></h4>
          <p>Poli ini fokus pada pelayanan kesehatan untuk anak-anak usia 0–14 tahun. Diperiksa oleh dokter anak (Spesialis Anak / Sp.A).</p>
        </div><!-- Icon-Box -->

        <div class="col-md-6 icon-box position-relative d-flex flex-column align-items-center text-center">
          <i class="fa-solid fa-ear-listen"></i>
          <h4><a href="" class="stretched-link">Poli THT</a></h4>
          <p>Menangani masalah kesehatan yang berhubungan dengan telinga, hidung, dan tenggorokan. Diperiksa oleh dokter spesialis THT (Sp.THT).</p>
        </div><!-- Icon-Box -->

      </div>
    </div>

  </div>

</div>

</section><!-- /About Section -->
