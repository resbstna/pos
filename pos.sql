-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `supplier`, `created_at`, `updated_at`) VALUES
(5, 'Lembar', 3, '2021-12-18 20:49:33', '2021-12-18 20:49:33');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `barcode`, `name`, `category`, `unit`, `price`, `stock`, `supplier`, `created_at`, `updated_at`) VALUES
(4, 'A123', 'Kertas', '5', '4', '2000', 1000, '3', '2021-12-18 20:51:03', '2021-12-18 20:51:03');

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
(4, '2021_08_08_061308_create_categories_table', 1),
(5, '2021_08_08_064639_create_suppliers_table', 1),
(6, '2021_08_08_064700_create_units_table', 1),
(7, '2021_08_08_064723_create_items_table', 2),
(8, '2021_08_08_064743_create_transaksis_table', 3);

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
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `kasir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_penjualan` int(100) NOT NULL,
  `total` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `date`, `kasir`, `customer`, `id_penjualan`, `total`, `note`, `created_at`, `updated_at`) VALUES
(1, '2021-12-18', NULL, NULL, 3, 51170, NULL, '2021-12-18 07:25:20', '2021-12-18 07:25:20'),
(2, '2021-12-18', NULL, NULL, 4, 34114, NULL, '2021-12-18 07:29:14', '2021-12-18 07:29:14'),
(3, '2021-12-18', 'asdsa', 'asda', 5, 38378, NULL, '2021-12-18 07:30:51', '2021-12-18 07:30:51'),
(4, '2021-12-18', 'asdsa', 'asda', 6, 213210, NULL, '2021-12-18 07:31:20', '2021-12-18 07:31:20'),
(5, '2021-12-18', 'asdsa', 'asda', 6, 213210, NULL, '2021-12-18 07:31:25', '2021-12-18 07:31:25'),
(6, '2021-12-18', 'asdsa', 'asda', 6, 170568, NULL, '2021-12-18 07:31:31', '2021-12-18 07:31:31'),
(7, '2021-12-18', NULL, NULL, 6, 191889, NULL, '2021-12-18 07:31:44', '2021-12-18 07:31:44'),
(8, '2021-12-18', 'asdsa', 'asda', 6, 191889, NULL, '2021-12-18 07:31:53', '2021-12-18 07:31:53'),
(9, '2021-12-18', 'asdsa', 'asda', 6, 42642, NULL, '2021-12-18 07:32:01', '2021-12-18 07:32:01'),
(10, '2021-12-18', 'asdsa', 'asd', 7, 426420, NULL, '2021-12-18 07:32:37', '2021-12-18 07:32:37'),
(11, '2021-12-19', 'Wanto', NULL, 8, 4000, NULL, '2021-12-18 21:12:20', '2021-12-18 21:12:20'),
(12, '2021-12-19', 'Wanto', NULL, 8, 4000, NULL, '2021-12-18 21:13:05', '2021-12-18 21:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_sementara`
--

CREATE TABLE `transaksi_sementara` (
  `id` int(11) NOT NULL,
  `barcode` varchar(200) NOT NULL,
  `id_penjualan` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `diskon` int(100) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_sementara`
--

INSERT INTO `transaksi_sementara` (`id`, `barcode`, `id_penjualan`, `nama`, `price`, `qty`, `diskon`, `subtotal`, `created_at`, `updated_at`) VALUES
(1, 'sdfsd', 0, '', 324324, 2, 0, '', '2021-08-31 16:29:33', '2021-08-31 16:29:33.000000'),
(3, 'sdfsde', 1, 'asdasd', 21321, 2, 0, '42642', '2021-12-16 16:46:32', '2021-12-16 16:46:32.000000'),
(4, 'sdfsde', 2, 'asdasd', 21321, 0, 0, '21321', '2021-12-18 04:12:05', '2021-12-18 04:12:05.000000'),
(5, 'sdfsd', 2, 'sdfsf', 324324, 0, 0, '324324', '2021-12-18 04:12:07', '2021-12-18 04:12:07.000000'),
(7, 'sdfsde', 3, 'asdasd', 21321, 2, 0, '42642', '2021-12-18 13:04:31', '2021-12-18 13:04:31.000000'),
(8, 'sdfsde', 3, 'asdasd', 21321, 0, 0, '21321', '2021-12-18 14:19:49', '2021-12-18 14:19:49.000000'),
(9, 'sdfsde', 4, 'asdasd', 21321, 2, 0, '42642', '2021-12-18 14:26:28', '2021-12-18 14:26:28.000000'),
(10, 'sdfsde', 5, 'asdasd', 21321, 2, 0, '42642', '2021-12-18 14:30:02', '2021-12-18 14:30:02.000000'),
(11, 'sdfsde', 6, 'asdasd', 21321, 2, 0, '42642', '2021-12-18 14:31:05', '2021-12-18 14:31:05.000000'),
(12, 'sdfsde', 7, 'asdasd', 21321, 20, 0, '426420', '2021-12-18 14:32:26', '2021-12-18 14:32:26.000000'),
(13, 'A123', 8, 'Kertas', 2000, 2, 0, '4000', '2021-12-19 04:12:02', '2021-12-19 04:12:02.000000');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `supplier`, `created_at`, `updated_at`) VALUES
(4, 'Unit', '3', '2021-12-18 20:47:28', '2021-12-18 20:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin@admin.com', NULL, '$2y$10$BRnEJPJuLcSaOnUDr9D7Ce1zCrq35hiH620NLkE4QGgSQKMI84wpO', NULL, '2021-08-17 04:41:22', '2021-08-17 04:41:22'),
(3, 'Supplier A', 'supplier', 'supplier@gmail.com', NULL, '$2y$10$N8KuLhTLH.oczFWPWyn23uhxQtkLGK8MO/XjgJkhjeP0LobfFozW2', NULL, '2021-12-18 08:01:56', '2021-12-18 08:01:56'),
(4, 'Supplier B', 'supplier', 'supplierb@gmail.com', NULL, '$2y$10$D5HSXqFQGWKyTSHelTdKrODr2E7VDO5kVulZAJk/U1N8ktCK3MZo2', NULL, '2021-12-18 08:02:29', '2021-12-18 08:02:29'),
(5, 'Wanto', 'kasir', 'wanto@gmail.com', NULL, '$2y$10$SUrte8E/zw2yR7s3sLbvte0Y0AaK5tll2DhaczKi9uLahaEbVa9YK', NULL, '2021-12-18 20:58:43', '2021-12-18 20:58:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_sementara`
--
ALTER TABLE `transaksi_sementara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi_sementara`
--
ALTER TABLE `transaksi_sementara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
