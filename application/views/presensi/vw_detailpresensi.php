<main id="main" class="main">

    <div class="pagetitle">
        <h1>Halaman Data Presensi</h1>
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
            <form method="POST" action="<?= base_url('Presensi/submit') ?>">
                <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                <input type="hidden" name="tingkat" value="<?= $this->uri->segment(4) ?>">
                <input type="hidden" name="semester" value="<?= $this->uri->segment(5) ?>">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Presensi</h5>
                        <?php if ($this->session->flashdata('alert_message')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('alert_message'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <?php
                                for($i = 1; $i <= 20; $i++):
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
                                <td>
                                    <?= $us['nama']; ?>
                                    <input type="hidden" name="id_presensi[<?= $us['id_siswa'] ?>]"
                                        value="<?= $us['id_presensi'] ?>">
                                </td>
                                <?php
                                for($i = 1; $i <= 20; $i++):
                                ?>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input"
                                            <?= in_array($i,json_decode($us['pertemuan'] ?? '[]')) ? 'checked' : null  ?>
                                            name="presensi[<?=$us['id_siswa']?>][]" type="checkbox"
                                            id="gridCheck<?=$i?>" value="<?=$i?>" title="pertemuan <?=$i?>">
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

                        <!-- End Table with stripped rows -->

                        <div class="modal-footer">
                            <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        </div>
    </section>

</main><!-- End #main -->