-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hotel
CREATE DATABASE IF NOT EXISTS `hotel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `hotel`;

-- Dumping structure for table hotel.information
CREATE TABLE IF NOT EXISTS `information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.information: ~0 rows (approximately)
/*!40000 ALTER TABLE `information` DISABLE KEYS */;
/*!40000 ALTER TABLE `information` ENABLE KEYS */;

-- Dumping structure for table hotel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_11_25_083336_create_rooms_table', 1),
	(4, '2016_11_25_083608_create_orders_table', 1),
	(5, '2016_11_25_083633_create_information_table', 1),
	(6, '2016_11_25_083642_create_services_table', 1),
	(7, '2016_11_25_084959_create_photos_table', 1),
	(8, '2016_11_25_085006_create_types_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hotel.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `begin` date NOT NULL,
  `end` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table hotel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hotel.photos
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.photos: ~0 rows (approximately)
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;

-- Dumping structure for table hotel.rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.rooms: ~17 rows (approximately)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `type_id`, `name`, `description`, `price`, `available`, `total`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Fahey Road', 'Consequatur facilis adipisci quia unde et corporis maxime. Porro nihil veritatis delectus voluptatum et est cupiditate aut. Consequuntur velit ea placeat tenetur culpa voluptates. Ad voluptas ullam aut consequatur in ducimus id. Pariatur molestiae nostrum earum earum hic. Saepe libero quidem inventore. Voluptas dolorem eum dignissimos incidunt et fuga. In voluptatibus voluptates eveniet. Unde dolores modi iure voluptatem voluptatem iure dolore minus. Error aspernatur aspernatur animi possimus est. Fugit alias provident aut sit quam.', 1387, 10, 10, '2019-11-05 17:43:44', '2019-11-05 17:43:45'),
	(2, 1, 'Walsh Ford', 'Reprehenderit repudiandae commodi quaerat similique quos dolorem. Nihil officia minus quia voluptatibus. Architecto eum quam est in dolore totam eveniet. Sit ut perferendis id quod. Id veritatis in dolorem quia itaque. Placeat fugiat consequatur ea necessitatibus. Omnis facere ducimus ex et laudantium earum. Nihil eum excepturi quibusdam et fuga. Sint sit provident ut aut ullam.', 1621, 10, 10, '2019-11-05 17:43:46', '2019-11-05 17:43:47'),
	(3, 1, 'Dashawn Rapid', 'Iure exercitationem quae est voluptates ratione culpa earum. Ullam ex qui iste deserunt corrupti neque. Possimus veritatis ducimus sit sit labore provident. Et dolores provident fugiat saepe cumque. Quod odio eveniet aut ex adipisci est eaque quod. Perspiciatis impedit nostrum officiis corporis. Cupiditate architecto atque ab. Necessitatibus ea sit accusamus quas est consequuntur. Exercitationem voluptas labore laboriosam qui voluptas. Placeat odio odio quasi sit. Tempore incidunt rerum corrupti est. Corporis dolores eius aut. Eveniet magni adipisci eum aut officiis temporibus aut. Sint tenetur voluptatem deleniti sit.', 1884, 10, 10, '2019-11-05 17:43:48', '2019-11-05 17:43:49'),
	(4, 1, 'Salma Spurs', 'Molestias non qui voluptatem. Distinctio maxime ab tenetur quo. Ullam maxime id deserunt molestiae consequuntur. Laudantium maxime architecto optio possimus. Doloribus repudiandae numquam omnis omnis quaerat eligendi ipsum. Saepe necessitatibus suscipit quia nam consequatur dolorem. Maxime et et velit rem ea et. Nam error quia corporis et voluptate. Quibusdam pariatur earum nulla sint recusandae unde.', 1409, 10, 10, '2019-11-05 17:43:50', '2019-11-05 17:43:51'),
	(5, 1, 'Buck Vista', 'Cumque voluptates beatae ut assumenda tenetur rem saepe. Corporis atque eius mollitia enim repudiandae cumque enim perferendis. Aperiam rerum vitae incidunt ea nostrum possimus quasi. Quibusdam assumenda et odio nihil nisi et nihil. Omnis rerum quos natus sed temporibus consectetur error. Ex omnis distinctio a repudiandae omnis. Ut quia suscipit similique sed. Cum quo id eos molestiae explicabo ipsam impedit. Voluptatum nemo dolores qui esse aspernatur. Laborum reiciendis quasi distinctio. Ut maxime omnis vel consequatur aut et. Magni iure dolores est ratione earum mollitia.', 1960, 10, 10, '2019-11-05 17:43:52', '2019-11-05 17:43:52'),
	(6, 1, 'Brendon View', 'Molestias reiciendis eum et. Eum labore minima veniam veniam sed. Fugit odit consequatur aliquam molestiae et et. Exercitationem soluta sit et perspiciatis. Excepturi atque velit voluptates accusamus sequi iste. Cupiditate ut consequatur et cumque laboriosam. Dignissimos ut dignissimos reiciendis fugit omnis laborum. In a ea officiis architecto et sequi porro. Harum quis totam doloribus quia assumenda optio. Error officiis quia veniam enim beatae voluptate vel. Eveniet autem officia ratione mollitia cupiditate vel ratione. Quam id mollitia quas sit veritatis qui sequi.', 1908, 10, 10, '2019-11-05 17:43:53', '2019-11-05 17:43:54'),
	(7, 1, 'Oberbrunner Springs', 'Autem ut rerum est eos accusantium. Asperiores ratione asperiores excepturi et odio cum. Delectus fugiat adipisci velit sit et porro. Quae est quo omnis qui vel. Quidem quia ut vitae ducimus nihil. Iusto et facere sit repellendus voluptatem. Voluptatum aut neque recusandae numquam omnis. Et iure deserunt at vel odit in sed veritatis. Impedit quia veritatis accusantium nam. Id iste qui cumque earum et ipsa accusamus sint. Quia enim quia eos quaerat aut ut doloremque. Voluptas adipisci perspiciatis alias doloremque.', 1550, 10, 10, '2019-11-05 17:43:55', '2019-11-05 17:43:56'),
	(8, 1, 'Walter Walks', 'A expedita officia omnis id ipsa. Eum commodi sunt dolor nihil rerum quasi ut. Quos neque est nihil maiores in molestiae. Voluptas eos aut fuga impedit laudantium. Alias sit et assumenda id commodi laudantium. Ex sed nemo maxime vel. Reprehenderit veritatis corrupti quam et et quasi. Ipsum laboriosam adipisci tenetur non a. Reiciendis facilis pariatur facere sapiente sed. Hic quaerat ipsum sit. Eveniet placeat architecto quod nostrum fugit ut veritatis nihil.', 1186, 10, 10, NULL, NULL),
	(9, 1, 'Robbie Lakes', 'Et accusamus minima ea culpa libero repellat facilis. Reprehenderit rerum quas ducimus natus qui ut. Velit assumenda voluptas laboriosam deleniti libero quasi quisquam. Et est eum ut deserunt unde. Asperiores facere necessitatibus non expedita dolor ad. Id deserunt iusto vitae debitis. Quia voluptates minima quisquam modi quasi. Amet sit saepe aut esse. Necessitatibus consequuntur itaque animi ducimus assumenda est. Deserunt in ea iusto dicta eos incidunt. Enim est similique facere corrupti vitae. Voluptatibus harum molestias quia omnis sed tempore. Excepturi eos laudantium facere maxime. Eos eveniet in aut ad enim molestias.', 1853, 10, 10, NULL, NULL),
	(10, 1, 'Kirstin Cove', 'Ipsum sunt maxime quaerat similique dolores unde dolorem. Unde culpa minus alias animi. Ut rerum non consequatur dolore. Itaque cum tenetur repudiandae assumenda nulla sunt. Perferendis eius quaerat et repudiandae eum. Molestiae sapiente quia maiores id saepe illo ratione. Itaque consequatur illum aut occaecati. Iste aut tenetur explicabo quidem assumenda molestiae expedita. Est molestias non iusto omnis qui. Eius dolores expedita quia. Quos eligendi quisquam velit delectus excepturi est possimus aut. Pariatur aut alias fugiat culpa sit. Sit tempora quam sed voluptates autem.', 1649, 10, 10, NULL, NULL),
	(11, 1, 'Emelie Vista', 'Consequatur numquam officia et harum cum aut officia. Ea illo unde dolores. Aut doloremque nobis praesentium eius deleniti nisi aut consectetur. Numquam porro corporis et quis recusandae nisi. Dolore est quisquam quo consequatur. Occaecati rerum et amet. Minima nihil iure molestiae eos. Sed et placeat corrupti ut cumque voluptatem magnam. Nihil ut similique cupiditate voluptatibus quisquam sunt laudantium. Ab velit eos et et. Earum qui omnis non.', 1152, 10, 10, NULL, NULL),
	(12, 2, 'Altenwerth Garden', 'Qui mollitia quae tenetur placeat accusantium. Illum aut deleniti sed ullam libero qui. Dolores laboriosam laboriosam mollitia eveniet nemo doloribus. Quidem est dignissimos fugiat iusto soluta veniam. Rerum quam rerum vero eius est voluptatum. Ut ut ducimus est porro officia nemo. Illum vitae quam atque aperiam. Est sequi ea delectus. Rerum natus necessitatibus dolore necessitatibus.', 13423, 5, 5, NULL, NULL),
	(13, 2, 'Mireille Junctions', 'Et exercitationem quisquam doloribus dolorum eum cum provident voluptate. Asperiores non molestiae dolorem facere et impedit. Autem dolor ratione maiores molestiae id ipsum. Sequi omnis quidem et minima architecto. Sit commodi rem earum quisquam adipisci consequatur. Alias ullam consequuntur neque. Dolor non quas pariatur velit illum. Harum est dolor consequuntur fugiat commodi.', 18634, 5, 5, NULL, NULL),
	(14, 2, 'Langosh Circle', 'Ipsa qui soluta non vitae aperiam molestiae adipisci eum. Exercitationem est at eos esse. Inventore debitis consequatur eligendi ut. Ipsam tempore assumenda ut et molestiae. Ipsum consequatur voluptas eos quod voluptatem. Est explicabo harum dicta iusto libero. Voluptas consectetur ut cum asperiores et.', 15339, 5, 5, NULL, NULL),
	(15, 2, 'Rossie Turnpike', 'Enim qui omnis odio aut non aut officia accusantium. Maiores consequatur aut aut maxime tempore quae illum. Ut perferendis aspernatur assumenda dolorem rerum eaque. Sint qui in sed inventore dolorem ducimus repellendus. Et et qui voluptas placeat magnam. Repellendus sed nesciunt enim. In quia similique sunt dolorum quia qui cum. Ipsum eos odio dicta velit adipisci quae. Ea sed ea vel laboriosam. Magnam neque similique et reprehenderit pariatur optio. Totam magnam veniam perferendis est velit repellendus. Voluptatum quas totam laudantium praesentium provident. Provident enim ex alias distinctio sapiente dolor.', 12639, 5, 5, NULL, NULL),
	(16, 2, 'Fay Hollow', 'Doloremque consequatur molestiae hic earum. Ullam animi quis at rerum nostrum. Similique consectetur cumque maiores voluptatem placeat. Fuga magni consequatur nulla esse quae facere itaque. Omnis rerum officia vero rerum ratione quaerat. Sunt veritatis aperiam provident iure amet aut amet. Ea molestiae doloremque dolore a possimus accusamus. Officiis ut beatae quidem sed. Ut et sed ex numquam ipsum doloremque expedita veritatis. Debitis voluptates error totam ratione veritatis voluptate dolorem. Dolorum sunt sunt dolorem dignissimos. Incidunt repellat dolore quo et facilis occaecati ratione exercitationem.', 12027, 5, 5, NULL, NULL),
	(17, 2, 'Everette Summit', 'Architecto unde omnis qui rerum facere nisi sit suscipit. Laboriosam id pariatur molestias. Quaerat voluptates vel eveniet. Corrupti harum ut et dolorem ut. Unde facere temporibus labore illum. Rerum ut nihil sunt quisquam sit ut quia dolorem. Aut voluptas delectus voluptatem facilis aut aut ad. Neque inventore sit itaque veniam quam in labore. Et voluptate quo veritatis id eos placeat vel minus. Qui placeat iure praesentium dolorem ducimus. Et architecto mollitia sit et maxime ipsam voluptas.', 15727, 5, 5, NULL, NULL);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Dumping structure for table hotel.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.services: ~0 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table hotel.types
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.types: ~2 rows (approximately)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Rest', '2019-11-05 17:43:31', '2019-11-05 17:43:32'),
	(2, 'Event', '2019-11-05 17:43:33', '2019-11-05 17:43:33');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Dumping structure for table hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table hotel.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'nguyen vu', 'quenmatkhaupart3@gmail.com', '$2y$10$FU0EV4n/G8c/AQZjmFqKV.YuMr9VOymKzyxDHFwCHql9xFgsXX/za', '0986074671', '222 Lê Duẩn', 'admin', 'kGVhbGesobVBemUyCoO8tNLBALDdl3r7WAOxAh4gFbXLymsbrzdxeoQaYurJ', '2019-11-05 09:14:26', '2019-12-03 07:42:17'),
	(2, 'Thái', 'thai1602@gmail.com', '$2y$10$e4AL9NSjTQ4dV.OtY.pkOOn3opSfSFWI2IBju1X7wNg0BhQmmQGxO', '03737549823', 'Bạch Mai', 'customer', NULL, '2019-11-05 10:22:05', '2019-11-05 10:22:05'),
	(3, 'Nguyendz', 'nguyen3112@gmail.com', '$2y$10$s8U3yBgM63KP5nobLKe0N.G0ncAyPNMu8/oPdrxLx/UEsa9dAR8hW', '0986074671', '1 đại cồ việt', 'customer', 'yJqoACQ1jZIyIcRYZBkBRc73AfyhmQFg4pS4NG5AJrokpyeJvIsdHgfgWHC7', '2019-12-03 07:42:58', '2019-12-21 08:37:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;