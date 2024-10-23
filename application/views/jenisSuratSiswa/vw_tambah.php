<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pengajuan Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan Surat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Pengajuan Surat</h5>

                        <!-- General Form Elements -->
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" class="form-control" readonly
                                        value="<?= $siswa['email']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tmptlahir" class="form-control" readonly
                                        value="<?= $siswa['tmptlahir']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tgllahir" class="form-control" readonly
                                        value="<?= $siswa['tgllahir']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="notelp" class="form-control" readonly
                                        value="<?= $siswa['notelp']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Alamat Saat Ini</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" readonly
                                        value="<?= $siswa['alamat']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="surat" class="col-sm-2 col-form-label">Nama Surat</label>
                                <div class="col-sm-10">
                                    <select name="jenis_surat" value="<?= set_value('jenis_surat') ?>" id="surat"
                                        class="form-control">
                                        <option value="">Pilih Surat</option>
                                        <option value="Surat Pengunduran Diri">Surat Pengunduran Diri</option>
                                        <option value="Surat Keterangan Pindah/Keluar">Surat Keterangan Pindah/Keluar
                                        </option>
                                    </select>
                                    <?= form_error('jenis_surat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tanggal_p" class="form-control">
                                    <?= form_error('tanggal_p', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                                    <a href="<?= base_url('SuratSiswa') ?>" type="close"
                                        class="btn btn-warning">Close</a>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>