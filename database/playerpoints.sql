-- MySQL dump 10.13  Distrib 8.3.0, for Win64 (x86_64)
--
-- Host: 103.237.87.46    Database: playerpoints
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
-- Table structure for table `playerpoints_migrations`
--

DROP TABLE IF EXISTS `playerpoints_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playerpoints_migrations` (
  `migration_version` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playerpoints_migrations`
--

LOCK TABLES `playerpoints_migrations` WRITE;
/*!40000 ALTER TABLE `playerpoints_migrations` DISABLE KEYS */;
INSERT INTO `playerpoints_migrations` VALUES (2);
/*!40000 ALTER TABLE `playerpoints_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playerpoints_points`
--

DROP TABLE IF EXISTS `playerpoints_points`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playerpoints_points` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `points` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playerpoints_points`
--

LOCK TABLES `playerpoints_points` WRITE;
/*!40000 ALTER TABLE `playerpoints_points` DISABLE KEYS */;
INSERT INTO `playerpoints_points` VALUES (88,'5b7e8f42-1da1-3198-a4e2-f292f9175729',0),(89,'810a721e-ddbb-373e-ba41-57c0973c4456',0),(91,'dc048e28-1cd5-37df-8f77-d6bdea66d762',0),(92,'44bdb7d5-665a-3453-9377-afbf3e0bc1be',0),(93,'133d63f4-21cf-31d6-ae4c-3569c0c0e8b1',0),(94,'55c80b0d-7556-34bd-9954-4b482fa5a43a',0),(96,'583c4d13-1963-3165-a829-93aa16fe1a23',0),(97,'f774ff56-3632-316d-a19d-22736742f848',0),(98,'11e912d0-77d3-320f-9373-887f746f6f28',0),(99,'751428ca-70d0-314f-a8c7-3735af40b98c',0),(100,'00000000-0000-0000-0009-01fd85a46d29',0),(101,'e8e2eb63-39ef-37f5-85bc-55e169f05178',0),(102,'00000000-0000-0000-0009-01f1a4455ecb',0),(103,'704ef73e-e39a-3f84-bf1a-356b27199ea6',0),(104,'d4d25007-2f25-3231-8037-dd803b5cd90b',0),(105,'00000000-0000-0000-0009-01fa766775be',0),(106,'00000000-0000-0000-0009-01f181fb0cbe',0),(107,'c53de9ec-695d-3c43-82de-7e25bc2d3356',0),(108,'52e90bef-5a90-33d6-bb49-a3f9dd343fa5',0),(109,'08a1d7c9-596c-3c6a-b8f2-821e5f08da11',0),(110,'e0bfc308-b34e-3f9f-aa91-27449d0e9145',0),(111,'0a960c7a-95ad-338a-9db7-9a675bf710d3',0),(112,'20695691-8607-35a5-816c-3cdc25b7da61',0),(113,'5f7fe19f-abe3-3068-afe2-0235dad07a71',0),(114,'748cca3b-1d1f-3756-b5b2-62aa37417439',0),(115,'b4338506-da9a-3803-ab09-b6eb706b069b',0),(116,'afcb0f8a-f05a-384f-920c-51a1b873b6db',0),(117,'69b86f21-8ebb-362d-a408-18c761f10fa5',0),(118,'00000000-0000-0000-0009-01f57631e1c6',0),(119,'370a3ae9-d500-3709-a25c-55b6303a890e',0),(120,'31f8c203-1379-3e21-a11b-84b80e7a84ff',40),(121,'3cc37000-48ac-3768-a1cb-6ea786116da9',0),(122,'1150b0c2-e6fa-3813-8ecd-46a223122c5b',0),(123,'00000000-0000-0000-0009-01f56096489c',0),(124,'070cd1a8-88ac-3aa0-bac4-808b4f7990f8',0),(125,'00000000-0000-0000-0009-01ffd09244df',0),(126,'8cbe3351-1e35-322c-a0bd-ad87553c0adc',0),(127,'0e603b2b-bdf7-34ce-a7eb-4508c4c8edc7',0),(128,'c9e82a83-5572-3bd6-9b38-e26cb20a92aa',0),(129,'13da591d-4971-3af9-94b1-9a32ccbc1e05',0),(130,'6d0e97a5-f9aa-3fbf-a908-45af4512dfa4',0),(131,'c391d627-4bb2-31a9-a46f-52f54f648a95',0),(132,'f519714c-c75a-3992-b0bf-b00ce0198390',0),(133,'00000000-0000-0000-0009-01f4204ccc33',0),(134,'a3e18d31-f6bc-39b7-9092-b86477a6f478',0),(135,'76bdc3c3-f915-31d8-9b2b-f29f506690ce',0),(136,'00000000-0000-0000-0009-01f9953f6418',0),(137,'00000000-0000-0000-0009-01fda0eeb9ac',0),(138,'809a387c-c204-3b4a-9491-b21fceefc68b',0),(139,'e9566f89-cf69-34d3-b962-97a9ae6e3f65',0),(140,'11daedd2-95d3-39b7-8886-36b8bccffda5',0),(141,'605e0336-a966-3ce0-a2a4-49af12107646',0),(142,'76b64183-0697-35ee-b05e-3866348b6692',0),(143,'3d08284d-8e20-322a-935c-0a91a812743e',0),(144,'59c8ca43-244b-322d-a475-4e789b85f794',0),(145,'00000000-0000-0000-0009-01fdb365658f',0),(146,'00000000-0000-0000-0009-01f0ae9d3e84',0),(147,'ac5f281f-60be-396a-96d5-b28984ae9e1c',0),(148,'12963c61-e81b-3f33-b846-4efeef4789e4',0),(149,'8f08f73c-ff48-30fa-8f2b-42d30ec65cb9',0),(150,'76f71d53-cfc7-37d0-b413-9278c3c56060',0),(151,'4abd0ae5-8e1f-3db4-b1c7-cdbd9ed24b12',0),(152,'ad52325f-b583-3858-81f4-fd25245f72a6',0),(153,'00000000-0000-0000-0009-01f31671ee6c',0),(154,'80d7e5de-db1a-37a6-b958-62b98e946975',0),(155,'00307555-9c65-3a41-b0a5-40141301523e',0),(156,'00000000-0000-0000-0009-01ff845a5781',0),(157,'4ceb1cd7-bc77-3195-b9a4-55593c4c6b6a',0),(158,'00000000-0000-0000-0009-01f5ec298cfc',0),(159,'1a6cad05-fa32-3148-8b4d-e48bcc3ba311',0),(160,'7a107073-af2e-31eb-b15d-65d604a90cfb',0),(161,'95999310-2c73-326b-9c99-947f460618c3',0),(162,'bade6dfc-3074-3a23-a72a-9ebd6ece21c0',0),(163,'00000000-0000-0000-0009-01f137ef4799',0),(164,'df289fc9-c102-3f08-b7c5-3aebe4ee6216',0),(165,'b085433f-4241-38ea-a631-af56af930cfa',0),(166,'00000000-0000-0000-0009-01feef47d5e4',0),(167,'00000000-0000-0000-0009-01f4fc23ae68',0),(168,'c4cb0cbe-97a3-3ddb-9886-8b54fa501f7c',0),(169,'c64c3255-e290-3d4c-8f9e-22a17f2f15ef',0),(170,'6972686b-747b-30f6-b21a-2e18af85cddc',0),(171,'00000000-0000-0000-0009-01f9dd9c124e',0),(172,'a3c534fc-c0b2-3eab-ab8a-4174331062fc',0),(173,'00000000-0000-0000-0009-01f7e2f287d7',0),(174,'bc2ac734-3857-38a6-b7ee-3308c087ba79',0),(175,'5ca3d0f4-472b-3498-a232-c9c3cb60a478',0),(176,'86f9a8fb-8e99-3a99-a844-666b742b5b70',0),(177,'00000000-0000-0000-0009-01fb0c606dea',0),(178,'9a619ca7-41e0-3755-af08-fcee245ed3e4',0),(179,'062f173e-1239-3e94-8928-5827e6c14c1c',0),(180,'085edacf-4490-3505-85dc-fc0dc7dbff20',0),(181,'a239b0a3-6e15-3a44-b643-a56697388ec1',0),(182,'00000000-0000-0000-0009-01ffd0860df2',0),(183,'a1310c36-9403-391a-926c-9c09ace1bdd5',0),(184,'8dafba2a-e210-3b9b-8efd-fc7f878a0db8',0),(185,'d2d71c54-7a4b-35bb-afba-5d26e6128c69',0),(186,'70f259cc-00df-32d8-9def-20447562e9b5',0),(187,'4eb00f45-9cdc-34cd-ac4f-fa8a2bfaa8ba',0),(188,'47adf7f9-a5c8-3ff0-a85d-f08a6d36129c',0),(189,'7fda8623-9fdb-3b9a-9fbf-6f9e5efad35c',0),(190,'54678f50-714b-39b0-9117-b749b362d4ef',0),(191,'4eda078b-3b10-336e-96fc-8b5a57a0ab66',0),(192,'4eb4c1d7-5232-383a-acff-2db1ab6a84b4',0),(193,'81bf46c7-8101-3a65-9c03-f8681f335678',0),(194,'c6143b25-914e-3673-8a52-fcca82ad297c',0),(195,'933d892f-fb43-37b4-99ea-0dbed21b5ac7',0),(196,'27e7257f-efcb-3be9-bb45-52ab828f1937',0),(197,'30ae6bef-da4f-39dd-871d-6b15d2c7641c',0),(198,'a4f6122a-76d3-35ae-ba83-dab662ab0f7c',0),(199,'686e8e71-e963-378f-9495-124deae913be',0),(200,'f33220cb-0271-3d57-97c7-2e98344ff4be',0),(201,'ebad373f-2247-37fe-8e34-29f039fa8c79',0),(202,'755b818f-517c-3948-ac0a-b843e15afd58',0),(203,'3f611995-2ec2-381a-bf7e-13f83df5a059',0),(204,'65eb25d2-c2a2-32af-bd42-1546100a2ed8',0),(205,'6490e519-f906-3555-bd07-31da4d3be0ee',0),(206,'a6116285-6125-3be4-aa23-f9392b428c10',0),(207,'4db6c8ac-a7aa-399c-9495-842230443b91',0),(208,'3605cc0c-02f4-35eb-ae4e-d5817450d5ce',0),(209,'1d20d3d7-209e-369d-9e38-5372d006fa13',0),(210,'a14767ca-f07c-3705-a883-69dc894d1826',0),(216,'ab949bab-8aab-3eea-9c8f-b9b1b6961153',0),(220,'00000000-0000-0000-0009-01f0b88e9cb2',0),(221,'da871bf9-0198-340e-afb0-c09386a7d91f',0),(222,'d805ce79-9524-3445-b22e-6927c248041e',0),(223,'00000000-0000-0000-0009-01fbe0a26939',0),(224,'6d1daa5b-6492-3960-9917-4a108fa97d7d',0),(225,'00000000-0000-0000-0009-01f002c135c9',0),(228,'bd11ee7e-47b8-3467-9d39-dc64ab286b5a',932),(232,'9e69a7e0-5fcd-3b8b-8c7f-847ba30156d2',0),(233,'cdc2cbf1-f565-334c-972c-00cc8b280c85',0),(234,'00000000-0000-0000-0009-01f68770847e',0),(235,'fd7a83b2-e065-3fc5-adbb-999d56813a8c',0),(236,'4bc715f1-5236-3a18-857f-499e17ccd1bf',0),(237,'00000000-0000-0000-0009-01fbf9faba72',0),(238,'f1844c5f-1ab8-38fa-8c9c-40260bd8e008',0),(239,'cac5cf2d-f0eb-31cb-a5bc-efe265244167',0),(240,'61ce4e7c-924e-36e8-b008-494a823bf066',0),(241,'1a61fa90-df6b-328b-9ea8-be62e9334e86',0),(242,'032bd9ef-5413-34a2-9685-56c3140a28a7',0),(243,'00000000-0000-0000-0009-01f2cae67f2e',0),(244,'e591385d-b428-3389-bc75-c53c141ef12a',0),(245,'75dfdce7-b47d-3b57-a35c-daf309424190',0),(246,'d280565f-b947-3805-a7e8-748e6a3215b6',0),(247,'5deedb11-f5eb-3f16-9833-7ffba2700c61',0),(248,'600a5cb1-ad8c-36ad-8a7a-2fa196848aed',0),(249,'98b67181-932f-3c50-95ee-7d5265e9df52',0),(250,'4ba7d1ae-6afc-302b-a67e-2a9993074ef7',0),(251,'e068ba98-43e1-30fe-80a0-12cd61efeef5',0),(252,'7cb147c9-d51f-3bf4-b07e-851898549da0',0),(253,'a86558c7-5915-3ecb-be91-80ffc06e483b',0),(254,'fdbec1bd-85f7-36ba-a7c9-35fd0c34a825',0),(255,'28756ec0-2602-3f7e-8180-c66f639552f2',0),(256,'b92bc935-50e8-38b1-b4c8-f1b876c1f174',0),(257,'01e4e24b-f246-3487-b510-f8c4c1b826ec',0),(258,'7b7ced36-9d98-37f0-be28-71505b87dc92',0),(259,'cc85e922-a198-3429-ae47-881c67671938',0),(260,'1ee36043-1118-3244-8902-b3d19903753e',0),(261,'95b7537c-8706-3105-8c54-08aafc199910',0),(262,'2310f1f3-dc81-34fb-abd4-a92219e22241',0),(263,'4438fd60-c136-3877-9b81-456d5efa244b',0),(264,'fe7c8e63-4d45-3199-9dd1-c6a832e5ecee',0),(265,'76eabf09-1646-3438-9865-0e366f9eee55',0),(266,'7d0a0fd7-1dd5-3f28-baf8-6b000011d6ef',0);
/*!40000 ALTER TABLE `playerpoints_points` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playerpoints_username_cache`
--

DROP TABLE IF EXISTS `playerpoints_username_cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playerpoints_username_cache` (
  `uuid` varchar(36) NOT NULL,
  `username` varchar(30) NOT NULL,
  UNIQUE KEY `uuid` (`uuid`),
  KEY `playerpoints_username_cache_uuid_index` (`uuid`),
  KEY `playerpoints_username_cache_username_index` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playerpoints_username_cache`
--

LOCK TABLES `playerpoints_username_cache` WRITE;
/*!40000 ALTER TABLE `playerpoints_username_cache` DISABLE KEYS */;
INSERT INTO `playerpoints_username_cache` VALUES ('00000000-0000-0000-0009-01f4204ccc33','Admin6136'),('5ca3d0f4-472b-3498-a232-c9c3cb60a478','Admin6136'),('a14767ca-f07c-3705-a883-69dc894d1826','aduEngPaoHoang'),('00000000-0000-0000-0009-01f2cae67f2e','AmanD4536'),('600a5cb1-ad8c-36ad-8a7a-2fa196848aed','AmanD4536'),('810a721e-ddbb-373e-ba41-57c0973c4456','anhtuideptrai'),('032bd9ef-5413-34a2-9685-56c3140a28a7','Annatroxx'),('00000000-0000-0000-0009-01fa766775be','Annneae'),('bd11ee7e-47b8-3467-9d39-dc64ab286b5a','anobaria'),('a3e18d31-f6bc-39b7-9092-b86477a6f478','anobaria1'),('133d63f4-21cf-31d6-ae4c-3569c0c0e8b1','Ans'),('9e69a7e0-5fcd-3b8b-8c7f-847ba30156d2','AnTrc2'),('95999310-2c73-326b-9c99-947f460618c3','Azyghost1'),('86f9a8fb-8e99-3a99-a844-666b742b5b70','BabySharkk'),('370a3ae9-d500-3709-a25c-55b6303a890e','bakabaka'),('062f173e-1239-3e94-8928-5827e6c14c1c','baodepzai2612008'),('7fda8623-9fdb-3b9a-9fbf-6f9e5efad35c','binhbinh'),('cac5cf2d-f0eb-31cb-a5bc-efe265244167','Binkhoaak2k4'),('a1310c36-9403-391a-926c-9c09ace1bdd5','CatHuynh2011'),('4eda078b-3b10-336e-96fc-8b5a57a0ab66','chexinhiu'),('00000000-0000-0000-0009-01f137ef4799','Chung1st'),('ac5f281f-60be-396a-96d5-b28984ae9e1c','Chung1st'),('11daedd2-95d3-39b7-8886-36b8bccffda5','Chuyen2009_'),('c64c3255-e290-3d4c-8f9e-22a17f2f15ef','CONCACANHDEPLAM'),('1a61fa90-df6b-328b-9ea8-be62e9334e86','cutypro1909'),('e068ba98-43e1-30fe-80a0-12cd61efeef5','DaffiestMink37'),('3605cc0c-02f4-35eb-ae4e-d5817450d5ce','Daigo'),('e8e2eb63-39ef-37f5-85bc-55e169f05178','Dazzy21'),('00000000-0000-0000-0009-01fdb365658f','DDTiendznhat'),('5f7fe19f-abe3-3068-afe2-0235dad07a71','Deathking'),('00000000-0000-0000-0009-01ffd09244df','Den7606'),('8cbe3351-1e35-322c-a0bd-ad87553c0adc','Den7606'),('00000000-0000-0000-0009-01fb0c606dea','DHT123EZ'),('9a619ca7-41e0-3755-af08-fcee245ed3e4','DHT123EZ'),('e591385d-b428-3389-bc75-c53c141ef12a','Dieter_Orius'),('e0bfc308-b34e-3f9f-aa91-27449d0e9145','dj_Deticat'),('5deedb11-f5eb-3f16-9833-7ffba2700c61','Duy54321'),('65eb25d2-c2a2-32af-bd42-1546100a2ed8','echef'),('20695691-8607-35a5-816c-3cdc25b7da61','Elegant_1496'),('fe7c8e63-4d45-3199-9dd1-c6a832e5ecee','Elowynei'),('4eb4c1d7-5232-383a-acff-2db1ab6a84b4','emchexinhiu'),('31f8c203-1379-3e21-a11b-84b80e7a84ff','EmHiuuu'),('00000000-0000-0000-0009-01f181fb0cbe','Ezlove7010'),('c391d627-4bb2-31a9-a46f-52f54f648a95','Ezlove7010'),('751428ca-70d0-314f-a8c7-3735af40b98c','Frieyah'),('08a1d7c9-596c-3c6a-b8f2-821e5f08da11','Haisamnek'),('c53de9ec-695d-3c43-82de-7e25bc2d3356','heulwen123'),('f1844c5f-1ab8-38fa-8c9c-40260bd8e008','Hiking2347'),('d2d71c54-7a4b-35bb-afba-5d26e6128c69','hoagdz'),('70f259cc-00df-32d8-9def-20447562e9b5','hoagdz121'),('76f71d53-cfc7-37d0-b413-9278c3c56060','Huang'),('cc85e922-a198-3429-ae47-881c67671938','HutaoCafe'),('bade6dfc-3074-3a23-a72a-9ebd6ece21c0','Huwa'),('ebad373f-2247-37fe-8e34-29f039fa8c79','HynBel'),('55c80b0d-7556-34bd-9954-4b482fa5a43a','iman2024'),('6d0e97a5-f9aa-3fbf-a908-45af4512dfa4','Imissher'),('c9e82a83-5572-3bd6-9b38-e26cb20a92aa','JackSuperLuck'),('00000000-0000-0000-0009-01f5ec298cfc','KaitoEntheMC'),('44bdb7d5-665a-3453-9377-afbf3e0bc1be','KaitoEntheMC'),('00000000-0000-0000-0009-01ff845a5781','KaiZoNoPro'),('4ceb1cd7-bc77-3195-b9a4-55593c4c6b6a','KaiZoNoPro'),('00000000-0000-0000-0009-01ffd0860df2','Katori1749'),('00000000-0000-0000-0009-01fd85a46d29','Kayyaa705'),('d4d25007-2f25-3231-8037-dd803b5cd90b','Kayyaa705'),('81bf46c7-8101-3a65-9c03-f8681f335678','khanhbui'),('a4f6122a-76d3-35ae-ba83-dab662ab0f7c','Khoa1117'),('dc048e28-1cd5-37df-8f77-d6bdea66d762','Khoai456'),('1a6cad05-fa32-3148-8b4d-e48bcc3ba311','khoi1236'),('00000000-0000-0000-0009-01f31671ee6c','Kienmcgaminh'),('ad52325f-b583-3858-81f4-fd25245f72a6','Kienmcgaminh'),('00000000-0000-0000-0009-01f57631e1c6','kienmcgaminh123'),('6972686b-747b-30f6-b21a-2e18af85cddc','kingpeka4'),('75dfdce7-b47d-3b57-a35c-daf309424190','Lazy'),('3f611995-2ec2-381a-bf7e-13f83df5a059','lexuanson257'),('070cd1a8-88ac-3aa0-bac4-808b4f7990f8','LongLag_MC'),('59c8ca43-244b-322d-a475-4e789b85f794','ltdmc'),('00000000-0000-0000-0009-01f4fc23ae68','Luckvoltia4869'),('c4cb0cbe-97a3-3ddb-9886-8b54fa501f7c','Luckvoltia4869'),('11e912d0-77d3-320f-9373-887f746f6f28','Lulibune'),('ab949bab-8aab-3eea-9c8f-b9b1b6961153','meiko'),('2310f1f3-dc81-34fb-abd4-a92219e22241','memimy'),('00000000-0000-0000-0009-01f1a4455ecb','Meow2k9'),('b4338506-da9a-3803-ab09-b6eb706b069b','Meow2k9'),('00000000-0000-0000-0009-01f7e2f287d7','Micheal6467'),('a3c534fc-c0b2-3eab-ab8a-4174331062fc','Micheal6467'),('8dafba2a-e210-3b9b-8efd-fc7f878a0db8','Mike'),('933d892f-fb43-37b4-99ea-0dbed21b5ac7','Mike83'),('748cca3b-1d1f-3756-b5b2-62aa37417439','mrcat'),('a86558c7-5915-3ecb-be91-80ffc06e483b','Nabi'),('a6116285-6125-3be4-aa23-f9392b428c10','NALHOMIE'),('95b7537c-8706-3105-8c54-08aafc199910','nghami'),('61ce4e7c-924e-36e8-b008-494a823bf066','nhimsbimchua'),('6490e519-f906-3555-bd07-31da4d3be0ee','nhocsamm'),('7a107073-af2e-31eb-b15d-65d604a90cfb','NoFun4UG'),('1d20d3d7-209e-369d-9e38-5372d006fa13','Nokeepp'),('5b7e8f42-1da1-3198-a4e2-f292f9175729','NoOhOpE'),('4db6c8ac-a7aa-399c-9495-842230443b91','okurinz'),('809a387c-c204-3b4a-9491-b21fceefc68b','Ongtrumchoida'),('605e0336-a966-3ce0-a2a4-49af12107646','Onionionnn'),('76b64183-0697-35ee-b05e-3866348b6692','OniOnionnn'),('30ae6bef-da4f-39dd-871d-6b15d2c7641c','OwlZ302'),('755b818f-517c-3948-ac0a-b843e15afd58','Paintown'),('a239b0a3-6e15-3a44-b643-a56697388ec1','PewPongPay'),('00307555-9c65-3a41-b0a5-40141301523e','phusieudepzai'),('00000000-0000-0000-0009-01fda0eeb9ac','PithyRose084783'),('e9566f89-cf69-34d3-b962-97a9ae6e3f65','PithyRose084783'),('afcb0f8a-f05a-384f-920c-51a1b873b6db','PNTuanAnh'),('00000000-0000-0000-0009-01fbe0a26939','PunctualArc2786'),('6d1daa5b-6492-3960-9917-4a108fa97d7d','PunctualArc2786'),('7b7ced36-9d98-37f0-be28-71505b87dc92','PvP_YamDrink'),('47adf7f9-a5c8-3ff0-a85d-f08a6d36129c','Quangbodoi10'),('085edacf-4490-3505-85dc-fc0dc7dbff20','qungg'),('00000000-0000-0000-0009-01f56096489c','Reglow9232'),('f519714c-c75a-3992-b0bf-b00ce0198390','Reglow9232'),('686e8e71-e963-378f-9495-124deae913be','Ryrem'),('f33220cb-0271-3d57-97c7-2e98344ff4be','Ryrem15'),('bc2ac734-3857-38a6-b7ee-3308c087ba79','saon101'),('704ef73e-e39a-3f84-bf1a-356b27199ea6','Shaoyidagiu'),('00000000-0000-0000-0009-01f002c135c9','Shudeptrai'),('76bdc3c3-f915-31d8-9b2b-f29f506690ce','skywcd'),('3d08284d-8e20-322a-935c-0a91a812743e','son125ipock'),('4eb00f45-9cdc-34cd-ac4f-fa8a2bfaa8ba','songvotu198'),('0a960c7a-95ad-338a-9db7-9a675bf710d3','SquidDragon69'),('583c4d13-1963-3165-a829-93aa16fe1a23','test0101'),('fd7a83b2-e065-3fc5-adbb-999d56813a8c','ThangMC2374'),('8f08f73c-ff48-30fa-8f2b-42d30ec65cb9','Thao3k'),('4ba7d1ae-6afc-302b-a67e-2a9993074ef7','ThaoACA'),('12963c61-e81b-3f33-b846-4efeef4789e4','thaohehuocvclra'),('54678f50-714b-39b0-9117-b749b362d4ef','thebausffs'),('00000000-0000-0000-0009-01f0ae9d3e84','ThichMauHong'),('69b86f21-8ebb-362d-a408-18c761f10fa5','thienphuc5343'),('01e4e24b-f246-3487-b510-f8c4c1b826ec','ThinhDinh'),('00000000-0000-0000-0009-01f9dd9c124e','Tk_duyeric'),('00000000-0000-0000-0009-01f0b88e9cb2','Tobidepzais1tg'),('da871bf9-0198-340e-afb0-c09386a7d91f','Tobidepzais1tg'),('3cc37000-48ac-3768-a1cb-6ea786116da9','tomeme'),('1ee36043-1118-3244-8902-b3d19903753e','TORI_KAMARU'),('c6143b25-914e-3673-8a52-fcca82ad297c','trissyt0104'),('d805ce79-9524-3445-b22e-6927c248041e','Trug678'),('00000000-0000-0000-0009-01feef47d5e4','VaguerSoup35995'),('b085433f-4241-38ea-a631-af56af930cfa','VaguerSoup35995'),('52e90bef-5a90-33d6-bb49-a3f9dd343fa5','Vuhieu2k7'),('7d0a0fd7-1dd5-3f28-baf8-6b000011d6ef','Weirl'),('27e7257f-efcb-3be9-bb45-52ab828f1937','wowquada'),('1150b0c2-e6fa-3813-8ecd-46a223122c5b','XLongIsMyNameX'),('4abd0ae5-8e1f-3db4-b1c7-cdbd9ed24b12','XuRyName'),('4438fd60-c136-3877-9b81-456d5efa244b','xxx1c'),('00000000-0000-0000-0009-01f9953f6418','Yasuka011026'),('df289fc9-c102-3f08-b7c5-3aebe4ee6216','Yasuka011026'),('80d7e5de-db1a-37a6-b958-62b98e946975','YewEmNha'),('0e603b2b-bdf7-34ce-a7eb-4508c4c8edc7','YooShann'),('13da591d-4971-3af9-94b1-9a32ccbc1e05','YooShannPKM');
/*!40000 ALTER TABLE `playerpoints_username_cache` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-26 14:34:11
