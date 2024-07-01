-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 08.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakurikulers`
--

CREATE TABLE `ekstrakurikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ekstrakurikuler` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari_masuk` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ekstrakurikulers`
--

INSERT INTO `ekstrakurikulers` (`id`, `ekstrakurikuler`, `hari_masuk`, `jam_masuk`, `created_at`, `updated_at`) VALUES
(1, 'Sepak Bola', '2023-06-04', '08:04:00', '2023-06-03 07:02:36', '2023-06-03 07:02:36'),
(2, 'Pramuka', '2023-06-03', '13:02:00', '2023-06-03 07:02:56', '2023-06-03 07:02:56'),
(3, 'Badminton', '2023-06-11', '11:03:00', '2023-06-03 07:03:10', '2023-06-03 07:03:10'),
(4, 'Makan-makan dong', '2023-06-25', '09:31:00', '2023-06-03 17:31:30', '2023-06-03 17:31:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`id`, `nama`, `agama`, `jenis_kelamin`, `no_hp`, `email`, `alamat`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'Feri Irawan, S.pd', 'Islam', 'Laki-Laki', '081234567890', 'feriirawan@gmail.com', 'Turen Kabupaten Malang', 'S1 Pendidikan UM', '2023-06-03 06:50:03', '2023-06-03 06:50:03'),
(2, 'Fadilah Umi, S.Pd', 'Islam', 'Perempuan', '081847298720', 'fadilahumi@gmail.com', 'Tendean Turen Kab. Malang', 'S1 Pendidikan UM', '2023-06-03 06:52:30', '2023-06-03 06:52:30'),
(3, 'Niken Handayani, S.Pd', 'Islam', 'Perempuan', '081865187031', 'nikencantik@gmail.com', 'Kediri Kabupaten Kediri', 'SI Pendidikan UNK', '2023-06-03 06:53:03', '2023-06-03 06:53:03'),
(4, 'Supardi, SP.pd', 'Islam', 'Laki-Laki', '081369736732', 'supardi123@gmail.com', 'Gondanglegi', 'SI Pendidikan UNESA', '2023-06-03 17:20:38', '2023-06-03 17:20:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajarans`
--

CREATE TABLE `jadwal_pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam_masuk` time NOT NULL,
  `hari_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_pelajarans`
--

INSERT INTO `jadwal_pelajarans` (`id`, `jam_masuk`, `hari_masuk`, `created_at`, `updated_at`) VALUES
(1, '07:00:00', '2023-06-19', '2023-06-03 06:57:57', '2023-06-03 06:57:57'),
(2, '08:30:00', '2023-06-20', '2023-06-03 06:59:24', '2023-06-03 06:59:24'),
(3, '09:50:00', '2023-06-13', '2023-06-03 06:59:39', '2023-06-03 06:59:39'),
(4, '12:03:00', '2023-06-21', '2023-06-03 06:59:53', '2023-06-03 06:59:53'),
(5, '10:28:00', '2023-06-13', '2023-06-03 17:28:21', '2023-06-03 17:28:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_nilais`
--

CREATE TABLE `jenis_nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nilai_uts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_nilais`
--

INSERT INTO `jenis_nilais` (`id`, `nilai_uts`, `nilai_uas`, `nilai_tugas`, `created_at`, `updated_at`) VALUES
(1, '90', '85', '78', '2023-06-03 07:01:17', '2023-06-03 07:01:17'),
(2, '87', '56', '90', '2023-06-03 07:01:26', '2023-06-03 07:01:26'),
(3, '76', '98', '75', '2023-06-03 07:01:36', '2023-06-03 07:01:36'),
(4, '76', '56', '80', '2023-06-03 07:01:46', '2023-06-03 07:01:46'),
(5, '90', '56', '80', '2023-06-03 07:01:56', '2023-06-03 07:01:56'),
(6, '90', '88', '90', '2023-06-03 17:30:25', '2023-06-03 17:30:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 'X', '120', '2023-06-03 06:55:04', '2023-06-03 06:55:04'),
(2, 'XI', '211', '2023-06-03 06:55:14', '2023-06-03 06:55:14'),
(3, 'XII', '223', '2023-06-03 06:55:21', '2023-06-03 06:55:21'),
(4, 'XII', '10', '2023-06-03 17:26:04', '2023-06-03 17:26:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajarans`
--

CREATE TABLE `mata_pelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mata_pelajarans`
--

INSERT INTO `mata_pelajarans` (`id`, `nama_pelajaran`, `kkm`, `created_at`, `updated_at`) VALUES
(2, 'Agama Islam', '70', '2023-06-03 06:53:30', '2023-06-03 06:53:30'),
(3, 'Matematika', '79', '2023-06-03 06:53:38', '2023-06-03 06:53:38'),
(4, 'Bahasa Indonesia', '80', '2023-06-03 06:53:53', '2023-06-03 06:53:53'),
(5, 'IPA', '79', '2023-06-03 06:54:03', '2023-06-03 06:54:03'),
(6, 'IPS', '75', '2023-06-03 06:54:11', '2023-06-03 06:54:11'),
(7, 'Sejarah Mantan', '75', '2023-06-03 17:21:46', '2023-06-03 17:22:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_24_040125_create_pegawais_table', 1),
(7, '2023_05_24_040819_create_murids_table', 1),
(8, '2023_05_26_031133_create_ekstrakurikulers_table', 1),
(9, '2023_05_26_031530_create_jenis_nilais_table', 1),
(10, '2023_05_26_031757_create_nilais_table', 1),
(11, '2023_05_26_031933_create_wali_murids_table', 1),
(12, '2023_05_26_032200_create_gurus_table', 1),
(13, '2023_05_26_032446_create_mata_pelajarans_table', 1),
(14, '2023_05_26_032607_create_jadwal_pelajarans_table', 1),
(15, '2023_05_26_032809_create_tahun_ajarans_table', 1),
(16, '2023_06_02_111912_create_kelas_table', 1),
(17, '2023_06_03_122635_create_pengguna_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murids`
--

CREATE TABLE `murids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `murids`
--

INSERT INTO `murids` (`id`, `NIS`, `nama`, `alamat`, `no_hp`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(5, '2118094', 'Arsya', 'Pagak', '082165436165', 'Laki-laki', 'Malang', '2023-06-29', '2023-06-03 06:43:40', '2023-06-03 06:43:40'),
(6, '2118095', 'Sisi Sasa', 'Turen', '08245678736', 'Perempuan', 'Malang', '2023-06-06', '2023-06-03 17:15:30', '2023-06-03 17:16:42'),
(7, '2118096', 'Kaka', 'Rejeni', '027369123723', 'Laki-laki', 'Malang', '2023-06-28', '2023-06-03 17:17:20', '2023-06-03 17:17:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_uas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilais`
--

INSERT INTO `nilais` (`id`, `nama`, `kelas`, `semester`, `nilai_uts`, `nilai_uas`, `nilai_tugas`, `created_at`, `updated_at`) VALUES
(1, 'Derry', 'XII', '4', '87', '88', '90', '2023-06-03 07:08:34', '2023-06-03 19:21:52'),
(2, 'Caca', 'XI', '2', '87', '56', '75', '2023-06-03 07:08:59', '2023-06-03 07:08:59'),
(3, 'Dominic', 'XII', '3', '90', '98', '90', '2023-06-03 07:45:33', '2023-06-03 07:45:33'),
(4, 'Letty', 'XI', '5', '90', '56', '78', '2023-06-03 17:24:30', '2023-06-03 17:24:30'),
(5, 'Sisi Sasa', 'X', '1', '76', '88', '90', '2023-06-03 17:50:12', '2023-06-03 19:23:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawais`
--

INSERT INTO `pegawais` (`id`, `nama_pegawai`, `alamat`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Drs. Ibnu Harsoyo', 'Pagak', 'Kepala Sekolah', '2023-06-03 07:03:33', '2023-06-03 07:03:33'),
(2, 'Ahmadi, S.Pd,M.Pd.', 'Turen', 'Wakil Kepala Sekolah', '2023-06-03 07:03:43', '2023-06-03 07:03:43'),
(3, 'Desi Ratnasari, S.T,M.T', 'Sumawe', 'Tata Usaha', '2023-06-03 07:03:52', '2023-06-03 07:03:52'),
(4, 'Derry F, S.T', 'Sumawe', 'Ketua Yayasan', '2023-06-03 17:32:42', '2023-06-03 17:32:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id`, `username`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'Derry', 'derry@gmail.com', '2023-06-03 07:04:18', '2023-06-03 07:04:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tahun_ajarans`
--

CREATE TABLE `tahun_ajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun_ajarans`
--

INSERT INTO `tahun_ajarans` (`id`, `tahun_ajaran`, `semester`, `created_at`, `updated_at`) VALUES
(2, '2023/2024', '2', '2023-06-03 07:00:31', '2023-06-03 07:00:31'),
(3, '2025/2026', '3', '2023-06-03 07:00:43', '2023-06-03 07:00:43'),
(4, '2024/2025', '4', '2023-06-03 07:00:52', '2023-06-03 07:00:52'),
(5, '2026/2027', '6', '2023-06-03 17:29:27', '2023-06-03 17:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_murids`
--

CREATE TABLE `wali_murids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wali_murids`
--

INSERT INTO `wali_murids` (`id`, `nama_wali`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Sugiono', 'Turen', '2023-06-03 06:55:59', '2023-06-03 06:55:59'),
(2, 'Mariyam', 'Sumawe', '2023-06-03 06:56:07', '2023-06-03 06:56:07'),
(3, 'Budi', 'Bululawang', '2023-06-03 06:56:18', '2023-06-03 06:56:18'),
(4, 'Lis', 'Turen', '2023-06-03 06:56:27', '2023-06-03 06:56:27'),
(5, 'Ronaldo', 'Pagak', '2023-06-03 06:56:41', '2023-06-03 06:56:41'),
(6, 'Wendi bnn', 'Sumawe', '2023-06-03 17:27:09', '2023-06-03 17:27:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_pelajarans`
--
ALTER TABLE `jadwal_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_nilais`
--
ALTER TABLE `jenis_nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murids`
--
ALTER TABLE `murids`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penggunas_username_unique` (`username`),
  ADD UNIQUE KEY `penggunas_email_unique` (`Email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wali_murids`
--
ALTER TABLE `wali_murids`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstrakurikulers`
--
ALTER TABLE `ekstrakurikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurus`
--
ALTER TABLE `gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelajarans`
--
ALTER TABLE `jadwal_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenis_nilais`
--
ALTER TABLE `jenis_nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajarans`
--
ALTER TABLE `mata_pelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `murids`
--
ALTER TABLE `murids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajarans`
--
ALTER TABLE `tahun_ajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wali_murids`
--
ALTER TABLE `wali_murids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
