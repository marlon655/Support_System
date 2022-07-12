-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2022 às 04:59
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
-- Banco de dados: `support_system`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `resposta` text NOT NULL,
  `de` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `answer`
--

INSERT INTO `answer` (`id`, `usuario`, `resposta`, `de`) VALUES
(1, 'Marlon', 'Aqui a primeira resposta!', 'Admin'),
(2, 'Marlon', 'Uma segunda resposta.', 'Admin'),
(20, 'Marlon', 'Sua terceira resposta...', 'Admin'),
(21, 'marlon2', 'oque precisa?', 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pergunta` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `question`
--

INSERT INTO `question` (`id`, `usuario`, `pergunta`, `status`) VALUES
(1, 'Marlon', 'Uma Primeira pergunta...', 1),
(5, 'Marlon', 'Uma segunda pergunrta...', 1),
(6, 'Marlon', 'Uma terceira Pergunta...', 1),
(14, 'marlon2', 'preciso de ajuda..', 1),
(15, 'Marlon', 'Quarta pergunta...', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `senha`, `cargo`, `cargo_id`) VALUES
(1, 'Admin', 'admin', 'Admin', 3),
(2, 'Marlon', '123', 'Normal', 1),
(3, 'marlon2', '123', 'Normal', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
