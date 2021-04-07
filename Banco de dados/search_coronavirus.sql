-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Abr-2021 às 01:10
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `search_coronavirus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`login`, `senha`) VALUES
('adim@gmail.com', 'adm1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `Quantidade` bigint(20) UNSIGNED NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `CPF` varchar(15) NOT NULL,
  `Data` varchar(10) NOT NULL,
  `Sexo` varchar(9) NOT NULL,
  `Cidade` varchar(20) NOT NULL,
  `Estado` varchar(4) NOT NULL,
  `Sangue` varchar(4) NOT NULL,
  `Testecovid` varchar(4) NOT NULL,
  `Testerealizado` varchar(30) NOT NULL,
  `Vezescovid` varchar(10) NOT NULL,
  `Sintoma` varchar(50) NOT NULL,
  `Vacina` varchar(4) NOT NULL,
  `Qualvacina` varchar(30) NOT NULL,
  `Contraiuvirus` varchar(6) NOT NULL,
  `Doenca` varchar(50) NOT NULL,
  `Fumabebe` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`Quantidade`, `Nome`, `CPF`, `Data`, `Sexo`, `Cidade`, `Estado`, `Sangue`, `Testecovid`, `Testerealizado`, `Vezescovid`, `Sintoma`, `Vacina`, `Qualvacina`, `Contraiuvirus`, `Doenca`, `Fumabebe`) VALUES
(1, 'kain da Silva Amorim', '123.456.888-97', '11/02/1999', 'Masculino', 'Toritama', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'CoronaVac', 'Antes', 'Diabete', 'Não'),
(12, 'LARISSA GENESIS DA SILVA', '124.546.758-67', '09/11/1999', 'Feminino', 'CARUARU', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Tosse', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(9, 'MATHEUS GABRIEL JUNIOR TORRES', '142.144.461-23', '28/05/1992', 'Masculino', 'Caruaru', 'PE', 'AB+', 'Sim', 'Outros', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(11, 'MARIA JOSE DA SILVA', '235.342.545-75', '13/09/1959', 'Masculino', 'CARUARU', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Coriza', 'Sim', 'CoronaVac', 'Antes', 'Diabete', 'Não'),
(10, 'HEITOR KALLEN JUNIOR FILHO', '341.212.312-31', '12/12/2000', 'Masculino', 'CARUARU', 'PE', 'AB+', 'Não', '---', '---', '---', 'Não', 'Não Tomei Vacina', '---', 'Não possuo doenças', 'Não'),
(3, 'MARIA JOANA DA SILVA AMORIM', '345.345.453-43', '12/07/1986', 'Feminino', 'São Paulo', 'SP', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dor de Garganta', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Sim'),
(2, 'JOÃO FRANCISCO DA SILVA TORRES', '345.678.902-12', '31/12/1989', 'Masculino', 'Caruaru', 'PE', 'O-', '---', '---', '1', 'Tosse', '---', 'Não Tomei Vacina', '---', 'Diabete', '---'),
(4, 'MARIA JOAQUINA FREITAS TORRES', '456.809.580-64', '28/03/2000', 'Feminino', 'Caruaru', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Cansaço(astenia)', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(7, 'ANA CLARA NOGUEIRA', '552.456.445-23', '03/09/1980', 'Feminino', 'Caruaru', 'PE', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dificuldade de respirar', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças renais', 'Não'),
(5, 'ROBERTA SIQUEIRA ALVES', '574.525.187-95', '21/04/1998', 'Feminino', 'Caruaru', 'PE', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Coriza', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(8, 'BEATRIZ FREITAS NEVES', '765.856.845-86', '07/11/1996', 'Feminino', 'Caruaru', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(6, 'JULIO CESAR REGO', '789.636.298-74', '01/01/1997', 'Masculino', 'Caruaru', 'PE', 'O-', 'Não', 'Antígeno', '2', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Sim');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`login`);

--
-- Índices para tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`CPF`),
  ADD UNIQUE KEY `Quantidade` (`Quantidade`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `Quantidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
