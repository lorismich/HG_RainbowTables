-- Author: 	Loris <BlackCode> Mich
-- Email: 	loris@lorismich.it
-- Web:		www.lorismich.it

-- Generato il: Apr 14, 2012 alle 06:40
-- Versione del server: 5.1.58
-- Versione PHP: 5.3.6-13ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Struttura della tabella `HG_rainbow_works`
--

CREATE TABLE IF NOT EXISTS `HG_rainbow_works` (

  `id` 			int(11) 		NOT NULL AUTO_INCREMENT 		COMMENT 'ID or Token',
  `mail` 		varchar(50) 	NOT NULL 						COMMENT 'Mail',
  `hash` 		varchar(32) 	NOT NULL 						COMMENT 'Hash',
  `timestamp` 	int(20) 		NOT NULL 						COMMENT 'Max value set to: Sat, 20 Nov 2286 17:46:39 GMT',
  `status` 		int(1) 			NOT NULL DEFAULT 0				COMMENT 'Status request flag',
  
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1 ;

