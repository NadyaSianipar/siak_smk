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
                        <h5 class="card-title">Data Jadwal Pelajaran</h5>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>Pelajaran/tambah" class="btn btn-primary">
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
                                    <th scope="col">Nama Pelajaran</th>
                                    <th scope="col">Guru Pengampu</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Kelas yang diampu</th>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Jam Mulai</th>
                                    <th scope="col">Jam Selesai</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pelajaran as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['mapel']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['tingkat']; ?></td>
                                    <td><?= $us['nama_kelas']; ?></td>
                                    <td><?= $us['hari']; ?></td>
                                    <td><?= $us['jammasuk']; ?></td>
                                    <td><?= $us['jamselesai']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Pelajaran/edit/') . $us['id_jadwal']; ?>"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="hapusPelajaran(<?= $us['id_jadwal']; ?>)"><i
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
function hapusPelajaran(id) {
    if (confirm("Apakah Anda yakin ingin menghapus pelajaran ini?")) {
        window.location.href = '<?= base_url('pelajaran/hapus/') ?>' + id;
    }
}

function closeAlert() {
    document.querySelector(".alert").style.display = "none";
}
</script>