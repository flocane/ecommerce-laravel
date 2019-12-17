CREATE DATABASE  IF NOT EXISTS `lavadero` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lavadero`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: lavadero
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.16-MariaDB

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
-- Table structure for table `carritos`
--

DROP TABLE IF EXISTS `carritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compra_id` int(11) DEFAULT NULL,
  `precio_final` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `carrito_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `carrito_id` (`carrito_id`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `precio_final` float DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `carrito_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Fran','locane','Arregui 6074',1408,'locane.francisco@gmail.com',NULL,NULL,'$2y$10$sS9OKM9crpH.ygkfdkiZVOGdlCgK1Mhw7/73iUrZa.DUgzt3f0xAW',NULL,'2019-12-17 22:44:57','2019-12-17 23:13:47',9);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Yohana','Orona','Yoha','yohana@gmail.com','123456',NULL,NULL,'2019-11-13 18:36:58','2019-11-13 18:36:58'),(4,'Carla','Baracus','cbaracus','cbaracus@queti.com','$2y$10$Zt4Vkwgmcn6u/tltAamjhepvwPRB8uIwf/Tl7P8Xa74yVVq/TsJqu',NULL,NULL,'2019-11-15 02:33:02','2019-11-15 02:33:02'),(5,'Maria','Mora','Mari','maria@gmai.com','$2y$10$ICDGip6FFa1bl1QUgf7zD.D2TtFKUOIJn5PLo96CgDNUdj1F54VDq',NULL,NULL,'2019-11-15 18:28:55','2019-11-15 18:28:55'),(6,'fran',NULL,NULL,'locane.francisco@gmail.com','$2y$10$CrzDeN7JyqqrUd/dNHSlMu0vhBKyIiNJPGKmBr/72thjal3n9tGw6',NULL,'9','2019-12-10 01:36:07','2019-12-10 01:36:07'),(7,'yohana',NULL,NULL,'yoha@yoha.com','$2y$10$.5LzI6TI7ugBF1RwiuKluuhunPofsqbbbB.eJ3PWA5MNwKRfEz9pW',NULL,NULL,'2019-12-13 04:27:22','2019-12-13 04:27:22'),(8,'fran',NULL,NULL,'fran@gmail.com','$2y$10$AVx4LC9gh5ZqJZBQefSDjOrMtCwXB461xi.ilaMhGkDXgGpPrAxd.',NULL,NULL,'2019-12-17 21:40:11','2019-12-17 21:40:11'),(9,'snake',NULL,NULL,'snake@hotmail.com','$2y$10$duxxtxqJiNnfkIqoXX5lCuRdKlXYkpVD2ZzieBOS3/fT88x2hpQHa',NULL,NULL,'2019-12-17 22:06:14','2019-12-17 22:06:14');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-17 18:05:53
