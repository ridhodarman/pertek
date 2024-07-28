<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'inc/head.php';?>
</head>

<body>
  <?php
    include 'inc/koneksi.php';
    $id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_GET['format']), ENT_QUOTES)));

    $query = "SELECT * FROM format_pertek WHERE id=?";
    $sql = $koneksi->prepare($query);
    $sql->bind_param("i", $id);
    $sql->execute();
    $data = $sql->get_result();
    while ($row = $data->fetch_assoc()) {
      $no_sk = $row['no_sk'];
      $tanggal_sk = $row['tanggal_sk'];
      $file_sk = $row['file_sk'];
      $surat_undangan_rapat_persiapan = $row['surat_undangan_rapat_persiapan'];
      $daftar_hadir_rapat_persiapan = $row['daftar_hadir_rapat_persiapan'];
    }

    ?>

  <?php include 'inc/header.php';?>

  <script type="text/javascript">
    <?php
      if(isset($_GET['alert'])) {
        $pesan = $_GET['alert'];
        echo '
          Swal.fire({
          title: "Success",
          text: "'.$pesan.'",
          icon: "success"
        });
        ';
      }

      if(isset($_GET['gagal'])) {
        $pesan = $_GET['gagal'];
        echo '
          Swal.fire({
          title: "Gagal",
          text: "'.$pesan.'",
          icon: "error"
        });
        ';
      }
    ?>
  </script>

  <main id="main">

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
                  <td><?php echo $no_sk; ?></td>
                </tr>
                <tr>
                <td>Tanggal SK</td>
                <td>:</td>
                <td><?php echo date("d-M-Y", strtotime($tanggal_sk)); ?></td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 form-group">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSK">
                Edit Data SK
              </button>
            </div>
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
                    <form action="act/format/update-no-tgl-sk.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    <div class="modal-body">
                          <input type="hidden" name="id" value="<?php echo (base64_encode($id)); ?>" />
                          <div>
                            <label>Nomor SK:</label>
                            <input type="text" name="no_sk" class="form-control" id="no_sk" placeholder="nomor SK Pertek" value="<?php echo $no_sk; ?>">
                          </div>
                          <div class="mt-3">
                            <label>Tanggal SK:</label>
                            <input type="date" class="form-control" name="tanggal_sk" value="<?php echo $tanggal_sk; ?>">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button name="kirim" type="submit" class="btn btn-primary">Simpan Perubahan Data</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>


            <div class="col-md-12 form-group"
              <label> File SK </label>
              <?php
                if ($file_sk) {
                  ?> <a target="_blank" href="assets/format/<?php echo $file_sk; ?>"><button type="button" class="btn-sm btn-secondary">Unduh SK</button></a><?php
                }
                else {
                  ?> <font color="red">file SK belum di-upload</font> <?php
                }
              ?>
              <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#modal-fileSK">Upload File SK</button>
              <!-- Modal -->
              <div class="modal fade" id="modal-fileSK" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Upload SK</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="act/format/update-SK.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    <div class="modal-body">
                          <div>
                            <input type="hidden" name="id" value="<?php echo (base64_encode($id)); ?>" />
                            <input type="hidden" name="no_sk" value="<?php echo $no_sk; ?>" />
                            <label>File SK</label>
                            <p><small>upload dalam format *.pdf</small>
                              <br/><small>file yang lama akan ditimpa</small>
                            </p>
                            <input type="file" class="form-control" name="file_sk"/>
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button name="kirim" type="submit" class="btn btn-primary">Simpan SK</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-md-12 form-group"
              <label>Format Surat Undangan Rapat Persiapan:</label>
              <?php
                if ($surat_undangan_rapat_persiapan) {
                  ?> <a href="assets/format/<?php echo $surat_undangan_rapat_persiapan; ?>"><button type="button" class="btn-sm btn-secondary">Unduh Format</button></a><?php
                }
                else {
                  ?> <font color="red">format belum di-upload</font> <?php
                }
              ?>
              <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#modalSURP">Upload Format Baru</button>
              <!-- Modal -->
              <div class="modal fade" id="modalSURP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Upload Format</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="act/format/update-surp.php" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    <div class="modal-body">
                          <div>
                            <input type="hidden" name="id" value="<?php echo (base64_encode($id)); ?>" />
                            <input type="hidden" name="no_sk" value="<?php echo $no_sk; ?>" />
                            <label>Format Surat Undangan Rapat Persiapan</label>
                            <p><small>upload dalam format *.rtf</small>
                              <br/><small>file yang lama akan ditimpa</small>
                            </p>
                            <input type="file" class="form-control" name="file_surp">
                          </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button name="kirim" type="submit" class="btn btn-primary">Simpan Format</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>



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