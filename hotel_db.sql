-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2023 às 03:52
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
-- Banco de dados: `hotel_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `nome_adm` varchar(60) NOT NULL,
  `matricula_adm` bigint(11) NOT NULL,
  `email_adm` varchar(60) NOT NULL,
  `senha_adm` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`nome_adm`, `matricula_adm`, `email_adm`, `senha_adm`) VALUES
('David Campos', 1, 'davi.alencar@gmail.c', '0c69fb78549f65edf9d190616577ec63');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quarto`
--

CREATE TABLE `quarto` (
  `preco` int(20) NOT NULL,
  `tipo_quarto` varchar(30) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `cod_quarto` int(11) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `img_quarto` varchar(100) NOT NULL,
  `servicos` varchar(300) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quarto`
--

INSERT INTO `quarto` (`preco`, `tipo_quarto`, `descricao`, `cod_quarto`, `rua`, `img_quarto`, `servicos`, `bairro`, `cidade`) VALUES
(1444, 'Suite', 'Quarto Tematico', 4, 'Andirá-Açu', 'quarto2.png', 'Todos', 'Terra Nova', 'São Paulo'),
(1400, 'Suite dos Minions', 'Quarto para as crianças entrarem com toda a imersão no mundo de \"Gru\" o nosso malvado favorito', 5, 'Alameda', 'quarto5.png', 'Todos', 'Terra Nova', 'Manaus'),
(2000, 'Suite minimalista', 'Uma suite moderna para aqueles que buscam descanso e tranquilidade', 6, 'Avenida constantino nery', 'quarto3.png', 'café da manhã, almoço e lavanderia 24 horas', 'dijmal batista', 'Manaus');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reservas`
--

CREATE TABLE `reservas` (
  `registro_aluguel` bigint(20) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `rg_user` bigint(20) NOT NULL,
  `cod_quarto` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `reservas`
--

INSERT INTO `reservas` (`registro_aluguel`, `data_entrada`, `data_saida`, `rg_user`, `cod_quarto`) VALUES
(3, '2023-06-03', '2023-06-05', 31014887123, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome_user` varchar(60) NOT NULL,
  `senha_user` varchar(60) NOT NULL,
  `email_user` varchar(110) NOT NULL,
  `rg_user` bigint(20) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `tipo_login` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome_user`, `senha_user`, `email_user`, `rg_user`, `cidade`, `rua`, `bairro`, `telefone`, `tipo_login`) VALUES
('David Reginaldo Campos Vieira', '123', 'vieira.campos@gmail.com', 30412331, 'Manaus', 'Alameda', 'dijmal batista', '92984288326', 0),
('David Campos', '123', 'david.campos@gmail.com', 31014887, 'Manaus', 'Andirá açu', 'Colônia Terra nova', '92984288326', 1),
('David Vieira', '123', 'vieira.dacampos@gmail.com', 31014887123, 'Manaus', 'Andirá-Açu', 'Colônia Terra Nova', '92984288323', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`matricula_adm`);

--
-- Índices de tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`cod_quarto`);

--
-- Índices de tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`registro_aluguel`),
  ADD KEY `rg_user` (`rg_user`) USING BTREE,
  ADD KEY `cod_quarto` (`cod_quarto`) USING BTREE;

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rg_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `matricula_adm` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `cod_quarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `registro_aluguel` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`rg_user`) REFERENCES `usuario` (`rg_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
