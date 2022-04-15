<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="pengumuman">
  <div class="container">
    <div class="text-center">
      <img src="../assets/img/logo.png" alt="Logo" width="80">
      <h1 class="h4">Sistem Kelulusan Online</h1>
      <h2 class="h5">UPT SMA Negeri 29 Banyuasin</h2>
    </div>
    <div class="row p-3 border rounded-3 bg-light">
      <h2 class="pb-4"><i class="bi bi-card-heading"></i> Data Kelulusan Peserta Didik TP. 2021/2022</h2>
      <div class="col-md-3">
        <img class="d-block mb-4 img-thumbnail" src="../assets/img/siswa/<?php #echo $_SESSION['foto']; 
                                                                          ?>">
        <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </div>
      <div class="col-md-9 mb-4">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <tbody>
              <?php foreach ($kelulusan as $k) : ?>
                <tr>
                  <td>Nama Peserta</td>
                  <td>:</td>
                  <td><?= $k['nama_pd']; ?></td>
                </tr>
              <?php endforeach; ?>
              <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php #echo $_SESSION['username']; 
                    ?></td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php #echo $_SESSION['ttl']; 
                    ?></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php #echo $_SESSION['jk']; 
                    ?></td>
              </tr>
              <tr>
                <td>Kelas / Program</td>
                <td>:</td>
                <td>XII <?php #echo $_SESSION['kelas']; 
                        ?> / <?php #echo $_SESSION['prodi']; 
                              ?>Matematika dan Ilmu Pengetahuan Alam</td>
              </tr>
              <!-- </tbody>
            </table>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                    <td colspan="3" class="h5">Daftar Nilai Kelompok Umum</td>
                </tr>
                <tr>
                  <th scope="col">Matematika</th>
                  <th scope="col">B. Indonesia</th>
                  <th scope="col">B. Inggris</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>78.00</td>
                  <td>80.00</td>
                  <td>85.70</td>
                </tr>
                <tr>
                  <td>90.56</td>
                  <td>80.70</td>
                  <td>79.00</td>
                </tr>
                <tr>
                  <td>89.90</td>
                  <td>88.00</td>
                  <td>82.98</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <td colspan="3" class="h5">Daftar Nilai Kelompok Peminatan</td>
                </tr>
                <tr>
                  <th scope="col">Fisika</th>
                  <th scope="col">Kimia</th>
                  <th scope="col">Biologi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>78.00</td>
                  <td>79.94</td>
                  <td>89.00</td>
                </tr>
                <tr>
                  <td>80.88</td>
                  <td>79.00</td>
                  <td>85.87</td>
                </tr>
                <tr>
                  <td>85.00</td>
                  <td>84.76</td>
                  <td>85.00</td>
                </tr>
              </tbody>
            </table>
            <table class="table table-striped table-hover">
              <tbody> -->
              <tr class="h6">
                <td>Nilai Rata-rata Ujian</td>
                <td>:</td>
                <td><?php #echo $_SESSION['nilai_rata_rata']; 
                    ?></td>
              </tr>
              <tr class="h6">
                <td>Keterangan</td>
                <td>:</td>
                <td class="text-success"><?php #echo $_SESSION['keterangan']; 
                                          ?> </td>
              </tr>
              <!-- </tbody> -->
          </table>
        </div> <!-- /end of .table-responsive -->
      </div> <!-- /end of .col-md-9 -->
      <div class="pt-2 text-center">
        <a href="../assets/downloads/SKL/<?php #echo $_SESSION['download']; 
                                          ?>" download class="btn btn-primary btn-md"><i class="bi bi-download"></i> Download Surat Keterangan Kelulusan</a>
      </div>
    </div> <!-- /end of .row -->
  </div> <!-- /End of .container -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,96L6.7,112C13.3,128,27,160,40,181.3C53.3,203,67,213,80,186.7C93.3,160,107,96,120,80C133.3,64,147,96,160,96C173.3,96,187,64,200,96C213.3,128,227,224,240,245.3C253.3,267,267,213,280,165.3C293.3,117,307,75,320,85.3C333.3,96,347,160,360,170.7C373.3,181,387,139,400,128C413.3,117,427,139,440,160C453.3,181,467,203,480,218.7C493.3,235,507,245,520,234.7C533.3,224,547,192,560,165.3C573.3,139,587,117,600,133.3C613.3,149,627,203,640,218.7C653.3,235,667,213,680,218.7C693.3,224,707,256,720,256C733.3,256,747,224,760,186.7C773.3,149,787,107,800,122.7C813.3,139,827,213,840,202.7C853.3,192,867,96,880,48C893.3,0,907,0,920,5.3C933.3,11,947,21,960,64C973.3,107,987,181,1000,176C1013.3,171,1027,85,1040,69.3C1053.3,53,1067,107,1080,112C1093.3,117,1107,75,1120,64C1133.3,53,1147,75,1160,80C1173.3,85,1187,75,1200,90.7C1213.3,107,1227,149,1240,144C1253.3,139,1267,85,1280,85.3C1293.3,85,1307,139,1320,165.3C1333.3,192,1347,192,1360,213.3C1373.3,235,1387,277,1400,245.3C1413.3,213,1427,107,1433,53.3L1440,0L1440,320L1433.3,320C1426.7,320,1413,320,1400,320C1386.7,320,1373,320,1360,320C1346.7,320,1333,320,1320,320C1306.7,320,1293,320,1280,320C1266.7,320,1253,320,1240,320C1226.7,320,1213,320,1200,320C1186.7,320,1173,320,1160,320C1146.7,320,1133,320,1120,320C1106.7,320,1093,320,1080,320C1066.7,320,1053,320,1040,320C1026.7,320,1013,320,1000,320C986.7,320,973,320,960,320C946.7,320,933,320,920,320C906.7,320,893,320,880,320C866.7,320,853,320,840,320C826.7,320,813,320,800,320C786.7,320,773,320,760,320C746.7,320,733,320,720,320C706.7,320,693,320,680,320C666.7,320,653,320,640,320C626.7,320,613,320,600,320C586.7,320,573,320,560,320C546.7,320,533,320,520,320C506.7,320,493,320,480,320C466.7,320,453,320,440,320C426.7,320,413,320,400,320C386.7,320,373,320,360,320C346.7,320,333,320,320,320C306.7,320,293,320,280,320C266.7,320,253,320,240,320C226.7,320,213,320,200,320C186.7,320,173,320,160,320C146.7,320,133,320,120,320C106.7,320,93,320,80,320C66.7,320,53,320,40,320C26.7,320,13,320,7,320L0,320Z"></path>
  </svg>
</section>
<hr>
<!-- End of Main -->

<!-- Modal -->
<!-- Full screen modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel"><img class="mx-auto" src="../assets/img/Logo.png" width="30" height="40" alt="Icon SMAN 29 Banyuasin"> UPT SMAN 29 Banyuasin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-5 mt-2 text-center">
          <h4><ins>Pengumuman Kelulusan Online</ins></h4>
          <span>No. : 421.3/420/UPTSMAN29BA/V/2021</span>
        </div>
        <p style="text-align: justify">Yang bertanda tangan dibawah ini, Kepala UPT SMA Negeri 29 Banyuasin Kecamatan Sumber Marga Telang, Kabupaten Banyuasin Provinsi Sumatera Selatan menerangkan bahwa :</p>
        <div class="table-responsive mt-2">
          <table class="table table-borderless py-2">
            <tbody>
              <tr>
                <td>Nama</td>
                <td>: <?php #echo $_SESSION['nama_pd']; 
                      ?></td>
              </tr>
              <tr>
                <td>NISN</td>
                <td>: <?php #echo $_SESSION['username']; 
                      ?></td>
              </tr>
              <tr>
                <td>T.T.L.</td>
                <td>: <?php #echo $_SESSION['ttl']; 
                      ?></td>
              </tr>
              <tr>
                <td>Nama Orang Tua</td>
                <td>: <?php #echo $_SESSION['nama_ortu']; 
                      ?></td>
              </tr>
              <tr>
                <td>Kelas / Program</td>
                <td>: <?php #echo $_SESSION['kelas']; 
                      ?> / <?php #echo $_SESSION['prodi']; 
                            ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="text-center mb-5">
          <P class="my-3">Dinyatakan :</p>
          <h2 class="mb-3">LULUS / <del>TIDAK LULUS</del></h2>
          <p>dengan Nilai Rata-rata : <?php #echo $_SESSION['nilai_rata_rata']; 
                                      ?></p>
        </div>
        <p style="text-align: justify">dari satuan pendidikan berdasarkan kriteria kelulusan dan rapat dewan guru UPT SMA Negeri 29 Banyuasin pada tanggal 29 April 2021 tahun pelajaran 2020/2021.</p>
        <p style="text-align: justify">Demikian Keterangan Pengumuman Kelulusan ini, agar dapat dipergunakan dengan sebagaimana mestinya.</p>
        <div class="text-center mt-5">
          <img src="../assets/img/ttd-el-nobg.png" width="300" height="150">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal"><i class="bi bi-eye"></i> Lihat Data Kelulusan</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal -->
<?= $this->endSection(); ?>