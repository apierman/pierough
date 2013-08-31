-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 20. Mai 2013 um 22:46
-- Server Version: 5.5.29-log
-- PHP-Version: 5.3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `login`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
 user_id bigint(20) NOT NULL AUTO_INCREMENT ,
 user_name varchar(64) COLLATE utf8_unicode_ci NOT NULL ,
 user_password_hash char(60) COLLATE utf8_unicode_ci NOT NULL ,
 user_email varchar(64) COLLATE utf8_unicode_ci NOT NULL ,
 user_active tinyint(1) NOT NULL DEFAULT '0' ,
 user_activation_hash varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL ,
 user_password_reset_hash char(40) COLLATE utf8_unicode_ci DEFAULT NULL ,
 user_password_reset_timestamp bigint(20) DEFAULT NULL ,
 PRIMARY KEY (user_id),
 UNIQUE KEY `ser_name (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
