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

-- Dumping structure for table yes_dev.tbl_products
DROP TABLE IF EXISTS `tbl_products`;
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
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
