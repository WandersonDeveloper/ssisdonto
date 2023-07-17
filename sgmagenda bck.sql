-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/07/2023 às 16:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgmagenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendarapida`
--

CREATE TABLE `agendarapida` (
  `ID` int(55) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `Cor` varchar(55) NOT NULL,
  `Chassi` varchar(55) NOT NULL,
  `Emplacada` varchar(10) NOT NULL,
  `start` datetime NOT NULL,
  `Tipo_venda` varchar(55) NOT NULL,
  `Responsavel` varchar(55) NOT NULL,
  `Vendedor` varchar(55) NOT NULL,
  `Status_entrega` varchar(10) NOT NULL,
  `Excluido` varchar(55) NOT NULL,
  `DT_alteracao` datetime NOT NULL,
  `Ativada` varchar(11) NOT NULL,
  `Status_cor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `registro_agenda`
--

CREATE TABLE `registro_agenda` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(55) NOT NULL,
  `Modelo` varchar(55) NOT NULL,
  `Cor` varchar(55) NOT NULL,
  `Chassi` varchar(55) NOT NULL,
  `Emplacada` varchar(55) NOT NULL,
  `start` datetime(1) NOT NULL,
  `Tipo_venda` varchar(55) NOT NULL,
  `Responsavel` varchar(55) NOT NULL,
  `Vendedor` varchar(55) NOT NULL,
  `Status_entrega` varchar(55) NOT NULL,
  `Excluido` varchar(55) NOT NULL,
  `DT_alteracao` datetime NOT NULL,
  `Ativada` varchar(11) NOT NULL,
  `Status_cor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `registro_agenda`
--

INSERT INTO `registro_agenda` (`ID`, `Nome`, `Modelo`, `Cor`, `Chassi`, `Emplacada`, `start`, `Tipo_venda`, `Responsavel`, `Vendedor`, `Status_entrega`, `Excluido`, `DT_alteracao`, `Ativada`, `Status_cor`) VALUES
(1, 'Laurieti da silva Alves Teixeira', 'CG 160', 'Preta', 'R099902', 'Sim', '2023-07-07 00:00:00.0', 'Consórcio', 'Wanderson', 'Alan', '', 'SIM', '2023-07-09 00:02:00', 'SIM', '#b7d5ac'),
(2, 'Wanderson Felipe Oliveira ', 'CG160 Titam', 'Vermelha', '252522525555', 'Sim', '2023-07-08 00:00:00.0', 'Consórcio', 'Wanderson', '*', '', 'SIM', '2023-07-09 00:02:00', 'SIM', '#b7d5ac'),
(3, 'luana', 'Biz 125', 'vermelha', '252522525555', 'Sim', '2023-07-08 00:00:00.0', 'A vista', 'Wanderson', 'Bruna Santos ', '', 'SIM', '2023-07-09 00:02:00', 'SIM', '#b7d5ac'),
(4, 'mariani Melo Lago ', '', 'vermelha', '252522525555', 'Sim', '2023-07-08 14:30:00.0', 'Consórcio', 'Wanderson', 'Bruna Santos ', '', 'SIM', '2023-07-08 12:01:00', 'SIM', '#b7d5ac'),
(5, 'mariani Melo Lago ', '', 'vermelha', '252522525555', 'Sim', '2023-07-15 23:53:00.0', 'Cartão', 'Wanderson', '*', '', 'SIM', '2023-07-09 00:02:00', 'SIM', '#b7d5ac'),
(6, 'mariani Melo Lago ', '', 'vermelha', '252522525555', 'Sim', '2023-07-12 03:02:00.0', 'Cartão', 'Wanderson', 'Bruna Santos ', '', 'SIM', '2023-07-09 00:02:00', 'SIM', '#b7d5ac'),
(7, 'wanderson', '', 'vermelha', '252522525555', 'Sim', '2023-07-10 00:02:00.0', 'Cartão', 'Wanderson', 'Marcos	Eugenio de Oliveira', '', 'SIM', '2023-07-09 00:06:00', 'SIM', '#b7d5ac'),
(8, 'mariani Melo Lago ', '', 'vermelha', '252522525555', 'Sim', '2023-07-13 00:04:00.0', 'A vista', 'Wanderson', '*', '', 'SIM', '2023-07-09 00:06:00', 'SIM', '#b7d5ac'),
(9, 'mariani Melo Lago ', 'CG 160 Fan   ', 'vermelha', '252522525555', 'Sim', '2023-07-27 00:05:00.0', 'Cartão', 'Wanderson', 'Delcio Gomes da Silva', '', 'SIM', '2023-07-09 00:06:00', 'SIM', '#b7d5ac'),
(10, 'wanderson', 'Forza 350', 'vermelha', '252522525555', 'Sim', '2023-07-12 00:06:00.0', 'Cartão', 'Wanderson', 'Alan Carlos Vieira de Jesus', 'SIM', 'NAO', '2023-07-12 11:08:00', 'SIM', '#b7d5ac'),
(11, 'mariani Melo Lago ', 'Linha CRF 250', 'vermelha', '252522525555', 'Sim', '2023-07-11 00:07:00.0', 'Cartão', 'Wanderson', 'Marcos	Eugenio de Oliveira', '', 'SIM', '2023-07-10 15:37:00', 'SIM', '#b7d5ac'),
(12, 'Ewerton Luis', ' Pop 110i', 'vermelha', '252522525555', 'Sim', '2023-07-10 15:33:00.0', 'Cartão', 'Wanderson', 'Guimaraes de Almeida Gonçalves', 'SIM', 'NAO', '2023-07-10 15:36:00', 'SIM', '#b7d5ac'),
(13, 'mariani Melo Lago ', 'CG 160 Fan   ', 'vermelha', '252522525555', 'Sim', '2023-07-12 11:06:00.0', 'Consórcio', 'Wanderson', 'Alan Carlos Vieira de Jesus', '', 'SIM', '2023-07-15 10:42:00', 'SIM', '#b7d5ac');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(55) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Cpf` varchar(11) NOT NULL,
  `Senha` varchar(55) NOT NULL,
  `Dicasenha` varchar(55) NOT NULL,
  `Nivel` varchar(55) NOT NULL,
  `Usuario` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `Nome`, `Email`, `Cpf`, `Senha`, `Dicasenha`, `Nivel`, `Usuario`) VALUES
(1, 'Laura', 'laura@laura.com', '00000000000', '123456', '123456', 'CNH', 'Laura'),
(2, 'Wanderson', 'Wandersonunimed@gmail.com ', '06268174127', '123456', '123456', 'Admin', 'Wanderson Felipe De Oliviera'),
(6, 'Itor', 'itor@itor.com', '00000000000', '123456', '123456', 'Seguros', 'Itor'),
(7, 'Bruno', 'bruno@bruno.com', '00000000000', '123456', '123456', 'Montador', 'Bruno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `ID` int(55) NOT NULL,
  `Nome` varchar(55) NOT NULL,
  `Cpf` varchar(11) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `Email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendedores`
--

INSERT INTO `vendedores` (`ID`, `Nome`, `Cpf`, `Matricula`, `Email`) VALUES
(1, 'Bruna Santos', '02832181260', 3244, 'bruna@rondomotos.com.br'),
(2, 'Claudinei Macedo Coelho', '61989509215', 287, 'claudineicoelho@rondomotos.com.br'),
(3, 'Delcio Gomes da Silva', '02615601156', 2756, 'delcio@rondomotos.com.br'),
(4, 'Eduardo Kovalhuk de Macedo', '03090644969', 889, 'vendas@rondomotos.com.br'),
(5, 'Estevao Francisco Barros Soares', '00699673267', 3342, 'estevao@rondomotos.com.br'),
(6, 'Guimaraes de Almeida Gonçalves', '', 0, ''),
(7, 'Jonathan Paulo Moura', '95437894287', 3340, 'jonathan@rondomotos.com.br'),
(8, 'Marcos	Eugenio de Oliveira', '49820826268', 3165, 'marcos@rondomotos.com.br'),
(9, 'Paulo Braido', '', 0, ''),
(10, 'Vilmar Silva do Carmo', '99717700249', 1439, 'vilmar.carmo@rondomotos.com.br'),
(11, 'Alan Carlos Vieira de Jesus', '00792370295', 3059, ''),
(12, 'Guilherme Sampaio Haut', '', 0, ''),
(13, 'Luiz Pereira Rezende', '', 0, ''),
(14, 'Ronaldo Adriano Oliveira Coutinho', '', 0, ''),
(15, 'Saulo Xavier de Oliveira Silva', '', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendarapida`
--
ALTER TABLE `agendarapida`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `registro_agenda`
--
ALTER TABLE `registro_agenda`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendarapida`
--
ALTER TABLE `agendarapida`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `registro_agenda`
--
ALTER TABLE `registro_agenda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
