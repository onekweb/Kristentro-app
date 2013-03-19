-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 19 mars 2013 kl 10:13
-- Serverversion: 5.5.28
-- PHP-version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `kristentro`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bibleverse` varchar(60) NOT NULL,
  `love` varchar(60) NOT NULL,
  `prayer` varchar(60) NOT NULL,
  `fast` varchar(60) NOT NULL,
  `church` varchar(60) NOT NULL,
  `gospel` varchar(60) NOT NULL,
  `fellowship` varchar(60) NOT NULL,
  `perseverance` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(41) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'sylvain', '25', 'lubwimi@hotmail.com'),
(2, 'mario', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'mario.onekanda@hotmail.com'),
(3, 'joel', 'a5c95b3d7cb4d0ae05a15c79c79ab458dc2c8f9e ', 'joel@hotmail.com');

-- --------------------------------------------------------

--
-- Tabellstruktur `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prayer` varchar(60) NOT NULL,
  `love` varchar(60) NOT NULL,
  `gospel` varchar(60) NOT NULL,
  `perseverance` varchar(60) NOT NULL,
  `fellowship` varchar(60) NOT NULL,
  `church` varchar(60) NOT NULL,
  `fast` varchar(60) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
