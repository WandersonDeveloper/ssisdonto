-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/06/2023 às 01:25
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
  `Status_entrega` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendarapida`
--

INSERT INTO `agendarapida` (`ID`, `Nome`, `Modelo`, `Cor`, `Chassi`, `Emplacada`, `start`, `Tipo_venda`, `Responsavel`, `Vendedor`, `Status_entrega`) VALUES
(53, 'Wanderson Felipe de Oliveira ', 'Bizsdd', 'vermelha', '00000000000000000', 'SIM', '2023-05-31 19:52:00', 'Cartão', 'Wanderson Admin', 'Marcos', 'SIM');

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
  `Dicasenha` int(55) NOT NULL,
  `Nivel` varchar(55) NOT NULL,
  `Usuario` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `Nome`, `Email`, `Cpf`, `Senha`, `Dicasenha`, `Nivel`, `Usuario`) VALUES
(19, 'Wanderson Admin', 'admin@admin.com', '00000000000', '123456', 0, 'Admin', 'admin'),
(20, 'felipe ', 'felipe@felipe.com', '00000000000', '123', 123, 'montador', 'felipe');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendarapida`
--
ALTER TABLE `agendarapida`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendarapida`
--
ALTER TABLE `agendarapida`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
