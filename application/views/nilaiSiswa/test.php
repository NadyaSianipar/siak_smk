<main id="main" class="main">

    <div class="pagetitle">
        <h1>Nilai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= ('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Nilai</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nilai</h5>
                        <p><a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank"></a><code></code>
                        </p>

                        <!-- Bordered Tabs -->

                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="sem1" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester1" type="button" role="tab"
                                    aria-controls="semester1" aria-selected="true">Semester 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester2-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester2" type="button" role="tab"
                                    aria-controls="semester2" aria-selected="false">Semester 2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester3-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester3" type="button" role="tab"
                                    aria-controls="semester3" aria-selected="false">Semester 3</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester4-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester4" type="button" role="tab"
                                    aria-controls="semester4" aria-selecterd="false">Semester 4</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester5-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester5" type="button" role="tab"
                                    aria-controls="semester5" aria-selected="false">Semester 5</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester6-tab" data-bs-toggle="tab"
                                    data-bs-target="#bordered-semester6" type="button" role="tab"
                                    aria-controls="semester6" aria-selected="false">Semester 6</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-semester1" role="tabpanel"
                                aria-labelledby="sem1">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</ <!-- vw_siswa.php -->

                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($nilai as $us) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $us['matapelajaran']; ?></td>
                                            <td><?= $us['nilaisiswa']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="bordered-semester2" role="tabpanel"
                                aria-labelledby="semester2-tab">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika</td>
                                            <td>90</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Fisika</td>
                                            <td>85</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kimia</td>
                                            <td>92</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="bordered-semester3" role="tabpanel"
                                aria-labelledby="semester3-tab">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Matematika</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Fisika</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kimia</td>
                                            <td>65</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="bordered-semester4" role="tabpanel"
                                aria-labelledby="semester4-tab">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="bordered-semester5" role="tabpanel"
                                aria-labelledby="semester5-tab">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="bordered-semester6" role="tabpanel"
                                aria-labelledby="semester6-tab">
                                <table class="table datatable">
                                    <!-- vw_siswa.php -->

                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Bordered Tabs -->
        </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->