<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Tambah Data Guru</h1>
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
                        <h5 class="card-title">Form Data Guru</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama
                                        Guru</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" value="<?= set_value('nama') ?>"
                                            class="form-control" id="nama" placeholder="Nama Guru">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" value="<?= set_value('password') ?>"
                                            class="form-control" id="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nip" class="col-sm-2 col-form-label">N I P</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="nip" value="<?= set_value('nip') ?>"
                                            class="form-control" id="nip" placeholder="NIP">
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="alamat" name="alamat" value="<?= set_value('alamat') ?>"
                                            class="form-control" id="alamat" placeholder="Alamat">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jk" value="<?= set_value('jk') ?>" id="jk" class="form-control">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select name="agama" value="<?= set_value('agama') ?>" id="agama"
                                            class="form-control">
                                            <option value="">Select Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tmptlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tmptlahir" value="<?= set_value('tmptlahir') ?>"
                                            class="form-control" id="tmptlahir" placeholder="Tempat Lahir">
                                        <?= form_error('tmptlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgllahir" value="<?= set_value('tgllahir') ?>"
                                            class="form-control" id="tgllahir" placeholder="Tanggal Lahir">
                                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="notelp" value="<?= set_value('notelp') ?>"
                                            class="form-control" id="notelp" placeholder="No Telepon">
                                        <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
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