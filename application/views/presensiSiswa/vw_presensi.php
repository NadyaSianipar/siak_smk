<main id="main" class="main">

    <div class="pagetitle">
        <h1>Presensi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('DashboardSiswa') ?>">Home</a></li>
                <li class="breadcrumb-item active">Presensi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>


            <!-- Default Tabs -->
            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill active" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/10-1') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '10-1' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="home" aria-selected="true">Semester 1</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/10-2') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '10-2' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="profile" aria-selected="false">Semester 2</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/11-1') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '11-1' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Semester 3</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/11-2') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '11-2' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Semester 4</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/12-1') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '12-1' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Semester 5</a>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <a href="<?= base_url('PresensiSiswa/filterByTingkat/12-2') ?>"
                        class="nav-link w-100 <?= $this->uri->segment(3) == '12-2' ? 'active' : null ?> " type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Semester 6</a>
                </li>
                           
            </ul>

            <!-- Table with stripped rows -->
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <?php
                        for ($i = 1; $i <= 20; $i++) :
                        ?>
                        <th scope="col"><?= $i ?></th>
                        <?php
                        endfor;
                        ?>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($presensi as $us) : ?>
                <tr>
                    <td><?= $no; ?>. </td>
                    <?php
                    for ($i = 1; $i <= 20; $i++) :
                    ?>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input"
                                <?= in_array($i, json_decode($us['pertemuan'] ?? '[]')) ? 'checked' : null ?>
                                name="presensi[<?= $us['id_siswa'] ?>][]" type="checkbox" disabled
                                id="gridCheck<?= $i ?>" value="<?= $i ?>" title="pertemuan <?= $i ?>">
                        </div>
                    </td>
                    <?php
                    endfor;
                    ?>


                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>