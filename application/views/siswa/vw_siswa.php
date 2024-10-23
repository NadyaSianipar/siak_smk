<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Siswa</h5>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>Siswa/tambah" class="btn btn-primary">
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
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Tahun Ajaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($siswa as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td><?= $us['nisn']; ?></td>
                                    <td><?= $us['alamat']; ?></td>
                                    <td><?= $us['notelp']; ?></td>
                                    <td><?= $us['thnajaran']; ?></td>
                                    <td>

                                        <a href="<?= base_url('Siswa/detail/') . $us['id_siswa']; ?>"
                                            class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                                        <a href="<?= base_url('Siswa/edit/') . $us['id_siswa']; ?>"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="hapusSiswa(<?= $us['id_siswa']; ?>)"><i
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
function hapusSiswa(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data siswa ini?")) {
        window.location.href = '<?= base_url('siswa/hapus/') ?>' + id;
    }
}

function closeAlert() {
    document.querySelector(".alert").style.display = "none";
}
</script>