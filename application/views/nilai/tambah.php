<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id_mapel">Mata Pelajaran<span class="text-danger">*</span></label>
                    <select id="id_mapel" class="form-control <?= form_error('id_mapel') ? 'is-invalid' : null; ?>" name="id_mapel">
                        <option value="">-- Pilih Mata Pelajaran --</option>
                        <?php $mapel = $this->Default_m->getAll('mapel', 'id_mapel')->result(); ?>
                        <?php foreach ($mapel as $s) : ?>
                        <option value="<?= $s->id_mapel; ?>"><?= $s->nama_mapel; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('id_mapel'); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id_siswa">NIS Siswa<span class="text-danger">*</span></label>
                    <select id="id_siswa" class="form-control select2bs4-2 <?= form_error('id_siswa') ? 'is-invalid' : null; ?>" name="id_siswa">
                        <option value="">-- Pilih NIS Siswa --</option>
                        <?php $siswa = $this->Default_m->getAll('siswa', 'id_siswa')->result(); ?>
                        <?php foreach ($siswa as $s) : ?>
                        <option value="<?= $s->id_siswa; ?>"><?= $s->nis_siswa .' - '. $s->nama_siswa; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('id_siswa'); ?>
                </div>
            </div>
            <?php if ($user->id_profil == 1) : ?>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id_user">NIP Guru<span class="text-danger">*</span></label>
                    <select id="id_user" class="form-control select2bs4 <?= form_error('id_user') ? 'is-invalid' : null; ?>" name="id_user">
                        <option value="">-- Pilih NIP Guru --</option>
                        <?php $guru = $this->Default_m->getAll('guru', 'id_user')->result(); ?>
                        <?php foreach ($guru as $s) : ?>
                        <option value="<?= $s->id_user; ?>"><?= $s->nip_guru . '  - '. $s->nama_guru; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('id_user'); ?>
                </div>
            </div>
        <?php elseif ($user->id_profil == 2) : ?>
            <div class="col-md-4">
                <div class="form-group">
                    <!--<label for="id_user">NIP Guru<span class="text-danger">*</span></label>-->
                    <input type="hidden" name="id_user" class="form-control" value="<?= $user->id_user; ?>">
                    <input type="hidden" class="form-control <?= form_error('id_user') ? 'is-invalid' : null; ?>" placeholder="<?= $user->username; ?>" readonly>
                    <?= form_error('id_user'); ?>
                </div>
            </div>
        <?php endif; ?>


        </div>


        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="thn_ajaran">Tahun Ajaran<span class="text-danger"> *</span></label>
                    <select class="form-control <?= form_error('thn_ajaran') ? 'is-invalid' : null; ?>" name="thn_ajaran" id="thn_ajaran" name="thn_ajaran">
                        <option value="">-- Pilih Tahun Ajaran --</option>
                        <?php $thn_ajaran = date('Y') ?>
                        <?php for ($i=2015; $i <= $thn_ajaran; $i++) : ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <?= form_error('thn_ajaran'); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="kelas">Kelas<span class="text-danger">*</span></label>
                    <select class="form-control <?= form_error('kelas') ? 'is-invalid' : null; ?>" name="kelas" id="kelas" name="kelas">
                        <option value="">-- Pilih Kelas --</option>
                        <?php $kelas = $this->Default_m->getAll('kelas', 'id_kelas')->result(); ?>
                        <?php foreach ($kelas as $k) : ?>
                        <option value="<?= $k->nama_kelas.' '.$k->kelas_jurusan.' '.$k->kode_jurusan; ?>"><?= $k->nama_kelas.' '.$k->kelas_jurusan.' '.$k->kode_jurusan; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kelas'); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="semester">Semester<span class="text-danger">*</span></label>
                    <select class="form-control <?= form_error('semester') ? 'is-invalid' : null; ?>" name="semester" id="semester" name="semester">
                        <option value="">-- Pilih Semester --</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                    <?= form_error('semester'); ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tgs_1">Tugas 1</label>
                    <input type="number" class="form-control" id="tgs_1" name="tgs_1" value="<?= set_value('tgs_1'); ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tgs_2">Tugas 2</label>
                    <input type="number" class="form-control" id="tgs_2" name="tgs_2" value="<?= set_value('tgs_2'); ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tgs_3">Tugas 3</label>
                    <input type="number" class="form-control" id="tgs_3" name="tgs_3" value="<?= set_value('tgs_3'); ?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="uts">Penilaian Tengah Semester</label>
                    <input type="number" class="form-control" id="uts" name="uts" value="<?= set_value('uts'); ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="uas">Penilaian Akhir Semester</label>
                    <input type="number" class="form-control" id="uas" name="uas" value="<?= set_value('uas'); ?>">
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('nilai'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>