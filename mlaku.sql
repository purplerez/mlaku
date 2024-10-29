-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 29, 2024 at 01:16 AM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int NOT NULL,
  `sepatu_id` int NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  `main` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `sepatu_id`, `file_gambar`, `main`) VALUES
(1, 1, '6_8fa2ed1d-87a7-420a-bb89-81a8804a2f5f_1080x.webp', '0'),
(2, 3, 'SizeCartAceNovaSquare_2_bdd8ab5c-79f0-4195-8bb1-524c7ce09e0d_1080x.webp', '0'),
(3, 3, '4_1_1080x.webp', '0'),
(4, 3, 'wqwsswdqwd_1080x.webp', '0'),
(5, 1, '1_2_ec165fe3-b2a6-4cbf-9244-e60d66fde1f9_1080x.webp', '0'),
(6, 8, '1_1.webp', '0'),
(7, 8, '1_3.webp', '0'),
(8, 8, '1_4.webp', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Formal'),
(2, 'Non-Formal'),
(3, 'Sport'),
(4, 'Sandal');

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `jenis` int NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `nama`, `ukuran`, `harga`, `jenis`, `deskripsi`) VALUES
(1, 'SEPATU BARU', '30,32,34,35,37,40,42', 300000, 3, 'edit edit edit'),
(3, 'VULCAN WHITE ', '30,31,32,35,42', 500000, 2, 'DESKRIPSI VULCAN WHITE');

-- --------------------------------------------------------

--
-- Table structure for table `sepatu_gambar`
--

CREATE TABLE `sepatu_gambar` (
  `id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ukuran` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `jenis` int NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sepatu_gambar`
--

INSERT INTO `sepatu_gambar` (`id`, `nama`, `ukuran`, `harga`, `jenis`, `deskripsi`, `gambar`) VALUES
(1, 'Active Krakatau Magma Red', '32,39,40', 500000, 3, '11Active Krakatau\r\n\r\n&quot;Rise &amp; Run&quot;\r\n\r\nHidup sehat diawali bukan saat kamu meniatkannya tapi pada saat kamu memulainya. Rise and start running with Active Krakatau. Sepatu lari terbaru Brodo, masuk ke kategori lightweight trainer, dirancang lebih ringan membuat lari lebih nyaman. Keempukan midsole diatur agak bisa mendapatkan kombinasi antara nyaman dan energy return yang cukup buat pemula. Drop 6mm untuk membantu para pelari pemula terutama heel striker.\r\n\r\n\r\nSpesifikasi Produk :\r\nUpper: Single Mesh\r\nUpper reinforcement: TPU Nosew\r\nRooster Beak: TPU Welded, Reflective\r\nLining: Faux Suede\r\nTongue: Faux Suede\r\nLaces: Flat Polyester Laces\r\nInsole: Multifoam\r\nWeight: 240 gr (size 41)\r\nDrop : 6mm\r\nHeel Stack height: 26 mm\r\nForefoot Stack height: 20 mm\r\nDistance up to 10k', 'img_2.webp'),
(2, 'Ventura Full Black', '30,31,32,33,34,35', 685000, 1, 'Ventura Full Black\r\n\r\n“Unleash Your Inner Explorer”\r\n\r\nMembangunkan jiwa terpendam, membangkitkan hati dari gelap malam. Fajar menyongsong hari, langkah harus dimulai hari ini. Lepaskan asa petualang dengan Ventura tersemat erat pada kaki. Sebagai teman langkah menjelajah hal baru, hidupkan lagi semangat baru.\r\n\r\n\r\n\r\nSpesifikasi Produk :\r\n\r\nUpper : Nappa Leather\r\n\r\nLining : Soft Poly Mesh\r\n\r\nShoe Lace : Round Waxed Cotton Laces\r\n\r\nConstruction : Cementing Press + Alliance Stitch\r\n\r\nOutsole : Brodo TPR Parang 1,5 Outsole\r\n\r\nInsole : Cut Eva Insole\r\n\r\nDecoration : Brodo Heel Emboss Logo', '1.webp'),
(3, 'Signore Low Dark Choco BS', '30,34,35,36', 615000, 1, 'Signore Low Dark Choco BS', '2.webp'),
(4, 'Signore Dark Choco BS', '30,31,32,33,34,35', 685000, 1, 'Signore Dark Choco BS', '3 dark.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepatu_gambar`
--
ALTER TABLE `sepatu_gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sepatu_gambar`
--
ALTER TABLE `sepatu_gambar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
