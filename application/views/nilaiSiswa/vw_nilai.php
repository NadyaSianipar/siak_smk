<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Data Nilai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Nilai</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>


              <!-- Default Tabs -->
              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill active" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/10-1')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '10-1' ? 'active': null ?> " type="button" role="tab" aria-controls="home" aria-selected="true">Semester 1</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/10-2')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '10-2' ? 'active': null ?> "  type="button" role="tab" aria-controls="profile" aria-selected="false">Semester 2</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/11-1')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '11-1' ? 'active': null ?> "  type="button" role="tab" aria-controls="contact" aria-selected="false">Semester 3</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/11-2')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '11-2' ? 'active': null ?> "  type="button" role="tab" aria-controls="contact" aria-selected="false">Semester 4</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/12-1')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '12-1' ? 'active': null ?> "  type="button" role="tab" aria-controls="contact" aria-selected="false">Semester 5</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <a href="<?= base_url('NilaiSiswa/filterBySemester/12-2')?>" class="nav-link w-100 <?= $this->uri->segment(3) == '12-2' ? 'active': null ?> "  type="button" role="tab" aria-controls="contact" aria-selected="false">Semester 6</a>
                </li>
              </ul>

              <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Mata Pelajaran</th>
                      <th scope="col">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nilai as $us) : ?>
                      <tr>
                        <td><?= $i; ?></td>
                        <td><?= $us['mapel']; ?></td>
                        <td><?= $us['nilaisiswa']; ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
          </div>

</main><!-- End #main -->