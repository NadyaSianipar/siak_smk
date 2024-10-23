<main id="main" class="main">

    <div class="pagetitle">
        <h1>Pengajuan Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Home</a></li>
                <li class="breadcrumb-item active">Surat Layanan Akademik</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Riwayat Permohonan</h5>
            <a href="<?= base_url('SuratSiswa/kirim') ?>" type="button" class="btn btn-primary"
                style="float: right;">Pengajuan
                Surat</a>

            <!-- Table with hoverable rows -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Nama Surat</th>
                        <th scope="col">Tanggal Pengajuan</th>
                        <th scope="col">Status</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($surat as $us) : ?>
                    <tr>
                        <td> <?= $i; ?></td>

                        <td> <?= $us['jenis_surat']; ?></td>
                        <td> <?= $us['tanggal_p']; ?></td>
                        <td> <?= $us['status']; ?></td>
                        <td>
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#presensi-modal-<?= $i ?>">
                                <i class="bi bi-info"></i>
                            </button>

                            <!-- Presensi Details Modal -->

                            <div class="modal fade" id="presensi-modal-<?= $i ?>" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail Pengajuan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-4">

                                                    Nama Surat <br />
                                                    Email <br />
                                                    Tanggal Pengajuan <br />
                                                    Status
                                                </div>
                                                <div class="col-sm-8">

                                                    : <?= $us['jenis_surat'] ?><br />
                                                    : <?= $us['email'] ?><br />
                                                    : <?= $us['tanggal_p'] ?><br />
                                                    : <?= $us['status'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Presensi Details Modal -->
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>
</main>