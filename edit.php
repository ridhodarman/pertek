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
    <?php
    include 'inc/koneksi.php';
    $id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['berkas']), ENT_QUOTES)));

    $query = "SELECT * FROM berkas WHERE id=?";
    $sql = $koneksi->prepare($query);
    $sql->bind_param("i", $id);
    $sql->execute();
    $data = $sql->get_result();
    while ($row = $data->fetch_assoc()) {
      $no_berkas = $row['no_berkas'];
      $tahun = $row['tahun'];
      $jenis_pertek = $row['jenis_pertek'];
      $nama_pemohon = $row['nama_pemohon'];
      $nik = $row['nik'];
      $alamat = $row['alamat'];
      $bertindak_atas_nama = $row['bertindak_atas_nama'];
      $desa_nagari = $row['desa_nagari'];
      $kecamatan = $row['kecamatan'];
      $alamat_lokasi = $row['alamat_lokasi'];
      $tanggal_rapat_persiapan = $row['tanggal_rapat_persiapan'];
      $jam_rapat_persiapan = $row['jam_rapat_persiapan'];
      $luas = $row['luas'];
      $tanggal_permohonan = $row['tanggal_permohonan'];
      $tanggal_peninjauan = $row['tanggal_peninjauan'];
      $no_stpl = $row['no_stpl'];
      $tanggal_stpl = $row['tanggal_stpl'];
      $koordinat_lokasi = $row['koordinat_lokasi'];
      $kawasan_rtrw = $row['kawasan_rtrw'];
      $penggunaan_tanah = $row['penggunaan_tanah'];
      $penguasaan_tanah = $row['penguasaan_tanah'];
      $indikasi_skp = $row['indikasi_skp'];
      $lereng = $row['lereng'];
      $tekstur = $row['tekstur'];
      $kedalaman_efektif = $row['kedalaman_efektif'];
      $drainase = $row['drainase'];
      $erosi = $row['erosi'];
      $faktor_pembatas = $row['faktor_pembatas'];
      $ketinggian = $row['ketinggian'];
      $mata_air = $row['mata_air'];
      $keberadaan_tanah_timbul = $row['keberadaan_tanah_timbul'];
      $pancang_diatas_air = $row['pancang_diatas_air'];
      $terletak_dipulau_kecil = $row['terletak_dipulau_kecil'];
      $nama_pulau = $row['nama_pulau'];
      $luas_pulau = $row['luas_pulau'];
      $kekerasan_tanah_timbul = $row['kekerasan_tanah_timbul'];
      $intrusi_air_laut = $row['intrusi_air_laut'];
      $jenis_tanah_timbul = $row['jenis_tanah_timbul'];
      $pola_pasang_surut = $row['pola_pasang_surut'];
      $arus_gel_laut = $row['arus_gel_laut'];
      $keberadaan_mangrove_dll = $row['keberadaan_mangrove_dll'];
      $jumlah_penduduk = $row['jumlah_penduduk'];
      $kepadatan_penduduk = $row['kepadatan_penduduk'];
      $rerata_kepemilikan_tanah = $row['rerata_kepemilikan_tanah'];
      $kepadatan_agraris = $row['kepadatan_agraris'];
      $mayoritas_mata_pencaharian = $row['mayoritas_mata_pencaharian'];
      $rencana_penggunaan_tanah = $row['rencana_penggunaan_tanah'];
      $jaringan_jalan = $row['jaringan_jalan'];
      $jaringan_listrik = $row['jaringan_listrik'];
      $air_minum = $row['air_minum'];
      $saluran_drainase = $row['saluran_drainase'];
      $pipa_minyak = $row['pipa_minyak'];
      $gas = $row['gas'];
      $longsor = $row['longsor'];
      $banjir_rob = $row['banjir_rob'];
      $banjir = $row['banjir'];
      $bencana_lainnya = $row['bencana_lainnya'];
      $keterangan_lain_lokasi = $row['keterangan_lain_lokasi'];
      $utara = $row['utara'];
      $timur = $row['timur'];
      $selatan = $row['selatan'];
      $barat = $row['barat'];
      $jarak_jalan_penghubung = $row['jarak_jalan_penghubung'];
      $jarak_jalan_arteri = $row['jarak_jalan_arteri'];
      $penguasaan_tanah_sekitar = $row['penguasaan_tanah_sekitar'];
      $infrastruktur_berkaitan = $row['infrastruktur_berkaitan'];
      $jaringan_lainnya = $row['jaringan_lainnya'];
      $keterangan_lain_sekitar = $row['keterangan_lain_sekitar'];
      $nib = $row['nib'];
      $kbli = $row['kbli'];
      $no_ba_lapang = $row['no_ba_lapang'];
      $tanggal_ba_lapang = $row['tanggal_ba_lapang'];
      $no_st_pengolahan_data = $row['no_st_pengolahan_data'];
      $tanggal_st_pengolahan_data = $row['tanggal_st_pengolahan_data'];
      $no_risalah = $row['no_risalah'];
      $tanggal_risalah = $row['tanggal_risalah'];
      $no_surat_pertek = $row['no_surat_pertek'];
      $tanggal_surat_pertek = $row['tanggal_surat_pertek'];
    }
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Berkas PTP No. <?php echo $no_berkas . " / " . $tahun ?></h2>
            <div><b><?php echo $nama_pemohon ?></b></div>
            <div><?php echo $bertindak_atas_nama ?></div>
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

            <form action="act/edit-berkas.php" method="post" role="form" class="php-email-form">
              <input type="text" name="id" value="<?php echo $id ?>">
              <div class="row">
                <div class="col-md-2 form-group">
                  <label>Nomor Berkas:</label>
                  <input type="text" name="no_berkas" class="form-control" placeholder="nomor berkasnyo" value="<?php echo $no_berkas ?>">
                </div>
                <div class="col-md-2 form-group mt-3 mt-md-0">
                  <label>Tahun:</label>
                  <input type="text" class="form-control" name="tahun" placeholder="tahun berkasnyo" value="<?php echo $tahun ?>">
                </div>
                <div class="col-md-8 form-group mt-3 mt-md-0">
                  <label>Jenis Pertek:</label>
                  <select name="jenis_pertek" class="form-control">
                    <option value="" style="color: gray;">Pilih ciek.....</option>
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
                  <input type="text" name="nama_pemohon" class="form-control" placeholder="namo pemohon" value="<?php echo $nama_pemohon ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>NIK:</label>
                  <input type="text" class="form-control" name="nik" placeholder="nik di KTP" value="<?php echo $nik ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Alamat:</label>
                  <input type="text" name="alamat" class="form-control" placeholder="alamat pemohon" value="<?php echo $alamat ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Bertindak atas nama:</label>
                  <input type="text" class="form-control" name="bertindak_atas_nama" value="<?php echo $bertindak_atas_nama ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Nagari:</label>
                  <input type="text" name="desa_nagari" class="form-control" placeholder="lokasi tanah di nagari.." value="<?php echo $desa_nagari ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Kecamatan:</label>
                  <input type="text" class="form-control" name="kecamatan" placeholder="lokasi tanah di kecamatan.." value="<?php echo $kecamatan ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Alamat lokasi (jalan/jorong/RT):</label>
                  <input type="text" name="alamat_lokasi" class="form-control" placeholder="lokasi tanah di nagari.." value="<?php echo $alamat_lokasi ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Format (SK Pertek):</label>
                  <select class="form-control">
                    <option value="Tidak Ada">Nomor: SK../.../2023</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label id="persiapan">Tanggal Rapat Persiapan:</label>
                  <input type="date" name="tanggal_rapat_persiapan" class="form-control" id="name" value="<?php echo $tanggal_rapat_persiapan ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jam Rapat Persiapan:</label>
                  <input type="text" class="form-control" name="jam_rapat_persiapan" placeholder="masukkan waktu mulai rapat, misal= 10:00" value="<?php echo $jam_rapat_persiapan ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 15px;"></div>
                <!-- <div style="padding-top: 5px;"></div> -->
                <button name="baru" type="kirim" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Surat Undangan Rapat Persiapan
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-bottom: 15px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Daftar Hadir Rapat Persiapan
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-bottom: 5px;"></div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Luas:</label>
                  <input type="text" name="luas" class="form-control" placeholder="luas tanah yang dimohon.." value="<?php echo $luas ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Tanggal Permohonan:</label>
                  <input type="date" class="form-control" name="tanggal_permohonan" value="<?php echo $tanggal_permohonan ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Notulensi Rapat Persiapan
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-bottom: 5px;"></div>
              </div>
              <div class="row">
                <div class="col-md-4 form-group mt-3 mt-md-0">
                  <label>Tanggal Peninjauan Lapang:</label>
                  <input type="date" class="form-control" name="tanggal_peninjauan" value="<?php echo $tanggal_peninjauan ?>">
                </div>
                <div class="col-md-4 form-group">
                  <label>No. ST Lapang:</label>
                  <input type="text" name="no_stpl" class="form-control" value="<?php echo $no_stpl ?>">
                </div>
                <div class="col-md-4 form-group">
                  <label>Tanggal ST Lapang:</label>
                  <input type="date" name="tanggal_stpl" class="form-control" value="<?php echo $tanggal_stpl ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Surat Tugas Lapang
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-bottom: 5px;"></div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Koordinat Lokasi:</label>
                  <textarea class="form-control" name="koordinat_lokasi"><?php echo $koordinat_lokasi ?></textarea>
                </div>
                <div class="col-md-6 form-group">
                  <label>Arahan Fungsi Kawasan:</label>
                  <textarea class="form-control" name="kawasan_rtrw"><?php echo $kawasan_rtrw ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Penggunaan Tanah Saat ini:</label>
                  <input type="text" class="form-control" name="penggunaan_tanah" placeholder="penggunaan tanah saat ini" value="<?php echo $penggunaan_tanah ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Status penguasaan/pemilikan:</label>
                  <input type="text" name="penguasaan_tanah" class="form-control" placeholder="penguasaan/pemilikan tanah saat ini ?" value="<?php echo $penguasaan_tanah ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Indikasi Sengketa/konflik/perkara:</label>
                  <select class="form-control" name="indikasi_skp">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Lereng:</label>
                  <input type="text" name="lereng" class="form-control" placeholder="misal: 0-3%, 3-8%, dst.." value="<?php echo $lereng ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Tekstur Tanah:</label>
                  <select class="form-control" name="tekstur">
                    <option value="Sedang">Sedang</option>
                    <option value="Halus">Halus</option>
                    <option value="Kasar">Kasar</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Kedalaman Efektif:</label>
                  <input type="text" name="kedalaman_efektif" class="form-control" placeholder="misal: >90 , 1-30, dll" value="<?php echo $kedalaman_efektif ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Drainase:</label>
                  <select class="form-control" name="drainase">
                    <option value="Tidak tergenang">Tidak tergenang</option>
                    <option value="Tergenang periodik">Tergenang periodik</option>
                    <option value="Tergenang terus menerus">Tergenang terus menerus</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label name="erosi">Erosi:</label>
                  <select class="form-control" name="erosi">
                    <option value="Tidak ada erosi">Tidak ada erosi</option>
                    <option value="Ada erosi">Ada erosi</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Faktor Pembatas:</label>
                  <select class="form-control" name="faktor_pembatas">
                    <option value="-">-</option>
                    <option value="Gambut">Gambut</option>
                    <option value="Tutupan batuan">Tutupan batuan</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Ketinggian (dalam satuan mdpl):</label>
                  <input type="text" name="ketinggian" class="form-control" placeholder="isi angko se, misalnyo: 100, 200, dll" value="<?php echo $ketinggian ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Keberadaan mata air:</label>
                  <select class="form-control" name="mata_air">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Keberadaan Tanah Timbul:</label>
                  <select class="form-control" name="keberadaan_tanah_timbul">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Tiang Pancang di atas air:</label>
                  <select class="form-control" name="pancang_diatas_air">
                    <option value="-">-</option>
                    <option value="Beton">Beton</option>
                    <option value="Besi">Besi</option>
                    <option value="Kayu">Kayu</option>
                    <option value="Bambu">Bambu</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Terletak di pulau kecil:</label>
                  <select class="form-control" name="terletak_dipulau_kecil">
                    <option value="Tidak">Tidak</option>
                    <option value="Ya">Ya</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Nama Pulau (khusus pulau kecil):</label>
                  <input type="text" class="form-control" name="nama_pulau" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Luas Pulau (khusus pulau kecil)</label>
                  <input type="text" name="luas_pulau" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Tingkat kekerasan tanah timbul:</label>
                  <input type="text" class="form-control" name="kekerasan_tanah_timbul" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Tingkat intrusi air laut</label>
                  <input type="text" name="intrusi_air_laut" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jenis tanah timbul:</label>
                  <input type="text" class="form-control" name="jenis_tanah_timbul" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Pola pasang surut</label>
                  <input type="text" name="pola_pasang_surut" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Arus dan gelombang laut:</label>
                  <input type="text" class="form-control" name="arus_gel_laut" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Keberadaan mangrove/padang lamun/terumbu karang:</label>
                  <input type="text" name="keberadaan_mangrove_dll" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jumlah penduduk:</label>
                  <input type="text" class="form-control" name="jumlah_penduduk" placeholder="misal 123 KK atau 1.000 jiwa, dll" value="<?php echo $jumlah_penduduk ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Kepadatan penduduk (jiwa/km2):</label>
                  <input type="text" name="kepadatan_penduduk" class="form-control" placeholder="isi angko se, misalnyo 1000, 2000, dsb." value="<?php echo $kepadatan_penduduk ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Rata-rata kepemilikan tanah (Ha/KK):</label>
                  <input type="text" name="rerata_kepemilikan_tanah" class="form-control" placeholder="isi angko se, misalnyo 1, 2, 3 dst." value="<?php echo $rerata_kepemilikan_tanah ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Kepadatan Agraris (jiwa/Ha):</label>
                  <input type="text" name="kepadatan_agraris" class="form-control" placeholder="isi angko se, misalnyo 100, 200, dsb." value="<?php echo $kepadatan_agraris ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Mayoritas mata pencaharian penduduk:</label>
                  <input type="text" name="mayoritas_mata_pencaharian" class="form-control" placeholder="misal: petani, pedagang, dll.." value="<?php echo $mayoritas_mata_pencaharian ?>">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Rencana penggunaan tanah:</label>
                  <input type="text" class="form-control" name="rencana_penggunaan_tanah" placeholder="contoh: pabrik kelapa sawit, rumah tempat tinggal" value="<?php echo $rencana_penggunaan_tanah ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jaringan jalan:</label>
                  <select class="form-control" name="jaringan_jalan">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jaringan listrik:</label>
                  <select class="form-control" name="jaringan_listrik">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jaringan air minum:</label>
                  <select class="form-control" name="air_minum">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Saluran air/drainase:</label>
                  <select class="form-control" name="saluran_drainase">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Saluran pipa minyak:</label>
                  <select class="form-control" name="pipa_minyak">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Saluran gas:</label>
                  <select class="form-control" name="gas">
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Longsor:</label>
                  <input type="text" class="form-control" name="longsor" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Banjir rob:</label>
                  <input type="text" name="banjir_rob" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Banjir:</label>
                  <input type="text" class="form-control" name="banjir" value="-">
                </div>
                <div class="col-md-6 form-group">
                  <label>Risiko bencana lainnya:</label>
                  <input type="text" name="bencana_lainnya" class="form-control" value="-">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <label>Keterangan lain yang dianggap perlu (lokasi tanah yang dimohon):</label>
                  <textarea class="form-control" name="keterangan_lain_lokasi">-</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Utara (penggunaan tanah):</label>
                  <input type="text" class="form-control" name="utara" value="<?php echo $utara ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Timur (penggunaan tanah):</label>
                  <input type="text" name="timur" class="form-control" value="<?php echo $timur ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Selatan (penggunaan tanah):</label>
                  <input type="text" class="form-control" name="selatan" value="<?php echo $selatan ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Barat (penggunaan tanah):</label>
                  <input type="text" name="barat" class="form-control" value="<?php echo $barat ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jarak ke jalan penghubung: ±</label>
                  <input type="text" class="form-control" name="jarak_jalan_penghubung" placeholder="misal ± 500 meter dll" value="<?php echo $jarak_jalan_penghubung ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Jarak ke jalan arteri utama: ±</label>
                  <input type="text" name="jarak_jalan_arteri" class="form-control" placeholder="misal ± 1,2 km dll" value="<?php echo $jarak_jalan_arteri ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Gambaran umum penguasaan tanah sekitar:</label>
                  <textarea class="form-control" placeholder=".." name="penguasaan_tanah_sekitar"><?php echo $penguasaan_tanah_sekitar ?></textarea>
                </div>
                <div class="col-md-6 form-group">
                  <label>Infrastruktur yang berkaitan dengan kegiatan pemohon:</label>
                  <textarea class="form-control" placeholder=".." name="infrastruktur_berkaitan">-</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Jaringan jalan, listrik, air, saluran, dll:</label>
                  <textarea class="form-control" placeholder=".." name="jaringan_lainnya">-</textarea>
                </div>
                <div class="col-md-6 form-group">
                  <label>Keterangan lain yang dianggap perlu (sekitar lokasi):</label>
                  <textarea class="form-control" placeholder=".." name="keterangan_lain_sekitar">-</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>NIB (Nomor Induk Berusaha):</label>
                  <input type="text" class="form-control" name="nib" placeholder="untuk pelaku usaha.." value="<?php echo $nib ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Kode dan nama KBLI:</label>
                  <input type="text" name="kbli" class="form-control" placeholder="Klasifikasi Baku Lapangan Usaha Indonesia" value="<?php echo $kbli ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>No. Berita Acara Pemeriksaan Lapang:</label>
                  <input type="text" class="form-control" name="no_ba_lapang" placeholder=".." value="<?php echo $no_ba_lapang ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Tanggal Berita Acara Pemeriksaan Lapang:</label>
                  <input type="text" name="tanggal_ba_lapang" class="form-control" value="<?php echo $tanggal_ba_lapang ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Berita Acara Pemeriksaan Lapang
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">
                  <i class="fa fa-save"></i>
                  Print Format Dokumentasi Pemeriksaan Lapang
                  <i class="fa fa-print"></i>
                </button>
                <div style="padding-bottom: 15px;"></div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>No. Surat Tugas Pengolahan Data:</label>
                  <input type="text" class="form-control" name="no_st_pengolahan_data" placeholder=".." value="<?php echo $no_st_pengolahan_data ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Tanggal Surat Tugas Pengolahan Data:</label>
                  <input type="text" name="tanggal_st_pengolahan_data" class="form-control" value="<?php echo $tanggal_st_pengolahan_data ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Surat Tugas Pengolahan Data</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Berita Acara Rapat Pengolahan Data</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Daftar Hadir Rapat Pengolahan Data</button>
                <div style="padding-bottom: 15px;"></div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>No. Risalah:</label>
                  <input type="text" class="form-control" name="no_risalah" placeholder=".." value="<?php echo $no_risalah ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Tanggal Risalah:</label>
                  <input type="text" name="tanggal_risalah" class="form-control" value="<?php echo $tanggal_risalah ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Undangan Rapat Perumusan Risalah</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Berita Rapat Perumusah Risalah</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Daftar Hadir Rapat Perumusah Risalah</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Daftar Hadir Rapat Perumusah Risalah</button>
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Risalah PTP</button>
                <div style="padding-bottom: 15px;"></div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>No. Surat Keluar untuk Pertek:</label>
                  <input type="text" class="form-control" name="no_surat_pertek" placeholder=".." value="<?php echo $no_surat_pertek ?>">
                </div>
                <div class="col-md-6 form-group">
                  <label>Tanggal Surat:</label>
                  <input type="text" name="tanggal_surat_pertek" class="form-control" value="<?php echo $tanggal_surat_pertek ?>">
                </div>
              </div>
              <div class="row">
                <div style="padding-top: 5px;"></div>
                <button type="button" class="btn btn-secondary btn-lg btn-block btn-sm">Print Surat Keluar untuk Pertek</button>
                <div style="padding-bottom: 15px;"></div>
              </div>
              <div class="text-center"><button type="submit">Simpan Data Berkas</button></div>
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