-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32-0ubuntu0.12.04.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for yes_dev
CREATE DATABASE IF NOT EXISTS `yes_dev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `yes_dev`;


-- Dumping structure for table yes_dev.AuthAssignment
CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthAssignment_ibfk_2` FOREIGN KEY (`itemname`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yes_dev.AuthAssignment: ~2 rows (approximately)
/*!40000 ALTER TABLE `AuthAssignment` DISABLE KEYS */;
INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
	('admin', 1, NULL, 'N;'),
	('superuser', 14, NULL, NULL);
/*!40000 ALTER TABLE `AuthAssignment` ENABLE KEYS */;


-- Dumping structure for table yes_dev.AuthItem
CREATE TABLE IF NOT EXISTS `AuthItem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yes_dev.AuthItem: ~11 rows (approximately)
/*!40000 ALTER TABLE `AuthItem` DISABLE KEYS */;
INSERT INTO `AuthItem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
	('admin', 2, '', NULL, 'N;'),
	('adminManagement', 1, 'access to the application administration functionality', NULL, 'N;'),
	('createProduct', 0, 'create a new product', NULL, 'N;'),
	('createUser', 0, 'create a new user', NULL, 'N;'),
	('deleteProduct', 0, 'delete a product', NULL, 'N;'),
	('deleteUser', 0, 'remove a user from a project', NULL, 'N;'),
	('readProduct', 0, 'read product information', NULL, 'N;'),
	('readUser', 0, 'read user profile information', NULL, 'N;'),
	('superuser', 2, '', NULL, 'N;'),
	('updateProduct', 0, 'update product information', NULL, 'N;'),
	('updateUser', 0, 'update a users information', NULL, 'N;');
/*!40000 ALTER TABLE `AuthItem` ENABLE KEYS */;


-- Dumping structure for table yes_dev.AuthItemChild
CREATE TABLE IF NOT EXISTS `AuthItemChild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `AuthItem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yes_dev.AuthItemChild: ~10 rows (approximately)
/*!40000 ALTER TABLE `AuthItemChild` DISABLE KEYS */;
INSERT INTO `AuthItemChild` (`parent`, `child`) VALUES
	('admin', 'adminManagement'),
	('superuser', 'createProduct'),
	('admin', 'createUser'),
	('superuser', 'deleteProduct'),
	('admin', 'deleteUser'),
	('superuser', 'readProduct'),
	('superuser', 'readUser'),
	('admin', 'superuser'),
	('superuser', 'updateProduct'),
	('admin', 'updateUser');
/*!40000 ALTER TABLE `AuthItemChild` ENABLE KEYS */;


-- Dumping structure for table yes_dev.tbl_migration
CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(255) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yes_dev.tbl_migration: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_migration` DISABLE KEYS */;
INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1381218125);
/*!40000 ALTER TABLE `tbl_migration` ENABLE KEYS */;


-- Dumping structure for table yes_dev.tbl_products
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(20) NOT NULL,
  `denomination` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(128) NOT NULL,
  `create_time` date NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `update_time` date NOT NULL,
  `update_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `after_code` (`code`),
  KEY `FK_tbl_products_tbl_user` (`create_user_id`),
  KEY `FK_tbl_products_tbl_user_2` (`update_user_id`),
  CONSTRAINT `FK_tbl_products_tbl_user` FOREIGN KEY (`create_user_id`) REFERENCES `tbl_user` (`id`),
  CONSTRAINT `FK_tbl_products_tbl_user_2` FOREIGN KEY (`update_user_id`) REFERENCES `tbl_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table yes_dev.tbl_products: ~7 rows (approximately)
/*!40000 ALTER TABLE `tbl_products` DISABLE KEYS */;
INSERT INTO `tbl_products` (`id`, `code`, `denomination`, `description`, `image_name`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
	(1, '244135x', 'bye bye', 'arfaf', '', '2013-09-30', 1, '2013-10-03', 1),
	(2, '453463763', 'dzfdsggdg b', 'dsfsgsx', '7284-l1.jpg', '2013-10-01', 1, '2013-10-01', 1),
	(3, '54756', 'egy termek', 'kgkjb,m,m m l., mbmkgkll.kmb', '', '2013-09-29', 1, '2013-09-30', 1),
	(4, 'asdfaf', 'afsaf', 'faf', '', '2013-09-30', 1, '2013-09-30', 1),
	(5, 'asdfsf432', 'product with image', 'product with image', '', '2013-09-30', 1, '2013-09-30', 1),
	(6, 'hgd786979879', 'masik termek', 'jfkjb,n,bmvjvjhn\r\nn,nhk,n,bkbhk', '', '2013-09-29', 1, '2013-09-30', 1),
	(7, 'xyz0078976', 'pitya parittya', 'hdhjvmbvjncxbvcnjmb\r\nbvjmvmn m \r\nhnvjhlkjljl', '', '2013-09-26', 1, '2013-09-30', 1);
/*!40000 ALTER TABLE `tbl_products` ENABLE KEYS */;


-- Dumping structure for table yes_dev.tbl_stock
CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `prod_code` char(20) NOT NULL,
  `quantity` int(11) unsigned NOT NULL,
  `p_price` decimal(10,2) unsigned NOT NULL,
  `s_price` decimal(10,2) unsigned NOT NULL,
  `init_quantity` int(11) unsigned NOT NULL,
  `quantity_in` int(11) unsigned NOT NULL,
  `quantity_out` int(11) unsigned NOT NULL,
  `last_entry_date` date NOT NULL,
  `last_exit_date` date NOT NULL,
  PRIMARY KEY (`prod_code`),
  CONSTRAINT `FK_tbl_stock_tbl_products` FOREIGN KEY (`prod_code`) REFERENCES `tbl_products` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yes_dev.tbl_stock: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_stock` DISABLE KEYS */;
INSERT INTO `tbl_stock` (`prod_code`, `quantity`, `p_price`, `s_price`, `init_quantity`, `quantity_in`, `quantity_out`, `last_entry_date`, `last_exit_date`) VALUES
	('xyz0078976', 5, 1.00, 1.00, 1, 0, 0, '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `tbl_stock` ENABLE KEYS */;


-- Dumping structure for table yes_dev.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `by_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table yes_dev.tbl_user: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`id`, `email`, `username`, `password`, `last_login_time`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
	(1, 'y.botond@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2013-10-03 14:56:59', '0000-00-00 00:00:00', NULL, '2013-09-25 12:30:43', 1),
	(2, 'test2@notanaddress.com', 'Test_User_Two', 'ad0234829205b9033196ba818f7a872b', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '2013-09-25 14:35:17', 1),
	(3, 'test1@notanaddress.com', 'test_one', '5a105e8b9d40e1329780d62ea2265d8a', NULL, '2013-09-25 14:38:17', 1, '2013-09-25 14:38:17', 1),
	(4, 'botond.borbely@skysoft.ro', 'bb', 'd23b92847389c6058f912df312e0199d', NULL, '2013-09-25 15:54:38', NULL, '2013-09-25 15:54:38', NULL),
	(14, 'test3@notanaddress.com', 'xx', '9336ebf25087d91c818ee6e9ec29f8c1', '2013-09-26 14:43:58', '2013-09-26 12:36:59', NULL, '2013-09-26 13:28:51', 1);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
