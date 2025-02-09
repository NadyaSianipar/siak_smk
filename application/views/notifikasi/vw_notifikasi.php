<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
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
                    <h5 class="card-title">Data Notifikasi</h5>
                </div>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($notifikasi as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['namasiswa']; ?></td>
                            <td><?= $us['deskripsi']; ?></td>
                            <td>
                                <button type="button" class="btn btn-info"><i class="bi bi-info-circle"></i></button>
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