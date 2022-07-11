-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour mangeonsafro
DROP DATABASE IF EXISTS `mangeonsafro`;
CREATE DATABASE IF NOT EXISTS `mangeonsafro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mangeonsafro`;

-- Listage de la structure de la table mangeonsafro. categories_has_products
DROP TABLE IF EXISTS `categories_has_products`;
CREATE TABLE IF NOT EXISTS `categories_has_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `categorie_product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_has_products_product_id_foreign` (`product_id`),
  KEY `categories_has_products_categorie_product_id_foreign` (`categorie_product_id`),
  CONSTRAINT `categories_has_products_categorie_product_id_foreign` FOREIGN KEY (`categorie_product_id`) REFERENCES `categorie_products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `categories_has_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.categories_has_products : ~10 rows (environ)
/*!40000 ALTER TABLE `categories_has_products` DISABLE KEYS */;
INSERT INTO `categories_has_products` (`id`, `product_id`, `categorie_product_id`, `created_at`, `updated_at`) VALUES
	(1, 10, 2, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(2, 7, 6, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(3, 3, 3, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(4, 6, 2, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(5, 5, 3, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(6, 8, 3, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(7, 2, 7, '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(8, 4, 10, '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(9, 9, 8, '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(10, 1, 6, '2022-02-15 16:30:27', '2022-02-15 16:30:27');
/*!40000 ALTER TABLE `categories_has_products` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. categories_price_has_products
DROP TABLE IF EXISTS `categories_price_has_products`;
CREATE TABLE IF NOT EXISTS `categories_price_has_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `price` double(8,2) NOT NULL,
  `categorie_price_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_price_has_products_categorie_price_id_foreign` (`categorie_price_id`),
  KEY `categories_price_has_products_product_id_foreign` (`product_id`),
  CONSTRAINT `categories_price_has_products_categorie_price_id_foreign` FOREIGN KEY (`categorie_price_id`) REFERENCES `categorie_prices` (`id`) ON DELETE CASCADE,
  CONSTRAINT `categories_price_has_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.categories_price_has_products : ~0 rows (environ)
/*!40000 ALTER TABLE `categories_price_has_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_price_has_products` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. categorie_prices
DROP TABLE IF EXISTS `categorie_prices`;
CREATE TABLE IF NOT EXISTS `categorie_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.categorie_prices : ~0 rows (environ)
/*!40000 ALTER TABLE `categorie_prices` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_prices` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. categorie_products
DROP TABLE IF EXISTS `categorie_products`;
CREATE TABLE IF NOT EXISTS `categorie_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.categorie_products : ~10 rows (environ)
/*!40000 ALTER TABLE `categorie_products` DISABLE KEYS */;
INSERT INTO `categorie_products` (`id`, `name`, `description`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'Michel-Gilles Gallet', 'Et eos eaque officia deleniti. Dolor sit excepturi perspiciatis dolor culpa.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(2, 'Benoît de Dumont', 'Rerum non laborum nulla blanditiis harum necessitatibus. Molestiae harum enim ex quas repellat in quibusdam.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(3, 'Patricia Marchand', 'Ipsum aut ut voluptatum eum aspernatur.', 0, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(4, 'Sébastien Teixeira-Adam', 'Facere quaerat vel nam qui beatae.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(5, 'Jules de Barre', 'Aliquid provident aliquid ut in nisi.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(6, 'Henriette-Margot Leger', 'Et aut sit nesciunt aut animi sunt praesentium. Hic hic earum neque est.', 0, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(7, 'Valentine Joubert', 'Temporibus deserunt vitae doloribus velit maiores.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(8, 'Emmanuelle Gilles', 'Qui eum esse explicabo non et. Praesentium cupiditate voluptatem nobis est minima.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(9, 'Gilbert Samson', 'Corporis vel eum neque et. Consequuntur eius amet maiores aut illum ut perferendis libero.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26'),
	(10, 'Gabrielle Maillot', 'Repudiandae fugiat qui accusamus assumenda earum.', 1, '2022-02-15 16:30:26', '2022-02-15 16:30:26');
/*!40000 ALTER TABLE `categorie_products` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. categorie_shops
DROP TABLE IF EXISTS `categorie_shops`;
CREATE TABLE IF NOT EXISTS `categorie_shops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.categorie_shops : ~4 rows (environ)
/*!40000 ALTER TABLE `categorie_shops` DISABLE KEYS */;
INSERT INTO `categorie_shops` (`id`, `name`, `description`, `image`, `isActive`, `created_at`, `updated_at`) VALUES
	(1, 'restaurant', NULL, NULL, '1', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(2, 'fait maison', NULL, NULL, '1', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(3, 'traiteur', NULL, NULL, '1', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(4, 'epicerie', NULL, NULL, '1', '2022-02-15 16:30:21', '2022-02-15 16:30:21');
/*!40000 ALTER TABLE `categorie_shops` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.comments : ~0 rows (environ)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. favoris
DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `favorisable_id` int(11) NOT NULL,
  `favorisable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favoris_user_id_foreign` (`user_id`),
  CONSTRAINT `favoris_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.favoris : ~0 rows (environ)
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `imageable_id` int(11) NOT NULL,
  `imageable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.images : ~10 rows (environ)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `imageable_id`, `imageable`, `name`, `created_at`, `updated_at`) VALUES
	(1, 3, 'users', 'images/categories2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(2, 8, 'categories', 'images/categories2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(3, 2, 'categories', 'images/users2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(4, 6, 'users', 'images/products2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(5, 4, 'products', 'images/users2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(6, 1, 'categories', 'images/users2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(7, 10, 'users', 'images/products2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(8, 5, 'users', 'images/users2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(9, 7, 'products', 'images/products2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27'),
	(10, 8, 'users', 'images/categories2022-02-15 16:30:27', '2022-02-15 16:30:27', '2022-02-15 16:30:27');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. image_products
DROP TABLE IF EXISTS `image_products`;
CREATE TABLE IF NOT EXISTS `image_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `products_id` bigint(20) unsigned NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `image_products_products_id_foreign` (`products_id`),
  CONSTRAINT `image_products_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.image_products : ~0 rows (environ)
/*!40000 ALTER TABLE `image_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_products` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.migrations : ~17 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(21, '2014_10_12_000000_create_users_table', 1),
	(22, '2014_10_12_100000_create_password_resets_table', 1),
	(23, '2019_08_19_000000_create_failed_jobs_table', 1),
	(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(25, '2021_11_17_093302_create_phones_table', 1),
	(26, '2021_11_17_093303_create_categorie_shops_table', 1),
	(27, '2021_11_17_093919_create_shops_table', 1),
	(28, '2021_11_17_094555_create_shops_users_table', 1),
	(29, '2021_11_17_095939_create_products_table', 1),
	(30, '2021_11_17_100633_create_image_products_table', 1),
	(31, '2021_11_17_100933_create_categorie_products_table', 1),
	(32, '2021_11_17_101656_create_categories_has_products_table', 1),
	(33, '2021_11_17_103440_create_comments_table', 1),
	(34, '2021_11_17_103656_create_favoris_table', 1),
	(35, '2021_11_17_111458_create_votes_table', 1),
	(36, '2021_11_17_112144_create_categorie_prices_table', 1),
	(37, '2021_11_17_112707_create_categories_price_has_products_table', 1),
	(38, '2021_11_22_091213_create_permission_tables', 1),
	(39, '2022_01_25_111728_alter_product_table_add_column_active', 1),
	(40, '2022_02_11_141207_create_images_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. model_has_permissions
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.model_has_permissions : ~0 rows (environ)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. model_has_roles
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.model_has_roles : ~0 rows (environ)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.permissions : ~0 rows (environ)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. phones
DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneable_id` int(11) NOT NULL,
  `phoneable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.phones : ~0 rows (environ)
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `price` double(8,2) DEFAULT NULL,
  `shop_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_shop_id_foreign` (`shop_id`),
  CONSTRAINT `products_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.products : ~10 rows (environ)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `description`, `active`, `price`, `shop_id`, `created_at`, `updated_at`) VALUES
	(1, 'Théodore Hoarau-Robin', 'Cupiditate qui rerum magnam ut. Velit fugiat asperiores blanditiis et nostrum.', 1, 416930.00, 8, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(2, 'Raymond Brun', 'Odio reprehenderit consequatur praesentium. Distinctio atque aut aspernatur porro.', 0, 153057.00, 6, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(3, 'Anaïs Boulanger', 'Explicabo repudiandae ad rerum molestias repellat et quos.', 1, 547147.00, 9, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(4, 'Tristan Delmas-Peron', 'Aperiam dolorem ratione maxime eum sit. Atque perferendis doloribus molestiae dolorum animi ut.', 1, 929890.00, 8, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(5, 'Émile Remy', 'Et rerum placeat earum sit. Mollitia sit aut velit qui dignissimos.', 1, 245244.00, 8, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(6, 'Martine Becker', 'Blanditiis explicabo quam enim laudantium et ut.', 1, 211931.00, 1, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(7, 'François Georges', 'Et explicabo voluptatem repellendus.', 0, 880061.00, 2, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(8, 'Gilbert Leconte', 'Rem enim excepturi quae quidem at rem nam.', 1, 758364.00, 9, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(9, 'Marthe-Adélaïde Philippe', 'Dolorum aut vel officia consequatur laudantium.', 1, 531484.00, 1, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(10, 'Charles-Noël Thibault', 'Ipsa veniam id laboriosam voluptas voluptatem est tenetur.', 1, 198020.00, 9, '2022-02-15 16:30:25', '2022-02-15 16:30:25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.roles : ~6 rows (environ)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super-admin', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(2, 'admin', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(3, 'client', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(4, 'livreur', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(5, 'responsable-commerce', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21'),
	(6, 'vendeur', 'web', '2022-02-15 16:30:21', '2022-02-15 16:30:21');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. role_has_permissions
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.role_has_permissions : ~0 rows (environ)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. shops
DROP TABLE IF EXISTS `shops`;
CREATE TABLE IF NOT EXISTS `shops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `web_site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_shop_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shops_categorie_shop_id_foreign` (`categorie_shop_id`),
  CONSTRAINT `shops_categorie_shop_id_foreign` FOREIGN KEY (`categorie_shop_id`) REFERENCES `categorie_shops` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.shops : ~10 rows (environ)
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` (`id`, `name`, `description`, `web_site`, `email`, `phone`, `categorie_shop_id`, `created_at`, `updated_at`) VALUES
	(1, 'Maryse du Jacquot', 'Accusantium maiores modi illum occaecati dolores. Consectetur nobis numquam blanditiis consequuntur perspiciatis.', 'http://ruiz.com/totam-et-excepturi-nesciunt-saepe-id-enim.html', 'pages.marc@example.com', '0571831974', 1, '2022-02-15 16:30:24', '2022-02-15 16:30:24'),
	(2, 'Sylvie-Aurore Leconte', 'Culpa explicabo quia placeat odit consectetur.', 'http://www.costa.com/voluptatem-ut-excepturi-nihil-molestias-nobis-eum-voluptatum-voluptatem', 'thomas.allard@example.org', '06 67 70 57 96', 3, '2022-02-15 16:30:24', '2022-02-15 16:30:24'),
	(3, 'Gabrielle Collin', 'Odit adipisci quo et ut praesentium suscipit.', 'https://adam.fr/ea-et-est-autem-ut-officiis-vel-sapiente.html', 'dominique.perrier@example.net', '04 97 66 39 00', 2, '2022-02-15 16:30:24', '2022-02-15 16:30:24'),
	(4, 'Alexandre-Yves Gautier', 'Qui omnis adipisci quae aut. Cum excepturi odit sed odit dicta nam delectus.', 'http://dias.com/ea-culpa-cupiditate-rerum-delectus-eum.html', 'bguillot@example.net', '01 53 86 01 28', 2, '2022-02-15 16:30:24', '2022-02-15 16:30:24'),
	(5, 'Camille Laporte', 'Quos accusamus necessitatibus dolore voluptas. Consequatur vitae odit odio.', 'http://launay.org/occaecati-explicabo-qui-libero-aut-non-optio-nostrum', 'alexandre.giraud@example.org', '+33 (0)9 24 08 74 05', 3, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(6, 'Michelle Paul-Benard', 'Hic consequatur quas quibusdam dignissimos hic. Natus amet et modi eveniet quia.', 'http://www.morin.fr/a-sit-quia-et-velit-ut-quia-earum', 'wagner.bertrand@example.com', '0978649056', 3, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(7, 'Hugues Garcia', 'Velit minus ut maxime quae. Enim qui pariatur molestiae ut velit id reprehenderit.', 'http://dossantos.com/ut-accusamus-tenetur-quas-dicta-commodi-eum', 'delmas.eleonore@example.net', '05 99 99 97 78', 3, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(8, 'Alfred de la Delannoy', 'Qui nihil rerum voluptatem. Facilis accusantium enim quo vel.', 'http://www.toussaint.fr/minus-dolor-vel-at-eos-perferendis-eum-velit-similique', 'dias.matthieu@example.org', '0391451110', 4, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(9, 'Lucy Meyer', 'Omnis occaecati nulla hic laudantium aut cumque. Nisi in commodi omnis illo blanditiis.', 'http://guyon.org/sed-molestiae-autem-rerum-laboriosam-suscipit-nobis-odio', 'dubois.eleonore@example.net', '05 02 05 58 72', 3, '2022-02-15 16:30:25', '2022-02-15 16:30:25'),
	(10, 'Patricia Briand', 'Corrupti rerum quo nam optio et accusamus perferendis. Voluptas aut qui iusto beatae commodi omnis.', 'http://www.torres.fr/quibusdam-vel-repellendus-earum-quisquam-nobis-libero-ex.html', 'gilbert25@example.net', '+33 5 41 76 69 82', 1, '2022-02-15 16:30:25', '2022-02-15 16:30:25');
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. shops_users
DROP TABLE IF EXISTS `shops_users`;
CREATE TABLE IF NOT EXISTS `shops_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `shops_users_shop_id_foreign` (`shop_id`),
  KEY `shops_users_user_id_foreign` (`user_id`),
  CONSTRAINT `shops_users_shop_id_foreign` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`id`) ON DELETE CASCADE,
  CONSTRAINT `shops_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.shops_users : ~0 rows (environ)
/*!40000 ALTER TABLE `shops_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `shops_users` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `first_name`, `image_path`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'petter', NULL, NULL, 'petter@gmail.com', NULL, '$2y$10$oK8bk9h/PMD7hKCVFq7Yh.9YeXdkjNF6UgdtLnos7Wnw3Rj.sWnJS', NULL, '2022-02-15 16:33:59', '2022-02-15 16:33:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Listage de la structure de la table mangeonsafro. votes
DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `vote` double NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `votesable_id` int(11) NOT NULL,
  `votesable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `votes_user_id_foreign` (`user_id`),
  CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table mangeonsafro.votes : ~0 rows (environ)
/*!40000 ALTER TABLE `votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `votes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
