-- MySQL dump 10.16  Distrib 10.2.14-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: xmf_casillas_playa
-- ------------------------------------------------------
-- Server version	10.2.14-MariaDB-10.2.14+maria~stretch

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acl_phinxlog`
--

DROP TABLE IF EXISTS `acl_phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acl_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl_phinxlog`
--

LOCK TABLES `acl_phinxlog` WRITE;
/*!40000 ALTER TABLE `acl_phinxlog` DISABLE KEYS */;
INSERT INTO `acl_phinxlog` VALUES (20141229162641,'CakePhpDbAcl','2018-03-07 06:25:43','2018-03-07 06:25:43',0);
/*!40000 ALTER TABLE `acl_phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,14),(2,1,NULL,NULL,'Articles',2,13),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,NULL,'Articles',1,NULL,15,16);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` char(36) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Roles','80687266-6761-43a2-bd98-f42349a9bb63',NULL,1,4),(2,NULL,'Roles','5197c80d-2d30-4225-a757-b31592c9e0f0',NULL,5,6),(3,NULL,'Roles','e687cb91-4cdf-4ab2-992f-e76584199c2e',NULL,7,10),(4,1,'MyUsers','a51e5518-c666-40ca-92db-f27202c07160',NULL,2,3),(5,3,'MyUsers','394e7d5f-ed21-4201-a53a-7a9d3a70f66b',NULL,8,9);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,5,'1','1','1','1'),(2,3,4,'1','1','1','1'),(3,1,3,'1','1','1','1'),(4,2,3,'1','1','1','1'),(5,3,3,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cake_d_c_users_phinxlog`
--

DROP TABLE IF EXISTS `cake_d_c_users_phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cake_d_c_users_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cake_d_c_users_phinxlog`
--

LOCK TABLES `cake_d_c_users_phinxlog` WRITE;
/*!40000 ALTER TABLE `cake_d_c_users_phinxlog` DISABLE KEYS */;
INSERT INTO `cake_d_c_users_phinxlog` VALUES (20150513201111,'Initial','2018-03-07 06:25:36','2018-03-07 06:25:36',0),(20161031101316,'AddSecretToUsers','2018-03-07 06:25:36','2018-03-07 06:25:36',0);
/*!40000 ALTER TABLE `cake_d_c_users_phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` char(36) NOT NULL,
  `name` char(120) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES ('5197c80d-2d30-4225-a757-b31592c9e0f0','Editor','2018-03-07 00:27:41','2018-03-07 00:27:41'),('80687266-6761-43a2-bd98-f42349a9bb63','Author','2018-03-07 00:27:30','2018-03-07 00:27:30'),('e687cb91-4cdf-4ab2-992f-e76584199c2e','Reader','2018-03-07 00:27:46','2018-03-07 00:27:46');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_accounts`
--

DROP TABLE IF EXISTS `social_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_accounts` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `token` varchar(500) NOT NULL,
  `token_secret` varchar(500) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `data` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `social_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_accounts`
--

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `activation_date` datetime DEFAULT NULL,
  `secret` varchar(32) DEFAULT NULL,
  `secret_verified` tinyint(1) DEFAULT NULL,
  `tos_date` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` char(36) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('394e7d5f-ed21-4201-a53a-7a9d3a70f66b','captura2','enuma@elish.com','$2y$10$ql8hnVyH9VoaFm4uSYM0Fue5ZMabAF6b1PzOcLw1j/8UvwgFFdnSm','Cristina','Torres','',NULL,'',NULL,'',0,NULL,1,0,'80687266-6761-43a2-bd98-f42349a9bb63','2018-03-07 00:28:27','2018-03-17 20:48:55'),('86e06920-6035-419d-906f-cc672f90e793','xmfuser','superadmin@example.com','$2y$10$7Nr7lHpeouo.3Swq.mM.3uNu0zjJmyyEGxgTOA1F9UYq7dXSFfyHK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'5197c80d-2d30-4225-a757-b31592c9e0f0','2018-03-07 00:26:23','2018-03-08 00:03:38'),('a51e5518-c666-40ca-92db-f27202c07160','captura','ambagasdowa@gmail.com','$2y$10$HpFCzlJZ7bOz42UPu2cd.esO5prArctMpxHs2/HR0tMH70uFOYyam','Carlos','Joaquin','',NULL,'',NULL,'',0,NULL,1,0,'80687266-6761-43a2-bd98-f42349a9bb63','2018-03-07 00:28:09','2018-03-17 20:50:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_boxes_blocks`
--

DROP TABLE IF EXISTS `xmf_boxes_blocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_boxes_blocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `block` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_boxes_blocks`
--

LOCK TABLES `xmf_boxes_blocks` WRITE;
/*!40000 ALTER TABLE `xmf_boxes_blocks` DISABLE KEYS */;
INSERT INTO `xmf_boxes_blocks` VALUES (1,'last_report','1st Coalitions',1,'2018-05-02 18:53:02','2018-05-02 18:53:02'),(2,'last_report','2nd',2,'2018-05-02 18:53:02','2018-05-02 18:53:02'),(3,'last_report','3rd',3,'2018-05-02 18:53:02','2018-05-02 18:53:02'),(4,'last_report','4th',4,'2018-05-02 18:53:02','2018-05-02 18:53:02');
/*!40000 ALTER TABLE `xmf_boxes_blocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_boxes_orders`
--

DROP TABLE IF EXISTS `xmf_boxes_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_boxes_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `formula` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `xmf_partidos` int(10) unsigned DEFAULT NULL,
  `xmf_tipo_votaciones_id` int(10) unsigned DEFAULT NULL,
  `order` int(10) unsigned DEFAULT NULL,
  `partition` int(10) unsigned DEFAULT NULL,
  `xmf_boxes_blocks_id` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_boxes_orders`
--

LOCK TABLES `xmf_boxes_orders` WRITE;
/*!40000 ALTER TABLE `xmf_boxes_orders` DISABLE KEYS */;
INSERT INTO `xmf_boxes_orders` VALUES (1,'PAN-PRD-MC','','bloque-coaliciones',NULL,1,1,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(2,'PRI-PVE-PANAL','','bloque-coaliciones',NULL,1,2,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(3,'MORENA-PT-PES','','bloque-coaliciones',NULL,1,3,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(4,'Bronco','','bloque-coaliciones',NULL,1,4,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(5,'Margarita Zavala','','bloque-coaliciones',NULL,1,5,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(6,'No Registrados','','bloque-coaliciones',NULL,1,6,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(7,'Votos Nulos','','bloque-coaliciones',NULL,1,7,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(8,'PAN-PRD-MC','','bloque-coaliciones',NULL,2,1,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(9,'PRI-PVE-PANAL','','bloque-coaliciones',NULL,2,2,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(10,'MORENA-PT-PES','','bloque-coaliciones',NULL,2,3,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(11,'Bronco','','bloque-coaliciones',NULL,2,4,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(12,'Margarita Zavala','','bloque-coaliciones',NULL,2,5,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(13,'No Registrados','','bloque-coaliciones',NULL,2,6,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(14,'Votos Nulos','','bloque-coaliciones',NULL,2,7,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(15,'PAN-PRD-MC','','bloque-coaliciones',NULL,3,1,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(16,'PRI-PVE-PANAL','','bloque-coaliciones',NULL,3,2,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(17,'MORENA-PT-PES','','bloque-coaliciones',NULL,3,3,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(18,'Bronco','','bloque-coaliciones',NULL,3,4,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(19,'Margarita Zavala','','bloque-coaliciones',NULL,3,5,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(20,'No Registrados','','bloque-coaliciones',NULL,3,6,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(21,'Votos Nulos','','bloque-coaliciones',NULL,3,7,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(22,'PAN-PRD-MC','','bloque-coaliciones',NULL,4,1,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(23,'PRI-PVE-PANAL','','bloque-coaliciones',NULL,4,2,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(24,'MORENA-PT','','bloque-coaliciones',NULL,4,3,1,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(25,'No Registrados','','bloque-coaliciones',NULL,4,6,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(26,'Votos Nulos','','bloque-coaliciones',NULL,4,7,2,1,1,'2018-05-02 19:01:14','2018-05-02 19:01:14'),(27,'MORENA-PT','MORENA PT','only-coalition',NULL,1,3,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(28,'MORENA-PT','MORENA PT','only-coalition',NULL,2,3,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(29,'MORENA-PT','MORENA PT','only-coalition',NULL,3,3,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(30,'MORENA-PT','MORENA PT','only-coalition',NULL,4,3,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(31,'MORENA-PT-PES','MORENA PES','only-coalition',NULL,1,1,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(32,'MORENA-PT-PES','MORENA PES','only-coalition',NULL,2,1,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(33,'MORENA-PT-PES','MORENA PES','only-coalition',NULL,3,1,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(34,'MORENA-PT-PES','MORENA PES','only-coalition',NULL,4,1,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(35,'MORENA-PT-PES','MORENA PT','only-coalition',NULL,1,2,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(36,'MORENA-PT-PES','MORENA PT','only-coalition',NULL,2,2,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(37,'MORENA-PT-PES','MORENA PT','only-coalition',NULL,3,2,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(38,'MORENA-PT-PES','MORENA PT','only-coalition',NULL,4,2,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(39,'MORENA-PT-PES','MORENA PT PES','only-coalition',NULL,1,4,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(40,'MORENA-PT-PES','MORENA PT PES','only-coalition',NULL,2,4,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(41,'MORENA-PT-PES','MORENA PT PES','only-coalition',NULL,3,4,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(42,'MORENA-PT-PES','MORENA PT PES','only-coalition',NULL,4,4,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(43,'MORENA-PT-PES','PT PES','only-coalition',NULL,1,12,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(44,'MORENA-PT-PES','PT PES','only-coalition',NULL,2,12,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(45,'MORENA-PT-PES','PT PES','only-coalition',NULL,3,12,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(46,'MORENA-PT-PES','PT PES','only-coalition',NULL,4,12,NULL,2,0,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(47,'PAN-PRD-MC','PAN MC','only-coalition',NULL,1,5,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(48,'PAN-PRD-MC','PAN MC','only-coalition',NULL,2,5,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(49,'PAN-PRD-MC','PAN MC','only-coalition',NULL,3,5,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(50,'PAN-PRD-MC','PAN MC','only-coalition',NULL,4,5,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(51,'PAN-PRD-MC','PAN PRD','only-coalition',NULL,1,6,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(52,'PAN-PRD-MC','PAN PRD','only-coalition',NULL,2,6,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(53,'PAN-PRD-MC','PAN PRD','only-coalition',NULL,3,6,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(54,'PAN-PRD-MC','PAN PRD','only-coalition',NULL,4,6,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(55,'PAN-PRD-MC','PAN PRD MC','only-coalition',NULL,1,7,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(56,'PAN-PRD-MC','PAN PRD MC','only-coalition',NULL,2,7,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(57,'PAN-PRD-MC','PAN PRD MC','only-coalition',NULL,3,7,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(58,'PAN-PRD-MC','PAN PRD MC','only-coalition',NULL,4,7,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(59,'PAN-PRD-MC','PRD MC','only-coalition',NULL,1,8,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(60,'PAN-PRD-MC','PRD MC','only-coalition',NULL,2,8,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(61,'PAN-PRD-MC','PRD MC','only-coalition',NULL,3,8,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(62,'PAN-PRD-MC','PRD MC','only-coalition',NULL,4,8,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(63,'PRI-PVE-PANAL','PRI PANAL','only-coalition',NULL,1,9,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(64,'PRI-PVE-PANAL','PRI PANAL','only-coalition',NULL,2,9,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(65,'PRI-PVE-PANAL','PRI PANAL','only-coalition',NULL,3,9,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(66,'PRI-PVE-PANAL','PRI PANAL','only-coalition',NULL,4,9,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(67,'PRI-PVE-PANAL','PRI PVE','only-coalition',NULL,1,10,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(68,'PRI-PVE-PANAL','PRI PVE','only-coalition',NULL,2,10,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(69,'PRI-PVE-PANAL','PRI PVE','only-coalition',NULL,3,10,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(70,'PRI-PVE-PANAL','PRI PVE','only-coalition',NULL,4,10,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(71,'PRI-PVE-PANAL','PRI PVE PANAL','only-coalition',NULL,1,11,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(72,'PRI-PVE-PANAL','PRI PVE PANAL','only-coalition',NULL,2,11,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(73,'PRI-PVE-PANAL','PRI PVE PANAL','only-coalition',NULL,3,11,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(74,'PRI-PVE-PANAL','PRI PVE PANAL','only-coalition',NULL,4,11,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(75,'PRI-PVE-PANAL','PVE PANAL','only-coalition',NULL,1,13,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(76,'PRI-PVE-PANAL','PVE PANAL','only-coalition',NULL,2,13,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(77,'PRI-PVE-PANAL','PVE PANAL','only-coalition',NULL,3,13,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24'),(78,'PRI-PVE-PANAL','PVE PANAL','only-coalition',NULL,4,13,NULL,2,1,'2018-05-02 19:01:24','2018-05-02 19:01:24');
/*!40000 ALTER TABLE `xmf_boxes_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_casillas`
--

DROP TABLE IF EXISTS `xmf_casillas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_casillas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(36) DEFAULT NULL,
  `name` char(50) NOT NULL,
  `description` char(150) NOT NULL,
  `municipio` text DEFAULT NULL,
  `seccion` text DEFAULT NULL,
  `clave_agrupamiento` char(2) DEFAULT NULL,
  `tipo_casilla` text DEFAULT NULL,
  `urbana` text DEFAULT NULL,
  `distrito` text DEFAULT NULL,
  `locacion` text DEFAULT NULL,
  `hora_presencia` time DEFAULT NULL,
  `hora_instalacion` time DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_cierre` time DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `lugar_indicado` tinyint(1) DEFAULT NULL,
  `gente_fila` tinyint(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=292 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_casillas`
--

LOCK TABLES `xmf_casillas` WRITE;
/*!40000 ALTER TABLE `xmf_casillas` DISABLE KEYS */;
INSERT INTO `xmf_casillas` VALUES (1,'a51e5518-c666-40ca-92db-f27202c07160','CB-738','CB-738','SOLIDARIDAD','738','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL),(2,NULL,'CC1-738','CC1-738','SOLIDARIDAD','738','IX','CONTIGUA 1','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'CB-739','CB-739','SOLIDARIDAD','739','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,'CB-740','CB-740','SOLIDARIDAD','740','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,NULL,'CC1-740','CC1-740','SOLIDARIDAD','740','IX','CONTIGUA 1','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,NULL,'CB-741','CB-741','SOLIDARIDAD','741','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,NULL,'CC1-741','CC1-741','SOLIDARIDAD','741','IX','CONTIGUA 1','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,NULL,'CB-910','CB-910','SOLIDARIDAD','910','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'394e7d5f-ed21-4201-a53a-7a9d3a70f66b','CB-914','CB-914','SOLIDARIDAD','914','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL),(10,NULL,'CB-915','CB-915','SOLIDARIDAD','915','IX','BASICA ','URBANA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `xmf_casillas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_casillas_incidencias`
--

DROP TABLE IF EXISTS `xmf_casillas_incidencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_casillas_incidencias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xmf_casillas_id` int(10) unsigned DEFAULT NULL,
  `xmf_total_incidencias` int(10) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_casillas_incidencias`
--

LOCK TABLES `xmf_casillas_incidencias` WRITE;
/*!40000 ALTER TABLE `xmf_casillas_incidencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_casillas_incidencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_incidencias`
--

DROP TABLE IF EXISTS `xmf_incidencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_incidencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` text DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COMMENT='TIPO INCIDENCIAS';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_incidencias`
--

LOCK TABLES `xmf_incidencias` WRITE;
/*!40000 ALTER TABLE `xmf_incidencias` DISABLE KEYS */;
INSERT INTO `xmf_incidencias` VALUES (1,'La casilla se instalo antes de las 7 am.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(2,'Falto material electoral (Boletas, tinta indeleble, listados nominales).','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(3,'Se impidio el acceso a la casilla a los Representantes de Partido sin causa 8 justificada.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(4,'Se expulso de la casilla a los Representantes de Partido sin causa 11 justificada.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(5,'Se instalo la casilla, sin causa justificada, en lugar distinto al seﬁalado por el 14 Consejo Distrital.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(6,'Se recibio la votacion por personas distintas a las facultadas por la ley.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(7,'Se permitio sufragar a ciudadanos que no contaban con su credencial para votar con fotografia.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(8,'Se permitio sufragar a ciudadanos cuyo nombre no aparecio en la Lista Nominal de Electores con fotografia.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(9,'No se permitio sufragar a ciudadanos que contaban con sentencia favorable del Tribunal Electoral (JDC)','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(10,'Se impidio el ejercicio del derecho al voto a los ciudadanos sin causa justificada.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(11,'Se ejercio violencia fisica o presién sobre los miembros de la Mesa Directiva de Casilla, Representantes de los Partidos o Electores.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(12,'Se cerro la votacion antes de las 17:00 horas sin que se hubiera agotado el listado nominal.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(13,'Medio dolo o error en el computo de los votos, lo cual fue determinante para el resultado de la votacion.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(14,'Se permitio la presencia de personas no acreditadas en la casilla.','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(15,'Se realizo el escrutinio y computo local diferente al determinado por el Consejo Distrital','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(16,'Exististieron Irregularidades graves, plenamente acreditadas y no reparables durante la jornada electoral','','2018-04-02 14:02:07','2018-04-02 14:02:07');
/*!40000 ALTER TABLE `xmf_incidencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_partidos`
--

DROP TABLE IF EXISTS `xmf_partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_partidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text DEFAULT NULL,
  `formula` text DEFAULT NULL,
  `is_coalicion` tinyint(1) NOT NULL DEFAULT 0,
  `has_parent` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `is_funcionario` tinyint(1) NOT NULL DEFAULT 0,
  `funcionario_name` char(55) DEFAULT NULL,
  `funcionario_lastname` char(55) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `bloque` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COMMENT='INFORMACION PARTIDOS';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_partidos`
--

LOCK TABLES `xmf_partidos` WRITE;
/*!40000 ALTER TABLE `xmf_partidos` DISABLE KEYS */;
INSERT INTO `xmf_partidos` VALUES (1,'PAN-PRD-MC','PAN',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,50),(2,'PRI-PVE-PANAL','PRI',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,51),(3,'PAN-PRD-MC','PRD',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',1,52),(4,'PRI-PVE-PANAL','PVE',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,53),(5,'MORENA-PT-PES','PT',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,55),(6,'PAN-PRD-MC','MC',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,54),(7,'PRI-PVE-PANAL','PANAL',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,55),(8,'MORENA-PT-PES','MORENA',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,56),(9,'MORENA-PT-PES','PES',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,57),(10,'PAN-PRD-MC','PAN PRD MC',1,0,NULL,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,10),(11,'PAN-PRD-MC','PAN PRD',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,11),(12,'PAN-PRD-MC','PAN MC',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,12),(13,'PAN-PRD-MC','PRD MC',1,1,10,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,13),(14,'PRI-PVE-PANAL','PRI PVE PANAL',1,0,NULL,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,20),(15,'PRI-PVE-PANAL','PRI PVE',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,21),(16,'PRI-PVE-PANAL','PRI PANAL',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,22),(17,'PRI-PVE-PANAL','PVE PANAL',1,1,14,0,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',NULL,23),(18,'Presidente','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',4,1),(19,'Secretario','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',4,2),(20,'Escrutador1','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',5,3),(21,'Escrutador2','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',5,4),(22,'Suplente1','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,5),(23,'Suplente2','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,6),(24,'Suplente3','',0,0,NULL,1,'name','lastname','','2018-04-02 14:02:07','2018-04-02 14:02:07',6,7),(25,'Secretario II',NULL,0,0,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Escrutador III',NULL,0,0,0,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'MORENA-PT-PES','MORENA PT PES',1,0,NULL,0,'','','','2018-04-17 20:10:46','2018-04-17 20:10:46',NULL,30),(28,'MORENA-PT-PES','MORENA PES',1,1,27,0,'','','','2018-04-17 20:16:57','2018-04-17 20:16:57',NULL,31),(29,'MORENA-PT-PES','MORENA PT',1,1,27,0,'','','','2018-04-17 20:20:15','2018-04-17 20:20:15',NULL,32),(30,'MORENA-PT-PES','PT PES',1,1,27,0,'','','','2018-04-17 20:23:06','2018-04-17 20:23:06',NULL,33),(31,'Margarita Zavala','Margarita Zavala',0,0,0,0,'','','','2018-04-17 21:14:21','2018-04-17 21:14:21',NULL,61),(32,'Bronco','Bronco',0,0,0,0,'','','','2018-04-17 21:14:29','2018-04-17 21:14:29',NULL,60),(33,'Votos Nulos','Votos Nulos',0,0,0,0,'','','','2018-04-17 21:14:35','2018-04-17 21:14:35',NULL,90),(34,'No Registrados','No Registrados',0,0,0,0,'','','','2018-04-17 21:14:39','2018-04-17 21:14:39',NULL,80),(36,'MORENA-PT','MORENA-PT',1,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,59),(37,'MORENA-PT','MORENA',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',3,56),(38,'MORENA-PT','PT',0,0,NULL,1,'','','','2018-04-02 14:02:07','2018-04-02 14:02:07',2,55);
/*!40000 ALTER TABLE `xmf_partidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_presences_references`
--

DROP TABLE IF EXISTS `xmf_presences_references`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_presences_references` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_casillas_id` int(10) unsigned NOT NULL,
  `xmf_partidos_id` int(10) unsigned NOT NULL,
  `is_present` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_presences_references`
--

LOCK TABLES `xmf_presences_references` WRITE;
/*!40000 ALTER TABLE `xmf_presences_references` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_presences_references` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `xmf_reapers`
--

DROP TABLE IF EXISTS `xmf_reapers`;
/*!50001 DROP VIEW IF EXISTS `xmf_reapers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `xmf_reapers` (
  `casillas_index` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `municipio` tinyint NOT NULL,
  `seccion` tinyint NOT NULL,
  `clave_agrupamiento` tinyint NOT NULL,
  `tipo_casilla` tinyint NOT NULL,
  `urbana` tinyint NOT NULL,
  `distrito` tinyint NOT NULL,
  `locacion` tinyint NOT NULL,
  `hora_instalacion` tinyint NOT NULL,
  `hora_inicio` tinyint NOT NULL,
  `hora_cierre` tinyint NOT NULL,
  `nombre` tinyint NOT NULL,
  `formula` tinyint NOT NULL,
  `is_coalicion` tinyint NOT NULL,
  `is_funcionario` tinyint NOT NULL,
  `has_parent` tinyint NOT NULL,
  `parent_id` tinyint NOT NULL,
  `tipo` tinyint NOT NULL,
  `bloque` tinyint NOT NULL,
  `orden` tinyint NOT NULL,
  `id` tinyint NOT NULL,
  `xmf_casillas_id` tinyint NOT NULL,
  `xmf_tipo_votaciones_id` tinyint NOT NULL,
  `xmf_partidos_id` tinyint NOT NULL,
  `votes` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `xmf_reports`
--

DROP TABLE IF EXISTS `xmf_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_reports_controls_id` int(10) unsigned NOT NULL,
  `xmf_reports_definitions_id` int(10) unsigned NOT NULL,
  `xmf_casillas_id` int(10) unsigned NOT NULL,
  `xmf_partidos_id` int(10) unsigned NOT NULL,
  `xmf_tipo_votaciones_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports`
--

LOCK TABLES `xmf_reports` WRITE;
/*!40000 ALTER TABLE `xmf_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_reports_cierre`
--

DROP TABLE IF EXISTS `xmf_reports_cierre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports_cierre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xmf_casillas_id` int(11) NOT NULL,
  `hr_cierre` time DEFAULT NULL,
  `habia_gente_fila` tinyint(2) DEFAULT NULL,
  `votantes` int(11) DEFAULT NULL,
  `promovidos` int(11) DEFAULT NULL,
  `info_validada` tinyint(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports_cierre`
--

LOCK TABLES `xmf_reports_cierre` WRITE;
/*!40000 ALTER TABLE `xmf_reports_cierre` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_reports_cierre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_reports_config_definitions`
--

DROP TABLE IF EXISTS `xmf_reports_config_definitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports_config_definitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_reports_definitions_id` int(10) unsigned NOT NULL,
  `field_name` char(1) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports_config_definitions`
--

LOCK TABLES `xmf_reports_config_definitions` WRITE;
/*!40000 ALTER TABLE `xmf_reports_config_definitions` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_reports_config_definitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_reports_controls`
--

DROP TABLE IF EXISTS `xmf_reports_controls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports_controls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_reports_id` int(10) unsigned NOT NULL,
  `xmf_users_id` int(10) unsigned NOT NULL,
  `xmf_roles_id` int(10) unsigned NOT NULL,
  `is_user_config` tinyint(1) DEFAULT 0,
  `is_role_config` tinyint(1) DEFAULT 1,
  `xmf_validations_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports_controls`
--

LOCK TABLES `xmf_reports_controls` WRITE;
/*!40000 ALTER TABLE `xmf_reports_controls` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_reports_controls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_reports_definitions`
--

DROP TABLE IF EXISTS `xmf_reports_definitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports_definitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports_definitions`
--

LOCK TABLES `xmf_reports_definitions` WRITE;
/*!40000 ALTER TABLE `xmf_reports_definitions` DISABLE KEYS */;
INSERT INTO `xmf_reports_definitions` VALUES (1,'first','reporte_primero','2018-04-02 14:02:07','2018-04-02 14:02:07'),(2,'second','reporte_segundo','2018-04-02 14:02:07','2018-04-02 14:02:07'),(3,'third','reporte_tercero','2018-04-02 14:02:07','2018-04-02 14:02:07'),(4,'fourth','reporte_final','2018-04-02 14:02:07','2018-04-02 14:02:07');
/*!40000 ALTER TABLE `xmf_reports_definitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_reports_segundo_tercero`
--

DROP TABLE IF EXISTS `xmf_reports_segundo_tercero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_reports_segundo_tercero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `votantes_segundo` int(11) DEFAULT NULL,
  `promovidos_segundo` int(11) DEFAULT NULL,
  `hr_voto_segundo` time DEFAULT NULL,
  `votantes_tercero` int(11) DEFAULT NULL,
  `promovidos_tercero` int(11) DEFAULT NULL,
  `hr_voto_tercero` time DEFAULT NULL,
  `info_validada` tinyint(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `xmf_casillas_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_reports_segundo_tercero`
--

LOCK TABLES `xmf_reports_segundo_tercero` WRITE;
/*!40000 ALTER TABLE `xmf_reports_segundo_tercero` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_reports_segundo_tercero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_tipo_votaciones`
--

DROP TABLE IF EXISTS `xmf_tipo_votaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_tipo_votaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` char(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_tipo_votaciones`
--

LOCK TABLES `xmf_tipo_votaciones` WRITE;
/*!40000 ALTER TABLE `xmf_tipo_votaciones` DISABLE KEYS */;
INSERT INTO `xmf_tipo_votaciones` VALUES (1,'Presidente','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(2,'Senador','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(3,'Diputado','','2018-04-02 14:02:07','2018-04-02 14:02:07'),(4,'Ayuntamiento','','2018-04-02 14:02:07','2018-04-02 14:02:07');
/*!40000 ALTER TABLE `xmf_tipo_votaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_validations`
--

DROP TABLE IF EXISTS `xmf_validations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_validations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `reports_id` int(10) unsigned NOT NULL,
  `level` tinyint(4) NOT NULL,
  `level_validation` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_validations`
--

LOCK TABLES `xmf_validations` WRITE;
/*!40000 ALTER TABLE `xmf_validations` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_validations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_validations_configs`
--

DROP TABLE IF EXISTS `xmf_validations_configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_validations_configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `top_level` tinyint(4) NOT NULL,
  `role_id` char(36) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_validations_configs`
--

LOCK TABLES `xmf_validations_configs` WRITE;
/*!40000 ALTER TABLE `xmf_validations_configs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_validations_configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xmf_validations_logs`
--

DROP TABLE IF EXISTS `xmf_validations_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_validations_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_reports_id` int(10) unsigned NOT NULL,
  `xmf_validations_id` int(10) unsigned NOT NULL,
  `xmf_validations_configs_id` int(10) unsigned NOT NULL,
  `level` tinyint(4) NOT NULL,
  `level_validation` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_validations_logs`
--

LOCK TABLES `xmf_validations_logs` WRITE;
/*!40000 ALTER TABLE `xmf_validations_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_validations_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `xmf_view_reporte_segundos_terceros`
--

DROP TABLE IF EXISTS `xmf_view_reporte_segundos_terceros`;
/*!50001 DROP VIEW IF EXISTS `xmf_view_reporte_segundos_terceros`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `xmf_view_reporte_segundos_terceros` (
  `xmf_casillas_id` tinyint NOT NULL,
  `name` tinyint NOT NULL,
  `votantes_segundo` tinyint NOT NULL,
  `promovidos_segundo` tinyint NOT NULL,
  `votantes_tercero` tinyint NOT NULL,
  `promovidos_tercero` tinyint NOT NULL,
  `is_twelve` tinyint NOT NULL,
  `is_thirdteen` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `xmf_votes`
--

DROP TABLE IF EXISTS `xmf_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xmf_votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xmf_casillas_id` int(10) unsigned NOT NULL,
  `xmf_tipo_votaciones_id` int(10) unsigned NOT NULL,
  `xmf_partidos_id` int(10) unsigned NOT NULL,
  `votes` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xmf_votes`
--

LOCK TABLES `xmf_votes` WRITE;
/*!40000 ALTER TABLE `xmf_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `xmf_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `xmf_reapers`
--

/*!50001 DROP TABLE IF EXISTS `xmf_reapers`*/;
/*!50001 DROP VIEW IF EXISTS `xmf_reapers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `xmf_reapers` AS (select `cas`.`id` AS `casillas_index`,`cas`.`name` AS `name`,`cas`.`municipio` AS `municipio`,`cas`.`seccion` AS `seccion`,`cas`.`clave_agrupamiento` AS `clave_agrupamiento`,`cas`.`tipo_casilla` AS `tipo_casilla`,`cas`.`urbana` AS `urbana`,`cas`.`distrito` AS `distrito`,`cas`.`locacion` AS `locacion`,`cas`.`hora_instalacion` AS `hora_instalacion`,`cas`.`hora_inicio` AS `hora_inicio`,`cas`.`hora_cierre` AS `hora_cierre`,`partition`.`nombre` AS `nombre`,`partition`.`formula` AS `formula`,`partition`.`is_coalicion` AS `is_coalicion`,`partition`.`is_funcionario` AS `is_funcionario`,`partition`.`has_parent` AS `has_parent`,`partition`.`parent_id` AS `parent_id`,`tvt`.`tipo` AS `tipo`,`partition`.`bloque` AS `bloque`,`partition`.`orden` AS `orden`,`vts`.`id` AS `id`,`vts`.`xmf_casillas_id` AS `xmf_casillas_id`,`vts`.`xmf_tipo_votaciones_id` AS `xmf_tipo_votaciones_id`,`vts`.`xmf_partidos_id` AS `xmf_partidos_id`,`vts`.`votes` AS `votes` from (((`xmf_casillas` `cas` join `xmf_partidos` `partition`) join `xmf_tipo_votaciones` `tvt`) left join `xmf_votes` `vts` on(`cas`.`id` = `vts`.`xmf_casillas_id` and `vts`.`xmf_tipo_votaciones_id` = `tvt`.`id` and `vts`.`xmf_partidos_id` = `partition`.`id`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `xmf_view_reporte_segundos_terceros`
--

/*!50001 DROP TABLE IF EXISTS `xmf_view_reporte_segundos_terceros`*/;
/*!50001 DROP VIEW IF EXISTS `xmf_view_reporte_segundos_terceros`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`ambagasdowa`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `xmf_view_reporte_segundos_terceros` AS with report as (select `rpt`.`xmf_casillas_id` AS `xmf_casillas_id`,`cas`.`name` AS `name`,`rpt`.`votantes_segundo` AS `votantes_segundo`,`rpt`.`promovidos_segundo` AS `promovidos_segundo`,`rpt`.`votantes_tercero` AS `votantes_tercero`,`rpt`.`promovidos_tercero` AS `promovidos_tercero`,case when cast(`rpt`.`created` as time) between cast('00:00:00' as time) and cast('12:00:00' as time) then 1 else 0 end AS `is_twelve`,case when cast(`rpt`.`created` as time) between cast('00:00:00' as time) and cast('15:00:00' as time) then 1 else 0 end AS `is_thirdteen` from (`xmf_reports_segundo_tercero` `rpt` join `xmf_casillas` `cas` on(`cas`.`id` = `rpt`.`xmf_casillas_id`)) where `rpt`.`xmf_casillas_id` is not null and `rpt`.`votantes_segundo` is not null or `rpt`.`votantes_tercero` is not null)select `report`.`xmf_casillas_id` AS `xmf_casillas_id`,`report`.`name` AS `name`,`report`.`votantes_segundo` AS `votantes_segundo`,`report`.`promovidos_segundo` AS `promovidos_segundo`,`report`.`votantes_tercero` AS `votantes_tercero`,`report`.`promovidos_tercero` AS `promovidos_tercero`,`report`.`is_twelve` AS `is_twelve`,`report`.`is_thirdteen` AS `is_thirdteen` from `report` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-06 11:59:50
