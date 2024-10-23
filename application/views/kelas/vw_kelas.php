<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Kelas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kelas</h5>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>Kelas/tambah" class="btn btn-primary">
                                <i class="bi bi-plus-lg"></i> Tambah Data
                            </a>
                        </div>
                        <div class="col-sm-19">
                            <?php if ($this->session->flashdata('message')) : ?>
                            <div class="alert alert-dismissible fade show">
                                <?= $this->session->flashdata('message'); ?>

                            </div>
                            <?php endif; ?>
                        </div>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kelas </th>
                                    <th scope="col">Tingkat </th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Wali Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kelas as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama_kelas']; ?></td>
                                    <td><?= $us['tingkat']; ?></td>
                                    <td><?= $us['nama_jurusan']; ?></td>
                                    <td><?= $us['wali_kelas']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Kelas/edit/') . $us['id_kelas']; ?>"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="hapusKelas(<?= $us['id_kelas']; ?>)"><i
                                                class="bi bi-trash"></i></button>
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

<script>
function hapusKelas(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data kelas ini?")) {
        window.location.href = '<?= base_url('kelas/hapus/') ?>' + id;
    }
}

function closeAlert() {
    document.querySelector(".alert").style.display = "none";
}
</script>