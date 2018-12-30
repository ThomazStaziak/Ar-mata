-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tcc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `produtos_masc`
--

DROP TABLE IF EXISTS `produtos_masc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_masc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `Nome_imagem` varchar(100) DEFAULT NULL,
  `Tamanho_imagem` varchar(100) DEFAULT NULL,
  `Tipo_imagem` varchar(100) DEFAULT NULL,
  `imagem` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_masc`
--

LOCK TABLES `produtos_masc` WRITE;
/*!40000 ALTER TABLE `produtos_masc` DISABLE KEYS */;
INSERT INTO `produtos_masc` VALUES (38,'Creme Hidratante Pitanga','A melhor soluÃ§Ã£o para todas as peles','28.00','CPM1.jpg','12988','image/jpeg',NULL),(39,'Creme hidratante Canela','A melhor soluÃ§Ã£o para todas as peles','28.00','CPM.png','52026','image/png',NULL),(46,'Creme Hidratante Alecrim','A melhor soluÃ§Ã£o para todas as peles','28.00','CPM3.jpg','12443','image/jpeg',NULL),(47,'Sabonete LÃ­quido Alecrim','A melhor soluÃ§Ã£o para todas as peles','21.00','SL3.jpg','11804','image/jpeg',NULL),(49,'Sabonete LÃ­quido Pitanga','A melhor soluÃ§Ã£o para todas as peles','61.00','SL2.png','55208','image/png',NULL);
/*!40000 ALTER TABLE `produtos_masc` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-02 17:01:01
