<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rekapitulasi Singkat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php">Seksi 3</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
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
          <li><a class="active" href="rekap.php">Rekap</a></li>

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
            <h2>Rekapitulasi Penyelesaian Berkas Pertek</h2>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Rekapitulasi Data Pertek</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

      

          <div class="table-responsive">
        
            <table class="table table-bordered table-striped table-hover" style="font-size: small;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">No. Berkas</th>
                  <th scope="col">Jenis Kegiatan</th>
                  <th scope="col">Pemohon</th>
                  <th scope="col">Nagari</th>
                  <th scope="col">Kecamatan</th>
                  <th scope="col">Luas (m<sup>2</sup>)</th>
                  <th scope="col">No. Risalah</th>
                  <th scope="col">Tgl. Risalah</th>
                  <th scope="col">No. STPL</th>
                  <th scope="col">Tgl. STPL</th>
                  <th scope="col">No. RPD</th>
                  <th scope="col">Tgl. RPD</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $batas = 100;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                include 'inc/koneksi.php';

                $data = mysqli_query($koneksi, "select id from berkas");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);
                $query = "SELECT id, no_berkas, jenis_pertek, nama_pemohon, desa_nagari, kecamatan, tahun, luas, no_risalah, tanggal_risalah, no_stpl, tanggal_stpl, no_st_pengolahan_data, tanggal_st_pengolahan_data
                          FROM berkas ORDER BY tanggal_risalah DESC limit ?, ?";
                $sql = $koneksi->prepare($query);
                $sql->bind_param("ss", $halaman_awal, $batas);
                $sql->execute();
                $data = $sql->get_result();
                $no = $halaman_awal + 1;

                if ($data->num_rows > 0) {
                  while ($row = $data->fetch_assoc()) {
                    $luas = $row['luas'];
                    $luasan = "";
                    if ($luas > 10000) {
                      $luasan = " luas lebih dari 1 hektar";
                    }
                    else {
                      $luasan = " luas s.d. 1 Ha";
                    }
                ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['no_berkas'] . "/" . $row['tahun']; ?></td>
                      <td><?php echo $row['jenis_pertek'].$luasan ?></td>
                      <td><?php echo $row['nama_pemohon'] ?></td>
                      <td><?php echo $row['desa_nagari'] ?></td>
                      <td><?php echo $row['kecamatan']; ?></td>
                      <td><?php echo $luas ?></td>
                      <td>'<?php echo $row['no_risalah'] ?></td>
                      <?php $tgl=strtotime($row['tanggal_risalah']); ?>
                      <td><?php echo date('d-m-Y', $tgl) ?></td>
                      <td><?php echo $row['no_stpl'] ?></td>
                      <?php $tgl=strtotime($row['tanggal_stpl']); ?>
                      <td><?php echo date('d-m-Y', $tgl) ?></td>
                      <td><?php echo $row['no_st_pengolahan_data'] ?></td>
                      <?php $tgl=strtotime($row['tanggal_st_pengolahan_data']); ?>
                      <td><?php echo date('d-m-Y', $tgl) ?></td>
                      <td>
                        <a href="edit.php?berkas=<?php echo base64_encode($row['id']) ?>">
                          <button type="button" class="btn btn-outline-warning btn-sm">Show</button>
                      </td>
                      </a>
                    </tr>
                  <?php }
                } else { ?>
                  <tr>
                    <td colspan='5'>Tidak ada data ditemukan</td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" <?php if ($halaman > 1) {
                                          echo "href='?halaman=$previous'";
                                        } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                  <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                  <a class="page-link" <?php if ($halaman < $total_halaman) {
                                          echo "href='?halaman=$next'";
                                        } ?>>Next</a>
                </li>
              </ul>
            </nav>
         
          <div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <script type="text/javascript">
    function hapus() {
      Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: '<a href="#">Why do I have this issue?</a>'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Ndak Bisa!",
          text: "Fitur hapus data alun tersedia",
          icon: "success"
        });
      }
    });
    }

  </script>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Serenity</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
              darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo.
              Amet volutpat consequat mauris nunc congue.</p>
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
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore
              legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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