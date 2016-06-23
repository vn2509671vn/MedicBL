-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2016 at 06:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medic_bl`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `calendar_id` int(11) NOT NULL AUTO_INCREMENT,
  `calendar_date` datetime NOT NULL,
  `calendar_link` text COLLATE utf8_unicode_ci NOT NULL,
  `calendar_descrip` text COLLATE utf8_unicode_ci,
  `calendar_approved` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`calendar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_date` datetime NOT NULL,
  `cat_title_vn` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_descrip_vn` text COLLATE utf8_unicode_ci,
  `cat_title_en` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_descrip_en` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comments_id` int(11) NOT NULL AUTO_INCREMENT,
  `comments_date` datetime NOT NULL,
  `comments_author` text COLLATE utf8_unicode_ci NOT NULL,
  `comments_content` text COLLATE utf8_unicode_ci NOT NULL,
  `comments_approved` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_user_mail` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_user_content` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_user_title` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_root_mail` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `homepage_slider`
--

CREATE TABLE IF NOT EXISTS `homepage_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_link` text COLLATE utf8_unicode_ci NOT NULL,
  `slider_date` datetime NOT NULL,
  `slider_state` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `homepage_video`
--

CREATE TABLE IF NOT EXISTS `homepage_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_link` text COLLATE utf8_unicode_ci NOT NULL,
  `video_date` datetime NOT NULL,
  `video_state` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medic_logo`
--

CREATE TABLE IF NOT EXISTS `medic_logo` (
  `logo_id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_link` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name_vn` varchar(200) CHARACTER SET utf8 NOT NULL,
  `menu_name_en` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `menu_link` text COLLATE utf8_unicode_ci NOT NULL,
  `menu_parent` int(11) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_date` datetime NOT NULL,
  `post_title` text COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8_unicode_ci NOT NULL,
  `post_image` text COLLATE utf8_unicode_ci,
  `post_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
