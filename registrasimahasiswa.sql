-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 02:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasimahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakeluarga`
--

CREATE TABLE `datakeluarga` (
  `id_dakel` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `pek_ayah` varchar(30) DEFAULT NULL,
  `no_ayah` varchar(30) DEFAULT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `pek_ibu` varchar(30) DEFAULT NULL,
  `no_ibu` varchar(30) DEFAULT NULL,
  `saudara1` varchar(30) DEFAULT NULL,
  `saudara2` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datakeluarga`
--

INSERT INTO `datakeluarga` (`id_dakel`, `id`, `nama_ayah`, `pek_ayah`, `no_ayah`, `nama_ibu`, `pek_ibu`, `no_ibu`, `saudara1`, `saudara2`, `created_at`, `updated_at`) VALUES
(3, 3, 'Budi Riyanto', 'Wiraswasta', '085218875074', 'Yusrini', 'Ibu Rumah Tangga', '081286209698', 'Ryan Praseiawan', 'Raul Prasetio', '2023-03-12 01:47:49', '2023-03-12 05:56:21'),
(4, 4, 'Taryono', 'Pegawai Negeri Sipil', NULL, 'Diana', 'Ibu Rumah Tangga', '08766529341', NULL, NULL, '2023-03-12 05:59:30', '2023-03-12 05:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgllhr` date NOT NULL,
  `bb` varchar(20) NOT NULL,
  `tb` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `goldar` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kel` varchar(20) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nik`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgllhr`, `bb`, `tb`, `agama`, `goldar`, `status`, `alamat`, `kel`, `kec`, `kota`, `prov`, `negara`, `no_hp`, `email`, `created_at`, `updated_at`) VALUES
(3, '3276062104990003', 'Ryan Prasetiawan', '-', 'Jakarta', '1999-04-21', '65', '170', '-', 'A', 'Belum Menikah', 'Jl.Ir.H.Juanda Gg.Mentengan 2 No.51 RT 03 RW 03', 'Kemiri Muka', 'Beji', 'Kota Depok', 'Jawa Barat', 'Indonesia', '089521322674', 'ryan.xmm1@gmail.com', '2023-03-12 01:47:48', '2023-03-12 05:56:21'),
(4, '3276067112490013', 'Mariam', 'Perempuan', 'Jakarta', '2023-03-30', '55', '165', 'Kristen', 'O', 'Menikah', 'Jl.Sawo No.56 RT 08/15', 'Pondok CIna', 'Pondok CIna', 'Kota Depok', 'Jawa Barat', 'Indonesia', '089652691986', 'mariam22@gmail.com', '2023-03-12 05:59:30', '2023-03-12 05:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_03_08_101401_create_mahasiswas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id_pengalaman` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `organisasi1` varchar(30) DEFAULT NULL,
  `tahun1` varchar(30) DEFAULT NULL,
  `jabatan1` varchar(30) DEFAULT NULL,
  `organisasi2` varchar(30) DEFAULT NULL,
  `tahun2` varchar(30) DEFAULT NULL,
  `jabatan2` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id_pengalaman`, `id`, `organisasi1`, `tahun1`, `jabatan1`, `organisasi2`, `tahun2`, `jabatan2`, `created_at`, `updated_at`) VALUES
(2, 3, 'OSIS', '2015', 'Ketua', 'LCC', '2017', 'Anggota', '2023-03-12 01:47:49', '2023-03-12 05:56:21'),
(3, 4, 'Pemuda Pancasila', '2018', 'Anggota', NULL, NULL, NULL, '2023-03-12 05:59:30', '2023-03-12 05:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sek` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `sd` varchar(30) DEFAULT NULL,
  `smp` varchar(30) DEFAULT NULL,
  `sma` varchar(30) DEFAULT NULL,
  `kuliah` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sek`, `id`, `sd`, `smp`, `sma`, `kuliah`, `created_at`, `updated_at`) VALUES
(3, 3, 'SDN Kemiri Muka 3', 'SMP Negeri 1 Depok', 'SMK Putra Bangsa Depok', 'Politeknik LP3I Jakarta', '2023-03-12 01:47:48', '2023-03-12 05:56:21'),
(4, 4, 'SDN Pondok Cina 5', 'SMP Negeri 5 Depok', 'SMA Negeri1 Depok', 'Universitas Terbuka', '2023-03-12 05:59:30', '2023-03-12 05:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakeluarga`
--
ALTER TABLE `datakeluarga`
  ADD PRIMARY KEY (`id_dakel`),
  ADD KEY `FK_dakel` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `FK_pengalaman` (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sek`),
  ADD KEY `FK_Sekolah` (`id`);

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
-- AUTO_INCREMENT for table `datakeluarga`
--
ALTER TABLE `datakeluarga`
  MODIFY `id_dakel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id_pengalaman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sek` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datakeluarga`
--
ALTER TABLE `datakeluarga`
  ADD CONSTRAINT `FK_dakel` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `FK_pengalaman` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `FK_Sekolah` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
