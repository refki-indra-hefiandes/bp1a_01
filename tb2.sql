-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2014 at 09:41 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tb2`
--
CREATE DATABASE IF NOT EXISTS `tb2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tb2`;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `agama` int(11) NOT NULL,
  `status_perkawinan` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_masuk` date NOT NULL,
  `no_ktp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bank` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `no_rek` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `no_sertifikasi` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_sertifikasi` date NOT NULL,
  `file_sertifikasi` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `no_npwp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `file_npwp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status_perkawinan`, `email`, `no_telp`, `tahun_masuk`, `no_ktp`, `photo`, `bank`, `no_rek`, `no_sertifikasi`, `tahun_sertifikasi`, `file_sertifikasi`, `no_npwp`, `file_npwp`, `created_at`, `updated_at`) VALUES
('1982011820081121002', 'husnil kamil', '', '0000-00-00', 0, '', 0, 0, '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `angkatan` year(4) NOT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `agama` int(11) NOT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_sekarang` text COLLATE utf8_unicode_ci NOT NULL,
  `alamat_asal` text COLLATE utf8_unicode_ci NOT NULL,
  `kota_asal` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `dosen_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jalur_masuk` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pt_asal` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `prodi_asal` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sks_asal` int(11) NOT NULL,
  `nilai_un` decimal(8,2) NOT NULL,
  `sumber_dana` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `no_hp` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `sekolah_asal` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `mahasiswa_dosen_id_foreign` (`dosen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `angkatan`, `status`, `agama`, `photo`, `alamat_sekarang`, `alamat_asal`, `kota_asal`, `dosen_id`, `tanggal_masuk`, `jalur_masuk`, `pt_asal`, `prodi_asal`, `sks_asal`, `nilai_un`, `sumber_dana`, `email`, `no_hp`, `jenis_kelamin`, `sekolah_asal`, `created_at`, `updated_at`) VALUES
('1010961007', 'adi', 'bandung', '2014-12-09', 2012, 'aktif', 0, '1.jpg', 'padang', 'padang', 'bandung', '1982011820081121002', '2014-12-15', 'mandiri', 'unand', 'sistem informasi', 145, 8.47, 'beasiswa pemerintah', 'andi@gmail.com', '081353728373', 1, 'sma 1 bandung', '2014-12-15 08:39:25', '2014-12-15 08:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_12_02_141537_create_users_table', 1),
('2014_12_02_200304_create_dosen_table', 1),
('2014_12_02_200324_create_mahasiswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', '$2y$10$TUrXpCekXOcatJpGt.coIOiuAXKdDCYdnWYvHMAYXZNVBNHxvpdT6', 'wCAHjBtq3WEr7WiA9B8rFt9cfqWJxjHeL31OKST2fSTZQbwTeuSjdZW1vNO5', '2014-12-15 04:18:04', '2014-12-15 08:36:59');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
