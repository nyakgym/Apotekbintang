-- --------------------------------------------------------
-- Host:                         nyakgym.tipnl.com
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tipn3594_nyakgym
CREATE DATABASE IF NOT EXISTS `tipn3594_nyakgym` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `tipn3594_nyakgym`;

-- Dumping structure for table tipn3594_nyakgym.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.migrations: ~9 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_06_11_112212_obat', 1),
	(7, '2023_06_11_112431_supplier', 1),
	(8, '2023_06_11_112746_faktur_penjualan', 1),
	(9, '2023_07_09_114342_create_obats_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.obats
CREATE TABLE IF NOT EXISTS `obats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kategoriobat` varchar(255) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `stok` int(10) unsigned NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.obats: ~0 rows (approximately)
/*!40000 ALTER TABLE `obats` DISABLE KEYS */;
/*!40000 ALTER TABLE `obats` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.password_reset_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table tipn3594_nyakgym.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_nyakgym.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Nyak Gymnastiar Syah', 'nyakgym@gmail.com', NULL, '$2y$10$VYgeSUJ87pDvPOl3Akhfoe0HpQ6fkKUM/CHEQwlph1qqtH371xDhe', NULL, '2023-07-09 12:50:49', '2023-07-09 12:50:49'),
	(2, 'Admin', 'admin@admin.com', NULL, '$2y$10$9W8u8rjXPfYwvcxxZkKid.9tXIeIyU8peIUmsDr2WQF1.ASCL.JzS', '', '2023-07-09 13:50:29', '2023-07-09 13:50:29'),
	(3, 'nama', 'nama@gmail.com', NULL, '$2y$10$pUjbKf3iLeKpham48SoBmuRXs7GJENFZTAKkE5RXuZ0h4FRfpBKla', NULL, '2023-07-09 13:52:18', '2023-07-09 13:52:18'),
	(4, 'nama', 'nama1@gmail.com', NULL, '$2y$10$miq5orMYTTJCwUEkcgxfJeCEq75oBARPGv.lDCXWTN/LgjjTQUInS', NULL, '2023-07-09 13:52:34', '2023-07-09 13:52:34'),
	(5, 'aapa', 'apa@apa.com', NULL, '$2y$10$Fdm/yD..Ubd6zp7bsUTnleLsj51J2PV/zoQkgWQagWKpFgKBdYWNG', NULL, '2023-07-09 13:54:41', '2023-07-09 13:54:41'),
	(6, 'kasir', 'kasir@gmail.com', NULL, '$2y$10$KyukFUFsId1hES2Wnnv6SOjIxhFKwuicGgPhrl0Gqyps3KCLpNeuW', NULL, '2023-07-09 14:00:02', '2023-07-09 14:00:02'),
	(7, 'ivan', 'ivan@gmail.com', NULL, '$2y$10$dwVUDEvzxDtv8DWt5ZKOOODCuYEug/V3uRm3GXos4iMWd6XATRF2e', NULL, '2023-07-09 14:04:41', '2023-07-09 14:04:41'),
	(8, 'Admin1', 'admin1@admin.com', NULL, '$2y$10$R6JEVtU7y8vKh8oB52Ydk.zCpfLn0OpjVF4WJLL2URlq8pSDaVovW', NULL, '2023-07-09 14:14:20', '2023-07-09 14:14:20'),
	(9, 'Nyak Gymnastiar Syah', 'nyakgym@admin.com', NULL, '$2y$10$aOiWAyANmMIT7JBm4Sv.n.ua7Qm2v1SC6Ep74UqLB1xGsZ2JMMwuG', NULL, '2023-07-09 14:28:48', '2023-07-09 14:28:48'),
	(10, 'Heri', 'heri@gmail.com', NULL, '$2y$10$AHL2F7yxRJAKSum6Q5.DPex8Z9v4S9ZfejZg8RM/OR29BvhWr.WqK', NULL, '2023-07-09 15:03:07', '2023-07-09 15:03:07'),
	(11, 'apoteker', 'apoteker@apotek.com', NULL, '$2y$10$l0mTEhnLyfTcUGnbXl6bp.BDaxXXS7sxKMYQ7JMbOPBTvxHrD84R2', NULL, '2023-07-09 15:05:53', '2023-07-09 15:05:53'),
	(12, 'Nama2', 'nama2@gmail.com', NULL, '$2y$10$UTFtPBBpgxJKfRACCV7vCeG6ZNszzlT5IDRrj.VaJigEiCdcJnq1K', NULL, '2023-07-09 15:13:24', '2023-07-09 15:13:24'),
	(13, 'Ivan Fadil', 'ivan1@ivan.com', NULL, '$2y$10$xFZ6Q4X6qr8fBUvZXOvxMeXQrqNG3ShWD.5ip0N3qOh/TGWIWYJya', NULL, '2023-07-09 15:16:10', '2023-07-09 15:16:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
