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
-- Table structure for table `produtos_fem`
--

DROP TABLE IF EXISTS `produtos_fem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos_fem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `Nome_imagem` varchar(100) DEFAULT NULL,
  `Tamanho_imagem` varchar(100) DEFAULT NULL,
  `Tipo_imagem` varchar(100) DEFAULT NULL,
  `imagem` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos_fem`
--

LOCK TABLES `produtos_fem` WRITE;
/*!40000 ALTER TABLE `produtos_fem` DISABLE KEYS */;
INSERT INTO `produtos_fem` VALUES (13,'Ãgua Perfumada Alecrim','Produto criado para aromatizar sua casa','40.00','aguaa.jpg','12031','image/jpeg',NULL),(14,'Ãgua Perfumada Pitanga','Produto criado para aromatizar sua roupa','40.00','aguar4.jpg','11096','image/jpeg',NULL),(15,'Ãgua Perfumada Lavanda','Produto criado para aromatizar sua casa','54.00','aguaa3.jpg','10180','image/jpeg',NULL),(16,'Difusores Pitanga ','Produto criado para aromatizar sua casa','28.00','difuso5.jpg','6199','image/jpeg',NULL),(17,'Difusores Canela','Produto criado para aromatizar sua casa','28.00','difuso3.jpg','6812','image/jpeg',NULL),(18,'Difusores Lavanda','Produto criado para aromatizar sua casa','28.00','difuso4.jpg','6380','image/jpeg',NULL),(19,'Agua de cheiro+akdasjdsaj','Produto criado para aromatizar sua casa','28.00','','0','',NULL);
/*!40000 ALTER TABLE `produtos_fem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-02 17:01:03
