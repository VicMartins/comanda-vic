-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 31-Out-2019 às 20:38
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_mcsujos`
--
CREATE DATABASE IF NOT EXISTS `db_mcsujos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_mcsujos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_categoria` varchar(30) NOT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_item_pedido`
--

CREATE TABLE IF NOT EXISTS `tb_item_pedido` (
  `cd_item_pedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cd_produto_item_Pedido` int(10) unsigned NOT NULL,
  `cd_pedido_item_Pedido` int(10) unsigned NOT NULL,
  `qt_pedido` int(11) NOT NULL,
  PRIMARY KEY (`cd_item_pedido`),
  KEY `cd_produto_item_Pedido` (`cd_produto_item_Pedido`),
  KEY `cd_pedido_item_Pedido` (`cd_pedido_item_Pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `cd_pedido` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nr_mesa` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`cd_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE IF NOT EXISTS `tb_produto` (
  `cd_produto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_produto` varchar(50) DEFAULT NULL,
  `vl_produto` double(8,2) DEFAULT NULL,
  `cd_categoria_produto` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cd_produto`),
  KEY `cd_categoria_produto` (`cd_categoria_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_item_pedido`
--
ALTER TABLE `tb_item_pedido`
  ADD CONSTRAINT `tb_item_pedido_ibfk_1` FOREIGN KEY (`cd_produto_item_Pedido`) REFERENCES `tb_produto` (`cd_produto`),
  ADD CONSTRAINT `tb_item_pedido_ibfk_2` FOREIGN KEY (`cd_pedido_item_Pedido`) REFERENCES `tb_pedido` (`cd_pedido`);

--
-- Limitadores para a tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `tb_produto_ibfk_1` FOREIGN KEY (`cd_categoria_produto`) REFERENCES `tb_categoria` (`cd_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
