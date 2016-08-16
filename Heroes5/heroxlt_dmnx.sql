-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2010 at 07:50 PM
-- Server version: 5.0.90
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heroxlt_h5`
--

-- --------------------------------------------------------

--
-- Table structure for table `abattle`
--

CREATE TABLE IF NOT EXISTS `abattle` (
  `id` bigint(20) NOT NULL auto_increment,
  `heroe` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `heroe2` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `round` int(5) NOT NULL default '1',
  `turn` varchar(5) character set latin1 collate latin1_bin NOT NULL default '2|1',
  `u1` tinyint(1) NOT NULL default '0',
  `u2` tinyint(1) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `active` smallint(1) NOT NULL default '0',
  `text1` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  `text2` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  `xp1` mediumint(9) NOT NULL default '0',
  `xp2` mediumint(9) NOT NULL default '0',
  `win` varchar(9) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `heroe` (`heroe`),
  KEY `time` (`time`,`heroe2`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

CREATE TABLE IF NOT EXISTS `achat` (
  `id` smallint(9) NOT NULL auto_increment,
  `nick` varchar(99) NOT NULL,
  `text` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `achat2`
--

CREATE TABLE IF NOT EXISTS `achat2` (
  `id` int(9) NOT NULL auto_increment,
  `nick` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ally`
--

CREATE TABLE IF NOT EXISTS `ally` (
  `id` int(9) NOT NULL auto_increment,
  `vadas` varchar(99) NOT NULL,
  `pavadinimas` varchar(99) NOT NULL default 'be pavadinimo',
  `logo` varchar(255) NOT NULL default 'http://',
  `pavk` int(1) NOT NULL default '0',
  `topic` varchar(255) NOT NULL,
  `topic2` char(1) NOT NULL default '0',
  `vidurkis` int(99) NOT NULL default '0',
  `taskai` int(99) NOT NULL default '0',
  `top` int(99) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `vadas` (`vadas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `anews`
--

CREATE TABLE IF NOT EXISTS `anews` (
  `id` int(9) NOT NULL,
  `data` varchar(99) NOT NULL,
  `text` varchar(255) NOT NULL,
  `idz` int(9) NOT NULL auto_increment,
  PRIMARY KEY  (`idz`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `army`
--

CREATE TABLE IF NOT EXISTS `army` (
  `username` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(30) character set latin1 collate latin1_bin NOT NULL default '',
  `quantity` int(5) NOT NULL default '1',
  `attack` int(4) NOT NULL default '0',
  `defense` int(4) NOT NULL default '0',
  `health` int(4) NOT NULL default '0',
  `min_damage` int(4) NOT NULL default '0',
  `max_damage` int(4) NOT NULL default '0',
  `expierence` bigint(20) NOT NULL default '0',
  `hp` int(4) NOT NULL default '0',
  `magic` varchar(99) NOT NULL,
  `trk` varchar(9) NOT NULL,
  `fear` varchar(1) NOT NULL default '0',
  PRIMARY KEY  (`username`,`unit`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artifacts`
--

CREATE TABLE IF NOT EXISTS `artifacts` (
  `user` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `kiek` int(11) NOT NULL default '0',
  `type` varchar(99) NOT NULL,
  `det` int(1) NOT NULL default '0',
  `ant` smallint(1) NOT NULL,
  KEY `user` (`user`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ats`
--

CREATE TABLE IF NOT EXISTS `ats` (
  `zod` varchar(99) NOT NULL,
  `newz` varchar(99) NOT NULL,
  `oldz` varchar(99) NOT NULL,
  `kzod` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aukatas`
--

CREATE TABLE IF NOT EXISTS `aukatas` (
  `id` int(9) NOT NULL auto_increment,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=274 ;

-- --------------------------------------------------------

--
-- Table structure for table `aukcionas`
--

CREATE TABLE IF NOT EXISTS `aukcionas` (
  `user` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `id` int(9) NOT NULL auto_increment,
  `preke` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `gold` int(99) NOT NULL,
  `other` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `exp` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `type` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `patv` smallint(99) NOT NULL,
  `unit` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `kam` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci AUTO_INCREMENT=280 ;

-- --------------------------------------------------------

--
-- Table structure for table `barak`
--

CREATE TABLE IF NOT EXISTS `barak` (
  `user` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `kiek` int(99) NOT NULL,
  `unit` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `atk` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `def` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `mindmg` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `maxdmg` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `healt` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `hp` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `exp` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  KEY `user` (`user`),
  KEY `unit` (`unit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `castle`
--

CREATE TABLE IF NOT EXISTS `castle` (
  `id` bigint(20) NOT NULL auto_increment,
  `location` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `expierence` bigint(20) NOT NULL default '0',
  `resource` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `q_unit` int(5) NOT NULL default '0',
  `q_res` int(5) NOT NULL default '0',
  `artifact` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `castle` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `location` (`location`),
  KEY `id` (`id`,`location`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `castles`
--

CREATE TABLE IF NOT EXISTS `castles` (
  `castle` varchar(99) NOT NULL,
  `user` varchar(99) NOT NULL,
  `statybos` varchar(1) NOT NULL default '0',
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cbattle`
--

CREATE TABLE IF NOT EXISTS `cbattle` (
  `id` bigint(20) NOT NULL default '0',
  `heroe` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `round` int(5) NOT NULL default '0',
  `turn` varchar(5) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `expierence` bigint(20) NOT NULL default '0',
  `resource` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `q_unit` int(5) NOT NULL default '0',
  `q_res` int(5) NOT NULL default '0',
  `artifact` varchar(80) character set latin1 collate latin1_bin NOT NULL default '',
  `health` int(4) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `active` smallint(1) NOT NULL default '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cbuildings`
--

CREATE TABLE IF NOT EXISTS `cbuildings` (
  `castle` varchar(99) NOT NULL,
  `build` varchar(99) NOT NULL,
  `lvl` varchar(99) NOT NULL,
  `time` int(11) NOT NULL,
  `leid` varchar(9) NOT NULL,
  `upg` varchar(99) NOT NULL,
  `type` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(9) NOT NULL auto_increment,
  `nick` varchar(99) NOT NULL,
  `text` varchar(25555) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(4) NOT NULL auto_increment,
  `level` smallint(1) NOT NULL default '0',
  `title` text NOT NULL,
  `topic` text NOT NULL,
  `topics` bigint(20) NOT NULL default '0',
  `posts` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gchat`
--

CREATE TABLE IF NOT EXISTS `gchat` (
  `id` smallint(9) NOT NULL auto_increment,
  `nick` varchar(99) NOT NULL,
  `text` varchar(999) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `gchat2`
--

CREATE TABLE IF NOT EXISTS `gchat2` (
  `id` int(9) NOT NULL auto_increment,
  `nick` varchar(99) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ignor`
--

CREATE TABLE IF NOT EXISTS `ignor` (
  `user` varchar(99) NOT NULL,
  `blocked` varchar(99) NOT NULL,
  KEY `user` (`user`),
  KEY `blocked` (`blocked`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `id` int(9) NOT NULL auto_increment,
  `user` varchar(99) NOT NULL,
  `text` varchar(555) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jura`
--

CREATE TABLE IF NOT EXISTS `jura` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `kiek` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `time` varchar(99) NOT NULL,
  `rod` varchar(1) NOT NULL default '1',
  `time2` varchar(99) NOT NULL,
  `subtype` varchar(99) NOT NULL,
  `res` varchar(99) NOT NULL,
  `kres` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `loc` (`loc`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `kls`
--

CREATE TABLE IF NOT EXISTS `kls` (
  `id` smallint(9) NOT NULL auto_increment,
  `name` varchar(99) NOT NULL,
  `zod` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `laivynas`
--

CREATE TABLE IF NOT EXISTS `laivynas` (
  `user` varchar(99) NOT NULL,
  `loc` varchar(9) NOT NULL default 'a1',
  `ejimas` int(99) NOT NULL default '0',
  `gold` varchar(99) NOT NULL default '0',
  `gem` varchar(99) NOT NULL default '0',
  `exp` varchar(99) NOT NULL default '0',
  `sulfur` varchar(99) NOT NULL default '0',
  `crystal` varchar(99) NOT NULL default '0',
  `mercury` varchar(99) NOT NULL default '0',
  `name` varchar(99) NOT NULL,
  `kart` varchar(99) NOT NULL default '0',
  `nart` varchar(99) NOT NULL,
  `upggold` varchar(9) NOT NULL default '0',
  `upgexp` varchar(9) NOT NULL default '0',
  `upgcrystal` varchar(9) NOT NULL default '0',
  `upgsulfur` varchar(9) NOT NULL default '0',
  `upggem` varchar(9) NOT NULL default '0',
  `upgmercury` varchar(9) NOT NULL default '0',
  `hp` int(99) NOT NULL default '0',
  `cannons` int(99) NOT NULL default '0',
  `maxcan` int(99) NOT NULL default '0',
  `pirat` varchar(99) NOT NULL default '0',
  `secury` varchar(99) NOT NULL default '1',
  `truks` varchar(99) NOT NULL default '0',
  `wood` int(99) NOT NULL default '0',
  `stone` int(99) NOT NULL default '0',
  `art` varchar(555) NOT NULL,
  KEY `user` (`user`),
  KEY `loc` (`loc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magic`
--

CREATE TABLE IF NOT EXISTS `magic` (
  `user` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  `name` varchar(99) collate utf8_lithuanian_ci NOT NULL,
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE IF NOT EXISTS `map` (
  `id` bigint(20) NOT NULL auto_increment,
  `location` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `expierence` bigint(20) NOT NULL default '0',
  `resource` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `q_unit` int(5) NOT NULL default '0',
  `q_res` int(5) NOT NULL default '0',
  `artifact` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `castle` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `location` (`location`),
  KEY `id` (`id`,`location`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5710 ;

-- --------------------------------------------------------

--
-- Table structure for table `mapchat`
--

CREATE TABLE IF NOT EXISTS `mapchat` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(99) NOT NULL,
  `text` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `text` (`text`),
  KEY `user` (`user`,`loc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `mlog`
--

CREATE TABLE IF NOT EXISTS `mlog` (
  `id` int(11) NOT NULL auto_increment,
  `text` varchar(9999) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE IF NOT EXISTS `moderators` (
  `nick` varchar(20) NOT NULL default '',
  `forum` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`nick`,`forum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modlog`
--

CREATE TABLE IF NOT EXISTS `modlog` (
  `id` bigint(20) NOT NULL auto_increment,
  `nick` varchar(14) NOT NULL default '',
  `action` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `date` varchar(20) NOT NULL default '',
  `message` text NOT NULL,
  `name` varchar(14) NOT NULL default '',
  `forum` bigint(20) NOT NULL default '0',
  `topic` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `action` (`action`),
  KEY `nick` (`nick`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `nbattle`
--

CREATE TABLE IF NOT EXISTS `nbattle` (
  `id` bigint(20) NOT NULL default '0',
  `heroe` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `round` int(5) NOT NULL default '0',
  `turn` varchar(5) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `expierence` bigint(20) NOT NULL default '0',
  `resource` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `q_unit` int(5) NOT NULL default '0',
  `q_res` int(5) NOT NULL default '0',
  `artifact` varchar(80) character set latin1 collate latin1_bin NOT NULL default '',
  `health` int(4) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `active` smallint(1) NOT NULL default '0',
  `vnd` varchar(6) NOT NULL default '0',
  KEY `id` (`id`),
  KEY `heroe` (`heroe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(9) NOT NULL auto_increment,
  `title` varchar(99) NOT NULL,
  `zin` varchar(255) NOT NULL,
  `date` varchar(99) NOT NULL,
  `user` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `news2`
--

CREATE TABLE IF NOT EXISTS `news2` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `zin` varchar(255) NOT NULL,
  `date` varchar(99) NOT NULL,
  `user` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `numer`
--

CREATE TABLE IF NOT EXISTS `numer` (
  `nr` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE IF NOT EXISTS `objects` (
  `id` bigint(20) NOT NULL auto_increment,
  `location` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  `object` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `time` bigint(20) NOT NULL default '0',
  `info` varchar(255) character set latin1 collate latin1_bin NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `location` (`location`,`object`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

-- --------------------------------------------------------

--
-- Table structure for table `pbattle`
--

CREATE TABLE IF NOT EXISTS `pbattle` (
  `id` bigint(20) NOT NULL default '0',
  `heroe` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `round` int(5) NOT NULL default '0',
  `turn` varchar(5) character set latin1 collate latin1_bin NOT NULL default '',
  `unit` varchar(40) character set latin1 collate latin1_bin NOT NULL default '',
  `expierence` bigint(20) NOT NULL default '0',
  `resource` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `q_unit` int(5) NOT NULL default '0',
  `q_res` int(5) NOT NULL default '0',
  `artifact` varchar(80) character set latin1 collate latin1_bin NOT NULL default '',
  `health` int(4) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `active` smallint(1) NOT NULL default '0',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
  `id` bigint(20) NOT NULL auto_increment,
  `nick` varchar(20) NOT NULL default '',
  `name` varchar(20) NOT NULL default '',
  `text` text NOT NULL,
  `date` varchar(14) NOT NULL default '',
  `active` smallint(1) NOT NULL default '0',
  `action` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `nick` (`nick`),
  KEY `nick_2` (`nick`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=410 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) NOT NULL auto_increment,
  `topic` bigint(20) NOT NULL default '0',
  `nick` varchar(20) NOT NULL default '',
  `date` varchar(14) NOT NULL default '',
  `text` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `topic` (`topic`),
  KEY `nick` (`nick`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `q_turnyras`
--

CREATE TABLE IF NOT EXISTS `q_turnyras` (
  `user` varchar(99) NOT NULL default '',
  `wins` int(99) NOT NULL default '0',
  `tes` varchar(99) NOT NULL default '',
  `iki` varchar(99) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refas`
--

CREATE TABLE IF NOT EXISTS `refas` (
  `ref` varchar(99) NOT NULL,
  `refa` varchar(99) NOT NULL,
  `user` varchar(66) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(9) NOT NULL auto_increment,
  `code` varchar(99) NOT NULL,
  `act` int(9) NOT NULL default '0',
  `suma` varchar(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reglog`
--

CREATE TABLE IF NOT EXISTS `reglog` (
  `id` int(9) NOT NULL auto_increment,
  `text` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rkl`
--

CREATE TABLE IF NOT EXISTS `rkl` (
  `id` int(7) NOT NULL auto_increment,
  `url` varchar(77) NOT NULL,
  `ant` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `robo`
--

CREATE TABLE IF NOT EXISTS `robo` (
  `sus` varchar(9) NOT NULL,
  `sustime` varchar(99) NOT NULL,
  `nrtm` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smilies`
--

CREATE TABLE IF NOT EXISTS `smilies` (
  `code` varchar(40) NOT NULL default '',
  `url` varchar(80) NOT NULL default '',
  `alt` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE IF NOT EXISTS `sms` (
  `id` bigint(20) NOT NULL auto_increment,
  `data` varchar(99) NOT NULL,
  `raktas` varchar(99) NOT NULL,
  `sms` varchar(99) NOT NULL,
  `kaina` varchar(99) NOT NULL,
  `oper` varchar(99) NOT NULL,
  `nr` varchar(99) NOT NULL,
  `time` varchar(99) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smscodes`
--

CREATE TABLE IF NOT EXISTS `smscodes` (
  `number` varchar(20) NOT NULL default '0',
  `code` varchar(20) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `name` varchar(99) NOT NULL,
  `spec` varchar(99) NOT NULL,
  `uname` varchar(99) NOT NULL,
  `max` varchar(99) NOT NULL default '0',
  `topic` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `day` bigint(20) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `ns` int(1) NOT NULL default '0',
  PRIMARY KEY  (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` bigint(20) NOT NULL auto_increment,
  `forum` bigint(20) NOT NULL default '0',
  `topic` text NOT NULL,
  `author` varchar(20) NOT NULL default '',
  `posts` bigint(20) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `pinned` smallint(1) NOT NULL default '0',
  `closed` smallint(1) NOT NULL default '0',
  `hidden` smallint(1) NOT NULL default '0',
  `bold` smallint(1) NOT NULL default '0',
  `created` bigint(20) NOT NULL default '0',
  `viewed` bigint(20) NOT NULL default '0',
  `poll` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id` (`id`),
  KEY `forum` (`forum`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE IF NOT EXISTS `trade` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(99) NOT NULL,
  `name2` varchar(99) NOT NULL,
  `stk` int(9) NOT NULL default '0',
  `stk2` int(9) NOT NULL default '0',
  `act` int(9) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `trade2`
--

CREATE TABLE IF NOT EXISTS `trade2` (
  `id` varchar(9) NOT NULL,
  `preke` varchar(99) NOT NULL,
  `kiek` int(9) NOT NULL,
  `user` varchar(99) NOT NULL,
  KEY `user` (`user`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `translate`
--

CREATE TABLE IF NOT EXISTS `translate` (
  `en` text NOT NULL,
  `lt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `turnyras`
--

CREATE TABLE IF NOT EXISTS `turnyras` (
  `user` varchar(99) NOT NULL,
  `wins` int(99) NOT NULL,
  `tes` varchar(99) NOT NULL,
  `iki` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL default '',
  `password` varchar(32) character set latin1 collate latin1_bin NOT NULL default '',
  `session` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `class` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `identify` varchar(20) character set latin1 collate latin1_bin NOT NULL default '',
  `level` int(3) NOT NULL default '1',
  `expierence` bigint(20) NOT NULL default '0',
  `attack` int(3) NOT NULL default '0',
  `defense` int(3) NOT NULL default '0',
  `power` int(3) NOT NULL default '0',
  `knowledge` int(3) NOT NULL default '0',
  `spell_points` int(5) NOT NULL default '0',
  `spell_book` smallint(1) NOT NULL default '0',
  `day` int(5) NOT NULL default '1',
  `gold` bigint(20) NOT NULL default '1000',
  `mercury` int(5) NOT NULL default '0',
  `sulfur` int(5) NOT NULL default '0',
  `crystal` int(5) NOT NULL default '0',
  `gem` int(5) NOT NULL default '0',
  `skills` text NOT NULL,
  `artifacts` text NOT NULL,
  `status` varchar(40) character set latin1 collate latin1_bin NOT NULL default 'Tavern Dweller',
  `topics` int(3) NOT NULL default '0',
  `posts` int(5) NOT NULL default '0',
  `pluses` int(5) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  `place` varchar(180) character set latin1 collate latin1_bin NOT NULL default '',
  `forum` bigint(20) NOT NULL default '0',
  `topic` bigint(20) NOT NULL default '0',
  `online` bigint(20) NOT NULL default '0',
  `reg` bigint(20) NOT NULL default '0',
  `login` bigint(20) NOT NULL default '0',
  `llogin` bigint(20) NOT NULL default '0',
  `ban` bigint(20) NOT NULL default '0',
  `flood` bigint(20) NOT NULL default '0',
  `new_pm` int(3) NOT NULL default '0',
  `all_pm` int(3) NOT NULL default '0',
  `active` smallint(1) NOT NULL default '0',
  `battle` bigint(20) NOT NULL default '0',
  `pics` tinyint(1) NOT NULL default '1',
  `immortal` int(11) NOT NULL default '0',
  `arena` int(11) NOT NULL default '0',
  `enm` varchar(99) NOT NULL,
  `skill_points` int(9) NOT NULL default '0',
  `onl` varchar(99) NOT NULL,
  `mana` int(9) NOT NULL,
  `maxmana` int(9) NOT NULL,
  `fre` varchar(99) NOT NULL,
  `kred` int(7) NOT NULL default '0',
  `shop` int(11) NOT NULL,
  `ally` char(9) NOT NULL default '0',
  `kvietimas` int(9) NOT NULL default '0',
  `ip` varchar(99) NOT NULL,
  `perv` int(99) NOT NULL,
  `trade` int(1) NOT NULL default '0',
  `ns` int(1) NOT NULL default '0',
  `wood` int(9) NOT NULL default '0',
  `stone` int(9) NOT NULL default '0',
  `sus` varchar(9) NOT NULL,
  `ntm` varchar(99) NOT NULL,
  `point` int(9) NOT NULL default '0',
  `atve` int(9) NOT NULL default '0',
  `kskil` varchar(9) NOT NULL default '8',
  `member` varchar(9) NOT NULL default '1',
  `informacija` varchar(1) NOT NULL default '0',
  `keys` varchar(99) NOT NULL default '0|0|0|0|0',
  `rain` varchar(99) NOT NULL default '0',
  `ship` varchar(66) NOT NULL default '0',
  `blokas` varchar(1) NOT NULL,
  `sekme` int(1) NOT NULL,
  `morale` int(1) NOT NULL,
  `village_hall` varchar(1) NOT NULL default '1',
  `town_hall` varchar(1) NOT NULL default '0',
  `city_hall` varchar(1) NOT NULL default '0',
  `capitol` varchar(1) NOT NULL default '0',
  `fort` varchar(1) NOT NULL default '0',
  `citadel` varchar(1) NOT NULL default '0',
  `castle` varchar(1) NOT NULL default '0',
  `magic_gild` varchar(1) NOT NULL default '0',
  `marketplace` varchar(1) NOT NULL default '0',
  `deleted` varchar(1) NOT NULL default '0',
  `quests` int(9) NOT NULL default '0',
  `deletetime` int(11) NOT NULL,
  `frenzytype` int(1) NOT NULL default '1',
  `kadabuvoon` varchar(50) NOT NULL default '0',
  `atve2` int(1) NOT NULL default '0',
  `objects` int(99) NOT NULL,
  `country` varchar(99) NOT NULL,
  `style` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `session_2` (`session`),
  KEY `session` (`session`),
  KEY `time` (`time`),
  KEY `time_2` (`time`,`place`),
  KEY `time_3` (`time`,`place`,`forum`),
  KEY `time_4` (`time`,`place`,`topic`),
  KEY `deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

-- --------------------------------------------------------

--
-- Table structure for table `viktorina`
--

CREATE TABLE IF NOT EXISTS `viktorina` (
  `id` int(15) unsigned NOT NULL default '0',
  `cid` int(15) unsigned NOT NULL default '0',
  `ats` varchar(200) NOT NULL default '',
  `new` int(15) unsigned NOT NULL default '0',
  `time` int(15) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viktorina2`
--

CREATE TABLE IF NOT EXISTS `viktorina2` (
  `id` int(15) unsigned NOT NULL,
  `cid` int(15) unsigned NOT NULL,
  `ats` varchar(200) NOT NULL,
  `new` int(15) unsigned NOT NULL,
  `time` int(15) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viktorinos_klausimai`
--

CREATE TABLE IF NOT EXISTS `viktorinos_klausimai` (
  `id` int(15) unsigned NOT NULL auto_increment,
  `klausimas` text NOT NULL,
  `atsakymas` varchar(200) NOT NULL default '',
  `taskai` int(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `viktorinos_klausimai2`
--

CREATE TABLE IF NOT EXISTS `viktorinos_klausimai2` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `klausimas` varchar(500) NOT NULL,
  `atsakymas` varchar(500) NOT NULL,
  `taskai` int(10) unsigned NOT NULL,
  `nick` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `id` bigint(20) NOT NULL auto_increment,
  `nick` varchar(14) NOT NULL default '',
  `topic` bigint(20) NOT NULL default '0',
  `time` bigint(20) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `nick` (`nick`,`topic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `war`
--

CREATE TABLE IF NOT EXISTS `war` (
  `user` varchar(99) NOT NULL,
  `machine` varchar(99) NOT NULL,
  `hp` int(9) NOT NULL,
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wins`
--

CREATE TABLE IF NOT EXISTS `wins` (
  `user` varchar(99) NOT NULL,
  `class` varchar(99) NOT NULL,
  `lvl` varchar(9) NOT NULL,
  KEY `user` (`user`),
  KEY `class` (`class`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
