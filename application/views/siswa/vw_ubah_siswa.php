<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Edit Data Pelajaran</h1>
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
                        <h5 class="card-title">Form Edit Siswa</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama
                                        Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" value="<?= $siswa['nama']; ?>"
                                            class="form-control" id="nama" placeholder="Nama Siswa">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email
                                        Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="<?= $siswa['email']; ?>"
                                            class="form-control" id="email" placeholder="Email Siswa">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="kelas" id="kelas" class="form-control">
                                            <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['id_kelas']; ?>" <?php if ($siswa['kelas'] == $k['id_kelas']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $k['nama_kelas']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <select name="jurusan" id="jurusan" class="form-control">
                                            <?php foreach ($jurusan as $j) : ?>
                                            <option value="<?= $j['id_jurusan']; ?>" <?php if ($siswa['jurusan'] == $j['id_jurusan']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $j['nama_jurusan']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                                    <div class="col-sm-10">
                                        <select name="semester" id="semester" class="form-control">
                                            <option value="Satu" <?php if ($siswa['semester'] == "Satu") {
                                                                        echo "selected";
                                                                    } ?>>Satu</option>
                                            <option value="Dua" <?php if ($siswa['semester'] == "Dua") {
                                                                    echo "selected";
                                                                } ?>>Dua</option>
                                            <option value="Tiga" <?php if ($siswa['semester'] == "Tiga") {
                                                                        echo "selected";
                                                                    } ?>>Tiga</option>
                                            <option value="Empat" <?php if ($siswa['semester'] == "Empat") {
                                                                        echo "selected";
                                                                    } ?>>Empat</option>
                                            <option value="Lima" <?php if ($siswa['semester'] == "Lima") {
                                                                        echo "selected";
                                                                    } ?>>Lima</option>
                                            <option value="Enam" <?php if ($siswa['semester'] == "Enam") {
                                                                        echo "selected";
                                                                    } ?>>Enam</option>
                                        </select>
                                        <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" value="<?= $siswa['password']; ?>"
                                            class="form-control" id="namaguru" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                    <div class="col-sm-10">
                                        <select name="tingkat" id="tingkat" class="form-control">
                                            <option value="10" <?php if ($siswa['tingkat'] == "10") {
                                                                    echo "selected";
                                                                } ?>>10</option>
                                            <option value="11" <?php if ($siswa['tingkat'] == "11") {
                                                                    echo "selected";
                                                                } ?>>11</option>
                                            <option value="12" <?php if ($siswa['tingkat'] == "12") {
                                                                    echo "selected";
                                                                } ?>>12</option>
                                        </select>
                                        <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nisn" class="col-sm-2 col-form-label">N I S N</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nisn" value="<?= $siswa['nisn']; ?>"
                                            class="form-control" id="nisn" placeholder="N I S N">
                                        <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat" value="<?= $siswa['alamat']; ?>"
                                            class="form-control" id="alamat" placeholder="Alamat Siswa">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jk" id="jk" class="form-control">
                                            <option value="Laki-laki" <?php if ($siswa['jk'] == "Laki-laki") {
                                                                            echo "selected";
                                                                        } ?>>Laki-Laki</option>
                                            <option value="Perempuan" <?php if ($siswa['jk'] == "Perempuan") {
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
                                            <option value="Islam" <?php if ($siswa['agama'] == "Islam") {
                                                                        echo "selected";
                                                                    } ?>>Islam</option>
                                            <option value="Kristen Protestan" <?php if ($siswa['agama'] == "Kristen Protestan") {
                                                                                    echo "selected";
                                                                                } ?>>Kristen Protestan</option>
                                            <option value="Katolik" <?php if ($siswa['agama'] == "Katolik") {
                                                                        echo "selected";
                                                                    } ?>>Katolik</option>
                                            <option value="Hindu" <?php if ($siswa['agama'] == "Hindu") {
                                                                        echo "selected";
                                                                    } ?>>Hindu</option>
                                            <option value="Buddha" <?php if ($siswa['agama'] == "Buddha") {
                                                                        echo "selected";
                                                                    } ?>>Buddha</option>
                                            <option value="Konghucu" <?php if ($siswa['agama'] == "Konghucu") {
                                                                            echo "selected";
                                                                        } ?>>Konghucu</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tmptlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tmptlahir" value="<?= $siswa['tmptlahir']; ?>"
                                            class="form-control" id="tmptlahir" placeholder="Tempat Lahir">
                                        <?= form_error('tmptlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgllahir" value="<?= $siswa['tgllahir']; ?>"
                                            class="form-control" id="tgllahir" placeholder="Tanggal Lahir">
                                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="notelp" value="<?= $siswa['notelp']; ?>"
                                            class="form-control" id="notelp" placeholder="No Telepon">
                                        <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="thnajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="thnajaran" value="<?= $siswa['thnajaran']; ?>"
                                            class="form-control" id="thnajaran" placeholder="No Telepon">
                                        <?= form_error('thnajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->