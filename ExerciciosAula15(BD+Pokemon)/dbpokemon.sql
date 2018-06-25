-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Out-2016 às 20:37
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pokemon`
--
CREATE DATABASE IF NOT EXISTS `pokemon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pokemon`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `captura`
--

CREATE TABLE IF NOT EXISTS `captura` (
  `id_captura` int(6) NOT NULL AUTO_INCREMENT,
  `pokemon` int(3) NOT NULL,
  `data_captura` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `sexo` char(1) NOT NULL,
  `local` varchar(255) NOT NULL,
  `shiny` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_captura`),
  KEY `pokemon` (`pokemon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokemon`
--

CREATE TABLE IF NOT EXISTS `pokemon` (
  `numero` int(3) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `id_tipo1` int(2) NOT NULL,
  `id_tipo2` int(2) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `tipo1` (`id_tipo1`),
  KEY `tipo2` (`id_tipo2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `fraquezas` varchar(255) DEFAULT NULL,
  `vantagens` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `captura`
--
ALTER TABLE `captura`
  ADD CONSTRAINT `captura_ibfk_1` FOREIGN KEY (`pokemon`) REFERENCES `pokemon` (`numero`);

--
-- Limitadores para a tabela `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_2` FOREIGN KEY (`id_tipo2`) REFERENCES `tipo` (`id_tipo`),
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`id_tipo1`) REFERENCES `tipo` (`id_tipo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
