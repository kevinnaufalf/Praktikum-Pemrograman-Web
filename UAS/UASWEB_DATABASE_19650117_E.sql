-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for web
CREATE DATABASE IF NOT EXISTS `web` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `web`;

-- Dumping structure for table web.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table web.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`username`, `password`) VALUES
	('admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table web.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_barang` varchar(50) DEFAULT NULL,
  `stok` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- Dumping data for table web.barang: ~5 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `nm_barang`, `stok`) VALUES
	(2, 'Jagung', 41);
INSERT INTO `barang` (`id`, `nm_barang`, `stok`) VALUES
	(6, 'Beras', 22);
INSERT INTO `barang` (`id`, `nm_barang`, `stok`) VALUES
	(7, 'Gula', 32.5);
INSERT INTO `barang` (`id`, `nm_barang`, `stok`) VALUES
	(8, 'Cabe', 45);
INSERT INTO `barang` (`id`, `nm_barang`, `stok`) VALUES
	(45, 'Wortel', 39);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table web.pelanggan
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table web.pelanggan: ~0 rows (approximately)
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` (`username`, `password`, `email`, `nama_lengkap`, `alamat`) VALUES
	('josse', '6f7f3b0fb100c0b0fb21a0287cd72f7b', 'jossea.w.55@gmail.com', 'Josse Andriyanto W.', 'Banyuwangi');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;

-- Dumping structure for table web.pembelian
CREATE TABLE IF NOT EXISTS `pembelian` (
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `stok` double DEFAULT NULL,
  `nm_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table web.pembelian: ~1 rows (approximately)
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
INSERT INTO `pembelian` (`nama_lengkap`, `email`, `alamat`, `id_barang`, `stok`, `nm_barang`) VALUES
	('Josse Andriyanto W.', 'jossea.w.55@gmail.com', 'Banyuwangi', 6, 5.5, 'Beras');
INSERT INTO `pembelian` (`nama_lengkap`, `email`, `alamat`, `id_barang`, `stok`, `nm_barang`) VALUES
	('Pak Agung', 'agung.twa@gmail.com', 'Malang', 45, 1.5, 'Wortel');
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;

-- Dumping structure for trigger web.barang_dibeli
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `barang_dibeli` AFTER INSERT ON `pembelian` FOR EACH ROW BEGIN
	UPDATE barang SET stok=stok-NEW.stok
	WHERE id = NEW.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
