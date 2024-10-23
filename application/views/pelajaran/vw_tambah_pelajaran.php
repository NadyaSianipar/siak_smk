<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Tambah Data Pelajaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Data Pelajaran</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="id_mapel" class="col-sm-2 col-form-label">Nama
                                        Pelajaran</label>
                                    <div class="col-sm-10">
                                        <select name="id_mapel" id="id_mapel" value="<?= set_value('id_mapel') ?>"
                                            class="form-control">
                                            <option value="">Pilih Mata Pelajaran</option>
                                            <?php foreach ($mapel as $m) { ?>
                                            <option value="<?php echo $m['id']; ?>">
                                                <?php echo $m['mapel']; ?></option>
                                            <?php 
                                        } ?>
                                        </select>
                                        <?= form_error('id_mapel', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="id_guru" class="col-sm-2 col-form-label">Guru Pengampu</label>
                                    <div class="col-sm-10">
                                        <select name="id_guru" id="id_guru" value="<?= set_value('id_guru') ?>"
                                            class="form-control">
                                            <option value="">Pilih Guru</option>
                                            <?php foreach ($guru as $g) { ?>
                                            <option value="<?php echo $g['id_guru']; ?>">
                                                <?php echo $g['nama']; ?></option>
                                            <?php 
                                        } ?>
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('id_guru', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <label for="id_kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="id_kelas" id="id_kelas" value="<?= set_value('id_kelas') ?>"
                                            class="form-control">
                                            <option value="">Pilih Kelas</option>
                                            <?php foreach ($kelas as $k) { ?>
                                            <option value="<?php echo $k['id_kelas']; ?>">
                                                <?php echo $k['nama_kelas']; ?></option>
                                            <?php 
                                        } ?>
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('id_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                    <div class="col-sm-10">
                                        <select name="hari" value="<?= set_value('hari') ?>" id="hari"
                                            class=" form-control">
                                            <option value="">Pilih Hari</option>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                        </select>
                                        <?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jammasuk" class="col-sm-2 col-form-label">Jam Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jammasuk" value="<?= set_value('jammasuk') ?>"
                                            class="form-control" id="jammasuk" placeholder="Jam Mulai">
                                        <?= form_error('jammasuk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jamselesai" class="col-sm-2 col-form-label">Jam Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jamselesai" value="<?= set_value('jamselesai') ?>"
                                            class="form-control" id="jamselesai" placeholder="Jam Selesai">
                                        <?= form_error('jamselesai', '<small class="text-danger pl-3">', '</small>'); ?>
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