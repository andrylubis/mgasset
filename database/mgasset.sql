-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 08:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgasset`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_bangunan`
--

CREATE TABLE `t_bangunan` (
  `id` int(35) NOT NULL,
  `jenis_bangunan` varchar(30) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `id_bangunan` varchar(30) NOT NULL,
  `no_rumah` varchar(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kepala_keluarga` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `tahun_bangunan` varchar(50) NOT NULL,
  `nama_lengkap1` varchar(35) NOT NULL,
  `nama_lengkap2` varchar(35) NOT NULL,
  `nama_lengkap3` varchar(35) NOT NULL,
  `nama_lengkap4` varchar(35) NOT NULL,
  `nama_lengkap5` varchar(35) NOT NULL,
  `nik_1` int(50) NOT NULL,
  `nik_2` int(50) NOT NULL,
  `nik_3` int(50) NOT NULL,
  `nik_4` int(50) NOT NULL,
  `nik_5` int(50) NOT NULL,
  `pekerjaan_1` varchar(35) NOT NULL,
  `pekerjaan_2` varchar(35) NOT NULL,
  `pekerjaan_3` varchar(35) NOT NULL,
  `pekerjaan_4` varchar(35) NOT NULL,
  `pekerjaan_5` varchar(35) NOT NULL,
  `jenis_kelamin_1` varchar(20) NOT NULL,
  `jenis_kelamin_2` varchar(20) NOT NULL,
  `jenis_kelamin_3` varchar(20) NOT NULL,
  `jenis_kelamin_4` varchar(20) NOT NULL,
  `jenis_kelamin_5` varchar(20) NOT NULL,
  `status_hubungan_1` varchar(20) NOT NULL,
  `status_hubungan_2` varchar(20) NOT NULL,
  `status_hubungan_3` varchar(20) NOT NULL,
  `status_hubungan_4` varchar(20) NOT NULL,
  `status_hubungan_5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_bangunan`
--

INSERT INTO `t_bangunan` (`id`, `jenis_bangunan`, `owner`, `id_bangunan`, `no_rumah`, `lokasi`, `alamat`, `kepala_keluarga`, `status`, `tahun_bangunan`, `nama_lengkap1`, `nama_lengkap2`, `nama_lengkap3`, `nama_lengkap4`, `nama_lengkap5`, `nik_1`, `nik_2`, `nik_3`, `nik_4`, `nik_5`, `pekerjaan_1`, `pekerjaan_2`, `pekerjaan_3`, `pekerjaan_4`, `pekerjaan_5`, `jenis_kelamin_1`, `jenis_kelamin_2`, `jenis_kelamin_3`, `jenis_kelamin_4`, `jenis_kelamin_5`, `status_hubungan_1`, `status_hubungan_2`, `status_hubungan_3`, `status_hubungan_4`, `status_hubungan_5`) VALUES
(1, 'Rumah', 'Abdul Rojak', '09809', '234234', 'asdasd', 'asd', 'Rojak Kodir', 'Aktif', 'asd', 'asd', 'asd', 'asdasd', 'asd', 'asd', 1231, 123, 123, 123, 123, 'asdasd', 'asd', 'asd', 'asd', 'asd', 'asdasd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdasd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `t_foto_bangunan`
--

CREATE TABLE `t_foto_bangunan` (
  `id` int(20) NOT NULL,
  `id_t_bangunan` int(20) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_foto_bangunan`
--

INSERT INTO `t_foto_bangunan` (`id`, `id_t_bangunan`, `foto`, `deskripsi`) VALUES
(1, 1, 'IMG_20170407_075202 - Elis Dalam.jpg', 'polijkm'),
(2, 1, 'IMG_20170407_075243 - Elis Kamar.jpg', 'lkjhg'),
(3, 2, 'keyboard-computer.jpg', 'keyboard'),
(7, 1, 'IMG_20170407_075456 - Yanti N Dalam.jpg', 'Yanti dalam');

-- --------------------------------------------------------

--
-- Table structure for table `t_karyawan`
--

CREATE TABLE `t_karyawan` (
  `id` int(50) NOT NULL,
  `no_induk` int(50) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `point_of_hire` varchar(20) NOT NULL,
  `perusahaan` varchar(35) NOT NULL,
  `no_rumah` varchar(35) NOT NULL,
  `lokasi` text NOT NULL,
  `status` varchar(35) NOT NULL,
  `tgl_masuk_mg` date NOT NULL,
  `tgl_akhir_kontrak` date NOT NULL,
  `departemen` varchar(35) NOT NULL,
  `status_karyawan` varchar(35) NOT NULL,
  `alamat_tinggal` text NOT NULL,
  `alamat_ktp` text NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` int(30) NOT NULL,
  `telp_emergency` int(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `no_ktp` int(35) NOT NULL,
  `masa_berlaku_ktp` varchar(35) NOT NULL,
  `sim_jenis` varchar(5) NOT NULL,
  `no_sim` int(35) NOT NULL,
  `tgl_berakhir_sim` date NOT NULL,
  `tinggi_badan` int(15) NOT NULL,
  `berat_badan` int(35) NOT NULL,
  `npwp` int(35) NOT NULL,
  `no_jamsostek` varchar(35) NOT NULL,
  `no_rekening` int(35) NOT NULL,
  `nama_bank` varchar(35) NOT NULL,
  `atas_nama_bank` varchar(35) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `fak_jurusan` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL,
  `perusahaan1` text NOT NULL,
  `perusahaan2` text NOT NULL,
  `perusahaan3` text NOT NULL,
  `perusahaan4` text NOT NULL,
  `perusahaan5` text NOT NULL,
  `jabatan1` text NOT NULL,
  `jabatan2` text NOT NULL,
  `jabatan3` text NOT NULL,
  `jabatan4` text NOT NULL,
  `jabatan5` text NOT NULL,
  `tahun1` varchar(50) NOT NULL,
  `tahun2` varchar(50) NOT NULL,
  `tahun3` varchar(50) NOT NULL,
  `tahun4` varchar(50) NOT NULL,
  `tahun5` varchar(50) NOT NULL,
  `namakeluarga1` varchar(35) NOT NULL,
  `namakeluarga2` varchar(35) NOT NULL,
  `namakeluarga3` varchar(35) NOT NULL,
  `namakeluarga4` varchar(35) NOT NULL,
  `namakeluarga5` varchar(35) NOT NULL,
  `hubungankeluarga1` varchar(35) NOT NULL,
  `hubungankeluarga2` varchar(35) NOT NULL,
  `hubungankeluarga3` varchar(35) NOT NULL,
  `hubungankeluarga4` varchar(35) NOT NULL,
  `hubungankeluarga5` varchar(35) NOT NULL,
  `tgl_lahir_keluarga1` varchar(35) NOT NULL,
  `tgl_lahir_keluarga2` varchar(35) NOT NULL,
  `tgl_lahir_keluarga3` varchar(35) NOT NULL,
  `tgl_lahir_keluarga4` varchar(35) NOT NULL,
  `tgl_lahir_keluarga5` varchar(35) NOT NULL,
  `jenis_kelamin_keluarga1` varchar(35) NOT NULL,
  `jenis_kelamin_keluarga2` varchar(35) NOT NULL,
  `jenis_kelamin_keluarga3` varchar(35) NOT NULL,
  `jenis_kelamin_keluarga4` varchar(35) NOT NULL,
  `jenis_kelamin_keluarga5` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_karyawan`
--

INSERT INTO `t_karyawan` (`id`, `no_induk`, `nama_lengkap`, `jabatan`, `point_of_hire`, `perusahaan`, `no_rumah`, `lokasi`, `status`, `tgl_masuk_mg`, `tgl_akhir_kontrak`, `departemen`, `status_karyawan`, `alamat_tinggal`, `alamat_ktp`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `telp_emergency`, `agama`, `golongan_darah`, `no_ktp`, `masa_berlaku_ktp`, `sim_jenis`, `no_sim`, `tgl_berakhir_sim`, `tinggi_badan`, `berat_badan`, `npwp`, `no_jamsostek`, `no_rekening`, `nama_bank`, `atas_nama_bank`, `pendidikan_terakhir`, `nama_sekolah`, `fak_jurusan`, `tahun_lulus`, `perusahaan1`, `perusahaan2`, `perusahaan3`, `perusahaan4`, `perusahaan5`, `jabatan1`, `jabatan2`, `jabatan3`, `jabatan4`, `jabatan5`, `tahun1`, `tahun2`, `tahun3`, `tahun4`, `tahun5`, `namakeluarga1`, `namakeluarga2`, `namakeluarga3`, `namakeluarga4`, `namakeluarga5`, `hubungankeluarga1`, `hubungankeluarga2`, `hubungankeluarga3`, `hubungankeluarga4`, `hubungankeluarga5`, `tgl_lahir_keluarga1`, `tgl_lahir_keluarga2`, `tgl_lahir_keluarga3`, `tgl_lahir_keluarga4`, `tgl_lahir_keluarga5`, `jenis_kelamin_keluarga1`, `jenis_kelamin_keluarga2`, `jenis_kelamin_keluarga3`, `jenis_kelamin_keluarga4`, `jenis_kelamin_keluarga5`) VALUES
(1, 1245, 'Andry', 'Web Developer', 'poh', 'asdasd', '234324', 'wssfdsdf', 'Aktif', '2017-06-01', '2017-06-14', 'Marketing', 'Tetap', 'Jalan Jalan', 'Jalan KTP', 'Laki-Laki', 'Medan', '2017-06-03', 754587756, 13316469, 'Islam', 'O', 56418941, 'Seumur hidup', 'C', 2147483647, '2017-06-23', 170, 60, 2147483647, '2342134234', 4564564, 'Bank Indonesia', 'Andryl', 'Sarjana', 'UNIKOM', 'Sistem Komputer', '2015', 'Info Jasa Website', 'HostIJW', 'Top Hosting ID', 'TM Creative & Communication', 'Good Indonesian Food', 'Jr. Web Programmer', 'Web Developer', 'Web Developer & Project Manager', 'Web Developer', 'Sr. Digital Technology Developer', '2011', '2013', '2014', '2016', '2017', 'IL', 'EL', 'NSL', 'rfgfdhfg', 'dfgdfgdfg', 'Ayah', 'Ibu', 'Anak 1', 'gdghd', 'werrfsdf', '12483', '42773', '', '456456', '3245345', 'Laki-Laki', 'Perempuan', 'Laki-Laki', 'Laki-Laki', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_bangunan`
--
ALTER TABLE `t_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_foto_bangunan`
--
ALTER TABLE `t_foto_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_karyawan`
--
ALTER TABLE `t_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_bangunan`
--
ALTER TABLE `t_bangunan`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_foto_bangunan`
--
ALTER TABLE `t_foto_bangunan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_karyawan`
--
ALTER TABLE `t_karyawan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
