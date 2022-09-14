-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 01:21
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
-- Banco de dados: `quiz-tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `modulos`
--

CREATE TABLE `modulos` (
  `id` int(11) NOT NULL,
  `nome_modulo` varchar(266) NOT NULL,
  `texto` text NOT NULL,
  `numeracao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `modulos`
--

INSERT INTO `modulos` (`id`, `nome_modulo`, `texto`, `numeracao`) VALUES
(1, 'Criptografia', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1),
(2, 'Virus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 2),
(3, 'FireWall', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3),
(4, 'Bugs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 4),
(5, 'Worms', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `alternativas` text NOT NULL,
  `correta` int(11) NOT NULL,
  `modulo` int(11) NOT NULL,
  `exp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pergunta`
--

INSERT INTO `pergunta` (`id`, `titulo`, `alternativas`, `correta`, `modulo`, `exp`) VALUES
(1, 'A tecnologia utilizada na internet que se refere à segurança da informação é', 'criptografia;download;streaming;mailing lists', 0, 1, 25),
(2, 'A criptografia é uma forma de codificar um texto sigiloso, evitando', 'o aumento de um arquivo;que a mensagem alcance o seu objetivo;que estranhos o leiam;que outros analistas o alterem', 2, 1, 25),
(3, 'A criptografia utilizada para garantir que somente o remetente e o destinatário possam entender o conteúdo de uma mensagem transmitida caracteriza uma propriedade de comunicação segura denominada', 'autenticação;confidencialidade;integridade;disponibilidade', 1, 1, 25),
(4, 'Quanto aos conceitos básicos de Segurança da Informação é correto afirmar que a criptografia simétrica', 'usa um algoritmo de criptografia que requer que a mesma chave secreta seja usada na criptografia e na decriptografia.;é um método de criptografia no qual duas chaves diferentes são usadas: uma chave pública para criptografar dados e uma chave particular para decriptografá-los.;é um método de criptografia no qual duas chaves diferentes são usadas: uma chave particular para criptografar dados e uma chave pública para decriptografá-los.;é o processo de regravação de partes de um arquivo em setores contíguos de um disco rígido a fim de aumentar a segurança da informação.;', 0, 1, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL COMMENT 'password_hash\r\npassword_verify',
  `tipo` tinyint(1) NOT NULL COMMENT 'norma/adm',
  `nivel` int(4) NOT NULL,
  `pontos` int(4) NOT NULL,
  `nivel_desbloqueio` int(4) NOT NULL,
  `recuperar_senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`, `nivel`, `pontos`, `nivel_desbloqueio`, `recuperar_senha`) VALUES
(1, 'Administrador', 'adm@hotmail.com', '$2y$10$vWKXjCHHr/hZXqhW4o2z5uhJ9WaWyoqDIV54EmBPOMhY736Jzi.c.', 1, 27000, 9999, 5, 'NULL'),
(2, 'Pedro', 'pedro@hotmail.com', '$2y$10$/Ru6MjhYRQjmZF21RyaryuH03..zjtvfxE5kfMTpdBcpRyXgK73ha', 1, 1040, 567, 0, NULL),
(3, 'Alexandre', 'alexandre@hotmail.com', '$2y$10$T1CQvlgysEkoNrSRgpEYj.Ky9lXfqKoSazim9KtSlapm9sW7hz5f2', 0, 50, 600, 0, NULL),
(4, 'Mario', 'mario@hotmail.com', '$2y$10$qGvGMhknMG0C9JMD/icwf.NScijI5mHlYVtFyAHAysdMvnIiS7zAq', 0, 5, 1, 0, NULL),
(5, 'teste', 'teste@hotmail.com', '$2y$10$LDnfmuSh26i2I49xG3xnbuOEOAnH1emW5djpNu8rQSMqj6CbbnCs6', 0, 450, 30, 1, NULL),
(45, 'Teste 2', 'teste2@hotmail.com', '$2y$10$//FRJtImPKMN4JTcNMlcrOhtefO2PArFTBJDW2bAnIsNABNYDTYky', 0, 0, 0, 0, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
