-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 07:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magicbrick`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `for_sale` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `posting_as` varchar(255) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `new_project_socity` varchar(255) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `bedroom` varchar(255) NOT NULL,
  `bathroom` varchar(150) NOT NULL,
  `grage` varchar(150) NOT NULL,
  `to_month` date NOT NULL,
  `from_month` date NOT NULL,
  `full_rent` bigint(20) NOT NULL,
  `security_amnt` varchar(255) NOT NULL,
  `managment_charge` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `property_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `role`, `name`, `email`, `number`, `for_sale`, `property_type`, `posting_as`, `property_location`, `new_project_socity`, `property_address`, `area`, `bedroom`, `bathroom`, `grage`, `to_month`, `from_month`, `full_rent`, `security_amnt`, `managment_charge`, `picture`, `description`, `property_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Agent', 'nausahad', 'naushad@gmail.com', '7897897990', 'rent_lease', 'appartment', 'rent_lease', 'Gomati Nagar', 'Project Gomti', 'Gomti Nagar Lucknow', '200m', '45', '5', '8', '2024-08-25', '2023-08-25', 74995, '850000', '7800', '[\"pexels-photo-534219-1692962758-74.jpeg\"]', 'Enjoy Your Dream House In lucknow', 1, '2023-08-25 05:55:58', '2023-08-25 05:55:58', NULL),
(2, 'Agent', 'nausahad', 'anil@gmail.com', '8707856049', 'rent_lease', 'appartment', 'rent_lease', 'Charbhagh', 'Project Charbhagh', 'Lucknow Charbhagh', '200m', '78', '10', '7', '2023-06-25', '2023-08-10', 7500, '452007', '5000', '[\"pexels-photo-269077-1692962944-9.jpeg\"]', 'Your Dream house in Lucknow', 1, '2023-08-25 05:59:04', '2023-08-25 05:59:04', NULL),
(3, 'Agent', 'nausahad', 'dk@gmail.com', '91786098008', 'rent_lease', 'appartment', 'rent_lease', 'Munshipuliya', 'Metro Development', 'Indra Nagar Lucknow', '4000 m', '74', '8', '5', '2026-11-25', '2023-08-25', 44995, '7400000', '45000', '[\"pexels-photo-2783862-1692965519-4.jpeg\"]', 'Welcome To Metro Development Area', 1, '2023-08-25 06:41:59', '2023-08-25 06:41:59', NULL),
(4, 'Agent', 'Abhimanyu', 'abhi@gmail.com', '91786098008', 'rent_lease', 'appartment', 'rent_lease', 'Golden House Lucknow', 'Golden City', 'Lucknow Metro Indra Nagar', '500m', '50', '5', '5', '2027-10-12', '2023-08-25', 78563, '4500000', '4500', '[\"pexels-photo-68631-1692965691-6.jpeg\"]', 'Wlcome To Golden Project', 1, '2023-08-25 06:44:51', '2023-08-25 06:44:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agent_infos`
--

CREATE TABLE `agent_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL,
  `twiter_link` varchar(255) NOT NULL,
  `linkdine_link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ashely Marks', 'gyxylokus@mailinator.com', 'Enim quas ut deserun', 'Lorem molestias et n', '1', '2023-09-12 13:41:06', '2023-09-12 13:41:06'),
(2, 'Maris Hughes', 'fyqiwu@mailinator.com', 'Molestias sit illum', 'Eiusmod dolores accu', '1', '2023-09-12 14:28:54', '2023-09-12 14:28:54');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_07_191325_create_permission_tables', 1),
(6, '2023_01_08_120200_create_permission_names_table', 1),
(7, '2023_08_14_074841_create_agents_table', 2),
(11, '2023_08_24_121826_create_sale_payments_table', 5),
(12, '2023_08_05_064318_create_user_sign_ups_table', 6),
(13, '2023_08_25_094455_create_upcoming_sales_table', 6),
(14, '2014_10_12_000000_create_users_table', 7),
(15, '2023_09_05_113110_create_agent_infos_table', 8),
(16, '2023_08_21_054118_create_contact_us_table', 9),
(17, '2023_08_21_072223_create_sell_properties_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `perm_id` int(11) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `perm_id`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 1, 'web', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(2, 'Blog_create', 1, 'web', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(3, 'Blog_edit', 1, 'web', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(4, 'Blog_delete', 1, 'web', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(5, 'Blog_read', 1, 'web', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(6, 'manage', 2, 'web', '2023-08-16 23:13:36', '2023-08-16 23:13:36'),
(7, 'manage_create', 2, 'web', '2023-08-16 23:13:37', '2023-08-16 23:13:37'),
(8, 'manage_edit', 2, 'web', '2023-08-16 23:13:37', '2023-08-16 23:13:37'),
(9, 'manage_delete', 2, 'web', '2023-08-16 23:13:37', '2023-08-16 23:13:37'),
(10, 'manage_read', 2, 'web', '2023-08-16 23:13:37', '2023-08-16 23:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `permission_names`
--

CREATE TABLE `permission_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_names`
--

INSERT INTO `permission_names` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Blog', '2023-01-22 08:41:44', '2023-01-22 08:41:44'),
(2, 'manage', '2023-08-16 23:13:36', '2023-08-16 23:13:36');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-01-22 05:39:53', '2023-01-22 05:39:53'),
(2, 'HR', 'web', '2023-01-22 05:41:51', '2023-01-22 05:41:51'),
(3, 'Agent', 'web', '2023-01-22 05:42:03', '2023-01-22 05:42:03'),
(4, 'Customer', 'web', '2023-08-08 10:11:05', '2023-08-08 10:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sale_payments`
--

CREATE TABLE `sale_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `for_sale` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `new_project_socity` varchar(255) NOT NULL,
  `property_address` varchar(255) NOT NULL,
  `carpet_area` varchar(255) NOT NULL,
  `super_area` varchar(255) NOT NULL,
  `from_month` varchar(255) NOT NULL,
  `to_month` varchar(255) NOT NULL,
  `security_amnt` varchar(255) NOT NULL,
  `managment_charge` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `full_rent` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sale_payments`
--

INSERT INTO `sale_payments` (`id`, `name`, `email`, `number`, `for_sale`, `property_type`, `property_location`, `new_project_socity`, `property_address`, `carpet_area`, `super_area`, `from_month`, `to_month`, `security_amnt`, `managment_charge`, `picture`, `description`, `full_rent`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Orlando Burks', 'vyhuduse@mailinator.com', '486', 'rent_lease', 'appartment', 'Harper Mercer', 'Amos Hamilton', 'Nita Hardin', 'Caryn Soto', 'Oliver Long', '1988-12-20', '1996-10-17', 'Daquan Delaney', 'Sandra William', 'upload/payment/property-1692944790-25.jpg', 'Property Description', '94', NULL, '2023-08-25 00:47:54', '2023-08-25 00:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `sell_properties`
--

CREATE TABLE `sell_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `login_status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_properties`
--

INSERT INTO `sell_properties` (`id`, `role`, `login_status`, `name`, `email`, `mobile`, `image`, `address`, `city`, `locality`, `state`, `price`, `area`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'viraj tower', 'devogi@mailinator.com', '17', '[\"images-1694500821-9.jpg\"]', 'gomati', 'In exercitation modi', 'Eum praesentium et e', 'Magna pariatur Aute', '480', 'Natus magni officia', 'Mollit mollitia reru', '2023-09-12 13:40:21', '2023-09-12 13:40:21'),
(2, 'Admin', '1', 'viraj tower', 'werivox@mailinator.com', '563', '[\"images-1694500852-48.jpg\"]', 'gomati', 'Cupidatat nihil nobi', 'Aliquip modi labore', 'Ex autem totam accus', '974', 'Debitis quis Nam bea', 'Qui saepe ut ut dist', '2023-09-12 13:40:52', '2023-09-12 13:40:52'),
(3, 'Admin', '1', 'viraj tower', 'zynez@mailinator.com', '349', '[\"images-1694503525-17.jpg\"]', 'Eum vero inventore l', 'Sint eos culpa ear', 'Eiusmod sint offici', 'Distinctio Soluta d', '807', 'Natus est sit ulla', 'Sed consequat Enim', '2023-09-12 14:25:25', '2023-09-12 14:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_sales`
--

CREATE TABLE `upcoming_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `login_status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upcoming_sales`
--

INSERT INTO `upcoming_sales` (`id`, `role`, `login_status`, `name`, `email`, `mobile`, `image`, `address`, `city`, `state`, `locality`, `price`, `area`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '1', 'test', 'durucohax@mailinator.com', '7266008456', 'images-1694500718-53.jpg', 'Reprehenderit non ad', 'Lucknow', 'UP', 'India', '167', '500', 'Et accusamus exceptu', '2023-08-25 07:35:21', '2023-09-12 13:38:38');

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
  `role` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `mobile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'satayam', 'sataya@gmail.com', NULL, '$2y$10$cViUrplsTnrghgvLb9A3..sOiImly9NYq1kKOiJbHHZLzTz6iKtli', 'customer', '8521479633', NULL, '2023-09-11 14:06:17', '2023-09-12 11:41:04'),
(2, 'Malachi Little', 'kazim@mailinator.com', NULL, '$2y$10$0geQ5HJNDUqFGloPhsZtouUZ8zBEaxmiV82Eu9dxIBOMO8K8SaDuC', NULL, '72', NULL, '2023-09-12 11:57:00', '2023-09-12 11:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_sign_ups`
--

CREATE TABLE `user_sign_ups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `agents_email_unique` (`email`);

--
-- Indexes for table `agent_infos`
--
ALTER TABLE `agent_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_names`
--
ALTER TABLE `permission_names`
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
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sale_payments`
--
ALTER TABLE `sale_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_properties`
--
ALTER TABLE `sell_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_sales`
--
ALTER TABLE `upcoming_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_sign_ups`
--
ALTER TABLE `user_sign_ups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_sign_ups_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agent_infos`
--
ALTER TABLE `agent_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permission_names`
--
ALTER TABLE `permission_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sale_payments`
--
ALTER TABLE `sale_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sell_properties`
--
ALTER TABLE `sell_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upcoming_sales`
--
ALTER TABLE `upcoming_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_sign_ups`
--
ALTER TABLE `user_sign_ups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
