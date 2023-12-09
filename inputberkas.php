<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Serenity Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Seksi 3</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="team.html">Team</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a class="active" href="contact.html">Contact</a></li>

          <li><a class="getstarted" href="about.html">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Input Data Berkas</h2>
            <p>Pertimbangan Teknis Pertanahan Kabupaten Agam</p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Input Data</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="act/tambah-berkas.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-2 form-group">
                  <label>Nomor Berkas:</label>
                  <input type="text" name="no_berkas" class="form-control" id="name" placeholder="nomor berkasnyo">
                </div>
                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <label>Tahun:</label>
                  <input type="text" class="form-control" name="tahun" id="email" placeholder="tahun berkasnyo">
                </div>
                <div class="col-md-8 form-group mt-3 mt-md-0">
                  <label>Jenis Pertek:</label>
                  <select name="jenis_pertek" class="form-control">
                    <option value="" selected disabled>Pilih ciek.....</option>
                    <option value="Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang (PKKPR) Untuk Kegiatan Non Berusaha">PKKPR Untuk Kegiatan Non Berusaha</option>
                    <option value="Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang (PKKPR) Untuk Kegiatan Berusaha">PKKPR Untuk Kegiatan Berusaha</option>
                    <option value="Penyelenggaraan Kebijakan Penggunaan dan Pemanfaatan Tanah">Penyelenggaraan Kebijakan Penggunaan dan Pemanfaatan Tanah</option>
                    <option value="PKKPR atau RKKPR Untuk Kegiatan Yang Bersifat Strategis Nasional">PKKPR atau RKKPR Untuk Kegiatan Yang Bersifat Strategis Nasional</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Nama Pemohon:</label>
                  <input type="text" name="nama_pemohon" class="form-control" id="name" placeholder="namo pemohon">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>NIK:</label>
                  <input type="text" class="form-control" name="nik" id="email" placeholder="nik di KTP">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Alamat:</label>
                  <input type="text" name="alamat" class="form-control" id="name" placeholder="alamat pemohon">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Bertindak atas nama:</label>
                  <input type="text" class="form-control" name="bertindak_atas_nama" id="email" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Nagari:</label>
                  <input type="text" name="nagari" class="form-control" id="name" placeholder="lokasi tanah di nagari..">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Kecamatan:</label>
                  <input type="text" class="form-control" name="kecamatan" id="email" placeholder="lokasi tanah di kecamatan..">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 15px;"></div>
                <!-- <div style="padding-top: 5px;"></div> -->
                <button name="baru" type="submit" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Input Berkas
                </button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Serenity</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>