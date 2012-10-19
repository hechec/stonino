-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2012 at 05:00 AM
-- Server version: 5.5.13
-- PHP Version: 5.3.5

--
-- Database: `stonino`
--

CREATE database IF NOT EXISTS stonino;
use stonino

-- --------------------------------------------------------

--
-- Table structure for table `baptismal`
--

DROP TABLE IF EXISTS `baptismal`;
CREATE TABLE IF NOT EXISTS `baptismal` (
  `id` int(11) NOT NULL,
  `baptism_date` date DEFAULT NULL,
  `legitimacy` varchar(45) DEFAULT NULL,
  `minister` varchar(100) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `book_number` int(11) DEFAULT NULL,
  `page_number` int(11) DEFAULT NULL,
  `line_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `baptismal_godparent`
--

DROP TABLE IF EXISTS `baptismal_godparent`;
CREATE TABLE IF NOT EXISTS `baptismal_godparent` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `residence` varchar(225) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Table structure for table `confirmation`
--

DROP TABLE IF EXISTS `confirmation`;
CREATE TABLE IF NOT EXISTS `confirmation` (
  `id` int(11) NOT NULL,
  `confirmation_date` date DEFAULT NULL,
  `minister` varchar(100) DEFAULT NULL,
  `remarks` varchar(225) DEFAULT NULL,
  `book_number` int(11) DEFAULT NULL,
  `page_number` int(11) DEFAULT NULL,
  `line_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `confirmation_godparent`
--

DROP TABLE IF EXISTS `confirmation_godparent`;
CREATE TABLE IF NOT EXISTS `confirmation_godparent` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `residence` varchar(225) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_by` varchar(45) NOT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `residence` varchar(225) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(75) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  `extensionname` varchar(45) DEFAULT NULL,
  `birthplace` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `civilstatus` varchar(45) DEFAULT NULL,
  `residence` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Table structure for table `priests`
--

DROP TABLE IF EXISTS `priests`;
CREATE TABLE IF NOT EXISTS `priests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(99) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `photo_filename` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `user` (`username`, `password`, `user_type`, `last_login`) VALUES
('jed', '123', 'admin', now());

