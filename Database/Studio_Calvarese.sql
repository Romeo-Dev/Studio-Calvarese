CREATE DATABASE  IF NOT EXISTS `Studio_Calvarese` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Studio_Calvarese`;
-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: Studio_Calvarese
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `about_uses`
--

DROP TABLE IF EXISTS `about_uses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `about_uses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `immagine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chi_siamo` longtext COLLATE utf8mb4_unicode_ci,
  `about_us` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_uses`
--

LOCK TABLES `about_uses` WRITE;
/*!40000 ALTER TABLE `about_uses` DISABLE KEYS */;
INSERT INTO `about_uses` VALUES (1,'About us.jpg','<p>Gianluca e Piero Calvarese sono dei professionisti del settore wedding e con la loro professionalit&agrave; e la loro passione sapranno interpretare ogni istante rendendolo unico e indimenticabile. Il vostro grande giorno sar&agrave; ricordato per sempre grazie a immagini spelndide e senza tempo e a una immancabile simpatia. Gianluca Calvarese lavora nel campo della fotografia da oltre venti anni, seguito successivamente da suo figlio Piero appassionato di cinema e attuale videografo, ricercando continuamente nuovi spunti, continuando a studiare e a formarsi per offrire sempre un servizio fotografico impeccabile, capace di suscitare ogni volta forti emozioni.</p>','Gianluca and Piero Calvarese are specialized in the wedding sector and with their professionalism and passion they will be able to interpret every moment making it unique and unforgettable. Your big day will be remembered forever thanks to spelndide and timeless images and an unfailing sympathy. Gianluca Calvarese has worked in the field of photography for over twenty years, followed by his son Piero, passionate about cinema and current videographer, constantly looking for new ideas, continuing research and training to always offer an impeccable photographic service, able to evoke strong emotions every time. ',NULL,NULL);
/*!40000 ALTER TABLE `about_uses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Matrimoni',NULL,NULL),(5,'Tutorial',NULL,NULL),(6,'Feste',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,3,5,'Lorem ipsum dolor sit amet, ex quo everti interesset, ne eos deterruisset mediocritatem. His in facilisi mandamus, ius possim civibus erroribus ne, consul interesset ea vis. Ut prima saepe suavitate pro, suas habemus tincidunt ex qui. Quas simul no mei, quot dictas perfecto vis no. Est te diceret mentitum contentiones, iusto iisque diceret te mea, sed modus graeci oportere et. Eu diam salutatus disputando vix, eu pri viri ornatus, populo aliquid te usu.','2019-02-08 09:42:28.719018',NULL,NULL),(2,3,6,'Has platonem assentior no, ei summo perfecto inciderint vix, ne eum esse apeirian. Eos summo latine sapientem ut. Populo scriptorem conclusionemque ea est, ne mel tritani nostrud assueverit, habeo corpora sensibus in vix. Id melius salutatus pro, noster constituto est an.','2019-02-08 09:42:28.719018',NULL,NULL),(3,4,5,'Mei eu mediocrem pertinacia, dicit maiorum corrumpit ex ius, cibo fastidii sea ei. Et nostro docendi est, usu in melius vocent iisque, possim pertinacia cum ad. Saperet petentium per ei. Mea facilisis persecuti voluptatibus ut, vis utinam consequuntur ne. Nam ex falli laudem aperiri, te vix dicam iudico ullamcorper.','2019-02-08 09:42:28.719018',NULL,NULL),(4,1,5,'Ut vide nostrud debitis pri, congue option alienum ei mel. Id quo augue harum eripuit, at nominavi ullamcorper eum. Te nulla forensibus mnesarchum per. Vim errem legimus constituam ei, veniam gloriatur ad sit, eu mea facer novum partiendo. Cu qui voluptua convenire.','2019-02-08 09:42:28.719018',NULL,NULL),(5,2,5,'Ne per diam prompta principes. Et usu diam intellegat instructior, ei feugait dignissim abhorreant eum. Quodsi aperiam pro ne, agam fuisset assueverit duo cu, te omnes nonumy doming vix. Soleat fabulas imperdiet eos et, an usu tale suas, ea sed liber oporteat. Mei ex noluisse atomorum.\n','2019-02-08 09:42:28.719018',NULL,NULL),(6,4,5,'primo commento faccio commit','2019-02-08 11:26:11.601421','2019-02-08 10:26:11','2019-02-08 10:26:11'),(7,3,1,'Ottimo blog il mio voto e 10/10 scegliero Pieroph per il mio prossimo evento','2019-02-08 14:19:30.178823','2019-02-08 13:19:30','2019-02-08 13:19:30'),(11,3,1,'questo è un commento di prova','2019-02-08 14:22:51.820589','2019-02-08 13:22:51','2019-02-08 13:22:51'),(12,5,5,'mare','2019-02-10 17:02:23.529990','2019-02-10 16:02:23','2019-02-10 16:02:23'),(13,4,3,'Questo e il mio commento','2019-02-12 14:51:58.400786','2019-02-12 13:51:58','2019-02-12 13:51:58'),(14,4,1,'Secondo commento di oggi','2019-02-12 14:52:15.100743','2019-02-12 13:52:15','2019-02-12 13:52:15');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact` mediumtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_via` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'<p>Lo Studio Fotografico Calvarese si trova in <strong>Via Pace 10</strong> a <strong>San Benedetto dei Marsi (AQ)</strong>, puoi contattarci al numero telefonico <strong>0863 867 767</strong> oppure compilando il seguente form:</p>','https://www.facebook.com/StudiofotograficoCalvarese/','https://www.instagram.com/studio_fotografico_calvarese/?hl=it&fbclid=IwAR24JO5EwH9-IKbDrFygLfcLsO6iBnE3N4SYsCLl9vTZHDv8MJO838K9kLs','fotocalvarese@gmail.com','0863 867767','<p>Via Pace 10&nbsp; San Benedetto dei Marsi (AQ)</p>','https://www.google.com/maps/place/Via+Pace,+10,+67058+San+Benedetto+dei+Marsi+AQ/@42.0052982,13.6251422,3a,75y,229.02h,87.66t/data=!3m6!1e1!3m4!1s--kAg7bokC_HbzHceHrR4w!2e0!7i13312!8i6656!4m5!3m4!1s0x13301ed116164e7f:0xa06c719d14975f14!8m2!3d42.003812!4d13.628592',NULL,NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_service`
--

DROP TABLE IF EXISTS `group_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_service_group_id_foreign` (`group_id`),
  KEY `group_service_service_id_foreign` (`service_id`),
  CONSTRAINT `group_service_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  CONSTRAINT `group_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_service`
--

LOCK TABLES `group_service` WRITE;
/*!40000 ALTER TABLE `group_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ruolo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin',NULL,NULL),(2,'normal user',NULL,NULL);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `posizione` enum('cover','right','left','various') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_post_id_foreign` (`post_id`),
  CONSTRAINT `images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'GDF_2450.JPG','stampe','cover',NULL,NULL),(2,1,'NIK_0004.JPG','published','left',NULL,NULL),(3,1,'NIK_0012.JPG','published','right',NULL,NULL),(4,1,'NIK_9990.JPG','stampe','various',NULL,NULL),(5,2,'GDF_6565 copia.jpg','published','cover',NULL,NULL),(6,2,'GDF_6581 copia.jpg','published','left',NULL,NULL),(7,2,'NIK_4973 copia.jpg','published','right',NULL,NULL),(8,2,'NIK_4996 copia.jpg','published','various',NULL,NULL),(9,3,'DSC_3754 copia.jpg','published','cover',NULL,NULL),(10,3,'DSC_3814 copia.jpg','published','various',NULL,NULL),(11,3,'GDF_7090 copia.jpg','published','left',NULL,NULL),(12,3,'GDF_7107 copia.jpg','published','right',NULL,NULL),(13,4,'NIK_2061.jpg','published','cover',NULL,NULL),(14,4,'GDF_4583 copia.jpg','stampe','left',NULL,NULL),(15,4,'GDF_4550 copia.jpg','stampe','right',NULL,NULL),(16,4,'NIK_2073.jpg','published','various',NULL,NULL),(18,5,'estateleft.jpg','published','left',NULL,NULL),(19,5,'ruinmylife.jpg','published','cover',NULL,NULL),(20,5,'sottacqua.jpg','published','various',NULL,NULL),(21,5,'costaright.jpeg','published','right',NULL,NULL),(22,6,'invernocover.jpg','published','cover',NULL,NULL),(23,6,'invernoarious.jpg','published','left',NULL,NULL),(24,6,'invernoleft.jpg','published','right',NULL,NULL),(25,6,'sunsetright.jpg','published','various',NULL,NULL),(26,7,'autumncover1.jpg','published','cover',NULL,NULL),(27,7,'stradaleft.jpg','published','left',NULL,NULL),(28,7,'ponteright.jpg','published','right',NULL,NULL),(29,7,'autumncover.jpg','published','various',NULL,NULL),(30,8,'NIK_5970 copia.jpg','published','cover',NULL,NULL),(31,8,'NIK_5980 copia.jpg','published','left',NULL,NULL),(32,8,'NIK_6010 copia.jpg','published','right',NULL,NULL),(33,8,'NIK_6175 copia.jpg','published','various',NULL,NULL),(34,8,'GDF_6542 copia.jpg','published','various',NULL,NULL),(35,8,'GDF_6537 copia.jpg','published','various',NULL,NULL),(36,8,'GDF_6225 copia.jpg','published','various',NULL,NULL),(37,8,'soap-bubble-1958650_960_720.jpg','published','various',NULL,NULL),(41,10,'DSC_5809 copia.jpg','published','cover',NULL,NULL),(42,10,'DSC_5821 copia.jpg','published','left',NULL,NULL),(43,10,'01.jpg','published','right',NULL,NULL),(44,10,'GDF_5898 copia.jpg','published','various',NULL,NULL),(45,10,'GDF_5865 copia.jpg','published','various',NULL,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `risposta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'Romeo','De Vincentis','romeo@email.com','Questo e il primo messaggio inviato dal sito di piero per controllare la validita e la fruibilita e l efficenza del sito','no','2019-02-09 15:46:33','2019-02-09 14:46:33','2019-02-09 14:46:33'),(2,'Lorenzo','Iapadre','iap@gmail.com','Questo e il primo messaggio da utente autenticato gestito tramite if e else  in base al guest speriamo funzioni','no','2019-02-09 16:08:04','2019-02-09 15:08:04','2019-02-09 15:08:04'),(3,'Romeo','De Vincentis','romeo@email.com','Provo a inviarmi dell email da solo per vedere il giusto e corretto funzionamento  dei message','no','2019-02-09 16:21:24','2019-02-09 15:21:24','2019-02-09 15:21:24'),(4,'Vincenzo','Giandomenico','giando@email.com','il primo messaggio di vincenzo al sito di pieroph','no','2019-02-10 16:58:53','2019-02-10 15:58:53','2019-02-10 15:58:53'),(5,'antonio','giandomenico','antog727@gmail.com','ciao','no','2019-02-10 16:59:57','2019-02-10 15:59:57','2019-02-10 15:59:57'),(6,'Lorenzo','Iapadre','iap@gmail.com','Questo e il primo messaggio di piero autenticato','no','2019-02-12 14:54:34','2019-02-12 13:54:34','2019-02-12 13:54:34'),(7,'Piero','Calvarese','pieroph@emil.com','Questo e il messagigio di piero non autenticatio','no','2019-02-12 14:55:13','2019-02-12 13:55:13','2019-02-12 13:55:13');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (5,'2014_10_12_000000_create_users_table',1),(6,'2014_10_12_100000_create_password_resets_table',1),(7,'2019_01_31_134028_create_services_table',1),(8,'2019_01_31_134419_create_groups_table',1),(9,'2019_01_31_145634_create_group_user_table',1),(10,'2019_01_31_145649_create_group_service_table',1),(11,'2019_01_31_150335_create_categories_table',2),(12,'2019_01_31_150402_create_posts_table',2),(13,'2019_01_31_150938_create_comments_table',2),(14,'2019_01_31_152302_create_messages_table',3),(16,'2019_01_31_153903_create_images_table',4),(17,'2019_01_31_160722_add_descrizione_to_services',5),(18,'2019_02_02_103829_add_subtitle_to_posts',6),(19,'2019_02_05_110814_create_trophies_table',7),(20,'2019_02_08_150851_add_pubblicato_to_posts',8),(21,'2019_02_11_104047_add_impaginato_to_posts_table',9),(22,'2019_02_20_094906_create_about_uses_table',10),(23,'2019_02_20_140420_create_contacts_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `pubblicato` enum('si','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `impaginato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `titolo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giorno` date NOT NULL,
  `paragraph_1` longtext COLLATE utf8mb4_unicode_ci,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph_2` longtext COLLATE utf8mb4_unicode_ci,
  `in_conclusion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph_3` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,4,'si','Brian e Chiara pdf.pdf','Chiara e Brian','2019-12-14','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut odio. Nam sed est. Nam a risus et est iaculis adipiscing. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ut justo. In tincidunt viverra nisl. Donec dictum malesuada magna. Curabitur id nibh auctor tellus adipiscing pharetra. Fusce vel justo non orci semper feugiat. Cras eu leo at purus ultrices tristique.\n','In Chiesa','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut odio. Nam sed est. Nam a risus et est iaculis adipiscing. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ut justo. In tincidunt viverra nisl. Donec dictum malesuada magna. Curabitur id nibh auctor tellus adipiscing pharetra. Fusce vel justo non orci semper feugiat. Cras eu leo at purus ultrices tristique.\n\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\n\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\n\nNam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.','La Festa','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut odio. Nam sed est. Nam a risus et est iaculis adipiscing. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ut justo. In tincidunt viverra nisl. Donec dictum malesuada magna. Curabitur id nibh auctor tellus adipiscing pharetra. Fusce vel justo non orci semper feugiat. Cras eu leo at purus ultrices tristique.\n\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.\n\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\n\nNam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',NULL,NULL),(2,1,1,'no','NULL','Francesca e Rocco','2018-06-10','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.','La Mattina','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','La Serata','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',NULL,NULL),(3,1,4,'si','NULL','Lucia e Stefano','2018-10-23','Litora sollicitudin dui pulvinar lacinia odio et phasellus egestas mi, vehicula tempor pellentesque pulvinar diam suscipit amet nisi erat, vivamus imperdiet odio sollicitudin vestibulum curabitur mauris consequat per scelerisque volutpat magna class quisque eu potenti arcu tellus maecenas per nostra ac ut, iaculis pharetra scelerisque vehicula sed augue aliquam dapibus maecenas mauris class curabitur per tempus quisque morbi donec velit ultrices blandit erat pulvinar ante, curabitur vel etiam nulla augue nulla adipiscing dolor mauris, bibendum phasellus porttitor lectus eros dapibus facilisis scelerisque dictum accumsan eget nostra dapibus mattis himenaeos magna sodales luctus sagittis, a velit sem leo faucibus velit placerat.','Il Pomeriggio','Ultricies habitant feugiat tortor augue mauris lectus, mi mauris nam gravida platea ante aliquet, diam auctor litora nulla placerat a maecenas ante nulla primis elit pretium eget aliquet etiam mattis, nisi felis sapien quis eget lorem pharetra class dolor posuere ac, magna eleifend urna curae per varius viverra imperdiet per et scelerisque imperdiet convallis hendrerit tellus dictum venenatis quisque, nisl pellentesque nostra dictum tortor vestibulum est duis curabitur nibh aptent torquent viverra dui pretium, quisque turpis lacus semper hac proin mauris, aptent aliquet amet etiam torquent nisi integer hendrerit velit interdum vestibulum curabitur nibh nisi porta augue duis platea ultricies.\n\nVelit felis mattis feugiat convallis enim turpis laoreet, curabitur euismod quisque blandit convallis faucibus proin tristique, ac quis class etiam vulputate turpis eleifend varius congue maecenas himenaeos ultricies nunc sagittis turpis eleifend justo, nunc libero quisque molestie lectus augue neque in donec, dapibus interdum curae auctor augue curabitur scelerisque potenti enim elementum tortor rutrum amet aliquam vulputate taciti facilisis hendrerit et vulputate nibh hendrerit leo fusce urna libero eleifend cursus, accumsan magna elit ut eleifend risus, consequat senectus cursus turpis fusce viverra iaculis luctus donec fermentum risus dictumst, class sed nec molestie pulvinar nibh nulla, purus tempor augue pharetra turpis.','Post Wedding','Mauris ad ultricies quisque habitant sit lectus urna, blandit donec consequat ipsum dui posuere, a sed ad risus laoreet congue dolor luctus sodales nostra ultrices faucibus cursus vitae aptent etiam aliquet aliquam, nulla eu rhoncus porta consequat volutpat porttitor condimentum malesuada adipiscing molestie maecenas venenatis magna mollis libero ante litora mauris cursus ut, cras eu tempor class platea aenean lacus purus consequat, cubilia lectus phasellus habitasse donec ultrices commodo lectus commodo tortor nullam aliquet cubilia vestibulum tortor sollicitudin, egestas ante quam gravida habitant pharetra donec, est rutrum at erat augue consectetur nec suscipit consequat accumsan ante quam mi rhoncus volutpat.',NULL,NULL),(4,1,4,'si','NULL','Sara e Giuliano','2018-11-12','\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"','Paesaggio',' Curabitur lectus libero, dignissim eu tellus sed, dictum pharetra dui. Donec malesuada sem nec lectus eleifend pharetra. Duis a diam ornare, sodales turpis sed, luctus mi. Pellentesque euismod nisl in erat vestibulum commodo. Ut venenatis augue eu ullamcorper ultrices. Nullam sed justo ac justo bibendum suscipit. Curabitur tristique enim quis sem posuere lobortis.\n\nMauris viverra quam nec sapien auctor bibendum. Aenean suscipit varius tristique. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus nec malesuada lorem. Pellentesque vehicula vel elit eget aliquam. Vestibulum efficitur tempor ipsum, et accumsan dui viverra at. Ut cursus pulvinar augue, vel laoreet tortor convallis et. Maecenas vel orci ut mauris ullamcorper molestie. ','La Casa','\n\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"',NULL,NULL),(5,5,4,'si','provazip.zip','Summer','2016-06-05','Gregorio Samsa, svegliandosi una mattina da sogni agitati, si trovò trasformato, nel suo letto, in un enorme insetto immondo. Riposava sulla schiena, dura come una corazza, e sollevando un poco il capo vedeva il suo ventre arcuato, bruno e diviso in tanti segmenti ricurvi, in cima a cui la coperta da letto, vicina a scivolar giù tutta, si manteneva a fatica. Le gambe, numerose e sottili da far pietà, rispetto alla sua corporatura normale, tremolavano senza tregua in un confuso luccichio dinanzi ai suoi occhi. Cosa m’è avvenuto? pensò. Non era un sogno. ','Al mare','La sua camera, una stanzetta di giuste proporzioni, soltanto un po’ piccola, se ne stava tranquilla fra le quattro ben note pareti. Sulla tavola, un campionario disfatto di tessuti - Samsa era commesso viaggiatore e sopra, appeso alla parete, un ritratto, ritagliato da lui - non era molto - da una rivista illustrata e messo dentro una bella cornice dorata: raffigurava una donna seduta, ma ben dritta sul busto, con un berretto e un boa di pelliccia; essa levava incontro a chi guardava un pesante manicotto, in cui scompariva tutto l’avambraccio. Lo sguardo di Gregorio si rivolse allora verso la finestra, e il cielo fosco (si sentivano ','in Spiaggia','La sua camera, una stanzetta di giuste proporzioni, soltanto un po’ piccola, se ne stava tranquilla fra le quattro ben note pareti. Sulla tavola, un campionario disfatto di tessuti - Samsa era commesso viaggiatore e sopra, appeso alla parete, un ritratto, ritagliato da lui - non era molto - da una rivista illustrata e messo dentro una bella cornice dorata: raffigurava una donna seduta, ma ben dritta sul busto, con un berretto e un boa di pelliccia; essa levava incontro a chi guardava un pesante manicotto, in cui scompariva tutto l’avambraccio. Lo sguardo di Gregorio si rivolse allora verso la finestra, e il cielo fosco (si sentivano ',NULL,NULL),(6,5,2,'si','NULL','Winter','2016-11-01','Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido.','Tramonto','Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya! Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo zelante assaggia il whisky ed esclama: alleluja! Aquel vituperable xenófobo apasionado prueba su güisqui y exclama: ¡Aleluya!Ma la volpe col suo balzo ha raggiunto il quieto Fido. Quel vituperabile xenofobo ','Brina','La mia anima è pervasa da una mirabile serenità, simile a queste belle mattinate di maggio che io godo con tutto il cuore. Sono solo e mi rallegro di vivere in questo luogo che sembra esser creato per anime simili alla mia. Sono così felice, mio caro, così immerso nel sentimento della mia tranquilla esistenza che la mia arte ne soffre. Non potrei disegnare nulla ora, neppure un segno potrei tracciare; eppure mai sono stato così gran pittore come in questo momento. Quando l\'amata valle intorno a me si avvolge nei suoi vapori, e l\'alto sole posa sulla mia foresta impenetrabilmente oscura, e solo alcuni raggi si spingono nell\'interno sacrario, io mi stendo nell\'erba alta presso il ruscello che scorre, e più vicino alla terra osservo mille multiformi erbette; allora sento più vicino al mio cuore brulicare tra gli steli il piccolo mondo degli innumerevoli, infiniti vermiciattoli e moscerini, e sento la presenza dell\'Onnipossente che ci ha creati a sua immagine e ci tiene in una eterna gioia. ',NULL,NULL),(7,5,2,'no','NULL','Autumn','2016-09-01','Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On refusa continuar payar custosi traductores. At solmen va esser necessi far uniform grammatica, pronunciation e plu sommun paroles. Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental in fact, it va esser Occidental. A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.Li Europan lingues es membres del sam familie. ','In strada','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae','La Foresta','ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,',NULL,NULL),(8,6,1,'si','NULL','Giada','2019-01-23','Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. ','In primo piano','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.','Phasellus viverra nulla ut metus varius laoreet','Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Aenean viverra rhoncus pede. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus a est. Phasellus magna. In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis in nunc fringilla tristique. Morbi mattis ullamcorper velit. Phasellus gravida semper nisi. Nullam vel sem. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed hendrerit. Morbi ac felis. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Nunc nulla. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Donec venenatis vulputate lorem. Morbi nec metus. Phasellus blandit leo ut odio. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. In auctor lobortis lacus. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum ullamcorper mauris at ligula. Fusce fermentum. Nullam cursus lacinia erat. Praesent blandit laoreet nibh. Fusce convallis metus id felis luctus adipiscing. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Quisque id mi. Ut tincidunt tincidunt erat. Etiam feugiat lorem non metus. Vestibulum dapibus nunc ac augue. Curabitur vestibulum aliquam leo. Praesent egestas neque eu enim.',NULL,NULL),(10,6,2,'si','NULL','Michela','2019-02-05','quam ex nulla malesuada id tempor quisque arcu nonummy et ligula a sapien tenetur dolor velit ut faucibus non vitae iaculis ut sed sociis felis ac condimentum eget vestibulum blandit pulvinar mauris amet maecenas eros quam egestas bibendum urna lectus libero duis turpis sit malesuada suspendisse in elit urna arcu nec ultrices felis magna at sit consequat imperdiet et eget et turpis ullamcorper fusce est sed tellus integer molestie platea morbi nec ex amet sagittis a accumsan amet in tellus integer adipiscing sit lectus a habitant quidem semper id nunc felis orci venenatis pede venenatis mi quam vulputate sagittis suscipit neque eget sollicitudin mauris eu quis nibh eu mauris est nunc nisl sagittis etiam cras justo eius hendrerit sed et mollis taciti ut blandit mauris urna pede leo nibh porttitor curae at quisque donec nec magna augue wisi a vestibulum lectus volutpat duis lacus imperdiet vel tincidunt nec diam nam rutrum aenean dolor eget neque arcu morbi eu tellus augue viverra vestibulum etiam mauris id fusce sociis neque enim non elit ut ipsum mauris lorem laoreet odio sed ut fermentum lorem amet morbi massa etiam vestibulum qui sit lacinia cras non proin consectetuer wisi adipiscing massa amet sit potenti quis tortor enim felis aliquet congue eu purus blandit interdum phasellus et sollicitudin leo mattis lectus mollis orci nam condimentum eros tristique mauris non turpis arcu rutrum taciti erat sodales quam faucibus orci vel donec felis turpis sapien integer elit praesent lobortis ligula ut accumsan ipsum vestibulum at arcu mauris tellus suscipit donec in sem et magna dignissim vestibulum maecenas a a vivamus cursus augue dignissim metus at quis ipsum elit condimentum a nulla non nunc ','Il sipario','elis gravida maecenas curabitur lectus quisque mauris diam tincidunt pellentesque mi ornare in sed maecenas sit eros augue suspendisse eget tortor aenean eros natoque nunc tempor lorem a vehicula nisl et erat auctor nullam id mauris eleifend eget ultricies vel integer donec nec leo sed nulla sed et velit sed nulla lacus dignissim aliquam quae nisl integer enim qui leo at ac etiam mi elit iaculis nunc quis cum habitant eros vulputate turpis eu ut faucibus incidunt hendrerit tellus neque tincidunt sed imperdiet justo faucibus erat penatibus luctus sodales id cursus praesent qui porttitor euismod sodales a tincidunt risus etiam at tristique ut lacinia vivamus a ante porttitor neque dignissim mollis ut quam consectetuer dictum porta suscipit curabitur litora sociis ipsum massa ut luctus luctus sit facilisis tempor pulvinar consectetuer mauris vitae quis est semper massa massa dictum in commodo bibendum reiciendis sed nunc arcu nulla rhoncus magnis modi adipiscing a a nunc nec ligula nibh et interdum ullamcorper at consequat dui libero tempor nam suscipit libero purus vel et erat magna accumsan eget tincidunt diam vivamus rhoncus cursus nulla quis nonummy morbi nunc aenean facilisis eget commodo sagittis wisi vivamus purus iaculis morbi nec vitae massa nec ut vel posuere elit volutpat ornare in ultrices in quisque pharetra vel dolor arcu accumsan in nisl urna metus dictum sed posuere adipiscing integer pulvinar pulvinar nulla at bibendum veniam libero nascetur nec cras aliquet viverra mauris pede eget urna sociis nunc eget nam enim scelerisque vivamus per curabitur donec augue vitae sapien ullamcorper volutpat quam taciti et tellus vehicula cras lectus sed rutrum cupiditate ornare montes a','La sua passione','sagittis orci at justo posuere ligula mauris volutpat lacinia viverra velit id nonummy a purus nascetur sed sapien metus sed wisi ut dapibus praesent consectetuer et ut odio metus cras cras arcu pharetra nec netus condimentum a nullam pede sem vestibulum lacus pellentesque vel nec vestibulum curae velit massa imperdiet suscipit leo at ac sed tristique eget auctor vulputate non vestibulum neque metus lacus nullam tempor odio mus sit ultrices in nibh ac viverra in fusce amet aliquam elit hendrerit etiam et nunc cras porta proin felis donec erat nunc nec magnis metus nullam odio consectetuer mollis magna nam dictum dis sed sagittis ad sed pede nulla integer viverra elementum orci aenean tortor cursus elementum curabitur varius morbi mi sapien tincidunt lacinia nibh et nec malesuada ante quis in aenean atque eu augue eius habitasse justo eu erat massa quis est risus mi cras feugiat eget pellentesque aenean voluptatem enim sed odio eu lacus placerat arcu pellentesque platea eros magnam ultricies gravida luctus ipsum justo ut mollis lorem eros sodales dui ut faucibus nec inceptos donec tempor nulla et porttitor tincidunt lacus quis enim sit tortor ut turpis adipiscing sit id parturient diam eget feugiat vestibulum nunc rhoncus lorem felis et in ac morbi tortor molestie commodo facilisis gravida curabitur lacus pulvinar arcu placerat sed quam faucibus adipiscing dui et ac nam phasellus ligula dictum ante enim massa tincidunt nostra nunc metus magna integer ut eu porttitor nunc vitae leo enim nulla mi feugiat mattis quis in odio sed praesent pulvinar lacus sed mollis eu sem montes phasellus consectetuer suspendisse dui et eu fermentum egestas quam imperdiet lorem commodo eu in dolor nulla orci voluptate etiam in praesent eu orci vivamus ligula mauris fringilla donec donec dis pede vehicula et ac pulvinar lorem porta vitae aliquam consectetur donec et odio laoreet cras ac tellus at purus veritatis enim rutrum nunc sed lacus vel quam vitae donec dui ultricies libero donec ac a vestibulum quisque rutrum vel vestibulum suspendisse laborum quisque nisl mauris dolor molestie justo congue non ac et at in mauris cras mauris inceptos primis ligul',NULL,NULL),(11,1,6,'si','Web Guido e Marianna.zip','Guido e Marianna','2019-02-11',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,1,4,'no','Isabella e Giacomo.zip','Isabella e Giacomo','2018-04-03',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Stampe','permette di stampare tutte le foto che si vuole per quell evento disponibile anche funzioni online tramite sito per accellerare i tempi ed evitare attese','fa fa-picture-o',NULL,NULL,NULL),(2,'Impaginato','permette di avere un impaginato (le foto piu belle) rese a modo di impaginato con un determinato formato a modo di book fotografico ','fas fa-book',NULL,NULL,NULL),(6,'Area Personale','permette ad ogni utente di registrarsi e di comunicare con piero direttametne tramite sito e potrete accedere alla vostra area dove poter gestire sia le stampe , l impaginato online e prenotazioni di evento.','far fa-user-circle',NULL,NULL,NULL),(8,'Commenta','permette di commentare i post creati da piero e essere attivo sul sito per migliorarlo e per commentare la giornata dell evento ','fas fa-comments',NULL,NULL,NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trophies`
--

DROP TABLE IF EXISTS `trophies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trophies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trofeo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conseguimento` date NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trophies`
--

LOCK TABLES `trophies` WRITE;
/*!40000 ALTER TABLE `trophies` DISABLE KEYS */;
INSERT INTO `trophies` VALUES (1,'Photo Wedding awards','12247891_922534284507346_6997237139176663881_o.jpg','2016-05-20','Lorem ipsum dolor sit amet, putant efficiendi duo id, ut quo sale verear. Habeo paulo et sea, his repudiare rationibus inciderint id, eos omnium nominati evertitur ei. Cum no melius ceteros, aperiri menandri ex per, eam ei porro aeque bonorum. Cu quas fierent eam. Ad mea liber prompta ponderum, vix copiosae detraxit eu, ea nobis maluisset reformidans mea. Ius elitr invidunt cu.',NULL,NULL),(2,'Furkey Wedding awards','12593599_640113042825365_1988982070316360844_o.jpg','2016-01-01','Et nostrum inciderint temporibus eos, latine inermis invenire per ex, ei adhuc democritum duo. Posse labitur torquatos vel id, sit cu posse disputando, ius te diam audiam. Vis at ubique detracto torquatos, congue prompta ad vis. Vel eu lobortis constituto, in sed solum euismod senserit, eu nam omnis aperiam disputando. Accusam facilisi at eam, te mel audiam regione adolescens, intellegebat interpretaris nec in. Pri malorum albucius adolescens ea, nam ea hinc volumus ',NULL,NULL),(3,'Furkey Post-Wedding','13179439_10206417504777963_2030261038818661802_n.jpg','2016-01-01','Saperet percipit intellegebat te cum, qui ad everti audire quaeque. Nec ad elit oblique, te nulla postea equidem nam. Qui exerci ornatus maiestatis no, magna omnium nec at, vel iusto eripuit percipit ex. Ut graecis instructior vis. Ipsum reprehendunt vix in.\n\nUt vim movet dicam theophrastus, an eos choro virtute, sit quis primis vivendo ei. Ea meliore oporteat mea, et oporteat necessitatibus eam. Rebum repudiandae sea ex, at nam solum intellegam. Dico tibique periculis mea eu.',NULL,NULL),(4,'Best church award','13221511_10206429121988386_1496041641793624364_n.jpg','2015-01-01','Rutrum erat justo, ornare id orci leo dicta lorem maecenas, sed nibh condimentum maecenas. Augue blandit per vestibulum leo. Augue neque arcu lectus nec pellentesque mollis, blandit posuere. Expedita vestibulum fermentum lorem suspendisse sodales lobortis, sed curabitur sem, phasellus quisque, urna tortor sit vitae eu rutrum. Sit ultrices urna cras quam mi pellentesque, a wisi, posuere purus, lacinia in in. Fusce odio felis duis ac enim duis, elementum eu arcu hymenaeos sed est. Nulla ipsum scelerisque non quis erat ipsum, scelerisque fusce.',NULL,NULL),(5,'Made in Italy','13263838_10206454751389105_9206968836584528482_n.jpg','2015-01-01','Ante integer mollis velit, mi libero luctus ut tempus elit, dui tortor a nunc wisi, suscipit sapien. Nulla purus mattis posuere vel etiam suspendisse, consequat libero, curabitur ullamcorper et elementum faucibus cursus egestas. Sed quisque, turpis parturient non, dolor quisque sed elit curabitur id. Est neque. Erat parturient maecenas, aliquam vel pulvinar sed. Varius ut nibh ut eget. Nam libero vitae enim accusantium ipsum, voluptatem sollicitudin tristique, lacinia nulla sed, justo porttitor enim non porta eu. Aenean tempor elit vestibulum, bibendum risus, fugit adipiscing ut orci vulputate ut vestibulum, litora sed tristique augue nullam. Sollicitudin et id amet, donec enim amet at magna, congue molestie. Erat risus auctor ac quis ut magna, dolor integer quis. Dui est a nunc in massa accumsan, pellentesque neque egestas. Sed elit justo lacinia ante, integer nesciunt consequat lacus in ipsum wisi.',NULL,NULL);
/*!40000 ALTER TABLE `trophies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` int(11) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `fk_users_1_idx` (`group_id`),
  CONSTRAINT `fk_users_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Piero','Calvarese','pieroph@email.com',NULL,'pieroph',NULL,NULL,NULL,2),(2,'Gianluca','Calvarese','gianluc@email.com',NULL,'gianlucph',NULL,NULL,NULL,2),(3,'Romeo','De Vincentis','romeo@email.com',NULL,'$2y$10$Njy8GlQZLJjxNP5JTyELOORij80J.Mo.6e97lP.AVZZJDPer2ZGwi','hi4MBGqRoo50BwFXDIoeKmkb9B4Zf2XZpW7WyvJvVylWXVHlLikBM2Pqxqza','2019-02-07 10:17:27','2019-02-07 10:17:27',1),(4,'Lorenzo','Iapadre','iap@gmail.com',NULL,'$2y$10$JnB1XCEMMM7yh5Yr5d0JM.QkPPr.TpEKxKIee0bxvOu9AGlSU6zDu','6OnwNEUtbOkucXRSwuM1RycYQF3NzRnmw6jGlcVUrqSlS75I06eM61j6fthP','2019-02-07 10:27:53','2019-02-07 10:27:53',2),(5,'antonio','giandomenico','antog727@gmail.com',NULL,'$2y$10$n363iHXJrJcXpPlN.hIbWOZU92t.huYQzwO579PBq7DnHkf3tAkJG','PeERrAFoaGzQY7JZvii6dLqNEsSwSUPD1broVgbWzoxj5B3vpMl56MmILMiP','2019-02-10 15:55:06','2019-02-10 15:55:06',2),(6,'Guido','Rossi','guido@email.com',NULL,'$2y$10$1iTudhJKPoCmesMMDQHf9.fCmEn1O9Ccpai3hAUA/2P9tZNHUbhzS','77TPgygZ3lbm331ZkL1luvt7MlIUorXXzHNnoUuCtZ2uZ09jqDPWdx7KpCml','2019-02-11 09:44:53','2019-02-11 09:44:53',2),(7,'Alexa','De Vincentis','alexadev@email.com',NULL,'$2y$10$DdJHTKDUfbt/NDEtCCigxOEHA86O9oryqc9QjLg6i4q4i7sqPzql6','YfQxcwNmfEokjmTl8z94qoxCmiOi4aDAYlBvuHl0ob0cXWv0Jqb0nUdQQJqL','2019-02-16 13:02:12','2019-02-16 13:02:12',2);
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

-- Dump completed on 2019-02-20 21:49:37
