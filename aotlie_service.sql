-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 05:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aotlie_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoTelp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `ID_customer`, `Nama`, `Alamat`, `NoTelp`, `created_at`, `updated_at`) VALUES
(1, 'SVC/14-05-21/1', 'Indah Sinurat', 'Samosir', '081234567890', '2021-05-14 17:00:00', NULL),
(2, 'SVC/15-05-21/2', 'Alfredo Hutagalung', 'Tambunan', '081236564756', '2021-05-14 20:12:00', '2021-05-14 20:12:00'),
(3, 'SVC/15-05-21/3', 'Eladita Nadeak', 'Samosir', '081234567890', '2021-05-14 20:14:15', '2021-05-14 20:14:15'),
(4, 'SVC/15-05-21/4', 'Laksamana Simangungsong', 'Sidikalang', '081265109688', '2021-05-14 20:15:55', '2021-05-14 20:15:55'),
(5, 'SVC/15-05-21/5', 'Otniel Tambunan', 'Tambunan', '081265109643', '2021-05-14 20:18:53', '2021-05-14 20:18:53');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_05_04_103421_create_customers_table', 1),
(15, '2021_05_04_104111_create_mobils_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobils`
--

CREATE TABLE `mobils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_Registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Plat_Nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stnk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobils`
--

INSERT INTO `mobils` (`id`, `ID_Registrasi`, `Jenis`, `Merek`, `Plat_Nomor`, `Pemilik`, `stnk`, `keluhan`, `created_at`, `updated_at`) VALUES
(1, 'MBL/14-05-21/1', 'SUV', 'JEEP', 'BB 0123 EK', 'Indah Sinurat', 'AK1234567', 'Service Tune Up', '2021-05-13 17:00:00', NULL),
(2, 'MBL/15-05-21/2', 'Sedan', 'Toyota Vios', 'BB 2345 IO', 'Alfredo Hutagalung', 'AA1234590', 'Service Overhaul', '2021-05-14 20:12:00', '2021-05-14 20:12:00'),
(3, 'MBL/15-05-21/3', 'Coupe', 'Nissan Silvia', 'BB 4567 UK', 'Eladita Nadeak', 'LK0123567', 'Service Audio', '2021-05-14 20:14:15', '2021-05-14 20:14:15'),
(4, 'MBL/15-05-21/4', 'Hatchback', 'Suzuku Baleno', 'BB 5678 ER', 'Laksamana Simangungsong', 'IJ0123456', 'Service AC Mobil', '2021-05-14 20:15:55', '2021-05-14 20:15:55'),
(5, 'MBL/15-05-21/5', 'Sport', 'Porsche 718', 'BB 1234 OK', 'Otniel Tambunan', 'IJ0123456', 'Service Audio', '2021-05-14 20:18:53', '2021-05-14 20:18:53');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ini akun Admin', 'admin', 'admin@example.com', NULL, '$2y$10$Fo6YKf69CD78Q4pegvhOheourojEkb2H/j7gjbWuP9v7JndCatzLS', 'admin', 'niGksSnWK2MCO4adIPzDPHR70S0oblBBY22ADLygoqcmvqLNbuQypPy5zWI1', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(2, 'ini akun Mekanik (non admin)', 'user', 'user@example.com', NULL, '$2y$10$AG1edvMvZKK0kE04v3RJ9euZYC65eBa.HhnMltVd/956uMT8Emlxi', 'mekanik', 'kpPXtKlUuSqnpqaSZ9uJhkoygEwx56fo5ajtqG2U9JuumqdU1IynjzKMqeqm', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(3, 'ini akun Mekanik (non admin)', 'mekanik1', 'mekanik1@example.com', NULL, '$2y$10$9BqAWuOjicZ4OwdNMX.mMe0OQ./CTaKWcNWMs6cCrWjs7jaA11vlG', 'mekanik', 'E29DYS4Jnwlge6xSFxLW4k5ISo3FC0v5dhufunFS4nHRIVuNmenTruQC17J8', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(4, 'ini akun Mekanik (non admin)', 'mekanik2', 'mekanik2@example.com', NULL, '$2y$10$GKza3TUrtlJo80QXOMmox.Mj4.GKk137bw3GXs7nSEhFll1KaGrkm', 'mekanik', 'oQiLkO6gO6WoeQyHqTrITR4GrNteaB3NjZYrhW8jEESc6xVognKynL0zKzTv', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(5, 'ini akun Customer (non admin)', 'mekanik3', 'mekanik3@example.com', NULL, '$2y$10$if92hPbjQ8SMXJYy/bf8n.1vonP7KfxrcM6AJ3CiZ13wrMchZVOYq', 'mekanik', 'DKjFtmAAvyELaEhX7z4Ik7hSgqDOtRl8vPJjlB4qhJO68cmi34pfJFFfyHVe', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(6, 'ini akun Mekanik (non admin)', 'mekanik4', 'mekanik4@example.com', NULL, '$2y$10$oUxS4zn.zOKa31zTRvXEGOJA16SAa06ljhgRbPtNkbMd05f2LwLL2', 'mekanik', 'lFIJw56F4RasmZk0EWo9dzlu5r35aKVDAcdBXnVMnKaELP7Q2cNPdZiOQ3Hs', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(7, 'ini akun Customer (non admin)', 'mekanik5', 'mekanik5@example.com', NULL, '$2y$10$dgQnL7h1dpOFYSfOn0Rd/.1GQEe9zmFi8hWK46amS9SZw2Gad4uHW', 'mekanik', 'Fgru1kI6vDsU5rEd5FNtPAGgK7xvNHfv22OApYnzQyy9xnIcYdK4cNzDnS13', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(8, 'ini akun Customer (non admin)', 'otniel', 'otniel@example.com', NULL, '$2y$10$x.foe5qhA83.SlwE3hFHeOAJqCRq6gtBgmSCbO69nRuEdubj7t1TC', 'pelanggan', 'RjQJvQ8ObtonzyrxuebGtZZfasCxlQNcQuPmAci83jgCrU17QPrtYTwNhQsM', '2021-05-14 20:10:39', '2021-05-14 20:10:39'),
(9, 'Alfredo', 'Alfredo', 'Alfredo@gmail.com', NULL, '$2y$10$QKD7OcB3H8otAbKbDYpeQ.QEiuQlta8SoG67cGdGkQodGpIPPLQju', 'pelanggan', NULL, '2021-05-14 20:53:25', '2021-05-14 20:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobils`
--
ALTER TABLE `mobils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mobils`
--
ALTER TABLE `mobils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
