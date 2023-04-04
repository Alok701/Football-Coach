-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2023 at 11:21 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iamfootb_football-coach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '2023-03-06 11:23:00', '2023-03-06 11:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Love Roy', 'love.saveasweb@gmail.com', '7856074515', 'Testing', 'aDSD', NULL, NULL, '2023-02-25 08:07:26', '2023-02-25 08:07:26'),
(2, 'Alok Yadav', 'sunilj0786@gmail.com', '09594454919', 'testing', 'dsgfds', NULL, NULL, '2023-02-28 08:09:43', '2023-02-28 08:09:43'),
(3, 'sunl', 'sunil@gmail.com', '8976210521', 'i want to know more', 'please explain me', NULL, NULL, '2023-02-28 10:00:33', '2023-02-28 10:00:33'),
(4, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'Testing', 'This is testing mail', NULL, NULL, '2023-03-01 13:30:23', '2023-03-01 13:30:23'),
(5, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'testing', NULL, NULL, '2023-03-01 13:34:10', '2023-03-01 13:34:10'),
(6, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'testing', NULL, NULL, '2023-03-01 13:38:49', '2023-03-01 13:38:49'),
(7, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'Testing', NULL, NULL, '2023-03-01 13:40:09', '2023-03-01 13:40:09'),
(8, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'Testing', NULL, NULL, '2023-03-01 13:41:57', '2023-03-01 13:41:57'),
(9, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'asff', NULL, NULL, '2023-03-01 13:45:11', '2023-03-01 13:45:11'),
(10, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'ADsda', NULL, NULL, '2023-03-01 13:48:12', '2023-03-01 13:48:12'),
(11, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'asdasdf', NULL, NULL, '2023-03-01 13:49:26', '2023-03-01 13:49:26'),
(12, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'asdasdf', NULL, NULL, '2023-03-01 13:51:21', '2023-03-01 13:51:21'),
(13, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'asdasdf', NULL, NULL, '2023-03-01 13:51:35', '2023-03-01 13:51:35'),
(14, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'asdasdf', NULL, NULL, '2023-03-01 13:53:35', '2023-03-01 13:53:35'),
(15, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'asdasdf', NULL, NULL, '2023-03-01 13:54:24', '2023-03-01 13:54:24'),
(16, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'wdawqdfq', NULL, NULL, '2023-03-01 13:55:19', '2023-03-01 13:55:19'),
(17, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'wdawqdfq', NULL, NULL, '2023-03-01 13:58:39', '2023-03-01 13:58:39'),
(18, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'afasfwesf', NULL, NULL, '2023-03-01 14:01:52', '2023-03-01 14:01:52'),
(19, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'sgfsrg', NULL, NULL, '2023-03-01 14:04:01', '2023-03-01 14:04:01'),
(20, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'rtrtrtrtrtrtrtrtrtrtrtrtrtrt', NULL, NULL, '2023-03-02 09:40:54', '2023-03-02 09:40:54'),
(21, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'rtrtrtrtrtrtrtrtrtrtrtrtrtrt', NULL, NULL, '2023-03-02 09:41:44', '2023-03-02 09:41:44'),
(22, 'Alok Yadav', 'alok.saveasweb@gmail.com', '9594454919', 'testing', 'jhhhhh', NULL, NULL, '2023-03-02 09:42:32', '2023-03-02 09:42:32'),
(23, 'Test', 'test@gmail.com', '0000000000', 'Testing From Save as Web', 'This is testing mail. Please ignore this.', NULL, NULL, '2023-03-02 09:45:22', '2023-03-02 09:45:22'),
(24, 'Alok Yadav', 'alok.saveasweb@gmail.com', '09594454919', 'testing', 'sdaesfdsef', NULL, NULL, '2023-03-04 08:51:39', '2023-03-04 08:51:39'),
(25, 'sunil', 'sunilj0786@gmail.com', '8976210521', 'test', 'this is test mail', NULL, NULL, '2023-03-04 09:56:05', '2023-03-04 09:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_training`
--

CREATE TABLE `order_training` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sports` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_training`
--

INSERT INTO `order_training` (`id`, `name`, `position`, `phone`, `sports`, `email`, `subject`, `message`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Love Roy', 'Web Developer', '1234567890', 'asada', 'love.saveasweb@gmail.com', 'as', 'asxdsad', NULL, NULL, '2023-02-25 08:37:45', '2023-02-25 08:37:45'),
(2, 'Alok Yadav', 'dsfsdf', '09594454919', 'saveasweb', 'sunilj0786@gmail.com', 'testing', 'dafds', NULL, NULL, '2023-02-28 08:16:14', '2023-02-28 08:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_details` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `flag` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `mobile`, `password`, `plan`, `position`, `club_details`, `status`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'alok yadav', 'alok.saveasweb@gmail.com', '9594454919', '$2y$10$Xi3IwxkNpvP8NrX4cRY.wutM/fmawgvn/u5ZNVwC3Wh9C2kASERlG', 'Premium', 'Coach', 'Testing TETSING', 'on', '1', '2023-03-17 10:24:41', '2023-03-20 10:17:48'),
(2, 'vijay', 'vijaysaveasweb@gmail.com', '9987062373', '$2y$10$LszJjgA9k0B3Nh9A.UOBXuhqCeBKxjQJilPWuOxqnNpdPruTvq.AS', 'Free', 'Player', NULL, 'on', '0', '2023-03-17 10:39:20', '2023-03-17 10:39:33'),
(3, 'sundar', 'sundar.saveasweb@gmail.com', '1234567890', '$2y$10$r9MS5in0e0/uwK/GPh2VvekJhDRArVLBic1sLmSufLeuvC5Md23vq', 'Free', 'Coach', 'india', 'on', '1', '2023-03-17 10:41:15', '2023-03-17 13:32:52'),
(4, 'love', 'love.saveasweb@gmail.com', '1234567890', '$2y$10$UN5Qaw1lbGvQX797gsG1p.3FecyJhKqlVTS4kO01GsHseE0UYhwxy', 'Premium', 'Player', NULL, 'on', '1', '2023-03-17 14:00:53', '2023-03-17 14:05:38'),
(5, 'Tomas Hvostik', 'tomi.h1981@gmail.com', '0917311108', '$2y$10$aVLK6e0RR//0s0oBCGrZnOvhrrOB80B/XGZElCdze06E80nPFLrC2', 'Free', 'Coach', 'MFK TATRAN', 'on', '0', '2023-03-27 03:54:04', '2023-03-27 03:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `birth_date` date DEFAULT NULL,
  `licence_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `profile_image`, `details`, `country`, `address`, `birth_date`, `licence_number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, '1234567890', '2023-03-20 10:17:25', '2023-03-20 10:17:25'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 10:39:20', '2023-03-17 10:39:20'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 10:41:15', '2023-03-17 10:41:15'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-17 14:00:53', '2023-03-17 14:00:53'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-27 03:54:04', '2023-03-27 03:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(2, 5, 'eeGV3p1HVAwdby7lyNgBi5S0WqNZ091OcA2eURxUxKtfHnFDATkhdqixnCXPhMZc', '2023-03-06 12:34:42', '2023-03-06 12:34:42'),
(3, 1, 'efGV3p1HVAwdby7lyNgBi5S0WqNZ091OcA2eURxUxKtfHnFDATkhdqixnCXPhMZc', '2023-03-06 12:34:42', '2023-03-06 12:34:42'),
(4, 6, 'eDVlBJgwQJJss9ziuGh0fsdITU0BOBVNEQP1A82WY6AeCUwKfdQ27mT9CkBhL8lN', '2023-03-08 11:54:23', '2023-03-08 11:54:23'),
(5, 1, '2iCFnf2m22XHE5GSrQwQMub1YyVK16m2QyGKCPgh3IxGYE4oGEAc4L1vYgJB9LM1', '2023-03-09 11:48:00', '2023-03-09 11:48:00'),
(6, 2, 'amg5T21Sm60myuCJ3lBibUcnzlhN5sttBZQXAv3KAm6sK4kdbf2iBXSt1m4KVQk6', '2023-03-09 14:14:58', '2023-03-09 14:14:58'),
(7, 4, 'Ng7eRLexx67gNk8wZw9lmcR8lmauWDBJXxBHGhYtJXzK6PP5vtca5JEOxHbdfCKL', '2023-03-15 07:12:16', '2023-03-15 07:12:16'),
(8, 1, '7QlWyul1JetXpnVHuWGrKIsE3LEKh5tBa0lBC617qSaMHQuEkpmEYsoQUYJjFw5I', '2023-03-17 10:24:41', '2023-03-17 10:24:41'),
(9, 2, 'oV8dhc92u1IaLPATkD6DceL6Ueal2g8waKaoKkrPVZrZThIpFgcbwODr8BfQAMaz', '2023-03-17 10:39:20', '2023-03-17 10:39:20'),
(10, 3, 'gy0HEE4kbwqSrHvez2jNV8WKQShitKYw9BqnV2OkDsHKCib71LwLtm4eEvMeA3EE', '2023-03-17 10:41:15', '2023-03-17 10:41:15'),
(11, 4, '7b7w4azYpBXH4D582in4oYG5WTblGQQogAFnhdgqsXdWmSHyRWk3x2ciEl3KL4ge', '2023-03-17 14:00:53', '2023-03-17 14:00:53'),
(12, 5, 'iKN7uLsqla0I9bluOEXMpFVtnsKZhxKt7wztAJ1ksK03Lz8f4LIxOsnGFF3byWoj', '2023-03-27 03:54:04', '2023-03-27 03:54:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_training`
--
ALTER TABLE `order_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_training`
--
ALTER TABLE `order_training`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
