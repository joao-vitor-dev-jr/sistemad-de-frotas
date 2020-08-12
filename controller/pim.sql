-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2019 às 16:26
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguel`
--

CREATE TABLE `aluguel` (
  `ID_ALUGUEL` int(11) NOT NULL,
  `NOME_AL` varchar(45) NOT NULL,
  `PLACA` varchar(10) NOT NULL,
  `MODELO` varchar(50) NOT NULL,
  `TIPO_CONTRATO` varchar(10) NOT NULL,
  `VALOR` decimal(6,2) NOT NULL,
  `DATA_ALUGUEL` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(11) NOT NULL,
  `CPF_C` int(11) NOT NULL,
  `NOME_C` varchar(45) NOT NULL,
  `ENDERECO_C` varchar(100) DEFAULT NULL,
  `TELEFONE_C` varchar(9) NOT NULL,
  `CNH_C` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `CNPJ` int(30) NOT NULL,
  `TELEFONE_EMP` varchar(10) NOT NULL,
  `CEP_EMP` varchar(10) NOT NULL,
  `BAIRRO_EMP` varchar(30) NOT NULL,
  `LOGRADOURO` varchar(50) DEFAULT NULL,
  `SGUF` varchar(45) NOT NULL,
  `NOME_EMP` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_usuario` varchar(20) PRIMARY KEY AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`usuario`, `senha`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `CPF_MOT` int(11) NOT NULL,
  `NOME_MOT` varchar(45) NOT NULL,
  `ENDERECO_MOT` varchar(50) NOT NULL,
  `CNH_MOT` varchar(30) NOT NULL,
  `IDENTIDADE_MOT` varchar(10) NOT NULL,
  `CARTEIRA_MOT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `ID_CODIGO` int(11) NOT NULL,
  `NOME_PECA` varchar(45) NOT NULL,
  `MARCA_PECA` varchar(45) NOT NULL,
  `FAB_PECA` varchar(45) NOT NULL,
  `CUSTO_PECA` decimal(7,2) NOT NULL,
  `DESCRICAO_PECA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `SINISTRO` text NOT NULL,
  `MULTAS` text NOT NULL,
  `QUILOMETRAGEM_DIA` varchar(3) NOT NULL,
  `CONSUMO_DIA` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `PLACA_V` varchar(10) NOT NULL,
  `MODELO_V` varchar(50) NOT NULL,
  `COR_V` varchar(50) NOT NULL,
  `DOCUMENTO_V` varchar(100) NOT NULL,
  `MARCA_V` varchar(100) NOT NULL,
  `RENEVAM_V` varchar(100) NOT NULL,
  `STATUS_V` char(10) DEFAULT NULL,
  `QUILOMETRAGEM_V` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`PLACA_V`, `MODELO_V`, `COR_V`, `DOCUMENTO_V`, `MARCA_V`, `RENEVAM_V`, `STATUS_V`, `QUILOMETRAGEM_V`) VALUES
('DTV-9078', 'FOX', 'PRATA', '897.987.98', 'FIAT', '333.333.333', 'NOVO', '0KM'),
('NVG-1968', 'BMW - XXL', 'PRETA', '53342632', 'BMW', '555.555.5', 'NOVO', '5000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagens`
--

CREATE TABLE `viagens` (
  `DATA_VIA` datetime(2) NOT NULL,
  `DESTINO_VIA` varchar(50) NOT NULL,
  `STATUS_VIA` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluguel`
--
ALTER TABLE `aluguel`
  ADD PRIMARY KEY (`ID_ALUGUEL`),
  ADD UNIQUE KEY `PLACA` (`PLACA`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD UNIQUE KEY `CPF` (`CPF_C`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`senha`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`CPF_MOT`),
  ADD UNIQUE KEY `CPF` (`CPF_MOT`),
  ADD UNIQUE KEY `IDENTIDADE` (`IDENTIDADE_MOT`),
  ADD UNIQUE KEY `CARTEIRA_TRAB` (`CARTEIRA_TRAB_MOT`);

--
-- Indexes for table `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`ID_CODIGO`);

--
-- Indexes for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`PLACA_V`),
  ADD UNIQUE KEY `PLACA` (`PLACA_V`),
  ADD UNIQUE KEY `DOCUMENTO` (`DOCUMENTO_V`),
  ADD UNIQUE KEY `RENAVAM` (`RENEVAM_V`);

--
-- Indexes for table `viagens`
--
ALTER TABLE `viagens`
  ADD PRIMARY KEY (`DATA_VIA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluguel`
--
ALTER TABLE `aluguel`
  MODIFY `ID_ALUGUEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pecas`
--
ALTER TABLE `pecas`
  MODIFY `ID_CODIGO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
