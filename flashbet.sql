-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Jun-2019 às 18:00
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flashbet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bets`
--

DROP TABLE IF EXISTS `bets`;
CREATE TABLE IF NOT EXISTS `bets` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `firstplace` varchar(150) NOT NULL,
  `secondplace` varchar(150) NOT NULL,
  `thirdplace` varchar(150) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bets`
--

INSERT INTO `bets` (`id`, `username`, `firstplace`, `secondplace`, `thirdplace`) VALUES
(1, 'admin', 'Lewis Hamilton', 'Valtteri Bottas', 'Charles Leclerc'),
(2, 'admin', 'Lewis Hamilton', 'Valtteri Bottas', 'Carlos Sainz'),
(3, 'admin', 'Lewis Hamilton', 'Valtteri Bottas', 'Charles Leclerc');

-- --------------------------------------------------------

--
-- Estrutura da tabela `drivers`
--

DROP TABLE IF EXISTS `drivers`;
CREATE TABLE IF NOT EXISTS `drivers` (
  `driverID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `nationality` varchar(150) NOT NULL,
  UNIQUE KEY `driverID` (`driverID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `drivers`
--

INSERT INTO `drivers` (`driverID`, `name`, `surname`, `nationality`) VALUES
(1, 'Alexander', 'Albon', 'Thai'),
(2, 'Valtteri', 'Bottas', 'Finnish'),
(3, 'Pierre', 'Gasly', 'French'),
(4, 'Antonio', 'Giovinazzi', 'Italian'),
(5, 'Romain', 'Grosjean', 'French'),
(6, 'Lewis', 'Hamilton', 'British'),
(7, 'Nico', 'Hulkenberg', 'German'),
(8, 'Robert', 'Kubica', 'Polish'),
(9, 'Daniil', 'Kvyat', 'Russian'),
(10, 'Charles', 'Leclerc', 'Monegasque'),
(11, 'Kevin', 'Magnussen', 'Danish'),
(12, 'Lando', 'Norris', 'British'),
(13, 'Sergio', 'Pérez', 'Mexican'),
(14, 'Kimi', 'Raikkonen', 'Finnish'),
(15, 'Daniel', 'Ricciardo', 'Australian'),
(16, 'George', 'Russell', 'British'),
(17, 'Carlos', 'Sainz', 'Spanish'),
(18, 'Lance', 'Stroll', 'Canadian'),
(19, 'Max', 'Verstappen', 'Dutch'),
(20, 'Sebastian', 'Vettel', 'German'),
(21, 'Alexander', 'Albon', 'Thai'),
(22, 'Valtteri', 'Bottas', 'Finnish'),
(23, 'Pierre', 'Gasly', 'French'),
(24, 'Antonio', 'Giovinazzi', 'Italian'),
(25, 'Romain', 'Grosjean', 'French'),
(26, 'Lewis', 'Hamilton', 'British'),
(27, 'Nico', 'HÃ¼lkenberg', 'German'),
(28, 'Robert', 'Kubica', 'Polish'),
(29, 'Daniil', 'Kvyat', 'Russian'),
(30, 'Charles', 'Leclerc', 'Monegasque'),
(31, 'Kevin', 'Magnussen', 'Danish'),
(32, 'Lando', 'Norris', 'British'),
(33, 'Sergio', 'PÃ©rez', 'Mexican'),
(34, 'Kimi', 'RÃ¤ikkÃ¶nen', 'Finnish'),
(35, 'Daniel', 'Ricciardo', 'Australian'),
(36, 'George', 'Russell', 'British'),
(37, 'Carlos', 'Sainz', 'Spanish'),
(38, 'Lance', 'Stroll', 'Canadian'),
(39, 'Max', 'Verstappen', 'Dutch'),
(40, 'Sebastian', 'Vettel', 'German');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultsaustralia`
--

DROP TABLE IF EXISTS `resultsaustralia`;
CREATE TABLE IF NOT EXISTS `resultsaustralia` (
  `position` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `points` int(20) NOT NULL,
  `driver` varchar(150) NOT NULL,
  UNIQUE KEY `position` (`position`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resultsaustralia`
--

INSERT INTO `resultsaustralia` (`position`, `points`, `driver`) VALUES
(1, 26, 'Valtteri Bottas'),
(2, 18, 'Lewis Hamilton'),
(3, 15, 'Max Verstappen'),
(4, 12, 'Sebastian Vettel'),
(5, 10, 'Charles Leclerc'),
(6, 8, 'Kevin Magnussen'),
(7, 6, 'Nico Hulkenberg'),
(8, 4, 'Kimi Raikkonen'),
(9, 2, 'Lance Stroll'),
(10, 1, 'Daniil Kvyat'),
(11, 0, 'Pierre Gasly'),
(12, 0, 'Lando Norris'),
(13, 0, 'Sergio Perez'),
(14, 0, 'Alexander Albon'),
(15, 0, 'Antonio Giovinazzi'),
(16, 0, 'George Russell'),
(17, 0, 'Robert Kubica'),
(18, 0, 'Romain Grosjean'),
(19, 0, 'Daniel Ricciardo'),
(20, 0, 'Carlos Sainz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultsbahrain`
--

DROP TABLE IF EXISTS `resultsbahrain`;
CREATE TABLE IF NOT EXISTS `resultsbahrain` (
  `position` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `points` int(20) NOT NULL,
  `driver` varchar(150) NOT NULL,
  UNIQUE KEY `position` (`position`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resultsbahrain`
--

INSERT INTO `resultsbahrain` (`position`, `points`, `driver`) VALUES
(1, 25, 'Lewis Hamilton'),
(2, 18, 'Valtteri Bottas'),
(3, 16, 'Charles Leclerc'),
(4, 12, 'Max Verstappen'),
(5, 10, 'Sebastian Vettel'),
(6, 8, 'Lando Norris'),
(7, 6, 'Kimi Raikkonen'),
(8, 4, 'Pierre Gasly'),
(9, 2, 'Alexander Albon'),
(10, 1, 'Sergio Pérez');

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(150) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `schedule`
--

INSERT INTO `schedule` (`id`, `location`) VALUES
(1, 'Australian Grand Prix'),
(2, 'Bahrain Grand Prix'),
(3, 'Chinese Grand Prix'),
(4, 'Azerbaijan Grand Prix'),
(5, 'Spanish Grand Prix'),
(6, 'Monaco Grand Prix'),
(7, 'Canadian Grand Prix'),
(8, 'French Grand Prix'),
(9, 'Austrian Grand Prix'),
(10, 'British Grand Prix'),
(11, 'German Grand Prix'),
(12, 'Hungarian Grand Prix'),
(13, 'Belgian Grand Prix'),
(14, 'Italian Grand Prix'),
(15, 'Singapore Grand Prix'),
(16, 'Russian Grand Prix'),
(17, 'Japanese Grand Prix'),
(18, 'Mexican Grand Prix'),
(19, 'United States Grand Prix'),
(20, 'Brazilian Grand Prix'),
(21, 'Abu Dhabi Grand Prix');

-- --------------------------------------------------------

--
-- Estrutura da tabela `standings`
--

DROP TABLE IF EXISTS `standings`;
CREATE TABLE IF NOT EXISTS `standings` (
  `position` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `driver` varchar(150) NOT NULL,
  UNIQUE KEY `position` (`position`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `standings`
--

INSERT INTO `standings` (`position`, `driver`) VALUES
(1, 'Lewis Hamilton'),
(2, 'Valtteri Bottas'),
(3, 'Sebastian Vettel'),
(4, 'Max Verstappen'),
(5, 'Charles Leclerc'),
(6, 'Pierre Gasly'),
(7, 'Carlos Sainz'),
(8, 'Daniel Ricciardo'),
(9, 'Kimi Raikkonen'),
(10, 'Kevin Magnussen'),
(11, 'Nico Hulkenberg'),
(12, 'Lando Norris'),
(13, 'Sergio Perez'),
(14, 'Daniil Kvyat'),
(15, 'Alexander Albon'),
(16, 'Lance Stroll'),
(17, 'Romain Grosjean'),
(18, 'Antonio Giovinazzi'),
(19, 'George Russell'),
(20, 'Robert Kubica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `age` int(2) NOT NULL,
  `funds` int(255) NOT NULL DEFAULT '1000',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `age`, `funds`) VALUES
(1, 'admin', 'flashbet@gmail.com', 'BettingSite', 20, 995);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
