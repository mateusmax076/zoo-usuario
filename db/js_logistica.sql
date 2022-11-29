-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2022 às 15:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `js_logistica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apro_evento`
--

CREATE TABLE `apro_evento` (
  `id_evento` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `email` text NOT NULL,
  `telefone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `apro_evento`
--

INSERT INTO `apro_evento` (`id_evento`, `titulo`, `start`, `end`, `email`, `telefone`) VALUES
(1, 'arara azu', '2022-11-12 14:29:22', '2022-11-12 20:36:22', 'mdnnidn@gmail.com', '2198712124'),
(12, 'arara azul', '2022-11-24 00:00:00', '2022-11-25 00:00:00', 'mgsilvas39@gmail.com', '(81) 98741-0206');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(10, 'arra azul', 'casal', '2022-11-26 15:20:00', '2022-11-26 21:20:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` text NOT NULL,
  `cargo_funcionario` text NOT NULL,
  `idade_funcionario` text NOT NULL,
  `cidade_funcionario` text NOT NULL,
  `estado_funcionario` text NOT NULL,
  `telefone_funcionario` text NOT NULL,
  `email_usuario` text NOT NULL,
  `senha_usuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome_funcionario`, `cargo_funcionario`, `idade_funcionario`, `cidade_funcionario`, `estado_funcionario`, `telefone_funcionario`, `email_usuario`, `senha_usuario`) VALUES
(2, 'mario lima silva', 'admin', '29', 'paulista', 'pe', '819873646738', 'mgsilvas39@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pre_evento`
--

CREATE TABLE `pre_evento` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pre_evento`
--

INSERT INTO `pre_evento` (`id`, `title`, `description`, `start`, `end`) VALUES
(5, 'arrara axzul', '4pessoas', '2022-11-18 15:41:00', '2022-11-18 18:42:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apro_evento`
--
ALTER TABLE `apro_evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices para tabela `pre_evento`
--
ALTER TABLE `pre_evento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apro_evento`
--
ALTER TABLE `apro_evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pre_evento`
--
ALTER TABLE `pre_evento`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
