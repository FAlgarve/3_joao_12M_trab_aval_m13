-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Jan-2020 às 01:03
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pap_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `armas`
--

DROP TABLE IF EXISTS `armas`;
CREATE TABLE IF NOT EXISTS `armas` (
  `ID_arma` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `tipo_arma` varchar(30) NOT NULL,
  `n_balas` int(11) NOT NULL,
  PRIMARY KEY (`ID_arma`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `armas`
--

INSERT INTO `armas` (`ID_arma`, `Nome`, `tipo_arma`, `n_balas`) VALUES
(1, 'Ak-47', 'Rifle', 30),
(2, 'AWP', 'Sniper', 10),
(3, 'Katana', 'Melee', 0),
(4, 'Usp-s', 'Pistol', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagens`
--

DROP TABLE IF EXISTS `personagens`;
CREATE TABLE IF NOT EXISTS `personagens` (
  `ID_personagem` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(30) NOT NULL,
  `tipo_personagem` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_personagem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `personagens`
--

INSERT INTO `personagens` (`ID_personagem`, `Nome`, `tipo_personagem`) VALUES
(1, 'Tiburcio', 'All in one'),
(2, 'José', 'Melee Master');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizacao`
--

DROP TABLE IF EXISTS `utilizacao`;
CREATE TABLE IF NOT EXISTS `utilizacao` (
  `ID_utilizacao` int(11) NOT NULL AUTO_INCREMENT,
  `ID_personagem` int(11) NOT NULL,
  `ID_arma` int(11) NOT NULL,
  `n_utilizacoes` int(11) NOT NULL,
  `niv_utilizacao` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_utilizacao`),
  KEY `ID_personagem` (`ID_personagem`),
  KEY `ID_arma` (`ID_arma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizacao`
--

INSERT INTO `utilizacao` (`ID_utilizacao`, `ID_personagem`, `ID_arma`, `n_utilizacoes`, `niv_utilizacao`) VALUES
(1, 1, 1, 10, '1,2,3,4,5,6'),
(2, 2, 3, 9, '1,3,4,7');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `utilizacao`
--
ALTER TABLE `utilizacao`
  ADD CONSTRAINT `utilizacao_ibfk_1` FOREIGN KEY (`ID_personagem`) REFERENCES `personagens` (`ID_personagem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilizacao_ibfk_2` FOREIGN KEY (`ID_arma`) REFERENCES `armas` (`ID_arma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
