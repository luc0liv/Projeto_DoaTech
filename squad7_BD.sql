-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Fev-2021 às 21:55
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
-- Banco de dados: `squad7`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL,
  `nomeAluno` varchar(45) NOT NULL,
  `emailAluno` varchar(45) NOT NULL,
  `senhaAluno` varchar(45) NOT NULL,
  `escolaAluno` varchar(100) NOT NULL,
  `direcaoAluno` varchar(45) NOT NULL,
  `pedido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabela contendo dados dos alunos atendidos';

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `nomeAluno`, `emailAluno`, `senhaAluno`, `escolaAluno`, `direcaoAluno`, `pedido`) VALUES
(1, 'Joana', 'joana@gmail.com', '1234567890', 'Escola Municipal ', '', 'Notebook'),
(2, 'Joana', 'joana@gmail.com', '1234567890', 'Escola Municipal ', '', 'Notebook'),
(3, 'Maria ', 'maria@gmail.com', '1234', 'Escola Municipal Maria Silva', '', 'Notebook');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doador`
--

CREATE TABLE `doador` (
  `idDoador` int(11) NOT NULL,
  `nomeDoador` varchar(100) NOT NULL,
  `emailDoador` varchar(45) NOT NULL,
  `senhaDoador` varchar(45) NOT NULL,
  `doacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabela contendo informações sobre o doador';

--
-- Extraindo dados da tabela `doador`
--

INSERT INTO `doador` (`idDoador`, `nomeDoador`, `emailDoador`, `senhaDoador`, `doacao`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, 'João Silva', 'joaosilva@gmail.com', '123123123', ''),
(5, 'João Silva', 'joaosilva@gmail.com', '123321123', ''),
(6, 'Luciana Cunha', 'luciana@gmail.com', '333333222', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `idEscola` int(11) NOT NULL,
  `nomeEscola` varchar(45) NOT NULL,
  `direcao` varchar(45) NOT NULL,
  `enderecoEscola` varchar(250) NOT NULL,
  `pedidoEscola` varchar(100) NOT NULL,
  `emailEscola` varchar(50) NOT NULL,
  `senhaEscola` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`idEscola`, `nomeEscola`, `direcao`, `enderecoEscola`, `pedidoEscola`, `emailEscola`, `senhaEscola`) VALUES
(1, '', '', '', '', '', ''),
(12, 'Escola Municipal Maria Silva', '', '', '', 'e.mariasilva@gmail.com', 'escola'),
(17, 'Escola Municipal Maria Silva', 'Vania Nunes', 'Rua das Margaridas, 123. Éden, São João de Meriti, Rj', '', 'e.mariasilva@gmail.com', 'escola'),
(18, 'Escola Municipal Maria Silva', 'Vania Nunes', 'Rua das Margaridas, 123. Éden, São João de Meriti, Rj', '', 'e.mariasilva@gmail.com', 'escola'),
(19, 'Escola Municipal José Santos', 'Mario Viana', 'Rua dos gatos, Nº 03, Éden, S. João de Meriti, RJ', '', 'emjose@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`id_mensagem`, `nome`, `mensagem`, `email`) VALUES
(1, 'Luciana Oliveira da Cunha', 'Testando...', 'luoliveiradacunha@gmail.com'),
(2, 'Luciana Oliveira da Cunha', 'Testando...', 'luoliveiradacunha@gmail.com'),
(3, 'Luciana Oliveira da Cunha', 'Testando...', 'luoliveiradacunha@gmail.com'),
(4, 'Pedro Carvalho', 'Testando 2...', 'pedro.876@hotmail.com'),
(5, 'Pedro Carvalho', 'Testando 2...', 'pedro.876@hotmail.com'),
(6, 'Vania Nunes', 'Olá!', 'vania@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `pedido` varchar(250) NOT NULL,
  `enderecoEscola` varchar(250) NOT NULL,
  `nomeEscola` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`) USING BTREE,
  ADD KEY `pedido` (`pedido`);

--
-- Índices para tabela `doador`
--
ALTER TABLE `doador`
  ADD PRIMARY KEY (`idDoador`);

--
-- Índices para tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`idEscola`) USING BTREE,
  ADD KEY `enderecoEscola` (`enderecoEscola`),
  ADD KEY `nomeEscola` (`nomeEscola`);

--
-- Índices para tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`),
  ADD KEY `pedido` (`pedido`,`enderecoEscola`),
  ADD KEY `endereco_fk` (`enderecoEscola`),
  ADD KEY `nomeEscola` (`nomeEscola`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `doador`
--
ALTER TABLE `doador`
  MODIFY `idDoador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `idEscola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `endereco_fk` FOREIGN KEY (`enderecoEscola`) REFERENCES `escola` (`enderecoEscola`),
  ADD CONSTRAINT `nome_fk` FOREIGN KEY (`nomeEscola`) REFERENCES `escola` (`nomeEscola`),
  ADD CONSTRAINT `pedidos_fk` FOREIGN KEY (`pedido`) REFERENCES `aluno` (`pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
