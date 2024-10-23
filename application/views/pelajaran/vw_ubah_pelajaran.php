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
                        <h5 class="card-title">Form Pelajaran</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="id_mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <select name="id_mapel" id="id_mapel" class="form-control">
                                            <?php foreach ($mapel as $m) : ?>
                                            <option value="<?= $m['id']; ?>" <?php if ($pelajaran['id_mapel'] == $m['id']) {
                                                                                    echo "selected";
                                                                                } ?>><?= $m['mapel']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_mapel', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="id_guru" class="col-sm-2 col-form-label">Guru Pengampu</label>
                                    <div class="col-sm-10">
                                        <select name="id_guru" id="id_guru" class="form-control">
                                            <?php foreach ($guru as $g) : ?>
                                            <option value="<?= $g['id_guru']; ?>" <?php if ($pelajaran['id_guru'] == $g['id_guru']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $g['nama']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_guru', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                    <div class="col-sm-10">
                                        <select name="tingkat" id="tingkat" class="form-control">
                                            <option value="10" <?php if ($pelajaran['tingkat'] == "10") {
                                                                    echo "selected";
                                                                } ?>>10</option>
                                            <option value="11" <?php if ($pelajaran['tingkat'] == "11") {
                                                                    echo "selected";
                                                                } ?>>11</option>
                                            <option value="12" <?php if ($pelajaran['tingkat'] == "12") {
                                                                    echo "selected";
                                                                } ?>>12</option>

                                        </select>
                                        <?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="id_kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <select name="id_kelas" id="id_kelas" class="form-control">
                                            <?php foreach ($kelas as $k) : ?>
                                            <option value="<?= $k['id_kelas']; ?>" <?php if ($pelajaran['id_kelas'] == $k['id_kelas']) {
                                                                                        echo "selected";
                                                                                    } ?>><?= $k['nama_kelas']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                    <div class="col-sm-10">
                                        <select name="hari" id="hari" class="form-control">
                                            <option value="Senin" <?php if ($pelajaran['hari'] == "Senin") {
                                                                        echo "selected";
                                                                    } ?>>Senin</option>
                                            <option value="Selasa" <?php if ($pelajaran['hari'] == "Selasa") {
                                                                        echo "selected";
                                                                    } ?>>Selasa</option>
                                            <option value="Rabu" <?php if ($pelajaran['hari'] == "Rabu") {
                                                                        echo "selected";
                                                                    } ?>>Rabu</option>
                                            <option value="Kamis" <?php if ($pelajaran['hari'] == "Kamis") {
                                                                        echo "selected";
                                                                    } ?>>Kamis</option>
                                            <option value="Jumat" <?php if ($pelajaran['hari'] == "Jumat") {
                                                                        echo "selected";
                                                                    } ?>>Jumat</option>
                                            <option value="Sabtu" <?php if ($pelajaran['hari'] == "Sabtu") {
                                                                        echo "selected";
                                                                    } ?>>Sabtu</option>
                                        </select>
                                        <?= form_error('hari', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jammasuk" class="col-sm-2 col-form-label">Jam Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jammasuk" value="<?= $pelajaran['jammasuk']; ?>"
                                            class="form-control" id="jammasuk" placeholder="Jam Masuk">
                                        <?= form_error('jammasuk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jamselesai" class="col-sm-2 col-form-label">Jam Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" name="jamselesai" value="<?= $pelajaran['jamselesai']; ?>"
                                            class="form-control" id="jamselesai" placeholder="Jam Selesai">
                                        <?= form_error('jamselesai', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->