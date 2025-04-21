/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - parkir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`parkir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `parkir`;

/*Table structure for table `jeniskendaraan` */

DROP TABLE IF EXISTS `jeniskendaraan`;

CREATE TABLE `jeniskendaraan` (
  `id_jenisKendaraan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kendaraan` varchar(20) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_jenisKendaraan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jeniskendaraan` */

insert  into `jeniskendaraan`(`id_jenisKendaraan`,`jenis_kendaraan`,`harga`) values 
(1,'Motor','2000'),
(2,'Mobil','5000');

/*Table structure for table `kendaraan` */

DROP TABLE IF EXISTS `kendaraan`;

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_polisi` varchar(10) DEFAULT NULL,
  `nama_kendaraan` varchar(50) DEFAULT NULL,
  `merk_kendaraan` varchar(20) DEFAULT NULL,
  `id_jenisKendaraan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jenisKendaraan` (`id_jenisKendaraan`),
  CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_jenisKendaraan`) REFERENCES `jeniskendaraan` (`id_jenisKendaraan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kendaraan` */

insert  into `kendaraan`(`id`,`nomor_polisi`,`nama_kendaraan`,`merk_kendaraan`,`id_jenisKendaraan`) values 
(3,'DN9999','Soopy','Honda',1),
(5,'DD8888','Supra','Toyota',2),
(6,'DD987','Brio','Honda',1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values 
(1,'admin','$2y$10$.bWHxLWVU6dEh0aGBuM69OOmCiiJwk8FR7KeZWGR7W.9mxJre51jW');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
