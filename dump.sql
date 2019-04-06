-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных kmjblog
CREATE DATABASE IF NOT EXISTS `kmjblog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `kmjblog`;

-- Дамп структуры для таблица kmjblog.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_article_user` (`user_id`),
  KEY `FK_article_theme` (`theme_id`),
  CONSTRAINT `FK_article_theme` FOREIGN KEY (`theme_id`) REFERENCES `theme` (`id`),
  CONSTRAINT `FK_article_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kmjblog.article: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `user_id`, `theme_id`, `title`, `content`, `created`) VALUES
	(13, 1, 1, '12345', '123456', '2019-03-09 17:00:29');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.auth_assignment
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `FK_auth_assignment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы kmjblog.auth_assignment: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
	('admin', 1, NULL),
	('admin', 6, NULL),
	('admin', 8, NULL),
	('admin', 9, NULL),
	('author', 2, NULL);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.auth_item
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы kmjblog.auth_item: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
	('admin', 1, 'Админ', NULL, NULL, 1552048254, 1552048254),
	('author', 1, 'Автор', NULL, NULL, 1552048255, 1552048255),
	('createArticle', 2, 'Добавление статьи', NULL, NULL, 1552048255, 1552048255),
	('deleteArticle', 2, 'Удаление статьи', NULL, NULL, 1552048255, 1552048255),
	('inactive', 1, 'Неактивный пользователь', NULL, NULL, 1552048255, 1552048255),
	('updateArticle', 2, 'Изменение статьи', NULL, NULL, 1552048255, 1552048255),
	('user', 1, 'Пользователь', NULL, NULL, 1552048255, 1552048255);
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.auth_item_child
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы kmjblog.auth_item_child: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
	('admin', 'author'),
	('author', 'createArticle'),
	('admin', 'deleteArticle'),
	('user', 'inactive'),
	('author', 'updateArticle'),
	('author', 'user');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.auth_rule
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы kmjblog.auth_rule: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_comment_article` (`article_id`),
  KEY `FK_comment_comment` (`parent_id`),
  KEY `FK_comment_user` (`user_id`),
  CONSTRAINT `FK_comment_article` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`),
  CONSTRAINT `FK_comment_comment` FOREIGN KEY (`parent_id`) REFERENCES `comment` (`id`),
  CONSTRAINT `FK_comment_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kmjblog.comment: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` (`id`, `article_id`, `parent_id`, `user_id`, `content`, `created`) VALUES
	(3, 13, NULL, 1, 'hrifewkdmq', '2019-04-01 13:08:05');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.migration
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kmjblog.migration: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1552048241),
	('m140506_102106_rbac_init', 1552048245),
	('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1552048245),
	('m180523_151638_rbac_updates_indexes_without_prefix', 1552048245);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.theme
CREATE TABLE IF NOT EXISTS `theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kmjblog.theme: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `theme` DISABLE KEYS */;
INSERT INTO `theme` (`id`, `name`) VALUES
	(1, 'Informatic');
/*!40000 ALTER TABLE `theme` ENABLE KEYS */;

-- Дамп структуры для таблица kmjblog.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы kmjblog.user: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `login`, `password`, `email`, `created`, `active`) VALUES
	(1, 'admin', 'admin', 'admin@com.ru', '2019-03-03 15:27:07', '1'),
	(2, 'author', 'author', 'fuu@ya.ru', '2019-03-06 02:30:10', '1'),
	(6, 't', '', 't@mail.ru', '2019-03-16 15:33:58', '0'),
	(8, 'testrtt555', '', 'TEST@YA.RU', '2019-03-16 16:01:52', '0'),
	(9, 'esdawsqd', 'UlPmr', 'TEST@YA.RU', '2019-03-17 14:27:37', '1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
