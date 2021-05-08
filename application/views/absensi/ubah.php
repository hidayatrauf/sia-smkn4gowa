<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_user">Nomor Induk Siswa<span class="text-danger">*</span></label>
                    <input type="hidden" class="form-control" name="id_siswa" value="<?= $ubah->id_siswa; ?>">
                    <input type="text" class="form-control <?= form_error('id_siswa') ? 'is-invalid' : null; ?>" value="<?= $ubah->nis_siswa. ' - '. $ubah->nama_siswa; ?>" readonly>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="izin">Izin <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('izin') ? 'is-invalid' : null; ?>" id="izin" name="izin" value="<?= $ubah->izin; ?>">
                    <?= form_error('izin'); ?>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="sakit">Sakit <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('sakit') ? 'is-invalid' : null; ?>" id="sakit" name="sakit" value="<?= $ubah->sakit; ?>">
                    <?= form_error('sakit'); ?>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="alfa">Alfa <span class="text-danger">*</span></label>
                    <input type="number" class="form-control <?= form_error('alfa') ? 'is-invalid' : null; ?>" id="alfa" name="alfa" value="<?= $ubah->alfa; ?>">
                    <?= form_error('alfa'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="bulan">Bulan<span class="text-danger">*</span></label>
                    <?php $subbulan = substr($ubah->bulantahun, 0,-4);
                      $subtahun = substr($ubah->bulantahun, -4);
                      ?>
                    <select id="bulan" class="form-control select2bs4 <?= form_error('bulan') ? 'is-invalid' : null; ?>" name="bulan">
                        <option value="">-- Pilih Bulan --</option>
                        <option value="01" <?= (!empty($ubah) && $subbulan == '1') ? 'selected' : ''; ?>>Januari</option>
                        <option value="02" <?= (!empty($ubah) && $subbulan == '2') ? 'selected' : ''; ?>>Februari</option>
                        <option value="03" <?= (!empty($ubah) && $subbulan == '3') ? 'selected' : ''; ?>>Maret</option>
                        <option value="04" <?= (!empty($ubah) && $subbulan == '4') ? 'selected' : ''; ?>>April</option>
                        <option value="05"<?= (!empty($ubah) && $subbulan == '5') ? 'selected' : ''; ?>>Mei</option>
                        <option value="06" <?= (!empty($ubah) && $subbulan == '6') ? 'selected' : ''; ?>>Juni</option>
                        <option value="07" <?= (!empty($ubah) && $subbulan == '7') ? 'selected' : ''; ?>>Juli</option>
                        <option value="08" <?= (!empty($ubah) && $subbulan == '8') ? 'selected' : ''; ?>>Agustus</option>
                        <option value="09" <?= (!empty($ubah) && $subbulan == '9') ? 'selected' : ''; ?>>September</option>
                        <option value="10" <?= (!empty($ubah) && $subbulan == '10') ? 'selected' : ''; ?>>Oktober</option>
                        <option value="11" <?= (!empty($ubah) && $subbulan == '11') ? 'selected' : ''; ?>>November</option>
                        <option value="12" <?= (!empty($ubah) && $subbulan == '12') ? 'selected' : ''; ?>>Desember</option>
                    </select>
                    <?= form_error('bulan'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <select class="form-control <?= form_error('tahun') ? 'is-invalid' : null; ?>" id="tahun" name="tahun">
                        <option value="">-- Pilih Tahun --</option>
                        <?php $tahun = date('Y') ?>
                        <?php for ($i=2015; $i <= $tahun; $i++) : ?>
                        <option value="<?= $i; ?>" <?= (!empty($ubah) && $subtahun == $i) ? 'selected' : ''; ?>><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <?= form_error('tahun'); ?>
                </div>
            </div>
            
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('absensi'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Simpan <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>