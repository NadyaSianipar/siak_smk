<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Data Nilai</h1>
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
                    <h5 class="card-title">Data Nilai</h5>
                    <div class="col-sm-19">
                            <?php if ($this->session->flashdata('message')) : ?>
                            <div class="alert alert-dismissible fade show">
                                <?= $this->session->flashdata('message'); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>      
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($nilai as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['mapel']; ?></td>
                                <td>
                                    <a href="<?= base_url('Nilai/kelas/'.$us['id_mapel']) ?>" type="button" class="btn btn-secondary">
                                        <i class="bi bi-info"></i>
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

</main><!-- End #main -->