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
                    <label for="nama_siswa">Pemberi Saran</label>
                    <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" name="nama_siswa" value="<?= $user['nama_user']; ?>" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="kepada_saran">Ditujukan Kepada</label>
                    <select id="kepada_saran" class="form-control select2bs4 <?= form_error('kepada_saran') ? 'is-invalid' : null; ?>" name="kepada_saran">
                        <option value="">-- Pilih Guru --</option>
                        <?php $guru = $this->Default_m->getAll('guru', 'id_guru')->result(); ?>
                        <?php foreach ($guru as $g) : ?>
                        <option value="<?= $g->nama_guru; ?>" <?php if ($g->nama_guru == $ubah->kepada_saran) { echo 'selected'; } ?>><?= $g->nama_guru; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kepada_saran'); ?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="isi_saran">Isi Saran<span class="text-danger">*</span></label>
                    <textarea class="form-control <?= form_error('isi_saran') ? 'is-invalid' : null; ?>" id="isi_saran" name="isi_saran" value="<?= $ubah->isi_saran; ?>"><?= $ubah->isi_saran; ?></textarea>
                    <?= form_error('isi_saran'); ?>
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('saran'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>