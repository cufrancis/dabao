-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: xiaojieluo
-- ------------------------------------------------------
-- Server version	5.0.83-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `cursor`
--

DROP TABLE IF EXISTS `cursor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursor` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) default NULL,
  `grade` int(11) default '0',
  `created_at` int(11) default NULL,
  `updated_at` int(11) default NULL,
  `finished_at` int(11) default NULL,
  `teacher_id` int(11) default NULL,
  `desc` text,
  `class` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursor`
--

LOCK TABLES `cursor` WRITE;
/*!40000 ALTER TABLE `cursor` DISABLE KEYS */;
INSERT INTO `cursor` VALUES (1,'计算机',1,NULL,NULL,NULL,2,'computer',1),(2,'数学',0,NULL,NULL,NULL,2,NULL,0),(3,'dfds',2,NULL,NULL,NULL,NULL,'',0),(4,'dfds',1,NULL,NULL,NULL,NULL,'',1),(5,'语文',2,NULL,NULL,NULL,NULL,'这是语文课',1);
/*!40000 ALTER TABLE `cursor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursor_comments`
--

DROP TABLE IF EXISTS `cursor_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursor_comments` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cursor_id` int(11) default NULL,
  `text` text,
  `author_id` int(11) default NULL,
  `created_at` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='课程评论表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursor_comments`
--

LOCK TABLES `cursor_comments` WRITE;
/*!40000 ALTER TABLE `cursor_comments` DISABLE KEYS */;
INSERT INTO `cursor_comments` VALUES (3,1,'dsa',4,1491539952),(2,1,'Test',4,1491536222);
/*!40000 ALTER TABLE `cursor_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(11) NOT NULL auto_increment,
  `cursor_id` int(11) default NULL,
  `url` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher`
--

LOCK TABLES `teacher` WRITE;
/*!40000 ALTER TABLE `teacher` DISABLE KEYS */;
INSERT INTO `teacher` VALUES (1,'TeacherLuo','1234'),(2,'TeacherB','1234');
/*!40000 ALTER TABLE `teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  `realname` varchar(45) default NULL,
  `type` int(11) default NULL,
  `grade` int(11) default NULL,
  `class` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'llnhhy','1234','00000000',1,1,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_teacher`
--

DROP TABLE IF EXISTS `user_teacher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_teacher` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `teacher_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_teacher`
--

LOCK TABLES `user_teacher` WRITE;
/*!40000 ALTER TABLE `user_teacher` DISABLE KEYS */;
INSERT INTO `user_teacher` VALUES (1,4,1),(2,4,2);
/*!40000 ALTER TABLE `user_teacher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_watch_video`
--

DROP TABLE IF EXISTS `user_watch_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_watch_video` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default '0',
  `video_id` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_watch_video`
--

LOCK TABLES `user_watch_video` WRITE;
/*!40000 ALTER TABLE `user_watch_video` DISABLE KEYS */;
INSERT INTO `user_watch_video` VALUES (19,4,1);
/*!40000 ALTER TABLE `user_watch_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL auto_increment,
  `cursor_id` int(11) default NULL,
  `url` varchar(255) default NULL,
  `name` varchar(255) default NULL,
  `created_at` varchar(45) default NULL,
  `updated_at` varchar(45) default NULL,
  `desc` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,1,'./uploads/RARBG_com.mp4','RARBG_com.mp4',NULL,NULL,NULL),(2,1,'./uploads/2.mp4','2.mp4',NULL,NULL,NULL),(3,1,'./uploads/1.mp4','1.mp4',NULL,NULL,NULL),(4,4,'./uploads/RARBG_com1.mp4','RARBG_com1.mp4',NULL,NULL,NULL);
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watch`
--

DROP TABLE IF EXISTS `watch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `watch` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default NULL,
  `video_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watch`
--

LOCK TABLES `watch` WRITE;
/*!40000 ALTER TABLE `watch` DISABLE KEYS */;
/*!40000 ALTER TABLE `watch` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-01 15:53:15
