-- MySQL dump 10.13  Distrib 5.5.38, for osx10.6 (i386)
--
-- Host: localhost    Database: research
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Current Database: `research`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `research` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `research`;

--
-- Table structure for table `bc_administrator_groups`
--

DROP TABLE IF EXISTS `bc_administrator_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_administrator_groups` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_administrator_groups`
--

LOCK TABLES `bc_administrator_groups` WRITE;
/*!40000 ALTER TABLE `bc_administrator_groups` DISABLE KEYS */;
INSERT INTO `bc_administrator_groups` VALUES (1,'Administrators','Administrators Group'),(2,'Content Manager','Content Manager');
/*!40000 ALTER TABLE `bc_administrator_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_administrator_groups_permissions`
--

DROP TABLE IF EXISTS `bc_administrator_groups_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_administrator_groups_permissions` (
  `page_id` int(11) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`page_id`,`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_administrator_groups_permissions`
--

LOCK TABLES `bc_administrator_groups_permissions` WRITE;
/*!40000 ALTER TABLE `bc_administrator_groups_permissions` DISABLE KEYS */;
INSERT INTO `bc_administrator_groups_permissions` VALUES (1,1),(1,4),(2,1),(2,4),(3,1),(3,2),(3,4),(4,1),(4,4),(5,1),(5,2),(5,4),(6,1),(7,4),(8,1),(8,4),(10,1),(10,4),(11,1),(14,1),(20,4),(21,1),(93,1),(96,1),(97,1),(99,1);
/*!40000 ALTER TABLE `bc_administrator_groups_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_administrators`
--

DROP TABLE IF EXISTS `bc_administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_administrators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(40) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_administrators`
--

LOCK TABLES `bc_administrators` WRITE;
/*!40000 ALTER TABLE `bc_administrators` DISABLE KEYS */;
INSERT INTO `bc_administrators` VALUES (1,'Administrator','admin','d033e22ae348aeb5660fc2140aec35850c4da997',1,'Y');
/*!40000 ALTER TABLE `bc_administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_banner`
--

DROP TABLE IF EXISTS `bc_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_banner` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `language` varchar(10) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `target` varchar(40) NOT NULL,
  `type` int(11) NOT NULL,
  `all_sections` enum('Y','N') NOT NULL DEFAULT 'Y',
  `sort` int(11) NOT NULL,
  `undeletable` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_banner`
--

LOCK TABLES `bc_banner` WRITE;
/*!40000 ALTER TABLE `bc_banner` DISABLE KEYS */;
INSERT INTO `bc_banner` VALUES (1,1,'Sage','4168footer-logo2.png','https://www.youtube.com/watch?v=rymUSbYQjw8','en','Y','_blank',2,'Y',1,'N'),(2,2,'right','4526footer-logo1.png','#','en','Y','_blank',1,'N',2,'N'),(3,3,'','9925NIASC_footer_cover.jpeg','#','en','Y','_blank',4,'Y',3,'N'),(4,4,'<h1><span style=\"color:#FF0000\">BECOME A&nbsp;</span></h1>\r\n\r\n<h1><span style=\"color:#FF0000\">RESEARCH&nbsp;</span></h1>\r\n\r\n<h1><span style=\"color:#FF0000\">PARTNER.</span></h1>\r\n\r\n<h4><span style=\"color:#FF0000\">You can make a difference</span></h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a class=\"image-header-link\" href=\"http://localhost:8888/InformedConsent-app/html/en/registration\">Registration</a></p>','8448NIASC_header_cover.jpeg','https://www.youtube.com/watch?v=uVikFwk6BB4','en','Y','_blank',5,'N',4,'N'),(6,5,'<p>This research project seek to determine how your grocery shopping can help people with chronic illnesses and maybe even you.</p>','3290animation-step-1.jpg','#','en','Y','_blank',6,'Y',5,'N'),(7,6,'<p>We collect your digital receipts</p>','1730animation-step-5.jpg','#','en','Y','_blank',6,'Y',6,'N'),(8,7,'<p>This research project seek to determine how your grocery shopping can help people with chronic illnesses and maybe even you</p>','5948animation-step-6.jpg','#','en','Y','_blank',6,'Y',7,'N'),(9,8,'<p>Contrary to questionnaires, we will assess shopping pattern using receipts over a long timespan. Without troubling you beyond signing up today</p>','8249animation-step-7.jpg','#','en','Y','_blank',6,'Y',8,'N'),(10,9,'<p>The same is the case for your Health data</p>','4646animation-step-8.jpg','#','en','Y','_blank',6,'Y',9,'N'),(11,10,'<p>The same is the case for your Health data</p>','8435animation-step-9.jpg','#','en','Y','_blank',6,'Y',10,'N'),(12,11,'<p>Will certain products or product contents increase or decrease your risk of disease progression or contracting disease?</p>','8350animation-step-10.jpg','#','en','Y','_blank',6,'Y',11,'N'),(13,12,'<p>We hope that this novel method can identify which daily consumables that are detrimental of beneficial to health. So that we can return that knowledge to you and your loved ones.</p>','7456animation-step-11.jpg','#','en','Y','_blank',6,'Y',12,'N');
/*!40000 ALTER TABLE `bc_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_banner_to_section`
--

DROP TABLE IF EXISTS `bc_banner_to_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_banner_to_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_banner_to_section`
--

LOCK TABLES `bc_banner_to_section` WRITE;
/*!40000 ALTER TABLE `bc_banner_to_section` DISABLE KEYS */;
INSERT INTO `bc_banner_to_section` VALUES (1,0,0),(2,0,0),(3,0,0),(4,0,0),(10,2,4),(9,2,3),(8,2,1),(67,4,3),(66,4,2),(17,5,2),(18,5,3),(65,4,1);
/*!40000 ALTER TABLE `bc_banner_to_section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_disease`
--

DROP TABLE IF EXISTS `bc_disease`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_disease` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `language` varchar(10) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_disease`
--

LOCK TABLES `bc_disease` WRITE;
/*!40000 ALTER TABLE `bc_disease` DISABLE KEYS */;
INSERT INTO `bc_disease` VALUES (1,1,'Amyloidosis','en','Y'),(2,2,'CREST disease','en','Y'),(3,3,'Balo diseasea','en','N');
/*!40000 ALTER TABLE `bc_disease` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_gallery`
--

DROP TABLE IF EXISTS `bc_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_gallery` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `file` varchar(256) NOT NULL,
  `embed` text NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `language` varchar(3) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `top` enum('Y','N') NOT NULL,
  `display` enum('Y','N') NOT NULL,
  `date` datetime NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_gallery`
--

LOCK TABLES `bc_gallery` WRITE;
/*!40000 ALTER TABLE `bc_gallery` DISABLE KEYS */;
INSERT INTO `bc_gallery` VALUES (1,1,'73341752_81241894_624-b0009777.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',1),(2,2,'74994203Des-cellules-pour-terrasser-la-leucemie.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',2),(3,3,'960126982103179-focus-wide.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',3),(4,4,'963734752235636-inline.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',4),(5,5,'99839737Ictus.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',5),(6,6,'65318842f52c8ae0ea_fs-shutterstock_218756320.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',6),(7,7,'81638121image.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',7),(8,8,'86959334img_premiers_symptomes_de_la_maladie_de_parkinson_10526_orig.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',8),(9,9,'69191377neurone_4.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',9),(10,10,'38589414iPS-derived-motor-neurons_ALSproject.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',10),(11,11,'98723221Neurones.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',11),(12,12,'87207520wumA6rXV2a360WqRdRoW7twXBk53ojdRlEDEdSugsip5mCeReuFJys4CSZ4M7yRa-fotolia-60432090-xs-s-.png','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',12),(13,13,'12365076production_de_neurones.jpg','','La maladie de Charcot','','en',1,'','Y','2016-08-20 15:36:05',13),(14,14,'85008166HKJPCap.jpg','','International Journal of Emerging Trends in Engineering Research (IJETER)','','en',2,'','Y','2016-08-20 19:39:45',14),(15,15,'47286419homepageImage_en_US.jpg','','International Journal of Emerging Trends in Engineering Research (IJETER)','','en',2,'','Y','2016-08-20 19:39:45',15),(16,16,'47004724HKMJCap.jpg','','International Journal of Emerging Trends in Engineering Research (IJETER)','','en',2,'','Y','2016-08-20 19:39:45',16),(17,17,'37262785homepageImage.jpg','','International Journal of Emerging Trends in Engineering Research (IJETER)','','en',2,'','Y','2016-08-20 19:39:45',17),(18,18,'14581129images.jpg','','International Journal of Emerging Trends in Engineering Research (IJETER)','','en',2,'','Y','2016-08-20 19:39:45',18);
/*!40000 ALTER TABLE `bc_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_gallery_group`
--

DROP TABLE IF EXISTS `bc_gallery_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_gallery_group` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `section_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `language` varchar(3) NOT NULL,
  `date` datetime NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_gallery_group`
--

LOCK TABLES `bc_gallery_group` WRITE;
/*!40000 ALTER TABLE `bc_gallery_group` DISABLE KEYS */;
INSERT INTO `bc_gallery_group` VALUES (1,1,4,'La maladie de Charcot','','81638121image.jpg','en','2016-08-20 15:36:05','Y',1),(2,2,4,'International Journal of Emerging Trends in Engineering Research (IJETER)','','14581129images.jpg','en','2016-08-20 19:39:45','Y',2);
/*!40000 ALTER TABLE `bc_gallery_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_info`
--

DROP TABLE IF EXISTS `bc_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_info` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `section_id` int(10) unsigned NOT NULL,
  `language` varchar(3) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `content` mediumtext NOT NULL,
  `url` varchar(500) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `thumbnail` varchar(150) DEFAULT NULL,
  `lng` varchar(150) DEFAULT NULL,
  `lat` varchar(150) DEFAULT NULL,
  `published` enum('Y','N') NOT NULL,
  `important` enum('Y','N') NOT NULL DEFAULT 'N',
  `slider` enum('Y','N') NOT NULL DEFAULT 'N',
  `connected_gall` int(10) unsigned NOT NULL,
  `connected_info` varchar(256) DEFAULT NULL,
  `sort` int(10) unsigned NOT NULL,
  `important_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_info`
--

LOCK TABLES `bc_info` WRITE;
/*!40000 ALTER TABLE `bc_info` DISABLE KEYS */;
INSERT INTO `bc_info` VALUES (124,49,16,'en','1970-01-01-is-there-any-risk-to-me','Is there any risk to me?','<p>There is no health risk associated with the project, and we expect that the project will benefit you within a few years through better understanding disease determinats and improved lifestyle advice. Despite our comprehensive security efforts to protect data from theft and destruction, we cannot completely rule out unauthorized access to data. We do however consider this risk to be minimal.</p>\r\n\r\n<p>What happens to my data?</p>\r\n\r\n<p>Your data will be collected on a secure server in de-identified form. Your contact information is stored on a separate server. To ensure confidentiality, the same person will not have access to both identification and research data.</p>\r\n\r\n<p>Of note, the project also retrieves data from a private data source. See privacy policy <a href=\"https://dk.storebox.com/beta/#/webview/terms\" target=\"_blank\">here</a>.</p>\r\n\r\n<p><a class=\"de-identification\" href=\"http://localhost:8888/InformedConsent-app/html/#\" style=\"box-sizing: border-box; color: rgb(114, 191, 68); text-decoration: none; padding: 0px; margin: 0px; transition: background-color 0.2s; background-color: transparent;\">Learn more about de-identification</a></p>','<p>There is no health risk associated with the project, and we expect that the project will benefit you within a few years through better understanding disease determinats and improved lifestyle advice. Despite our comprehensive security efforts to protect data from theft and destruction, we cannot completely rule out unauthorized access to data. We do however consider this risk to be minimal.</p>\r\n\r\n<h1>What happens to my data?</h1>\r\n\r\n<p>Your data will be collected on a secure server in de-identified form. Your contact information is stored on a separate server. To ensure confidentiality, the same person will not have access to both identification and research data.</p>\r\n\r\n<p>Of note, the project also retrieves data from a private data source. See privacy policy <a href=\"https://dk.storebox.com/beta/#/webview/terms\" target=\"_blank\">here</a>.</p>\r\n\r\n<p><a class=\"de-identification\" href=\"http://localhost:8080/InformedConsent-app/html/#\" style=\"box-sizing: border-box; color: rgb(114, 191, 68); text-decoration: none; padding: 0px; margin: 0px; transition: background-color 0.2s; background-color: transparent;\">Learn more about de-identification</a></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8080/InformedConsent-app/html/res/images/file-manager/de-identification.png\" style=\"height:240px; width:427px\" /></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(127,57,22,'en','1970-01-01-scientists-make-discoveries','Scientists make discoveries','','<p><span style=\"color:rgb(35, 31, 32); font-size:14.0625px\">Scientists will use your data to make breakthroughs in medical research and treatments.</span></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(128,56,21,'en','1970-01-01-track-your-health','Track your health','','<p><span style=\"color:rgb(35, 31, 32); font-size:14.0625px\">You can use the health dashboard to track your health data.</span></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(125,50,17,'en','1970-01-01-consent-aproach','Consent aproach','','<p>You sign up by</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Checking the boxes below,</li>\r\n	<li>Enter your contact information, free storebox account email, if different from the above.</li>\r\n	<li>Giving consent with the NEM-ID signature.</li>\r\n</ol>\r\n\r\n<h1>Focusing research:</h1>\r\n\r\n<div class=\"form-inline row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(35, 31, 32); font-family: mariad_pro; font-size: 9px; line-height: 12.8571px;\">\r\n<p>Our initial focus will be on the determinants of flares in chronic diseases. We therefore ask you fill out the items below:</p>\r\n\r\n<p>Do you suffer from one or more chronic diseseas that you would like us to prioritze?</p>\r\n</div>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(126,51,18,'en','1970-01-01-receipt-page','Receipt Page','','<p>Thank you for participating in the project.<br />\r\nA copy of this receipt and your consent has been sent to XXX@XXX.XX</p>\r\n\r\n<p>If you do not have a storebox account:<br />\r\nUse the contact email and phone number you entered above and register here:<br />\r\n<a href=\"https://dk.storebox.com/beta/#/signup/info\" target=\"_blank\">https://dk.storebox.com/beta/#/signup/info</a><br />\r\nYou can read more about storebox here:<br />\r\n<a href=\"https://dk.storebox.com/beta/#/web\" target=\"_blank\">https://dk.storebox.com/beta/#/signup/info</a><br />\r\nMore about the project: <a href=\"index.html\">Back to landing page</a><br />\r\nYou may at any time withdraw from the study: <a href=\"#\">Withdraw consent</a></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(123,48,15,'en','1970-01-01-the-consent','The consent','<p>Your consent to participate is entirely voluntary and you can, at any time, withdraw from the study and have your data deleted. Data identifying you is securely stored and will not be disclosed to any third party without your consent. Any medical treatment you receive is not affected by your participation, but your participation may improve treatment and prevention in the future.</p>\r\n\r\n<p>It is important that we explain the study properly to you, and we will therefore ask some questions at the end of this form, to ensure that we have infromed you adequatly.</p>\r\n\r\n<p>Why participate (background)</p>\r\n\r\n<p>There is a lack of knowlegde regarding how our lifestyle, i.e. everything we eat, drink, breathe, and apply to our skin. affects our health.</p>\r\n\r\n<p>Why participate (method)</p>\r\n\r\n<p>We invite you to help us increase our knowledge of how our lifestyle and surroundings affect our health. You can help us by agreeing to donate your receipts data for research. Along with health information from public records we can discover new knowledge.</p>\r\n\r\n<p>Why participate (usefulness)</p>\r\n\r\n<p>Because this data can be collected over a long time, we can find patterns in data that can potetially lead us to determinants of several diseases and thus perhaps even prevent some diseases in the future, that might affect you or your loved ones.</p>','<p>Your consent to participate is entirely voluntary and you can, at any time, withdraw from the study and have your data deleted. Data identifying you is securely stored and will not be disclosed to any third party without your consent. Any medical treatment you receive is not affected by your participation, but your participation may improve treatment and prevention in the future.</p>\r\n\r\n<p>It is important that we explain the study properly to you, and we will therefore ask some questions at the end of this form, to ensure that we have infromed you adequatly.</p>\r\n\r\n<h2>Why participate (background)</h2>\r\n\r\n<p>There is a lack of knowlegde regarding how our lifestyle, i.e. everything we eat, drink, breathe, and apply to our skin. affects our health.</p>\r\n\r\n<h2>Why participate (method)</h2>\r\n\r\n<p>We invite you to help us increase our knowledge of how our lifestyle and surroundings affect our health. You can help us by agreeing to donate your receipts data for research. Along with health information from public records we can discover new knowledge.</p>\r\n\r\n<h2>Why participate (usefulness)</h2>\r\n\r\n<p>Because this data can be collected over a long time, we can find patterns in data that can potetially lead us to determinants of several diseases and thus perhaps even prevent some diseases in the future, that might affect you or your loved ones.</p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(109,36,9,'en','2016-08-19-who-is-eligible-to-participate','Who is Eligible to Participate','<p>Become a research Partner: How can we better manage the symptoms of Breast Cancer treatment together? Sage Bionetworks is proposing a new approach to monitor health in Women treated for Breast Cancer using mobile apps. We want to understand why some Breast Cancer Survivors recover faster than others, why their symptoms vary over time and what can be done to make the symptoms improve.&nbsp;</p>','<p>Become a research Partner: How can we better manage the symptoms of Breast Cancer treatment together? Sage Bionetworks is proposing a new approach to monitor health in Women treated for Breast Cancer using mobile apps. We want to understand why some Breast Cancer Survivors recover faster than others, why their symptoms vary over time and what can be done to make the symptoms improve.&nbsp;</p>\r\n\r\n<p><a href=\"http://localhost:8888/InformedConsent-app/html/#\">Registration</a></p>','','2016-08-19 00:00:00','2016-08-19 01:00:00','',NULL,NULL,'Y','Y','N',0,'',0,0),(113,38,2,'en','2016-08-19-some-news2','Some news2','<p>Some news</p>','<p>Some news bla bla bla</p>','','2016-08-19 15:45:59','2016-08-19 15:45:59','15393866news-image1.png',NULL,NULL,'Y','Y','N',0,'',0,2),(114,39,2,'en','2016-08-19-some-new1','Some new1','<p>some news</p>','<p>Some news</p>','','2016-08-19 15:50:10','2016-08-19 15:50:10','87832091_81241894_624-b0009777.jpg',NULL,NULL,'Y','Y','N',0,'',0,2),(115,40,5,'en','','Contact information','Stockholms Centralstation, Centralplan, Stockholm, Sweden','','658123654789',NULL,NULL,'test@email.com','18.043277343749992','59.349770365472885','Y','Y','N',0,NULL,0,0),(116,41,3,'en','2016-08-20-international-journal-of-emerging','International Journal of Emerging Trends in Engineering Research (IJETER)','4327HKMJCap.jpg','','','2016-08-20 15:52:05','2016-08-20 15:52:05','8803HKMJCap.jpg',NULL,NULL,'Y','N','N',0,NULL,0,0),(117,42,3,'en','2016-08-20-journal-of-orthopaedic-surgery','Journal of Orthopaedic Surgery','1558homepageImage.jpg','','','2016-08-20 16:02:46','2016-08-20 16:02:46','6502homepageImage.jpg',NULL,NULL,'Y','N','N',0,NULL,0,0),(118,43,3,'en','2016-08-20-hong-kong-journal-of-gynaecology','Hong Kong Journal of Gynaecology, Obstetrics and Midwifery','2317homepageImage_en_US.jpg','','','2016-08-20 16:04:04','2016-08-20 16:04:04','9034homepageImage_en_US.jpg',NULL,NULL,'Y','N','N',0,NULL,0,0),(119,44,3,'en','2016-08-20-asian-journal-of-gerontology-','Asian Journal of Gerontology & Geriatrics','8646images.jpg','','','2016-08-20 16:04:27','2016-08-20 16:04:27','9857images.jpg',NULL,NULL,'Y','N','N',0,NULL,0,0),(120,45,3,'en','2016-08-20-east-asian-archives-of-psychiatry','East Asian Archives of Psychiatry','7581HKJPCap.jpg','','http://mydocuments.ge/phpmyadmin/index.php?db=mydocume_res&token=9d3123d987e4083e2d486ac9db9b181a','2016-08-20 16:04:46','2016-08-20 16:04:46','9352HKJPCap.jpg',NULL,NULL,'Y','N','N',0,NULL,0,0),(121,46,13,'en','46-short-multiple-choice-questionnaire-on-the-above','Short multiple-choice questionnaire on the above content','','','','2016-08-25 18:40:09','0000-00-00 00:00:00','',NULL,NULL,'Y','N','N',0,NULL,0,0),(122,47,14,'en','1970-01-01-aim-and-time-commited','Aim and time commited','<p>This study aims to find new correlations between what you buy and your health, using receipt data donated by you.<br />\r\n<a href=\"http://mydocuments.ge/InformedConsent-app/html/#\" style=\"box-sizing: border-box; color: rgb(243, 130, 134); text-decoration: none; padding: 0px; margin: 0px; transition: background-color 0.2s; background-color: transparent;\">Our initial focus will be on the determinants of flares in chronic diseases.</a><br />\r\nThe purpose of this form is to help you to decide whether you want to participate in the study.<br />\r\nWe expect participating in the study, reading, and filling out this form will take 10 to 15 minutes.</p>\r\n\r\n<p>You must be at least 18 years old to participate.</p>','<p>This study aims to find new correlations between what you buy and your health, using receipt data donated by you.<br />\r\n<a href=\"http://mydocuments.ge/InformedConsent-app/html/#\" style=\"box-sizing: border-box; color: rgb(243, 130, 134); text-decoration: none; padding: 0px; margin: 0px; transition: background-color 0.2s; background-color: transparent;\">Our initial focus will be on the determinants of flares in chronic diseases.</a><br />\r\nThe purpose of this form is to help you to decide whether you want to participate in the study.<br />\r\nWe expect participating in the study, reading, and filling out this form will take 10 to 15 minutes.</p>\r\n\r\n<p>You must be at least 18 years old to participate.</p>\r\n\r\n<h1>The consent</h1>\r\n\r\n<p>Your consent to participate is entirely voluntary and you can, at any time, withdraw from the study and have your data deleted. Data identifying you is securely stored and will not be disclosed to any third party without your consent. Any medical treatment you receive is not affected by your participation, but your participation may improve treatment and prevention in the future.</p>\r\n\r\n<p>It is important that we explain the study properly to you, and we will therefore ask some questions at the end of this form, to ensure that we have infromed you adequatly.</p>\r\n\r\n<h2>Why participate (background)</h2>\r\n\r\n<p>There is a lack of knowlegde regarding how our lifestyle, i.e. everything we eat, drink, breathe, and apply to our skin. affects our health.</p>\r\n\r\n<h2>Why participate (method)</h2>\r\n\r\n<p>We invite you to help us increase our knowledge of how our lifestyle and surroundings affect our health. You can help us by agreeing to donate your receipts data for research. Along with health information from public records we can discover new knowledge.</p>\r\n\r\n<h2>Why participate (usefulness)</h2>\r\n\r\n<p>Because this data can be collected over a long time, we can find patterns in data that can potetially lead us to determinants of several diseases and thus perhaps even prevent some diseases in the future, that might affect you or your loved ones.</p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(106,35,7,'en','1970-01-01-how-this-study-works','How this Study Works','<p>The &quot;Share the Journey&quot; app will use surveys and phone sensor data to collect and track five common symptoms of breast cancer treatment: fatigue, cognitive difficulties, sleep disturbances, mood changes and reduction in exercise performance. Some participants will also be invited to keep a health diary.</p>','<p>The &quot;Share the Journey&quot; app will use surveys and phone sensor data to collect and track five common symptoms of breast cancer treatment: fatigue, cognitive difficulties, sleep disturbances, mood changes and reduction in exercise performance. Some participants will also be invited to keep a health diary.</p>','',NULL,NULL,'3988fake-video.png',NULL,NULL,'Y','N','N',0,NULL,0,0),(112,37,8,'en','2016-08-19-mads-melbye-professor','Mads Melbye, Professor','<p>President Statens Serum Institut</p>','<p>bla bla bla</p>','','2016-08-19 11:15:06','2016-08-19 11:15:06','undefined',NULL,NULL,'Y','Y','N',0,'',0,1),(129,55,20,'en','1970-01-01-perform-simple-tasks','Perform simple tasks','','<p><span style=\"color:rgb(35, 31, 32); font-size:14.0625px\">We&#39;ll ask you to do a few tasks and answer some questions about your</span></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(130,54,19,'en','1970-01-01-give-consent-to-enroll','Give consent to enroll','<p>Understand the risks and benefits of participating.</p>','<p><span style=\"color:rgb(35, 31, 32); font-size:14.0625px\">Understand the risks and benefits of participating.</span></p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0),(103,34,6,'en','1970-01-01-about-this-study','About this study','<p>Become a research Partner: How can we better manage the symptoms of Breast Cancer treatment together? Sage Bionetworks is proposing a new approach to monitor health in Women treated for Breast Cancer using mobile apps. We want to understand why some Breast Cancer Survivors recover faster than others, why their symptoms vary over time and what can be done to make the symptoms improve.</p>','<p>Become a research Partner: How can we better manage the symptoms of Breast Cancer treatment together? Sage Bionetworks is proposing a new approach to monitor health in Women treated for Breast Cancer using mobile apps. We want to understand why some Breast Cancer Survivors recover faster than others, why their symptoms vary over time and what can be done to make the symptoms improve.</p>','',NULL,NULL,'',NULL,NULL,'Y','N','N',0,NULL,0,0);
/*!40000 ALTER TABLE `bc_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_info_additional`
--

DROP TABLE IF EXISTS `bc_info_additional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_info_additional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(10) NOT NULL,
  `info_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `param_1` varchar(500) NOT NULL,
  `param_2` varchar(500) NOT NULL,
  `param_3` varchar(500) NOT NULL,
  `param_4` varchar(500) NOT NULL,
  `value` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_info_additional`
--

LOCK TABLES `bc_info_additional` WRITE;
/*!40000 ALTER TABLE `bc_info_additional` DISABLE KEYS */;
INSERT INTO `bc_info_additional` VALUES (1,'en',46,'This study collects','My receipts data and health dataMuliger','Questionaires that I fill weekly','','','1'),(2,'en',46,'The study poses no health risk to me','True','False','','','2'),(3,'en',46,'It is possible to withdraw my consent at any time','Yes','No?','maybe','','1');
/*!40000 ALTER TABLE `bc_info_additional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_info_files`
--

DROP TABLE IF EXISTS `bc_info_files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_info_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `info_id` int(10) unsigned NOT NULL,
  `file` varchar(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT 'img',
  `language` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_id` (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_info_files`
--

LOCK TABLES `bc_info_files` WRITE;
/*!40000 ALTER TABLE `bc_info_files` DISABLE KEYS */;
INSERT INTO `bc_info_files` VALUES (5,38,'36701840chung3-650x366.gif','','img','en'),(6,38,'15393866news-image1.png','','img','en'),(7,38,'19862809chung4-650x366.jpg','','img','en'),(8,38,'28027020chuan-650x345.jpg','','img','en'),(9,38,'37963260chuan-bin_chung-650x345.jpg','','img','en'),(10,38,'91239912chung2-650x337.jpg','','img','en'),(11,39,'87832091_81241894_624-b0009777.jpg','','img','en');
/*!40000 ALTER TABLE `bc_info_files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_info_to_sections`
--

DROP TABLE IF EXISTS `bc_info_to_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_info_to_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_info_to_sections`
--

LOCK TABLES `bc_info_to_sections` WRITE;
/*!40000 ALTER TABLE `bc_info_to_sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `bc_info_to_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_menu_types`
--

DROP TABLE IF EXISTS `bc_menu_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_menu_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_menu_types`
--

LOCK TABLES `bc_menu_types` WRITE;
/*!40000 ALTER TABLE `bc_menu_types` DISABLE KEYS */;
INSERT INTO `bc_menu_types` VALUES (2,'Main Menu','Main Menu'),(5,'Top Menu','Top Menu'),(3,'Bottom menu','Bottom menu'),(4,'Middle Menu','Middle Menu'),(6,'Homepage 1/4 Block','How this Study Works');
/*!40000 ALTER TABLE `bc_menu_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_pages`
--

DROP TABLE IF EXISTS `bc_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `group_name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `file` varchar(50) CHARACTER SET utf8 NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_pages`
--

LOCK TABLES `bc_pages` WRITE;
/*!40000 ALTER TABLE `bc_pages` DISABLE KEYS */;
INSERT INTO `bc_pages` VALUES (1,'structure','0','structure.php','Y',1),(2,'text_pages','info_management','textpages.php','Y',2),(3,'posts','info_management','newspages.php','Y',3),(4,'list','info_management','listpages.php','N',5),(5,'photo_gallery','info_management','imagegallery.php','Y',8),(6,'users','admin','administrators.php','Y',6),(7,'video_gallery','info_management','videogallery.php','N',7),(8,'banners','info_management','banners.php','Y',10),(9,'textpages','0','textpages.php','N',9),(10,'contact_page','info_management','contactpages.php','Y',14),(11,'groups','admin','groups.php','Y',11),(14,'publications','info_management','publications.php','Y',4),(15,'links','0','links.php','N',15),(16,'textpages','0','textpages.php','N',16),(17,'newspages','0','newspages.php','N',17),(18,'poll','0','poll.php','N',18),(99,'file_manager','0','filemanager.php','Y',16),(98,'analytics','0','analytics.php','N',98),(97,'settings','admin','settings.php','Y',97),(96,'front_users','0','users.php','Y',96),(95,'b2b_table','forum_users','b2b_table.php','N',95),(94,'b2b_rejected_users','0','b2b_rejected_users.php','N',94),(20,'b2b_companies','info_management','listpages.php','N',20),(0,'dashboard','0','dashboard.php','Y',0),(21,'questionnaire','info_management','questionnaire.php','Y',21),(93,'disease','info_management','disease.php','Y',93);
/*!40000 ALTER TABLE `bc_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_relationship`
--

DROP TABLE IF EXISTS `bc_relationship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_relationship` (
  `relation_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(128) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_relationship`
--

LOCK TABLES `bc_relationship` WRITE;
/*!40000 ALTER TABLE `bc_relationship` DISABLE KEYS */;
/*!40000 ALTER TABLE `bc_relationship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_section_to_menu`
--

DROP TABLE IF EXISTS `bc_section_to_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_section_to_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_pk` int(10) unsigned NOT NULL,
  `menu_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_section_to_menu`
--

LOCK TABLES `bc_section_to_menu` WRITE;
/*!40000 ALTER TABLE `bc_section_to_menu` DISABLE KEYS */;
INSERT INTO `bc_section_to_menu` VALUES (2,2,2),(3,3,2),(65,4,2),(5,5,2),(6,6,2),(64,7,2),(8,8,2),(9,9,2),(10,10,2),(11,11,2),(12,12,2),(13,13,2),(14,14,2),(15,15,2),(54,16,4),(17,17,3),(18,18,3),(55,19,4),(20,20,3),(21,21,3),(56,22,4),(23,23,3),(24,24,3),(57,25,4),(26,26,3),(27,27,3),(31,28,5),(32,29,5),(33,30,5);
/*!40000 ALTER TABLE `bc_section_to_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_section_types`
--

DROP TABLE IF EXISTS `bc_section_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_section_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `file` varchar(100) NOT NULL,
  `file_inner` varchar(100) NOT NULL,
  `dynamic` enum('Y','N') NOT NULL,
  `list` enum('Y','N') NOT NULL,
  `info` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_section_types`
--

LOCK TABLES `bc_section_types` WRITE;
/*!40000 ALTER TABLE `bc_section_types` DISABLE KEYS */;
INSERT INTO `bc_section_types` VALUES (1,'Home Page','Home page','home.php','home.php','N','N','Y'),(2,'Text Page','Text Page','text.php','text.php','N','N','Y'),(5,'Contact Page','Contact Page','contact.php','contact.php','N','N','Y'),(7,'Photo Gallery Page','Photo Gallery','gallery.php','gallery.php','N','Y','Y'),(4,'List Page','List Page','list.php','list.php','N','Y','Y'),(3,'Post','post','news.php','news_single.php','N','N','Y'),(8,'Redirect Page','Redirect Page','redirect.php','redirect.php','N','N','Y'),(9,'Submenu Page','Submenu page','submenu_page.php','submenu_page.php','N','N','Y'),(96,'Registration','რეგისტრაცია','registration.php','registration.php','N','N','Y'),(95,'Windraw Consent','Cancel','app.php','app.php','N','N','Y'),(21,'Questionnaire','Questionnaire','questionnaire.php','questionnaire.php','N','N','Y'),(15,'Subscribe','subscribe.php','subscribe.php','subscribe.php','N','N','Y'),(14,'Publications','publications','publications.php','publications.php','N','N','Y');
/*!40000 ALTER TABLE `bc_section_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_sections`
--

DROP TABLE IF EXISTS `bc_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_sections` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `language` varchar(3) NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `slug` varchar(250) NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `style` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk`),
  KEY `id` (`id`,`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_sections`
--

LOCK TABLES `bc_sections` WRITE;
/*!40000 ALTER TABLE `bc_sections` DISABLE KEYS */;
INSERT INTO `bc_sections` VALUES (1,1,'Home','home','en',0,'home',1,1,'','Y',1),(4,2,'News','news','en',0,'news',3,1,'','Y',2),(7,3,'Publication','Publication','en',0,'publications',14,0,'','Y',3),(10,4,'Gallery','Gallery','en',0,'gallery',7,0,'','Y',4),(13,5,'Contact','Contact','en',0,'contact',5,0,'','Y',5),(39,18,'Receipt Page','Receipt Page','en',0,'receipt-page',2,4,'','Y',18),(16,6,'About this study','About this study','en',0,'study',2,1,'icon-who','Y',6),(35,17,'Consent aproach','Consent aproach','en',0,'Consent-aproach',2,3,'','Y',17),(19,7,'How this Study Works','How this Study Works','en',0,'how-study-works',2,1,'icon-running','Y',7),(34,16,'Is there any risk to me?','Is there any risk to me?','en',0,'Is-there-any-risk-to-me',2,5,'','Y',15),(22,8,'Who is Running this study','Who is Running this study','en',0,'who-running-this-study',3,1,'icon-about','Y',8),(32,14,'Aim and time commited','Aim and time commited','en',0,'Aim-and-time-commited',2,2,'','Y',13),(25,9,'Who is Eligible to Participate','Who is Eligible to Participate','en',0,'who-is-eligible-to-participate',2,1,'icon-how','Y',9),(31,13,'Short multiple-choice questionnaire on the above content','Short multiple-choice questionnaire on the above content','en',0,'questionnaire',21,2,'','Y',16),(30,12,'Subscribe','Subscribe','en',0,'subscribe',15,0,'','Y',12),(28,10,'Registration','Registration','en',0,'registration',96,0,'','Y',11),(29,11,'Windraw Consent','Windraw Consent','en',0,'windraw-consent',95,0,'','Y',10),(40,22,'Scientists make discoveries','Scientists make discoveries','en',0,'Scientists-discoveries',2,1,'icon-science','Y',22),(41,21,'Track your health','Track your health','en',0,'Track-health',2,1,'icon-health','Y',21),(42,20,'Perform simple tasks','Perform simple tasks','en',0,'Perform-tasks',2,1,'','Y',20),(43,19,'Give consent to enroll','Give consent to enroll','en',0,'Give-consent',2,1,'icon-enroll','Y',19);
/*!40000 ALTER TABLE `bc_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_settings`
--

DROP TABLE IF EXISTS `bc_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `value` text CHARACTER SET ucs2 NOT NULL,
  `editable` enum('Y','N') NOT NULL DEFAULT 'N',
  `html` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_settings`
--

LOCK TABLES `bc_settings` WRITE;
/*!40000 ALTER TABLE `bc_settings` DISABLE KEYS */;
INSERT INTO `bc_settings` VALUES (2,'banner_type','Footer Left','2','N','N'),(3,'home_posts_count','Home post count','8','Y','N'),(4,'important_top_post_count','Home top posts','6','N','N'),(5,'news_pp','Post per page','8','Y','N'),(6,'gallery_album_pp','Gallery ablum count per page','8','N','N'),(7,'important_post_type','Home News Block','2','N','N'),(8,'important_post_type','Slider (Who is Running this study)','1','N','N'),(13,'contact_email','Contact Email','temosurguladze@gmail.com','Y','N'),(14,'marker_type','4','4','N','N'),(15,'marker_type','2','2','N','N'),(16,'marker_type','3','3','N','N'),(17,'marker_type','1','1','N','N'),(46,'banner_type','Header','5','N','N'),(18,'fb_page','Facebook Page URL','https://www.facebook.com/MOEgeorgia','Y','N'),(20,'twitter_page','Twitter Page URL','https://twitter.com/MOEgovge','Y','N'),(1,'banner_type','Footer Right','1','N','N'),(41,'flickr_page','Flickr Page URL','https://www.flickr.com/photos/moegovge','Y','N'),(42,'youtube_page','Youtube Channel','https://www.youtube.com/user/moegovge','Y','N'),(44,'banner_type','cover entire footer area','4','N','N'),(45,'friendly_ip','Frendly IP','127.0.0.0','Y','N'),(9,'banner_type','Footer Center','3','N','N'),(40,'registration_email_body','Registration email body','<p>გმადლობთ რომ დარეგისტრირდით მოხალისედ</p>','Y','Y'),(43,'public_email','საჯარო ინფორმაციის მოთხოვნის ელ-ფოსტა','temosurguladze@gmail.com','N','N'),(47,'banner_type','Slider','6','N','N'),(48,'logo_url','Logo URL','http://localhost:8888/InformedConsent-app/html/res/images/file-manager/Logo_template.jpg','Y','N');
/*!40000 ALTER TABLE `bc_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_subscribers`
--

DROP TABLE IF EXISTS `bc_subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `language` varchar(10) NOT NULL DEFAULT 'en',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_subscribers`
--

LOCK TABLES `bc_subscribers` WRITE;
/*!40000 ALTER TABLE `bc_subscribers` DISABLE KEYS */;
INSERT INTO `bc_subscribers` VALUES (1,'temosurguladze@gmail.com','en');
/*!40000 ALTER TABLE `bc_subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_user_disease`
--

DROP TABLE IF EXISTS `bc_user_disease`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_user_disease` (
  `user_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_user_disease`
--

LOCK TABLES `bc_user_disease` WRITE;
/*!40000 ALTER TABLE `bc_user_disease` DISABLE KEYS */;
INSERT INTO `bc_user_disease` VALUES (2,4),(2,1);
/*!40000 ALTER TABLE `bc_user_disease` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_users`
--

DROP TABLE IF EXISTS `bc_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `nemid` varchar(100) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `disease_id` int(11) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `storebox_email` varchar(150) NOT NULL,
  `storebox_phone` varchar(150) NOT NULL,
  `registration_date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `new` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_users`
--

LOCK TABLES `bc_users` WRITE;
/*!40000 ALTER TABLE `bc_users` DISABLE KEYS */;
INSERT INTO `bc_users` VALUES (3,NULL,'nika1236@gmail.com','',NULL,NULL,NULL,'+46 71 1111 111','nika1236@gmail.com','+46 71 1111 111','2016-09-27 14:44:14',1,0);
/*!40000 ALTER TABLE `bc_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_video_gal`
--

DROP TABLE IF EXISTS `bc_video_gal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_video_gal` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(10) unsigned NOT NULL,
  `file` varchar(256) NOT NULL,
  `embed` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `language` varchar(3) NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `display` enum('Y','N') NOT NULL,
  `top` enum('Y','N') NOT NULL,
  `date` datetime NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_video_gal`
--

LOCK TABLES `bc_video_gal` WRITE;
/*!40000 ALTER TABLE `bc_video_gal` DISABLE KEYS */;
/*!40000 ALTER TABLE `bc_video_gal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bc_video_gal_group`
--

DROP TABLE IF EXISTS `bc_video_gal_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bc_video_gal_group` (
  `pk` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `language` varchar(3) NOT NULL,
  `date` datetime NOT NULL,
  `active` enum('Y','N') NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bc_video_gal_group`
--

LOCK TABLES `bc_video_gal_group` WRITE;
/*!40000 ALTER TABLE `bc_video_gal_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `bc_video_gal_group` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-24 13:48:34
