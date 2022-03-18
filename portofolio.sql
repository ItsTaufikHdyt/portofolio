-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for portofolio
CREATE DATABASE IF NOT EXISTS `portofolio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `portofolio`;

-- Dumping structure for table portofolio.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
REPLACE INTO `about` (`id`, `desc`, `website`, `phone`, `city`, `age`, `email`, `freelance`, `created_at`, `updated_at`) VALUES
	(1, 'Perkenalkan nama saya Taufik Hidayat, saat ini saya sedang bekerja di Dinas Komunikasi dan Informatika Kota Bontang sebagai Web Developer. Dan saya juga sedang menempuh pendidikan di Sekolah Tinggi Teknologi Bontang Program Studi Teknik Informatika. Senang mempelajari hal baru, dan siap mengerjakan projek sesuai permintaan', 'www.taufikhdyt17.com', '+648981717895 (WA) | +6485156637373', 'Bontang, IND', '21', 'me@taufikhdyt.com |  taufikhdyt2332@gmail.com', 1, '2021-09-07 03:49:06', '2022-03-11 02:18:32');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table portofolio.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table portofolio.education
CREATE TABLE IF NOT EXISTS `education` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.education: ~4 rows (approximately)
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
REPLACE INTO `education` (`id`, `title`, `period`, `location`, `created_at`, `updated_at`) VALUES
	(1, 'SEKOLAH DASAR 012', '2007 - 2013', 'Bontang, Kalimantan Timur, Indonesia', '2021-09-07 03:49:46', '2021-09-07 03:49:46'),
	(2, 'SEKOLAH MENENGAH PERTAMA 7 ', '2013 - 2016', 'Bontang, Kalimantan Timur, Indonesia', '2021-09-07 03:50:12', '2021-09-07 03:50:12'),
	(3, 'REKAYASA PERANGKAT LUNAK DI SMK 1', '2016 - 2019', 'Bontang, Kalimantan Timur, Indonesia', '2021-09-07 03:50:33', '2021-09-07 03:50:33'),
	(4, 'TEKNIK INFORMATIKA STITEK', '2020 - sekarang', 'Bontang, Kalimantan Timur, Indonesia', '2021-09-07 03:51:03', '2021-09-07 03:51:03');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table portofolio.experience
CREATE TABLE IF NOT EXISTS `experience` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.experience: ~2 rows (approximately)
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
REPLACE INTO `experience` (`id`, `title`, `period`, `location`, `desc`, `created_at`, `updated_at`) VALUES
	(5, 'PKL - DINAS PERPUSTAKAAN DAN KEARSIPAN KOTA BONTANG', '2018', 'Bontang, Kalimantan Timur, Indonesia', '<ul>\n	<li>Membuat Poster dan Spanduk</li>\n	<li>Membantu Pengarsipan data pegawai</li>\n</ul>\n', '2021-09-07 04:48:45', '2021-09-07 04:48:45'),
	(6, 'FULLSTACK DEVELOPER - DINAS KOMUNIKASI DAN INFORMATIKA KOTA BONTANG', '2020 - Sekarang', 'Bontang, Kalimantan Timur, Indonesia', '<ul>\r\n	<li>Membangun Aplikasi Web dengan Laravel</li>\r\n	<li>Membangun Aplikasi Mobile dengan Flutter</li>\r\n</ul>', '2021-09-07 04:49:40', '2022-03-11 02:19:38');
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;

-- Dumping structure for table portofolio.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` bigint(20) unsigned NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_portfolio_id_foreign` (`portfolio_id`),
  CONSTRAINT `images_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.images: ~0 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table portofolio.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2021_06_10_022433_create_portofolios_table', 1),
	(4, '2021_06_10_022453_create_contacts_table', 1),
	(5, '2021_06_10_022739_create_abouts_table', 1),
	(6, '2021_06_10_024643_create_images_table', 1),
	(7, '2021_06_10_024826_create_tags_table', 1),
	(8, '2021_08_23_025441_create_education_table', 1),
	(9, '2021_08_23_025619_create_experiences_table', 1),
	(10, '2021_09_01_021249_create_portfolio_tags_table', 1),
	(11, '2021_10_07_045420_create_skills', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table portofolio.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table portofolio.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `portfolio_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_date` date NOT NULL,
  `project_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.portfolio: ~0 rows (approximately)
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table portofolio.portfolio_tags
CREATE TABLE IF NOT EXISTS `portfolio_tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` bigint(20) unsigned NOT NULL,
  `tags_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolio_tags_portfolio_id_foreign` (`portfolio_id`),
  KEY `portfolio_tags_tags_id_foreign` (`tags_id`),
  CONSTRAINT `portfolio_tags_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio` (`id`) ON DELETE CASCADE,
  CONSTRAINT `portfolio_tags_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.portfolio_tags: ~0 rows (approximately)
/*!40000 ALTER TABLE `portfolio_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `portfolio_tags` ENABLE KEYS */;

-- Dumping structure for table portofolio.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.skills: ~13 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
REPLACE INTO `skills` (`id`, `name`, `icon`, `level`, `created_at`, `updated_at`) VALUES
	(1, 'HTML', 'devicon-html5-plain colored', 3, '2021-10-23 21:00:23', '2021-10-23 21:00:25'),
	(2, 'CSS', 'devicon-css3-plain colored', 2, '2021-10-07 05:36:24', '2021-10-07 05:36:24'),
	(3, 'JS', 'devicon-javascript-plain colored', 2, '2021-10-07 05:36:48', '2021-10-07 05:36:48'),
	(4, 'PHP', 'devicon-php-plain colored', 3, '2021-10-07 05:37:17', '2021-10-07 05:37:17'),
	(5, 'JAVA', 'devicon-java-plain colored', 1, '2021-10-07 05:38:05', '2021-10-07 05:38:09'),
	(6, 'Dart', 'devicon-dart-plain colored', 2, '2021-10-07 05:38:39', '2021-10-07 05:38:39'),
	(7, 'Flutter', 'devicon-flutter-plain colored', 2, '2021-10-07 05:39:25', '2021-10-07 05:39:25'),
	(8, 'Laravel', 'devicon-laravel-plain colored', 3, '2021-10-07 05:40:30', '2021-10-07 05:40:30'),
	(9, 'Bootstrap', 'devicon-bootstrap-plain ', 2, '2021-10-07 05:42:09', '2021-10-07 05:42:09'),
	(10, 'Kotlin', 'devicon-kotlin-plain colored', 2, '2021-10-07 05:43:14', '2021-10-07 05:43:14'),
	(11, 'Node JS', 'devicon-nodejs-plain colored', 1, '2021-10-07 05:43:41', '2021-10-07 05:43:41'),
	(12, 'Photoshop', 'devicon-photoshop-plain colored', 2, '2021-10-07 05:45:41', '2021-10-07 05:45:41'),
	(13, 'Vue JS', 'devicon-vuejs-plain colored', 1, '2021-10-07 05:46:51', '2021-10-07 05:46:51');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table portofolio.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tags_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.tags: ~9 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
REPLACE INTO `tags` (`id`, `tags_name`, `created_at`, `updated_at`) VALUES
	(1, 'laravel', '2021-09-01 06:25:06', '2021-09-01 06:25:06'),
	(2, 'Flutter', '2021-09-01 06:25:12', '2021-09-07 04:36:59'),
	(3, 'PHP', '2021-09-07 04:36:40', '2021-09-07 04:36:40'),
	(4, 'Vue JS', '2021-09-07 04:37:09', '2021-09-07 04:37:09'),
	(5, 'React JS', '2021-09-07 04:37:17', '2021-09-07 04:37:17'),
	(6, 'Golang', '2021-09-07 04:40:34', '2021-09-07 04:40:34'),
	(7, 'Dart', '2021-09-07 04:50:46', '2021-09-07 04:50:46'),
	(8, 'Javascript', '2021-09-07 04:51:13', '2021-09-07 04:51:13'),
	(9, 'Node Js', '2021-09-07 04:51:19', '2021-09-07 04:51:19');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping structure for table portofolio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table portofolio.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Taufik Hidayat', 'taufikhdyt2332@gmail.com', '$2y$10$JXQwVgBWPvIkHnuft9C6qurTCI2zTbq8d4d4HYbH4FFWRStOnBYie', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
