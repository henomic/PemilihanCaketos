-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2024 at 02:30 PM
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
-- Database: `caketos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '0001_01_01_000000_create_users_table', 1),
(23, '0001_01_01_000001_create_cache_table', 1),
(24, '0001_01_01_000002_create_jobs_table', 1),
(25, '2024_12_05_112913_create_periode_table', 1),
(26, '2024_12_05_113102_create_paslon_table', 1),
(27, '2024_12_05_113139_create_suara_table', 1),
(28, '2024_12_05_135717_add_id_periode_column_to_paslon_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paslon`
--

CREATE TABLE `paslon` (
  `id` bigint UNSIGNED NOT NULL,
  `no_paslon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ketua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wakil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jargon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_periode` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paslon`
--

INSERT INTO `paslon` (`id`, `no_paslon`, `nama_ketua`, `nama_wakil`, `foto`, `visi`, `misi`, `jargon`, `vid`, `created_at`, `updated_at`, `id_periode`) VALUES
(6, 'paslon-1', 'Muhamad zaji', 'soni', 'foto_paslon//kOdb0HVv4C7adoVbe8psdLFARd9sui7ow0vADU9X.png', 'miaw', 'miaw', 'miaw', 'w', '2024-12-05 08:53:23', '2024-12-05 17:42:54', 4),
(7, 'paslon-1', 'sandiaga uno', 'sopian', 'foto_paslon//KcfuOz8jj16Uq069pp7Kpubq5MZIRbn1hkzuGvGf.jpg', 'Visi:\r\nMenjadikan sekolah sebagai lingkungan yang inspiratif, inovatif, dan berprestasi dengan mengutamakan nilai kebersamaan serta integritas.', 'Misi:\r\nMeningkatkan partisipasi siswa dalam kegiatan akademik dan non-akademik melalui program-program kreatif.\r\nMembangun budaya kepemimpinan yang demokratis, kolaboratif, dan berorientasi pada solusi.\r\nMengembangkan teknologi untuk mendukung transparansi dan komunikasi dalam kegiatan sekolah.\r\nMendorong kesadaran sosial melalui kegiatan berbasis pengabdian masyarakat.\r\nMewujudkan lingkungan sekolah yang aman, nyaman, dan ramah bagi seluruh siswa dan guru', 'Bersama kami pasti happy', 'w', '2024-12-05 18:24:30', '2024-12-07 19:45:55', 5),
(8, 'paslon-2', 'bugi', 'pikri', 'foto_paslon//XmgH6nFkMtf1d0Vdks26zqOgzZg3kbtCkGqMraUK.jpg', 'bugi', 'bugi', 'menganjutkan', 'w', '2024-12-05 22:32:56', '2024-12-07 19:08:53', 5),
(9, 'paslon-3', 'Rifki', 'Bugi', 'foto_paslon//wIaqdPxgUxLhJicyjjqvlDC6a92h7R0pP3dtavJ6.jpg', 'Menangken yeh', 'hehe', 'woi', 'w', '2024-12-07 03:16:41', '2024-12-07 19:09:04', 5),
(10, 'paslon-1', 'waw', 'cihuy', 'foto_paslon//HwAEEnasFipGBzk8XRglUzDYTtpWx11QpLQNxrQJ.jpg', 'kqkmskm', 'kmdk', 'dwkkmdw', 'w', '2024-12-08 00:02:01', '2024-12-08 00:02:01', 6);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` bigint UNSIGNED NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `tahun`, `status`, `created_at`, `updated_at`) VALUES
(4, '2023', 'selesai', '2024-12-05 08:53:23', '2024-12-05 18:20:50'),
(5, '2024', 'pemilihan', '2024-12-05 18:24:30', '2024-12-10 00:06:09'),
(6, '2020', 'selesai', '2024-12-08 00:02:01', '2024-12-08 00:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FAlC2qW4pwZ7BqvPzN0MJlZRi6xckuiITjP4FRgP', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS25aUUZuSURzYXg4OENlZ0Rid2U0bTh4alhIZk5ZYlN2TFFGVVN1bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbkhhc2lsU3VhcmEvNT9wYXJhbT1wcmludCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiYWxlcnQiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjk7fQ==', 1733839531);

-- --------------------------------------------------------

--
-- Table structure for table `suara`
--

CREATE TABLE `suara` (
  `id` bigint UNSIGNED NOT NULL,
  `id_paslon` bigint UNSIGNED NOT NULL,
  `id_tps` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suara`
--

INSERT INTO `suara` (`id`, `id_paslon`, `id_tps`, `created_at`, `updated_at`) VALUES
(14, 6, 2, '2024-12-07 20:28:03', '2024-12-07 20:28:03'),
(49, 7, 2, '2024-12-09 00:47:48', '2024-12-09 00:47:48'),
(50, 7, 2, '2024-12-10 00:06:57', '2024-12-10 00:06:57'),
(51, 9, 2, '2024-12-10 00:08:31', '2024-12-10 00:08:31'),
(52, 8, 2, '2024-12-10 00:09:19', '2024-12-10 00:09:19'),
(53, 9, 3, '2024-12-10 00:10:23', '2024-12-10 00:10:23'),
(54, 8, 2, '2024-12-10 00:28:38', '2024-12-10 00:28:38'),
(55, 8, 2, '2024-12-10 00:29:06', '2024-12-10 00:29:06'),
(56, 7, 2, '2024-12-10 05:40:01', '2024-12-10 05:40:01'),
(57, 9, 2, '2024-12-10 05:41:18', '2024-12-10 05:41:18'),
(58, 9, 2, '2024-12-10 06:04:25', '2024-12-10 06:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'TPS-1', 'tps', 'aktif', '$2y$12$hijx7ff/s/3KclHT.FiBGekZSiEQkWEkjEPDvQ5rYr4upvrk/D1py', NULL, '2024-12-06 04:49:52', '2024-12-06 05:15:44'),
(3, 'TPS-2', 'tps', 'aktif', '$2y$12$GhCrXsyDpQ3.IXv1ASjGGeWxL.qSyC84./q.0BLuRW8K9LGCzYUOO', NULL, '2024-12-06 04:51:19', '2024-12-06 05:14:01'),
(4, 'TPS-3', 'tps', 'aktif', '$2y$12$d1E9hj1KHr.oxveNUxR/p.INvT8cC1denTXbjKEsGP2ZY.ct6yoUG', NULL, '2024-12-06 05:01:16', '2024-12-06 05:14:46'),
(5, 'sandi', 'admin', 'aktif', '$2y$12$lt9Eu4vSmy3xaf8PaLqW0.7JuSF0TRJbOcQAP.YYgRn8bx8arGhC2', NULL, '2024-12-10 00:03:30', '2024-12-10 06:32:45'),
(6, 'TPS-4', 'tps', 'aktif', '$2y$12$9Pu64UwklSHISPtZ9Qdt6u4I7aYpc7t6B/NyXLUCDvOdn9LT/LYze', NULL, '2024-12-10 00:05:03', '2024-12-10 00:05:03'),
(7, 'TPS-5', 'tps', 'aktif', '$2y$12$uhM6pgHgCDYnlDzpUjhQu.7zDN6YEQLMRmdxhHDQpmS9jpsAbijWq', NULL, '2024-12-10 00:05:08', '2024-12-10 00:05:08'),
(8, 'TPS-6', 'tps', 'aktif', '$2y$12$XsooVyecTtAj4BWelyaTTedQoPfM9RwpQeO5xJbQwdvW5NequdJJe', NULL, '2024-12-10 00:05:13', '2024-12-10 00:05:13'),
(9, 'soni', 'admin', 'aktif', '$2y$12$aD8id0LXEidM3h32S6OlU..Z840WqSE9xXGaqXsQ4Qxntyik/.7hi', NULL, '2024-12-10 06:34:16', '2024-12-10 06:34:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslon`
--
ALTER TABLE `paslon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paslon_id_periode_foreign` (`id_periode`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `periode_tahun_unique` (`tahun`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suara_id_paslon_foreign` (`id_paslon`),
  ADD KEY `suara_id_tps_foreign` (`id_tps`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `paslon`
--
ALTER TABLE `paslon`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paslon`
--
ALTER TABLE `paslon`
  ADD CONSTRAINT `paslon_id_periode_foreign` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suara`
--
ALTER TABLE `suara`
  ADD CONSTRAINT `suara_id_paslon_foreign` FOREIGN KEY (`id_paslon`) REFERENCES `paslon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suara_id_tps_foreign` FOREIGN KEY (`id_tps`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
