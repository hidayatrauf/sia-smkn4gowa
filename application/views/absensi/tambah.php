<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="id_user">Nomor Induk Siswa<span class="text-danger">*</span></label>
                    <select id="id_siswa" class="form-control select2bs4 <?= form_error('id_siswa') ? 'is-invalid' : null; ?>" name="id_siswa">
                        <option value="">-- Pilih NIS Siswa --</option>
                        <?php foreach ($siswa as $s) : ?>
                        <option value="<?= $s->id_siswa; ?>"><?= $s->nis_siswa . ' - '. $s->nama_siswa; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="bulan">Bulan<span class="text-danger">*</span></label>
                    <select id="bulan" class="form-control select2bs4-2 <?= form_error('bulan') ? 'is-invalid' : null; ?>" name="bulan">
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
                    <?= form_error('bulan'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <select class="form-control select2bs4-3 <?= form_error('tahun') ? 'is-invalid' : null; ?>" id="tahun" name="tahun">
                        <option value="">-- Pilih Tahun --</option>
                        <?php $tahun = date('Y') ?>
                        <?php for ($i=2015; $i <= $tahun; $i++) : ?>
                        <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <?= form_error('tahun'); ?>
                </div>
            </div>
        </div>


        <div class="row mb-3">
            <!--<div class="col-md-6">-->
            <!--    <div class="form-group">-->
            <!--        <label for="kelas">Kelas <span class="text-danger">*</span></label>-->
            <!--        <select id="kelas" class="form-control <?= form_error('kelas') ? 'is-invalid' : null; ?>" name="kelas">-->
            <!--            <option value="">-- Pilih Kelas --</option>-->
            <!--            <?php foreach ($kelas as $s) : ?>-->
            <!--            <option value="<?= $s->nama_kelas.' '.$s->kelas_jurusan.' '.$s->kode_jurusan; ?>"><?= $s->nama_kelas.' '.$s->kelas_jurusan.' '.$s->kode_jurusan; ?></option>-->
            <!--            <?php endforeach; ?>-->
            <!--        </select>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-2">
                <div class="form-group">
                    <label for="izin">Izin <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('izin') ? 'is-invalid' : null; ?>" id="izin" name="izin" value="<?= set_value('izin'); ?>">
                    <?= form_error('izin'); ?>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="sakit">Sakit <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('sakit') ? 'is-invalid' : null; ?>" id="sakit" name="sakit" value="<?= set_value('sakit'); ?>">
                    <?= form_error('sakit'); ?>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="alfa">Alfa <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('alfa') ? 'is-invalid' : null; ?>" id="alfa" name="alfa" value="<?= set_value('alfa'); ?>">
                    <?= form_error('alfa'); ?>
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('absensi'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>