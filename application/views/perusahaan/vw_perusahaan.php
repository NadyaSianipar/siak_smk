<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Perusahaan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Perusahaan</h5>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>Perusahaan/tambah" class="btn btn-primary">
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


                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Bidang </th>
                                    <th scope="col">Alamat Perusahaan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($perusahaan as $us) : ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $us['namaperusahaan']; ?></td>
                                    <td><?= $us['bidang']; ?></td>
                                    <td><?= $us['alamat_p']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Perusahaan/edit/') . $us['id_perusahaan']; ?>"
                                            class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-danger"
                                            onclick="hapusPerusahaan(<?= $us['id_perusahaan']; ?>)"><i
                                                class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<script>
function hapusPerusahaan(id) {
    if (confirm("Apakah Anda yakin ingin menghapus perusahaan ini?")) {
        window.location.href = '<?= base_url('perusahaan/hapus/') ?>' + id;
    }

    function closeAlert() {
        document.querySelector(".alert").style.display = "none";
    }
}
</script>