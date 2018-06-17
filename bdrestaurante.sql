-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Out-2017 às 07:26
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdrestaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nascimento` date NOT NULL,
  `login` varchar(50) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ativo` int(1) NOT NULL,
  `sexo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`id`, `nome`, `telefone`, `email`, `nascimento`, `login`, `senha`, `tipo`, `ativo`, `sexo`) VALUES
(1, 'k', '24242', 'k', '0000-00-00', 'k', 'k', '2', 1, 2),
(2, 'keila', '787', 'l', '0000-00-00', 'l', 'l', '1', 1, 2),
(6, 'keila2', '73827398', 'kdfhlshflsj', '2017-10-14', 'skdslkds', 'skfhlkskf', '1', 1, 1),
(20, 'kklxzjklj', '34342', 'kdgkljdk', '0000-00-00', 'kljtekltjlk', 'keljtkel', '1', 1, 2),
(22, 'oi', '9424204', 'jskjksj', '0000-00-00', 'kjskfjskjf', 'ksjfkjs', '1', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbendereco`
--

CREATE TABLE `tbendereco` (
  `id` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `endereco` varchar(25) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(20) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(20) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nomeendereco` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ativo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbendereco`
--

INSERT INTO `tbendereco` (`id`, `idcliente`, `endereco`, `bairro`, `estado`, `cidade`, `nomeendereco`, `ativo`) VALUES
(22, 6, 'rua sei la ', 'cg', 'rj', 'rio ', 'casa', 1),
(55, 22, 'KLJDKLS', 'KJSLKJDLSK', 'JKLSLKJD', 'KLJSKLJDL', 'djflsjkj', 1),
(59, 22, 'KLJDKLS', 'KJSLKJDLSK', 'JKLSLKJD', 'KLJSKLJDL', 'djflsjkj', 1),
(63, 6, 'jdslkjd', 'kljslkfjs', 'klsajdjlka', 'kljslkjf', 'casa do ze', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `id` int(4) NOT NULL,
  `idcliente` int(4) NOT NULL,
  `idendereco` int(30) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `status` int(30) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodpedido`
--

CREATE TABLE `tbprodpedido` (
  `id` int(4) NOT NULL,
  `idpedido` int(4) NOT NULL,
  `idproduto` int(15) NOT NULL,
  `quantidade` int(35) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbprodutos`
--

CREATE TABLE `tbprodutos` (
  `id` int(4) NOT NULL,
  `nomeproduto` varchar(50) NOT NULL,
  `valorproduto` varchar(30) NOT NULL,
  `fotoproduto` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbprodutos`
--

INSERT INTO `tbprodutos` (`id`, `nomeproduto`, `valorproduto`, `fotoproduto`, `descricao`, `ativo`) VALUES
(1, 'Koala', '20', '1507939017.jpg', 'kfjaÃ§ljdsÃ§laj', 1),
(2, 'flor', '30,50', '1507940439.jpg', 'fdrgdsfds', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `tbendereco`
--
ALTER TABLE `tbendereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbprodpedido`
--
ALTER TABLE `tbprodpedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbprodutos`
--
ALTER TABLE `tbprodutos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbendereco`
--
ALTER TABLE `tbendereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbprodpedido`
--
ALTER TABLE `tbprodpedido`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbprodutos`
--
ALTER TABLE `tbprodutos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
