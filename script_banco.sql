-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2021 às 00:07
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_cliente`
--

CREATE TABLE `t_cliente` (
  `CLIENTE_ID` int(11) NOT NULL,
  `CLIENTE_NOME` varchar(250) NOT NULL,
  `CLIENTE_DT_NASC` date NOT NULL,
  `CLIENTE_SEXO` varchar(1) NOT NULL,
  `CLIENTE_CEP` varchar(8) DEFAULT NULL,
  `CLIENTE_ENDERECO` varchar(250) DEFAULT NULL,
  `CLIENTE_NUMERO` int(11) DEFAULT NULL,
  `CLIENTE_COMPLEMENTO` varchar(100) DEFAULT NULL,
  `CLIENTE_BAIRRO` varchar(150) DEFAULT NULL,
  `CLIENTE_UF` varchar(2) DEFAULT NULL,
  `CLIENTE_CIDADE` varchar(150) DEFAULT NULL,
  `CLIENTE_DT_CREATED` datetime DEFAULT current_timestamp(),
  `CLIENTE_DT_MODIFIED` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_cliente`
--
ALTER TABLE `t_cliente`
  ADD PRIMARY KEY (`CLIENTE_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_cliente`
--
ALTER TABLE `t_cliente`
  MODIFY `CLIENTE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
