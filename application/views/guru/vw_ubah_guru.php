<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Edit Data Pelajaran</h1>
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
                        <h5 class="card-title">Form Edit Guru</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama
                                        Guru</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" value="<?= $guru['nama']; ?>"
                                            class="form-control" id="nama" placeholder="Nama Guru">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" value="<?= $guru['password']; ?>"
                                            class="form-control" id="namaguru" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nip" value="<?= $guru['nip']; ?>" class="form-control"
                                            id="nip" placeholder="NIP">
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Guru</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" value="<?= $guru['alamat']; ?>"
                                            class="form-control" id="alamat" placeholder="Alamat Guru">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jk" id="jk" class="form-control">
                                            <option value="Laki-laki" <?php if ($guru['jk'] == "Laki-laki") {
                                                                            echo "selected";
                                                                        } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if ($guru['jk'] == "Perempuan") {
                                                                            echo "selected";
                                                                        } ?>>Perempuan</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="Islam" <?php if ($guru['agama'] == "Islam") {
                                                                        echo "selected";
                                                                    } ?>>Islam</option>
                                            <option value="Kristen Protestan" <?php if ($guru['agama'] == "Kristen Protestan") {
                                                                                    echo "selected";
                                                                                } ?>>Kristen Protestan</option>
                                            <option value="Katolik" <?php if ($guru['agama'] == "Katolik") {
                                                                        echo "selected";
                                                                    } ?>>Katolik</option>
                                            <option value="Hindu" <?php if ($guru['agama'] == "Hindu") {
                                                                        echo "selected";
                                                                    } ?>>Hindu</option>
                                            <option value="Buddha" <?php if ($guru['agama'] == "Buddha") {
                                                                        echo "selected";
                                                                    } ?>>Buddha</option>
                                            <option value="Konghucu" <?php if ($guru['agama'] == "Konghucu") {
                                                                            echo "selected";
                                                                        } ?>>Konghucu</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tmptlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tmptlahir" value="<?= $guru['tmptlahir']; ?>"
                                            class="form-control" id="tmptlahir" placeholder="Tempat Lahir">
                                        <?= form_error('tmptlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgllahir" value="<?= $guru['tgllahir']; ?>"
                                            class="form-control" id="tgllahir" placeholder="Tanggal Lahir">
                                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="notelp" value="<?= $guru['notelp']; ?>"
                                            class="form-control" id="notelp" placeholder="No Telepon">
                                        <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->