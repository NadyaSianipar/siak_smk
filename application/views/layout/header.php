<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIAK SMK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link href="<?php echo base_url(); ?>assets/img/logo.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?php echo base_url(); ?>https://fonts.gstatic.com" rel="preconnect">
    <link
        href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= ('Dashboard') ?>" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">SIAK SMK</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

            </ul><!-- End Profile Dropdown Items -->

            </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <?php
            if ($this->session->userdata('role') == 'guru') {
                ?>
            <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                <img src=<?= base_url('assets/img/profil/') . $profil['gambar']; ?> width="150px" align-items="center"
                    alt="Profil" class="rounded-circle">
            </li><!-- End Profil Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Profil') ?>">
                    <i class="bi bi-p"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('DashboardG') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Navigasi Dashboard -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Presensi') ?>">
                    <i class="bi bi-question-circle"></i>
                    <span>Presensi</span>
                </a>
            </li><!-- End Navigasi Presensi -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Nilai') ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Nilai</span>
                </a>
            </li><!-- End Navigasi Nilai -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Login') ?>">
                    <i class="bi bi-dash-circle"></i>
                    <span>Log Out</span>
                </a>
            </li><!-- End Navigasi Log Out -->
            <?php

        }
        else if ($this->session->userdata('role') == 'admin') {
            ?>
            <?php
            $admin = $this->db->get('admin')->row_array();
            ?>
            <!-- Divider -->
            <li class="nav-item">
                <img src="<?= base_url('assets/img/admin.jpeg') ?>" alt="Profil" width="150px"
                    style="display: block; margin: 0 auto;" class="rounded-circle">
                <div style="text-align: center;">
                    <?php if (isset($admin['nama'])) : ?>
                    <span style="font-weight: bold; color: #012970;">
                        <?= $admin['nama']; ?>
                    </span>
                    <?php endif; ?>
                </div>
                <div style="text-align: center;">
                    <?php if (isset($admin['nip'])) : ?>
                    <span style="font-weight: bold; color: #012970;">
                        <?= $admin['nip']; ?>
                    </span>
                    <?php endif; ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Dashboard') ?>">
                    <i class="ri-user-2-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Siswa') ?>">
                    <i class="ri-user-2-fill"></i>
                    <span>Data Siswa</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Guru') ?>">
                    <i class="ri-user-2-fill"></i>
                    <span>Data Guru</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Jurusan') ?>">
                    <i class="ri-file-paper-2-fill"></i>
                    <span>Data Jurusan</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Kelas') ?>">
                    <i class="ri-file-paper-2-fill"></i>
                    <span>Data Kelas</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Perusahaan') ?>">
                    <i class="ri-government-fill"></i>
                    <span>Data Perusahaan</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Mapel') ?>">
                    <i class="ri-git-repository-fill"></i>
                    <span>Data Mata Pelajaran</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Pelajaran') ?>">
                    <i class="ri-git-repository-fill"></i>
                    <span>Data Jadwal Pelajaran</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Datakp') ?>">
                    <i class="ri-folders-fill"></i>
                    <span>Data Kerja Praktik</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Akademik') ?>">
                    <i class="ri-folder-2-fill"></i>
                    <span>Data Layanan Akademik</span>
                </a>
            </li><!-- End Login Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Login') ?>">
                    <i class="ri-logout-box-fill"></i>
                    <span>Log Out</span>
                </a>
            </li><!-- End Error 404 Page Nav -->
            <?php

        }
        else if ($this->session->userdata('role') == 'siswa') {
            ?>
            <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                <img src=<?= base_url('assets/img/profil/') . $profil['gambar']; ?> width="150px" align-items="center"
                    alt="Profil" class="rounded-circle">
            </li><!-- End Profil Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('ProfilSiswa') ?>">
                    <i class="bi bi-person"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('DashboardSiswa') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Navigasi Dashboard -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('PresensiSiswa/filterByTingkat/10-1') ?>">
                    <i class="bi bi-question-circle"></i>
                    <span>Presensi</span>
                </a>
            </li><!-- End Navigasi Presensi -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('NilaiSiswa/filterBySemester/10-1') ?>">
                    <i class="bi bi-envelope"></i>
                    <span>Nilai</span>
                </a>
            </li><!-- End Navigasi Nilai -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('SuratSiswa') ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Layanan Akademik</span>
                </a>
            </li><!-- End Navigasi Layanan Akademik -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('PklSiswa') ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Kerja Praktek</span>
                </a>
            </li><!-- End Navigasi Kerja Praktek -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Login/logout') ?>">
                    <i class="bi bi-dash-circle"></i>
                    <span>Log Out</span>
                </a>
            </li><!-- End Navigasi Log Out -->
            <?php

        }
        ?>
        </ul>
    </aside><!-- End Sidebar -->