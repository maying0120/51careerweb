-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: localhost    Database: 51web
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL);
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'ying','yingma@ny.edu','$2y$10$9P5HqL2K0YJqVuhP3.2izuf1GLOqTiCMxxr06n.u7y.A8Sls/csKG','',1,NULL,NULL),(2,'zhang','zhang@gmail.com','$2y$10$9P5HqL2K0YJqVuhP3.2izuf1GLOqTiCMxxr06n.u7y.A8Sls/csKG','',1,NULL,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'interview','interview1','2020-06-28 20:37:50','2020-06-28 20:37:50'),(3,'cv','cv1','2020-06-28 22:34:13','2020-06-28 22:34:13');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_posts`
--

DROP TABLE IF EXISTS `category_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_posts`
--

LOCK TABLES `category_posts` WRITE;
/*!40000 ALTER TABLE `category_posts` DISABLE KEYS */;
INSERT INTO `category_posts` VALUES (1,5,2,NULL,NULL),(2,5,3,NULL,NULL),(3,2,3,NULL,NULL),(4,3,2,'2020-07-05 05:49:20','2020-07-05 05:49:20'),(5,3,3,'2020-07-05 05:49:20','2020-07-05 05:49:20'),(6,6,3,'2020-09-22 18:35:05','2020-09-22 18:35:05'),(7,4,3,'2020-09-23 00:02:38','2020-09-23 00:02:38');
/*!40000 ALTER TABLE `category_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_06_17_044144_create_posts_table',1),(4,'2020_06_17_044538_create_tags_table',1),(5,'2020_06_17_045033_create_categories_table',1),(6,'2020_06_17_045205_create_category_posts_table',1),(7,'2020_06_17_045533_create_post_tags_table',1),(8,'2020_06_17_050249_create_admins_table',1),(9,'2020_06_17_050529_create_roles_table',1),(10,'2020_06_17_050705_create_admin_roles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `password_resets` VALUES ('yingma@nyu.edu','$2y$10$eC6johh/B1ck0k0nTcRGF.05XnCfKj.2gFtaCUvuvP.cM8DO.WWSy','2020-07-20 04:22:41');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tags`
--

DROP TABLE IF EXISTS `post_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tags`
--

LOCK TABLES `post_tags` WRITE;
/*!40000 ALTER TABLE `post_tags` DISABLE KEYS */;
INSERT INTO `post_tags` VALUES (2,4,2,NULL,NULL),(3,5,2,NULL,NULL),(4,5,4,NULL,NULL),(6,3,2,'2020-07-05 05:49:20','2020-07-05 05:49:20'),(7,3,4,'2020-07-05 05:49:20','2020-07-05 05:49:20'),(8,2,4,'2020-09-14 20:13:26','2020-09-14 20:13:26'),(9,6,2,'2020-09-22 18:35:05','2020-09-22 18:35:05'),(10,6,5,'2020-09-22 18:35:05','2020-09-22 18:35:05');
/*!40000 ALTER TABLE `post_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` int(11) NOT NULL DEFAULT '51',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'network flow','asfd','interview','<p style=\"text-align:center\"><strong>&nbsp; news</strong></p>\r\n\r\n<p>6月26日以来，西南地区东部、长江中下游部分地区累计降雨量100～300毫米，其中重庆、湖北、贵州、浙江局地350～483毫米，最大小时降雨量100～120毫米。东北、华北等地累计降雨量50毫米以上，局地100～281毫米。</p>\r\n\r\n<p>&nbsp;</p>',51,'public/image/CXAEC0HZvn5RyQPQtzmZQxlbfOVP3KOeMnAg9SAQ.jpeg','2020-09-14 20:13:26','2020-06-26 21:54:44',1),(3,'今日新闻1','baozha','1','<h1 style=\"text-align:center\">新闻</h1>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">时间已经进入2020年的下半场，我们已经见证了太多的历史，但我们还将见证新的历史，因为中美欧最近各发生的一件大事，毫无疑问，影响都相当深远。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　三件大事，都是趋势性的大事。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　我们就倒叙一下，先讲欧洲，再讲美国，最后讲中国。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　大事一，欧洲正在归来。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\">&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">&nbsp; &nbsp;<img alt=\"\" src=\"https://cdn.vuetifyjs.com/images/cards/foster.jpg\" style=\"height:300px; width:300px\" /></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　在欧洲国家中，英国情况最严重。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　但7月4日起，英国宣布，英格兰地区的餐厅、酒吧恢复营业，允许30人以下的聚集。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　北爱尔兰地区的酒吧、旅馆，此前已恢复营业；苏格兰据说将在6日跟进。萧条了几个月的英国这些行业，盼星星盼月亮，终于盼来了这一天。</span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:18px\"><span style=\"color:#4d4f53\"><span style=\"background-color:#ffffff\">　　满怀期待的第一名客人，喝到了封锁三个多月以来的第一杯来自酒吧的啤酒，既是拱手又是握拳，激动之情真是溢于言表。</span></span></span></p>',51,'public/image/ov5P0N6GcaJM9PSQBlNuQWGhLowmWzlccgnJWl5z.jpeg','2020-07-12 21:25:15','2020-06-29 00:05:18',1),(4,'asdf','22','22','<p>呃呃呃钱</p>',51,'public/image/2a4WWXGOCMrOH1tsBO1hY7Dw618tg7T0RUEjis4C.jpeg','2020-09-23 00:02:38','2020-07-04 00:00:09',1),(5,'NETWORK FLOWS THEORY ALGORITHMS AND APPLICATIONS','ss','11','<p>啦啦啦啦啦ggg</p>',51,'0','2020-07-06 00:02:20','2020-07-04 00:01:46',1),(6,'dfa','ss','interview','<p><u><strong>sfasd</strong></u></p>',51,'public/image/TAbRgewxfxdsrmG6VjrrFMivLNf6JRVGws6oU2o7.png','2020-09-23 00:03:17','2020-09-22 18:35:05',1);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'interview','interview','2020-06-25 05:27:13','2020-06-25 05:27:13'),(2,'resume','resume','2020-06-26 19:26:53','2020-06-26 19:26:53'),(4,'YING MA','1','2020-06-28 22:35:14','2020-06-28 22:35:14'),(5,'fasdf','111','2020-09-03 21:12:57','2020-09-03 21:12:57'),(6,'lily','1','2020-09-22 18:36:29','2020-09-22 18:36:29');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `state` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'maying','yingma@nyu.edu','$2y$10$CNQVxlCzh40kgBLOZxmTUuDhBz1wukJYvE2Njcn9FFDCZdKd.w7C6','r9AD3lu7TrUogBMIEBaA2NO42SLa8qfABwnTdubvVO0lZPIPeijT4V5Qmvzd','2020-07-19 05:43:42','2020-07-19 05:43:42','0','',''),(2,'ying','123456@qq.com','$2y$10$9P5HqL2K0YJqVuhP3.2izuf1GLOqTiCMxxr06n.u7y.A8Sls/csKG','j3h8db7V0F8t4KfWBNAifNfmNJQQhLsTc6rqDmLCsW5pCA34R4MuUykbgwlV','2020-07-19 07:48:08','2020-07-19 07:48:08','0','',''),(3,'lily','123@qq.com','$2y$10$VsVPQs8QqEnrrGxrAWVV0eAluI0e3.oNC.8bKXtJy2Hkv07J8U3JS','jmnBAd2bcsT4j8n51ZeqGmrgn4GW6krVzG6J2ae6mhotmpKxqRoY9Zz3tgNl','2020-07-19 10:49:17','2020-07-19 10:49:17','0','',''),(4,'Jane','1234567@qq.com','$2y$10$dKBdBbEI9OcflJY4U4Us..CHktmR/UUwwHbdOz8tE74PrfrYAZhTy','XBHnphmk5IF6inYxkNukUepZ6G6IJhbHvmLCGjcOp7gFQAO5rMrPLDseCgOq','2020-07-20 00:36:28','2020-07-20 00:36:28','3472005242','',''),(5,'lily11','lily11@qq.com','$2y$10$BKP/nBH13xm7HbzqET9ebO/Kchu/trVcn.tbsECDbFb/a5kpZj6V.','VHgUXjGZNnYikAAcEn8CAXXEyZmvN8q0BvxOdd5nXXiJFgxN8pT5bcCvdUnc','2020-07-20 03:39:01','2020-07-20 03:39:01','3472005243','0','0'),(6,'lily111','lily111@qq.com','$2y$10$2w/gxF7xa2JmJkT1TzCAlOSDLdKdGqxRtiCVi4qXFSeIn4FIMAkv.','K6DMQ1Iy8ybM6m8GMHdKarI44Gv6hqdajdypQrzJp3K5HZMU5jPSUDS0aNT5','2020-07-20 03:43:56','2020-07-20 03:43:56','3472005240','USA','NY'),(7,'lily2','maying@1234.edu','$2y$10$LKBy8z3T4/vaihIr5ZLpNeI1ZtU582Xm5QyTinCTbx49twivWYPyC','f4APfr8JlaryXKgArkGtyDtYg679vuhIZUCTKR4epIkd5rfasL633qWPqqcM','2020-09-17 07:15:51','2020-09-17 07:15:51','103472005242','美国','NY');
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

-- Dump completed on 2020-09-24 15:35:07
