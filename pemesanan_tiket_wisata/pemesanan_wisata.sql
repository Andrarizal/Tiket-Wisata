-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_wisata`
--

CREATE TABLE `daftar_wisata` (
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tipe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`nama`, `foto`, `harga`, `id`, `video`, `tipe`) VALUES
('Museum', 'taman.jpg', 10000, 1, 'https://www.youtube.com/embed/Dl7dvHABhlU', 'video'),
('Pantai', 'pantai.jpg', 15000, 2, 'https://www.youtube.com/embed/z_eYMOBpyF0', 'gambar'),
('Taman Nasional', 'wayang2.jpg', 20000, 3, 'https://www.youtube.com/embed/mbqlrz4G93A', 'video');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_id` varchar(20) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `kelas_wisata` varchar(255) NOT NULL,
  `tanggal_kunjungan` date DEFAULT NULL,
  `jml_pengunjung_dewasa` int(11) NOT NULL,
  `jml_pengunjung_anak` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `no_id`, `hp`, `kelas_wisata`, `tanggal_kunjungan`, `jml_pengunjung_dewasa`, `jml_pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(44, 'Andra Aulia Rizaldy', '1212345312341241', '123414134134', 'pantai', '2022-08-24', 5, 1, 200000, 980000),
(49, 'Andra', '3872817298172897', '212122222222', 'pantai', '2022-10-12', 2, 4, 10000, 40000),
(50, 'Andra', '3872817298172897', '212122222222', 'museum', '2022-10-13', 12, 2, 20000, 260000),
(51, 'Andra', '3232323221212121', '212122222222', 'pantai ', '2022-10-11', 2, 3, 50000, 175000),
(52, 'Andra', '3232323221212121', '212122222222', 'pantai ', '2022-10-11', 2, 3, 50000, 175000),
(53, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-04', 2, 3, 50000, 175000),
(54, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-04', 2, 3, 50000, 175000),
(55, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-04', 2, 3, 50000, 175000),
(56, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-04', 2, 3, 50000, 175000),
(57, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-12', 23, 3, 50000, 1225000),
(58, 'Andra', '3872817298172897', '212122222222', 'pantai ', '2022-10-26', 23, 1, 50000, 1175000),
(59, 'Andra', '3872817298172897', '212122222222', 'museum XYZ', '2022-11-04', 2, 3, 50000, 175000),
(60, 'Andra', '3872817298172897', '212122222222', 'pantai ', '0000-00-00', 2, 3, 50000, 175000),
(61, 'Andra', '3872817298172897', '212122222222', 'museum XYZ', '0000-00-00', 10, 0, 100000, 10000),
(62, 'Andra', '3232323221212121', '212122222222', 'taman nasional', '0000-00-00', 1, 1, 75000, 50000),
(63, 'Andra', '3232323221212121', '212122222222', 'taman nasional', '2022-10-24', 1, 1, 75000, 50000),
(64, 'Andra', '3872817298172897', '212122222222', 'taman nasional', '2022-11-04', 2, 4, 200000, 50000),
(65, 'Andra', '3232323221212121', '212122222222', 'museum XYZ', '2022-10-06', 99, 999, 5985000, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
