<!--Akademik.php -->
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Permohonan Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home'); ?>">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row"></div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Layanan Akademik</h5>
                    <?php if ($this->session->flashdata('success_message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('success_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error_message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('error_message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                </div>
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Email Siswa</th>
                            <th scope="col">Nama Surat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($surat as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['jenis_surat']; ?></td>
                            <td>
                                <?php if ($us['status'] == 'Selesai') : ?>
                                <button type="button" class="btn btn-success rounded-pill selesai-button"
                                    style="font-size: 12px; padding: 5px 10px;">Selesai</button>
                                <?php  elseif ($us['status'] == 'Ditolak') : ?>
                                <button type="button" class="btn btn-danger rounded-pill tolak-button" disabled
                                    style="font-size: 12px; padding: 5px 10px;">Ditolak</button>
                                <?php  else : ?>
                                <button data-bs-toggle="modal"
                                    data-bs-target="#verticalycentered_<?= $us['id_surat']; ?>" type="button"
                                    class="btn btn-warning rounded-pill diproses-button"
                                    style="font-size: 12px; padding: 5px 10px;">Diproses</button>
                                <button type="button" class="btn btn-danger rounded-pill tolak-button"
                                    data-surat-id="<?= $us['id_surat']; ?>"
                                    style="font-size: 12px; padding: 5px 10px;">Ditolak</button>
                                <?php endif; ?>

                                <!-- Vertically centered Modal -->
                                <div class="modal fade" id="verticalycentered_<?= $us['id_surat']; ?>" tabindex="-1">
                                    <form action="<?= base_url('Akademik/simpan/' . $us['id_surat']); ?>" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Kirim</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="file" class="form-label">Upload Surat</label>
                                                        <input type="file" name="file" class="form-control" id="file"
                                                            placeholder="Upload Surat">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" name="email" value="<?= $us['email']; ?>"
                                                            class="form-control" id="email" placeholder="Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="keterangan" class="form-label">Keterangan</label>
                                                        <input type="text" name="keterangan" class="form-control"
                                                            id="keterangan" placeholder="Keterangan">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
<script>
$(document).ready(function() {
    <?php if ($this->session->flashdata('message')) : ?>
    alert("<?php echo $this->session->flashdata('message'); ?>");
    <?php endif; ?>

    // Meng-handle klik tombol "Ditolak"
    $('.tolak-button').click(function() {
        var suratId = $(this).data('surat-id');
        var confirmation = confirm("Apakah Anda yakin memberikan status data ini menjadi 'Ditolak'?");

        if (confirmation) {
            window.location.href = "<?= base_url('Akademik/tolak/'); ?>" + suratId;
        }
    });

    // Memeriksa status untuk menyembunyikan tombol "Selesai" dan "Diproses" jika status adalah "Ditolak"
    $('.table tbody tr').each(function() {
        var status = $(this).find('.status').text();
        var suratId = $(this).find('.tolak-button').data('surat-id');

        if (status === 'Ditolak') {
            $(this).find('.selesai-button').hide();
            $(this).find('.diproses-button').hide();
            $(this).find('.tolak-button').prop('disabled', true);
        }
    });
});
</script>