-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2024 às 04:18
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
-- Banco de dados: `goldenwing`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastraruser`
--

CREATE TABLE `cadastraruser` (
  `nome` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `confirmarsenha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastraruser`
--

INSERT INTO `cadastraruser` (`nome`, `email`, `senha`, `confirmarsenha`) VALUES
('João Victor Queiroz de Araújo', 'joaoqueiroz570@gmail.com', '1234', ''),
('Rafael Lucas', 'rafaellucas@gmail.com', '1234', ''),
('João Victor Martelleto', 'joaovictormartelleto@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gwcliente`
--

CREATE TABLE `gwcliente` (
  `ID_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `nomeProduto` varchar(255) NOT NULL,
  `descricaoProduto` text NOT NULL,
  `precoProduto` decimal(10,2) NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `imgProduto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `idCategoria`, `nomeProduto`, `descricaoProduto`, `precoProduto`, `qtdProduto`, `imgProduto`) VALUES
(1, 1, 'MOUSE COMUM - PRETO', 'Uma descrição qualquer do produto', '100.00', 100, 'C:xampphtdocsGoldenWingassetsmouse-foto-1.jpg'),
(2, 2, 'TECLADO COMUM - PRETO', 'Uma descrição qualquer do produto', '149.90', 100, 'C:xampphtdocsGoldenWingassets	eclado-foto-1.jpg'),
(3, 1, 'MOUSE COMUM ', 'Uma descrição qualquer do produto', '100.00', 100, 'C:xampphtdocsGoldenWingassetsmouse-foto-1.jpg'),
(4, 1, 'MOUSE COMUM - BRANCO', 'Lorem ipsum dolor sit amet. In quod mollitia aut perspiciatis labore sit pariatur atque qui ipsam laborum. Qui atque repudiandae a molestiae enim ea iste ipsum.  Quo porro praesentium nam totam voluptate ut rerum animi cum veritatis doloribus. Sed nostrum impedit aut architecto dicta id labore modi.', '110.00', 98, 'C:xampphtdocsGoldenWingassetsmouse-foto-1.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `gwcliente`
--
ALTER TABLE `gwcliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `gwcliente`
--
ALTER TABLE `gwcliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
