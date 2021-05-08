<!-- Begin Page Content -->
<div class="container-fluid">
	<?php $kelaslengkap = $kelas['nama_kelas'].' '.$kelas['kelas_jurusan'].' '. $kelas['kode_jurusan']; ?>

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1> 
        <h2><?= $kelaslengkap ?></h2>
        <h2 class="h4"><?= $kelas['nama_guru']; ?></h2>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">
    	<div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center w-100" id="myTable">
                    <thead class="bg-primary text-white ">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Tugas 1</th>
                            <th scope="col">Tugas 2</th>
                            <th scope="col">Tugas 3</th>
                            <th scope="col">PTS</th>
                            <th scope="col">PAS</th>
                            <th scope="col">NILAI AKHIR</th>
                        </tr>
                    </thead>
                    <tbody class="text-black">
                    	<?php $i = 1;foreach ($nilai as $n) : ?>
                    	<?php $total = ($n->tgs_1 + $n->tgs_2 + $n->tgs_3 + $n->uas + $n->uts) / 5;  ?>
                    	<?php if ($kelaslengkap == $n->kelas) : ?>
                    	<tr>
                    		<td scope="row"><?= $i++; ?></td>
                    		<td class="text-left"><?= $n->nama_siswa; ?></td>
                    		<td class="text-center"><?php if ($n->semester == 'Ganjil') : ?>
                                    <span class="badge badge-success">Ganjil</span>
                                <?php else : ?>
                                    <span class="badge badge-primary">Genap</span>
                                <?php endif; ?>
                            </td>
                    		<td class="text-left"><?= $n->nama_mapel; ?></td>
                    		<td class="text-left"><?= $n->tgs_1; ?></td>
                    		<td class="text-left"><?= $n->tgs_2; ?></td>
                    		<td class="text-left"><?= $n->tgs_3; ?></td>
                    		<td class="text-left"><?= $n->uts; ?></td>
                    		<td class="text-left"><?= $n->uas; ?></td>
                    		<td class="text-left"><?php if ($total <= '72' ) : ?>
                                    <span class="text-danger"><?= $total; ?></span></td>
                                <?php else : ?>
                                    <span><?= $total; ?></span></td>
                                <?php endif; ?></td>
                    	</tr>
                    	<?php endif; ?>
                    	<?php endforeach;?>
                    </tbody>
                </table>
            </div>
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