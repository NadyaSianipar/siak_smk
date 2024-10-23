<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Tambah Data Kelas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Kelas</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama_kelas" class="col-sm-2 col-form-label">Nama
                                        Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_kelas" value="<?= set_value('nama_kelas') ?>"
                                            class="form-control" id="nama_kelas" placeholder="Nama Kelas">
                                        <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                    <div class="col-sm-10">
                                        <select name="tingkat" value="<?= set_value('tingkat') ?>" id="tingkat"
                                            class=" form-control">
                                            <option value="">Pilih Tingkat</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <select name="jurusan" id="jurusan" value="<?= set_value('jurusan') ?>"
                                            class="form-control">
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $j) { ?>
                                            <option value="<?php echo $j['id_jurusan']; ?>">
                                                <?php echo $j['nama_jurusan']; ?></option>
                                            <?php 
                                        } ?>
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('jurusan1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="wali_kelas" class="col-sm-2 col-form-label">Wali Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="wali_kelas" id="wali_kelas" value="<?= set_value('wali_kelas') ?>"
                                            class="form-control">
                                            <option value="">Pilih Guru</option>
                                            <?php foreach ($guru as $g) { ?>
                                            <option value="<?php echo $g['id_guru']; ?>">
                                                <?php echo $g['nama']; ?></option>
                                            <?php 
                                        } ?>
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('jurusan1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End General Form Elements -->