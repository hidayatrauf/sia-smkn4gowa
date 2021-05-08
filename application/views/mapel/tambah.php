<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">

            <div class="col-md-8">
                <div class="form-group">
                    <label for="nama_mapel">Nama Mata Pelajaran<span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('nama_mapel') ? 'is-invalid' : null; ?>" id="nama_mapel" name="nama_mapel" value="<?= set_value('nama_mapel'); ?>">
                    <?= form_error('nama_mapel'); ?>
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('mapel'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>