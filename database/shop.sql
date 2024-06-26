-- MySQL dump 10.13  Distrib 8.3.0, for Win64 (x86_64)
--
-- Host: 103.237.87.46    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.20.04.1

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
-- Table structure for table `quyenloi`
--

DROP TABLE IF EXISTS `quyenloi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quyenloi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rank_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `quyen_loi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quyenloi`
--

LOCK TABLES `quyenloi` WRITE;
/*!40000 ALTER TABLE `quyenloi` DISABLE KEYS */;
INSERT INTO `quyenloi` VALUES (174,'sat','Sử dụng /craft\r'),(175,'sat','Sử dụng /claimfly\r'),(176,'sat','Mua được hiệu ứng(/pe)\r'),(177,'sat','Sở hữu được Pet...\r'),(178,'vang','Sử dụng /craft\r'),(179,'vang','Sử dụng /claimfly\r'),(180,'vang','Mua được hiệu ứng(/pe)\r'),(181,'vang','Sở hữu được Pet...\r'),(182,'diamond','Sử dụng /craft\r'),(183,'diamond','Sử dụng /claimfly\r'),(184,'diamond','Mua được hiệu ứng(/pe)\r'),(185,'diamond','Sở hữu được Pet...\r');
/*!40000 ALTER TABLE `quyenloi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppet`
--

DROP TABLE IF EXISTS `shoppet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppet` (
  `pet_id` int NOT NULL AUTO_INCREMENT,
  `pet_img` varchar(255) NOT NULL,
  `pet_namePet` varchar(255) NOT NULL,
  `pet_price` int NOT NULL,
  `pet_skinAmount` int NOT NULL,
  `pet_canRide` int NOT NULL,
  `pet_canFly` int NOT NULL,
  `pet_permission` varchar(255) NOT NULL,
  `realName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppet`
--

LOCK TABLES `shoppet` WRITE;
/*!40000 ALTER TABLE `shoppet` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoprank`
--

DROP TABLE IF EXISTS `shoprank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoprank` (
  `rank_id` int NOT NULL AUTO_INCREMENT,
  `rank_nameRank` varchar(255) NOT NULL,
  `rank_img` varchar(255) NOT NULL,
  `rank_group` varchar(255) NOT NULL,
  `rank_price` int NOT NULL,
  PRIMARY KEY (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoprank`
--

LOCK TABLES `shoprank` WRITE;
/*!40000 ALTER TABLE `shoprank` DISABLE KEYS */;
INSERT INTO `shoprank` VALUES (15,'Iron','sat.jpeg','sat',25),(16,'Gold','vang.jpeg','vang',60),(17,'Diamond','silver-rank.webp','diamond',105);
/*!40000 ALTER TABLE `shoprank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soLuongSkin`
--

DROP TABLE IF EXISTS `soLuongSkin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `soLuongSkin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `permission` varchar(255) NOT NULL,
  `pet_namePet` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soLuongSkin`
--

LOCK TABLES `soLuongSkin` WRITE;
/*!40000 ALTER TABLE `soLuongSkin` DISABLE KEYS */;
INSERT INTO `soLuongSkin` VALUES (83,'Pet1\r',''),(84,'Pet2','');
/*!40000 ALTER TABLE `soLuongSkin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-26 14:34:44
