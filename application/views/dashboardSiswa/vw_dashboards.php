<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Senin Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Senin</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($senin as $sen) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $sen['mapel']; ?></span>
                                            <span class="text-muted small pt-2 ps-1">12</span>
                                        </li>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Senin Card -->

                    <!-- Selasa Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Selasa</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Selasa Card -->

                    <!-- Rabu Card -->
                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Rabu</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Kamis Card -->

                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Kamis</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Kamis Card -->

                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Jumat</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                        <li> <span class="text-success small pt-1 fw-bold">MTK</span> <span
                                                class="text-muted small pt-2 ps-1">12</span> </li>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Rabu Card -->

                    <div class="col-xxl-4 col-md-6">

                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Sabtu</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6></h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Sabtu Card -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Rata - Rata Nilai</h5>

                                <!-- Bar Chart -->
                                <div id="barChart" style="min-height: 400px;" class="echart"></div>

                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#barChart")).setOption({
                                        xAxis: {
                                            type: 'category',
                                            data: <?= json_encode($chartnilai['label']) ?>,
                                        },
                                        yAxis: {
                                            type: 'value'
                                        },
                                        series: [{
                                            data: <?= json_encode($chartnilai['value']) ?>,
                                            label: {
                                                show: true,
                                                position: 'top',
                                                color: "black",
                                                formatter: function(d) {
                                                    return d.data;
                                                }
                                            },
                                            type: 'bar'
                                        }]
                                    });
                                });
                                </script>
                                <!-- End Bar Chart -->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kehadiran</h5>

                                <!-- Pie Chart -->
                                <canvas id="pieChart" style="max-height: 400px;"></canvas>
                                <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                            labels: <?= json_encode($chartpresensi['label']) ?>,
                                            datasets: [{
                                                label: 'Total Kehadiran',
                                                data: <?= json_encode($chartpresensi['value']) ?>,
                                                backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(51, 255, 51)',
                                                    'rgb(0, 255, 255)',
                                                    'rgb(127, 0, 255)'
                                                ],
                                                hoverOffset: 4
                                            }]
                                        }
                                    });
                                });
                                </script>
                                <!-- End Pie CHart -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->