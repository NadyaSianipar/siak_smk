-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `password`, `nama`, `nip`, `notelp`) VALUES
(1, '0192023a7bbd73250516f069df18b500', 'admin', '123456', '082378786');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `tmptlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `password`, `nama`, `nip`, `alamat`, `jk`, `agama`, `tmptlahir`, `tgllahir`, `notelp`, `gambar`) VALUES
(1, '20ae4938ec460b3f864271770c56b311', 'Laudya Rajagukguk', '12354', 'Hutalontung', 'Perempuan', 'Kristen Protestan', 'Hutalontung', '2023-05-24', '12345689', '7ddc74e8fc1f6dbc1e00de782f48fb8d.jpeg'),
(2, '0cb737462ac3f26e17167328432f702a', 'Nadya', '9876', 'Jl. ki', 'Perempuan', 'Kristen Protestan', 'makasar', '2012-12-03', '08435627273', ''),
(7, '98d9fe0cc50e577f7d642f2ad808d3c5', 'Nadia Aritonang1', '388888', 'Hutalontung', 'Perempuan', 'Kristen Protestan', 'Hutalontung', '2023-05-03', '12345689', '62b5ce9b160275fe1adab61f9ac57afc.png'),
(12, 'laudia', 'nanad', '388888', 'wfewa', 'Perempuan', 'Kristen Protestan', 'Bandung', '2003-06-02', '082267053759', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpelajaran`
--

CREATE TABLE `jadwalpelajaran` (
  `id_jadwal` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_guru` int(100) NOT NULL,
  `tingkat` enum('10','11','12') NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jammasuk` time NOT NULL,
  `jamselesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwalpelajaran`
--

INSERT INTO `jadwalpelajaran` (`id_jadwal`, `id_kelas`, `id_mapel`, `id_guru`, `tingkat`, `hari`, `jammasuk`, `jamselesai`) VALUES
(29, 11, 1, 1, '10', 'Senin', '07:00:00', '08:00:00'),
(30, 12, 2, 1, '11', 'Selasa', '07:00:00', '08:00:00'),
(34, 11, 8, 2, '11', 'Rabu', '07:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jenissurat`
--

CREATE TABLE `jenissurat` (
  `id_jenis` int(10) NOT NULL,
  `judul_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenissurat`
--

INSERT INTO `jenissurat` (`id_jenis`, `judul_surat`) VALUES
(1, 'Surat Pengunduran Diri'),
(2, 'Surat Keterangan Pindah/Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(2, 'MESIN'),
(8, 'TKJ'),
(11, 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `jurusan` int(100) NOT NULL,
  `wali_kelas` int(100) NOT NULL,
  `tingkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`, `wali_kelas`, `tingkat`) VALUES
(11, 'MESIN A', 2, 1, 11),
(12, 'MESIN B', 2, 1, 12),
(24, 'MESIN C', 2, 7, 10),
(35, 'RPL A', 8, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id_kp` int(225) NOT NULL,
  `id_perusahaan` int(10) DEFAULT NULL,
  `id_siswa` int(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namaperusahaan` varchar(100) DEFAULT NULL,
  `bidangkerja` varchar(100) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `tmptlahir` varchar(100) DEFAULT NULL,
  `tgllahir` varchar(100) DEFAULT NULL,
  `notelp` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`id_kp`, `id_perusahaan`, `id_siswa`, `email`, `namaperusahaan`, `bidangkerja`, `tgl_mulai`, `tgl_selesai`, `tmptlahir`, `tgllahir`, `notelp`, `alamat`, `file`, `keterangan`, `status`) VALUES
(26, 102, 46, 'nadiarajagukguk054@gmail.com', 'Media Utama', 'Web Developer', '2023-06-06', '2023-06-06', 'Hutalontung', '2003-06-02', '082267053759', 'Hutalontung', '4f39643871cb9a713862821e9459bacf.pdf', 'yayaya', 'Selesai'),
(27, 101, 46, 'nadiarajagukguk054@gmail.com', 'Inovindo Web', 'Front End', '2023-06-12', '2023-06-28', 'Hutalontung', '2003-06-02', '082267053759', 'Hutalontung', '108dd3b236933737600462ab842499e0.pdf', 'sakit', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `layananakademik`
--

CREATE TABLE `layananakademik` (
  `id_surat` int(10) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `namasurat` varchar(100) NOT NULL,
  `tglpengajuan` date NOT NULL,
  `file` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layananakademik`
--

INSERT INTO `layananakademik` (`id_surat`, `namasiswa`, `email`, `namasurat`, `tglpengajuan`, `file`, `keterangan`, `status`) VALUES
(1, 'Audy', 'nadiarajagukguk054@gmail.com', 'surat sakit', '2023-06-06', '', 'yayaya', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(10) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris'),
(3, 'Matematika'),
(5, 'Bdd'),
(8, 'Bahasa Jerman');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nilaisiswa` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL,
  `tahunajaran` varchar(100) NOT NULL,
  `tingkat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_mapel`, `id_kelas`, `nilaisiswa`, `semester`, `tahunajaran`, `tingkat`) VALUES
(133, 46, 1, 11, '80', 1, '2024', 11),
(134, 46, 1, 11, '90', 2, '2023', 11);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(10) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `bidang` text NOT NULL,
  `alamat_p` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `namaperusahaan`, `bidang`, `alamat_p`) VALUES
(101, 'Inovindo Web', 'Web Developer,Front End,Back End', 'bandung'),
(102, 'Media Utama', 'Grafik Design,Web Developer,Animasi', 'tasik');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `pertemuan` longtext NOT NULL,
  `semester` varchar(100) NOT NULL,
  `tahunajaran` int(11) NOT NULL,
  `tingkat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_kelas`, `id_siswa`, `pertemuan`, `semester`, `tahunajaran`, `tingkat`) VALUES
(25, 24, 46, '[\"1\",\"2\",\"4\",\"5\"]', '1', 2023, 10),
(26, 24, 46, '[\"3\",\"4\",\"5\"]', '2', 2023, 10),
(28, 24, 40, '[\"6\",\"9\"]', '', 2023, 10),
(29, 12, 46, '[\"1\",\"2\"]', '1', 2023, 12),
(30, 24, 39, '[\"1\",\"2\",\"3\",\"4\"]', '', 2023, 10),
(31, 11, 46, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\"]', '1', 2023, 11),
(32, 11, 46, '[\"1\",\"2\",\"3\",\"4\"]', '2', 2023, 11);

-- --------------------------------------------------------

--
-- Table structure for table `proseskp`
--

CREATE TABLE `proseskp` (
  `id_proseskp` int(11) NOT NULL,
  `surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prosesly`
--

CREATE TABLE `prosesly` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` int(100) NOT NULL,
  `jurusan` int(100) NOT NULL,
  `semester` enum('Satu','Dua','Tiga','Empat','Lima','Enam') NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Konghucu') NOT NULL,
  `tmptlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `thnajaran` varchar(20) NOT NULL,
  `tingkat` int(20) NOT NULL,
  `status` enum('lulus','tidak lulus') NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `pekerjaan_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `password`, `nama`, `kelas`, `jurusan`, `semester`, `nisn`, `email`, `alamat`, `jk`, `agama`, `tmptlahir`, `tgllahir`, `notelp`, `thnajaran`, `tingkat`, `status`, `gambar`, `nama_ortu`, `alamat_ortu`, `pekerjaan_ortu`) VALUES
(46, 'e89b626a614c79121a5fbdef26d43613', 'Nadia Aritonang', 11, 2, 'Dua', '2055301102', 'nadiarajagukguk054@gmail.com', 'Hutalontung', 'Perempuan', 'Kristen Protestan', 'Hutalontung', '2003-06-02', '082267053759', '2023', 10, 'lulus', '3efc1f2ad0168e04695936b3b12cbdaf.jpeg', '', '', ''),
(47, 'laudia1', 'Laudya Rajagukguk2', 24, 2, 'Dua', '12345', 'rajagukguk20to@mahasiswa.pcr.ac.id', 'Bandung', 'Perempuan', 'Kristen Protestan', 'Bandung', '2003-06-02', '082267053759', '2023', 10, 'lulus', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(10) NOT NULL,
  `id_siswa` int(12) NOT NULL,
  `tmptlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_p` int(11) NOT NULL,
  `jenis_surat` enum('Surat Pengunduran Diri','Surat Keterangan Pindah/Keluar') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'proses',
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_siswa`, `tmptlahir`, `tgllahir`, `alamat`, `notelp`, `email`, `tanggal_p`, `jenis_surat`, `keterangan`, `status`, `file`) VALUES
(17, 46, 'Hutalontung', '2003-06-02', 'Hutalontung', '082267053759', 'nadiarajagukguk054@gmail.com', 2003, 'Surat Keterangan Pindah/Keluar', 'yayaya', 'Selesai', '3c574fb0649ea9f534efe357dcaf9675.pdf'),
(18, 46, 'Hutalontung', '2003-06-02', 'Hutalontung', '082267053759', 'nadiarajagukguk054@gmail.com', 2023, 'Surat Pengunduran Diri', 'yayaya', 'Selesai', '803e1674c05ad3ddfdee56d49329b5ee.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal` (`id_guru`),
  ADD KEY `kelas` (`id_kelas`);

--
-- Indexes for table `jenissurat`
--
ALTER TABLE `jenissurat`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `jurusan1` (`jurusan`),
  ADD KEY `wali_kelas` (`wali_kelas`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id_kp`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `layananakademik`
--
ALTER TABLE `layananakademik`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `namasiswa` (`id_siswa`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `proseskp`
--
ALTER TABLE `proseskp`
  ADD PRIMARY KEY (`id_proseskp`);

--
-- Indexes for table `prosesly`
--
ALTER TABLE `prosesly`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `jurusan` (`jurusan`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `id_kp` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `layananakademik`
--
ALTER TABLE `layananakademik`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `proseskp`
--
ALTER TABLE `proseskp`
  MODIFY `id_proseskp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prosesly`
--
ALTER TABLE `prosesly`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwalpelajaran`
--
ALTER TABLE `jadwalpelajaran`
  ADD CONSTRAINT `jadwal` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `jadwalpelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `jurusan1` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `wali_kelas` FOREIGN KEY (`wali_kelas`) REFERENCES `guru` (`id_guru`);

--
-- Constraints for table `kp`
--
ALTER TABLE `kp`
  ADD CONSTRAINT `kp_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `jurusan` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
