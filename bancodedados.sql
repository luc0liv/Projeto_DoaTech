CREATE DATABASE  IF NOT EXISTS `squad7`;
USE `squad7`;



DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `idAluno` int NOT NULL AUTO_INCREMENT,
  `nomeAluno` varchar(45) NOT NULL,
  `emailAluno` varchar(45) NOT NULL,
  `senhaAluno` varchar(45) NOT NULL,
  `direcaoAluno` varchar(45) NOT NULL,
  `pedido` varchar(100) NOT NULL,
  PRIMARY KEY (`idAluno`,`direcaoAluno`),
  KEY `fk_direcao_idx` (`direcaoAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabela contendo dados dos alunos atendidos';


LOCK TABLES `aluno` WRITE;
UNLOCK TABLES;



DROP TABLE IF EXISTS `doador`;
CREATE TABLE `doador` (
  `idDoador` int NOT NULL AUTO_INCREMENT,
  `nomeDoador` varchar(100) NOT NULL,
  `emailDoador` varchar(45) NOT NULL,
  `senhaDoador` varchar(45) NOT NULL,
  `doacao` varchar(100) NOT NULL,
  PRIMARY KEY (`idDoador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabela contendo informações sobre o doador';

LOCK TABLES `doador` WRITE;
UNLOCK TABLES;



DROP TABLE IF EXISTS `escola`;
CREATE TABLE `escola` (
  `idEscola` int NOT NULL AUTO_INCREMENT,
  `nomeEscola` varchar(45) NOT NULL,
  `direcao` varchar(45) NOT NULL,
  `pedidoEscola` varchar(100) NOT NULL,
  `emailEscola` varchar(50) NOT NULL,
  `senhaEscola` varchar(45) NOT NULL,
  PRIMARY KEY (`idEscola`,`direcao`),
  KEY `fk_direcao_idx` (`direcao`),
  CONSTRAINT `fk_direcao` FOREIGN KEY (`direcao`) REFERENCES `aluno` (`direcaoAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;




LOCK TABLES `escola` WRITE;
UNLOCK TABLES;



DROP TABLE IF EXISTS `faleconosco`;

CREATE TABLE `faleconosco` (
  `id_mensagem` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `faleconosco` WRITE;
UNLOCK TABLES;


