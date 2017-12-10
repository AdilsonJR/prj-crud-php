-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Dez-2017 às 06:53
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prj_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(256) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `rg` varchar(100) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_completo`, `idade`, `rg`, `cpf`, `estado_civil`, `email`, `senha`) VALUES
(5, 'adilson alves', 21, '19.263.256-5', '387.984.353-88', 'Solteiro(a)', 'adilson@gmail.com', 'adilson'),
(15, 'Vanessa Pearson', 35, '24.322.783-8', '571.816.628-56', 'Solteiro(a)', 'vanessa.pearson15@example.com', '45687132'),
(16, 'Rafael Ward', 35, '44.466.548-1', '515.143.186-28', 'Casado(a)', 'rafael.ward10@example.com', '4568321'),
(17, 'Rafael Ward', 35, '44.466.548-1', '515.143.186-28', 'Casado(a)', 'rafael.ward10@example.com', '13549'),
(18, 'Norma Williamson', 36, '13.811.978-8', '115.165.447-73', 'Solteiro(a)', 'norma.williamson49@example.com', '654842'),
(19, 'admin admin', 99, '12.188.668-2', '386.087.495-05', 'Solteiro(a)', 'admin@gmail.com', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
