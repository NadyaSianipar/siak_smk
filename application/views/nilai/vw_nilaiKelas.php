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
                            <?php foreach ($nilai as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama_kelas']; ?></td>
                                <td><?= $us['tingkat']; ?></td>
                                <td>
                                    <a href="<?= base_url('Nilai/tambah/'.$us['id_kelas'].'/'.$us['id_mapel'].'/'.$us['tingkat']) ?>/1" type="button" class="btn btn-secondary">
                                    <i class="ri-number-1"></i>
                            </a>
                                     <a href="<?= base_url('Nilai/tambah/'.$us['id_kelas'].'/'.$us['id_mapel'].'/'.$us['tingkat']) ?>/2." type="button" class="btn btn-secondary">
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

</main><!-- End #main -->