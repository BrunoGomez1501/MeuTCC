-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2022 às 19:33
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unigres`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambiente`
--

CREATE TABLE `ambiente` (
  `id_Amb` int(11) NOT NULL,
  `nome_amb` varchar(40) DEFAULT NULL,
  `desc_amb` varchar(15) DEFAULT NULL,
  `foto_amb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ambiente`
--

INSERT INTO `ambiente` (`id_Amb`, `nome_amb`, `desc_amb`, `foto_amb`) VALUES
(2, 'Sala', 'Sala', 'SALA2.png'),
(3, 'Varanda', 'Varanda', 'VARANDA 1.png'),
(4, 'Cozinha', 'Cozinha', 'cozinha2.png'),
(5, 'Banheiro', 'Banheiro', 'banheiro.png'),
(6, 'Banheiro', 'Banheiro', 'banheiro.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(32) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `piso`
--

CREATE TABLE `piso` (
  `id_piso` int(11) NOT NULL,
  `FK_Ambiente` int(11) NOT NULL,
  `FK_Prod` int(11) NOT NULL,
  `nome_piso` varchar(20) NOT NULL,
  `desc_piso` varchar(20) NOT NULL,
  `foto_piso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `piso`
--

INSERT INTO `piso` (`id_piso`, `FK_Ambiente`, `FK_Prod`, `nome_piso`, `desc_piso`, `foto_piso`) VALUES
(2, 3, 6, '54551 - Ciment Almon', 'Piso', '54551 - Ciment Almond HD.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(30) NOT NULL,
  `desc_prod` varchar(50) NOT NULL,
  `Ambientes` varchar(1000) NOT NULL,
  `foto_prod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `desc_prod`, `Ambientes`, `foto_prod`) VALUES
(5, 'REV - 32507 - Ácacia Rosso', 'Revestimento', 'Varanda', 'REV - 32507 - Ácacia Rosso.png'),
(6, '54551 - Ciment Almon', 'Piso', 'Varanda', '54551 - Ciment Almond HD.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `revpiso`
--

CREATE TABLE `revpiso` (
  `id_RevPiso` int(11) NOT NULL,
  `FK_Amb` int(11) NOT NULL,
  `FK_Prod` int(11) NOT NULL,
  `nome_RevPiso` varchar(50) DEFAULT NULL,
  `desc_RevPiso` varchar(20) DEFAULT NULL,
  `foto_RevPiso` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`id_Amb`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`id_piso`),
  ADD KEY `piso_ibfk_1` (`FK_Ambiente`),
  ADD KEY `piso_ibfk_2` (`FK_Prod`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Índices para tabela `revpiso`
--
ALTER TABLE `revpiso`
  ADD PRIMARY KEY (`id_RevPiso`),
  ADD KEY `revpiso_ibfk_1` (`FK_Amb`),
  ADD KEY `revpiso_ibfk_2` (`FK_Prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `id_Amb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `piso`
--
ALTER TABLE `piso`
  MODIFY `id_piso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `revpiso`
--
ALTER TABLE `revpiso`
  MODIFY `id_RevPiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `piso_ibfk_1` FOREIGN KEY (`FK_Ambiente`) REFERENCES `ambiente` (`id_Amb`),
  ADD CONSTRAINT `piso_ibfk_2` FOREIGN KEY (`FK_Prod`) REFERENCES `produto` (`id_prod`);

--
-- Limitadores para a tabela `revpiso`
--
ALTER TABLE `revpiso`
  ADD CONSTRAINT `revpiso_ibfk_1` FOREIGN KEY (`FK_Amb`) REFERENCES `ambiente` (`id_Amb`),
  ADD CONSTRAINT `revpiso_ibfk_2` FOREIGN KEY (`FK_Prod`) REFERENCES `produto` (`id_prod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
