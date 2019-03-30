-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2019 at 09:29 AM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_pondok`
--

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nama`, `email`, `gender`, `password`, `created_at`, `updated_at`) VALUES
(6, 'Andi', 'andi@gmail.com', 1, '$2y$10$8xeHknpeQrBNsq/oB7cT6.dYtb7heGaaQK62lX400sG0r4zUP6OxK', '2019-03-26 21:35:43', '2019-03-26 21:35:43'),
(7, 'Oka', 'oka@gmail.com', 0, '$2y$10$iSlIsTEajHnogB4j6xvlbuHTTTj5kNA5Rak7iANjOtID4HNONRtKm', '2019-03-26 21:37:15', '2019-03-26 21:37:15'),
(8, 'Lexandra', 'admin@gmail.com', 0, '$2y$10$0rH8lqgjP3HHlNy0j8fztOqmn/FJmkFEfA5vjoviH05eXDtFsS3zy', '2019-03-26 21:37:37', '2019-03-26 21:37:37'),
(9, 'Suryo Widiyanto Gumelar', 'suryo@widi.com', 0, '$2y$10$ADWAZRnbkhyNN0OEb/bsqeHWbOE15v8LTf6Jjbnfs/w2lY/MrC6pu', '2019-03-26 22:34:46', '2019-03-26 22:34:46'),
(10, 'Lexandra', 'waras@gmail.com', 0, '$2y$10$qe2/f/Z/5kfqBPSf5gsKzuD24S7GTQxluqHga9HafdHpe2lY.XGK6', '2019-03-26 22:53:07', '2019-03-26 22:53:07'),
(11, 'ako', 'anonim@gmail.com', 0, '$2y$10$s/hXYHsuEpyVtV7he4wQe.ZiUjcZwTDRf14yX0To8tZdL.NMMGVvS', '2019-03-26 22:53:21', '2019-03-26 22:53:21'),
(12, 'ako', 'anonim@gmail.com', 0, '$2y$10$aCCCPhLI.zyjlwc.5G4Truf0e4COg4iC5DW.F4OpRz6dCk4ty6nAW', '2019-03-26 22:53:22', '2019-03-26 22:53:22'),
(13, 'oslo', 'lexa@gmail.com', 0, '$2y$10$L2FsVdtHZvta6pRqMh3CQep8FcnaqAmWuLg5y7kmpwDiJLn5cnBIG', '2019-03-26 22:53:35', '2019-03-26 22:53:35'),
(14, 'Ahmad', 'ahmad@mad.com', 0, '$2y$10$1glZJOcMCgxHqsdGIFp5heMYxf.3mdMaD.KvSwHoVCeB.e8nJ5LCi', '2019-03-26 22:53:45', '2019-03-26 22:53:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
