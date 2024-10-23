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

                            <form>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama
                                        Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_kelas" value="<?= $kelas['nama_kelas']; ?>"
                                            class="form-control" id="nama_kelas" placeholder="Nama Kelas">
                                        <?= form_error('nama_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                    <div class="col-sm-10">
                                        <select name="tingkat" id="tingkat" class="form-control">
                                            <option value="10" <?php if ($kelas['tingkat'] == "10") {
                                                                    echo "selected";
                                                                } ?>>10</option>
                                            <option value="11" <?php if ($kelas['tingkat'] == "11") {
                                                                    echo "selected";
                                                                } ?>>11</option>
                                            <option value="12" <?php if ($kelas['tingkat'] == "12") {
                                                                    echo "selected";
                                                                } ?>>12</option>
                                        </select>
                                        <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <select name="jurusan" id="jurusan" class="form-control">
                                            <?php foreach ($jurusan as $j) : ?>
                                            <option value="<?= $j['id_jurusan']; ?>" <?php if ($kelas['jurusan'] == $j['id_jurusan']) {
                                                                                            echo "selected";
                                                                                        } ?>><?= $j['nama_jurusan']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="wali_kelas" class="col-sm-2 col-form-label">Wali Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="wali_kelas" id="wali_kelas" class="form-control">
                                            <?php foreach ($guru as $g) : ?>
                                            <option value="<?= $g['id_guru']; ?>" <?php if ($kelas['wali_kelas'] == $g['id_guru']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $g['nama']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('wali_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->