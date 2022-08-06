-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 06:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_anggota`
--

CREATE TABLE `alternatif_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_alternatif` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tl_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_alternatif` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_alternatif` enum('S1','SLTA','SLTP','SD') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif_anggota`
--

INSERT INTO `alternatif_anggota` (`id`, `kode_alternatif`, `nama_alternatif`, `t_alternatif`, `tl_alternatif`, `alamat_alternatif`, `telp_alternatif`, `jk_alternatif`, `pendidikan_alternatif`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Drs. Achmad Khobir', 'Sidoarjo', '1999-09-01', 'Bumi Gedangan Indah C-3 Rt.004 Rw.009 Karangbong, Gedangan', '081311795759', 'Laki-Laki', 'S1', '2022-05-28 08:07:31', '2022-06-26 02:28:39'),
(2, 'A02', 'Dra. Farida Arini', 'Sidoarjo', '1999-05-20', 'Praban Timur No.150 Rt.03 Rw.01 Sidokare, Sidoarjo', '087754275229', 'Perempuan', 'S1', '2022-05-28 08:08:35', '2022-06-26 02:29:31'),
(3, 'A03', 'Marga Wahyuni', 'Sidoarjo', '1998-07-17', 'Jl. Bougenville Kav.6 Rt.25 Rw.11 Pepe, Sedati', '081357752029', 'Perempuan', 'SLTA', '2022-05-28 08:31:28', '2022-05-28 08:31:28'),
(5, 'A04', 'Triwahyu Wulandari', 'Sidoarjo', '1999-09-12', 'Siwalanpanji Rt 20 Rw 04', '089677659235', 'Perempuan', 'SLTA', '2022-06-06 07:22:49', '2022-06-06 07:22:49'),
(6, 'A05', 'Fadwa Faradisa', 'Sidoarjo', '1999-02-16', 'Jl. Abd. Rahman No.42 Rt 08 Rw 02 Banjarsari', '081696062018', 'Perempuan', 'SLTA', '2022-06-25 08:23:21', '2022-06-25 08:23:21'),
(7, 'A06', 'Nur Azizah', 'Sidoarjo', '1997-11-10', 'Lemah Putro IV Rt 19 Rw 04 Sidoarjo', '087703310154', 'Perempuan', 'SLTA', '2022-06-25 08:42:31', '2022-06-25 08:42:31'),
(8, 'A07', 'Ria Rahmawati', 'Sidoarjo', '1998-11-16', 'Slautan Gg III Rt 16 Rw 03', '087751054922', 'Perempuan', 'SLTA', '2022-06-25 08:43:28', '2022-06-25 08:43:28'),
(9, 'A08', 'Sabila Nisak', 'Sidoarjo', '1998-04-12', 'Celep GG I Rt 02 Rw 01', '083849210780', 'Perempuan', 'SLTA', '2022-06-25 08:44:40', '2022-06-25 08:44:40'),
(10, 'A09', 'Ani Nurmawati', 'Sidoarjo', '1998-10-29', 'Siwalanpanji Rt 15 Rw 04', '089676458228', 'Perempuan', 'SLTA', '2022-06-25 09:02:25', '2022-06-25 09:02:25'),
(11, 'A10', 'M. Fatchul Huda', 'Sidoarjo', '1998-11-16', 'Kemiri Rt 08 Rw 03 Sidoarjo', '083856665762', 'Laki-Laki', 'SLTA', '2022-06-25 09:03:27', '2022-06-25 09:03:27'),
(12, 'A11', 'Farizal Febriasyah', 'Kediri', '1998-12-22', 'Kemiri Rt 06 Rw 02 Sidoarjo', '083831192057', 'Laki-Laki', 'SLTA', '2022-06-25 09:04:33', '2022-06-25 09:04:33'),
(13, 'A12', 'Yulita Rahmawati', 'Sidoarjo', '1998-07-19', 'Desa Spande Rt 08 Rw 03', '089650598536', 'Perempuan', 'SLTA', '2022-06-25 09:05:43', '2022-06-25 09:05:43'),
(14, 'A13', 'Nihimatul Umrah', 'Sidoarjo', '1998-06-07', 'Desa Dukuh Tengah Rt 02 Rw 03', '083857498660', 'Perempuan', 'SLTA', '2022-06-25 09:06:51', '2022-06-25 09:06:51'),
(15, 'A14', 'Dewi Ninda Isnaini', 'Sidoarjo', '1998-11-08', 'Jl. Sentana V Tebel Gedangan-Sidoarjo', '088217034836', 'Perempuan', 'SLTA', '2022-06-25 09:08:03', '2022-06-25 09:08:03'),
(16, 'A15', 'Frisma Nugraha', 'Sidoarjo', '2000-01-11', 'Jl. R.A. Mustika Tebel Gedangan-Sidoarjo', '083857295906', 'Perempuan', 'SLTA', '2022-06-25 09:10:52', '2022-06-25 09:10:52'),
(17, 'A16', 'M. Dikhyak Falakhul Akmal', 'Sidoarjo', '1998-01-21', 'Pagerwojo', '083849951772', 'Laki-Laki', 'SLTA', '2022-06-25 09:11:52', '2022-06-25 09:11:52'),
(18, 'A17', 'Fatkhurrokhman', 'Kutoarjo', '1998-08-12', 'Jl. Mandala 510 C Rt18 Rw05 Semambung Gedangan', '085232502803', 'Laki-Laki', 'SLTA', '2022-06-25 09:13:29', '2022-06-25 09:13:29'),
(19, 'A18', 'Ari Wibowo', 'Solo', '1998-10-27', 'BCF Sekawan Blok III/C 7/91 Rt29 Rw05 Bulusidokare', '08156900010', 'Laki-Laki', 'SLTP', '2022-06-25 09:14:45', '2022-06-26 02:29:54'),
(20, 'A19', 'Mohammad Mujib', 'Sidoarjo', '1998-08-08', 'Suwaluh Rt.06 Rw.02 Suwaluh, Balong Bendo', '085204214013', 'Laki-Laki', 'SLTA', '2022-06-25 09:15:45', '2022-06-25 09:15:45'),
(21, 'A20', 'Muhammad Tasrifin', 'Kudus', '1999-01-25', 'Puri Surya Jaya A-4/12 Rt.01 Rw.11, Gedangan', '08123158446', 'Laki-Laki', 'SLTA', '2022-06-25 09:16:53', '2022-06-25 09:16:53'),
(22, 'A21', 'Noval Husni', 'Surabaya', '1999-11-06', 'Perum. Graha Tirta Dahlia No.59 Rt.01 Rw.13 Ngingas, Waru', '08113404927', 'Laki-Laki', 'SLTA', '2022-06-25 09:18:03', '2022-06-25 09:18:03'),
(23, 'A22', 'Dewi Nursati', 'Singaraja', '1998-02-16', 'Perum. Graha Tirta Dahlia No.59 Rt.01 Rw.13 Ngingas, Waru', '081234229827', 'Perempuan', 'SLTA', '2022-06-25 09:18:58', '2022-06-25 09:18:58'),
(24, 'A23', 'Moh. Khomsun', 'Sidoarjo', '1999-04-21', 'Jl.Ir.H.Junda No.12 C Rt.18 Rw.04, Sidokare', '081231521288', 'Laki-Laki', 'SLTA', '2022-06-25 09:19:57', '2022-06-25 09:19:57'),
(25, 'A24', 'Lilis Sonya Leni Marlina', 'Ciamis', '1997-08-25', 'Pondok Trosobo Indah Blok N-7 Rt.04 Rw.09 Trosobo,Taman', '085749061278', 'Perempuan', 'SLTA', '2022-06-25 09:21:56', '2022-06-25 09:21:56'),
(26, 'A25', 'Mochamad Bachtiar', 'Kediri', '1998-05-18', 'Pondok Sedati Asri Blok B-06 Rt.15 Rw.08 Betro-Sedati', '081260381217', 'Laki-Laki', 'SLTA', '2022-06-25 09:22:59', '2022-06-25 09:22:59'),
(27, 'A26', 'Isti Karomah', 'Kediri', '1999-05-22', 'Pondok Sedati Asri Blok B-06 Rt.15 Rw.08 Betro-Sedati', '081216363859', 'Perempuan', 'SLTA', '2022-06-25 09:24:07', '2022-06-25 09:24:07'),
(28, 'A27', 'Ottok Kristant', 'Surabaya', '1999-09-02', 'Perum Jaya Regency Blok 21-1 Rt.01 Rw.16 , Sedati', '081358486199', 'Laki-Laki', 'SLTA', '2022-06-25 09:25:00', '2022-06-25 09:25:00'),
(29, 'A28', 'Dwi Kusnardiyani', 'Semarang', '1998-11-16', 'Perum Jaya Regency Blok 21-1 Rt.01 Rw.16 , Sedati', '089533980932', 'Perempuan', 'SLTA', '2022-06-25 09:25:59', '2022-06-25 09:25:59'),
(30, 'A29', 'Adi Prasetyo', 'Sidoarjo', '1999-11-15', 'Kepatihan Rt.03 Rw.02 Kepatihan, Tulangan', '081332643724', 'Laki-Laki', 'SLTA', '2022-06-25 09:26:48', '2022-06-25 09:26:48'),
(31, 'A30', 'Meylina Susanti', 'Sidoarjo', '1999-05-26', 'Kepatihan Rt.03 Rw.02 Kepatihan, Tulangan', '081230591502', 'Perempuan', 'SLTA', '2022-06-25 09:27:39', '2022-06-25 09:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_ketua`
--

CREATE TABLE `alternatif_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_alternatif` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tl_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_alternatif` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_alternatif` enum('S1','SLTA','SLTP','SD') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif_ketua`
--

INSERT INTO `alternatif_ketua` (`id`, `kode_alternatif`, `nama_alternatif`, `t_alternatif`, `tl_alternatif`, `alamat_alternatif`, `telp_alternatif`, `jk_alternatif`, `pendidikan_alternatif`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Drs. H. Abdul Djalil S, S.pd.I', 'Sidoarjo', '1969-01-01', 'Kenongo 9 RT. 04/02 Kenongo Tulangan- Sidoarjo', '08584858733', 'Laki-Laki', 'S1', '2022-05-19 05:54:38', '2022-06-25 05:18:07'),
(2, 'A02', 'Drs. H. Ainur Rofiq', 'Kediri', '1967-05-20', 'Perum Lawang Asri RT. 1/10 Sumolawang Puri- Mojokerto', '081332083291', 'Laki-Laki', 'S1', '2022-05-19 05:54:49', '2022-07-11 22:30:26'),
(3, 'A03', 'H. Mundhi Sukohartanto', 'Sidoarjo', '1968-08-15', 'Wonocolo 5/86 RT. 3/1 Taman- Sidoaajo', '081331282047', 'Laki-Laki', 'SLTA', '2022-05-19 05:55:01', '2022-05-19 05:55:01'),
(5, 'A04', 'H. Supriyadi', 'Surabaya', '1969-06-07', 'JL. KH. Samanhudi 120 RT. 13/2 Bulusidokare- Sidoarjo ', '085213077562', 'Laki-Laki', 'SLTA', '2022-06-04 01:00:38', '2022-06-04 01:00:38'),
(6, 'A05', 'Drs. H. Musyafa', 'Sidoarjo', '1969-09-13', 'Jatisari Besar Gg. Langgar 70 RT. 2/5 Pepelegi Waru-Sidoarjo', '085856060930', 'Laki-Laki', 'S1', '2022-06-04 01:00:54', '2022-06-25 06:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_penilaian_anggota`
--

CREATE TABLE `hasil_penilaian_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_1` double NOT NULL,
  `nilai_2` double NOT NULL,
  `nilai_3` double NOT NULL,
  `nilai_4` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_penilaian_anggota`
--

INSERT INTO `hasil_penilaian_anggota` (`id`, `nama_alternatif`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `created_at`, `updated_at`) VALUES
(1, 'Drs. Achmad Khobir', 0.28125, 0.265625, 0.1640625, 0.234375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(2, 'Dra. Farida Arini', 0.2109375, 0.265625, 0.1640625, 0.17578125, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(3, 'Marga Wahyuni', 0.2109375, 0.1328125, 0.1640625, 0.1171875, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(4, 'Triwahyu Wulandari', 0.0703125, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(5, 'Fadwa Faradisa', 0.140625, 0.1328125, 0.109375, 0, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(6, 'Nur Azizah', 0.28125, 0.1328125, 0.1640625, 0.05859375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(7, 'Ria Rahmawati', 0.140625, 0.1328125, 0.21875, 0, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(8, 'Sabila Nisak', 0.28125, 0.1328125, 0.0546875, 0, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(9, 'Ani Nurmawati', 0.140625, 0.1328125, 0.109375, 0.17578125, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(10, 'M. Fatchul Huda', 0.140625, 0.1328125, 0.109375, 0, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(11, 'Farizal Febriasyah', 0.28125, 0.1328125, 0, 0.05859375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(12, 'Yulita Rahmawati', 0.28125, 0.1328125, 0.1640625, 0.234375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(13, 'Nihimatul Umrah', 0.0703125, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(14, 'Dewi Ninda Isnaini', 0.140625, 0.1328125, 0.109375, 0.1171875, '2022-07-12 23:57:31', '2022-07-12 23:57:31'),
(15, 'Frisma Nugraha', 0, 0.1328125, 0, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(16, 'M. Dikhyak Falakhul Akmal', 0.0703125, 0.1328125, 0.0546875, 0.234375, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(17, 'Fatkhurrokhman', 0.140625, 0.1328125, 0.0546875, 0.17578125, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(18, 'Ari Wibowo', 0.140625, 0, 0.21875, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(19, 'Mohammad Mujib', 0, 0.1328125, 0, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(20, 'Muhammad Tasrifin', 0.140625, 0.1328125, 0.21875, 0.234375, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(21, 'Noval Husni', 0.140625, 0.1328125, 0.109375, 0.1171875, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(22, 'Dewi Nursati', 0.2109375, 0.1328125, 0.1640625, 0.17578125, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(23, 'Moh. Khomsun', 0.140625, 0.1328125, 0, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(24, 'Lilis Sonya Leni Marlina', 0.28125, 0.1328125, 0, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(25, 'Mochamad Bachtiar', 0, 0.1328125, 0, 0.05859375, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(26, 'Isti Karomah', 0.2109375, 0.1328125, 0.1640625, 0.17578125, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(27, 'Ottok Kristant', 0.140625, 0.1328125, 0.21875, 0.1171875, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(28, 'Dwi Kusnardiyani', 0.2109375, 0.1328125, 0.1640625, 0.17578125, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(29, 'Adi Prasetyo', 0.2109375, 0.1328125, 0.21875, 0, '2022-07-12 23:57:32', '2022-07-12 23:57:32'),
(30, 'Meylina Susanti', 0.2109375, 0.1328125, 0.21875, 0.05859375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(31, 'Drs. Achmad Khobir', 0.28125, 0.265625, 0.21875, 0.234375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(32, 'Dra. Farida Arini', 0.140625, 0.265625, 0.1640625, 0.1171875, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(33, 'Marga Wahyuni', 0, 0.1328125, 0, 0.234375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(34, 'Triwahyu Wulandari', 0.140625, 0.1328125, 0.21875, 0.1171875, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(35, 'Fadwa Faradisa', 0.0703125, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(36, 'Nur Azizah', 0.28125, 0.1328125, 0, 0, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(37, 'Ria Rahmawati', 0, 0.1328125, 0.0546875, 0.1171875, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(38, 'Sabila Nisak', 0.140625, 0.1328125, 0.21875, 0, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(39, 'Ani Nurmawati', 0, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(40, 'M. Fatchul Huda', 0, 0.1328125, 0.21875, 0.17578125, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(41, 'Farizal Febriasyah', 0.0703125, 0.1328125, 0, 0, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(42, 'Yulita Rahmawati', 0.28125, 0.1328125, 0.21875, 0, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(43, 'Nihimatul Umrah', 0.0703125, 0.1328125, 0.0546875, 0, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(44, 'Dewi Ninda Isnaini', 0.2109375, 0.1328125, 0.1640625, 0.17578125, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(45, 'Frisma Nugraha', 0.140625, 0.1328125, 0.0546875, 0.234375, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(46, 'M. Dikhyak Falakhul Akmal', 0, 0.1328125, 0.21875, 0.17578125, '2022-07-12 23:57:33', '2022-07-12 23:57:33'),
(47, 'Fatkhurrokhman', 0.2109375, 0.1328125, 0, 0, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(48, 'Ari Wibowo', 0.28125, 0, 0, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(49, 'Mohammad Mujib', 0.140625, 0.1328125, 0.109375, 0.234375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(50, 'Muhammad Tasrifin', 0, 0.1328125, 0.0546875, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(51, 'Noval Husni', 0.2109375, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(52, 'Dewi Nursati', 0, 0.1328125, 0, 0.05859375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(53, 'Moh. Khomsun', 0, 0.1328125, 0.21875, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(54, 'Lilis Sonya Leni Marlina', 0.140625, 0.1328125, 0, 0, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(55, 'Mochamad Bachtiar', 0.2109375, 0.1328125, 0, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(56, 'Isti Karomah', 0, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(57, 'Ottok Kristant', 0.140625, 0.1328125, 0.21875, 0, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(58, 'Dwi Kusnardiyani', 0.2109375, 0.1328125, 0.1640625, 0, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(59, 'Adi Prasetyo', 0.0703125, 0.1328125, 0.0546875, 0.234375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(60, 'Meylina Susanti', 0.140625, 0.1328125, 0, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(61, 'Drs. Achmad Khobir', 0.28125, 0.265625, 0.21875, 0.234375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(62, 'Dra. Farida Arini', 0.28125, 0.265625, 0.21875, 0.17578125, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(63, 'Marga Wahyuni', 0, 0.1328125, 0.1640625, 0.234375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(64, 'Triwahyu Wulandari', 0.140625, 0.1328125, 0.1640625, 0.234375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(65, 'Fadwa Faradisa', 0.0703125, 0.1328125, 0.0546875, 0.05859375, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(66, 'Nur Azizah', 0.140625, 0.1328125, 0, 0.1171875, '2022-07-12 23:57:34', '2022-07-12 23:57:34'),
(67, 'Ria Rahmawati', 0, 0.1328125, 0.109375, 0.05859375, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(68, 'Sabila Nisak', 0.2109375, 0.1328125, 0.0546875, 0.1171875, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(69, 'Ani Nurmawati', 0.0703125, 0.1328125, 0, 0.234375, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(70, 'M. Fatchul Huda', 0, 0.1328125, 0, 0, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(71, 'Farizal Febriasyah', 0.140625, 0.1328125, 0.21875, 0.234375, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(72, 'Yulita Rahmawati', 0, 0.1328125, 0, 0.17578125, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(73, 'Nihimatul Umrah', 0.28125, 0.1328125, 0.21875, 0.234375, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(74, 'Dewi Ninda Isnaini', 0.2109375, 0.1328125, 0.0546875, 0.1171875, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(75, 'Frisma Nugraha', 0.0703125, 0.1328125, 0.0546875, 0.17578125, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(76, 'M. Dikhyak Falakhul Akmal', 0, 0.1328125, 0.21875, 0.05859375, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(77, 'Fatkhurrokhman', 0.140625, 0.1328125, 0.1640625, 0.1171875, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(78, 'Ari Wibowo', 0.140625, 0, 0.0546875, 0.1171875, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(79, 'Mohammad Mujib', 0.140625, 0.1328125, 0.21875, 0, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(80, 'Muhammad Tasrifin', 0.140625, 0.1328125, 0.21875, 0, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(81, 'Noval Husni', 0.0703125, 0.1328125, 0.109375, 0, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(82, 'Dewi Nursati', 0.2109375, 0.1328125, 0.1640625, 0.17578125, '2022-07-12 23:57:35', '2022-07-12 23:57:35'),
(83, 'Moh. Khomsun', 0.0703125, 0.1328125, 0.0546875, 0, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(84, 'Lilis Sonya Leni Marlina', 0.2109375, 0.1328125, 0.21875, 0, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(85, 'Mochamad Bachtiar', 0.140625, 0.1328125, 0.109375, 0, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(86, 'Isti Karomah', 0.0703125, 0.1328125, 0, 0.05859375, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(87, 'Ottok Kristant', 0, 0.1328125, 0.21875, 0.05859375, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(88, 'Dwi Kusnardiyani', 0.28125, 0.1328125, 0.1640625, 0.234375, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(89, 'Adi Prasetyo', 0, 0.1328125, 0.109375, 0.05859375, '2022-07-12 23:57:36', '2022-07-12 23:57:36'),
(90, 'Meylina Susanti', 0.140625, 0.1328125, 0.0546875, 0.234375, '2022-07-12 23:57:36', '2022-07-12 23:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_penilaian_ketua`
--

CREATE TABLE `hasil_penilaian_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_1` double NOT NULL,
  `nilai_2` double NOT NULL,
  `nilai_3` double NOT NULL,
  `nilai_4` double NOT NULL,
  `nilai_5` double NOT NULL,
  `nilai_6` double NOT NULL,
  `nilai_7` double NOT NULL,
  `nilai_8` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasil_penilaian_ketua`
--

INSERT INTO `hasil_penilaian_ketua` (`id`, `nama_alternatif`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `nilai_6`, `nilai_7`, `nilai_8`, `created_at`, `updated_at`) VALUES
(1, 'Drs. H. Abdul Djalil S, S.pd.I', 0.13008130081301, 0.14634146341463, 0.13821138211382, 0.11382113821138, 0.1219512195122, 0.1219512195122, 0.11382113821138, 0.11382113821138, '2022-07-12 23:51:05', '2022-07-12 23:51:05'),
(2, 'Drs. H. Ainur Rofiq', 0.065040650406504, 0.097560975609756, 0.13821138211382, 0.075880758807588, 0.091463414634146, 0.08130081300813, 0, 0.075880758807588, '2022-07-12 23:51:05', '2022-07-12 23:51:05'),
(3, 'H. Mundhi Sukohartanto', 0, 0.097560975609756, 0, 0, 0, 0.040650406504065, 0, 0, '2022-07-12 23:51:05', '2022-07-12 23:51:05'),
(4, 'H. Supriyadi', 0.065040650406504, 0.048780487804878, 0, 0.037940379403794, 0.1219512195122, 0, 0, 0.075880758807588, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(5, 'Drs. H. Musyafa', 0.065040650406504, 0, 0.13821138211382, 0.11382113821138, 0.060975609756098, 0.08130081300813, 0, 0.11382113821138, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(6, 'Drs. H. Abdul Djalil S, S.pd.I', 0.13008130081301, 0.14634146341463, 0.13821138211382, 0.085365853658537, 0.1219512195122, 0.1219512195122, 0.11382113821138, 0.085365853658537, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(7, 'Drs. H. Ainur Rofiq', 0.065040650406504, 0.097560975609756, 0.13821138211382, 0.056910569105691, 0.08130081300813, 0, 0.056910569105691, 0.056910569105691, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(8, 'H. Mundhi Sukohartanto', 0.065040650406504, 0.097560975609756, 0, 0, 0, 0.1219512195122, 0.056910569105691, 0.11382113821138, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(9, 'H. Supriyadi', 0.13008130081301, 0.14634146341463, 0, 0.11382113821138, 0.1219512195122, 0, 0.056910569105691, 0.085365853658537, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(10, 'Drs. H. Musyafa', 0, 0, 0.13821138211382, 0.028455284552846, 0, 0, 0, 0, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(11, 'Drs. H. Abdul Djalil S, S.pd.I', 0.13008130081301, 0.14634146341463, 0.13821138211382, 0.11382113821138, 0.040650406504065, 0.040650406504065, 0.11382113821138, 0.11382113821138, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(12, 'Drs. H. Ainur Rofiq', 0, 0, 0.13821138211382, 0, 0, 0, 0, 0, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(13, 'H. Mundhi Sukohartanto', 0.065040650406504, 0, 0, 0.037940379403794, 0, 0, 0.037940379403794, 0.075880758807588, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(14, 'H. Supriyadi', 0, 0.097560975609756, 0, 0.11382113821138, 0.08130081300813, 0.1219512195122, 0.037940379403794, 0.11382113821138, '2022-07-12 23:51:06', '2022-07-12 23:51:06'),
(15, 'Drs. H. Musyafa', 0.13008130081301, 0.14634146341463, 0.13821138211382, 0, 0.1219512195122, 0.040650406504065, 0.075880758807588, 0.075880758807588, '2022-07-12 23:51:06', '2022-07-12 23:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_anggota`
--

CREATE TABLE `kriteria_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_anggota`
--

INSERT INTO `kriteria_anggota` (`id`, `kode_kriteria`, `nama_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'Pemahaman Ibadah Haji dan Umrah', 90, '2022-05-28 03:41:15', '2022-06-25 07:41:12'),
(2, 'K02', 'Latar Belakang Pendidikan', 85, '2022-05-28 04:26:10', '2022-06-25 07:41:40'),
(3, 'K03', 'Keterampilan Berkomunikasi', 70, '2022-05-28 04:26:31', '2022-06-25 07:41:55'),
(4, 'K04', 'Visioner', 75, '2022-05-28 04:28:09', '2022-06-25 07:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ketua`
--

CREATE TABLE `kriteria_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria_ketua`
--

INSERT INTO `kriteria_ketua` (`id`, `kode_kriteria`, `nama_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'Senioritas', 80, '2022-05-18 22:38:57', '2022-05-18 22:38:57'),
(2, 'K02', 'Pemahaman Ibadah Haji dan Umrah', 90, '2022-05-18 22:39:17', '2022-05-18 22:39:17'),
(3, 'K03', 'Latar Belakang Pendidikan', 85, '2022-05-18 22:39:34', '2022-06-12 08:56:24'),
(4, 'K04', 'Keterampilan Berkomunikasi', 70, '2022-05-18 22:39:56', '2022-05-18 22:39:56'),
(5, 'K05', 'Visioner', 75, '2022-05-18 22:40:11', '2022-05-18 22:40:11'),
(6, 'K06', 'Hubungan Luas Dengan Komunitas KBIHU Travel Umrah Haji', 75, '2022-05-18 22:40:25', '2022-06-25 06:36:31'),
(7, 'K07', 'Pernah Mengikuti Ibadah Haji dan Umrah', 70, '2022-05-18 22:40:39', '2022-05-18 22:40:39'),
(8, 'K08', 'Pernah Menjadi Panitia inti Ibadah Haji dan Umrah', 70, '2022-05-18 22:40:56', '2022-06-25 06:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_08_090510_create_kriteria_ketua_table', 1),
(5, '2022_05_12_120052_create_sub_kriteria_ketua_table', 1),
(6, '2022_05_13_115748_create_pivot_ketua_table', 1),
(7, '2022_05_16_111630_create_alternatif_ketua_table', 1),
(8, '2022_05_16_131200_create_penilaian_ketua_table', 1),
(9, '2022_05_23_111729_create_hasil_penilaian_ketua_table', 2),
(10, '2022_05_28_101729_create_kriteria_anggota_table', 2),
(11, '2022_05_28_114611_create_sub_kriteria_anggota_table', 3),
(12, '2022_05_28_114839_create_pivot_anggota_table', 3),
(13, '2022_05_28_115425_create_pivot_anggota_table', 4),
(14, '2022_05_28_132650_create_alternatif_anggota_table', 5),
(15, '2022_06_02_132302_create_hasil_penilaian_ketua_table', 6),
(16, '2022_06_04_074837_create_hasil_penilaian_ketua_table', 7),
(17, '2022_06_05_110949_create_hasil_penilian_ketua_table', 8),
(18, '2022_06_05_112025_create_hasil_penilaian_ketua_table', 9),
(19, '2022_06_05_123648_create_riwayat_penilian_ketua_table', 10),
(20, '2022_06_05_130752_create_periode_ketua_table', 11),
(21, '2022_06_05_130832_create_riwayat_penilian_ketua_table', 12),
(22, '2022_06_05_154232_create_riwayat_penilaian_ketua_table', 13),
(23, '2022_06_05_160102_create_riwayat_penilaian_ketua_table', 14),
(24, '2022_06_06_120005_create_penilaian_anggota_table', 15),
(25, '2022_06_06_123356_create_penilaian_anggota_table', 16),
(26, '2022_06_06_133510_create_hasil_penilaian_anggota_table', 17),
(27, '2022_06_06_143354_create_periode_anggota_table', 18),
(28, '2022_06_06_143538_create_riwayat_penilaian_anggota_table', 19),
(29, '2022_06_06_144023_create_riwayat_penilaian_anggota_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_anggota`
--

CREATE TABLE `penilaian_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_1` int(11) NOT NULL,
  `nilai_2` int(11) NOT NULL,
  `nilai_3` int(11) NOT NULL,
  `nilai_4` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaian_anggota`
--

INSERT INTO `penilaian_anggota` (`id`, `alternatif_id`, `user_id`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `created_at`, `updated_at`) VALUES
(14, 1, 2, 4, 4, 3, 4, '2022-06-07 05:37:56', '2022-06-26 02:30:22'),
(15, 2, 2, 3, 4, 3, 3, '2022-06-07 05:38:08', '2022-06-26 02:30:37'),
(17, 5, 2, 1, 3, 1, 1, '2022-06-07 05:38:30', '2022-06-25 09:58:38'),
(18, 1, 3, 4, 4, 4, 4, '2022-06-07 05:38:53', '2022-06-26 02:32:10'),
(19, 2, 3, 2, 4, 3, 2, '2022-06-07 05:39:05', '2022-06-26 02:32:17'),
(20, 3, 3, 0, 3, 0, 4, '2022-06-07 05:39:18', '2022-06-26 01:02:32'),
(21, 5, 3, 2, 3, 4, 2, '2022-06-07 05:39:28', '2022-06-26 01:02:39'),
(22, 1, 4, 4, 4, 4, 4, '2022-06-07 05:39:39', '2022-06-26 02:33:51'),
(23, 2, 4, 4, 4, 4, 3, '2022-06-07 05:39:53', '2022-06-26 02:34:04'),
(24, 3, 4, 0, 3, 3, 4, '2022-06-07 05:40:04', '2022-06-26 01:26:01'),
(25, 5, 4, 2, 3, 3, 4, '2022-06-07 05:40:52', '2022-06-07 05:40:52'),
(26, 3, 2, 3, 3, 3, 2, '2022-06-07 05:41:07', '2022-06-25 09:58:49'),
(27, 6, 2, 2, 3, 2, 0, '2022-06-25 09:38:27', '2022-06-25 09:58:57'),
(28, 7, 2, 4, 3, 3, 1, '2022-06-25 09:41:35', '2022-06-25 09:59:05'),
(29, 8, 2, 2, 3, 4, 0, '2022-06-25 09:42:03', '2022-06-25 09:59:11'),
(30, 9, 2, 4, 3, 1, 0, '2022-06-25 09:42:19', '2022-06-25 09:58:24'),
(31, 10, 2, 2, 3, 2, 3, '2022-06-26 00:51:24', '2022-06-26 00:51:35'),
(32, 11, 2, 2, 3, 2, 0, '2022-06-26 00:52:22', '2022-06-26 00:52:22'),
(33, 12, 2, 4, 3, 0, 1, '2022-06-26 00:53:14', '2022-06-26 00:53:14'),
(34, 13, 2, 4, 3, 3, 4, '2022-06-26 00:53:40', '2022-06-26 00:53:40'),
(35, 14, 2, 1, 3, 1, 1, '2022-06-26 00:54:11', '2022-06-26 00:54:11'),
(36, 15, 2, 2, 3, 2, 2, '2022-06-26 00:54:25', '2022-06-26 00:54:25'),
(37, 16, 2, 0, 3, 0, 0, '2022-06-26 00:54:47', '2022-06-26 00:54:47'),
(38, 17, 2, 1, 3, 1, 4, '2022-06-26 00:55:13', '2022-06-26 00:55:13'),
(39, 18, 2, 2, 3, 1, 3, '2022-06-26 00:55:30', '2022-06-26 00:55:30'),
(40, 19, 2, 2, 2, 4, 0, '2022-06-26 00:55:57', '2022-06-26 02:31:13'),
(41, 20, 2, 0, 3, 0, 0, '2022-06-26 00:56:25', '2022-06-26 00:56:25'),
(42, 21, 2, 2, 3, 4, 4, '2022-06-26 00:56:47', '2022-06-26 00:56:47'),
(43, 22, 2, 2, 3, 2, 2, '2022-06-26 00:57:14', '2022-06-26 00:57:14'),
(44, 23, 2, 3, 3, 3, 3, '2022-06-26 00:58:02', '2022-06-26 00:58:02'),
(45, 24, 2, 2, 3, 0, 0, '2022-06-26 00:58:17', '2022-06-26 00:58:17'),
(46, 25, 2, 4, 3, 0, 0, '2022-06-26 00:58:58', '2022-06-26 00:58:58'),
(47, 26, 2, 0, 3, 0, 1, '2022-06-26 00:59:55', '2022-06-26 00:59:55'),
(48, 27, 2, 3, 3, 3, 3, '2022-06-26 01:00:13', '2022-06-26 01:00:13'),
(49, 28, 2, 2, 3, 4, 2, '2022-06-26 01:00:28', '2022-06-26 01:00:28'),
(50, 29, 2, 3, 3, 3, 3, '2022-06-26 01:00:45', '2022-06-26 01:00:45'),
(51, 30, 2, 3, 3, 4, 0, '2022-06-26 01:01:05', '2022-06-26 01:01:05'),
(52, 31, 2, 3, 3, 4, 1, '2022-06-26 01:01:17', '2022-06-26 01:01:17'),
(53, 6, 3, 1, 3, 1, 1, '2022-06-26 01:02:55', '2022-06-26 01:02:55'),
(54, 7, 3, 4, 3, 0, 0, '2022-06-26 01:03:10', '2022-06-26 01:03:10'),
(55, 8, 3, 0, 3, 1, 2, '2022-06-26 01:03:23', '2022-06-26 01:03:23'),
(56, 9, 3, 2, 3, 4, 0, '2022-06-26 01:03:37', '2022-06-26 01:03:37'),
(57, 10, 3, 0, 3, 1, 1, '2022-06-26 01:04:06', '2022-06-26 01:04:06'),
(58, 11, 3, 0, 3, 4, 3, '2022-06-26 01:04:30', '2022-06-26 01:04:30'),
(59, 12, 3, 1, 3, 0, 0, '2022-06-26 01:04:44', '2022-06-26 01:04:44'),
(60, 13, 3, 4, 3, 4, 0, '2022-06-26 01:05:00', '2022-06-26 01:05:00'),
(61, 14, 3, 1, 3, 1, 0, '2022-06-26 01:05:12', '2022-06-26 01:05:12'),
(62, 15, 3, 3, 3, 3, 3, '2022-06-26 01:05:31', '2022-06-26 01:05:31'),
(63, 16, 3, 2, 3, 1, 4, '2022-06-26 01:05:45', '2022-06-26 01:05:45'),
(64, 17, 3, 0, 3, 4, 3, '2022-06-26 01:05:59', '2022-06-26 01:05:59'),
(65, 18, 3, 3, 3, 0, 0, '2022-06-26 01:06:17', '2022-06-26 01:06:17'),
(66, 19, 3, 4, 2, 0, 2, '2022-06-26 01:06:33', '2022-06-26 02:32:34'),
(67, 20, 3, 2, 3, 2, 4, '2022-06-26 01:06:51', '2022-06-26 01:06:51'),
(68, 21, 3, 0, 3, 1, 2, '2022-06-26 01:07:07', '2022-06-26 01:07:07'),
(69, 22, 3, 3, 3, 1, 1, '2022-06-26 01:07:24', '2022-06-26 01:07:24'),
(70, 23, 3, 0, 3, 0, 1, '2022-06-26 01:08:43', '2022-06-26 01:08:43'),
(71, 24, 3, 0, 3, 4, 2, '2022-06-26 01:09:01', '2022-06-26 01:09:01'),
(72, 25, 3, 2, 3, 0, 0, '2022-06-26 01:09:32', '2022-06-26 01:09:32'),
(73, 26, 3, 3, 3, 0, 2, '2022-06-26 01:11:46', '2022-06-26 01:11:46'),
(74, 27, 3, 0, 3, 1, 1, '2022-06-26 01:12:55', '2022-06-26 01:12:55'),
(75, 28, 3, 2, 3, 4, 0, '2022-06-26 01:13:15', '2022-06-26 01:13:15'),
(76, 29, 3, 3, 3, 3, 0, '2022-06-26 01:13:33', '2022-06-26 01:13:33'),
(77, 30, 3, 1, 3, 1, 4, '2022-06-26 01:13:52', '2022-06-26 01:13:52'),
(78, 31, 3, 2, 3, 0, 2, '2022-06-26 01:14:06', '2022-06-26 01:14:06'),
(79, 6, 4, 1, 3, 1, 1, '2022-06-26 01:26:26', '2022-06-26 01:26:26'),
(80, 7, 4, 2, 3, 0, 2, '2022-06-26 01:26:41', '2022-06-26 01:26:41'),
(81, 8, 4, 0, 3, 2, 1, '2022-06-26 01:27:12', '2022-06-26 01:27:12'),
(82, 9, 4, 3, 3, 1, 2, '2022-06-26 01:27:30', '2022-06-26 01:27:30'),
(83, 10, 4, 1, 3, 0, 4, '2022-06-26 01:27:47', '2022-06-26 01:27:47'),
(84, 11, 4, 0, 3, 0, 0, '2022-06-26 01:28:00', '2022-06-26 01:28:00'),
(85, 12, 4, 2, 3, 4, 4, '2022-06-26 01:28:12', '2022-06-26 01:28:12'),
(86, 13, 4, 0, 3, 0, 3, '2022-06-26 01:28:23', '2022-06-26 01:28:23'),
(87, 14, 4, 4, 3, 4, 4, '2022-06-26 01:28:36', '2022-06-26 01:28:36'),
(88, 15, 4, 3, 3, 1, 2, '2022-06-26 01:29:05', '2022-06-26 01:29:05'),
(89, 16, 4, 1, 3, 1, 3, '2022-06-26 01:29:23', '2022-06-26 01:29:23'),
(90, 17, 4, 0, 3, 4, 1, '2022-06-26 01:29:39', '2022-06-26 01:29:39'),
(91, 18, 4, 2, 3, 3, 2, '2022-06-26 01:29:56', '2022-06-26 01:29:56'),
(92, 19, 4, 2, 2, 1, 2, '2022-06-26 01:30:13', '2022-06-26 02:34:33'),
(93, 20, 4, 2, 3, 4, 0, '2022-06-26 01:30:34', '2022-06-26 01:30:34'),
(94, 21, 4, 2, 3, 4, 0, '2022-06-26 01:30:44', '2022-06-26 01:30:44'),
(95, 22, 4, 1, 3, 2, 0, '2022-06-26 01:31:11', '2022-06-26 01:31:11'),
(96, 23, 4, 3, 3, 3, 3, '2022-06-26 01:31:44', '2022-06-26 01:31:44'),
(97, 24, 4, 1, 3, 1, 0, '2022-06-26 01:32:07', '2022-06-26 01:32:07'),
(98, 25, 4, 3, 3, 4, 0, '2022-06-26 01:32:22', '2022-06-26 01:32:22'),
(99, 26, 4, 2, 3, 2, 0, '2022-06-26 01:34:21', '2022-06-26 01:34:21'),
(100, 27, 4, 1, 3, 0, 1, '2022-06-26 01:34:41', '2022-06-26 01:34:41'),
(101, 28, 4, 0, 3, 4, 1, '2022-06-26 01:34:57', '2022-06-26 01:34:57'),
(102, 29, 4, 4, 3, 3, 4, '2022-06-26 01:35:12', '2022-06-26 01:35:12'),
(103, 30, 4, 0, 3, 2, 1, '2022-06-26 01:35:23', '2022-06-26 01:35:23'),
(104, 31, 4, 2, 3, 1, 4, '2022-06-26 01:35:38', '2022-06-26 01:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_ketua`
--

CREATE TABLE `penilaian_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_1` int(11) NOT NULL,
  `nilai_2` int(11) NOT NULL,
  `nilai_3` int(11) NOT NULL,
  `nilai_4` int(11) NOT NULL,
  `nilai_5` int(11) NOT NULL,
  `nilai_6` int(11) NOT NULL,
  `nilai_7` int(11) NOT NULL,
  `nilai_8` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penilaian_ketua`
--

INSERT INTO `penilaian_ketua` (`id`, `alternatif_id`, `user_id`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `nilai_6`, `nilai_7`, `nilai_8`, `created_at`, `updated_at`) VALUES
(40, 1, 2, 4, 4, 4, 4, 4, 4, 4, 4, '2022-06-07 05:19:32', '2022-06-12 09:02:38'),
(41, 2, 2, 3, 3, 4, 3, 3, 3, 3, 3, '2022-06-07 05:19:54', '2022-07-12 23:46:35'),
(42, 3, 2, 2, 3, 3, 1, 0, 2, 3, 1, '2022-06-07 05:20:10', '2022-06-26 00:50:36'),
(44, 6, 2, 3, 1, 4, 4, 2, 3, 3, 4, '2022-06-07 05:20:49', '2022-07-12 23:47:16'),
(45, 1, 3, 3, 3, 4, 3, 3, 3, 3, 3, '2022-06-07 05:22:37', '2022-06-25 09:45:21'),
(46, 2, 3, 2, 2, 4, 2, 2, 2, 2, 2, '2022-06-07 05:23:11', '2022-07-12 23:48:14'),
(47, 3, 3, 2, 2, 3, 0, 0, 3, 2, 4, '2022-06-07 05:23:34', '2022-07-12 23:39:49'),
(48, 5, 3, 3, 3, 3, 4, 3, 2, 2, 3, '2022-06-07 05:23:56', '2022-06-25 09:45:55'),
(49, 6, 3, 1, 0, 4, 1, 0, 2, 1, 0, '2022-06-07 05:24:35', '2022-07-12 23:48:53'),
(50, 1, 4, 3, 4, 4, 4, 2, 2, 4, 4, '2022-06-07 05:25:09', '2022-06-25 09:47:09'),
(51, 2, 4, 1, 1, 4, 1, 1, 1, 1, 1, '2022-06-07 05:25:34', '2022-07-12 23:49:40'),
(52, 3, 4, 2, 1, 3, 2, 1, 1, 2, 3, '2022-06-07 05:26:02', '2022-06-12 09:09:57'),
(53, 5, 4, 1, 3, 3, 4, 3, 4, 2, 4, '2022-06-07 05:26:27', '2022-06-25 09:46:50'),
(54, 6, 4, 3, 4, 4, 1, 4, 2, 3, 3, '2022-06-07 05:27:00', '2022-07-12 23:50:09'),
(57, 5, 2, 3, 2, 3, 2, 4, 1, 3, 3, '2022-07-11 20:24:40', '2022-07-11 20:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `periode_anggota`
--

CREATE TABLE `periode_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periode_anggota`
--

INSERT INTO `periode_anggota` (`id`, `periode`, `created_at`, `updated_at`) VALUES
(8, '2022-01-23', '2022-07-13 00:02:10', '2022-07-13 00:02:10'),
(9, '2023-01-23', '2022-07-13 00:02:46', '2022-07-13 00:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `periode_ketua`
--

CREATE TABLE `periode_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periode_ketua`
--

INSERT INTO `periode_ketua` (`id`, `periode`, `created_at`, `updated_at`) VALUES
(30, '2022-01-23', '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(31, '2026-01-23', '2022-07-12 23:51:24', '2022-07-12 23:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `pivot_anggota`
--

CREATE TABLE `pivot_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anggota_id` bigint(20) UNSIGNED NOT NULL,
  `subanggota_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot_anggota`
--

INSERT INTO `pivot_anggota` (`id`, `anggota_id`, `subanggota_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, NULL),
(2, 1, 6, NULL, NULL),
(3, 1, 7, NULL, NULL),
(4, 1, 8, NULL, NULL),
(5, 1, 9, NULL, NULL),
(6, 2, 10, NULL, NULL),
(7, 2, 11, NULL, NULL),
(8, 2, 12, NULL, NULL),
(9, 2, 13, NULL, NULL),
(10, 2, 14, NULL, NULL),
(11, 3, 15, NULL, NULL),
(12, 3, 16, NULL, NULL),
(13, 3, 17, NULL, NULL),
(14, 3, 18, NULL, NULL),
(15, 3, 19, NULL, NULL),
(16, 4, 20, NULL, NULL),
(17, 4, 21, NULL, NULL),
(18, 4, 22, NULL, NULL),
(19, 4, 23, NULL, NULL),
(20, 4, 24, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pivot_ketua`
--

CREATE TABLE `pivot_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ketua_id` bigint(20) UNSIGNED NOT NULL,
  `subketua_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pivot_ketua`
--

INSERT INTO `pivot_ketua` (`id`, `ketua_id`, `subketua_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, NULL, NULL),
(2, 6, 2, NULL, NULL),
(3, 6, 3, NULL, NULL),
(4, 6, 4, NULL, NULL),
(5, 6, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 1, 9, NULL, NULL),
(11, 2, 11, NULL, NULL),
(12, 2, 12, NULL, NULL),
(13, 2, 13, NULL, NULL),
(14, 2, 14, NULL, NULL),
(15, 2, 15, NULL, NULL),
(16, 3, 16, NULL, NULL),
(17, 3, 17, NULL, NULL),
(18, 3, 18, NULL, NULL),
(19, 3, 19, NULL, NULL),
(20, 3, 20, NULL, NULL),
(21, 4, 21, NULL, NULL),
(22, 4, 22, NULL, NULL),
(23, 4, 23, NULL, NULL),
(24, 4, 24, NULL, NULL),
(25, 4, 25, NULL, NULL),
(26, 5, 26, NULL, NULL),
(27, 5, 27, NULL, NULL),
(28, 5, 28, NULL, NULL),
(29, 5, 29, NULL, NULL),
(30, 5, 30, NULL, NULL),
(31, 7, 31, NULL, NULL),
(32, 7, 32, NULL, NULL),
(33, 7, 33, NULL, NULL),
(34, 7, 34, NULL, NULL),
(35, 7, 35, NULL, NULL),
(36, 8, 36, NULL, NULL),
(37, 8, 37, NULL, NULL),
(38, 8, 38, NULL, NULL),
(39, 8, 39, NULL, NULL),
(40, 8, 40, NULL, NULL),
(42, 1, 42, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penilaian_anggota`
--

CREATE TABLE `riwayat_penilaian_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode_id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_1` double NOT NULL,
  `nilai_2` double NOT NULL,
  `nilai_3` double NOT NULL,
  `nilai_4` double NOT NULL,
  `jumlah` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_penilaian_anggota`
--

INSERT INTO `riwayat_penilaian_anggota` (`id`, `periode_id`, `nama_alternatif`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `jumlah`, `created_at`, `updated_at`) VALUES
(159, 8, 'Adi Prasetyo', 0.28125, 0.3984375, 0.3828125, 0.29296875, 1.35546875, '2022-07-13 00:02:10', '2022-07-13 00:02:10'),
(160, 8, 'Ani Nurmawati', 0.2109375, 0.3984375, 0.1640625, 0.46875, 1.2421875, '2022-07-13 00:02:10', '2022-07-13 00:02:10'),
(161, 8, 'Ari Wibowo', 0.5625, 0, 0.2734375, 0.234375, 1.0703125, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(162, 8, 'Dewi Ninda Isnaini', 0.5625, 0.3984375, 0.328125, 0.41015625, 1.69921875, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(163, 8, 'Dewi Nursati', 0.421875, 0.3984375, 0.328125, 0.41015625, 1.55859375, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(164, 8, 'Dra. Farida Arini', 0.6328125, 0.796875, 0.546875, 0.46875, 2.4453125, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(165, 8, 'Drs. Achmad Khobir', 0.84375, 0.796875, 0.6015625, 0.703125, 2.9453125, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(166, 8, 'Dwi Kusnardiyani', 0.703125, 0.3984375, 0.4921875, 0.41015625, 2.00390625, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(167, 8, 'Fadwa Faradisa', 0.28125, 0.3984375, 0.21875, 0.1171875, 1.015625, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(168, 8, 'Farizal Febriasyah', 0.4921875, 0.3984375, 0.21875, 0.29296875, 1.40234375, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(169, 8, 'Fatkhurrokhman', 0.4921875, 0.3984375, 0.21875, 0.29296875, 1.40234375, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(170, 8, 'Frisma Nugraha', 0.2109375, 0.3984375, 0.109375, 0.41015625, 1.12890625, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(171, 8, 'Isti Karomah', 0.28125, 0.3984375, 0.21875, 0.29296875, 1.19140625, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(172, 8, 'Lilis Sonya Leni Marlina', 0.6328125, 0.3984375, 0.21875, 0, 1.25, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(173, 8, 'M. Dikhyak Falakhul Akmal', 0.0703125, 0.3984375, 0.4921875, 0.46875, 1.4296875, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(174, 8, 'M. Fatchul Huda', 0.140625, 0.3984375, 0.328125, 0.17578125, 1.04296875, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(175, 8, 'Marga Wahyuni', 0.2109375, 0.3984375, 0.328125, 0.5859375, 1.5234375, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(176, 8, 'Meylina Susanti', 0.4921875, 0.3984375, 0.2734375, 0.41015625, 1.57421875, '2022-07-13 00:02:11', '2022-07-13 00:02:11'),
(177, 8, 'Mochamad Bachtiar', 0.3515625, 0.3984375, 0.109375, 0.17578125, 1.03515625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(178, 8, 'Moh. Khomsun', 0.2109375, 0.3984375, 0.2734375, 0.1171875, 1, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(179, 8, 'Mohammad Mujib', 0.28125, 0.3984375, 0.328125, 0.234375, 1.2421875, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(180, 8, 'Muhammad Tasrifin', 0.28125, 0.3984375, 0.4921875, 0.3515625, 1.5234375, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(181, 8, 'Nihimatul Umrah', 0.421875, 0.3984375, 0.328125, 0.29296875, 1.44140625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(182, 8, 'Noval Husni', 0.421875, 0.3984375, 0.2734375, 0.17578125, 1.26953125, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(183, 8, 'Nur Azizah', 0.703125, 0.3984375, 0.1640625, 0.17578125, 1.44140625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(184, 8, 'Ottok Kristant', 0.28125, 0.3984375, 0.65625, 0.17578125, 1.51171875, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(185, 8, 'Ria Rahmawati', 0.140625, 0.3984375, 0.3828125, 0.17578125, 1.09765625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(186, 8, 'Sabila Nisak', 0.6328125, 0.3984375, 0.328125, 0.1171875, 1.4765625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(187, 8, 'Triwahyu Wulandari', 0.3515625, 0.3984375, 0.4375, 0.41015625, 1.59765625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(188, 8, 'Yulita Rahmawati', 0.5625, 0.3984375, 0.3828125, 0.41015625, 1.75390625, '2022-07-13 00:02:12', '2022-07-13 00:02:12'),
(189, 9, 'Adi Prasetyo', 0.28125, 0.3984375, 0.3828125, 0.29296875, 1.35546875, '2022-07-13 00:02:46', '2022-07-13 00:02:46'),
(190, 9, 'Ani Nurmawati', 0.2109375, 0.3984375, 0.1640625, 0.46875, 1.2421875, '2022-07-13 00:02:46', '2022-07-13 00:02:46'),
(191, 9, 'Ari Wibowo', 0.5625, 0, 0.2734375, 0.234375, 1.0703125, '2022-07-13 00:02:46', '2022-07-13 00:02:46'),
(192, 9, 'Dewi Ninda Isnaini', 0.5625, 0.3984375, 0.328125, 0.41015625, 1.69921875, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(193, 9, 'Dewi Nursati', 0.421875, 0.3984375, 0.328125, 0.41015625, 1.55859375, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(194, 9, 'Dra. Farida Arini', 0.6328125, 0.796875, 0.546875, 0.46875, 2.4453125, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(195, 9, 'Drs. Achmad Khobir', 0.84375, 0.796875, 0.6015625, 0.703125, 2.9453125, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(196, 9, 'Dwi Kusnardiyani', 0.703125, 0.3984375, 0.4921875, 0.41015625, 2.00390625, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(197, 9, 'Fadwa Faradisa', 0.28125, 0.3984375, 0.21875, 0.1171875, 1.015625, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(198, 9, 'Farizal Febriasyah', 0.4921875, 0.3984375, 0.21875, 0.29296875, 1.40234375, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(199, 9, 'Fatkhurrokhman', 0.4921875, 0.3984375, 0.21875, 0.29296875, 1.40234375, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(200, 9, 'Frisma Nugraha', 0.2109375, 0.3984375, 0.109375, 0.41015625, 1.12890625, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(201, 9, 'Isti Karomah', 0.28125, 0.3984375, 0.21875, 0.29296875, 1.19140625, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(202, 9, 'Lilis Sonya Leni Marlina', 0.6328125, 0.3984375, 0.21875, 0, 1.25, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(203, 9, 'M. Dikhyak Falakhul Akmal', 0.0703125, 0.3984375, 0.4921875, 0.46875, 1.4296875, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(204, 9, 'M. Fatchul Huda', 0.140625, 0.3984375, 0.328125, 0.17578125, 1.04296875, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(205, 9, 'Marga Wahyuni', 0.2109375, 0.3984375, 0.328125, 0.5859375, 1.5234375, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(206, 9, 'Meylina Susanti', 0.4921875, 0.3984375, 0.2734375, 0.41015625, 1.57421875, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(207, 9, 'Mochamad Bachtiar', 0.3515625, 0.3984375, 0.109375, 0.17578125, 1.03515625, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(208, 9, 'Moh. Khomsun', 0.2109375, 0.3984375, 0.2734375, 0.1171875, 1, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(209, 9, 'Mohammad Mujib', 0.28125, 0.3984375, 0.328125, 0.234375, 1.2421875, '2022-07-13 00:02:47', '2022-07-13 00:02:47'),
(210, 9, 'Muhammad Tasrifin', 0.28125, 0.3984375, 0.4921875, 0.3515625, 1.5234375, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(211, 9, 'Nihimatul Umrah', 0.421875, 0.3984375, 0.328125, 0.29296875, 1.44140625, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(212, 9, 'Noval Husni', 0.421875, 0.3984375, 0.2734375, 0.17578125, 1.26953125, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(213, 9, 'Nur Azizah', 0.703125, 0.3984375, 0.1640625, 0.17578125, 1.44140625, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(214, 9, 'Ottok Kristant', 0.28125, 0.3984375, 0.65625, 0.17578125, 1.51171875, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(215, 9, 'Ria Rahmawati', 0.140625, 0.3984375, 0.3828125, 0.17578125, 1.09765625, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(216, 9, 'Sabila Nisak', 0.6328125, 0.3984375, 0.328125, 0.1171875, 1.4765625, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(217, 9, 'Triwahyu Wulandari', 0.3515625, 0.3984375, 0.4375, 0.41015625, 1.59765625, '2022-07-13 00:02:48', '2022-07-13 00:02:48'),
(218, 9, 'Yulita Rahmawati', 0.5625, 0.3984375, 0.3828125, 0.41015625, 1.75390625, '2022-07-13 00:02:48', '2022-07-13 00:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penilaian_ketua`
--

CREATE TABLE `riwayat_penilaian_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `periode_id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternatif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_1` double NOT NULL,
  `nilai_2` double NOT NULL,
  `nilai_3` double NOT NULL,
  `nilai_4` double NOT NULL,
  `nilai_5` double NOT NULL,
  `nilai_6` double NOT NULL,
  `nilai_7` double NOT NULL,
  `nilai_8` double NOT NULL,
  `jumlah` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_penilaian_ketua`
--

INSERT INTO `riwayat_penilaian_ketua` (`id`, `periode_id`, `nama_alternatif`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `nilai_6`, `nilai_7`, `nilai_8`, `jumlah`, `created_at`, `updated_at`) VALUES
(81, 30, 'Drs. H. Abdul Djalil S, S.pd.I', 0.39024390243903, 0.43902439024389, 0.41463414634146, 0.3130081300813, 0.3048780487805, 0.28455284552846, 0.34146341463414, 0.22764227642276, 2.7154471544715, '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(82, 30, 'Drs. H. Ainur Rofiq', 0.39024390243903, 0.43902439024389, 0.41463414634146, 0.3130081300813, 0.3048780487805, 0.28455284552846, 0.34146341463414, 0.22764227642276, 2.7154471544715, '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(83, 30, 'Drs. H. Musyafa', 0.39024390243903, 0.43902439024389, 0.41463414634146, 0.3130081300813, 0.3048780487805, 0.28455284552846, 0.34146341463414, 0.22764227642276, 2.7154471544715, '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(84, 30, 'H. Mundhi Sukohartanto', 0.065040650406504, 0.073170731707317, 0, 0, 0, 0.16260162601626, 0, 0.11382113821138, 0.41463414634147, '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(85, 30, 'H. Supriyadi', 0.19512195121951, 0.24390243902439, 0, 0.26558265582655, 0.3658536585366, 0.1219512195122, 0, 0.18970189701897, 1.3821138211382, '2022-07-12 23:43:34', '2022-07-12 23:43:34'),
(86, 31, 'Drs. H. Abdul Djalil S, S.pd.I', 0.39024390243903, 0.43902439024389, 0.41463414634146, 0.3130081300813, 0.28455284552846, 0.28455284552846, 0.34146341463414, 0.3130081300813, 2.780487804878, '2022-07-12 23:51:24', '2022-07-12 23:51:24'),
(87, 31, 'Drs. H. Ainur Rofiq', 0.13008130081301, 0.19512195121951, 0.41463414634146, 0.13279132791328, 0.17276422764228, 0.08130081300813, 0.056910569105691, 0.13279132791328, 1.3163956639566, '2022-07-12 23:51:24', '2022-07-12 23:51:24'),
(88, 31, 'Drs. H. Musyafa', 0.19512195121951, 0.14634146341463, 0.41463414634146, 0.14227642276423, 0.1829268292683, 0.12195121951219, 0.075880758807588, 0.18970189701897, 1.4688346883469, '2022-07-12 23:51:24', '2022-07-12 23:51:24'),
(89, 31, 'H. Mundhi Sukohartanto', 0.13008130081301, 0.19512195121951, 0, 0.037940379403794, 0, 0.16260162601626, 0.094850948509485, 0.18970189701897, 0.81029810298103, '2022-07-12 23:51:25', '2022-07-12 23:51:25'),
(90, 31, 'H. Supriyadi', 0.19512195121951, 0.29268292682926, 0, 0.26558265582655, 0.32520325203253, 0.1219512195122, 0.094850948509485, 0.2750677506775, 1.5704607046071, '2022-07-12 23:51:25', '2022-07-12 23:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria_anggota`
--

CREATE TABLE `sub_kriteria_anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria_anggota`
--

INSERT INTO `sub_kriteria_anggota` (`id`, `sub_kriteria`, `nilai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:14:39', '2022-05-28 05:14:39'),
(2, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:14:51', '2022-05-28 05:14:51'),
(3, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:16:04', '2022-05-28 05:16:04'),
(4, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:16:13', '2022-05-28 05:16:13'),
(5, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:18:02', '2022-05-28 05:18:02'),
(6, 'Baik', 3, 'Penjelasan Ibadah Haji dan Umrah Kurang Lengkap', '2022-05-28 05:20:26', '2022-05-28 05:20:26'),
(7, 'Cukup', 2, 'Dapat Menjelaskan Ibadah Haji', '2022-05-28 05:21:02', '2022-05-28 05:21:02'),
(8, 'Kurang Cukup', 1, 'Dapat Menjelaskan Ibadah Umrah', '2022-05-28 05:21:13', '2022-05-28 05:21:13'),
(9, 'Kurang', 0, 'Tidak Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-28 05:21:27', '2022-05-28 05:21:27'),
(10, 'Sangat Baik', 4, 'S1', '2022-05-28 06:17:00', '2022-06-25 07:42:54'),
(11, 'Baik', 3, 'SLTA', '2022-05-28 06:19:35', '2022-06-25 07:43:02'),
(12, 'Cukup', 2, 'SLTP', '2022-05-28 06:20:06', '2022-06-25 07:43:30'),
(13, 'Kurang Cukup', 1, 'SD', '2022-05-28 06:20:33', '2022-06-25 07:43:43'),
(14, 'Kurang', 0, 'Tidak Menempuh Pendidikan', '2022-05-28 06:21:00', '2022-06-25 07:43:53'),
(15, 'Sangat Baik', 4, 'Mempunyai Kefasihan, Ketepatan, Pelafalan, dan Strategi Komunikasi', '2022-05-28 06:21:37', '2022-05-28 06:21:37'),
(16, 'Baik', 3, 'Mempunyai Kefasihan, Ketepatan, dan Pelafalan', '2022-05-28 06:22:01', '2022-05-28 06:22:01'),
(17, 'Cukup', 2, 'Mempunyai Kefasihan dan Ketepatan', '2022-05-28 06:22:21', '2022-05-28 06:22:21'),
(18, 'Kurang Cukup', 1, 'Mempunyai Kefasihan', '2022-05-28 06:22:35', '2022-05-28 06:22:35'),
(19, 'Kurang', 0, 'Tidak Mempunyai Kefasihan, Ketepatan, Pelafalan, dan Strategi Komunikasi', '2022-05-28 06:22:50', '2022-05-28 06:22:50'),
(20, 'Sangat Baik', 4, 'Mampu Menjelaskan Visi Misi dan Memberikan Gambaran Visi Misi', '2022-05-28 06:23:37', '2022-06-25 07:44:22'),
(21, 'Baik', 3, 'Mampu Menjelaskan Visi Misi', '2022-05-28 06:24:14', '2022-06-25 07:44:38'),
(22, 'Cukup', 2, 'Mampu Menjelaskan Visi', '2022-05-28 06:24:33', '2022-06-25 07:44:53'),
(23, 'Kurang Cukup', 1, 'Mampu Menjelaskan Misi', '2022-05-28 06:24:50', '2022-06-25 07:45:04'),
(24, 'Kurang', 0, 'Tidak Mampu Menjelaskan Visi Misi dan Memberikan Gambaran Visi Misi', '2022-05-28 06:25:20', '2022-06-25 07:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria_ketua`
--

CREATE TABLE `sub_kriteria_ketua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria_ketua`
--

INSERT INTO `sub_kriteria_ketua` (`id`, `sub_kriteria`, `nilai`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sangat Baik', 4, 'Memiliki > 4 Hubungan Dengan Travel Umrah Haji', '2022-05-18 22:47:41', '2022-06-25 06:37:34'),
(2, 'Baik', 3, 'Memiliki 3 Hubungan Dengan Travel Umrah Haji', '2022-05-18 23:06:19', '2022-06-25 06:37:52'),
(3, 'Cukup', 2, 'Memiliki 2 Hubungan Dengan Travel Umrah Haji', '2022-05-18 23:06:39', '2022-06-25 06:38:11'),
(4, 'Kurang Cukup', 1, 'Memiliki 1 Hubungan Dengan Travel Umrah Haji', '2022-05-18 23:06:53', '2022-06-25 06:38:27'),
(5, 'Kurang', 0, 'Tidak Memiliki Hubungan Dengan Travel Umrah Haji', '2022-05-18 23:07:14', '2022-06-25 06:38:44'),
(6, 'Sangat Baik', 4, 'Pengalaman Bekerja 16 Tahun', '2022-05-19 05:14:58', '2022-05-19 05:14:58'),
(7, 'Baik', 3, 'Pengalaman Bekerja 12 Tahun', '2022-05-19 05:15:42', '2022-05-19 05:15:42'),
(8, 'Cukup', 2, 'Pengalaman Bekerja 8 Tahun', '2022-05-19 05:16:08', '2022-05-19 05:16:08'),
(9, 'Kurang Cukup', 1, 'Pengalaman Bekerja 4 Tahun', '2022-05-19 05:16:36', '2022-05-19 05:16:36'),
(11, 'Sangat Baik', 4, 'Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-19 05:22:30', '2022-05-19 05:22:30'),
(12, 'Baik', 3, 'Penjelasan Ibadah Haji dan Umrah Kurang Lengkap', '2022-05-19 05:22:31', '2022-05-19 05:22:31'),
(13, 'Cukup', 2, 'Dapat Menjelaskan Ibadah Haji', '2022-05-19 05:25:24', '2022-05-19 05:25:24'),
(14, 'Kurang Cukup', 1, 'Dapat Menjelaskan Ibadah Umrah', '2022-05-19 05:26:36', '2022-05-19 05:26:36'),
(15, 'Kurang', 0, 'Tidak Dapat Menjelaskan Ibadah Haji dan Umrah', '2022-05-19 05:28:05', '2022-05-19 05:28:05'),
(16, 'Sangat Baik', 4, 'S1', '2022-05-19 05:29:16', '2022-06-25 06:31:38'),
(17, 'Baik', 3, 'SLTA', '2022-05-19 05:29:34', '2022-06-25 06:31:55'),
(18, 'Cukup', 2, 'SLTP', '2022-05-19 05:29:58', '2022-06-25 06:32:05'),
(19, 'Kurang Cukup', 1, 'SD', '2022-05-19 05:30:31', '2022-06-25 06:34:20'),
(20, 'Kurang', 0, 'Tidak Menempuh Pendidikan', '2022-05-19 05:30:48', '2022-06-25 06:34:56'),
(21, 'Sangat Baik', 4, 'Mempunyai Kefasihan, Ketepatan, Pelafalan, dan Strategi Komunikasi', '2022-05-19 05:32:50', '2022-05-19 05:32:50'),
(22, 'Baik', 3, 'Mempunyai Kefasihan, Ketepatan, dan Pelafalan', '2022-05-19 05:33:45', '2022-05-19 05:33:45'),
(23, 'Cukup', 2, 'Mempunyai Kefasihan dan Ketepatan', '2022-05-19 05:34:17', '2022-05-19 05:34:17'),
(24, 'Kurang Cukup', 1, 'Mempunyai Kefasihan', '2022-05-19 05:34:48', '2022-05-19 05:34:48'),
(25, 'Kurang', 0, 'Tidak Mempunyai Kefasihan, Ketepatan, Pelafalan, dan Strategi Komunikasi', '2022-05-19 05:35:28', '2022-05-19 05:35:28'),
(26, 'Sangat Baik', 4, 'Mampu Menjelaskan Visi Misi dan Memberikan Gambaran Visi Misi', '2022-05-19 05:37:55', '2022-05-19 05:37:55'),
(27, 'Baik', 3, 'Mampu Menjelaskan Visi Misi', '2022-05-19 05:38:45', '2022-05-19 05:38:45'),
(28, 'Cukup', 2, 'Mampu Menjelaskan Visi', '2022-05-19 05:39:27', '2022-05-19 05:39:27'),
(29, 'Kurang Cukup', 1, 'Mampu Menjelaskan Misi', '2022-05-19 05:40:05', '2022-05-19 05:40:05'),
(30, 'Kurang', 0, 'Tidak Mampu Menjelaskan Visi Misi dan Memberikan Gambaran Visi Misi', '2022-05-19 05:40:20', '2022-05-19 05:40:20'),
(31, 'Sangat Baik', 4, 'Mengikuti Ibadah Haji dan Umrah > 4x', '2022-05-19 05:43:17', '2022-06-25 06:39:15'),
(32, 'Baik', 3, 'Mengikuti Ibadah Haji dan Umrah 3x', '2022-05-19 05:43:59', '2022-05-19 05:43:59'),
(33, 'Cukup', 2, 'Mengikuti Ibadah Haji dan Umrah 2x', '2022-05-19 05:44:24', '2022-05-19 05:44:24'),
(34, 'Kurang Cukup', 1, 'Mengikuti Ibadah Haji dan Umrah 1x', '2022-05-19 05:44:45', '2022-05-19 05:44:45'),
(35, 'Kurang', 0, 'Tidak Pernah Mengikuti Ibadah Haji dan Umrah', '2022-05-19 05:45:12', '2022-05-19 05:45:12'),
(36, 'Sangat Baik', 4, 'Menjadi Panitia inti Ibadah Haji dan Umrah > 4x', '2022-05-19 05:47:59', '2022-06-25 06:40:35'),
(37, 'Baik', 3, 'Menjadi Panitia inti Ibadah Haji dan Umrah 3x', '2022-05-19 05:49:07', '2022-06-25 06:40:43'),
(38, 'Cukup', 2, 'Menjadi Panitia inti Ibadah Haji dan Umrah 2x', '2022-05-19 05:51:17', '2022-06-25 06:40:52'),
(39, 'Kurang Cukup', 1, 'Menjadi Panitia inti Ibadah Haji dan Umrah 1x', '2022-05-19 05:52:16', '2022-06-25 06:41:05'),
(40, 'Kurang', 0, 'Tidak Pernah Menjadi Panitia inti Ibadah Haji dan Umrah', '2022-05-19 05:53:25', '2022-06-25 06:41:26'),
(42, 'Kurang', 0, 'Pengalaman Bekerja < 4 Tahun', '2022-06-25 07:07:34', '2022-06-25 07:07:34'),
(44, 'Sangat Baik', 4, 'coba', '2022-07-11 20:18:04', '2022-07-11 20:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('sekertaris','aKBIH','aPDM','aKBIH1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Yuliana', 'sekertaris@gmail.com', NULL, '$2y$10$Bsxi0JKAnkNSbdKP6EW5WO4nEd6tLbV8qtnyl1pvGKFUneceRCuNG', 'sekertaris', NULL, '2022-05-18 22:38:42', '2022-05-18 22:38:42'),
(2, 'Hendra', 'pdm@gmail.com', NULL, '$2y$10$7lAZn3nddH5KlMq0SWvIpe2kpBQPHRxtWs9a9dUFCsmEIge9vam9W', 'aPDM', NULL, '2022-05-22 06:07:01', '2022-05-22 06:07:01'),
(3, 'Jamaaludin', 'kbihu@gmail.com', NULL, '$2y$10$QmVM2v/kq3xRXZKJC6aqgeoPl4cTF2MOPx.8vdv0Up8e7MnNZAEM.', 'aKBIH', NULL, '2022-05-22 06:07:53', '2022-05-22 06:07:53'),
(4, 'Farida', 'kbihu2@gmail.com', NULL, '$2y$10$xD2uMLeB0ydCqV0KbckPrugOPRgQS0h1IzaIa7EJMPwPDGuwkMa.O', 'aKBIH1', NULL, '2022-05-22 06:19:40', '2022-05-22 06:19:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif_anggota`
--
ALTER TABLE `alternatif_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif_anggota_id_index` (`id`);

--
-- Indexes for table `alternatif_ketua`
--
ALTER TABLE `alternatif_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif_ketua_id_index` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_penilaian_anggota`
--
ALTER TABLE `hasil_penilaian_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_penilaian_ketua`
--
ALTER TABLE `hasil_penilaian_ketua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria_anggota`
--
ALTER TABLE `kriteria_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria_ketua`
--
ALTER TABLE `kriteria_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_ketua_id_index` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penilaian_anggota`
--
ALTER TABLE `penilaian_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_anggota_index` (`alternatif_id`,`nilai_1`,`nilai_2`,`nilai_3`,`nilai_4`),
  ADD KEY `penilaian_anggota_user_id_foreign` (`user_id`);

--
-- Indexes for table `penilaian_ketua`
--
ALTER TABLE `penilaian_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaian_ketua_index` (`alternatif_id`,`nilai_1`,`nilai_2`,`nilai_3`,`nilai_4`,`nilai_5`,`nilai_6`,`nilai_7`,`nilai_8`),
  ADD KEY `penilaian_ketua_user_id_foreign` (`user_id`);

--
-- Indexes for table `periode_anggota`
--
ALTER TABLE `periode_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode_ketua`
--
ALTER TABLE `periode_ketua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pivot_anggota`
--
ALTER TABLE `pivot_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_anggota_index` (`anggota_id`,`subanggota_id`,`id`),
  ADD KEY `pivot_anggota_subanggota_id_foreign` (`subanggota_id`);

--
-- Indexes for table `pivot_ketua`
--
ALTER TABLE `pivot_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_ketua_index` (`ketua_id`,`subketua_id`,`id`),
  ADD KEY `pivot_ketua_subketua_id_foreign` (`subketua_id`);

--
-- Indexes for table `riwayat_penilaian_anggota`
--
ALTER TABLE `riwayat_penilaian_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_penilian_anggota_index` (`periode_id`,`id`);

--
-- Indexes for table `riwayat_penilaian_ketua`
--
ALTER TABLE `riwayat_penilaian_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_penilian_ketua_index` (`periode_id`,`id`);

--
-- Indexes for table `sub_kriteria_anggota`
--
ALTER TABLE `sub_kriteria_anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kriteria_anggota_index` (`sub_kriteria`,`nilai`,`keterangan`);

--
-- Indexes for table `sub_kriteria_ketua`
--
ALTER TABLE `sub_kriteria_ketua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kriteria_ketua_index` (`sub_kriteria`,`nilai`,`keterangan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif_anggota`
--
ALTER TABLE `alternatif_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `alternatif_ketua`
--
ALTER TABLE `alternatif_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_penilaian_anggota`
--
ALTER TABLE `hasil_penilaian_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `hasil_penilaian_ketua`
--
ALTER TABLE `hasil_penilaian_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kriteria_anggota`
--
ALTER TABLE `kriteria_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_ketua`
--
ALTER TABLE `kriteria_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `penilaian_anggota`
--
ALTER TABLE `penilaian_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `penilaian_ketua`
--
ALTER TABLE `penilaian_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `periode_anggota`
--
ALTER TABLE `periode_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `periode_ketua`
--
ALTER TABLE `periode_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pivot_anggota`
--
ALTER TABLE `pivot_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pivot_ketua`
--
ALTER TABLE `pivot_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `riwayat_penilaian_anggota`
--
ALTER TABLE `riwayat_penilaian_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `riwayat_penilaian_ketua`
--
ALTER TABLE `riwayat_penilaian_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `sub_kriteria_anggota`
--
ALTER TABLE `sub_kriteria_anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub_kriteria_ketua`
--
ALTER TABLE `sub_kriteria_ketua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian_anggota`
--
ALTER TABLE `penilaian_anggota`
  ADD CONSTRAINT `penilaian_anggota_alternatif_id_foreign` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif_anggota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_anggota_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `penilaian_ketua`
--
ALTER TABLE `penilaian_ketua`
  ADD CONSTRAINT `penilaian_ketua_alternatif_id_foreign` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif_ketua` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `penilaian_ketua_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pivot_anggota`
--
ALTER TABLE `pivot_anggota`
  ADD CONSTRAINT `pivot_anggota_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `kriteria_anggota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_anggota_subanggota_id_foreign` FOREIGN KEY (`subanggota_id`) REFERENCES `sub_kriteria_anggota` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pivot_ketua`
--
ALTER TABLE `pivot_ketua`
  ADD CONSTRAINT `pivot_ketua_ketua_id_foreign` FOREIGN KEY (`ketua_id`) REFERENCES `kriteria_ketua` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_ketua_subketua_id_foreign` FOREIGN KEY (`subketua_id`) REFERENCES `sub_kriteria_ketua` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_penilaian_anggota`
--
ALTER TABLE `riwayat_penilaian_anggota`
  ADD CONSTRAINT `riwayat_penilaian_anggota_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode_anggota` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_penilaian_ketua`
--
ALTER TABLE `riwayat_penilaian_ketua`
  ADD CONSTRAINT `riwayat_penilaian_ketua_periode_id_foreign` FOREIGN KEY (`periode_id`) REFERENCES `periode_ketua` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
