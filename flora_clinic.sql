-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 10:50 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flora_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

CREATE TABLE `medical_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pasien_id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `jumlah_dipakai` int(11) NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obat_id2` int(11) DEFAULT NULL,
  `obat_id3` int(11) DEFAULT NULL,
  `obat_id4` int(11) DEFAULT NULL,
  `obat_id5` int(11) DEFAULT NULL,
  `jumlah_dipakai2` int(11) DEFAULT NULL,
  `jumlah_dipakai3` int(11) DEFAULT NULL,
  `jumlah_dipakai4` int(11) DEFAULT NULL,
  `jumlah_dipakai5` int(11) DEFAULT NULL,
  `tinggi` bigint(20) NOT NULL,
  `berat` bigint(20) NOT NULL,
  `aturan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_penyakit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aturan2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aturan3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aturan4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aturan5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`id`, `created_at`, `updated_at`, `pasien_id`, `obat_id`, `jumlah_dipakai`, `keluhan`, `diagnosa`, `obat_id2`, `obat_id3`, `obat_id4`, `obat_id5`, `jumlah_dipakai2`, `jumlah_dipakai3`, `jumlah_dipakai4`, `jumlah_dipakai5`, `tinggi`, `berat`, `aturan`, `jenis_penyakit`, `aturan2`, `aturan3`, `aturan4`, `aturan5`, `keterangan`, `keterangan2`, `keterangan3`, `keterangan4`, `keterangan5`) VALUES
(45, '2023-06-20 14:22:59', '2023-06-20 14:22:59', 27, 34, 2, '\"Selama beberapa minggu terakhir, saya telah mengalami gejala yang membuat saya khawatir, seperti sering merasa lelah yang berlebihan dan hilangnya nafsu makan secara signifikan, yang menyebabkan penurunan berat badan yang tidak diinginkan dan mengganggu aktivitas sehari-hari saya.\"', 'Kelelahan dan hilangnya nafsu makan bisa menjadi gejala dari berbagai masalah kesehatan. Namun, salah satu diagnosis yang mungkin adalah gangguan tiroid, seperti hipotiroidisme, di mana kelenjar tiroid tidak menghasilkan cukup hormon tiroid. Hal ini dapat menyebabkan kelelahan dan hilangnya nafsu makan. Sebuah pemeriksaan darah untuk mengukur kadar hormon tiroid, seperti TSH dan T4, mungkin diperlukan untuk mengkonfirmasi diagnosis.', 37, NULL, NULL, NULL, 3, NULL, NULL, NULL, 150, 50, '2x1', 'Ringan', '3x1', NULL, NULL, NULL, 'Setelah Makan', 'Sebelum Makan', NULL, NULL, NULL),
(46, '2023-06-20 18:34:47', '2023-06-20 18:34:47', 26, 32, 1, 'Demam, batuk, pilek.', 'Infeksi saluran pernapasan atas (ISPA) akibat virus.', 41, NULL, NULL, NULL, 2, NULL, NULL, NULL, 170, 50, '2x1', 'Sedang', '1x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(47, '2023-06-20 18:36:42', '2023-06-20 18:36:42', 30, 35, 1, 'Sakit tenggorokan, sulit menelan, pembengkakan kelenjar getah bening.', 'Infeksi tenggorokan, radang amandel, mononukleosis.', 37, NULL, NULL, NULL, 1, NULL, NULL, NULL, 165, 50, '2x1', 'Sedang', '2x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(48, '2023-06-20 18:37:42', '2023-06-20 18:37:42', 32, 35, 1, 'Kelelahan, berat badan menurun, demam.', 'Infeksi menular darah, tuberkulosis, kanker.', 42, NULL, NULL, NULL, 1, NULL, NULL, NULL, 160, 50, '3x1', 'Berat', '2x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(49, '2023-06-20 18:39:26', '2023-06-20 18:39:26', 33, 35, 1, 'Nyeri sendi, kaku, pembengkakan.', 'Arthritis, rematoid arthritis, osteoarthritis', 34, NULL, NULL, NULL, 1, NULL, NULL, NULL, 170, 50, '3x1', 'Sedang', '2x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(50, '2023-06-20 18:40:57', '2023-06-20 18:40:57', 29, 35, 1, 'Penurunan berat badan, diare kronis, anemia.', 'Penyakit celiac, sindrom iritasi usus besar, parasit usus.', 34, NULL, NULL, NULL, 1, NULL, NULL, NULL, 160, 45, '3x1', 'Berat', '3x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(51, '2023-06-20 18:45:50', '2023-06-20 18:45:50', 28, 35, 1, 'Ruam kulit, gatal-gatal, bengkak.', 'Alergi kulit, dermatitis, urtikaria.', 40, NULL, NULL, NULL, 1, NULL, NULL, NULL, 170, 50, '3x1', 'Ringan', '3x1', NULL, NULL, NULL, 'Setelah Makan', 'Sebelum Makan', NULL, NULL, NULL),
(52, '2023-06-20 20:33:22', '2023-06-20 20:33:22', 26, 32, 1, 'sakit kepala', 'migrain', 34, NULL, NULL, NULL, 1, NULL, NULL, NULL, 160, 60, '2x1', 'Ringan', '1x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL),
(53, '2023-06-20 21:42:13', '2023-06-20 21:42:13', 35, 32, 1, 'Sakit Kepala,  Pilek', 'Flu', 41, NULL, NULL, NULL, 1, NULL, NULL, NULL, 150, 50, '3x1', 'Ringan', '2x1', NULL, NULL, NULL, 'Setelah Makan', 'Setelah Makan', NULL, NULL, NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_27_140936_create_roles_table', 1),
(6, '2023_05_01_131102_add_profile_photo_to_users_table', 1),
(7, '2023_05_09_082228_create_patients_table', 1),
(8, '2023_05_17_085039_create_obats_table', 1),
(9, '2023_05_23_022757_create_medical_record_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('Tersedia','Tidak Tersedia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kemasan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `singkatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `ukuran`, `keterangan`, `tanggal_masuk`, `jumlah`, `status`, `created_at`, `updated_at`, `kemasan`, `deleted_at`, `singkatan`) VALUES
(17, 'Acarbose', NULL, 'obat demam', '2004-02-03', 9, 'Tersedia', '2023-06-18 02:33:05', '2023-06-18 07:14:10', 'Tablet', '2023-06-18 07:14:10', NULL),
(18, 'Acarbose', NULL, 'Obat Demam', '2023-06-18', 2, 'Tersedia', '2023-06-18 07:14:35', '2023-06-18 07:15:00', 'Tablet', '2023-06-18 07:15:00', NULL),
(19, 'Paracetamol', NULL, 'Obat Demam', '2023-05-31', 5, 'Tersedia', '2023-06-18 07:14:48', '2023-06-18 07:15:07', 'Sirop', '2023-06-18 07:15:07', NULL),
(20, 'Acarbose', NULL, 'Obat Demam', '2023-06-21', 4, 'Tersedia', '2023-06-18 07:16:05', '2023-06-18 07:20:07', 'Tablet', '2023-06-18 07:20:07', NULL),
(21, 'Acarbose', NULL, 'Obat Demam', '2023-06-18', 21, 'Tersedia', '2023-06-18 07:24:02', '2023-06-18 07:24:07', 'Tablet', '2023-06-18 07:24:07', NULL),
(22, 'Acarbose', NULL, 'Obat demam', '2023-06-12', 3, 'Tersedia', '2023-06-18 07:24:29', '2023-06-18 07:24:33', 'Tablet', '2023-06-18 07:24:33', NULL),
(23, 'Acarbose', NULL, 'Obat Demam', '2023-06-05', 5, 'Tersedia', '2023-06-18 07:24:55', '2023-06-18 07:25:07', 'Tablet', '2023-06-18 07:25:07', NULL),
(24, 'Acarbose', NULL, 'Obat Demam', '2023-06-11', 21, 'Tersedia', '2023-06-18 07:29:31', '2023-06-18 07:30:31', 'Tablet', '2023-06-18 07:30:31', NULL),
(25, 'Acarbose', NULL, 'Obat Demam', '2023-06-18', 3, 'Tersedia', '2023-06-18 07:30:53', '2023-06-18 07:31:21', 'Tablet', '2023-06-18 07:31:21', NULL),
(26, 'Acarbose', NULL, 'Obat Demam', '2023-05-31', 8, 'Tersedia', '2023-06-18 07:31:12', '2023-06-18 07:36:49', 'Tablet', '2023-06-18 07:36:49', NULL),
(27, 'Acarbose', NULL, 'Obat Demam', '2023-06-18', 32, 'Tersedia', '2023-06-18 07:37:35', '2023-06-18 07:39:11', 'Tablet', '2023-06-18 07:39:11', NULL),
(28, 'Acarbose', NULL, 'Obat Demam', '2023-06-19', 312, 'Tersedia', '2023-06-18 07:39:54', '2023-06-18 07:40:11', 'Sirop', '2023-06-18 07:40:11', NULL),
(29, 'Acarbose', NULL, 'Obathy', '2023-06-29', 421, 'Tersedia', '2023-06-18 07:41:40', '2023-06-18 07:41:53', 'Tablet', '2023-06-18 07:41:53', NULL),
(30, 'Acarbose', NULL, 'eqe', '2023-06-02', 231, 'Tersedia', '2023-06-18 07:41:49', '2023-06-18 19:47:20', 'Tablet', '2023-06-18 19:47:20', NULL),
(31, 'Paracetamol', NULL, 'Obat sakit kepala', '2023-06-19', 5, 'Tersedia', '2023-06-19 01:12:15', '2023-06-19 01:12:43', 'Tablet', '2023-06-19 01:12:43', NULL),
(32, 'Paracetamol', '10btr', 'Obat Sakit Kepala', '2023-06-19', 3, 'Tersedia', '2023-06-19 01:13:40', '2023-06-20 21:42:13', 'Tablet', NULL, 'Pct'),
(33, 'Salbron', '50ml', 'Obat Sesak', '2023-05-20', 0, 'Tersedia', '2023-06-19 01:13:53', '2023-06-20 11:40:44', 'Sirop', NULL, 'Slb'),
(34, 'Acyclovir', '5btr', 'Obat Diare', '2023-06-19', 5, 'Tersedia', '2023-06-19 01:56:36', '2023-06-20 14:22:59', 'Tablet', NULL, 'Acy'),
(35, 'Amoxicillin', '100ml', 'Antibiotik', '2023-06-21', 0, 'Tersedia', '2023-06-20 10:50:09', '2023-06-20 18:45:50', 'Hirup', NULL, 'Amxc'),
(36, 'Metformin', '10btr', 'Obat Diabetes', '2023-06-20', 0, 'Tidak Tersedia', '2023-06-20 10:53:59', '2023-06-20 10:53:59', 'Tablet', NULL, 'Mtf'),
(37, 'Atorvastatin', '150ml', 'Obat Kolestrol', '2023-06-22', 5, 'Tersedia', '2023-06-20 10:54:41', '2023-06-20 11:40:17', 'Sirop', NULL, 'Atv'),
(38, 'Ciprofloxacin', '10btr', 'Antibiotik', '2023-06-21', 10, 'Tersedia', '2023-06-20 11:33:13', '2023-06-20 11:33:13', 'Tablet', NULL, 'Cprx'),
(39, 'Ibuprofen', '100ml', 'demam dan sakit kepala', '2023-06-21', 0, 'Tersedia', '2023-06-20 18:28:21', '2023-06-20 18:31:39', 'Sirop', NULL, 'ibp'),
(40, 'Cetirizine', '10btr', 'meredakan gejala alergi', '2023-06-21', 10, 'Tersedia', '2023-06-20 18:29:34', '2023-06-20 18:29:34', 'Tablet', NULL, 'ctz'),
(41, 'Salbutamol', '10btr', 'mengatasi gejala asma', '2023-06-21', 11, 'Tersedia', '2023-06-20 18:30:25', '2023-06-20 18:30:25', 'Tablet', NULL, 'vtn'),
(42, 'Ondansetron', '10btr', 'mengatasi mual dan muntah', '2023-06-21', 10, 'Tersedia', '2023-06-20 18:31:11', '2023-06-20 18:31:11', 'Tablet', NULL, 'odt'),
(43, 'Ranitidine', '50ml', 'mengurangi produksi asam lambung dan mengobati gejala refluks asam pada anak.', '2023-06-21', 9, 'Tersedia', '2023-06-20 18:42:29', '2023-06-20 18:42:29', 'Hirup', NULL, 'rdt');

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `wali` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender`, `phone_number`, `address`, `created_at`, `updated_at`, `deleted_at`, `tanggal_lahir`, `wali`) VALUES
(26, 'David Simamora', 'Laki-laki', '0821 7564 7636', 'Porsea, Sumatera Utara', '2023-06-19 01:11:18', '2023-06-20 22:23:07', NULL, '2008-06-11', 'Bpk. Jacob Simamora'),
(27, 'William Situmorang', 'Laki-Laki', '0821 6482 5876', 'Porsea, Sumatera Utara', '2023-06-20 10:26:41', '2023-06-20 10:26:41', NULL, '2002-05-31', 'Bpk. Victor Situmorang'),
(28, 'Gunawan Sinaga', 'Laki-Laki', '0897 7643 7654', 'Laguboti, Sumatera Utara', '2023-06-20 10:27:11', '2023-06-20 10:27:11', NULL, '2014-06-21', 'Bpk. Hans Sinaga'),
(29, 'Ezra Sibarani', 'Perempuan', '0852 7645 8798', 'Laguboti, Sumatera Utara', '2023-06-20 10:27:38', '2023-06-20 10:27:38', NULL, '2014-02-21', 'Bpk. Haji Sibarani'),
(30, 'Edward Panjaitan', 'Laki-Laki', '0821 8764 8764', 'Parsoburan, Sumatera Utara', '2023-06-20 10:33:25', '2023-06-20 10:33:25', NULL, '2007-06-14', 'Bpk. Wilson Panjaitan'),
(31, 'Andreas Marbun', 'Laki-Laki', '0876 8765 0987', 'Medan, Sumatera Utara', '2023-06-20 10:35:50', '2023-06-20 10:35:50', NULL, '2009-06-11', 'Bpk. Boy Marbun'),
(32, 'Angel Stephanie', 'Perempuan', '0898 8726 6534', 'Laguboti, Sumatera Utara', '2023-06-20 10:36:55', '2023-06-20 10:36:55', NULL, '2004-10-23', 'Ibu Hani Siregar'),
(33, 'Joseph Napitupulu', 'Laki-Laki', '0872 7626 7546', 'Parsoburan, Sumatera Utara', '2023-06-20 10:37:34', '2023-06-20 10:37:34', NULL, '2007-06-21', 'Bpk. Gunawan Napitupulu'),
(34, 'Bernad Tumanggor', 'Laki-Laki', '085267849075', 'Laguboti', '2023-06-20 21:02:36', '2023-06-20 21:02:36', NULL, '2016-03-07', 'Orang/Tua'),
(35, 'Renhat', 'Laki-Laki', '081384871163', 'Tambunan, Balige', '2023-06-20 21:38:42', '2023-06-20 21:38:42', NULL, '2015-06-05', 'Roberto Sibarani'),
(36, 'David', 'Laki-laki', '123', 'Medan', '2023-06-20 22:03:31', '2023-06-20 22:11:31', NULL, '2023-06-22', 'patricia'),
(37, 'Darwin Sibarani', 'Laki-Laki', '09668999', 'Porsea', '2023-06-20 23:36:06', '2023-06-20 23:36:06', NULL, '2023-06-05', 'rayn');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'dokter', '2023-06-07 20:15:16', '2023-06-07 20:15:16'),
(2, 'asisten', '2023-06-07 20:15:16', '2023-06-07 20:15:16');

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
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'flora', 'williamstmrg31@gmail.com', NULL, '$2y$10$nJuuksx8.BRbJk.GV9nvFear9ycODs8FUO1/XIixWYVOqAFqq6VDG', 1, 'xtKvJf8ZR3jCp4nxnBBaRePgNzQjlDzA7cPynXXOguzdkcptwvOukrZPK8Qp', '2023-06-07 20:15:16', '2023-06-19 01:19:50'),
(2, 'William', 'william@gmail.com', NULL, '$2y$10$AV8YgDtHGMVS6GmEB7..IOZ7s13yCdl6MsniXajNMO/V9DJXQkQY6', 2, NULL, '2023-06-07 20:15:16', '2023-06-07 20:15:16'),
(5, 'David Simamora', 'david@gmail.com', NULL, '$2y$10$szGzYBvx8pwEmV58pLtQy.5PZv0ajVq7Qz7ncW2H8gSxFu0dxgFia', 2, NULL, '2023-06-18 19:38:51', '2023-06-18 19:38:51'),
(6, 'Fanny Sinaga', 'fanny@gmail.com', NULL, '$2y$10$D1zi/X95Pl/nzcVQVxibJOKvHNwp5uXuLelio610F.ZgriXMTh64e', 2, NULL, '2023-06-19 01:14:27', '2023-06-19 01:14:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pasien_id` (`pasien_id`),
  ADD KEY `fk_obat_id` (`obat_id`),
  ADD KEY `fk_obat_id2` (`obat_id2`),
  ADD KEY `fk_obat_id3` (`obat_id3`),
  ADD KEY `fk_obat_id4` (`obat_id4`),
  ADD KEY `fk_obat_id5` (`obat_id5`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_record`
--
ALTER TABLE `medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `fk_obat_id` FOREIGN KEY (`obat_id`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obat_id2` FOREIGN KEY (`obat_id2`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obat_id3` FOREIGN KEY (`obat_id3`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obat_id4` FOREIGN KEY (`obat_id4`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_obat_id5` FOREIGN KEY (`obat_id5`) REFERENCES `obats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pasien_id` FOREIGN KEY (`pasien_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
