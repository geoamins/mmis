/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80027 (8.0.27)
 Source Host           : localhost:3306
 Source Schema         : mmisdb

 Target Server Type    : MySQL
 Target Server Version : 80027 (8.0.27)
 File Encoding         : 65001

 Date: 24/08/2023 13:07:17
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_06_20_061001_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (7, '2023_06_20_061018_create_posts_table', 1);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 3);
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\Models\\User', 2);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'user-list', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (2, 'user-create', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (3, 'user-edit', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (4, 'user-delete', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (5, 'role-list', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (6, 'role-create', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (7, 'role-edit', 'web', '2023-06-20 08:16:12', '2023-06-20 08:16:12');
INSERT INTO `permissions` VALUES (8, 'role-delete', 'web', '2023-06-20 08:16:13', '2023-06-20 08:16:13');
INSERT INTO `permissions` VALUES (9, 'permission-list', 'web', '2023-06-20 08:16:13', '2023-06-20 08:16:13');
INSERT INTO `permissions` VALUES (10, 'permission-create', 'web', '2023-06-20 08:16:13', '2023-06-20 08:16:13');
INSERT INTO `permissions` VALUES (11, 'permission-edit', 'web', '2023-06-20 08:16:13', '2023-06-20 08:16:13');
INSERT INTO `permissions` VALUES (12, 'permission-delete', 'web', '2023-06-20 08:16:13', '2023-06-20 08:16:13');
INSERT INTO `permissions` VALUES (17, 'basic-list', 'web', '2023-08-10 08:14:10', '2023-08-10 08:14:10');
INSERT INTO `permissions` VALUES (18, 'country-list', 'web', '2023-08-10 09:16:24', '2023-08-10 09:16:24');
INSERT INTO `permissions` VALUES (19, 'country-edit', 'web', '2023-08-10 09:16:42', '2023-08-10 09:16:42');
INSERT INTO `permissions` VALUES (20, 'country-delete', 'web', '2023-08-10 09:42:55', '2023-08-10 09:42:55');
INSERT INTO `permissions` VALUES (21, 'province-list', 'web', '2023-08-17 08:26:26', '2023-08-17 08:26:26');
INSERT INTO `permissions` VALUES (22, 'province-edit', 'web', '2023-08-17 08:43:10', '2023-08-17 08:43:10');
INSERT INTO `permissions` VALUES (23, 'province-delete', 'web', '2023-08-17 08:43:32', '2023-08-17 08:43:32');
INSERT INTO `permissions` VALUES (24, 'province-create', 'web', '2023-08-17 08:44:05', '2023-08-17 08:44:05');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (17, 2);
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (6, 1);
INSERT INTO `role_has_permissions` VALUES (7, 1);
INSERT INTO `role_has_permissions` VALUES (8, 1);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (17, 1);
INSERT INTO `role_has_permissions` VALUES (18, 1);
INSERT INTO `role_has_permissions` VALUES (19, 1);
INSERT INTO `role_has_permissions` VALUES (20, 1);
INSERT INTO `role_has_permissions` VALUES (21, 1);
INSERT INTO `role_has_permissions` VALUES (22, 1);
INSERT INTO `role_has_permissions` VALUES (23, 1);
INSERT INTO `role_has_permissions` VALUES (24, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'super', 'web', '2023-06-20 08:16:14', '2023-08-10 08:18:51');
INSERT INTO `roles` VALUES (2, 'admin', 'web', '2023-06-20 10:33:18', '2023-08-10 08:17:43');

-- ----------------------------
-- Table structure for setup_country
-- ----------------------------
DROP TABLE IF EXISTS `setup_country`;
CREATE TABLE `setup_country`  (
  `CountryID` int NOT NULL AUTO_INCREMENT,
  `CountryName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CountryID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_country
-- ----------------------------
INSERT INTO `setup_country` VALUES (5, 'Pakistan', '2023-08-16 07:53:23', '2023-08-16 07:53:23');
INSERT INTO `setup_country` VALUES (6, 'Afghanistan', '2023-08-16 07:53:27', '2023-08-16 07:53:27');

-- ----------------------------
-- Table structure for setup_department
-- ----------------------------
DROP TABLE IF EXISTS `setup_department`;
CREATE TABLE `setup_department`  (
  `DeptID` int NOT NULL,
  `DepartmentName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`DeptID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_department
-- ----------------------------

-- ----------------------------
-- Table structure for setup_district
-- ----------------------------
DROP TABLE IF EXISTS `setup_district`;
CREATE TABLE `setup_district`  (
  `DistrictID` int NOT NULL AUTO_INCREMENT,
  `DistrictName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ProvinceID` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`DistrictID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_district
-- ----------------------------
INSERT INTO `setup_district` VALUES (1, 'Peshawar', 1, NULL, NULL);
INSERT INTO `setup_district` VALUES (2, 'Charsadda', 1, NULL, NULL);
INSERT INTO `setup_district` VALUES (3, 'Mardan', 1, NULL, NULL);
INSERT INTO `setup_district` VALUES (4, 'Sawabi', 1, NULL, NULL);

-- ----------------------------
-- Table structure for setup_madrasa
-- ----------------------------
DROP TABLE IF EXISTS `setup_madrasa`;
CREATE TABLE `setup_madrasa`  (
  `MadrasaID` int NOT NULL,
  `MadrasaName` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MadrasaAddress` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MadrasaPhone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `MadrasaLogo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`MadrasaID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_madrasa
-- ----------------------------

-- ----------------------------
-- Table structure for setup_province
-- ----------------------------
DROP TABLE IF EXISTS `setup_province`;
CREATE TABLE `setup_province`  (
  `ProvinceID` int NOT NULL AUTO_INCREMENT,
  `ProvinceName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `CountryID` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ProvinceID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_province
-- ----------------------------
INSERT INTO `setup_province` VALUES (1, 'KP', 5, '2023-08-10 23:25:57', '2023-08-17 08:56:53');
INSERT INTO `setup_province` VALUES (2, 'Panjab', 5, '2023-08-10 23:26:03', '2023-08-17 13:34:49');
INSERT INTO `setup_province` VALUES (3, 'Sindh', 5, '2023-08-10 23:26:10', '2023-08-17 13:34:50');
INSERT INTO `setup_province` VALUES (9, 'Gilgit Balchistan', 5, '2023-08-17 09:20:39', '2023-08-17 09:20:39');

-- ----------------------------
-- Table structure for setup_session
-- ----------------------------
DROP TABLE IF EXISTS `setup_session`;
CREATE TABLE `setup_session`  (
  `SessionID` int NOT NULL,
  `SessionTitle` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`SessionID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_session
-- ----------------------------

-- ----------------------------
-- Table structure for setup_student_type
-- ----------------------------
DROP TABLE IF EXISTS `setup_student_type`;
CREATE TABLE `setup_student_type`  (
  `StudentTypeID` int NOT NULL,
  `StudentType` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`StudentTypeID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setup_student_type
-- ----------------------------

-- ----------------------------
-- Table structure for studentmaster
-- ----------------------------
DROP TABLE IF EXISTS `studentmaster`;
CREATE TABLE `studentmaster`  (
  `StudentID` bigint NOT NULL AUTO_INCREMENT,
  `RegistrationNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `StudentName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `SCNIC` bigint NULL DEFAULT NULL,
  `DOB` date NULL DEFAULT NULL,
  `GenderID` int NULL DEFAULT NULL COMMENT '1=Male 2=Female',
  `DeptID` int NULL DEFAULT NULL,
  `FatherName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FCNIC` bigint NULL DEFAULT NULL,
  `GuardianName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `GuardianRelation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `FMobile` bigint NULL DEFAULT NULL,
  `CurrentAddress` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `PermanentAddress` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `CountryID` int NULL DEFAULT NULL,
  `ProvinceID` int NULL DEFAULT NULL,
  `DistrictID` int NULL DEFAULT NULL,
  `SessionID` int NULL DEFAULT NULL,
  `AdmissionDate` date NULL DEFAULT NULL,
  `HijriYear` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `StudentTypeID` int NULL DEFAULT NULL,
  `ClassID` int NULL DEFAULT NULL,
  `SectionID` int NULL DEFAULT NULL,
  `HostelStatus` int NULL DEFAULT NULL COMMENT '0=No 1=Yes',
  `PreviousMadrasa` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `IslamicEdu` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `AsriEdu` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `AddlEdu` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `DOSLC` date NULL DEFAULT NULL,
  `ReasonSLC` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `UserID` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`StudentID`) USING BTREE,
  UNIQUE INDEX `StudentID`(`StudentID`) USING BTREE,
  UNIQUE INDEX `RegNo`(`RegistrationNo`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of studentmaster
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Adnan Amin', 0x313639313635353537352E706E67, 'admin@gmail.com', NULL, '$2y$10$SYN0zA.Cz3FA2cP9u4kiMONa9pzXc7bBuzldPjtf1QPDqUXx03HW6', NULL, '2023-06-20 08:16:15', '2023-08-10 08:19:35');
INSERT INTO `users` VALUES (2, 'muhammad', 0x313638373234393230382E6A7067, 'muhammad@gmail.com', NULL, '$2y$10$eHTVTFMOwK2Gj1dh3hs.Wu4IAFXCgcXKk4kIpt3hnSk3J.P6xaZ.G', NULL, '2023-06-20 08:20:08', '2023-08-10 08:20:14');
INSERT INTO `users` VALUES (3, 'imran', 0x313638373235373236302E6A7067, 'imran@gmail.com', NULL, '$2y$10$1e8AztHZ.SJ.aa4/9HFAkOdIYXT0WCGbbfBox1XooW3oQXADHhfLW', NULL, '2023-06-20 10:34:20', '2023-06-20 10:34:20');

SET FOREIGN_KEY_CHECKS = 1;
