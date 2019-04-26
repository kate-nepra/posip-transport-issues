-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Úte 09. dub 2019, 17:58
-- Verze serveru: 5.7.21
-- Verze PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `posip`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `aboutphenomenon`
--

DROP TABLE IF EXISTS `aboutphenomenon`;
CREATE TABLE IF NOT EXISTS `aboutphenomenon` (
  `idphenomenon` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `issueid` int(11) NOT NULL,
  `specid` int(11) DEFAULT NULL,
  `phenomenonurgency` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `othertext` text COLLATE utf8_czech_ci,
  `idphoto` int(11) NOT NULL,
  `del` tinyint(4) DEFAULT '0',
  `likes` int(11) NOT NULL DEFAULT '0',
  `dislikes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idphenomenon`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `aboutphenomenon`
--

INSERT INTO `aboutphenomenon` (`idphenomenon`, `latitude`, `longitude`, `issueid`, `specid`, `phenomenonurgency`, `othertext`, `idphoto`, `del`, `likes`, `dislikes`) VALUES
(1, 49.68887062579507, 12.687804060210965, 3, 13, ' 2 - středně akutní ', 'hluboké díry na silnici', 0, 1, 2, 0),
(2, 49.958642491052444, 14.073301591741938, 4, 17, ' 1 - nejakutnější ', '', 0, 0, 17, 0),
(3, 50.20129539215704, 12.749426102905545, 5, 22, ' 1 - nejakutnější ', '', 0, 0, 6, 1),
(4, 50.16040338932882, 13.562046802480836, 4, 15, ' 2 - středně akutní ', '', 0, 1, 8, 0),
(5, 49.001562216166455, 16.687702097362035, 5, 21, ' 3 - příliš nespěchá ', '', 0, 0, 15, 13),
(6, 50.148514743429786, 14.91241452870372, 1, 26, ' 1 - nejakutnější ', '', 0, 0, 2, 0),
(7, 50.23979103275212, 12.751341734347875, 2, 10, ' 2 - středně akutní ', '', 0, 0, 1, 0),
(8, 49.19390473300235, 13.83329758159482, 6, 23, ' 3 - příliš nespěchá ', '', 0, 0, 0, 0),
(9, 50.006029214946764, 15.705657660928637, 4, 15, ' 2 - středně akutní ', '', 0, 0, 0, 0),
(10, 50.14055106265759, 17.48917390769816, 3, 13, ' 2 - středně akutní ', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `idphoto` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  PRIMARY KEY (`idphoto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE IF NOT EXISTS `issues` (
  `issueid` int(11) NOT NULL AUTO_INCREMENT,
  `issuename` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`issueid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `issues`
--

INSERT INTO `issues` (`issueid`, `issuename`) VALUES
(1, 'chybějící značení'),
(2, 'nesprávné značení'),
(3, 'časté výtluky'),
(4, 'nepřehledný úsek'),
(5, 'nebezpečný úsek'),
(6, 'jiné');

-- --------------------------------------------------------

--
-- Struktura tabulky `redablepossition`
--

DROP TABLE IF EXISTS `redablepossition`;
CREATE TABLE IF NOT EXISTS `redablepossition` (
  `region` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `idphenomenon` int(11) NOT NULL,
  `idpossition` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idpossition`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `redablepossition`
--

INSERT INTO `redablepossition` (`region`, `city`, `street`, `idphenomenon`, `idpossition`) VALUES
('Plzeňský kraj', 'Přimda', '198', 1, 1),
('Středočeský kraj', 'Beroun', 'E50', 2, 2),
('Karlovarský kraj', 'Nové Sedlo', 'E49', 3, 3),
('Středočeský kraj', 'Hořovičky', 'E48', 4, 4),
('Jihomoravský kraj', 'Velké Němčice', 'E65', 5, 5),
('Středočeský kraj', 'Hradištko', 'Alej č. 12', 6, 6),
('Karlovarský kraj', 'Chodov', 'Nejdecká', 7, 7),
('Jihočeský kraj', 'Úlehle', '1708', 8, 8),
('Pardubický kraj', 'Starý Mateřov', '32228', 9, 9),
('Moravskoslezský kraj', 'Holčovice', '452', 10, 10);

-- --------------------------------------------------------

--
-- Struktura tabulky `specials`
--

DROP TABLE IF EXISTS `specials`;
CREATE TABLE IF NOT EXISTS `specials` (
  `specid` int(11) NOT NULL AUTO_INCREMENT,
  `specname` text COLLATE utf8_czech_ci NOT NULL,
  `issueid` int(11) NOT NULL,
  PRIMARY KEY (`specid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `specials`
--

INSERT INTO `specials` (`specid`, `specname`, `issueid`) VALUES
(1, 'značení upravující přednost', 1),
(2, 'výstražné dopravní značení', 1),
(3, 'zákazové/příkazové dopravní značky', 1),
(4, 'informativní dopravní značky', 1),
(5, 'světelné signály', 1),
(6, 'vodorovné dopravní značky', 1),
(7, 'nevhodná úprava přednosti', 2),
(8, 'nevhodné zákazové/příkazové značení', 2),
(9, 'chybné informativní značky', 2),
(10, 'nevhodné vodorovné značení', 2),
(11, 'velikost méně než 30 cm', 3),
(12, 'velikost 30 - 50 cm', 3),
(13, 'velikost 50 - 100 cm', 3),
(14, 'velikost více než 1 m', 3),
(15, 'přebujelá okolní vegetace', 4),
(16, 'potřeba dopravního zrcadla', 4),
(17, 'nepřehledný přejezd', 4),
(18, 'špatná výstavba křižovatky', 4),
(19, 'špatná kvalita vozovovky', 5),
(20, 'cizí objekty na vozovce', 5),
(21, 'chybějící potřebná svodidla', 5),
(22, 'nebezpečná výstavba komunikace', 5),
(23, 'osvětlení silnice', 6),
(24, 'údržba silnice', 6),
(25, 'jiné', 6),
(26, 'dodatkové tabulky', 1),
(27, 'jiné', 4),
(28, 'jiné', 5),
(29, 'nevhodné výstražné dopravní značení', 2),
(30, 'chybné dodatkové tabulky', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
