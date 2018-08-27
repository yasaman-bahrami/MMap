-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: mmap
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `original-tags`
--

DROP TABLE IF EXISTS `original-tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `original-tags` (
  `tag` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `original-tags`
--

LOCK TABLES `original-tags` WRITE;
/*!40000 ALTER TABLE `original-tags` DISABLE KEYS */;
INSERT INTO `original-tags` VALUES ('Identity'),('Food'),('Small Business'),('English Language'),('Community'),('First Impressions'),('Portuguese Fishermen'),('Student Life'),('Music'),('Family'),('Religion'),('Polish People'),('Ceremony'),('Newfoundlanders'),('History'),('Change'),('Culture'),('Italian Restaurant'),('Challenges'),('Festivity'),('Politics'),('Education'),('Celebration'),('Footwear'),('Indian Culture'),('Japanese Language'),('Forced Culture'),('Indigenous People'),('Experience'),('Mentality'),('African Clothing'),('Sport'),('Drink'),('Beothuk People'),('Chinese People'),('Expropriation'),('Canadian History'),('Belonging'),('Catholic Community'),('Encounter'),('Culture'),('Cooking'),('Grocery'),('Challenges'),('Portuguese Food'),('Identity'),('Japanese People'),('Experience'),('Ukrainian Culture'),('Education'),('Korean People'),('Celebration'),('Culture Shock'),('Inclusion'),('Hindu Tample'),('Visual Art'),('Film'),('Tradition'),('Community'),('Drink'),('Change'),('Immigrant Experience'),('Employment'),('Government'),('Arrival'),('Clothing'),('Multiculturalism'),('Ghanaian Music'),('Indigenous Experience'),('Family'),('Traditional Food'),('Food'),('Difference'),('Heritage'),('Encounter'),('Sociality'),('Festivity'),('Politics'),('Belonging'),('Religion'),('Winter'),('Portuguese Fishermen'),('Tailor'),('Portuguese People'),('Korean People'),('Grocery'),('Employment'),('Student Life'),('Culture'),('Food'),('Japanese Language'),('Community'),('Identity'),('Weather'),('Family'),('Education'),('Music Making'),('Indian Culture'),('Trade'),('Painting'),('Jewish History'),('Sociality'),('Portuguese Fishermen'),('Culture Shock'),('Newfoundland History'),('Festivity'),('Multiculturalism'),('Challenges'),('Travel'),('Refugee Experience'),('Material Culture'),('Soldier'),('Indian Community'),('Fashion'),('Mentality'),('Encounter'),('African Music'),('History'),('Difference'),('Traditional Food'),('New Canadian People'),('Government'),('Heritage'),('Language'),('Clothing'),('Sports'),('Chinese People'),('Culture'),('Trade'),('Grocery'),('Multiculturalism'),('Cultural Fusion'),('Drink'),('Character'),('Ukrainian Language'),('Winter'),('Portuguese Language'),('Student Life'),('Lebanese Culture'),('Caucasian Culture'),('Islam'),('History'),('Japan'),('African History'),('Indigenous People'),('Government'),('Tourism'),('Encounter'),('Family Business'),('Mentality'),('Crafts'),('Indian Culture'),('Military'),('First Impressions'),('Food'),('Religion'),('Difference'),('Diversity'),('Canadian Culture'),('Éwé Culture'),('African Dance'),('Politics'),('African Community'),('Nigerian Culture'),('Fashion'),('Clothing'),('Employment'),('Challenges'),('Immigration'),('Weather'),('Latin'),('Experience'),('Portuguese Culture'),('Newfoundlanders'),('Lebanese Food'),('Material Culture'),('Culture'),('Tourism'),('Japanese Food'),('Difference'),('Immigration'),('Arrival'),('Religion'),('Experience'),('Musical Style'),('Mentality'),('Muslim Community'),('Taste'),('Trade'),('Family'),('Identity'),('Challenges'),('Politics'),('History'),('Food'),('Children'),('Nature'),('Grocery'),('Ritual'),('Japanese Culture'),('Music Making'),('Russia'),('Ghanaian Food'),('Ethnic Grocery'),('Tradition'),('Fashion'),('Refugees'),('Commemoration'),('Change'),('Transportation'),('Racism'),('Mentality'),('Sociality'),('Fashion'),('Trade'),('Encounter'),('Education'),('History'),('Experience'),('Literature'),('Nature'),('Musical Instruments'),('Travel'),('Leisure'),('Law'),('Religion'),('Japanese Food'),('Collaboration'),('Spanish Language'),('Italian Food'),('Festivity'),('Difference'),('Culture Shock'),('Kenyan Crafts'),('Hinduism'),('Community'),('Newfoundlanders'),('Challenges'),('Ocean'),('Customs'),('Provincialism'),('Sound Symposium'),('Cuba'),('Canadian Food'),('Music'),('Ceremony'),('Games'),('Communication'),('Indigenous People'),('Immigrant Experience'),('Jewish Community'),('Culture'),('Irish Culture'),('Identity'),('Canadian Food'),('Challenges'),('Experience'),('Home'),('Intergenerationality'),('History'),('Weather'),('Trade'),('Memorial University'),('Community'),('Expectations'),('Culture'),('Indian Food'),('Government'),('European History'),('Sociality'),('Language'),('Latin American Culture'),('Wealth'),('Difference'),('Education'),('Encounter'),('Film'),('Nature'),('Festivity'),('Material Culture'),('Literature'),('Celebration'),('Music Making'),('Mentality'),('Islam'),('Canadian Culture'),('Western Clothing'),('Music'),('Newfoundlanders'),('Folklore'),('Experience'),('History'),('Cooking'),('Newfoundland Food'),('Family'),('Fishing'),('Mentality'),('Ukrainian People'),('Nature'),('Poetry'),('Difference'),('Dance'),('Intergenerationality'),('Inclusion'),('Newfoundlanders'),('Jewish Culture'),('Encounter'),('Festivity'),('Trade'),('Culture'),('Visual Art'),('Canadian Food'),('Produce'),('Jewellery'),('Education'),('Love'),('Expectation'),('Play'),('Celebration'),('Racism'),('Change'),('Community'),('Style'),('Belonging'),('Language'),('Geography'),('Government'),('Jazz Culture'),('Portuguese Community'),('Fashion'),('Employment'),('Sociality'),('Mentality'),('Education'),('Culture'),('Trade'),('Family'),('Fashion'),('Festivity'),('Community'),('Multiculturalism'),('Change'),('Love'),('Jewish Community'),('Experience'),('Catholicism'),('African People'),('Celebration'),('History'),('Food'),('Racism'),('Names'),('Encounter'),('Dance'),('English Language'),('Difference'),('Identity'),('Challenges'),('Musical Instruments'),('Religion'),('Boyhood'),('Public Culture'),('Arabic culture'),('British Culture');
/*!40000 ALTER TABLE `original-tags` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-28 16:22:26
