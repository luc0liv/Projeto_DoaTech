CREATE DATABASE  IF NOT EXISTS `squad7`;
USE `squad7`;



--
-- Estrutura da tabela `doador`
--
DROP TABLE IF EXISTS `doador`

CREATE TABLE `doador` (
  `idDoador` int(11) NOT NULL,
  `nomeDoador` varchar(100) NOT NULL,
  `emailDoador` varchar(45) NOT NULL,
  `senhaDoador` varchar(45) NOT NULL
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





