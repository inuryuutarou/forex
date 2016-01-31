/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.26 : Database - forex
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `broker` */

DROP TABLE IF EXISTS `broker`;

CREATE TABLE `broker` (
  `id_broker` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `link_ib` varchar(300) NOT NULL,
  `link_client` varchar(300) DEFAULT NULL,
  `jual` int(11) NOT NULL DEFAULT '0',
  `beli` int(11) NOT NULL DEFAULT '0',
  `stock` double NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_broker`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `broker` */

insert  into `broker`(`id_broker`,`name`,`link_ib`,`link_client`,`jual`,`beli`,`stock`,`deleted`) values (1,'XM ','http://clicks.pipaffiliates.com/afs/come.php?cid=65890&ctgid=16&atype=1&brandid=3','http://clicks.pipaffiliates.com/afs/come.php?cid=65934&ctgid=0&atype=2&brandid=1',13000,13700,20000,0),(2,'orbex','http://www.orbex.com/en/?ref_id=102013',NULL,12500,13000,20000.3,0);

/*Table structure for table `changer` */

DROP TABLE IF EXISTS `changer`;

CREATE TABLE `changer` (
  `id_changer` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL COMMENT '0->beli 1->jual',
  `id_broker` int(11) NOT NULL,
  `jenis_transaksi` tinyint(4) NOT NULL DEFAULT '0',
  `nilai` int(11) NOT NULL,
  `nilai_tukar` int(11) NOT NULL,
  `no_akun_trading` varchar(150) DEFAULT NULL,
  `nama_akun_trading` varchar(300) DEFAULT NULL,
  `nama_bank` varchar(300) DEFAULT NULL,
  `no_rek` varchar(150) DEFAULT NULL,
  `nama_rek` varchar(300) DEFAULT NULL,
  `notes` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `approve_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_changer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `changer` */

/*Table structure for table `config` */

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `config_name` varchar(300) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY (`config_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `config` */

insert  into `config`(`config_name`,`value`) values ('auto_refferal','random');

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `action_text` text NOT NULL,
  `query` text NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `id_refferer` int(11) DEFAULT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `pin` varchar(500) DEFAULT NULL,
  `flag` int(11) DEFAULT '2',
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` text,
  `postal` varchar(50) DEFAULT NULL,
  `id_card_number` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `bank_branch` varchar(300) DEFAULT NULL,
  `bank_acc_name` varchar(300) DEFAULT NULL,
  `bank_acc_num` varchar(100) DEFAULT NULL,
  `im` varchar(100) DEFAULT NULL,
  `fb_username` varchar(100) DEFAULT NULL,
  `fb_link` varchar(200) DEFAULT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=profile, 1=broker, 2=admin valid, 3=valid',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `last_update` timestamp NULL DEFAULT NULL,
  `valid_date` timestamp NULL DEFAULT NULL,
  `level_status` tinyint(1) DEFAULT '0' COMMENT '0->member | 1->super admin',
  PRIMARY KEY (`id_member`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `id_refferer` (`id_refferer`),
  CONSTRAINT `member_ibfk_1` FOREIGN KEY (`id_refferer`) REFERENCES `member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `member` */

/*Table structure for table `member_broker` */

DROP TABLE IF EXISTS `member_broker`;

CREATE TABLE `member_broker` (
  `id_member` int(11) NOT NULL,
  `id_broker` int(11) NOT NULL,
  `link_ib` varchar(300) NOT NULL,
  `link_client` varchar(300) DEFAULT NULL,
  `broker_username` varchar(300) NOT NULL,
  `real_account` varchar(300) NOT NULL,
  PRIMARY KEY (`id_member`,`id_broker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `member_broker` */

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_member_from` int(11) NOT NULL,
  `message` text NOT NULL,
  `id_member_to` int(11) NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_from` tinyint(1) NOT NULL DEFAULT '0',
  `delete_to` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_message`),
  KEY `id_member_from` (`id_member_from`),
  KEY `id_member_to` (`id_member_to`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_member_from`) REFERENCES `member` (`id_member`),
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`id_member_to`) REFERENCES `member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `message` */

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `text` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_news`),
  KEY `id_member` (`id_member`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `news` */

/*Table structure for table `wall_comment` */

DROP TABLE IF EXISTS `wall_comment`;

CREATE TABLE `wall_comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_wall_post` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wall_comment` */

/*Table structure for table `wall_post` */

DROP TABLE IF EXISTS `wall_post`;

CREATE TABLE `wall_post` (
  `id_wall_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_wall_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wall_post` */

/*Table structure for table `vw_changer` */

DROP TABLE IF EXISTS `vw_changer`;

/*!50001 DROP VIEW IF EXISTS `vw_changer` */;
/*!50001 DROP TABLE IF EXISTS `vw_changer` */;

/*!50001 CREATE TABLE  `vw_changer`(
 `id_changer` int(11) ,
 `id_member` int(11) ,
 `username` varchar(500) ,
 `first_name` varchar(500) ,
 `last_name` varchar(500) ,
 `id_broker` int(11) ,
 `name` varchar(200) ,
 `stock` double ,
 `jenis_transaksi` tinyint(4) ,
 `nilai` int(11) ,
 `nilai_tukar` int(11) ,
 `no_akun_trading` varchar(150) ,
 `nama_akun_trading` varchar(300) ,
 `nama_bank` varchar(300) ,
 `no_rek` varchar(150) ,
 `nama_rek` varchar(300) ,
 `notes` text ,
 `timestamp` timestamp ,
 `approved` tinyint(4) ,
 `approve_time` timestamp 
)*/;

/*Table structure for table `vw_member` */

DROP TABLE IF EXISTS `vw_member`;

/*!50001 DROP VIEW IF EXISTS `vw_member` */;
/*!50001 DROP TABLE IF EXISTS `vw_member` */;

/*!50001 CREATE TABLE  `vw_member`(
 `id_refferer` int(11) ,
 `refferer_username` varchar(500) ,
 `refferer_first_name` varchar(500) ,
 `refferer_last_name` varchar(500) ,
 `id_member` int(11) ,
 `username` varchar(500) ,
 `email` varchar(500) ,
 `password` varchar(500) ,
 `pin` varchar(500) ,
 `flag` int(11) ,
 `first_name` varchar(500) ,
 `last_name` varchar(500) ,
 `country` varchar(100) ,
 `province` varchar(100) ,
 `city` varchar(100) ,
 `address` text ,
 `postal` varchar(50) ,
 `id_card_number` varchar(100) ,
 `phone` varchar(100) ,
 `bank_name` varchar(300) ,
 `bank_branch` varchar(300) ,
 `bank_acc_name` varchar(300) ,
 `bank_acc_num` varchar(100) ,
 `im` varchar(100) ,
 `fb_username` varchar(100) ,
 `fb_link` varchar(200) ,
 `valid` tinyint(1) ,
 `register_date` timestamp ,
 `deleted` tinyint(1) ,
 `last_update` timestamp ,
 `valid_date` timestamp ,
 `level_status` tinyint(1) 
)*/;

/*Table structure for table `vw_member_broker` */

DROP TABLE IF EXISTS `vw_member_broker`;

/*!50001 DROP VIEW IF EXISTS `vw_member_broker` */;
/*!50001 DROP TABLE IF EXISTS `vw_member_broker` */;

/*!50001 CREATE TABLE  `vw_member_broker`(
 `name` varchar(200) ,
 `link_ib_main` varchar(300) ,
 `link_client_main` varchar(300) ,
 `id_member` int(11) ,
 `id_broker` int(11) ,
 `link_ib` varchar(300) ,
 `link_client` varchar(300) ,
 `broker_username` varchar(300) ,
 `real_account` varchar(300) ,
 `deleted_broker` tinyint(1) ,
 `id_refferer` int(11) ,
 `username` varchar(500) ,
 `email` varchar(500) ,
 `password` varchar(500) ,
 `pin` varchar(500) ,
 `flag` int(11) ,
 `first_name` varchar(500) ,
 `last_name` varchar(500) ,
 `country` varchar(100) ,
 `province` varchar(100) ,
 `city` varchar(100) ,
 `address` text ,
 `postal` varchar(50) ,
 `id_card_number` varchar(100) ,
 `phone` varchar(100) ,
 `bank_name` varchar(300) ,
 `bank_branch` varchar(300) ,
 `bank_acc_name` varchar(300) ,
 `bank_acc_num` varchar(100) ,
 `im` varchar(100) ,
 `fb_username` varchar(100) ,
 `fb_link` varchar(200) ,
 `valid` tinyint(1) ,
 `register_date` timestamp ,
 `deleted` tinyint(1) ,
 `last_update` timestamp ,
 `valid_date` timestamp ,
 `level_status` tinyint(1) 
)*/;

/*Table structure for table `vw_wall_comment` */

DROP TABLE IF EXISTS `vw_wall_comment`;

/*!50001 DROP VIEW IF EXISTS `vw_wall_comment` */;
/*!50001 DROP TABLE IF EXISTS `vw_wall_comment` */;

/*!50001 CREATE TABLE  `vw_wall_comment`(
 `id_comment` int(11) ,
 `id_wall_post` int(11) ,
 `id_member` int(11) ,
 `username` varchar(500) ,
 `first_name` varchar(500) ,
 `last_name` varchar(500) ,
 `timestamp` timestamp ,
 `content` text ,
 `deleted` tinyint(4) 
)*/;

/*Table structure for table `vw_wall_post` */

DROP TABLE IF EXISTS `vw_wall_post`;

/*!50001 DROP VIEW IF EXISTS `vw_wall_post` */;
/*!50001 DROP TABLE IF EXISTS `vw_wall_post` */;

/*!50001 CREATE TABLE  `vw_wall_post`(
 `id_wall_post` int(11) ,
 `id_member` int(11) ,
 `username` varchar(500) ,
 `first_name` varchar(500) ,
 `last_name` varchar(500) ,
 `timestamp` timestamp ,
 `content` text ,
 `deleted` tinyint(4) 
)*/;

/*View structure for view vw_changer */

/*!50001 DROP TABLE IF EXISTS `vw_changer` */;
/*!50001 DROP VIEW IF EXISTS `vw_changer` */;

/*!50001 CREATE VIEW `vw_changer` AS (select `c`.`id_changer` AS `id_changer`,`c`.`id_member` AS `id_member`,`m`.`username` AS `username`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`c`.`id_broker` AS `id_broker`,`b`.`name` AS `name`,`b`.`stock` AS `stock`,`c`.`jenis_transaksi` AS `jenis_transaksi`,`c`.`nilai` AS `nilai`,`c`.`nilai_tukar` AS `nilai_tukar`,`c`.`no_akun_trading` AS `no_akun_trading`,`c`.`nama_akun_trading` AS `nama_akun_trading`,`c`.`nama_bank` AS `nama_bank`,`c`.`no_rek` AS `no_rek`,`c`.`nama_rek` AS `nama_rek`,`c`.`notes` AS `notes`,`c`.`timestamp` AS `timestamp`,`c`.`approved` AS `approved`,`c`.`approve_time` AS `approve_time` from ((`changer` `c` left join `member` `m` on((`c`.`id_member` = `m`.`id_member`))) left join `broker` `b` on((`c`.`id_broker` = `b`.`id_broker`)))) */;

/*View structure for view vw_member */

/*!50001 DROP TABLE IF EXISTS `vw_member` */;
/*!50001 DROP VIEW IF EXISTS `vw_member` */;

/*!50001 CREATE VIEW `vw_member` AS (select `m`.`id_refferer` AS `id_refferer`,`m2`.`username` AS `refferer_username`,`m2`.`first_name` AS `refferer_first_name`,`m2`.`last_name` AS `refferer_last_name`,`m`.`id_member` AS `id_member`,`m`.`username` AS `username`,`m`.`email` AS `email`,`m`.`password` AS `password`,`m`.`pin` AS `pin`,`m`.`flag` AS `flag`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`m`.`country` AS `country`,`m`.`province` AS `province`,`m`.`city` AS `city`,`m`.`address` AS `address`,`m`.`postal` AS `postal`,`m`.`id_card_number` AS `id_card_number`,`m`.`phone` AS `phone`,`m`.`bank_name` AS `bank_name`,`m`.`bank_branch` AS `bank_branch`,`m`.`bank_acc_name` AS `bank_acc_name`,`m`.`bank_acc_num` AS `bank_acc_num`,`m`.`im` AS `im`,`m`.`fb_username` AS `fb_username`,`m`.`fb_link` AS `fb_link`,`m`.`valid` AS `valid`,`m`.`register_date` AS `register_date`,`m`.`deleted` AS `deleted`,`m`.`last_update` AS `last_update`,`m`.`valid_date` AS `valid_date`,`m`.`level_status` AS `level_status` from (`member` `m` left join `member` `m2` on((`m`.`id_refferer` = `m2`.`id_member`)))) */;

/*View structure for view vw_member_broker */

/*!50001 DROP TABLE IF EXISTS `vw_member_broker` */;
/*!50001 DROP VIEW IF EXISTS `vw_member_broker` */;

/*!50001 CREATE VIEW `vw_member_broker` AS (select `b`.`name` AS `name`,`b`.`link_ib` AS `link_ib_main`,`b`.`link_client` AS `link_client_main`,`mb`.`id_member` AS `id_member`,`mb`.`id_broker` AS `id_broker`,`mb`.`link_ib` AS `link_ib`,`mb`.`link_client` AS `link_client`,`mb`.`broker_username` AS `broker_username`,`mb`.`real_account` AS `real_account`,`b`.`deleted` AS `deleted_broker`,`m`.`id_refferer` AS `id_refferer`,`m`.`username` AS `username`,`m`.`email` AS `email`,`m`.`password` AS `password`,`m`.`pin` AS `pin`,`m`.`flag` AS `flag`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`m`.`country` AS `country`,`m`.`province` AS `province`,`m`.`city` AS `city`,`m`.`address` AS `address`,`m`.`postal` AS `postal`,`m`.`id_card_number` AS `id_card_number`,`m`.`phone` AS `phone`,`m`.`bank_name` AS `bank_name`,`m`.`bank_branch` AS `bank_branch`,`m`.`bank_acc_name` AS `bank_acc_name`,`m`.`bank_acc_num` AS `bank_acc_num`,`m`.`im` AS `im`,`m`.`fb_username` AS `fb_username`,`m`.`fb_link` AS `fb_link`,`m`.`valid` AS `valid`,`m`.`register_date` AS `register_date`,`m`.`deleted` AS `deleted`,`m`.`last_update` AS `last_update`,`m`.`valid_date` AS `valid_date`,`m`.`level_status` AS `level_status` from ((`broker` `b` left join `member_broker` `mb` on(((`b`.`id_broker` = `mb`.`id_broker`) and (`b`.`deleted` = 0)))) left join `member` `m` on((`mb`.`id_member` = `m`.`id_member`)))) */;

/*View structure for view vw_wall_comment */

/*!50001 DROP TABLE IF EXISTS `vw_wall_comment` */;
/*!50001 DROP VIEW IF EXISTS `vw_wall_comment` */;

/*!50001 CREATE VIEW `vw_wall_comment` AS (select `wc`.`id_comment` AS `id_comment`,`wc`.`id_wall_post` AS `id_wall_post`,`wc`.`id_member` AS `id_member`,`m`.`username` AS `username`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`wc`.`timestamp` AS `timestamp`,`wc`.`content` AS `content`,`wc`.`deleted` AS `deleted` from (`wall_comment` `wc` left join `member` `m` on((`wc`.`id_member` = `m`.`id_member`)))) */;

/*View structure for view vw_wall_post */

/*!50001 DROP TABLE IF EXISTS `vw_wall_post` */;
/*!50001 DROP VIEW IF EXISTS `vw_wall_post` */;

/*!50001 CREATE VIEW `vw_wall_post` AS (select `wp`.`id_wall_post` AS `id_wall_post`,`wp`.`id_member` AS `id_member`,`m`.`username` AS `username`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`wp`.`timestamp` AS `timestamp`,`wp`.`content` AS `content`,`wp`.`deleted` AS `deleted` from (`wall_post` `wp` left join `member` `m` on((`wp`.`id_member` = `m`.`id_member`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
