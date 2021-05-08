<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>


        <div class="form-group">
            <label for="nama_user">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null; ?>" id="nama_user" name="nama_user" autocomplete="off" value="<?= $ubah->nama_user; ?>">
            <?= form_error('name'); ?>
        </div>

         <div class="form-group">
            <label for="kelas">Kelas <span class="text-danger">*</span></label>
            <select name="kelas" class="form-control <?= form_error('kelas') ? 'is-invalid' : null; ?>">
                <?php $data = $this->Default_m->getAll('kelas', 'id_kelas')->result(); ?>
                <option value="">-- Pilih Kelas --</option>
                <?php foreach ($data as $s) : ?>
                    <?php if ($s->kelas != $ubah2->id_kelas) : ?>
                <option value="<?= $s->id_kelas; ?>" <?= (!empty($ubah2) && $ubah2->id_kelas == $s->id_kelas) ? 'selected' : ''; ?>><?= $s->nama_kelas.' '.$s->kelas_jurusan. ' '.$s->kode_jurusan; ?></option>
                     <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <?= form_error('kelas'); ?>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ttl_siswa_tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="ttl_siswa_tempat" name="ttl_siswa_tempat" value="<?= $ubah2->ttl_siswa_tempat; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ttl_siswa_tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="ttl_siswa_tgl" name="ttl_siswa_tgl" value="<?= $ubah2->ttl_siswa_tgl; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="agama_siswa">Agama</label>
                    <input type="text" class="form-control" id="agama_siswa" name="agama_siswa" value="<?= $ubah2->agama_siswa; ?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="alamat_siswa">Alamat</label>
                    <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" value="<?= $ubah2->alamat_siswa; ?>">
                </div>            
            </div>
            <div class="col-md-4">                
                <div class="form-group">
                    <label for="no_hp_siswa">Nomor Handphone</label>
                    <input type="number" class="form-control" id="no_hp_siswa" name="no_hp_siswa" value="<?= $ubah2->no_hp_siswa; ?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ayah_siswa">Nama Ayah</label>
                    <input type="text" class="form-control" id="ayah_siswa" name="ayah_siswa" value="<?= $ubah2->ayah_siswa; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ibu_siswa">Nama Ibu</label>
                    <input type="text" class="form-control" id="ibu_siswa" name="ibu_siswa" value="<?= $ubah2->ibu_siswa; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="jk_siswa">Jenis Kelamin</label>
                    <select id="jk_siswa" class="form-control" name="jk_siswa">
                        <option value="Laki-laki" <?php if ($ubah2->jk_siswa == "Laki-laki") { echo 'selected'; } ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if ($ubah2->jk_siswa == "Perempuan") { echo 'selected'; } ?>>Perempuan</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="col-md-8">
            <div class="form-group">
                <label for="foto">Foto User</label>
                <div>
                    <input type="file" id="real-file" hidden="hidden" name="foto">
                    <button type="button" class="btn btn-outline-success" id="custom-button">
                        Upload File <i class="fas fa-upload ml-2"></i>
                    </button>
                    <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                </div>
                <?= form_error('foto'); ?>
            </div>

            <div class="form-group">
                <img id="prev" src="<?= base_url('assets/img/'); ?><?= !empty($ubah->foto) ? $ubah->foto : 'noprofil.png'; ?>" height="270">
            </div>
        </div>



        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('dashboard'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>