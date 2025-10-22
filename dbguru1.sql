-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2024 at 11:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbguru1`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `jurusan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nip`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `kelas`, `mapel`, `jurusan`) VALUES
(12, '5982659868', 'bapak', 'Laki-laki', '0878-05-08', '10', 'Ips', 'pplg'),
(26, '520708328', 'kiyah', 'Laki-laki', '2008-01-12', 'X', 'X', 'PPLG'),
(27, '520708328', 'kiyah', 'P', '2008-01-12', 'X', 'X', 'PPLG'),
(28, '08419481', 'fafhjfh', 'Laki-laki', '2024-06-11', '10', 'jjhh', 'bbb'),
(36, '141441', 'rrytetyedy', 'Laki-laki', '7678-08-06', 'hh', 'sdsd', 'fxfxf');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal`
--

CREATE TABLE `data_jadwal` (
  `id` int NOT NULL,
  `id_jadwal` varchar(15) NOT NULL,
  `jadwal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_jadwal`
--

INSERT INTO `data_jadwal` (`id`, `id_jadwal`, `jadwal`) VALUES
(8, 'weuwwe88888', 'bbbbbddd'),
(9, '2189618924', 'kkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id_jurusan` int NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `jurusan`) VALUES
(5, 'Rekayasa Perangkat Lunak'),
(10, 'Rekayasa Perangkat Lunak'),
(5588, 'Teknik Sepeda Motor'),
(40990, 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `data_mapel`
--

CREATE TABLE `data_mapel` (
  `id` int NOT NULL,
  `id_mapel` varchar(15) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_mapel`
--

INSERT INTO `data_mapel` (`id`, `id_mapel`, `mapel`) VALUES
(658672226, 'wei48r', '00');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id` int NOT NULL,
  `siswa` varchar(15) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `guru` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id`, `siswa`, `kelas`, `mapel`, `guru`, `nilai`) VALUES
(2, 'rio', 'j10', 'ipas', 'hhhh', '197187'),
(3, 'rangga', '12', 'mtk', 'pak rio', '100'),
(6, 'kandar', '', 'ipas', '', ''),
(7, 'kiyah', '', 'ipas', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_ruang`
--

CREATE TABLE `data_ruang` (
  `id` int NOT NULL,
  `id_kelas` varchar(15) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_ruang`
--

INSERT INTO `data_ruang` (`id`, `id_kelas`, `ruang`) VALUES
(1, '0', 'ruang 09'),
(2, '0', '7');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nisn`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `kelas`, `mapel`, `jurusan`, `tempat_lahir`, `alamat`) VALUES
(7, '7887', 'kiyah', 'Perempuan', '2008-01-12', '10', 'bindo', 'pplg', 'tasik', 'tasik'),
(8, '7887', 'kandar', 'Laki-laki', '2007-06-19', '10', 'bindo', 'pplg', 'bogor', 'tasik');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'siswa', 'siswa', 'siswa'),
(4, 'guru', 'guru', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `data_mapel`
--
ALTER TABLE `data_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_ruang`
--
ALTER TABLE `data_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  MODIFY `id_jurusan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4830893;

--
-- AUTO_INCREMENT for table `data_mapel`
--
ALTER TABLE `data_mapel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658672227;

--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_ruang`
--
ALTER TABLE `data_ruang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
