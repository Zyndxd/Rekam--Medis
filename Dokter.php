<?php include('Vesperr/template/header.php'); ?>

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
    <div class="text-center mt-4">
        <a href="Pasien.php" class="btn-kembali" data-aos="fade-up" data-aos-delay="200">← Kembali</a>
    </div>
</section><!-- /Testimonials Section -->
<?php include('Vesperr/template/footer.php'); ?>