CREATE DATABASE  IF NOT EXISTS `lavadero` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lavadero`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: lavadero
-- ------------------------------------------------------
-- Server version	5.7.28-log

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
-- Table structure for table `carritos`
--

DROP TABLE IF EXISTS `carritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compra_id` int(11) DEFAULT NULL,
  `precio_final` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `compra_id` (`compra_id`),
  CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritos`
--

LOCK TABLES `carritos` WRITE;
/*!40000 ALTER TABLE `carritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `carritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compras`
--

DROP TABLE IF EXISTS `compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `carrito_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `carrito_id` (`carrito_id`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`),
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compras`
--

LOCK TABLES `compras` WRITE;
/*!40000 ALTER TABLE `compras` DISABLE KEYS */;
/*!40000 ALTER TABLE `compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'img/bolsaMediana.jpg','Lavanderia Small','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',236,'2019-11-15 03:07:38','2019-11-15 03:07:38'),(2,'img/bolsaMediana.jpg','Lavanderia Medium','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',325,'2019-11-15 03:23:10','2019-11-15 03:23:10'),(3,'img/bolsaMediana.jpg','Lavanderia Large','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',420,'2019-11-15 03:24:05','2019-11-15 03:24:05'),(4,'img/camisas.jpg','Camisas','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',123.5,'2019-11-15 14:14:38','2019-11-15 14:14:38'),(5,'img/sacos.jpg','Sacos','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.e',380,'2019-11-15 14:14:38','2019-11-15 14:14:38'),(6,'img/Pantalones.jpg','Pantalones Jeans','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',98.5,'2019-11-15 14:14:38','2019-11-15 14:14:38'),(7,'img/toallas.jpg','Toallas','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',53.9,'2019-11-15 14:14:38','2019-11-15 14:14:38'),(8,'img/RopaBebe.jpg','Ropa Delicada','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',254,'2019-11-15 14:14:38','2019-11-15 14:14:38'),(9,'img/acolchados.jpg','Acolchados','1- Separación de prendas:Se separan las prendas para su correcto lavado y luego se realiza un lavado modular. Cada cliente se lava de forma independiente.2- Dependiendo del tipo de trabajo se realizan las operaciones de secado en máquinas automáticas. 3- Doblado de cada una de las prendas.',478,'2019-11-15 14:14:39','2019-11-15 14:14:39');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_cart`
--

DROP TABLE IF EXISTS `products_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precio_final` float DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `carrito_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `producto_id` (`producto_id`),
  KEY `carrito_id` (`carrito_id`),
  CONSTRAINT `products_cart_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `products` (`id`),
  CONSTRAINT `products_cart_ibfk_2` FOREIGN KEY (`carrito_id`) REFERENCES `carritos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_cart`
--

LOCK TABLES `products_cart` WRITE;
/*!40000 ALTER TABLE `products_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `rol` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Yohana','Orona','Yoha','yohana@gmail.com','123456',NULL,NULL,'2019-11-13 18:36:58','2019-11-13 18:36:58'),(4,'Carla','Baracus','cbaracus','cbaracus@queti.com','$2y$10$Zt4Vkwgmcn6u/tltAamjhepvwPRB8uIwf/Tl7P8Xa74yVVq/TsJqu',NULL,NULL,'2019-11-15 02:33:02','2019-11-15 02:33:02'),(5,'Maria','Mora','Mari','maria@gmai.com','$2y$10$ICDGip6FFa1bl1QUgf7zD.D2TtFKUOIJn5PLo96CgDNUdj1F54VDq',NULL,NULL,'2019-11-15 18:28:55','2019-11-15 18:28:55'),(6,'fran',NULL,NULL,'locane.francisco@gmail.com','$2y$10$CrzDeN7JyqqrUd/dNHSlMu0vhBKyIiNJPGKmBr/72thjal3n9tGw6',NULL,'9','2019-12-10 01:36:07','2019-12-10 01:36:07'),(7,'yohana',NULL,NULL,'yoha@yoha.com','$2y$10$.5LzI6TI7ugBF1RwiuKluuhunPofsqbbbB.eJ3PWA5MNwKRfEz9pW',NULL,NULL,'2019-12-13 04:27:22','2019-12-13 04:27:22');
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

-- Dump completed on 2019-12-17 11:07:07
