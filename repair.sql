-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: repair
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'<div>\r\n<h5>smart services</h5>\r\n<div class=\"description\">Puls (formerly CellSavers.com) connects consumers with expert technicians for rapid-response repairs and on-the-spot support for the devices at the heart of digital life. Puls&rsquo; proprietary software, 24/7 customer service, and 1000-strong professional network ensure an instant customer-technician match and a 60-minute arrival time for most appointments.</div>\r\n</div>\r\n<div>\r\n<h5>driving forward</h5>\r\n<div class=\"description\">Puls has expanded to meet growing demand, serving over 100,000 customers in more than 40 US DMAs since 2015, with services from cell phone repair to tv installation and smart home setup. Puls is headquartered in San Francisco, with offices in San Diego and Tel Aviv, and is backed by top tier global investors and partnerships.</div>\r\n</div>',NULL,'2017-11-09 22:22:57');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_name` varchar(45) DEFAULT NULL,
  `blog_content` longtext,
  `blog_image` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (2,'Blog 1','<p>asdas asdas d adas dasd asd asd asdasas das das das dasdasdasdasdasdasdas a asdas dasd as dad asd asd asdas ad asd asd as dasd asdasd asd&nbsp;</p>','1510186279.jpg','2017-11-09 00:11:19','2017-11-09 00:14:02'),(3,'2017s Best Cellphone Repair Company','<p>It&rsquo;s probably a safe assumption that pretty much everyone would <em>like</em> to have wireless phone charging. After all, who likes a cable? They get in the way and cramp your style. In fact, there&rsquo;s an entire service devoted to organizing cables so that people can pretend they don&rsquo;t exist.</p>\r\n<p>But instead of pretending that cables don&rsquo;t exist, what if we simply got rid of them entirely?</p>\r\n<p>Contrary to popular belief, wireless charging doesn&rsquo;t belong to the mobile elites, chatting away smugly on their spanking new flagship models. And though the technology has been around for a little while, Apple has effectively cemented wireless charging&rsquo;s new mainstream status with its<a href=\"http://fortune.com/2017/10/25/apple-powerbyproxi-acquisition/\"> latest acquisition </a>of New Zealand company PowerbyProxi.</p>\r\n<h2><img class=\"alignnone size-full wp-image-1152\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o.jpg\" sizes=\"(max-width: 900px) 100vw, 900px\" srcset=\"https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o.jpg 900w, https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o-300x200.jpg 300w, https://puls.com/blog/wp-content/uploads/2017/11/10728457974_5e6fba270e_o-768x513.jpg 768w\" alt=\"wireless phone on wireless charger\" width=\"900\" height=\"601\" /></h2>\r\n<h2><strong>Power to the people</strong></h2>\r\n<p>Pretty much anyone can convert their phone to wireless charging capability.</p>\r\n<p>This is good news for those of us who don&rsquo;t love texting while tethered to the wall via a short three-foot cable. (Note: while you won&rsquo;t be connected to the wall via a cable, your phone will stop charging each time you pick it up off the charging pad to text, and will resume charging when you put it down again.)</p>\r\n<p>And while other major producers like Samsung, Motorola, and others have embraced wireless charging in their flagship models on down, Apple&rsquo;s entry into the arena means that the feature will likely be ubiquitous in the near future.</p>\r\n<p>Here&rsquo;s a picture of the wireless charging landscape as it stands, and a guide to get you started on your new, wireless way of life.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>What is wireless charging and how does it work?</strong></h2>\r\n<p>There are two components to wireless charging: the charger and the receiver. Many (<em>but by no means all</em>) new phones come with wireless charging receivers built in. But pretty much any phone can be adapted for wireless charging by sticking an adhesive patch on the back of the device. It&rsquo;s not the most elegant solution, but it works. Also, there are cases for many phones with the wireless adapter built in, so you&rsquo;ve got options.</p>\r\n<div id=\"attachment_1154\" class=\"wp-caption alignnone\"><img class=\"size-full wp-image-1154\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/ef7ebfa9-b828-4f7e-a776-8f681342eea9-e1510134699669.jpg\" alt=\"Samsung phone and wireless charging dock\" width=\"900\" height=\"600\" />\r\n<p class=\"wp-caption-text\">Samsung wireless charging station. Credit: Samsung</p>\r\n</div>\r\n<p>To charge the phone, simply place it on top of a charging pad. The wireless part is technically true, but the charge doesn&rsquo;t transfer if there&rsquo;s any distance between the phone and the charger.</p>\r\n<p>Fortunately, a range of companies are coming out with some pretty nifty charging stations, and <a href=\"http://www.ikea.com/us/en/catalog/categories/departments/wireless_charging/30611/\">IKEA even has a whole product line</a> dedicated to wireless charging.</p>\r\n<h2>&nbsp;</h2>\r\n<h2>&nbsp;</h2>\r\n<h2><strong>Is there a standard wireless charging platform?</strong></h2>\r\n<p>Right now, the most popular is called Qi, and it&rsquo;s used on phones from Samsung, to Google, to Nokia. Apple has included wireless charging as a feature on the iPhone 8 and above, and these devices utilize Qi, but it&rsquo;s unclear whether Apple is going to head in a new direction with PowerbyProxi. There&rsquo;s a good chance the company will introduce its own higher standard, which will drive incentive for other companies to up their standards as well.</p>\r\n<div id=\"attachment_1153\" class=\"wp-caption alignnone\"><img class=\"wp-image-1153 size-full\" src=\"https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower.png\" sizes=\"(max-width: 770px) 100vw, 770px\" srcset=\"https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower.png 770w, https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower-300x268.png 300w, https://puls.com/blog/wp-content/uploads/2017/11/apple-airpower-768x687.png 768w\" alt=\"\" width=\"770\" height=\"689\" />\r\n<p class=\"wp-caption-text\">Apple AirPower. Credit: Apple</p>\r\n</div>\r\n<p>Apple has also announced the AirPower, a new wireless charging pad that it plans to introduce into the market next year.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>Is my phone capable of pairing with a wireless adapter kit?</strong></h2>\r\n<p>Yes, pretty much all phones these days can be adapted to wireless charging. Most commonly found are adapters compatible with USB C ports, but you can find universal adapters that will connect to your micro-USB port or Lightning port.</p>\r\n<p>While all of the above will work with standard wireless charging pads, it should be noted that there is also a new <a href=\"http://bgr.com/2017/10/26/iphone-8-plus-wireless-charger-amazon-best/\">7.5 watt super-fast charger,</a> which is 50% faster than the regular 3.5 &ndash; 5 watt chargers.</p>\r\n<p>Most iPhones are not yet compatible with this speed but will be upon the release of an upcoming version of iOS 11.</p>\r\n<p>&nbsp;</p>\r\n<h2><strong>What does it cost?</strong></h2>\r\n<p>Despite the indisputable cool factor, adapting your phone to charge wirelessly is surprisingly affordable. Phone adapters cost between $10 &ndash; $20, and charging pads start around $10 and can go up to $50 or more, though the vast majority top out at around $25.</p>\r\n<p>In terms of bang for your buck, it seems a no-brainer. For both good looks and ease of use, it makes sense to invest in a kit &ndash; for the price of two matinee movie tickets, you can free yourself from that electronic leash forever. And besides, you didn&rsquo;t really need to see that Tyler Perry Halloween movie anyway.</p>','1510266157.png','2017-11-09 22:22:37','2017-11-09 22:22:37'),(4,'Lorem Ipsum','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>','1510610552.jpg','2017-11-13 22:02:32','2017-11-13 22:02:32'),(5,'Ipsum Lorem','<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>','1510610628.jpg','2017-11-13 22:03:47','2017-11-13 22:03:48');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codes`
--

DROP TABLE IF EXISTS `codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codes`
--

LOCK TABLES `codes` WRITE;
/*!40000 ALTER TABLE `codes` DISABLE KEYS */;
INSERT INTO `codes` VALUES (37,'package',4,'NEWBIE','2017-11-13 22:05:13','2017-11-13 22:05:13'),(38,'package',1,'MODERATOR','2017-11-13 22:06:37','2017-11-13 22:06:37'),(39,'package',2,'LEGENDRY','2017-11-13 22:08:53','2017-11-13 22:08:53'),(40,'package',3,'MILD','2017-11-13 22:10:38','2017-11-13 22:10:38');
/*!40000 ALTER TABLE `codes` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',2),(3,'2017_11_07_181539_create_setting_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module_options`
--

DROP TABLE IF EXISTS `module_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `module_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `module_id` int(11) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module_options`
--

LOCK TABLES `module_options` WRITE;
/*!40000 ALTER TABLE `module_options` DISABLE KEYS */;
INSERT INTO `module_options` VALUES (5,'iPhone','01510612173.png',NULL,'70',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(6,'iPhone 5','0594597251.jpg',5,'35',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(7,'iPhone 6','1343986986.jpg',5,'45',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(8,'iPhone 7','2238762349.jpg',5,'55',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(9,'iPad','11510612173.png',NULL,'110',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(10,'iPad Air','01061799489.jpeg',9,'65',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(11,'iPad Mini','11086221612.png',9,'75',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(12,'iPad 4','2647510150.jpeg',9,'85',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(13,'Google','21510612173.png',NULL,'60',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(14,'Pixel 2','0726760826.jpg',13,'65',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(15,'Pixel XL','1402646678.jpg',13,'72',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(16,'Samsung','31510612173.png',NULL,'40',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(17,'Samsung s6 edge','01056786845.png',16,'28',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(18,'Samsung s7','1709841402.png',16,'34',2,'2017-11-13 22:29:33','2017-11-13 22:29:33'),(19,'Broken Screen','01510612353.png',NULL,'12',3,'2017-11-13 22:32:33','2017-11-13 22:32:33'),(20,'Battery Dead','11510612353.png',NULL,'18',3,'2017-11-13 22:32:33','2017-11-13 22:32:33');
/*!40000 ALTER TABLE `module_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) DEFAULT NULL,
  `module_title` varchar(45) DEFAULT NULL,
  `module_description` longtext,
  `sort_id` int(11) DEFAULT NULL,
  `select_type` varchar(45) NOT NULL,
  `created_at` varchar(45) NOT NULL,
  `updated_at` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (2,7,'your device','start by selecting your device for repairing',1,'single','2017-11-13 22:29:33','2017-11-13 22:29:33'),(3,7,'Issue','What is the problem your device is facing?',2,'single','2017-11-13 22:32:33','2017-11-13 22:32:33');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offerings`
--

DROP TABLE IF EXISTS `offerings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offerings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offering` varchar(45) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offerings`
--

LOCK TABLES `offerings` WRITE;
/*!40000 ALTER TABLE `offerings` DISABLE KEYS */;
INSERT INTO `offerings` VALUES (55,'iPhone',4,'2017-11-13 22:05:12','2017-11-13 22:05:12'),(56,'iPads',4,'2017-11-13 22:05:13','2017-11-13 22:05:13'),(57,'Google Pixel',4,'2017-11-13 22:05:13','2017-11-13 22:05:13'),(58,'Any size or brand of tv',1,'2017-11-13 22:06:37','2017-11-13 22:06:37'),(59,'Free up time',1,'2017-11-13 22:06:37','2017-11-13 22:06:37'),(60,'Mounting Bracket and Cables',1,'2017-11-13 22:06:37','2017-11-13 22:06:37'),(61,'Free in-home demo',2,'2017-11-13 22:08:53','2017-11-13 22:08:53'),(62,'Premium Network setup',2,'2017-11-13 22:08:53','2017-11-13 22:08:53'),(63,'Device Installation',2,'2017-11-13 22:08:53','2017-11-13 22:08:53'),(64,'Paragraphs',3,'2017-11-13 22:10:38','2017-11-13 22:10:38'),(65,'Words',3,'2017-11-13 22:10:38','2017-11-13 22:10:38'),(66,'Bytes',3,'2017-11-13 22:10:38','2017-11-13 22:10:38');
/*!40000 ALTER TABLE `offerings` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `pricings`
--

DROP TABLE IF EXISTS `pricings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pricings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(45) DEFAULT NULL,
  `package_price` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pricings`
--

LOCK TABLES `pricings` WRITE;
/*!40000 ALTER TABLE `pricings` DISABLE KEYS */;
INSERT INTO `pricings` VALUES (1,'Tv Mounting','110','19','2017-11-08 20:59:53','2017-11-13 22:06:37'),(2,'Smart Home Set-up','85','7','2017-11-08 22:23:27','2017-11-13 22:08:52'),(3,'Lorem Ipsum','90','9','2017-11-09 22:17:31','2017-11-13 22:10:38'),(4,'Mobile Repairing','70','10','2017-11-09 22:18:24','2017-11-13 22:05:12');
/*!40000 ALTER TABLE `pricings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(45) DEFAULT NULL,
  `service_about` longtext,
  `service_image` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (5,'Smart Home Setup','<h3 class=\"medium\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</h3>','1510608730.jpg','2017-11-09 22:15:51','2017-11-13 21:32:10'),(6,'Tv Mounting','<h3 class=\"medium\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</h3>','1510607383.jpeg','2017-11-09 22:16:36','2017-11-13 21:09:43'),(7,'Mobile Repairing','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>','1510606995.jpg','2017-11-13 21:03:15','2017-11-13 21:33:55');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Apple FIX NYC','asdasdasdasdasdasd','conepoint@gmail.com','1231231','sadasd','asdsd','dsadas','1510087289.jpg','asd',NULL,'2017-11-12 18:44:06');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(45) DEFAULT NULL,
  `designation` varchar(45) DEFAULT NULL,
  `review` longtext,
  `image` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Subhan Jango','Baap Hu','Maza agya ! Ohoo','1510609140.jpg','2017-11-13 21:32:47','2017-11-13 21:39:19'),(2,'Natacha Quintero','Marketer Manager','Bhai ap yaqeen karo mere baat per gand mar di is bande ne','1510610168.jpg','2017-11-13 21:45:45','2017-11-13 21:56:08'),(3,'Savita Bhabhi','Supervisor','The service they provide is the best i have had in my life.','1510610225.jpg','2017-11-13 21:48:05','2017-11-13 21:57:05'),(4,'Roberto Rodriguez','RMO','Wah kya baat hai, Zaalim hogaya bhai','1510610095.jpg','2017-11-13 21:54:55','2017-11-13 21:54:55'),(5,'Emily Miralez','CEO','kamleshhh, bhag ke dhun dhun dhun dhun, bidi pita hun, cigarette pita hun, solution lagata hun','1510610298.jpg','2017-11-13 21:58:18','2017-11-13 21:58:18'),(6,'Mahrez Yelande','Director','Yeh sub humko mil k chutiya bana rahe hain gand phatti k berway, yeh bik gaye hay gormint','1510610365.jpg','2017-11-13 21:59:25','2017-11-13 21:59:25');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','$2y$10$mScJTOBk7NGYXpL0GwYlPOF4dnOxo3bjS9IQNr2NVPf4EQodgE9nu','0SJe5ieSCuKrje57IJIIPzfl0ZnwEWP5CaNhbcjZIaYMKT4OvG6Mitakk5Eb','2017-11-06 16:17:06','2017-11-06 16:17:06');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `works`
--

DROP TABLE IF EXISTS `works`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `works`
--

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;
INSERT INTO `works` VALUES (1,'<h1 id=\"mcetoc_1buu7jdns0\" style=\"text-align: center;\"><span style=\"background-color: #33cccc;\">How<strong> Apple FIX NYC</strong> works</span></h1>\r\n<h4 style=\"text-align: center;\"><span style=\"color: #33cccc; background-color: #000000;\"><strong>The best digital services at your door</strong></span></h4>\r\n<p>&nbsp;</p>\r\n<h5 style=\"text-align: center;\"><span style=\"color: #000000;\"><strong><span style=\"background-color: #33cccc;\"><span style=\"background-color: #ffffff;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"https://cdn2.iconfinder.com/data/icons/bullet-points/64/Bulletpoint_Bullet_Listicon_Shape_Bulletfont_Glyph_Typography_Bullet_Point_Customshape_Wingding_Custom_Right_Direction_Arrow-512.png\" width=\"10\" height=\"10\" />Tell us how we can help</span></span></strong></span></h5>\r\n<p style=\"text-align: right;\"><span style=\"background-color: #33cccc;\"><img src=\"http://www.loadthegame.com/wp-content/uploads/2014/09/iphone-6-repair.jpg\" width=\"600\" height=\"450\" /></span></p>\r\n<h5 style=\"text-align: left;\">&nbsp;</h5>\r\n<h5 style=\"text-align: left;\"><span style=\"color: #000000; background-color: #ffffff;\"><strong><img src=\"https://cdn2.iconfinder.com/data/icons/bullet-points/64/Bulletpoint_Bullet_Listicon_Shape_Bulletfont_Glyph_Typography_Bullet_Point_Customshape_Wingding_Custom_Right_Direction_Arrow-512.png\" alt=\"\" width=\"10\" height=\"10\" />Confirm a time and Location</strong></span></h5>\r\n<p><span style=\"color: #000000; background-color: #ffffff;\"><strong><img src=\"https://www.wired.com/images_blogs/gadgetlab/2010/04/ipadrelease301.jpg\" width=\"602\" height=\"400\" /></strong></span></p>\r\n<h5 style=\"text-align: right;\">&nbsp;</h5>\r\n<h5 style=\"text-align: center;\"><span style=\"color: #000000; background-color: #ffffff;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src=\"https://cdn2.iconfinder.com/data/icons/bullet-points/64/Bulletpoint_Bullet_Listicon_Shape_Bulletfont_Glyph_Typography_Bullet_Point_Customshape_Wingding_Custom_Right_Direction_Arrow-512.png\" alt=\"\" width=\"10\" height=\"10\" />Get on with your life</strong></span></h5>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000; background-color: #ffffff;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong> our expert techs bring the parts and skills to complete each job on the spot. no need to ship&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; your device, drive to a store or wait in line</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<h5 style=\"text-align: left;\"><strong><span style=\"color: #000000; background-color: #ffffff;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src=\"https://cdn2.iconfinder.com/data/icons/bullet-points/64/Bulletpoint_Bullet_Listicon_Shape_Bulletfont_Glyph_Typography_Bullet_Point_Customshape_Wingding_Custom_Right_Direction_Arrow-512.png\" alt=\"\" width=\"10\" height=\"10\" />Breathe Easy</span></strong></h5>\r\n<p><span style=\"color: #000000; background-color: #ffffff;\">we give you clear, upfront pricing. you pay after the job is done,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img style=\"float: right;\" src=\"http://www.mywirelessdoctor.com/wp-content/uploads/2015/10/shutterstock_271948178.jpg\" width=\"600\" height=\"399\" /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style=\"color: #000000; background-color: #ffffff;\"> with cash or credit card. simple!</span></p>',NULL,'2017-11-14 22:11:21');
/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-18  5:57:48
