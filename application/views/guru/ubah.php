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
            <?= form_error('nama_user'); ?>
        </div>
        
        <div class="form-group">
            <label for="nip_guru">Nomor Induk</label>
            <input type="text" class="form-control <?= form_error('nip_guru') ? 'is-invalid' : null; ?>" id="nip_guru" name="nip_guru" autocomplete="off" value="<?= $ubah2->nip_guru; ?>">
        </div>
<!-- 
        <div class="form-group">
            <label for="kelas_jurusan">Kelas Jurusan <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('kelas_jurusan') ? 'is-invalid' : null; ?>" id="kelas_jurusan" name="kelas_jurusan" value="<?= $ubah2->kelas_jurusan; ?>">
            <?= form_error('kelas_jurusan'); ?>
        </div>  --> 

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ttl_guru_tempat">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('ttl_guru_tempat') ? 'is-invalid' : null; ?>" id="ttl_guru_tempat" name="ttl_guru_tempat" value="<?= $ubah2->ttl_guru_tempat; ?>">
                    <?= form_error('ttl_guru_tempat'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ttl_guru_tgl">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" class="form-control <?= form_error('ttl_guru_tgl') ? 'is-invalid' : null; ?>" id="ttl_guru_tgl" name="ttl_guru_tgl" value="<?= $ubah2->ttl_guru_tgl; ?>">
                    <?= form_error('ttl_guru_tgl'); ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="alamat_guru">Alamat <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('alamat_guru') ? 'is-invalid' : null; ?>" id="alamat_guru" name="alamat_guru" value="<?= $ubah2->alamat_guru; ?>">
                    <?= form_error('alamat_guru'); ?>
                </div>            
            </div>
            <div class="col-md-4">                
                <div class="form-group">
                    <label for="no_hp_guru">Nomor Handphone <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('no_hp_guru') ? 'is-invalid' : null; ?>" id="no_hp_guru" name="no_hp_guru" value="<?= $ubah2->no_hp_guru; ?>">
                    <?= form_error('no_hp_guru'); ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status_guru">Status Guru</label>
                    <select id="status_guru" class="form-control" name="status_guru">
                        <option value="Guru Tetap" <?php if ($ubah2->status_guru == "Guru Tetap") { echo 'selected'; } ?>>Guru</option>
                        <option value="Guru Tidak Tetap" <?php if ($ubah2->status_guru == "Guru Tidak Tetap") { echo 'selected'; } ?>>Guru Tidak Tetap</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jk_guru">Jenis Kelamin</label>
                    <select id="jk_guru" class="form-control" name="jk_guru">
                        <option value="Laki-laki" <?php if ($ubah2->jk_guru == "Laki-laki") { echo 'selected'; } ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if ($ubah2->jk_guru == "Perempuan") { echo 'selected'; } ?>>Perempuan</option>
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



        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('guru'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>