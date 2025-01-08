-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 02:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Lawang Sewu', 'Ini adalah foto saya saat mengunjungi Lawang Sewu bersama teman SMP saya yang bernama Puput. Sudah lama kami tidak bertemu, terakhir kali adalah saat kami masih di bangku SMP. Kini, Puput sedang berkuliah di UNNES, dan akhirnya kami merencanakan untuk bertemu dan bermain bersama.', '6 oktober_3.jpg', '2024-10-06 13:00:52', 'admin'),
(2, 'Merajut', 'Pada hari Minggu tanggal 24 Agustus, akhirnya saya bisa menyelesaikan projek merajut saya. Saya membuat tote bag berukuran 43x34 cm yang berwarna abu tua, ini adalah tas pertama saya yang saya rajut sendiri, saya mengerjakannya selama 2 minggu.', '24 agustus.jpg', '2024-08-24 12:01:31', 'admin'),
(3, 'Foto Masa Kecil', 'Ini adalah foto saya saat masih kecil mungkin sekitar umur 3 tahun, foto ini diambil oleh bapak saya.', 'foto_kecil.jpg', '2009-02-13 19:01:31', 'admin'),
(4, 'Foto Pemandangan', 'Ini adalah foto yang saya ambil dari dalam kereta api yang saya tumpangi dalam perjalanan dari Semarang ke Tegal. Saya mengabadikan momen ini karena pemandangan gunung yang menakjubkan begitu memikat. Keindahan alamnya, dengan latar belakang langit biru dan pepohonan hijau, membuat saya tidak bisa melewatkan kesempatan untuk mengcapture keindahan ini.', '5 juli_1.jpg', '2024-07-05 18:21:38', 'admin'),
(11, 'Photo Booth', 'Ini adalah photo booth saya bersama teman-teman saya yaitu Lili dan Azmi di Queen City. ', '20241213160033.jpg', '2024-12-13 16:06:46', 'admin'),
(12, 'Self Photo Studio', 'Ini adalah foto saya bersama Shazia dan Rani. Kami melakukan self photo studio di Origin yang berada di Mall Paragon. ', '20241213161310.jpg', '2024-12-13 16:13:22', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `tanggal`, `gambar`, `username`) VALUES
(1, '', '2023-05-12 19:01:31', 'sma.jpg', '0'),
(2, '', '2014-11-11 10:00:26', 'sd.jpg', '0'),
(3, '', '2024-10-06 13:00:31', '6 oktober.jpg', '0'),
(4, '', '2024-07-05 07:00:38', '5 juli.jpg', '0'),
(10, 'Foto Dinus Inside', '2025-01-03 22:48:35', '20250103224835.jpg', 'admin'),
(11, 'Basis Data', '2025-01-03 22:49:18', '20250103224918.jpg', 'admin'),
(12, 'Kucing', '2025-01-03 22:49:44', '20250103224944.jpg', 'admin'),
(13, 'Foto booth', '2025-01-03 22:50:44', '20250103225044.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20250104003959.jpg'),
(2, 'danny', '21232f297a57a5a743894a0e4a801fc3', '20250104005509.png'),
(4, 'eky', '068f0a86b2887cddb31ee4b19c5319bf', '20250104011423.jpg'),
(5, 'handy', 'b43e90725456100d28dff031d301f98c', '20250104013116.jpg'),
(6, 'george', 'd109e3a98ec2cb372313a97e216d79ef', '20250104013312.jpg'),
(7, 'woody', 'da41bceff97b1cf96078ffb249b3d66e', '20250104013513.jpg'),
(8, 'mr.bean', 'f1a991821c018290bd4f2ab128f14eb7', '20250104013948.jpg'),
(9, 'shinchan', '3c12f8a2fd7d6875b45994f23676c7bd', '20250104014036.jpg'),
(13, 'lili', '8ad777442a5b2aaa51758ca44b26416b', '20250106173740.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
