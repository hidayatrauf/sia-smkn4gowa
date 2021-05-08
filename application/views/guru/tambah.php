<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart('guru/tambahGuru'); ?>

        <div class="form-group">
            <label for="username">Username<span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?>" id="username" name="username" autocomplete="off" value="<?= set_value('username'); ?>">
            <?= form_error('username'); ?>
            <input type="hidden" class="form-control <?= form_error('id_profil') ? 'is-invalid' : null; ?>" id="id_profil" name="id_profil" autocomplete="off" value="2">
        </div>

        <div class="form-group">
            <label for="password">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password" autocomplete="off">
            <?= form_error('password'); ?>
        </div>

        <div class="form-group">
            <label for="passconfirm">Konfimasi Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('passconfirm') ? 'is-invalid' : null; ?>" id="passconfirm" name="passconfirm" autocomplete="off">
            <?= form_error('passconfirm'); ?>
        </div>

        <div class="form-group">
            <label for="nama_user">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null; ?>" id="nama_user" name="nama_user" autocomplete="off" value="<?= set_value('nama_user'); ?>">
            <?= form_error('name'); ?>
        </div>
        
        <div class="form-group">
            <label for="nip_guru">Nomor Induk</label>
            <input type="text" class="form-control <?= form_error('nip_guru') ? 'is-invalid' : null; ?>" id="nip_guru" name="nip_guru" autocomplete="off" value="<?= set_value('nip_guru'); ?>">
        </div>

        <!-- <div class="row mb-3"> -->
<!--             <div class="col-md-6">
                <div class="form-group">
                    <label for="kelas_jurusan">Kelas Jurusan</label>
                    <input type="text" class="form-control" id="kelas_jurusan" name="kelas_jurusan" value="<?= set_value('kelas_jurusan'); ?>">
                </div>  
            </div> -->
            <!-- <div class="col-md-6"> -->
                <div class="form-group">
                    <label for="aktif">Aktif <span class="text-danger">*</span></label>
                    <select id="aktif" class="form-control <?= form_error('aktif') ? 'is-invalid' : null; ?>" name="aktif">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <?= form_error('aktif'); ?>
                </div>
            <!-- </div> -->
        <!-- </div> -->

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ttl_guru_tempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="ttl_guru_tempat" name="ttl_guru_tempat" value="<?= set_value('ttl_guru_tempat'); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ttl_guru_tgl">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="ttl_guru_tgl" name="ttl_guru_tgl" value="<?= set_value('ttl_guru_tgl'); ?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="alamat_guru">Alamat</label>
                    <input type="text" class="form-control" id="alamat_guru" name="alamat_guru" value="<?= set_value('alamat_guru'); ?>">
                </div>            
            </div>
            <div class="col-md-4">                
                <div class="form-group">
                    <label for="no_hp_guru">Nomor Handphone</label>
                    <input type="number" class="form-control" id="no_hp_guru" name="no_hp_guru" value="<?= set_value('no_hp_guru'); ?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status_guru">Status Guru</label>
                    <select id="status_guru" class="form-control" name="status_guru">
                        <option value="Guru Tetap">Guru Tetap</option>
                        <option value="Guru Tidak Tetap">Guru Tidak Tetap</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jk_guru">Jenis Kelamin</label>
                    <select id="jk_guru" class="form-control" name="jk_guru">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
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
                <img id="prev" src="<?= base_url('assets/img/noprofil.png'); ?>" height="270">
            </div>
        </div>



        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('guru'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>