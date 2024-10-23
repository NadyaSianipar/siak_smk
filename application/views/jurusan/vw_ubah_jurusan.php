<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Ubah Data Jurusan</h1>
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
                        <h5 class="card-title">Form Jurusan</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama_jurusan" class="col-sm-2 col-form-label">Nama
                                        Jurusan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_jurusan"
                                            value="<?= $jurusan['nama_jurusan']; ?>" class="form-control"
                                            id="nama_jurusan" placeholder="Nama Jurusan">
                                        <?= form_error('nama_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->