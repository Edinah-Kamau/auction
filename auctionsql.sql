-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 13, 2023 at 07:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `address` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `national_id_front` blob NOT NULL,
  `national_id_back` varchar(255) NOT NULL,
  `proof_front` varchar(255) NOT NULL,
  `proof_back` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'No Reviews'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_name`, `number`, `date_of_birth`, `address`, `street`, `country`, `county`, `city`, `pin_code`, `name`, `email`, `type`, `national_id_front`, `national_id_back`, `proof_front`, `proof_back`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(22, 'joan', 796748191, '2002-10-24', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'jojojo@gmail.com', 2, 0x313638383931333634372e646f6378, '1688913647.docx', '1688913647.docx', '1688913647.docx', NULL, NULL, '2023-07-09 11:40:47', '2023-07-11 15:24:13', 'Accepted'),
(23, 'edinah kamau', 796748191, '2002-10-10', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'keke@gmail.com', 2, 0x313638383937323035302e706466, '1688972050.pdf', '1688972050.pdf', '1688972050.pdf', NULL, NULL, '2023-07-10 03:54:10', '2023-07-11 15:24:00', 'Denied'),
(24, 'edinah kamau', 796748191, '2002-10-05', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'soso@gmail.com', 2, 0x313638383937353438302e706e67, '1688975480.png', '1688975480.png', '1688975480.png', NULL, NULL, '2023-07-10 04:51:20', '2023-07-10 04:51:20', '0'),
(25, 'edinah kamau', 796748191, '2002-05-05', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'lele@gmail.com', 2, 0x313638383938383633352e706466, '1688988635.pdf', '1688988635.pdf', '1688988635.pptx', NULL, NULL, '2023-07-10 08:30:35', '2023-07-11 15:13:10', 'Accepted'),
(26, 'joan', 796748191, '2002-02-22', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'nana@gmail.com', 2, 0x313638393039383935322e706466, '1689098952.png', '1689098952.pdf', '1689098952.pptx', NULL, NULL, '2023-07-11 15:09:12', '2023-07-11 15:13:02', 'Accepted'),
(27, 'edinah kamau', 796748191, '2002-05-05', 123, 'Mbagathi', 'Kenya', 'Nakuru', 'Nakuru', 0, 'edinah', 'haha@gmail.com', 2, 0x313638393039393936382e706e67, '1689099968.png', '1689099968.png', '1689099968.png', NULL, NULL, '2023-07-11 15:26:08', '2023-07-12 06:48:19', 'Denied');

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `reserve_price` decimal(8,2) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `reserve_price` decimal(8,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `reserve_price`, `start_date`, `end_date`, `image`, `email`, `created_at`, `updated_at`) VALUES
(2, 'edinah', 5000.00, '2002-02-25 00:00:00', '2002-02-22 00:00:00', '1689071464.png', 'jane@gmail.com', '2023-07-12 05:49:08', '2023-07-12 05:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `displays`
--

CREATE TABLE `displays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_02_120359_create_displays_table', 1),
(7, '2023_07_03_121826_create_applications_table', 2),
(8, '2023_07_07_125610_add_status_to_users_table', 3),
(9, '2023_07_07_172239_create_auctions_table', 4),
(10, '2023_07_10_080115_add_status_to_applications_table', 4),
(11, '2023_07_11_094805_create_products_table', 5),
(12, '2023_07_11_101434_create_products_table', 6),
(13, '2023_07_11_162130_add_blocked_to_products_table', 7),
(14, '2023_07_11_221436_create_carts_table', 8);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('gogo@gmail.com', '$2y$10$iag1VfDfjf6HFZBD0Ny7/uZOv52drV0RDjKc8ejze5u0JbBNp8U.G', '2023-07-09 15:49:07'),
('joan@gmail.com', '$2y$10$hNY0.z2khbamFYyKi0Tsku1yAPFWsQwm5Cly5oivv7y3soUg6rY56', '2023-07-09 15:18:49'),
('peter@gmail.com', '$2y$10$NBKKYKfO3/jrrrCDTdLp2.Mx1WQ1YtPdzw6.ZxvSRY0xaKRIfAgk2', '2023-07-09 15:04:13'),
('wel@gmail.com', '$2y$10$auEKIhQEN7422gKK32QIz.NbR/0lkJxJhTo487jvMq8cYZNFFAeV2', '2023-07-12 06:47:20');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `reserve_price` decimal(8,2) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `blocked` varchar(255) NOT NULL DEFAULT 'No Reviews'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `reserve_price`, `start_date`, `end_date`, `image`, `created_at`, `updated_at`, `email`, `blocked`) VALUES
(1, 'edinah', 'dodo', 'dodo', 5000.00, '2002-02-25 00:00:00', '2002-02-22 00:00:00', '1689071464.png', '2023-07-11 07:31:04', '2023-07-11 15:14:24', '', 'Accepted'),
(6, 'opop', 'po', 'po', 2000.00, '2002-05-05 00:00:00', '2002-05-05 00:00:00', '1689088035.png', '2023-07-11 07:44:15', '2023-07-11 15:36:45', 'Ryan@gmail.com', 'Denied'),
(8, 'kek', 'dodo', 'dg', 5000.00, '2002-05-05 00:00:00', '2002-05-05 00:00:00', '1689096757.png', '2023-07-11 14:32:37', '2023-07-11 15:14:27', 'Ryan@gmail.com', 'Accepted'),
(9, 'ss', 'ere', 'er', 5000.00, '2002-06-06 00:00:00', '2002-06-06 00:00:00', '1689111691.png', '2023-07-11 18:31:49', '2023-07-12 06:49:13', 'Ryan@gmail.com', 'Accepted'),
(10, 'rte', 'ert', 'sre', 5000.00, '2023-06-27 03:53:00', '2023-07-04 04:50:00', '1689112249.png', '2023-07-11 18:50:49', '2023-07-11 18:50:49', 'Ryan@gmail.com', 'No Reviews'),
(11, 'nun', 'tete', 'tete', 5000.00, '2023-07-24 00:00:00', '2023-07-19 00:00:00', '1689155928.png', '2023-07-12 06:57:03', '2023-07-12 06:58:48', 'Ryan@gmail.com', 'No Reviews');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `google_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `type`, `google_id`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(16, 'Peter', 'peter@gmail.com', NULL, 1, NULL, '$2y$10$2dqMsfjeVLgUEjT5Z7psweVJqD0ZK51l497Ui.QvxbutxHZQV/OT6', 1, NULL, '2023-07-06 07:18:02', '2023-07-06 07:18:02'),
(17, 'Joan', 'joan@gmail.com', NULL, 1, NULL, '$2y$10$smgWs21HUyfbNTcan4EYveYD0JnJgCfRSZrb9puXgiPIGa2tFfqr.', 0, NULL, '2023-07-06 07:18:30', '2023-07-10 08:22:39'),
(18, 'Jane', 'jane@gmail.com', NULL, 0, NULL, '$2y$10$HOXnUmJDp3JARfmtqOY3A.pEMHPEIgjPhEKP4HOwUnICYOiD3glNe', 1, NULL, '2023-07-06 07:19:04', '2023-07-07 11:37:53'),
(19, 'Nelson', 'nelson@gmail.com', NULL, 0, NULL, '$2y$10$JkCbmLhjUvb2sAwocITwe.hylz9/Pyu74ZiDeBIaw6bBQTihLa9LC', 1, NULL, '2023-07-06 07:19:32', '2023-07-10 08:22:45'),
(20, 'felicia', 'felicia@gmail.com', NULL, 0, NULL, '$2y$10$pspkQF1yZfyT1SwyV6OXA.v2Nh6hiUZh7ZrHpK.Pwlg2HF4LyhAkC', 1, NULL, '2023-07-06 07:35:15', '2023-07-12 06:46:51'),
(21, 'Ryan', 'Ryan@gmail.com', NULL, 2, NULL, '$2y$10$DWOiMqqaDWsJvLhFgfa1I.iWd75o/rF2TX8Dojr1lml2MhkhqgZES', 1, NULL, '2023-07-06 07:37:53', '2023-07-06 07:37:53'),
(22, 'Sifa', 'sifa@gmail.com', NULL, 2, NULL, '$2y$10$l06zRzziDTiqc7M559sj0uy0agf8VVszTfr0Vh69BHEKg5ffqnscy', 1, NULL, '2023-07-06 07:39:04', '2023-07-10 05:27:56'),
(23, 'Ken', 'ken@gmail.com', NULL, 2, NULL, '$2y$10$1Qw6GQjpV.NBbzOJd/Ddkurq6.vCe56FkKjgXuabjZ595jtNOnbTi', 1, NULL, '2023-07-06 07:39:36', '2023-07-06 07:39:36'),
(24, 'Paul', 'paul@gmail.com', NULL, 1, NULL, '$2y$10$V6Q7Zmwa5tg/ZBpyTcKQoeGfQWAGuQ1qVsWpFFGQMi57xxuSebCqu', 1, NULL, '2023-07-06 07:40:10', '2023-07-10 05:26:28'),
(26, 'Mercy', 'mercy@gmail.com', NULL, 2, NULL, '$2y$10$RLIbXt2ZDZQ2wGjc4M3r4ejIIm3ODEyDzKq6u/CJXwYX8D4/YwTVm', 1, NULL, '2023-07-06 07:41:30', '2023-07-06 07:41:30'),
(27, 'gogo', 'gogo@gmail.com', NULL, 0, NULL, NULL, 1, NULL, '2023-07-08 12:23:52', '2023-07-08 12:23:52'),
(28, 'mel', 'Mel@gmail.com', NULL, 0, NULL, '$2y$10$DoPpBiv5eoZzL2QRmiTzXe2DXCibmoXHAIUhkVLAvgCbW17PBEhn.', 0, 'Xd4jrnZ8X87ruTu6kuTOjSNnAc6DlLpXtOdh4pgXccb6dG9DFp4r3IzZTe7R', '2023-07-08 12:24:47', '2023-07-12 07:18:29'),
(29, 'wel', 'wel@gmail.com', NULL, 1, NULL, NULL, 1, NULL, '2023-07-08 12:26:06', '2023-07-09 10:48:17'),
(30, 'joan', 'jojojo@gmail.com', NULL, 2, NULL, NULL, 0, NULL, '2023-07-09 17:08:31', '2023-07-12 07:18:45'),
(31, 'edinah kamau', 'haha@gmail.com', NULL, 2, NULL, NULL, 1, NULL, '2023-07-11 15:34:02', '2023-07-11 15:34:02'),
(32, 'rer', 'r@gmail.com', NULL, 1, NULL, NULL, 1, NULL, '2023-07-12 06:49:57', '2023-07-12 06:49:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displays`
--
ALTER TABLE `displays`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `displays`
--
ALTER TABLE `displays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
