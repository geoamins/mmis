-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2023 at 12:07 PM
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
-- Database: `mmisdb`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_20_061001_create_permission_tables', 1),
(7, '2023_06_20_061018_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(2, 'user-create', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(3, 'user-edit', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(4, 'user-delete', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(5, 'role-list', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(6, 'role-create', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(7, 'role-edit', 'web', '2023-06-20 03:16:12', '2023-06-20 03:16:12'),
(8, 'role-delete', 'web', '2023-06-20 03:16:13', '2023-06-20 03:16:13'),
(9, 'permission-list', 'web', '2023-06-20 03:16:13', '2023-06-20 03:16:13'),
(10, 'permission-create', 'web', '2023-06-20 03:16:13', '2023-06-20 03:16:13'),
(11, 'permission-edit', 'web', '2023-06-20 03:16:13', '2023-06-20 03:16:13'),
(12, 'permission-delete', 'web', '2023-06-20 03:16:13', '2023-06-20 03:16:13'),
(17, 'basic-list', 'web', '2023-08-10 03:14:10', '2023-08-10 03:14:10'),
(18, 'country-list', 'web', '2023-08-10 04:16:24', '2023-08-10 04:16:24'),
(19, 'country-edit', 'web', '2023-08-10 04:16:42', '2023-08-10 04:16:42'),
(20, 'country-delete', 'web', '2023-08-10 04:42:55', '2023-08-10 04:42:55'),
(21, 'student-list', 'web', '2023-08-16 03:56:15', '2023-08-16 03:56:15'),
(22, 'student-create', 'web', '2023-08-16 10:42:13', '2023-08-16 10:42:13'),
(23, 'student-edit', 'web', '2023-08-16 10:42:35', '2023-08-16 10:42:35'),
(24, 'student-delete', 'web', '2023-08-16 10:42:56', '2023-08-16 10:42:56'),
(25, 'province-list', 'web', '2023-08-19 05:50:48', '2023-08-19 05:50:48'),
(26, 'province-edit', 'web', '2023-08-19 05:53:09', '2023-08-19 05:53:09'),
(27, 'province-delete', 'web', '2023-08-19 05:53:37', '2023-08-19 05:53:37'),
(28, 'district-list', 'web', '2023-08-19 23:51:33', '2023-08-19 23:51:33'),
(29, 'district-create', 'web', '2023-08-20 00:12:26', '2023-08-20 00:12:26'),
(30, 'district-edit', 'web', '2023-08-20 00:13:01', '2023-08-20 00:13:01'),
(31, 'district-delete', 'web', '2023-08-20 00:13:19', '2023-08-20 00:13:19'),
(32, 'department-list', 'web', '2023-08-20 04:15:59', '2023-08-20 04:15:59'),
(33, 'department-create', 'web', '2023-08-20 04:49:22', '2023-08-20 04:49:22'),
(34, 'department-edit', 'web', '2023-08-20 04:49:36', '2023-08-20 04:49:36'),
(35, 'department-delete', 'web', '2023-08-20 04:49:55', '2023-08-20 04:49:55'),
(36, 'session-list', 'web', '2023-08-20 04:52:48', '2023-08-20 04:52:48'),
(37, 'session-create', 'web', '2023-08-20 05:03:18', '2023-08-20 05:03:18'),
(38, 'session-edit', 'web', '2023-08-20 05:03:40', '2023-08-20 05:03:40'),
(39, 'session-delete', 'web', '2023-08-20 05:03:54', '2023-08-20 05:03:54'),
(40, 'student-type-create', 'web', '2023-08-20 05:52:39', '2023-08-20 05:52:39'),
(41, 'student-type-edit', 'web', '2023-08-20 05:53:02', '2023-08-20 05:53:02'),
(42, 'student-type-delete', 'web', '2023-08-20 05:53:17', '2023-08-20 05:53:17'),
(43, 'student-type-list', 'web', '2023-08-20 05:53:47', '2023-08-20 05:53:47'),
(44, 'section-list', 'web', '2023-08-22 02:56:28', '2023-08-22 02:56:28'),
(45, 'section-create', 'web', '2023-08-22 02:56:59', '2023-08-22 02:56:59'),
(46, 'section-edit', 'web', '2023-08-22 02:57:14', '2023-08-22 02:57:14'),
(47, 'section-delete', 'web', '2023-08-22 02:57:31', '2023-08-22 02:57:31'),
(48, 'class-list', 'web', '2023-08-24 06:53:57', '2023-08-24 06:53:57'),
(49, 'class-create', 'web', '2023-08-24 06:54:08', '2023-08-24 06:54:08'),
(50, 'class-edit', 'web', '2023-08-24 06:54:32', '2023-08-24 06:54:32'),
(51, 'class-delete', 'web', '2023-08-24 06:54:46', '2023-08-24 06:54:46'),
(52, 'province-create', 'web', '2023-09-02 04:06:07', '2023-09-02 04:06:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super', 'web', '2023-06-20 03:16:14', '2023-08-10 03:18:51'),
(2, 'admin', 'web', '2023-06-20 05:33:18', '2023-08-10 03:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(17, 2),
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `setup_class`
--

CREATE TABLE `setup_class` (
  `ClassID` int(11) NOT NULL,
  `ClassName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setup_class`
--

INSERT INTO `setup_class` (`ClassID`, `ClassName`, `created_at`, `updated_at`) VALUES
(5, 'BCS A', '2023-09-02 04:07:05', '2023-09-02 04:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `setup_country`
--

CREATE TABLE `setup_country` (
  `CountryID` int(11) NOT NULL,
  `CountryName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_country`
--

INSERT INTO `setup_country` (`CountryID`, `CountryName`, `created_at`, `updated_at`) VALUES
(12, 'Pakistan', '2023-09-02 04:04:23', '2023-09-02 09:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `setup_department`
--

CREATE TABLE `setup_department` (
  `DeptID` int(11) NOT NULL,
  `DepartmentName` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_department`
--

INSERT INTO `setup_department` (`DeptID`, `DepartmentName`, `created_at`, `updated_at`) VALUES
(6, 'BCS', '2023-09-02 04:06:40', '2023-09-02 09:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `setup_district`
--

CREATE TABLE `setup_district` (
  `DistrictID` int(11) NOT NULL,
  `DistrictName` varchar(255) DEFAULT NULL,
  `ProvinceID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_district`
--

INSERT INTO `setup_district` (`DistrictID`, `DistrictName`, `ProvinceID`, `created_at`, `updated_at`) VALUES
(10, 'Swabi', 5, '2023-09-02 04:06:33', '2023-09-02 09:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `setup_madrasa`
--

CREATE TABLE `setup_madrasa` (
  `MadrasaID` int(11) NOT NULL,
  `MadrasaName` varchar(1000) DEFAULT NULL,
  `MadrasaAddress` varchar(500) DEFAULT NULL,
  `MadrasaPhone` varchar(255) DEFAULT NULL,
  `MadrasaLogo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `setup_province`
--

CREATE TABLE `setup_province` (
  `ProvinceID` int(11) NOT NULL,
  `ProvinceName` varchar(255) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_province`
--

INSERT INTO `setup_province` (`ProvinceID`, `ProvinceName`, `CountryID`, `created_at`, `updated_at`) VALUES
(5, 'KPK', 12, '2023-09-02 04:06:26', '2023-09-02 09:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `setup_section`
--

CREATE TABLE `setup_section` (
  `SectionID` int(11) NOT NULL,
  `SectionName` varchar(255) DEFAULT NULL,
  `ClassID` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setup_section`
--

INSERT INTO `setup_section` (`SectionID`, `SectionName`, `ClassID`, `created_at`, `updated_at`) VALUES
(10, 'A', 5, '2023-09-02 04:07:12', '2023-09-02 04:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `setup_session`
--

CREATE TABLE `setup_session` (
  `SessionID` int(11) NOT NULL,
  `SessionTitle` varchar(9) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_session`
--

INSERT INTO `setup_session` (`SessionID`, `SessionTitle`, `created_at`, `updated_at`) VALUES
(5, '2021-2025', '2023-09-02 04:06:51', '2023-09-02 09:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `setup_student_type`
--

CREATE TABLE `setup_student_type` (
  `StudentTypeID` int(11) NOT NULL,
  `StudentType` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `setup_student_type`
--

INSERT INTO `setup_student_type` (`StudentTypeID`, `StudentType`, `created_at`, `updated_at`) VALUES
(5, 'New', '2023-09-02 04:06:57', '2023-09-02 09:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `studentmaster`
--

CREATE TABLE `studentmaster` (
  `StudentID` bigint(20) NOT NULL,
  `RegistrationNo` varchar(255) DEFAULT NULL,
  `StudentName` varchar(255) DEFAULT NULL,
  `SCNIC` bigint(20) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `GenderID` int(11) DEFAULT NULL COMMENT '1=Male 2=Female',
  `DeptID` int(11) DEFAULT NULL,
  `FatherName` varchar(255) DEFAULT NULL,
  `FCNIC` bigint(20) DEFAULT NULL,
  `GuardianName` varchar(255) DEFAULT NULL,
  `GuardianRelation` varchar(255) DEFAULT NULL,
  `FMobile` bigint(20) DEFAULT NULL,
  `CurrentAddress` varchar(1000) DEFAULT NULL,
  `PermanentAddress` varchar(1000) DEFAULT NULL,
  `CountryID` int(11) DEFAULT NULL,
  `ProvinceID` int(11) DEFAULT NULL,
  `DistrictID` int(11) DEFAULT NULL,
  `SessionID` int(11) DEFAULT NULL,
  `AdmissionDate` date DEFAULT NULL,
  `HijriYear` varchar(255) DEFAULT NULL,
  `StudentTypeID` int(11) DEFAULT NULL,
  `ClassID` int(11) DEFAULT NULL,
  `SectionID` int(11) DEFAULT NULL,
  `HostelStatus` int(11) DEFAULT NULL COMMENT '0=No 1=Yes',
  `PreviousMadrasa` varchar(1000) DEFAULT NULL,
  `IslamicEdu` varchar(1000) DEFAULT NULL,
  `AsriEdu` varchar(1000) DEFAULT NULL,
  `AddlEdu` varchar(1000) DEFAULT NULL,
  `DOSLC` date DEFAULT NULL,
  `ReasonSLC` varchar(1000) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `studentmaster`
--

INSERT INTO `studentmaster` (`StudentID`, `RegistrationNo`, `StudentName`, `SCNIC`, `DOB`, `GenderID`, `DeptID`, `FatherName`, `FCNIC`, `GuardianName`, `GuardianRelation`, `FMobile`, `CurrentAddress`, `PermanentAddress`, `CountryID`, `ProvinceID`, `DistrictID`, `SessionID`, `AdmissionDate`, `HijriYear`, `StudentTypeID`, `ClassID`, `SectionID`, `HostelStatus`, `PreviousMadrasa`, `IslamicEdu`, `AsriEdu`, `AddlEdu`, `DOSLC`, `ReasonSLC`, `UserID`, `Image`, `created_at`, `updated_at`) VALUES
(72, '112099', 'Maaz Khan', 162028424829, '2023-09-13', 1, 6, 'Ghani Sarwar', 38738178318381, 'Zubair Khan', 'Brother', 923087158253, 'Phase 4 Hayatabad Peshawar', 'Yarhussain Jankhel Swabi', 12, 5, 10, 5, '2023-09-04', '2019', 5, 5, 10, 1, 'Anwar Ul Quran', 'Hifaz', 'First Darja', 'Yes', NULL, NULL, NULL, '1693721633.jpg', '2023-09-03 01:13:53', '2023-09-03 06:13:53'),
(71, '112335', 'Wajid Kundi', 163302849923, '2023-09-14', 1, 6, 'Wajid Ali', 38738178318381, 'Khalid Khan', 'Mamu', 923087158253, 'Phase 4 Hayatabad Peshawar', 'Phase 3 Hayatabad Peshawar Kpk', 12, 5, 10, 5, '2023-08-29', '2019', 5, 5, 10, 1, 'Anwar Ul Quran', 'Hifaz', 'No', 'Yes', NULL, NULL, NULL, '1693666503.jpg', '2023-09-02 09:55:03', '2023-09-02 14:55:03'),
(70, '11233', 'Rizwan Sarwar', 163302849923, '2023-09-15', 1, 6, 'Muhammad Sarwar', 38738178318381, 'Qayum khan', 'Brother', 923087158253, 'Phase 4 Hayatabad Peshawar', 'VPO Yarhussain Swabi Kpk', 12, 5, 10, 5, '2023-09-03', '2019', 5, 5, 10, 1, 'Anwar Ul Quran', 'Hifaz', 'No', 'Yes', NULL, NULL, NULL, '1693645708.jpg', '2023-09-02 04:08:28', '2023-09-02 09:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adnan Amin', 0x313639313635353537352e706e67, 'admin@gmail.com', NULL, '$2y$10$SYN0zA.Cz3FA2cP9u4kiMONa9pzXc7bBuzldPjtf1QPDqUXx03HW6', NULL, '2023-06-20 03:16:15', '2023-08-10 03:19:35'),
(2, 'muhammad', 0x313638373234393230382e6a7067, 'muhammad@gmail.com', NULL, '$2y$10$eHTVTFMOwK2Gj1dh3hs.Wu4IAFXCgcXKk4kIpt3hnSk3J.P6xaZ.G', NULL, '2023-06-20 03:20:08', '2023-08-10 03:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `setup_class`
--
ALTER TABLE `setup_class`
  ADD PRIMARY KEY (`ClassID`);

--
-- Indexes for table `setup_country`
--
ALTER TABLE `setup_country`
  ADD PRIMARY KEY (`CountryID`) USING BTREE;

--
-- Indexes for table `setup_department`
--
ALTER TABLE `setup_department`
  ADD PRIMARY KEY (`DeptID`) USING BTREE;

--
-- Indexes for table `setup_district`
--
ALTER TABLE `setup_district`
  ADD PRIMARY KEY (`DistrictID`) USING BTREE;

--
-- Indexes for table `setup_madrasa`
--
ALTER TABLE `setup_madrasa`
  ADD PRIMARY KEY (`MadrasaID`) USING BTREE;

--
-- Indexes for table `setup_province`
--
ALTER TABLE `setup_province`
  ADD PRIMARY KEY (`ProvinceID`) USING BTREE;

--
-- Indexes for table `setup_section`
--
ALTER TABLE `setup_section`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `setup_session`
--
ALTER TABLE `setup_session`
  ADD PRIMARY KEY (`SessionID`) USING BTREE;

--
-- Indexes for table `setup_student_type`
--
ALTER TABLE `setup_student_type`
  ADD PRIMARY KEY (`StudentTypeID`) USING BTREE;

--
-- Indexes for table `studentmaster`
--
ALTER TABLE `studentmaster`
  ADD PRIMARY KEY (`StudentID`) USING BTREE,
  ADD UNIQUE KEY `StudentID` (`StudentID`) USING BTREE,
  ADD UNIQUE KEY `RegNo` (`RegistrationNo`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `setup_class`
--
ALTER TABLE `setup_class`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setup_country`
--
ALTER TABLE `setup_country`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `setup_department`
--
ALTER TABLE `setup_department`
  MODIFY `DeptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setup_district`
--
ALTER TABLE `setup_district`
  MODIFY `DistrictID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setup_province`
--
ALTER TABLE `setup_province`
  MODIFY `ProvinceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setup_section`
--
ALTER TABLE `setup_section`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setup_session`
--
ALTER TABLE `setup_session`
  MODIFY `SessionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setup_student_type`
--
ALTER TABLE `setup_student_type`
  MODIFY `StudentTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentmaster`
--
ALTER TABLE `studentmaster`
  MODIFY `StudentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
