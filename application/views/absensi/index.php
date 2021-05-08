<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>
    <?php $id_profil = $this->session->userdata('id_profil'); ?>

    <?php if ($id_profil != '3') : ?>
    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">
        <div class="row">
            <div class="col-md-12">
                <a class="mb-3 btn btn-outline-primary" href="<?= base_url('absensi/tambah'); ?>" role="button">
                    Tambah Daftar Hadir <i class="fa fa-plus"></i>
                </a>
                <?php $jumlah_absensi = count($absensi); ?>
                <button type="button" class="btn btn-primary mb-3">Total Data : <?= $jumlah_absensi; ?></button>    
            </div>

        </div>
    </div>
    
    <?php $jml_absensi = count($absensi); ?>
    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">
        <div class="col-md-12">
            <h4 class="text-center">Urutkan Berdasarkan</h4>
            <form class="form-inline">
            
              <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bulan</label>
              <select class="form-control" id="bulan" name="bulan">
                  <option value="">-- Pilih Bulan --</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
              </select>

              <label class="my-1 mr-sm-2 ml-3" for="inlineFormCustomSelectPref">Tahun</label>
              <select class="form-control" id="tahun" name="tahun">
                  <option value="">-- Pilih Tahun --</option>
                  <?php $tahun = date('Y') ?>
                  <?php for ($i=2015; $i <= $tahun; $i++) : ?>
                  <option value="<?= $i; ?>"><?= $i; ?></option>
                  <?php endfor; ?>
              </select>

              <label class="my-1 mr-2 ml-3" for="inlineFormCustomSelectPref">Kelas</label>
              <select class="form-control" id="kelas_jurusan" name="kelas_jurusan">
                  <option value="">-- Pilih Kelas --</option>
                  <?php $kelas= $this->Default_m->getAll('kelas', 'kelas_jurusan')->result();
                  foreach ($kelas as $k) : ?>
                  <?php $kelaslengkap = $k->nama_kelas.' '.$k->kelas_jurusan.' '. $k->kode_jurusan; ?>
                  <option value="<?= $k->id_kelas; ?>"><?= $kelaslengkap; ?></option>
                  <?php endforeach; ?>
              </select>


              <button type="submit" class="btn btn-success my-1 ml-3">Urutkan</button>
            </form>
                    </div>

        <?php 
            if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')  && (isset($_GET['kelas_jurusan']) && $_GET['kelas_jurusan'] != '')){
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $kejur = $_GET['kelas_jurusan'] ;
              $kelas= $this->Default_m->getWhereOne('kelas', 'kelas.id_kelas', $kejur)->row();
              $kelaslengkap = $kelas->nama_kelas.' '.$kelas->kelas_jurusan.' '. $kelas->kode_jurusan;
                $bulantahun = $bulan.$tahun;
                $kelas_jurusan = $kelaslengkap;
            } else {
                $bulan = (isset($_GET['bulan']) && $_GET['bulan'] != '');
                $tahun = (isset($_GET['tahun']) && $_GET['tahun'] != '');
                $bulantahun = $bulan.$tahun;
                $kelas_jurusan = (isset($_GET['kelas_jurusan']) && $_GET['kelas_jurusan'] != '');
            }
        ?>


        <div class="col-md-12">
            <div class="alert alert-info">
                Menampilkan data pada bulan: <span class="font-weight-bold"><?= $bulan; ?></span>. <br>Tahun: <span class="font-weight-bold"><?= $tahun; ?></span>. <br>Kelas: <span class="font-weight-bold"><?= $kelas_jurusan; ?></span>
            </div>
            <div class="table-responsive">
                <?php 
                if ($jml_absensi > 0 ) : ?>
                <table class="table table-hover table-bordered text-center w-100" id="tableExport">
                    <thead class="bg-primary text-white ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIS - Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Izin</th>
                            <th scope="col">Sakit</th>
                            <th scope="col">Tidak Hadir</th>
                            <?php if ($id_profil == '1') : ?>
                            <th scope="col">Action</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <?php $i = 1; ?>
                        <?php foreach ($absensi as $u) : ?>
                        <!--<?php $kelas = $this->Default_m->getAll('kelas', $whereabsensi['id_kelas'])->row(); ?>-->
                            <tr>
                                <td scope="row"><?= $i; ?></td>
                                <td class="text-left"><?= $u->nis_siswa.' - '.$u->nama_siswa; ?></td>
                                <td><?= $u->nama_kelas. ' '. $u->kelas_jurusan . ' '. $u->kode_jurusan;?></td>
                                <td><?= $u->izin; ?></td>
                                <td><?= $u->sakit; ?></td>
                                <td><?= $u->alfa; ?></td>
                                <?php if ($id_profil == '1') : ?>
                                <td class="text-nowrap">
                                    <a href="<?= base_url('absensi/ubah/' . $u->id_absensi); ?>" class="btn btn-outline-warning">
                                        <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Ubah"></i>
                                    </a>
                                    <a href="<?= base_url('absensi/hapus/' . $u->id_absensi); ?>" class="btn btn-outline-danger button-delete">
                                        <i class="fas fa-trash-alt pop" data-toggle="popover" data-placement="bottom" data-content="Hapus"></i>
                                    </a>
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Tidak ada data daftar hadir
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <?php if ($id_profil == '3') : ?>
    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">
      <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-hover table-bordered text-center w-100" id="myTable">
                  <thead class="bg-primary text-white ">
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Bulan - Tahun</th>
                          <th scope="col">Izin</th>
                          <th scope="col">Sakit</th>
                          <th scope="col">Tidak Hadir</th>
                      </tr>
                  </thead>
                  <tbody class="text-black">
                      <?php $i = 1; ?>
                      <?php foreach ($whereabsensi as $u) : ?>
                      <?php $subbulan = substr($u->bulantahun, 0,-4);
                      $subtahun = substr($u->bulantahun, -4);
                      ?>
                          <tr>
                              <td scope="row"><?= $i; ?></td>
                              <td class="text-left">
                                <?php if ($subbulan == 1) : echo('Januari'); ?>
                                <?php elseif ($subbulan == 2) : echo('Februari'); ?>
                                <?php elseif ($subbulan == 3) : echo('Maret'); ?>
                                <?php elseif ($subbulan == 4) : echo('April'); ?>
                                <?php elseif ($subbulan == 5) : echo('Mei'); ?>
                                <?php elseif ($subbulan == 6) : echo('Juni'); ?>
                                <?php elseif ($subbulan == 7) : echo('Juli'); ?>
                                <?php elseif ($subbulan == 8) : echo('Agustus'); ?>
                                <?php elseif ($subbulan == 9) : echo('September'); ?>
                                <?php elseif ($subbulan == 10) : echo('Oktober'); ?>
                                <?php elseif ($subbulan == 11) : echo('November'); ?>
                                <?php elseif ($subbulan == 12) : echo('Desember'); ?>
                                <?php endif; ?>
                                <?= ' '.$subtahun; ?></td>
                              <td><?= $u->izin; ?></td>
                              <td><?= $u->sakit; ?></td>
                              <td><?= $u->alfa; ?></td>
                          </tr>
                          <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
    </div>
     <?php endif; ?>
    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script