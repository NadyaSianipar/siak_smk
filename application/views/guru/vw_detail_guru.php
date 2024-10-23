<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Data Guru</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item">Profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= base_url('assets/img/profil/') . $guru['gambar']; ?>" alt="Profile" class="rounded-circle">
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Detail Data Guru</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Detail Data Guru</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['nama']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Password</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['password']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">N I P</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['nip']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Alamat</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['alamat']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['jk']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Agama</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['agama']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['tmptlahir']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['tgllahir']; ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">No Telepon</div>
                                <div class="col-lg-9 col-md-8"><?= $guru['notelp']; ?></div>
                            </div>
                        </div>


                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">



                    </div>



                </div>

            </div><!-- End Bordered Tabs -->

        </div>
        </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->