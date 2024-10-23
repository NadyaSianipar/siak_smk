<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">SENIN <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($senin as $sen) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $sen['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">SELASA <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($selasa as $sel) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $sel['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">RABU <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($rabu as $rab) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $rab['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


               <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">KAMIS<span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($kamis as $kam) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $kam['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>
                  </div>

                </div>
              </div>

            </div>
                    </div>
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">JUMAT <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($jumat as $jum) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $jum['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">SABTU <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar2-event-fill"></i>
                    </div>
                    <div class="ps-3">
                    <?php foreach ($sabtu as $sab) : ?>
                                        <li> <span class="text-success small pt-1 fw-bold"><?= $sab['mapel']; ?></span> <span
                                                class="text-muted small pt-2 ps-1"></span> </li>
                                        <?php endforeach; ?>

                    </div>
                  </div>
                </div>

              </div>
            </div>

            

            </div>
          </div>
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!--div class="col-lg-8">
            
        </div>--><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->