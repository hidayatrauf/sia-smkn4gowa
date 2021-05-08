<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <div class="row">
            <div class="col-md-3">
                <img src="<?= base_url('assets/img/'); ?><?= $user->foto ? $user->foto : 'noprofil.png'; ?>" class="w-100" height="350">
            </div>
            <div class="col-md-9">
                <div class="col-md-9">
                    <table class="h4 text-black table">
                        <tr class="align-text-top">
                            <td width="150px">Username </td>
                            <td width="5px">:</td>
                            <td class="font-weight-bold"><?= $user->username; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Nama</td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= $user->nama_user; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Profil </td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= $user->profil; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Aktif </td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= $user->aktif; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td width="150px">Status Guru </td>
                            <td width="5px">:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->status_guru) ?  $guru->status_guru : '-'; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->jk_guru) ?  $guru->jk_guru : '-'; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->ttl_guru_tempat) ?  $guru->ttl_guru_tempat : '-'; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Tanggal Lahir </td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->ttl_guru_tgl) ?  $guru->ttl_guru_tgl : '-'; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>Alamat </td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->alamat_guru) ?  $guru->alamat_guru : '-'; ?></td>
                        </tr>
                        <tr class="align-text-top">
                            <td>No Handphone </td>
                            <td>:</td>
                            <td class="font-weight-bold"><?= !empty( $guru->no_hp_guru) ?  $guru->no_hp_guru : '-'; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('dashboard'); ?>" role="button"><i class="fa fa-arrow-left"></i> Back</a>
        <a class="mr-2 mt-3 btn btn-primary " href="<?= base_url('dashboard/changeprofilguru/' . $user->id_user); ?>" role="button">Ubah <i class="fas fa-paper-plane"></i></a>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>