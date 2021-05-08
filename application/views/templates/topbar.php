<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-topbar-footer topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button> -->
            <button onclick="showHide()" id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <h4>SMK Negeri 4 Gowa</h4>
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <?php $id_user = $this->session->userdata('id_user'); ?>
                <?php $data = $this->Default_m->getWhere('tabel_user', ['id_user' => $id_user])->row(); ?>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-black"><?= $data->nama_user; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/'); ?><?= !empty($data->foto) ? $data->foto : 'noprofil.png'; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <?php if ($data->id_profil == '1') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/profil/' . $data->id_user); ?>">
                            <i class="fas fa-id-card-alt fa-sm fa-fw mr-2"></i>
                            Profil
                        </a>
                        <?php endif; ?>
                        <?php if ($data->id_profil == '2') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/profilguru/' . $data->id_user); ?>">
                            <i class="fas fa-id-card-alt fa-sm fa-fw mr-2"></i>
                            Profil
                        </a>
                        <?php endif; ?>
                        <?php if ($data->id_profil == '3') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/profilsiswa/' . $data->id_user); ?>">
                            <i class="fas fa-id-card-alt fa-sm fa-fw mr-2"></i>
                            Profil
                        </a>
                        <?php endif; ?>
                        <?php if ($data->id_profil == '1') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/changeprofil/' . $data->id_user); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                            Ganti Profil
                        </a>
                        <?php endif; ?>
                        <?php if ($data->id_profil == '2') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/changeprofilguru/' . $data->id_user); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                            Ganti Profil
                        </a>
                        <?php endif; ?>
                        <?php if ($data->id_profil == '3') : ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/changeprofilsiswa/' . $data->id_user); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                            Ganti Profil
                        </a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?= base_url('dashboard/changepass/' . $data->id_user); ?>">
                            <i class="fas fa-key fa-sm fa-fw mr-2"></i>
                            Ubah Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Keluar
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->