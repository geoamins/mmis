-- phpMyAdmin SQL Dump

-- version 5.2.0

-- https://www.phpmyadmin.net/

--

-- Host: 127.0.0.1

-- Generation Time: Jun 21, 2023 at 07:43 AM

-- Server version: 10.4.27-MariaDB

-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `imdsms`

--

-- --------------------------------------------------------

--

-- Table structure for table `failed_jobs`

--

CREATE TABLE
    `failed_jobs` (
        `id` bigint(20) UNSIGNED NOT NULL,
        `uuid` varchar(255) NOT NULL,
        `connection` text NOT NULL,
        `queue` text NOT NULL,
        `payload` longtext NOT NULL,
        `exception` longtext NOT NULL,
        `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
    );

-- --------------------------------------------------------

--

-- Table structure for table `migrations`

--

CREATE TABLE
    `migrations` (
        `id` int(10) UNSIGNED NOT NULL,
        `migration` varchar(255) NOT NULL,
        `batch` int(11) NOT NULL
    );

--

-- Dumping data for table `migrations`

--

INSERT INTO
    `migrations` (`id`, `migration`, `batch`)
VALUES (
        1,
        '2014_10_12_000000_create_users_table',
        1
    ), (
        2,
        '2014_10_12_100000_create_password_reset_tokens_table',
        1
    ), (
        3,
        '2014_10_12_100000_create_password_resets_table',
        1
    ), (
        4,
        '2019_08_19_000000_create_failed_jobs_table',
        1
    ), (
        5,
        '2019_12_14_000001_create_personal_access_tokens_table',
        1
    ), (
        6,
        '2023_06_20_061001_create_permission_tables',
        1
    ), (
        7,
        '2023_06_20_061018_create_posts_table',
        1
    );

-- --------------------------------------------------------

--

-- Table structure for table `model_has_permissions`

--

CREATE TABLE
    `model_has_permissions` (
        `permission_id` bigint(20) UNSIGNED NOT NULL,
        `model_type` varchar(255) NOT NULL,
        `model_id` bigint(20) UNSIGNED NOT NULL
    );

-- --------------------------------------------------------

--

-- Table structure for table `model_has_roles`

--

CREATE TABLE
    `model_has_roles` (
        `role_id` bigint(20) UNSIGNED NOT NULL,
        `model_type` varchar(255) NOT NULL,
        `model_id` bigint(20) UNSIGNED NOT NULL
    );

--

-- Dumping data for table `model_has_roles`

--

INSERT INTO
    `model_has_roles` (
        `role_id`,
        `model_type`,
        `model_id`
    )
VALUES (1, 'App\\Models\\User', 1), (1, 'App\\Models\\User', 2), (2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--

-- Table structure for table `password_resets`

--

CREATE TABLE
    `password_resets` (
        `email` varchar(255) NOT NULL,
        `token` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL
    );

-- --------------------------------------------------------

--

-- Table structure for table `password_reset_tokens`

--

CREATE TABLE
    `password_reset_tokens` (
        `email` varchar(255) NOT NULL,
        `token` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL
    );

-- --------------------------------------------------------

--

-- Table structure for table `permissions`

--

CREATE TABLE
    `permissions` (
        `id` bigint(20) UNSIGNED NOT NULL,
        `name` varchar(255) NOT NULL,
        `guard_name` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL
    );

--

-- Dumping data for table `permissions`

--

INSERT INTO
    `permissions` (
        `id`,
        `name`,
        `guard_name`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'user-list',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        2,
        'user-create',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        3,
        'user-edit',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        4,
        'user-delete',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        5,
        'role-list',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        6,
        'role-create',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        7,
        'role-edit',
        'web',
        '2023-06-20 03:16:12',
        '2023-06-20 03:16:12'
    ), (
        8,
        'role-delete',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        9,
        'permission-list',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        10,
        'permission-create',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        11,
        'permission-edit',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        12,
        'permission-delete',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        13,
        'post-list',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        14,
        'post-create',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        15,
        'post-edit',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    ), (
        16,
        'post-delete',
        'web',
        '2023-06-20 03:16:13',
        '2023-06-20 03:16:13'
    );

-- --------------------------------------------------------

--

-- Table structure for table `personal_access_tokens`

--

CREATE TABLE
    `personal_access_tokens` (
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
    );

-- --------------------------------------------------------

--

-- Table structure for table `posts`

--

CREATE TABLE
    `posts` (
        `id` bigint(20) UNSIGNED NOT NULL,
        `title` varchar(255) NOT NULL,
        `body` text NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL
    );

-- --------------------------------------------------------

--

-- Table structure for table `roles`

--

CREATE TABLE
    `roles` (
        `id` bigint(20) UNSIGNED NOT NULL,
        `name` varchar(255) NOT NULL,
        `guard_name` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL
    );

--

-- Dumping data for table `roles`

--

INSERT INTO
    `roles` (
        `id`,
        `name`,
        `guard_name`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'admin',
        'web',
        '2023-06-20 03:16:14',
        '2023-06-20 03:16:14'
    ), (
        2,
        'subadmin',
        'web',
        '2023-06-20 05:33:18',
        '2023-06-20 05:33:18'
    );

-- --------------------------------------------------------

--

-- Table structure for table `role_has_permissions`

--

CREATE TABLE
    `role_has_permissions` (
        `permission_id` bigint(20) UNSIGNED NOT NULL,
        `role_id` bigint(20) UNSIGNED NOT NULL
    );

--

-- Dumping data for table `role_has_permissions`

--

INSERT INTO
    `role_has_permissions` (`permission_id`, `role_id`)
VALUES (1, 1), (1, 2), (2, 1), (2, 2), (3, 1), (3, 2), (4, 1), (4, 2), (5, 1), (6, 1), (7, 1), (8, 1), (9, 1), (10, 1), (11, 1), (12, 1), (13, 1), (14, 1), (15, 1), (16, 1);

-- --------------------------------------------------------

--

-- Table structure for table `users`

--

CREATE TABLE
    `users` (
        `id` bigint(20) UNSIGNED NOT NULL,
        `name` varchar(255) NOT NULL,
        `image` blob NOT NULL,
        `email` varchar(255) NOT NULL,
        `email_verified_at` timestamp NULL DEFAULT NULL,
        `password` varchar(255) NOT NULL,
        `remember_token` varchar(100) DEFAULT NULL,
        `created_at` timestamp NULL DEFAULT NULL,
        `updated_at` timestamp NULL DEFAULT NULL
    );

--

-- Dumping data for table `users`

--

INSERT INTO
    `users` (
        `id`,
        `name`,
        `image`,
        `email`,
        `email_verified_at`,
        `password`,
        `remember_token`,
        `created_at`,
        `updated_at`
    )
VALUES (
        1,
        'Muhammad',
        0x313638373235303835322e6a7067,
        'Admin@gmail.com',
        NULL,
        '$2y$10$eL9NyPbIzIJzeAd56Hp.su3pUoxs8rl3m1aS3UPx4aeKyvHheeJwC',
        NULL,
        '2023-06-20 03:16:15',
        '2023-06-20 03:47:32'
    ), (
        2,
        'faraz',
        0x313638373234393230382e6a7067,
        'faraz@gmail.com',
        NULL,
        '$2y$10$G0xX29Fn.SeqUZXciJpBkOdpXJBrIC5HhCnN8QpnbhTiH7CdIeZIO',
        NULL,
        '2023-06-20 03:20:08',
        '2023-06-20 03:20:08'
    ), (
        3,
        'imran',
        0x313638373235373236302e6a7067,
        'imran@gmail.com',
        NULL,
        '$2y$10$1e8AztHZ.SJ.aa4/9HFAkOdIYXT0WCGbbfBox1XooW3oQXADHhfLW',
        NULL,
        '2023-06-20 05:34:20',
        '2023-06-20 05:34:20'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `failed_jobs`

--

ALTER TABLE `failed_jobs`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--

-- Indexes for table `migrations`

--

ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--

-- Indexes for table `model_has_permissions`

--

ALTER TABLE
    `model_has_permissions`
ADD
    PRIMARY KEY (
        `permission_id`,
        `model_id`,
        `model_type`
    ),
ADD
    KEY `model_has_permissions_model_id_model_type_index` (`model_id`, `model_type`);

--

-- Indexes for table `model_has_roles`

--

ALTER TABLE `model_has_roles`
ADD
    PRIMARY KEY (
        `role_id`,
        `model_id`,
        `model_type`
    ),
ADD
    KEY `model_has_roles_model_id_model_type_index` (`model_id`, `model_type`);

--

-- Indexes for table `password_resets`

--

ALTER TABLE `password_resets`
ADD
    KEY `password_resets_email_index` (`email`);

--

-- Indexes for table `password_reset_tokens`

--

ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--

-- Indexes for table `permissions`

--

ALTER TABLE `permissions`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `permissions_name_guard_name_unique` (`name`, `guard_name`);

--

-- Indexes for table `personal_access_tokens`

--

ALTER TABLE
    `personal_access_tokens`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD
    KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (
        `tokenable_type`,
        `tokenable_id`
    );

--

-- Indexes for table `posts`

--

ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

--

-- Indexes for table `roles`

--

ALTER TABLE `roles`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `roles_name_guard_name_unique` (`name`, `guard_name`);

--

-- Indexes for table `role_has_permissions`

--

ALTER TABLE
    `role_has_permissions`
ADD
    PRIMARY KEY (`permission_id`, `role_id`),
ADD
    KEY `role_has_permissions_role_id_foreign` (`role_id`);

--

-- Indexes for table `users`

--

ALTER TABLE `users`
ADD PRIMARY KEY (`id`),
ADD
    UNIQUE KEY `users_email_unique` (`email`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `failed_jobs`

--

ALTER TABLE
    `failed_jobs` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `migrations`

--

ALTER TABLE
    `migrations` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 8;

--

-- AUTO_INCREMENT for table `permissions`

--

ALTER TABLE
    `permissions` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 18;

--

-- AUTO_INCREMENT for table `personal_access_tokens`

--

ALTER TABLE
    `personal_access_tokens` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `posts`

--

ALTER TABLE
    `posts` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--

-- AUTO_INCREMENT for table `roles`

--

ALTER TABLE
    `roles` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 3;

--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE
    `users` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `model_has_permissions`

--

ALTER TABLE
    `model_has_permissions`
ADD
    CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--

-- Constraints for table `model_has_roles`

--

ALTER TABLE `model_has_roles`
ADD
    CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--

-- Constraints for table `role_has_permissions`

--

ALTER TABLE
    `role_has_permissions`
ADD
    CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD
    CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;