CREATE DATABASE  IF NOT EXISTS `studprogress` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `studprogress`;
-- MySQL dump 10.13  Distrib 5.6.25, for debian-linux-gnu (i686)
--
-- Host: 192.168.101.81    Database: studprogress
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Asela Franndo','No 102,Del street, Mahara','+94775845632'),(2,'Jagath Wijenayaka','No 47/2, Maharagama','+945652369'),(3,'Ayesh Dias','No 54, Mal Street, Colomco5','+945878963'),(4,'Praba Dias','No 45, Kandy Rd,Kadawatha','+945652369'),(5,'Suresh Bandara','No 45','+947858654');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students_subjects`
--

DROP TABLE IF EXISTS `students_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students_subjects` (
  `Studentsid` int(10) NOT NULL,
  `Subjectsname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Used to display subject status like pending/complete',
  PRIMARY KEY (`Studentsid`,`Subjectsname`),
  KEY `FKStudents_S45734` (`Studentsid`),
  KEY `FKStudents_S560783` (`Subjectsname`),
  CONSTRAINT `FKStudents_S45734` FOREIGN KEY (`Studentsid`) REFERENCES `students` (`id`),
  CONSTRAINT `FKStudents_S560783` FOREIGN KEY (`Subjectsname`) REFERENCES `subjects` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students_subjects`
--

LOCK TABLES `students_subjects` WRITE;
/*!40000 ALTER TABLE `students_subjects` DISABLE KEYS */;
INSERT INTO `students_subjects` VALUES (1,'Econ',''),(1,'English',NULL),(1,'Maths',''),(1,'Science',''),(2,'English',''),(2,'Maths',NULL),(2,'Science',NULL),(3,'Science',NULL),(4,'Maths',NULL);
/*!40000 ALTER TABLE `students_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students_topics`
--

DROP TABLE IF EXISTS `students_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students_topics` (
  `Studentsid` int(10) NOT NULL,
  `Topicstitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spendhours` int(10) DEFAULT NULL,
  `revisionhours` int(10) DEFAULT NULL,
  PRIMARY KEY (`Studentsid`,`Topicstitle`),
  KEY `FKStudents_T327593` (`Topicstitle`),
  KEY `FKStudents_T192108` (`Studentsid`),
  CONSTRAINT `FKStudents_T192108` FOREIGN KEY (`Studentsid`) REFERENCES `students` (`id`),
  CONSTRAINT `FKStudents_T327593` FOREIGN KEY (`Topicstitle`) REFERENCES `topics` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students_topics`
--

LOCK TABLES `students_topics` WRITE;
/*!40000 ALTER TABLE `students_topics` DISABLE KEYS */;
INSERT INTO `students_topics` VALUES (1,'Elastisity',0,0),(2,'Methods of science',0,0),(3,'Micro Economy',0,0),(3,'Passive Voice',NULL,NULL),(4,'Methods of science',NULL,NULL),(5,'Passive Voice',0,0);
/*!40000 ALTER TABLE `students_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hours` int(10) DEFAULT NULL COMMENT 'Total study hours for subject this equal to total syllabus hours',
  `revisionhours` int(10) DEFAULT NULL COMMENT 'Total study revision hours for subject this equal to total syllabus revision hours',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES ('Econ',80,60),('English',100,60),('Logic',14,12),('Maths',120,80),('Science',120,80);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minimumhours` int(10) DEFAULT NULL,
  `subjectsname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minrevisionhours` int(10) DEFAULT NULL,
  PRIMARY KEY (`title`),
  KEY `FKTopics801865` (`subjectsname`),
  CONSTRAINT `FKTopics801865` FOREIGN KEY (`subjectsname`) REFERENCES `subjects` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES ('Elastisity',6,'Econ',5),('Human System',5,'Science',5),('Macro Economy',8,'Econ',6),('Methods of science',6,'Logic',5),('Micro Economy',8,'Econ',5),('Passive Voice',5,'English',4),('Science ',5,'Logic',4),('Tenses',5,'English',5);
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-29 19:10:48
