-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Nov-2020 às 15:49
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodosquad`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `alunonome` varchar(100) NOT NULL,
  `alunonasc` date NOT NULL,
  `alunoemail` varchar(100) NOT NULL,
  `alunotel` int(11) NOT NULL,
  `alunosenha` varchar(10) NOT NULL,
  `alunocpf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `alunonome`, `alunonasc`, `alunoemail`, `alunotel`, `alunosenha`, `alunocpf`) VALUES
(1, 'Luciana Oliveira da Cunha', '1993-11-29', '', 2147483647, '123456', 0),
(2, 'Luciana Oliveira da Cunha', '1993-11-29', 'luoliveiradacunha@gmail.com', 2147483647, '123456', 0),
(3, 'Luciana Oliveira da Cunha', '1993-11-29', 'luoliveiradacunha@gmail.com', 2147483647, '123456', 0),
(4, 'Luciana Oliveira da Cunha', '1993-11-29', 'luoliveiradacunha@gmail.com', 2147483647, '123456', 0),
(5, 'Maria Carolina', '2012-04-04', 'mcarol@gmail.com', 2147483647, '124578c', 2147483647),
(6, 'Vania Silva', '1996-06-25', 'vaniasilva@gmail.com', 2147483647, 'morangos', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitores`
--

CREATE TABLE `monitores` (
  `id_monitor` int(11) NOT NULL,
  `monnome` varchar(100) NOT NULL,
  `monnasc` date NOT NULL,
  `monensino` varchar(100) NOT NULL,
  `monmat` int(15) NOT NULL,
  `moncpf` float NOT NULL,
  `monemail` varchar(100) NOT NULL,
  `montel` int(12) NOT NULL,
  `monsenha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `monitores`
--

INSERT INTO `monitores` (`id_monitor`, `monnome`, `monnasc`, `monensino`, `monmat`, `moncpf`, `monemail`, `montel`, `monsenha`) VALUES
(1, 'Lua Silva', '2020-11-05', 'Estácio', 123357951, 12512500000, 'lua@gmail.com', 2124567654, '1234lua');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Índices para tabela `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`id_monitor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `monitores`
--
ALTER TABLE `monitores`
  MODIFY `id_monitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
