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
-- Table structure for table `resource_tag`
--

DROP TABLE IF EXISTS `resource_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `resource_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resource_tag_tag_id_index` (`tag_id`),
  KEY `resource_tag_resource_id_index` (`resource_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1078 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_tag`
--

LOCK TABLES `resource_tag` WRITE;
/*!40000 ALTER TABLE `resource_tag` DISABLE KEYS */;
INSERT INTO `resource_tag` VALUES (101,1,1,NULL,NULL),(102,1,6,NULL,NULL),(103,1,8,NULL,NULL),(104,1,9,NULL,NULL),(105,1,19,NULL,NULL),(106,1,35,NULL,NULL),(107,1,43,NULL,NULL),(108,1,48,NULL,NULL),(109,1,49,NULL,NULL),(110,1,50,NULL,NULL),(111,1,54,NULL,NULL),(112,1,55,NULL,NULL),(113,1,59,NULL,NULL),(114,1,61,NULL,NULL),(115,1,63,NULL,NULL),(116,1,65,NULL,NULL),(117,1,66,NULL,NULL),(132,2,2,NULL,NULL),(133,2,4,NULL,NULL),(134,2,5,NULL,NULL),(135,2,6,NULL,NULL),(136,2,16,NULL,NULL),(137,2,21,NULL,NULL),(138,2,28,NULL,NULL),(139,2,29,NULL,NULL),(140,2,31,NULL,NULL),(141,2,38,NULL,NULL),(142,2,51,NULL,NULL),(143,2,52,NULL,NULL),(144,2,53,NULL,NULL),(147,3,3,NULL,NULL),(148,3,6,NULL,NULL),(149,3,33,NULL,NULL),(150,3,68,NULL,NULL),(154,4,7,NULL,NULL),(155,4,43,NULL,NULL),(157,5,0,NULL,NULL),(158,5,8,NULL,NULL),(159,5,9,NULL,NULL),(160,5,14,NULL,NULL),(161,5,27,NULL,NULL),(162,5,30,NULL,NULL),(163,5,34,NULL,NULL),(164,5,35,NULL,NULL),(165,5,36,NULL,NULL),(166,5,42,NULL,NULL),(167,5,50,NULL,NULL),(168,5,54,NULL,NULL),(169,5,57,NULL,NULL),(170,5,59,NULL,NULL),(171,5,60,NULL,NULL),(172,5,62,NULL,NULL),(173,5,67,NULL,NULL),(188,6,10,NULL,NULL),(189,6,37,NULL,NULL),(191,7,11,NULL,NULL),(192,7,20,NULL,NULL),(193,7,30,NULL,NULL),(194,7,56,NULL,NULL),(195,7,58,NULL,NULL),(198,8,4,NULL,NULL),(199,8,12,NULL,NULL),(201,9,0,NULL,NULL),(202,9,24,NULL,NULL),(203,9,35,NULL,NULL),(204,9,46,NULL,NULL),(205,9,52,NULL,NULL),(206,9,56,NULL,NULL),(207,9,66,NULL,NULL),(208,9,67,NULL,NULL),(216,10,6,NULL,NULL),(217,10,8,NULL,NULL),(218,10,9,NULL,NULL),(219,10,11,NULL,NULL),(220,10,14,NULL,NULL),(221,10,18,NULL,NULL),(222,10,30,NULL,NULL),(223,10,31,NULL,NULL),(224,10,38,NULL,NULL),(225,10,42,NULL,NULL),(226,10,51,NULL,NULL),(227,10,54,NULL,NULL),(231,11,11,NULL,NULL),(232,11,15,NULL,NULL),(233,11,18,NULL,NULL),(234,11,20,NULL,NULL),(235,11,27,NULL,NULL),(236,11,34,NULL,NULL),(237,11,40,NULL,NULL),(238,11,53,NULL,NULL),(239,11,57,NULL,NULL),(240,11,64,NULL,NULL),(241,11,69,NULL,NULL),(246,12,17,NULL,NULL),(247,13,18,NULL,NULL),(248,13,53,NULL,NULL),(250,14,1,NULL,NULL),(251,14,16,NULL,NULL),(252,14,17,NULL,NULL),(253,14,19,NULL,NULL),(254,14,36,NULL,NULL),(255,14,65,NULL,NULL),(257,15,0,NULL,NULL),(258,15,2,NULL,NULL),(259,15,7,NULL,NULL),(260,15,9,NULL,NULL),(261,15,17,NULL,NULL),(262,15,18,NULL,NULL),(263,15,20,NULL,NULL),(264,15,27,NULL,NULL),(265,15,28,NULL,NULL),(266,15,36,NULL,NULL),(267,15,50,NULL,NULL),(268,15,58,NULL,NULL),(269,15,60,NULL,NULL),(270,15,62,NULL,NULL),(271,15,68,NULL,NULL),(272,15,70,NULL,NULL),(288,16,16,NULL,NULL),(289,16,22,NULL,NULL),(290,16,29,NULL,NULL),(291,16,34,NULL,NULL),(292,16,40,NULL,NULL),(293,16,51,NULL,NULL),(294,16,61,NULL,NULL),(295,16,62,NULL,NULL),(296,16,63,NULL,NULL),(303,17,1,NULL,NULL),(304,17,2,NULL,NULL),(305,17,4,NULL,NULL),(306,17,5,NULL,NULL),(307,17,6,NULL,NULL),(308,17,7,NULL,NULL),(309,17,15,NULL,NULL),(310,17,16,NULL,NULL),(311,17,19,NULL,NULL),(312,17,21,NULL,NULL),(313,17,22,NULL,NULL),(314,17,24,NULL,NULL),(315,17,29,NULL,NULL),(316,17,32,NULL,NULL),(317,17,35,NULL,NULL),(318,17,38,NULL,NULL),(319,17,49,NULL,NULL),(320,17,51,NULL,NULL),(321,17,52,NULL,NULL),(322,17,53,NULL,NULL),(323,17,55,NULL,NULL),(324,17,58,NULL,NULL),(325,17,59,NULL,NULL),(326,17,61,NULL,NULL),(327,17,64,NULL,NULL),(328,17,68,NULL,NULL),(329,17,69,NULL,NULL),(334,18,31,NULL,NULL),(335,19,3,NULL,NULL),(336,19,4,NULL,NULL),(337,19,8,NULL,NULL),(338,19,19,NULL,NULL),(339,19,21,NULL,NULL),(340,19,28,NULL,NULL),(341,19,29,NULL,NULL),(342,19,31,NULL,NULL),(343,19,32,NULL,NULL),(344,19,33,NULL,NULL),(345,19,38,NULL,NULL),(346,19,41,NULL,NULL),(347,19,43,NULL,NULL),(348,19,48,NULL,NULL),(349,19,51,NULL,NULL),(350,19,52,NULL,NULL),(351,19,54,NULL,NULL),(352,19,57,NULL,NULL),(353,19,59,NULL,NULL),(354,19,60,NULL,NULL),(355,19,63,NULL,NULL),(356,19,64,NULL,NULL),(357,19,66,NULL,NULL),(358,19,69,NULL,NULL),(366,20,20,NULL,NULL),(367,20,24,NULL,NULL),(368,20,29,NULL,NULL),(369,20,34,NULL,NULL),(370,20,40,NULL,NULL),(371,20,41,NULL,NULL),(372,20,46,NULL,NULL),(373,20,56,NULL,NULL),(374,20,59,NULL,NULL),(375,20,67,NULL,NULL),(381,21,24,NULL,NULL),(382,21,36,NULL,NULL),(383,21,50,NULL,NULL),(384,21,60,NULL,NULL),(385,21,62,NULL,NULL),(386,21,64,NULL,NULL),(388,22,3,NULL,NULL),(389,22,4,NULL,NULL),(390,22,8,NULL,NULL),(391,22,10,NULL,NULL),(392,22,12,NULL,NULL),(393,22,22,NULL,NULL),(394,22,33,NULL,NULL),(395,22,35,NULL,NULL),(396,22,37,NULL,NULL),(397,22,38,NULL,NULL),(398,22,42,NULL,NULL),(399,22,43,NULL,NULL),(400,22,46,NULL,NULL),(401,22,49,NULL,NULL),(402,22,54,NULL,NULL),(403,23,0,NULL,NULL),(404,23,20,NULL,NULL),(405,23,24,NULL,NULL),(406,23,34,NULL,NULL),(407,23,40,NULL,NULL),(408,23,41,NULL,NULL),(409,23,46,NULL,NULL),(410,23,59,NULL,NULL),(411,23,66,NULL,NULL),(412,23,67,NULL,NULL),(418,24,41,NULL,NULL),(419,25,14,NULL,NULL),(420,25,34,NULL,NULL),(421,25,42,NULL,NULL),(422,26,7,NULL,NULL),(423,26,43,NULL,NULL),(425,27,48,NULL,NULL),(426,28,24,NULL,NULL),(427,28,35,NULL,NULL),(428,28,49,NULL,NULL),(429,28,59,NULL,NULL),(433,29,1,NULL,NULL),(434,29,3,NULL,NULL),(435,29,4,NULL,NULL),(436,29,8,NULL,NULL),(437,29,9,NULL,NULL),(438,29,10,NULL,NULL),(439,29,11,NULL,NULL),(440,29,12,NULL,NULL),(441,29,14,NULL,NULL),(442,29,19,NULL,NULL),(443,29,21,NULL,NULL),(444,29,22,NULL,NULL),(445,29,28,NULL,NULL),(446,29,31,NULL,NULL),(447,29,34,NULL,NULL),(448,29,35,NULL,NULL),(449,29,37,NULL,NULL),(450,29,49,NULL,NULL),(451,29,50,NULL,NULL),(452,29,57,NULL,NULL),(453,29,63,NULL,NULL),(454,29,65,NULL,NULL),(455,29,69,NULL,NULL),(464,30,1,NULL,NULL),(465,30,2,NULL,NULL),(466,30,5,NULL,NULL),(467,30,8,NULL,NULL),(468,30,11,NULL,NULL),(469,30,14,NULL,NULL),(470,30,19,NULL,NULL),(471,30,30,NULL,NULL),(472,30,32,NULL,NULL),(473,30,35,NULL,NULL),(474,30,42,NULL,NULL),(475,30,43,NULL,NULL),(476,30,48,NULL,NULL),(477,30,49,NULL,NULL),(478,30,51,NULL,NULL),(479,30,53,NULL,NULL),(480,30,54,NULL,NULL),(481,30,57,NULL,NULL),(482,30,60,NULL,NULL),(483,30,61,NULL,NULL),(484,30,63,NULL,NULL),(485,30,65,NULL,NULL),(495,31,55,NULL,NULL),(496,32,56,NULL,NULL),(497,33,7,NULL,NULL),(498,33,28,NULL,NULL),(499,33,58,NULL,NULL),(500,34,59,NULL,NULL),(501,35,1,NULL,NULL),(502,35,60,NULL,NULL),(504,36,62,NULL,NULL),(505,37,64,NULL,NULL),(506,38,59,NULL,NULL),(507,38,61,NULL,NULL),(508,38,66,NULL,NULL),(509,40,7,NULL,NULL),(510,40,19,NULL,NULL),(511,40,29,NULL,NULL),(512,40,30,NULL,NULL),(513,40,36,NULL,NULL),(514,40,40,NULL,NULL),(515,40,46,NULL,NULL),(516,40,56,NULL,NULL),(517,40,58,NULL,NULL),(518,40,63,NULL,NULL),(519,40,65,NULL,NULL),(520,40,69,NULL,NULL),(521,40,70,NULL,NULL),(524,41,2,NULL,NULL),(525,41,4,NULL,NULL),(526,41,38,NULL,NULL),(527,42,2,NULL,NULL),(528,42,3,NULL,NULL),(529,42,4,NULL,NULL),(530,42,21,NULL,NULL),(531,42,28,NULL,NULL),(532,42,38,NULL,NULL),(533,42,52,NULL,NULL),(534,43,5,NULL,NULL),(535,44,7,NULL,NULL),(536,45,9,NULL,NULL),(537,46,1,NULL,NULL),(538,46,12,NULL,NULL),(540,47,14,NULL,NULL),(541,47,21,NULL,NULL),(542,47,32,NULL,NULL),(543,48,15,NULL,NULL),(544,49,16,NULL,NULL),(545,50,17,NULL,NULL),(546,50,24,NULL,NULL),(548,51,18,NULL,NULL),(549,51,37,NULL,NULL),(551,52,24,NULL,NULL),(552,52,55,NULL,NULL),(554,53,32,NULL,NULL),(555,53,61,NULL,NULL),(557,54,3,NULL,NULL),(558,54,33,NULL,NULL),(559,54,58,NULL,NULL),(560,54,69,NULL,NULL),(564,55,17,NULL,NULL),(565,55,27,NULL,NULL),(566,55,36,NULL,NULL),(567,55,50,NULL,NULL),(568,55,60,NULL,NULL),(569,55,62,NULL,NULL),(570,55,64,NULL,NULL),(571,56,10,NULL,NULL),(572,56,37,NULL,NULL),(574,57,41,NULL,NULL),(575,57,56,NULL,NULL),(576,57,68,NULL,NULL),(577,57,69,NULL,NULL),(581,58,5,NULL,NULL),(582,58,15,NULL,NULL),(583,58,27,NULL,NULL),(584,58,42,NULL,NULL),(585,58,57,NULL,NULL),(588,59,46,NULL,NULL),(589,60,49,NULL,NULL),(590,61,52,NULL,NULL),(591,61,53,NULL,NULL),(593,62,8,NULL,NULL),(594,62,12,NULL,NULL),(595,62,30,NULL,NULL),(596,62,32,NULL,NULL),(597,62,41,NULL,NULL),(598,62,48,NULL,NULL),(599,62,52,NULL,NULL),(600,62,54,NULL,NULL),(601,62,63,NULL,NULL),(602,62,66,NULL,NULL),(608,63,55,NULL,NULL),(609,63,61,NULL,NULL),(611,64,1,NULL,NULL),(612,64,2,NULL,NULL),(613,64,12,NULL,NULL),(614,64,19,NULL,NULL),(615,64,48,NULL,NULL),(616,64,49,NULL,NULL),(617,64,55,NULL,NULL),(618,64,57,NULL,NULL),(619,64,62,NULL,NULL),(620,64,63,NULL,NULL),(621,64,69,NULL,NULL),(626,65,10,NULL,NULL),(627,65,65,NULL,NULL),(629,66,68,NULL,NULL),(630,67,70,NULL,NULL),(631,68,10,NULL,NULL),(632,68,37,NULL,NULL),(633,68,65,NULL,NULL),(634,69,0,NULL,NULL),(635,69,35,NULL,NULL),(636,69,46,NULL,NULL),(637,69,48,NULL,NULL),(638,69,67,NULL,NULL),(641,70,3,NULL,NULL),(642,70,4,NULL,NULL),(643,70,5,NULL,NULL),(644,70,6,NULL,NULL),(645,70,7,NULL,NULL),(646,70,11,NULL,NULL),(647,70,15,NULL,NULL),(648,70,16,NULL,NULL),(649,70,17,NULL,NULL),(650,70,21,NULL,NULL),(651,70,22,NULL,NULL),(652,70,27,NULL,NULL),(653,70,28,NULL,NULL),(654,70,29,NULL,NULL),(655,70,30,NULL,NULL),(656,70,31,NULL,NULL),(657,70,33,NULL,NULL),(658,70,50,NULL,NULL),(659,70,52,NULL,NULL),(660,70,53,NULL,NULL),(661,70,58,NULL,NULL),(662,70,68,NULL,NULL),(663,70,70,NULL,NULL),(672,71,17,NULL,NULL),(673,72,18,NULL,NULL),(674,72,64,NULL,NULL),(676,73,22,NULL,NULL),(677,74,15,NULL,NULL),(678,74,29,NULL,NULL),(680,75,32,NULL,NULL),(681,76,3,NULL,NULL),(682,76,20,NULL,NULL),(683,76,30,NULL,NULL),(684,76,33,NULL,NULL),(685,76,34,NULL,NULL),(686,76,41,NULL,NULL),(688,77,36,NULL,NULL),(689,78,40,NULL,NULL),(690,79,3,NULL,NULL),(691,79,10,NULL,NULL),(692,79,41,NULL,NULL),(693,79,55,NULL,NULL),(694,79,56,NULL,NULL),(695,79,68,NULL,NULL),(697,80,48,NULL,NULL),(698,81,57,NULL,NULL),(699,82,22,NULL,NULL),(700,82,61,NULL,NULL),(701,82,65,NULL,NULL),(702,83,70,NULL,NULL),(703,84,6,NULL,NULL),(704,85,8,NULL,NULL),(705,86,9,NULL,NULL),(706,87,11,NULL,NULL),(707,88,0,NULL,NULL),(708,88,67,NULL,NULL),(710,89,14,NULL,NULL),(711,90,15,NULL,NULL),(712,90,53,NULL,NULL),(714,91,21,NULL,NULL),(715,92,22,NULL,NULL),(716,93,5,NULL,NULL),(717,93,29,NULL,NULL),(719,94,31,NULL,NULL),(720,94,68,NULL,NULL),(722,95,33,NULL,NULL),(723,96,36,NULL,NULL),(724,97,42,NULL,NULL),(725,98,43,NULL,NULL),(726,98,54,NULL,NULL),(728,99,46,NULL,NULL),(729,100,48,NULL,NULL),(730,101,51,NULL,NULL),(731,102,54,NULL,NULL),(732,103,9,NULL,NULL),(733,103,27,NULL,NULL),(734,103,64,NULL,NULL),(735,105,70,NULL,NULL),(736,106,2,NULL,NULL),(737,107,6,NULL,NULL),(738,107,21,NULL,NULL),(740,108,0,NULL,NULL),(741,108,67,NULL,NULL),(743,109,15,NULL,NULL),(744,109,69,NULL,NULL),(746,110,16,NULL,NULL),(747,111,32,NULL,NULL),(748,112,10,NULL,NULL),(749,112,12,NULL,NULL),(750,112,37,NULL,NULL),(751,112,38,NULL,NULL),(755,113,40,NULL,NULL),(756,114,43,NULL,NULL),(757,115,50,NULL,NULL),(758,116,51,NULL,NULL),(759,117,53,NULL,NULL),(760,118,57,NULL,NULL),(761,119,60,NULL,NULL),(762,120,65,NULL,NULL),(763,121,32,NULL,NULL),(764,121,49,NULL,NULL),(765,121,60,NULL,NULL),(766,121,66,NULL,NULL),(770,122,11,NULL,NULL),(771,122,43,NULL,NULL),(773,123,0,NULL,NULL),(774,123,56,NULL,NULL),(775,123,67,NULL,NULL),(776,124,16,NULL,NULL),(777,125,17,NULL,NULL),(778,126,24,NULL,NULL),(779,127,27,NULL,NULL),(780,128,28,NULL,NULL),(781,128,31,NULL,NULL),(783,129,33,NULL,NULL),(784,130,34,NULL,NULL),(785,131,40,NULL,NULL),(786,132,41,NULL,NULL),(787,133,42,NULL,NULL),(788,134,46,NULL,NULL),(789,135,50,NULL,NULL),(790,136,2,NULL,NULL),(791,136,28,NULL,NULL),(792,136,51,NULL,NULL),(793,137,56,NULL,NULL),(794,138,58,NULL,NULL),(795,139,18,NULL,NULL),(796,139,64,NULL,NULL),(798,140,70,NULL,NULL),(799,141,5,NULL,NULL),(800,141,20,NULL,NULL),(801,141,52,NULL,NULL),(802,142,6,NULL,NULL),(803,142,14,NULL,NULL),(804,142,40,NULL,NULL),(805,143,12,NULL,NULL),(806,144,14,NULL,NULL),(807,145,16,NULL,NULL),(808,146,18,NULL,NULL),(809,147,27,NULL,NULL),(810,148,30,NULL,NULL),(811,149,55,NULL,NULL),(812,150,70,NULL,NULL),(813,151,5,NULL,NULL),(814,152,7,NULL,NULL),(815,153,9,NULL,NULL),(816,154,11,NULL,NULL),(817,155,42,NULL,NULL),(818,155,67,NULL,NULL),(820,156,18,NULL,NULL),(821,157,31,NULL,NULL),(822,158,33,NULL,NULL),(823,159,17,NULL,NULL),(824,159,36,NULL,NULL),(826,160,37,NULL,NULL),(827,161,38,NULL,NULL),(828,162,55,NULL,NULL),(829,163,62,NULL,NULL),(830,164,66,NULL,NULL),(831,166,20,NULL,NULL),(832,167,22,NULL,NULL),(833,168,37,NULL,NULL),(834,168,61,NULL,NULL),(836,169,58,NULL,NULL),(837,170,63,NULL,NULL),(838,171,66,NULL,NULL),(839,172,70,NULL,NULL),(840,9,13,NULL,NULL),(841,23,13,NULL,NULL),(842,69,13,NULL,NULL),(843,108,13,NULL,NULL),(844,88,13,NULL,NULL),(845,123,13,NULL,NULL),(846,5,13,NULL,NULL),(847,155,13,NULL,NULL),(848,20,13,NULL,NULL),(1069,50,100,NULL,NULL),(1070,68,100,NULL,NULL),(1071,80,100,NULL,NULL),(1072,92,100,NULL,NULL),(1073,148,100,NULL,NULL),(1074,149,100,NULL,NULL),(1075,171,100,NULL,NULL),(1076,171,100,NULL,NULL),(1077,171,100,NULL,NULL);
/*!40000 ALTER TABLE `resource_tag` ENABLE KEYS */;
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