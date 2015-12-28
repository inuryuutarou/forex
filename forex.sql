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
  `link_ib` varchar(300) NOT NULL,
  `link_client` varchar(300) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_broker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `broker` */

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
  `valid` tinyint(1) NOT NULL DEFAULT '0',
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id_member`,`id_refferer`,`username`,`email`,`password`,`pin`,`flag`,`first_name`,`last_name`,`country`,`province`,`city`,`address`,`postal`,`id_card_number`,`phone`,`bank_name`,`bank_branch`,`bank_acc_name`,`bank_acc_num`,`im`,`fb_username`,`fb_link`,`valid`,`register_date`,`deleted`,`last_update`,`valid_date`,`level_status`) values (4,NULL,'chico','inumaru.ryuusuke@gmail.com','034559aa5996026a68d79128251887ee','',2,'chico','naga','Indonesia','Bali','Denpasar',NULL,'80223',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2015-12-27 20:46:10',0,'2015-12-27 20:46:10',NULL,0),(6,4,'gungdp','gungdp@example.com','123456',NULL,NULL,'Dharma','Putra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2015-12-27 20:49:26',0,'2015-12-27 20:49:26',NULL,0),(7,4,'parwita','parwita@example.com','123456',NULL,NULL,'Parwita','Cole',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2015-12-27 21:10:24',0,'2015-12-27 21:10:24',NULL,0),(8,4,'ransdwi','ransdwi@example.com','123456',NULL,NULL,'Dwi','Ningsih',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2015-12-27 21:17:17',0,'2015-12-27 21:17:17',NULL,0);

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
 `link_ib_main` varchar(300) ,
 `link_client_main` varchar(300) ,
 `id_member` int(11) ,
 `id_broker` int(11) ,
 `link_ib` varchar(300) ,
 `link_client` varchar(300) ,
 `broker_username` varchar(300) ,
 `real_account` varchar(300) ,
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

/*View structure for view vw_member */

/*!50001 DROP TABLE IF EXISTS `vw_member` */;
/*!50001 DROP VIEW IF EXISTS `vw_member` */;

/*!50001 CREATE VIEW `vw_member` AS (select `m`.`id_refferer` AS `id_refferer`,`m2`.`username` AS `refferer_username`,`m2`.`first_name` AS `refferer_first_name`,`m2`.`last_name` AS `refferer_last_name`,`m`.`id_member` AS `id_member`,`m`.`username` AS `username`,`m`.`email` AS `email`,`m`.`password` AS `password`,`m`.`pin` AS `pin`,`m`.`flag` AS `flag`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`m`.`country` AS `country`,`m`.`province` AS `province`,`m`.`city` AS `city`,`m`.`address` AS `address`,`m`.`postal` AS `postal`,`m`.`id_card_number` AS `id_card_number`,`m`.`phone` AS `phone`,`m`.`bank_name` AS `bank_name`,`m`.`bank_branch` AS `bank_branch`,`m`.`bank_acc_name` AS `bank_acc_name`,`m`.`bank_acc_num` AS `bank_acc_num`,`m`.`im` AS `im`,`m`.`fb_username` AS `fb_username`,`m`.`fb_link` AS `fb_link`,`m`.`valid` AS `valid`,`m`.`register_date` AS `register_date`,`m`.`deleted` AS `deleted`,`m`.`last_update` AS `last_update`,`m`.`valid_date` AS `valid_date`,`m`.`level_status` AS `level_status` from (`member` `m` left join `member` `m2` on((`m`.`id_refferer` = `m2`.`id_member`)))) */;

/*View structure for view vw_member_broker */

/*!50001 DROP TABLE IF EXISTS `vw_member_broker` */;
/*!50001 DROP VIEW IF EXISTS `vw_member_broker` */;

/*!50001 CREATE VIEW `vw_member_broker` AS (select `b`.`link_ib` AS `link_ib_main`,`b`.`link_client` AS `link_client_main`,`mb`.`id_member` AS `id_member`,`mb`.`id_broker` AS `id_broker`,`mb`.`link_ib` AS `link_ib`,`mb`.`link_client` AS `link_client`,`mb`.`broker_username` AS `broker_username`,`mb`.`real_account` AS `real_account`,`m`.`id_refferer` AS `id_refferer`,`m`.`username` AS `username`,`m`.`email` AS `email`,`m`.`password` AS `password`,`m`.`pin` AS `pin`,`m`.`flag` AS `flag`,`m`.`first_name` AS `first_name`,`m`.`last_name` AS `last_name`,`m`.`country` AS `country`,`m`.`province` AS `province`,`m`.`city` AS `city`,`m`.`address` AS `address`,`m`.`postal` AS `postal`,`m`.`id_card_number` AS `id_card_number`,`m`.`phone` AS `phone`,`m`.`bank_name` AS `bank_name`,`m`.`bank_branch` AS `bank_branch`,`m`.`bank_acc_name` AS `bank_acc_name`,`m`.`bank_acc_num` AS `bank_acc_num`,`m`.`im` AS `im`,`m`.`fb_username` AS `fb_username`,`m`.`fb_link` AS `fb_link`,`m`.`valid` AS `valid`,`m`.`register_date` AS `register_date`,`m`.`deleted` AS `deleted`,`m`.`last_update` AS `last_update`,`m`.`valid_date` AS `valid_date`,`m`.`level_status` AS `level_status` from ((`broker` `b` left join `member_broker` `mb` on(((`b`.`id_broker` = `mb`.`id_broker`) and (`b`.`deleted` = 0)))) left join `member` `m` on((`mb`.`id_member` = `m`.`id_member`)))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
