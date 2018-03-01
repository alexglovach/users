-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

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
-- Table structure for table `userData`
--

DROP TABLE IF EXISTS `userData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userData` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userData`
--

LOCK TABLES `userData` WRITE;
/*!40000 ALTER TABLE `userData` DISABLE KEYS */;
INSERT INTO `userData` VALUES (1,'VP','Vasya','Pupkin',100),(2,'sd','sd','sd',10),(3,'alexF','axel','fouly',60),(4,'sdf','sdf','sdf',20),(5,'sdfg','sdfg','sdfg',100),(6,'10','10','10',20),(7,'qwe','qwe','qwe',12),(8,'asd','asd','asd',111);
/*!40000 ALTER TABLE `userData` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userSecurity`
--

DROP TABLE IF EXISTS `userSecurity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userSecurity` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userSecurity`
--

LOCK TABLES `userSecurity` WRITE;
/*!40000 ALTER TABLE `userSecurity` DISABLE KEYS */;
INSERT INTO `userSecurity` VALUES (1,'VP','d8578edf8458ce06fbc5bb76a58c5ca4'),(2,'sd','6226f7cbe59e99a90b5cef6f94f966fd'),(3,'alexF','b59c67bf196a4758191e42f76670ceba'),(4,'sdf','d9729feb74992cc3482b350163a1a010'),(5,'sdfg','912ec803b2ce49e4a541068d495ab570'),(6,'10','d3d9446802a44259755d38e6d163e820'),(7,'qwe','76d80224611fc919a5d54f0ff9fba446'),(8,'asd','2deb000b57bfac9d72c14d4ed967b572');
/*!40000 ALTER TABLE `userSecurity` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-01  9:37:26
