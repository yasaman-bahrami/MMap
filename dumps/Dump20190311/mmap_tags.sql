-- MySQL dump 10.13  Distrib 8.0.15, for macos10.14 (x86_64)
--
-- Host: localhost    Database: mmap
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Identity',NULL,NULL),(2,'Food',NULL,NULL),(3,'Small Business',NULL,NULL),(4,'English Language',NULL,NULL),(5,'Community',NULL,NULL),(6,'First Impressions',NULL,NULL),(7,'Portuguese Fishermen',NULL,NULL),(8,'Student Life',NULL,NULL),(9,'Music',NULL,NULL),(10,'Family',NULL,NULL),(11,'Religion',NULL,NULL),(12,'Polish People',NULL,NULL),(13,'Ceremony',NULL,NULL),(14,'Newfoundlanders',NULL,NULL),(15,'History',NULL,NULL),(16,'Change',NULL,NULL),(17,'Culture',NULL,NULL),(18,'Italian Restaurant',NULL,NULL),(19,'Challenges',NULL,NULL),(20,'Festivity',NULL,NULL),(21,'Politics',NULL,NULL),(22,'Education',NULL,NULL),(23,'Celebration',NULL,NULL),(24,'Footwear',NULL,NULL),(25,'Indian Culture',NULL,NULL),(26,'Japanese Language',NULL,NULL),(27,'Forced Culture',NULL,NULL),(28,'Indigenous People',NULL,NULL),(29,'Experience',NULL,NULL),(30,'Mentality',NULL,NULL),(31,'African Clothing',NULL,NULL),(32,'Sport',NULL,NULL),(33,'Drink',NULL,NULL),(34,'Beothuk People',NULL,NULL),(35,'Chinese People',NULL,NULL),(36,'Expropriation',NULL,NULL),(37,'Canadian History',NULL,NULL),(38,'Belonging',NULL,NULL),(39,'Catholic Community',NULL,NULL),(40,'Encounter',NULL,NULL),(41,'Cooking',NULL,NULL),(42,'Grocery',NULL,NULL),(43,'Portuguese Food',NULL,NULL),(44,'Japanese People',NULL,NULL),(45,'Ukrainian Culture',NULL,NULL),(46,'Korean People',NULL,NULL),(47,'Culture Shock',NULL,NULL),(48,'Inclusion',NULL,NULL),(49,'Hindu Tample',NULL,NULL),(50,'Visual Art',NULL,NULL),(51,'Film',NULL,NULL),(52,'Tradition',NULL,NULL),(53,'Immigrant Experience',NULL,NULL),(54,'Employment',NULL,NULL),(55,'Government',NULL,NULL),(56,'Arrival',NULL,NULL),(57,'Clothing',NULL,NULL),(58,'Multiculturalism',NULL,NULL),(59,'Ghanaian Music',NULL,NULL),(60,'Indigenous Experience',NULL,NULL),(61,'Traditional Food',NULL,NULL),(62,'Difference',NULL,NULL),(63,'Heritage',NULL,NULL),(64,'Sociality',NULL,NULL),(65,'Winter',NULL,NULL),(66,'Tailor',NULL,NULL),(67,'Portuguese People',NULL,NULL),(68,'Weather',NULL,NULL),(69,'Music Making',NULL,NULL),(70,'Trade',NULL,NULL),(71,'Painting',NULL,NULL),(72,'Jewish History',NULL,NULL),(73,'Newfoundland History',NULL,NULL),(74,'Travel',NULL,NULL),(75,'Refugee Experience',NULL,NULL),(76,'Material Culture',NULL,NULL),(77,'Soldier',NULL,NULL),(78,'Indian Community',NULL,NULL),(79,'Fashion',NULL,NULL),(80,'African Music',NULL,NULL),(81,'New Canadian People',NULL,NULL),(82,'Language',NULL,NULL),(83,'Sports',NULL,NULL),(84,'Cultural Fusion',NULL,NULL),(85,'Character',NULL,NULL),(86,'Ukrainian Language',NULL,NULL),(87,'Portuguese Language',NULL,NULL),(88,'Lebanese Culture',NULL,NULL),(89,'Caucasian Culture',NULL,NULL),(90,'Islam',NULL,NULL),(91,'Japan',NULL,NULL),(92,'African History',NULL,NULL),(93,'Tourism',NULL,NULL),(94,'Family Business',NULL,NULL),(95,'Crafts',NULL,NULL),(96,'Military',NULL,NULL),(97,'Diversity',NULL,NULL),(98,'Canadian Culture',NULL,NULL),(99,'Éwé Culture',NULL,NULL),(100,'African Dance',NULL,NULL),(101,'African Community',NULL,NULL),(102,'Nigerian Culture',NULL,NULL),(103,'Immigration',NULL,NULL),(104,'Latin',NULL,NULL),(105,'Portuguese Culture',NULL,NULL),(106,'Lebanese Food',NULL,NULL),(107,'Japanese Food',NULL,NULL),(108,'Musical Style',NULL,NULL),(109,'Muslim Community',NULL,NULL),(110,'Taste',NULL,NULL),(111,'Children',NULL,NULL),(112,'Nature',NULL,NULL),(113,'Ritual',NULL,NULL),(114,'Japanese Culture',NULL,NULL),(115,'Russia',NULL,NULL),(116,'Ghanaian Food',NULL,NULL),(117,'Ethnic Grocery',NULL,NULL),(118,'Refugees',NULL,NULL),(119,'Commemoration',NULL,NULL),(120,'Transportation',NULL,NULL),(121,'Racism',NULL,NULL),(122,'Literature',NULL,NULL),(123,'Musical Instruments',NULL,NULL),(124,'Leisure',NULL,NULL),(125,'Law',NULL,NULL),(126,'Collaboration',NULL,NULL),(127,'Spanish Language',NULL,NULL),(128,'Italian Food',NULL,NULL),(129,'Kenyan Crafts',NULL,NULL),(130,'Hinduism',NULL,NULL),(131,'Ocean',NULL,NULL),(132,'Customs',NULL,NULL),(133,'Provincialism',NULL,NULL),(134,'Sound Symposium',NULL,NULL),(135,'Cuba',NULL,NULL),(136,'Canadian Food',NULL,NULL),(137,'Games',NULL,NULL),(138,'Communication',NULL,NULL),(139,'Jewish Community',NULL,NULL),(140,'Irish Culture',NULL,NULL),(141,'Home',NULL,NULL),(142,'Intergenerationality',NULL,NULL),(143,'Memorial University',NULL,NULL),(144,'Expectations',NULL,NULL),(145,'Indian Food',NULL,NULL),(146,'European History',NULL,NULL),(147,'Latin American Culture',NULL,NULL),(148,'Wealth',NULL,NULL),(149,'Western Clothing',NULL,NULL),(150,'Folklore',NULL,NULL),(151,'Newfoundland Food',NULL,NULL),(152,'Fishing',NULL,NULL),(153,'Ukrainian People',NULL,NULL),(154,'Poetry',NULL,NULL),(155,'Dance',NULL,NULL),(156,'Jewish Culture',NULL,NULL),(157,'Produce',NULL,NULL),(158,'Jewellery',NULL,NULL),(159,'Love',NULL,NULL),(160,'Expectation',NULL,NULL),(161,'Play',NULL,NULL),(162,'Style',NULL,NULL),(163,'Geography',NULL,NULL),(164,'Jazz Culture',NULL,NULL),(165,'Portuguese Community',NULL,NULL),(166,'Catholicism',NULL,NULL),(167,'African People',NULL,NULL),(168,'Names',NULL,NULL),(169,'Boyhood',NULL,NULL),(170,'Public Culture',NULL,NULL),(171,'Arabic culture',NULL,NULL),(172,'British Culture',NULL,NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-11 11:24:40
