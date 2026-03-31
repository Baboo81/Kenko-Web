-- MySQL dump 10.13  Distrib 9.3.0, for macos15.2 (arm64)
--
-- Host: localhost    Database: kenko_dev
-- ------------------------------------------------------
-- Server version	9.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Rodriguez Perez','Christel','magicbaboo@gmail.com','Bonjour, je voudrais avoir un RDV !','2026-02-02 11:02:53','2026-02-02 11:02:53'),(2,'Rodriguez Perez','Christel','magicbaboo@gmail.com','Bonjour, je voudrais avoir un RDV !','2026-02-02 11:13:21','2026-02-02 11:13:21'),(3,'Rodriguez Perez','Christel','magicbaboo@gmail.com','Bonjour, je voudrais avoir un RDV !','2026-02-02 11:16:58','2026-02-02 11:16:58'),(4,'Rodriguez Perez','Christel','magicbaboo@gmail.com','Bonjour, je voudrais avoir un RDV !','2026-02-02 11:22:28','2026-02-02 11:22:28'),(5,'Rodriguez Perez','Christel','magicbaboo@gmail.com','Bonjour, je voudrais avoir un RDV !','2026-02-02 11:47:33','2026-02-02 11:47:33');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cookie_consent`
--

DROP TABLE IF EXISTS `cookie_consent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cookie_consent` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `consent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cookie_consent`
--

LOCK TABLES `cookie_consent` WRITE;
/*!40000 ALTER TABLE `cookie_consent` DISABLE KEYS */;
INSERT INTO `cookie_consent` VALUES (1,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 17:54:08','2026-02-09 17:54:08'),(2,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 17:56:32','2026-02-09 17:56:32'),(3,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 17:59:14','2026-02-09 17:59:14'),(4,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 17:59:24','2026-02-09 17:59:24'),(5,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 17:59:25','2026-02-09 17:59:25'),(6,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:00','2026-02-09 18:02:00'),(7,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:01','2026-02-09 18:02:01'),(8,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:02','2026-02-09 18:02:02'),(9,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:03','2026-02-09 18:02:03'),(10,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:03','2026-02-09 18:02:03'),(11,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:02:03','2026-02-09 18:02:03'),(12,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:48','2026-02-09 18:03:48'),(13,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:50','2026-02-09 18:03:50'),(14,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:50','2026-02-09 18:03:50'),(15,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:51','2026-02-09 18:03:51'),(16,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:51','2026-02-09 18:03:51'),(17,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:03:52','2026-02-09 18:03:52'),(18,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:05','2026-02-09 18:06:05'),(19,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:06','2026-02-09 18:06:06'),(20,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:07','2026-02-09 18:06:07'),(21,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:07','2026-02-09 18:06:07'),(22,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:08','2026-02-09 18:06:08'),(23,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:37','2026-02-09 18:06:37'),(24,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:37','2026-02-09 18:06:37'),(25,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:38','2026-02-09 18:06:38'),(26,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:38','2026-02-09 18:06:38'),(27,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:38','2026-02-09 18:06:38'),(28,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:38','2026-02-09 18:06:38'),(29,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:06:38','2026-02-09 18:06:38'),(30,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:15:29','2026-02-09 18:15:29'),(31,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:15:35','2026-02-09 18:15:35'),(32,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-09 18:15:36','2026-02-09 18:15:36'),(33,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/',NULL,'2026-02-12 14:17:46','2026-02-12 14:17:46'),(34,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/',NULL,'2026-02-12 14:17:47','2026-02-12 14:17:47'),(35,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/','2026-02-13 09:39:50','2026-02-13 09:39:50'),(36,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/','2026-02-13 09:39:51','2026-02-13 09:39:51'),(37,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/','2026-02-13 09:39:52','2026-02-13 09:39:52'),(38,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/','2026-02-13 09:39:52','2026-02-13 09:39:52'),(39,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/','2026-02-13 09:39:53','2026-02-13 09:39:53'),(40,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/',NULL,'2026-02-16 08:02:09','2026-02-16 08:02:09'),(41,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/',NULL,'2026-02-16 08:02:10','2026-02-16 08:02:10'),(42,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/',NULL,'2026-02-16 08:02:10','2026-02-16 08:02:10'),(43,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:47:34','2026-02-16 08:47:34'),(44,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:47:35','2026-02-16 08:47:35'),(45,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:34','2026-02-16 08:50:34'),(46,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:35','2026-02-16 08:50:35'),(47,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:45','2026-02-16 08:50:45'),(48,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:46','2026-02-16 08:50:46'),(49,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:48','2026-02-16 08:50:48'),(50,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 08:50:48','2026-02-16 08:50:48'),(51,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:16','2026-02-16 12:42:16'),(52,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:17','2026-02-16 12:42:17'),(53,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:17','2026-02-16 12:42:17'),(54,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:17','2026-02-16 12:42:17'),(55,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:18','2026-02-16 12:42:18'),(56,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:25','2026-02-16 12:42:25'),(57,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:26','2026-02-16 12:42:26'),(58,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:26','2026-02-16 12:42:26'),(59,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:26','2026-02-16 12:42:26'),(60,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:26','2026-02-16 12:42:26'),(61,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:27','2026-02-16 12:42:27'),(62,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:29','2026-02-16 12:42:29'),(63,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:42:29','2026-02-16 12:42:29'),(64,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:14','2026-02-16 12:43:14'),(65,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:15','2026-02-16 12:43:15'),(66,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:15','2026-02-16 12:43:15'),(67,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:15','2026-02-16 12:43:15'),(68,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:16','2026-02-16 12:43:16'),(69,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:16','2026-02-16 12:43:16'),(70,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:16','2026-02-16 12:43:16'),(71,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:16','2026-02-16 12:43:16'),(72,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:19','2026-02-16 12:43:19'),(73,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:19','2026-02-16 12:43:19'),(74,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:20','2026-02-16 12:43:20'),(75,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:20','2026-02-16 12:43:20'),(76,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:20','2026-02-16 12:43:20'),(77,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:43:21','2026-02-16 12:43:21'),(78,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:33','2026-02-16 12:47:33'),(79,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:34','2026-02-16 12:47:34'),(80,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:34','2026-02-16 12:47:34'),(81,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:34','2026-02-16 12:47:34'),(82,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:34','2026-02-16 12:47:34'),(83,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:35','2026-02-16 12:47:35'),(84,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:35','2026-02-16 12:47:35'),(85,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:47:35','2026-02-16 12:47:35'),(86,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:19','2026-02-16 12:48:19'),(87,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:20','2026-02-16 12:48:20'),(88,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:21','2026-02-16 12:48:21'),(89,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:21','2026-02-16 12:48:21'),(90,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:29','2026-02-16 12:48:29'),(91,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:29','2026-02-16 12:48:29'),(92,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:29','2026-02-16 12:48:29'),(93,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:29','2026-02-16 12:48:29'),(94,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:29','2026-02-16 12:48:29'),(95,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:30','2026-02-16 12:48:30'),(96,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:31','2026-02-16 12:48:31'),(97,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:31','2026-02-16 12:48:31'),(98,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:31','2026-02-16 12:48:31'),(99,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:32','2026-02-16 12:48:32'),(100,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:48:32','2026-02-16 12:48:32'),(101,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:05','2026-02-16 12:49:05'),(102,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:05','2026-02-16 12:49:05'),(103,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:05','2026-02-16 12:49:05'),(104,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:05','2026-02-16 12:49:05'),(105,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:06','2026-02-16 12:49:06'),(106,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:06','2026-02-16 12:49:06'),(107,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:08','2026-02-16 12:49:08'),(108,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:08','2026-02-16 12:49:08'),(109,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:08','2026-02-16 12:49:08'),(110,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:09','2026-02-16 12:49:09'),(111,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:09','2026-02-16 12:49:09'),(112,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:09','2026-02-16 12:49:09'),(113,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:09','2026-02-16 12:49:09'),(114,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 12:49:09','2026-02-16 12:49:09'),(115,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:03:39','2026-02-16 13:03:39'),(116,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:03:40','2026-02-16 13:03:40'),(117,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:03:41','2026-02-16 13:03:41'),(118,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:03:41','2026-02-16 13:03:41'),(119,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:10','2026-02-16 13:04:10'),(120,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:11','2026-02-16 13:04:11'),(121,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:11','2026-02-16 13:04:11'),(122,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:11','2026-02-16 13:04:11'),(123,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:12','2026-02-16 13:04:12'),(124,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:13','2026-02-16 13:04:13'),(125,'refused','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:13','2026-02-16 13:04:13'),(126,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:04:13','2026-02-16 13:04:13'),(127,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:15:15','2026-02-16 13:15:15'),(128,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/faq','2026-02-16 13:24:55','2026-02-16 13:24:55'),(129,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/cookies','http://localhost:8000/','2026-02-16 15:05:44','2026-02-16 15:05:44'),(130,'accepted','127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','/','http://localhost:8000/qui-suis-je','2026-02-16 18:22:44','2026-02-16 18:22:44');
/*!40000 ALTER TABLE `cookie_consent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_02_02_102726_create_contacts_table',2),(5,'2026_02_02_144504_create_page_visits_table',3),(6,'2026_02_06_094858_create_cookie_consent_table',4),(7,'2026_02_09_140726_add_page_and_refferer_to_cookie_consent_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_visits`
--

DROP TABLE IF EXISTS `page_visits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_visits`
--

LOCK TABLES `page_visits` WRITE;
/*!40000 ALTER TABLE `page_visits` DISABLE KEYS */;
/*!40000 ALTER TABLE `page_visits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('JDtaBHB0uPJsSR000JzwHWOV1d9tpyhfs1WX7bql',NULL,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:148.0) Gecko/20100101 Firefox/148.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiME9xVG93ODNaam41VHdCVnllVnd1V0dJdTVTOUxZd1pyb1A5NUIyOCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1771516395);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-20 10:06:32
