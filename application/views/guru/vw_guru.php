<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Guru</h5>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>Guru/tambah" class="btn btn-primary">
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
                                    <th scope="col">NIP</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($guru as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['nip']; ?></td>
                                    <td><?= $us['alamat']; ?></td>
                                    <td><?= $us['notelp']; ?></td>
                                    <td>

                                        <a href="<?= base_url('Guru/detail/') . $us['id_guru']; ?>"
                                            class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                                        <a href="<?= base_url('Guru/edit/') . $us['id_guru']; ?>"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="hapusGuru(<?= $us['id_guru']; ?>)"><i
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
function hapusGuru(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data guru ini?")) {
        window.location.href = '<?= base_url('guru/hapus/') ?>' + id;
    }
}

function closeAlert() {
    document.querySelector(".alert").style.display = "none";
}
</script>