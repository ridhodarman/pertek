<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/head.php';?>
</head>

<body>
  <?php include 'inc/header.php';?>

  <main id="main">
    <?php
    include 'inc/koneksi.php';
    $id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['berkas']), ENT_QUOTES)));

    $query = "SELECT * FROM berkas_pertek WHERE id=?";
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
    }
    ?>

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
          <div class="breadcrumb-hero">
            <h2>Edit Format</h2>
            <p>Pertimbangan Teknis Pertanahan Kabupaten Agam</p>
          </div>
        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Edit Format</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left">
          <div class="row">
            <div class="col-md-6 form-group">
              <table class="table">
                <tr>
                  <td>Nomor SK</td>
                  <td>:</td>
                  <td>xxxxxxxxxxxx</td>
                </tr>
                <tr>
                <td>Tanggal SK</td>
                <td>:</td>
                <td>xxxxxxxx</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 form-group">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSK">
                Edit Data SK
              </button>
            </div>

              <!-- Modal -->
              <div class="modal fade" id="modalSK" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="act/tambah-format.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    <div class="modal-body">
                          <div>
                            <label>Nomor SK:</label>
                            <input type="text" name="no_sk" class="form-control" id="no_sk" placeholder="nomor SK Pertek">
                          </div>
                          <div class="mt-3">
                            <label>Tanggal SK:</label>
                            <input type="date" class="form-control" name="tanggal_sk">
                          </div>
                          <div class="mt-3">
                            <label>File SK (pdf):</label>
                            <input type="file" class="form-control" name="file_sk">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button name="baru" type="submit" class="btn btn-primary">Simpan Perubahan Data</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>

            <form action="act/tambah-format.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">

            <div>
              <label>Format Surat Undangan Rapat Persiapan:</label>
              <button type="button" class="btn-sm btn-secondary">Unduh Format</button>
              <button type="button" class="btn-sm btn-primary">Ganti Format</button>
            </div>
              <div class="row mt-5">
                <div class="col-md-4 form-group">
                <label>Format Surat Undangan Rapat Persiapan:</label>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-info">Info</button>
                  <input type="file" class="form-control" name="surat_undangan_rapat_persiapan">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Notulensi Rapat Persiapan:</label>
                  <input type="file" class="form-control" name="notulensi_rapat_persiapan">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Daftar Hadir Rapat Persiapan:</label>
                  <input type="file" class="form-control" name="daftar_hadir_rapat_persiapan ">
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-6 form-group">
                <label>Format Surat Surat Tugas Pemeriksaan Lapang:</label>
                  <input type="file" class="form-control" name="st_pl">
                </div>
                <div class="col-md-6 form-group">
                <label>Format Berita Acara Pemeriksaan Lapang:</label>
                  <input type="file" class="form-control" name="ba_pl">
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-4 form-group">
                <label>Format Surat Tugas Pengolahan Data:</label>
                  <input type="file" class="form-control" name="st_pengolahan_data">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Berita Acara Pengolahan Data:</label>
                  <input type="file" class="form-control" name="ba_pengolahan_data">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Daftar Hadir Pengolahan Data:</label>
                  <input type="file" class="form-control" name="daftar_hadir_pengolahan_data">
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-4 form-group">
                <label>Format Surat Undangan Pembahasan PTP:</label>
                  <input type="file" class="form-control" name="surat_undangan_pembahasan_ptp">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Berita Acara Pembahasan PTP:</label>
                  <input type="file" class="form-control" name="ba_pembahasan_ptp">
                </div>
                <div class="col-md-4 form-group">
                <label>Format Daftar Rapat Pembahasan PTP:</label>
                  <input type="file" class="form-control" name="daftar_hadir_pembahasan_ptp">
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-6 form-group">
                <label>Format Risalah PTP:</label>
                  <input type="file" class="form-control" name="risalah">
                </div>
                <div class="col-md-6 form-group">
                <label>Format Surat Keluar PTP:</label>
                  <input type="file" class="form-control" name="surat_ptp">
                </div>
              </div>

              <div class="row mt-5">
                <div style="padding-top: 15px;"></div>
                <!-- <div style="padding-top: 5px;"></div> -->
                <button name="baru" type="submit" class="btn btn-success btn-lg btn-block">
                  <i class="fa fa-save"></i>
                  Simpan Format
                </button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'inc/footer.php';?>

</body>

</html>