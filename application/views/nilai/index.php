<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <?php if ($user->id_profil != 3) : ?>
    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">
            <?php $jumlah_nilai = count($nilai); ?>
            <div class="col-md-12">
                <a class="mb-3 btn btn-outline-primary" href="<?= base_url('nilai/tambah'); ?>" role="button">
                    Tambah Nilai <i class="fa fa-plus"></i>
                </a>
                <?php if ($user->id_profil == 1) : ?>
                <button type="button" class="btn btn-primary mb-3">Total Data : <?= $jumlah_nilai; ?></button> 
                <?php endif; ?>
            </div>
    </div>
    <?php endif; ?>


    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">
        <div class="row">
        <?php if ($user->id_profil == 1) : ?>
        <div class="col-md-12 mb-3">
            <h4 class="text-center">Urutkan Berdasarkan</h4>
            <form class="form-inline">

              <label class="my-1 mr-sm-2" for="inlineFormCustomSelectPref">Tahun</label>
              <select class="form-control" id="tahun" name="tahun">
                  <option value="">-- Pilih Tahun --</option>
                  <?php $tahun = date('Y') ?>
                  <?php for ($i=2015; $i <= $tahun; $i++) : ?>
                  <option value="<?= $i; ?>"><?= $i; ?></option>
                  <?php endfor; ?>
              </select>

              <label class="my-1 mr-2 ml-3" for="inlineFormCustomSelectPref">Semester</label>
              <select class="form-control" id="semester" name="semester">
                  <option value="">-- Pilih Semester --</option>
                  <option value="Ganjil">Ganjil</option>
                  <option value="Genap">Genap</option>
              </select>

              <button type="submit" class="btn btn-success my-1 ml-3">Urutkan</button>
            </form>
        </div>
        <?php endif; ?>

        <?php 
            if ((isset($_GET['tahun']) && $_GET['tahun'] != '')  && (isset($_GET['semester']) && $_GET['semester'] != '')){
                $tahun = $_GET['tahun'];
                $semester = $_GET['semester'];
            } else {
                $tahun = (isset($_GET['tahun']) && $_GET['tahun'] != '');
                $semester = (isset($_GET['semester']) && $_GET['semester'] != '');
            }
        ?>


        <?php if ($user->id_profil == 1) : ?>
        <div class="col-md-12">
             <div class="alert alert-info">
                Menampilkan data pada Tahun: <span class="font-weight-bold"><?= $tahun; ?></span>. <br>Semester: <span class="font-weight-bold"><?= $semester; ?></span>
            </div>

            <div class="table-responsive">
                <?php if($jumlah_nilai == null) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Tidak ada data
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php else: ?>
                <table class="table table-hover table-bordered text-center w-100" id="tableExport">
                    <thead class="bg-primary text-white ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">PTS</th>
                            <th scope="col">PAS</th>
                            <th scope="col">NILAI AKHIR</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <?php $i = 1; ?>
                        <?php foreach ($nilai as $u) : ?>
                        <?php $total = ($u->tgs_1 + $u->tgs_2 + $u->tgs_3 + $u->uas + $u->uts) / 5;  ?>
                            <tr>
                                <td scope="row"><?= $i; ?></td>
                                <td class="text-left"><?= $u->nis_siswa.' - '.$u->nama_siswa; ?></td>
                                <td class="text-left"><?= $u->kelas; ?></td>
                                <td class="text-left"><?php if ($u->semester == 'Ganjil') : ?>
                                    <span class="badge badge-success">Ganjil</span>
                                <?php else : ?>
                                    <span class="badge badge-primary">Genap</span>
                                <?php endif; ?>
                                </td>
                                <td class="text-left"><?= $u->nama_mapel; ?></td>
                                <td><?= $u->tgs_1; ?></td>
                                <td><?= $u->tgs_2; ?></td>
                                <td><?= $u->tgs_3; ?></td>
                                <td><?= $u->uts; ?></td>
                                <td><?= $u->uas; ?></td>
                                <td><?php if ($total <= '72' ) : ?>
                                    <span class="text-danger"><?= $total; ?></span></td>
                                <?php else : ?>
                                    <span><?= $total; ?></span></td>
                                <?php endif; ?>
                                <td class="text-nowrap">
                                    <a href="<?= base_url('nilai/ubah/' . $u->id_nilai); ?>" class="btn btn-outline-warning">
                                        <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Ubah"></i>
                                    </a>
                                    <a href="<?= base_url('nilai/hapus/' . $u->id_nilai); ?>" class="btn btn-outline-danger button-delete">
                                        <i class="fas fa-trash-alt pop" data-toggle="popover" data-placement="bottom" data-content="Hapus"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endif; ?>
            </div>
        </div>
        
        <?php elseif ($user->id_profil != 1) : ?>
        <div class="col-md-12">
            <div class="table-responsive">
                
                <table class="table table-hover table-bordered text-center w-100" 
                <?php if($user->id_profil == 2) : ?> 
                id="tableExport"
                <?php else : ?> id="myTable"
                <?php endif; ?>>
                    <thead class="bg-primary text-white ">
                        <tr>
                            <th scope="col">#</th>
                            <?php if($user->id_profil == 2) : ?>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Kelas</th>
                            <?php endif; ?>
                            <th scope="col">Semester</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">PTS</th>
                            <th scope="col">PAS</th>
                            <th scope="col">NILAI AKHIR</th>
                            <?php if($user->id_profil == 2) : ?>
                            <th scope="col">ACTION</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                        <?php $i = 1; ?>
                        <?php foreach ($whereNilai as $wn) : ?>
                        <?php $total = ($wn->tgs_1 + $wn->tgs_2 + $wn->tgs_3 + $wn->uas + $wn->uts) / 5;  ?>
                            <tr>
                                <td scope="row"><?= $i; ?></td>
                                <?php if($user->id_profil == 2) : ?>
                                <td><?= $wn->nis_siswa .' - '.$wn->nama_siswa; ?></td>
                                <td><?= $wn->kelas; ?></td>
                                <?php endif; ?>
                                <td class="text-center">
                                    <?php if ($wn->semester == 'Ganjil') : ?>
                                    <span class="badge badge-success">GANJIL</span>
                                <?php else : ?>
                                    <span class="badge badge-primary">GENAP</span>
                                <?php endif; ?>
                                </td>
                                <td class="text-left"><?= $wn->nama_mapel; ?></td>
                                <td><?= $wn->tgs_1; ?></td>
                                <td><?= $wn->tgs_2; ?></td>
                                <td><?= $wn->tgs_3; ?></td>
                                <td><?= $wn->uts; ?></td>
                                <td><?= $wn->uas; ?></td>
                                <td><?php if ($total <= '72' ) : ?>
                                    <span class="text-danger"><?= $total; ?></span></td>
                                <?php else : ?>
                                    <span><?= $total; ?></span></td>
                                <?php endif; ?>
                                
                                <?php if($user->id_profil == 2) : ?>
                                <td class="text-nowrap">
                                    <a href="<?= base_url('nilai/ubah/' . $wn->id_nilai); ?>" class="btn btn-outline-warning">
                                        <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Update"></i>
                                    </a>
                                    <a href="<?= base_url('nilai/hapus/' . $wn->id_nilai); ?>" class="btn btn-outline-danger button-delete">
                                        <i class="fas fa-trash-alt pop" data-toggle="popover" data-placement="bottom" data-content="Delete"></i>
                                    </a>
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <?php endif; ?>
    </div>

    

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script -->