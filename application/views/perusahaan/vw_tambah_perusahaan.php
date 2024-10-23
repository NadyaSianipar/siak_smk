<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Tambah Data Perusahaan</h1>
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
                        <h5 class="card-title">Form Perusahaan</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="namaperusahaan" class="col-sm-2 col-form-label">Nama
                                        Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="namaperusahaan"
                                            value="<?= set_value('namaperusahaan') ?>" class="form-control"
                                            id="namaperusahaan" placeholder="Nama Perusahaan">
                                        <?= form_error('namaperusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bidang" class="col-sm-2 col-form-label">Bidang Kerja</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="bidang" value="<?= set_value('bidang') ?>"
                                            class="form-control" id="bidang" placeholder="Bidang Kerja">
                                        <?= form_error('bidang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat_p" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="alamat_p" value="<?= set_value('alamat_p') ?>"
                                            class="form-control" id="alamat_p" placeholder="Alamat Perusahaan">
                                        <?= form_error('alamat_p', '<small class="text-danger pl-3">', '</small>'); ?>
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