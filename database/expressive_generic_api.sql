-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: expressive_generic
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `contentID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_title` varchar(254) DEFAULT NULL,
  `content_show_title` tinyint(4) unsigned DEFAULT '1',
  `content_body` text,
  `content_permalink_id` int(11) DEFAULT NULL,
  `content_meta_title` varchar(254) DEFAULT NULL,
  `content_meta_keyword` varchar(254) DEFAULT NULL,
  `content_meta_description` varchar(1024) DEFAULT NULL,
  `content_display_order` int(11) DEFAULT NULL,
  `content_created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `content_created_by` int(11) DEFAULT NULL,
  `content_modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `content_modified_by` int(11) DEFAULT NULL,
  `content_published_date` datetime DEFAULT NULL,
  `content_publishing_status` char(16) DEFAULT NULL,
  `content_can_delete` tinyint(4) unsigned DEFAULT '1',
  `content_completed_status` tinyint(4) unsigned DEFAULT '0',
  `content_permissions_tag` varchar(128) DEFAULT NULL,
  `pub_tool_pub_toolID` int(11) DEFAULT NULL,
  `site_siteID` int(11) DEFAULT NULL,
  PRIMARY KEY (`contentID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pubtool`
--

DROP TABLE IF EXISTS `pubtool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pubtool` (
  `pubtoolID` int(11) NOT NULL AUTO_INCREMENT,
  `pubtool_name` varchar(128) NOT NULL,
  `pubtool_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `pubtool_permissions_tag` varchar(128) DEFAULT NULL,
  `site_siteID` int(11) DEFAULT NULL,
  PRIMARY KEY (`pubtoolID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET charactersetclient = @savedcsclient */;

--
-- Dumping data for table `pubtool`
--

LOCK TABLES `pubtool` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `pubtool` VALUES (1,'LIST', 1, 'pubtool-list', 1),(2,'EDIT', 1, 'pubtool-edit', 1),(3,'DETAIL', 1, 'pubtool-detail', 1);
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site`
--

DROP TABLE IF EXISTS `site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site` (
  `siteID` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(128) NOT NULL,
  `site_url` varchar(128) NOT NULL,
  `site_permissions_tag` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`siteID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site`
--

LOCK TABLES `site` WRITE;
/*!40000 ALTER TABLE `site` DISABLE KEYS */;
INSERT INTO `site` VALUES (1,'api_unlikelysource','https://api.unlikelysource.com/', 'api-unlikelysource');
/*!40000 ALTER TABLE `site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(1024) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `groupID` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(128) NOT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `user_group_join`
--

DROP TABLE IF EXISTS `user_group_join`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group_join` (
  `user_group_joinID` int(11) NOT NULL AUTO_INCREMENT,
  `user_user_id` int(11) NOT NULL,
  `group_group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_group_joinID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission` (
  `permissionID` int(11) NOT NULL AUTO_INCREMENT,
  `permission_tag` varchar(128) NOT NULL,
  PRIMARY KEY (`permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `permission_group_join`
--

DROP TABLE IF EXISTS `permission_group_join`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_group_join` (
  `permission_group_joinID` int(11) NOT NULL AUTO_INCREMENT,
  `permission_permission_id` int(11) NOT NULL,
  `group_group_id` int(11) NOT NULL,
  PRIMARY KEY (`permission_group_joinID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


