<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="id_guru">Wali Kelas<span class="text-danger">*</span></label>
            <select id="id_guru" class="form-control select2bs4 <?= form_error('id_guru') ? 'is-invalid' : null; ?>" name="id_guru">
                <?php $data = $this->Default_m->getAll('guru', 'id_guru')->result(); ?>
                    <?php foreach ($data as $d) : ?>

                        <?php if ($d->id_guru != 0) : ?>
                            <option value="<?= $d->id_guru; ?>" <?= (!empty($ubah) && $ubah->id_guru == $d->id_guru) ? 'selected' : ''; ?>><?= $d->nama_guru; ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>
            </select>
            <?= form_error('id_guru'); ?>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="nama_kelas">Kelas<span class="text-danger">*</span></label>
                    <select id="nama_kelas" class="form-control <?= form_error('nama_kelas') ? 'is-invalid' : null; ?>" name="nama_kelas">
                        <option value="">-- Pilih Kelas --</option>
                        <option value="X" <?= (!empty($ubah) && $ubah->nama_kelas == 'X') ? 'selected' : ''; ?>>X</option>
                        <option value="XI" <?= (!empty($ubah) && $ubah->nama_kelas == 'XI') ? 'selected' : ''; ?>>XI</option>
                        <option value="XII" <?= (!empty($ubah) && $ubah->nama_kelas == 'XII') ? 'selected' : ''; ?>>XII</option>
                    </select>
                    <?= form_error('nama_kelas'); ?>
                </div>  
            </div>

            <div class="col-sm-8">
                <div class="form-group">
                    <label for="kelas_jurusan">Jurusan<span class="text-danger">*</span></label>
                    <select id="kelas_jurusan" class="form-control <?= form_error('kelas_jurusan') ? 'is-invalid' : null; ?>" name="kelas_jurusan">
                        <option value="Desain Grafika" <?= (!empty($ubah) && $ubah->kelas_jurusan == 'Desain Grafika') ? 'selected' : ''; ?>>Desain Grafika</option>
                        <option value="Produksi Grafika"<?= (!empty($ubah) && $ubah->kelas_jurusan == 'Produksi Grafika') ? 'selected' : ''; ?>>Produksi Grafika</option>
                        <option value="Teknik Instalasi Tenaga Listrik" <?= (!empty($ubah) && $ubah->kelas_jurusan == 'Teknik Instalasi Tenaga Listrik') ? 'selected' : ''; ?>>Teknik Instalasi Tenaga Listrik</option>
                        <option value="Teknik Komputer dan Jaringan" <?= (!empty($ubah) && $ubah->kelas_jurusan == 'Teknik Komputer dan Jaringan') ? 'selected' : ''; ?>>Teknik Komputer dan Jaringan</option>
                        <option value="Teknik Audio Video" <?= (!empty($ubah) && $ubah->kelas_jurusan == 'Teknik Audio Video') ? 'selected' : ''; ?>>Teknik Audio Video</option>
                        <option value="Desain Pemodelan dan Informasi Bangunan" <?= (!empty($ubah) && $ubah->kelas_jurusan == 'Desain Pemodelan dan Informasi Bangunan') ? 'selected' : ''; ?>>Desain Pemodelan dan Informasi Bangunan</option>
                        <option value="Agribisnis Tanaman Pangan dan Hortikultura"<?= (!empty($ubah) && $ubah->kelas_jurusan == 'Agribisnis Tanaman Pangan dan Hortikultura') ? 'selected' : ''; ?>>Agribisnis Tanaman Pangan dan Hortikultura</option>
                    </select>
                    <?= form_error('kelas_jurusan'); ?>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label for="kode_jurusan">Nama Kelas<span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('kode_jurusan') ? 'is-invalid' : null; ?>" id="kode_jurusan" name="kode_jurusan" autocomplete="off" value="<?= $ubah->kode_jurusan; ?>">
                    <?= form_error('kode_jurusan'); ?>
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('kelas'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Edit <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>