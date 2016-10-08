CREATE DATABASE  IF NOT EXISTS `homerdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `homerdb`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: homerdb
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `adm`
--

DROP TABLE IF EXISTS `adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `adm_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adm`
--

LOCK TABLES `adm` WRITE;
/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHomer` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idHomer` (`idHomer`),
  CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`idHomer`) REFERENCES `homer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avaliacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAvaliador` int(11) NOT NULL,
  `idAvaliado` int(11) NOT NULL,
  `mensagem` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAvaliador` (`idAvaliador`),
  KEY `idAvaliado` (`idAvaliado`),
  CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`idAvaliador`) REFERENCES `homer` (`id`),
  CONSTRAINT `avaliacao_ibfk_2` FOREIGN KEY (`idAvaliado`) REFERENCES `homer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avaliacao`
--

LOCK TABLES `avaliacao` WRITE;
/*!40000 ALTER TABLE `avaliacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratacao`
--

DROP TABLE IF EXISTS `contratacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) NOT NULL,
  `idPrestador` int(11) NOT NULL,
  `idLocalizacao` int(11) NOT NULL,
  `dataInicio` date DEFAULT NULL,
  `dataFim` date DEFAULT NULL,
  `estadoServico` tinyint(1) DEFAULT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idCliente` (`idCliente`),
  KEY `idPrestador` (`idPrestador`),
  KEY `idLocalizacao` (`idLocalizacao`),
  CONSTRAINT `contratacao_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `homer` (`id`),
  CONSTRAINT `contratacao_ibfk_2` FOREIGN KEY (`idPrestador`) REFERENCES `homer` (`id`),
  CONSTRAINT `contratacao_ibfk_3` FOREIGN KEY (`idLocalizacao`) REFERENCES `localizacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratacao`
--

LOCK TABLES `contratacao` WRITE;
/*!40000 ALTER TABLE `contratacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denuncia`
--

DROP TABLE IF EXISTS `denuncia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `denuncia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idDenunciante` int(11) NOT NULL,
  `idDenunciado` int(11) NOT NULL,
  `dataDenuncia` date DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `resultado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idDenunciante` (`idDenunciante`),
  KEY `idDenunciado` (`idDenunciado`),
  CONSTRAINT `denuncia_ibfk_1` FOREIGN KEY (`idDenunciante`) REFERENCES `homer` (`id`),
  CONSTRAINT `denuncia_ibfk_2` FOREIGN KEY (`idDenunciado`) REFERENCES `homer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denuncia`
--

LOCK TABLES `denuncia` WRITE;
/*!40000 ALTER TABLE `denuncia` DISABLE KEYS */;
/*!40000 ALTER TABLE `denuncia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHomer` int(11) NOT NULL,
  `idFavoritado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idHomer` (`idHomer`),
  KEY `idFavoritado` (`idFavoritado`),
  CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`idHomer`) REFERENCES `homer` (`id`),
  CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`idFavoritado`) REFERENCES `homer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoritos`
--

LOCK TABLES `favoritos` WRITE;
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico`
--

DROP TABLE IF EXISTS `historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idContratacao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idContratacao` (`idContratacao`),
  CONSTRAINT `historico_ibfk_1` FOREIGN KEY (`idContratacao`) REFERENCES `contratacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico`
--

LOCK TABLES `historico` WRITE;
/*!40000 ALTER TABLE `historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homer`
--

DROP TABLE IF EXISTS `homer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `homer_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homer`
--

LOCK TABLES `homer` WRITE;
/*!40000 ALTER TABLE `homer` DISABLE KEYS */;
/*!40000 ALTER TABLE `homer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homerprestador`
--

DROP TABLE IF EXISTS `homerprestador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homerprestador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idHomer` int(11) NOT NULL,
  `areaAtuacao` varchar(25) DEFAULT NULL,
  `tipoConta` enum('normal','profissional') DEFAULT 'normal',
  PRIMARY KEY (`id`),
  KEY `idHomer` (`idHomer`),
  CONSTRAINT `homerprestador_ibfk_1` FOREIGN KEY (`idHomer`) REFERENCES `homer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homerprestador`
--

LOCK TABLES `homerprestador` WRITE;
/*!40000 ALTER TABLE `homerprestador` DISABLE KEYS */;
/*!40000 ALTER TABLE `homerprestador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localizacao`
--

DROP TABLE IF EXISTS `localizacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localizacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(30) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `cLatitude` int(11) DEFAULT NULL,
  `cLongitude` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localizacao`
--

LOCK TABLES `localizacao` WRITE;
/*!40000 ALTER TABLE `localizacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `localizacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logusuario`
--

DROP TABLE IF EXISTS `logusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `dataLog` date DEFAULT NULL,
  `operacao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `logusuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logusuario`
--

LOCK TABLES `logusuario` WRITE;
/*!40000 ALTER TABLE `logusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `logusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propaganda`
--

DROP TABLE IF EXISTS `propaganda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propaganda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` varchar(50) DEFAULT NULL,
  `tempoDuracao` tinyint(4) DEFAULT NULL,
  `qtdExibicao` tinyint(4) DEFAULT NULL,
  `qtdExibido` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propaganda`
--

LOCK TABLES `propaganda` WRITE;
/*!40000 ALTER TABLE `propaganda` DISABLE KEYS */;
/*!40000 ALTER TABLE `propaganda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-03 19:08:31
