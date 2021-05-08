<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>
    <?php $id_profil = $this->session->userdata('id_profil'); ?>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg">

        <?php if ($id_profil == '1') : ?>
        <a class="mb-3 btn btn-outline-primary" href="<?= base_url('mapel/tambah'); ?>" role="button">
            Tambah Mata Pelajaran<i class="fa fa-plus"></i>
        </a>
        <?php endif; ?>
        <button type="button" class="btn btn-primary mb-3">Total Data : <?= $num; ?></button>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center w-100" id="myTable">
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mata Pelajaran</th>
                        <?php if ($id_profil == '1') : ?>
                        <th scope="col">Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
	            <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($mapel as $u) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $u->nama_mapel; ?></td>
                            <?php if ($id_profil == '1') : ?>
                            <td class="text-nowrap">
                                <a href="<?= base_url('mapel/ubah/' . $u->id_mapel); ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Ubah"></i>
                                </a>
                                <a href="<?= base_url('mapel/hapus/' . $u->id_mapel); ?>" class="btn btn-outline-danger button-delete">
                                    <i class="fas fa-trash-alt pop" data-toggle="popover" data-placement="bottom" data-content="Hapus"></i>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script -->