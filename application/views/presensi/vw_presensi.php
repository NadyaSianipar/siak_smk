<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Data Presensi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
        </div>
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Presensi</h5>
                    <?php if ($this->session->flashdata('alert_message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('alert_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>


                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($presensi as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama_kelas']; ?></td>
                                <td><?= $us['tingkat']; ?></td>
                                <td>
                                    <a href="<?= base_url('presensi/siswa/'.$us['id_kelas'].'/'.$us['tingkat']) ?>/1"
                                        type="button" class="btn btn-secondary">
                                        <i class="ri-number-1"></i>
                                    </a>
                                    <a href="<?= base_url('presensi/siswa/'.$us['id_kelas'].'/'.$us['tingkat']) ?>/2"
                                        type="button" class="btn btn-secondary">
                                        <i class="ri-number-2"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->