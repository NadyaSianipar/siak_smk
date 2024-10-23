<main id="main" class="main">

    <div class="pagetitle">
        <h1>Praktik Kerja Lapangan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Home</a></li>
                <li class="breadcrumb-item active">Praktik Kerja Lapangan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Pengajuan Praktik Kerja Lapangan</h5>


                        <!-- General Form Elements -->
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" readonly value="<?= $siswa['email']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tmptlahir" class="form-control" readonly value="<?= $siswa['tmptlahir']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tgllahir" class="form-control" readonly value="<?= $siswa['tgllahir']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notelp" class="form-control" readonly value="<?= $siswa['notelp']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat Saat Ini</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" readonly value="<?= $siswa['alamat']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Mulai KP</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_mulai" class="form-control">
                                    <?= form_error('tgl_mulai', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Selesai KP</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_selesai"  class="form-control">
                                    <?= form_error('tgl_mulai', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-10">
                                    <div class="form-floating mb-3">
                                        <select name="namaperusahaan" class="form-select" id="instansi" name="instansi[]"
                                            aria-label="Floating label select example">
                                            <option value="" selected>Open this select menu</option>
                                            <?php foreach ($perusahaan as $row) : ?>
                                            <option value="<?php echo $row['id_perusahaan']; ?>"
                                                data-bidang="<?php echo $row['bidang']; ?>">
                                                <?php echo $row['namaperusahaan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('namaperusahaan', '<small class="text-danger p1-3">', '</small>'); ?>
                                        <label for="instansi">Nama Perusahaan</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Bidang Kerja</label>
                                <div class="col-sm-10">
                                    <div class="form-floating mb-3">
                                        <select name="bidangkerja" class="form-select" id="bidang_kerja" name="bidang_kerja[]"
                                            aria-label="Floating label select example">
                                            <option value="" selected>Open this select menu</option>
                                        </select>
                                        <?= form_error('bidangkerja', '<small class="text-danger p1-3">', '</small>'); ?>
                                        <label for="bidang_kerja">Bidang Kerja</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                                    <a href="<?= base_url('PklSiswa') ?>" type="close" class="btn btn-warning">Close</a>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

</main>


<script>
$(document).ready(function() {
    $('#instansi').on('change', function() {
        var selectedInstansi = $(this).val();

        var option = '';

        var bidang = $('#instansi :selected').attr('data-bidang');
        bidang.split(',').map(function(item) {
            option += `<option>${item}</option>`;
        })

        $('#bidang_kerja').html(option);
    });
});
</script>