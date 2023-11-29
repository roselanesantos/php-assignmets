CREATE DATABASE  IF NOT EXISTS `assignment_2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `assignment_2`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: assignment_2
-- ------------------------------------------------------
-- Server version	8.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `student_grade`
--

DROP TABLE IF EXISTS `student_grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_grade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `course1_grade_assignment_1` float DEFAULT NULL,
  `course1_grade_assignment_2` float DEFAULT NULL,
  `course1_project` float DEFAULT NULL,
  `course1_grade_test` float DEFAULT NULL,
  `course1_absences` int DEFAULT NULL,
  `course2_grade_assignment_1` float DEFAULT NULL,
  `course2_grade_assignment_2` float DEFAULT NULL,
  `course2_project` float DEFAULT NULL,
  `course2_grade_test` float DEFAULT NULL,
  `course2_absences` int DEFAULT NULL,
  `course3_grade_assignment_1` float DEFAULT NULL,
  `course3_grade_assignment_2` float DEFAULT NULL,
  `course3_project` float DEFAULT NULL,
  `course3_grade_test` float DEFAULT NULL,
  `course3_absences` int DEFAULT NULL,
  `course4_grade_assignment_1` float DEFAULT NULL,
  `course4_grade_assignment_2` float DEFAULT NULL,
  `course4_project` float DEFAULT NULL,
  `course4_grade_test` float DEFAULT NULL,
  `course4_absences` int DEFAULT NULL,
  `course5_grade_assignment_1` float DEFAULT NULL,
  `course5_grade_assignment_2` float DEFAULT NULL,
  `course5_project` float DEFAULT NULL,
  `course5_grade_test` float DEFAULT NULL,
  `course5_absences` int DEFAULT NULL,
  `course6_grade_assignment_1` float DEFAULT NULL,
  `course6_grade_assignment_2` float DEFAULT NULL,
  `course6_project` float DEFAULT NULL,
  `course6_grade_test` float DEFAULT NULL,
  `course6_absences` int DEFAULT NULL,
  `photo` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_grade`
--

LOCK TABLES `student_grade` WRITE;
/*!40000 ALTER TABLE `student_grade` DISABLE KEYS */;
INSERT INTO `student_grade` VALUES (6,'Roselane Santos','1987-04-27',25,15,25,20,1,15,25,15,20,0,10,20,20,15,3,14,16,25,17,3,25,25,25,25,0,20,15,15,15,1,NULL),(7,'Joao Alves','1990-02-02',15,15,18,17,26,21,8,9,5,8,20,20,20,20,5,15,15,16,17,5,9,10,15,9,30,13,8,9,10,2,NULL),(9,'teste','2023-11-28',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'/tmp/FuiHaG.png'),(10,'teste','2023-11-28',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'uploaddir/o8JaFCMkLP.png'),(11,'teste','2023-11-28',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'uploaddir/zwg8KolFsu.png'),(12,'teste','2023-11-28',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'uploaddir/6ZslJ0mxUN.png'),(13,'teste','2023-11-28',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'uploads//S2NJcquxsk.png');
/*!40000 ALTER TABLE `student_grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Roselane','roselane','12345','admin'),(2,'test','test','12345','user'),(6,'test2','test','12345','user');
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

-- Dump completed on 2023-11-28 23:52:30
