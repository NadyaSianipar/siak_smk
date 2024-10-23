<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Tambah Data Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Data Siswa</h5>
                        <form action="" method="POST">

                            <!-- General Form Elements -->
                            <form>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama
                                        Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" value="<?= set_value('nama') ?>"
                                            class="form-control" id="nama" placeholder="Nama Siswa">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email
                                        Siswa</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" value="<?= set_value('email') ?>"
                                            class="form-control" id="email" placeholder="Email Siswa">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" value="<?= set_value('password') ?>"
                                            class="form-control" id="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                                    <div class="col-sm-10">
                                        <select name="jurusan" id="jurusan" value="<?= set_value('jurusan') ?>"
                                            class="form-control">
                                            <option value="">Pilih Jurusan</option>
                                            <?php foreach ($jurusan as $j) : ?>
                                            <option value="<?= $j['id_jurusan']; ?>"><?= $j['nama_jurusan']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                    <textarea id="kelas_json" hidden><?= json_encode($kelas) ?></textarea>
                                    <div class="col-sm-10">
                                        <select name="kelas" id="kelas" value="<?= set_value('kelas') ?>"
                                            class="form-control">
                                            <option value="">Pilih Kelas</option>
                                            <!-- di isi dri js --->
                                        </select>
                                        <!-- Menampilkan pesan error jika jurusan tidak dipilih -->
                                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                                    <div class="col-sm-10">
                                        <select name="semester" value="<?= set_value('semester') ?>" id="semester"
                                            class=" form-control">
                                            <option value="">Pilih Semester</option>
                                            <option value="Satu">Satu</option>
                                            <option value="Dua">Dua</option>
                                            <option value="Tiga">Tiga</option>
                                            <option value="Empat">Empat</option>
                                            <option value="Lima">Lima</option>
                                            <option value="Enam">Enam</option>
                                        </select>
                                        <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                    <div class="col-sm-10">
                                        <select name="tingkat" value="<?= set_value('tingkat') ?>" id="tingkat"
                                            class=" form-control">
                                            <option value="">Pilih Tingkat</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <?= form_error('tingkat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nisn" class="col-sm-2 col-form-label">N I S N</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="nisn" value="<?= set_value('nisn') ?>"
                                            class="form-control" id="nisn" placeholder="N I S N">
                                        <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="alamat" name="alamat" value="<?= set_value('alamat') ?>"
                                            class="form-control" id="alamat" placeholder="Alamat">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select name="jk" value="<?= set_value('jk') ?>" id="jk" class="form-control">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jk" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select name="agama" value="<?= set_value('agama') ?>" id="agama"
                                            class=" form-control">
                                            <option value="">Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                        <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tmptlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tmptlahir" value="<?= set_value('tmptlahir') ?>"
                                            class="form-control" id="tmptlahir" placeholder="Tempat Lahir">
                                        <?= form_error('tmptlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tgllahir" value="<?= set_value('tgllahir') ?>"
                                            class="form-control" id="tgllahir" placeholder="Tanggal Lahir">
                                        <?= form_error('tgllahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="notelp" class="col-sm-2 col-form-label">No Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="notelp" value="<?= set_value('notelp') ?>"
                                            class="form-control" id="notelp" placeholder="No Telepon">
                                        <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="thnajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="thnajaran" value="<?= set_value('thnajaran') ?>"
                                            class="form-control" id="thnajaran" placeholder="Tahun Ajaran">
                                        <?= form_error('thnajaran', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    $(document).ready(function() {
        $('#jurusan').on('change', function() {
            jurusan = $(this).val();
            kelas = JSON.parse($('#kelas_json').val());

            console.log(kelas);
            option = "";
            kelas.map(function(item) {
                if (item.id_jurusan == jurusan) {
                    option +=
                        `<option value="${item.id_kelas}">${item.nama_kelas}</option>`;
                }
            })

            $('#kelas').html(option);



        });
    });
    </script>