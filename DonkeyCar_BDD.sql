-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: cars_reservation
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brand` (
  `ID_BRAND` int NOT NULL AUTO_INCREMENT,
  `BRAND_CAR` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_BRAND`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand`
--

LOCK TABLES `brand` WRITE;
/*!40000 ALTER TABLE `brand` DISABLE KEYS */;
INSERT INTO `brand` VALUES (1,'Mercedes'),(2,'Audi'),(3,'BMW');
/*!40000 ALTER TABLE `brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_image`
--

DROP TABLE IF EXISTS `car_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `car_image` (
  `ID_IMG` int NOT NULL AUTO_INCREMENT,
  `ID_CAR` int DEFAULT NULL,
  `IMG_DESCRIPTION` varchar(50) DEFAULT NULL,
  `IMG_CAR` blob NOT NULL,
  PRIMARY KEY (`ID_IMG`),
  KEY `ID_CAR` (`ID_CAR`),
  CONSTRAINT `car_image_ibfk_1` FOREIGN KEY (`ID_CAR`) REFERENCES `cars` (`ID_CAR`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_image`
--

LOCK TABLES `car_image` WRITE;
/*!40000 ALTER TABLE `car_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `car_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `ID_CAR` int NOT NULL AUTO_INCREMENT,
  `COLOR` varchar(50) NOT NULL,
  `KILOMETER` int NOT NULL,
  `ENERGY` varchar(50) NOT NULL,
  `CAPACITY` int NOT NULL,
  `PRICE` float(8,2) NOT NULL,
  `YEAR_MODEL` int NOT NULL,
  `ID_CATEGORY` int DEFAULT NULL,
  PRIMARY KEY (`ID_CAR`),
  KEY `ID_CATEGORY` (`ID_CATEGORY`),
  CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`ID_CATEGORY`) REFERENCES `category` (`ID_CATEGORY`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'green',25000,'essence',2,120.00,2021,1),(2,'grey',27000,'essence',2,100.00,2020,2),(3,'orange',27000,'essence',5,140.00,2020,3),(4,'rouge',21000,'essence',5,130.00,2021,4),(5,'rouge',24000,'diesel',5,120.00,2019,5),(6,'bleu',29000,'diesel',5,110.00,2021,6),(7,'bleu',32000,'diesel',5,130.00,2022,7),(8,'bleu',32000,'diesel',5,130.00,2020,8),(9,'grise',21000,'diesel',5,110.00,2018,9);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `ID_CATEGORY` int NOT NULL AUTO_INCREMENT,
  `CATEGORY_CAR` varchar(50) NOT NULL,
  `ID_BRAND` int NOT NULL,
  `ID_MODEL` int NOT NULL,
  PRIMARY KEY (`ID_CATEGORY`),
  KEY `ID_BRAND` (`ID_BRAND`),
  KEY `ID_MODEL` (`ID_MODEL`),
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ID_BRAND`) REFERENCES `brand` (`ID_BRAND`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `category_ibfk_2` FOREIGN KEY (`ID_MODEL`) REFERENCES `model` (`ID_MODEL`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'coup├®',1,1),(2,'coup├®',2,5),(3,'coup├®',3,8),(4,'berline',1,2),(5,'berline',2,4),(6,'berline',3,7),(7,'SUV',1,3),(8,'SUV',2,6),(9,'SUV',3,9);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model` (
  `ID_MODEL` int NOT NULL AUTO_INCREMENT,
  `MODEL_CAR` varchar(50) NOT NULL,
  `model_img` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_MODEL`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model`
--

LOCK TABLES `model` WRITE;
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
INSERT INTO `model` VALUES (1,'GTS AMG','./img/merco.png'),(2,'Class C','./img/classC.png'),(3,'GLC','./img/glc.png'),(4,'RSQ 8','./img/rsq8.png'),(5,'A3','./img/A3.png'),(6,'Q5','./img/Q5.png'),(7,'SERIE 1','./img/serie1.png'),(8,'M4','./img/m4.png'),(9,'X3','./img/x3.png');
/*!40000 ALTER TABLE `model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment` (
  `ID_PAYMENT` int NOT NULL AUTO_INCREMENT,
  `PAYMENT_AMOUNT` float(8,2) NOT NULL,
  `PAYMENT_DATE` date NOT NULL,
  `CHARGE` float(8,2) DEFAULT NULL,
  PRIMARY KEY (`ID_PAYMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `ID_RESERVATION` int NOT NULL AUTO_INCREMENT,
  `ID_USER` int DEFAULT NULL,
  `ID_PAYMENT` int DEFAULT NULL,
  `ID_CAR` int DEFAULT NULL,
  `RENTAL_DATE_TIME` datetime NOT NULL,
  `RETURN_DATE_TIME` datetime NOT NULL,
  PRIMARY KEY (`ID_RESERVATION`),
  KEY `ID_USER` (`ID_USER`),
  KEY `ID_PAYMENT` (`ID_PAYMENT`),
  KEY `ID_CAR` (`ID_CAR`),
  CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ID_PAYMENT`) REFERENCES `payment` (`ID_PAYMENT`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`ID_CAR`) REFERENCES `cars` (`ID_CAR`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (1,NULL,NULL,NULL,'2022-03-17 15:09:06','2022-03-17 15:09:06'),(2,NULL,NULL,NULL,'2022-03-17 15:09:49','2022-03-17 15:09:49'),(3,NULL,NULL,NULL,'2022-03-17 15:15:32','2022-03-17 15:15:32'),(4,NULL,NULL,NULL,'2022-03-17 15:24:01','2022-03-17 15:24:01'),(5,NULL,NULL,NULL,'2022-03-17 15:25:32','2022-03-17 15:25:32'),(6,NULL,NULL,NULL,'2022-03-17 16:45:07','2022-03-17 16:45:07'),(7,NULL,NULL,NULL,'2022-03-17 16:46:25','2022-03-17 16:46:25'),(8,NULL,NULL,NULL,'2022-03-17 16:48:37','2022-03-17 16:48:37'),(9,NULL,NULL,NULL,'2022-03-17 16:50:29','2022-03-17 16:50:29'),(10,NULL,NULL,NULL,'2022-03-17 16:51:03','2022-03-17 16:51:03'),(11,NULL,NULL,NULL,'2022-03-17 16:55:01','2022-03-17 16:55:01'),(12,NULL,NULL,NULL,'2022-03-17 16:57:17','2022-03-17 16:57:17'),(13,NULL,NULL,NULL,'2022-03-17 16:58:12','2022-03-17 16:58:12'),(14,NULL,NULL,NULL,'2022-03-17 16:59:10','2022-03-17 16:59:10'),(15,NULL,NULL,NULL,'2022-03-17 17:03:34','2022-03-17 17:03:34'),(16,NULL,NULL,NULL,'2022-03-17 17:06:22','2022-03-17 17:06:22'),(17,NULL,NULL,NULL,'2022-03-17 17:07:38','2022-03-17 17:07:38'),(18,NULL,NULL,NULL,'2022-03-17 17:10:14','2022-03-17 17:10:14'),(19,NULL,NULL,NULL,'2022-03-17 17:11:13','2022-03-17 17:11:13'),(20,NULL,NULL,NULL,'2022-03-17 17:14:23','2022-03-17 17:14:23'),(21,NULL,NULL,NULL,'2022-03-17 17:15:02','2022-03-17 17:15:02'),(22,NULL,NULL,NULL,'2022-03-17 17:26:51','2022-03-17 17:26:51');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `ID_USER` int NOT NULL AUTO_INCREMENT,
  `ADRESS` varchar(100) DEFAULT NULL,
  `CONTACT` decimal(10,0) DEFAULT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'QUARTIERS NORD, Rue Sainte-Victorine, Marseille, France',NULL,'user',NULL,'1234');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-17 21:52:13
