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
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->jk_siswa) ?  $siswa->jk_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Kelas Siswa </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->kelas_siswa) ?  $siswa->kelas_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->ttl_siswa_tempat) ?  $siswa->ttl_siswa_tempat : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Tanggal Lahir </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->ttl_siswa_tgl) ?  $siswa->ttl_siswa_tgl : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Alamat </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->alamat_siswa) ?  $siswa->alamat_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>No Handphone </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->no_hp_siswa) ?  $siswa->no_hp_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Nama Ayah </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->ayah_siswa) ?  $siswa->ayah_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Nama Ibu </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->ibu_siswa) ?  $siswa->ibu_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Agama </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->agama_siswa) ?  $siswa->agama_siswa : '-'; ?></td>
                    </tr>
                    <tr class="align-text-top">
                        <td>Jenis kelamin </td>
                        <td>:</td>
                        <td class="font-weight-bold"><?= !empty( $siswa->jk_siswa) ?  $siswa->jk_siswa : '-'; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('dashboard'); ?>" role="button"><i class="fa fa-arrow-left"></i> Back</a>
    <a class="mr-2 mt-3 btn btn-primary " href="<?= base_url('dashboard/changeprofilsiswa/' . $user->id_user); ?>" role="button">Ubah <i class="fas fa-paper-plane"></i></a>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>