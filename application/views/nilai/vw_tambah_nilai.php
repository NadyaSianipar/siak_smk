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
                    <?php if ($this->session->flashdata('alert_message')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('alert_message'); ?>
    </div>
<?php endif; ?>



                    <!-- Table with stripped rows -->
                     <form action="<?= base_url('Nilai/simpan') ?>" method="post">
                     <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                     <input type="hidden" name="id_mapel" value="<?= $this->uri->segment(4) ?>">
                     <input type="hidden" name="semester" value="<?= $this->uri->segment(6) ?>">
                     <input type="hidden" name="tingkat" value="<?= $this->uri->segment(5) ?>">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>      
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($nilai as $us) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['nama']; ?></td>
                                <td>
                                     <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="hidden" name="id_nilai[]" value="<?= $us['id_nilai'] ?>">
                                        <input type="number" name="nilaisiswa[]" value="<?= $us['nilaisiswa'] ?>" class="form-control">
                                        </div>
                                        </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="modal-footer">
                                    <button type="submit" name="simpan "
                                    class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                    <!-- End Table with stripped rows -->    
    </section>
<script>
    function showModalNilai(){
        $('#presensi-modal').modal('show');
        console.log("masuk")
    }
</script>
</main><!-- End #main -->