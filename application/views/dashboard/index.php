<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black">Selamat Datang di Sistem Informasi Akademik SMKN 4 GOWA</h1>
    </div>
    
    <!-- carousel foto -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= base_url('assets/img/dashboard/1.jpg'); ?>" alt="First slide" height=600px>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/img/dashboard/2.jpg'); ?>" alt="Second slide" height=600px>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= base_url('assets/img/dashboard/3.jpg'); ?>" alt="Third slide" height=600px>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <!-- <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg "> -->
		<!--<div class="row">-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Siswa</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $siswa; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-fw fa-users fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mata Pelajaran</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $mapel; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelas</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kelas; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-fw fa-chalkboard-teacher fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Absensi</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $absensi; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-fw fa-book-reader fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nilai</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $nilai; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-fw fa-check-double fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
			<!-- Earnings (Monthly) Card Example -->
  <!--          <div class="col-xl-3 col-md-6 mb-4">-->
  <!--            <div class="card border-left-primary shadow h-100 py-2">-->
  <!--              <div class="card-body">-->
  <!--                <div class="row no-gutters align-items-center">-->
  <!--                  <div class="col mr-2">-->
  <!--                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Guru</div>-->
  <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $guru; ?></div>-->
  <!--                  </div>-->
  <!--                  <div class="col-auto">-->
  <!--                    <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>-->
  <!--                  </div>-->
  <!--                </div>-->
  <!--              </div>-->
  <!--            </div>-->
  <!--          </div>-->
		<!--</div>-->
    <!-- </div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>