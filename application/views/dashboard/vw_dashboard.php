<main id="main" class="main">

    <div class="pagetitle mb-5">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xxl-4 col-md-6">
                    <a href="<?= base_url('Siswa') ?>">
                        <div class="card info-card sales-card" style="width: 100%; max-width: 400px;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="font-size: 60px; width: 100px; height: 100px;">
                                        <i class="ri-group-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Data Siswa</h6>

                                        <button type="button" class="btn btn-primary btn-sm mb-2">
                                            Jumlah <span class="badge bg-white text-primary"><?= $total_siswa ?>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Sales Card -->

                <!-- Revenue Card -->
                </style>
                <div class="col-xxl-4 col-md-6">
                    <a href="<?= base_url('Guru') ?>">
                        <div class="card info-card revenue-card" style="width: 100%; max-width: 400px;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="font-size: 60px; width: 100px; height: 100px;">
                                        <i class="ri-user-2-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Data Guru</h6>
                                        <button type="button" class="btn btn-success btn-sm mb-2">
                                            Jumlah <span class="badge bg-white text-success"><?= $total_guru ?>
                                            </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12 mb-5">
                    <a href="<?= base_url('Jurusan') ?>">
                        <div class=" card info-card customers-card" style="width: 100%; max-width: 400px;">
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                        style="font-size: 60px; width: 100px; height: 100px;">
                                        <i class="ri-file-list-fill"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Data Jurusan</h6>
                                        <button type="button" class="btn btn-warning btn-sm mb-2">
                                            Jumlah <span class="badge bg-white text-warning"><?= $total_jurusan ?>
                                            </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div><!-- End Customers Card -->

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <a href="<?= base_url('Kelas') ?>">
                                <div class="card info-card sales-card" style="width: 100%; max-width: 400px;">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                style="font-size: 60px; width: 100px; height: 100px;">
                                                <i class="ri-group-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>Data Kelas</h6>

                                                <button type="button" class="btn btn-primary btn-sm mb-2">
                                                    Jumlah <span class="badge bg-white text-primary"><?= $total_kelas ?>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Sales Card -->

                        <!-- Revenue Card -->
                        </style>
                        <div class="col-xxl-4 col-md-6">
                            <a href="<?= base_url('Perusahaan') ?>">
                                <div class="card info-card revenue-card" style="width: 100%; max-width: 400px;">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                style="font-size: 60px; width: 100px; height: 100px;">
                                                <i class="ri-user-2-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>Data Perusahaan</h6>
                                                <button type="button" class="btn btn-success btn-sm mb-2">
                                                    Jumlah <span
                                                        class="badge bg-white text-success"><?= $total_perusahaan ?>
                                                    </span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12 mb-5">
                            <a href="<?= base_url('Mapel') ?>">
                                <div class=" card info-card customers-card" style="width: 100%; max-width: 400px;">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                style="font-size: 60px; width: 100px; height: 100px;">
                                                <i class="ri-file-list-fill"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>Data Mata Pelajaran</h6>
                                                <button type="button" class="btn btn-warning btn-sm mb-2">
                                                    Jumlah <span class="badge bg-white text-warning"><?= $total_mapel ?>
                                                    </span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div><!-- End Customers Card -->

                        <!-- Left side columns -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-xxl-4 col-md-6">
                                    <a href="<?= base_url('Pelajaran') ?>">
                                        <div class="card info-card sales-card" style="width: 100%; max-width: 400px;">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                        style="font-size: 60px; width: 100px; height: 100px;">
                                                        <i class="ri-group-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>Data Jadwal Pelajaran</h6>

                                                        <button type="button" class="btn btn-primary btn-sm mb-2">
                                                            Jumlah <span
                                                                class="badge bg-white text-primary"><?= $total_pelajaran ?>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Sales Card -->

                                <!-- Revenue Card -->
                                </style>
                                <div class="col-xxl-4 col-md-6">
                                    <a href="<?= base_url('Datakp') ?>">
                                        <div class="card info-card revenue-card" style="width: 100%; max-width: 400px;">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                        style="font-size: 60px; width: 100px; height: 100px;">
                                                        <i class="ri-user-2-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>Data Kerja Praktik</h6>
                                                        <button type="button" class="btn btn-success btn-sm mb-2">
                                                            Jumlah <span
                                                                class="badge bg-white text-success"><?= $total_kp ?>
                                                            </span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Revenue Card -->

                                <!-- Customers Card -->
                                <div class="col-xxl-4 col-xl-12 mb-5">
                                    <a href="<?= base_url('Akademik') ?>">
                                        <div class=" card info-card customers-card"
                                            style="width: 100%; max-width: 400px;">
                                            <div class="card-body">
                                                <h5 class="card-title"></h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                                                        style="font-size: 60px; width: 100px; height: 100px;">
                                                        <i class="ri-file-list-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>Data Layanan Akademik</h6>
                                                        <button type="button" class="btn btn-warning btn-sm mb-2">
                                                            Jumlah <span
                                                                class="badge bg-white text-warning"><?= $total_akademik ?>
                                                            </span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div><!-- End Customers Card -->






                            </div>
                        </div>

    </section>

</main><!-- End #main -->