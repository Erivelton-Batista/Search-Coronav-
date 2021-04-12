-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Abr-2021 às 23:34
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
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(4) NOT NULL,
  `Sangue` varchar(4) NOT NULL,
  `Testecovid` varchar(4) NOT NULL,
  `Testerealizado` varchar(30) NOT NULL,
  `Vezescovid` varchar(10) NOT NULL,
  `Sintoma` varchar(200) NOT NULL,
  `Vacina` varchar(4) NOT NULL,
  `Qualvacina` varchar(30) NOT NULL,
  `Contraiuvirus` varchar(6) NOT NULL,
  `Doenca` varchar(200) NOT NULL,
  `Fumabebe` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`Quantidade`, `Nome`, `CPF`, `Data`, `Sexo`, `Cidade`, `Estado`, `Sangue`, `Testecovid`, `Testerealizado`, `Vezescovid`, `Sintoma`, `Vacina`, `Qualvacina`, `Contraiuvirus`, `Doenca`, `Fumabebe`) VALUES
(15, 'JULIANA DA SILVA SARAIVA', '014.786.722-15', '04/12/2002', 'Feminino', 'RECIFE', 'PE', 'A+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Sim', 'Pfizer', 'Antes', 'Doenças cardiovasculares', 'Não'),
(17, 'JOELMA RAFAEL SILVA', '014.874.315-64', '04/05/1968', 'Feminino', 'BELO JARDIM', 'PE', 'AB-', 'Sim', 'RT-PCR Saliva', '1', 'Coriza', 'Sim', 'Moderna', 'Antes', 'Doenças respiratória', 'Sim'),
(20, 'NATALICIO GILSON DA SILVA', '015.478.964-84', '07/01/2001', 'Feminino', 'JUPI\'', 'PE', 'A+', 'Sim', 'RT-PCR SWAB Nasofaringe', 'Mais de 2', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Sim', 'Moderna', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(21, 'GUILHERME XIMENES DA SILVA ', '024.875.398-14', '02/09/1999', 'Masculino', 'GARANHUNS', 'PE', 'A-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dificuldade de respirar', 'Sim', 'Oxford', 'Depois', 'Doenças renais', 'Não'),
(19, 'JOAO VICTOR LIMA', '034.561.248-97', '02/12/2010', 'Masculino', 'CACHOEIRINHA', 'PE', 'A+', 'Não', 'RT-PCR SWAB Nasofaringe', 'Mais de 2', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(45, 'DEBORA NICOLLE SARAIVA', '108.754.876-32', '10/10/1984', 'Feminino', 'ITAQUAQUECETUBA', 'SP', 'AB-', 'Sim', 'RT-PCR Saliva', '1', 'Dor de Garganta', 'Sim', 'Oxford', 'Antes', 'Doenças renais', 'Sim'),
(63, 'KAROL COM KA', '123.126.481-64', '02/08/1999', 'Feminino', 'CARUARU', 'PE', 'O+', 'Sim', 'RT-PCR SWAB Nasofaringe', 'Mais de 2', 'Diminuição do apetite (hiporexia) e Dispnéia ( falta de ar)', 'Sim', 'Sputinik V', 'Antes', 'Doenças respiratória', 'Sim'),
(1, 'kain da Silva Amorim', '123.456.888-97', '11/02/1999', 'Masculino', 'Toritama', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'CoronaVac', 'Antes', 'Diabete', 'Não'),
(64, 'LUIZ FELIPE KA', '123.457.970-00', '24/04/1994', 'Masculino', 'CARUARU', 'PE', 'B+', 'Sim', 'Antígeno', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarreia)', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(12, 'LARISSA GENESIS DA SILVA', '124.546.758-67', '09/11/1999', 'Feminino', 'CARUARU', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Tosse', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(62, 'JULIA CRISTINA GUIMARAES', '124.612.467-84', '11/01/1997', 'Feminino', 'CARUARU', 'PE', 'O-', 'Sim', 'RT-PCR Saliva', 'Mais de 2', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Sim', 'Moderna', 'Depois', 'Diabete', 'Sim'),
(27, 'FELIPE AUGUSTO DE SOUZA ', '124.758.394-65', '01/16/1978', 'Masculino', 'PESQUEIRA', 'PE', 'O-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Coriza', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(29, 'AMANDA PEREIRA DA SILVA ALVES', '127.846.957-83', '19/08/1950', 'Feminino', 'BONITO', 'PE', 'A-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Coriza', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Não'),
(9, 'MATHEUS GABRIEL JUNIOR TORRES', '142.144.461-23', '28/05/1992', 'Masculino', 'Caruaru', 'PE', 'AB+', 'Sim', 'Outros', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(16, 'RONALDO ANANIAS OLIVEIRA', '145.879.723-48', '01/04/1978', 'Masculino', 'SÃO PAULO', 'SP', 'B-', 'Não', 'Antígeno', '1', 'Febre', 'Sim', 'Sputinik V', 'Depois', 'Doenças cardiovasculares', 'Sim'),
(22, 'JORGE FELIPE DA SILVA', '146.784.351-24', '15/07/1972', 'Masculino', 'SÃO JOAO', 'PE', 'B+', 'Sim', 'Antígeno', '1', 'Dificuldade de respirar', 'Sim', 'CoronaVac', 'Antes', 'Doenças renais', 'Não'),
(23, 'JOANA BEATRIZ DE OLIVEIRA', '146.875.412-54', '10/10/1988', 'Feminino', 'SOLIDAO', 'CE', 'B+', 'Sim', 'RT-PCR Saliva', '1', 'Cansaço(astenia)', 'Sim', 'Sputinik V', 'Antes', 'Não possuo doenças', 'Não'),
(46, 'BRUNO ALYSON DOS SANTOS', '147.154.654-15', '11/11/1950', 'Masculino', 'BAURU', 'SP', 'A-', 'Sim', 'Antígeno', '1', 'Febre', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(38, 'JOARES FRANCISCO JÓSE', '147.852.369-72', '01/06/1972', 'Masculino', 'BELO JARDIM', 'PE', 'AB+', 'Sim', 'Antígeno', '2', 'Coriza', 'Sim', 'Oxford', 'Depois', 'Hipertensão', 'Sim'),
(13, 'MARIA JOSE FINA SANTOS', '147.852.486-47', '01/05/1984', 'Feminino', 'ABREU E LIMA', 'PE', 'A-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'CoronaVac', 'Antes', 'Doenças renais', 'Sim'),
(14, 'BRUNO ANDRADE DOS SANTOS', '148.154.867-53', '03/04/1998', 'Masculino', 'CARUARU', 'PE', 'O+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Sim', 'Oxford', 'Antes', 'Não possuo doenças', 'Sim'),
(56, 'ENZO THIAGO FERREIRA', '148.564.234-82', '01/10/2012', 'Masculino', 'AGRESTINA', 'PE', 'B+', 'Sim', 'RT-PCR Saliva', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Não', 'Não Tomei Vacina', 'Antes', 'Hipertensão', 'Não'),
(18, 'JUNIOR DA SILVA BERNADOS', '154.782.365-45', '01/12/1988', 'Masculino', 'RECIFE', 'PE', 'B-', 'Não', 'Outros', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Sim', 'CoronaVac', 'Depois', 'Diabete', 'Sim'),
(24, 'RODOLFH FERNANDO SOARES', '154.785.498-56', '01/12/1974', 'Masculino', 'JUCATI', 'PE', 'B-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dor de Garganta', 'Sim', 'Pfizer', 'Antes', 'Diabete', 'Sim'),
(47, 'LORENA LETICIA LINS ', '156.324.824-62', '02/06/1999', 'Feminino', 'SAO CARLOS', 'SP', 'O+', 'Sim', 'RT-PCR Saliva', '2', 'Dificuldade de respirar', 'Não', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(25, 'VICTOR LIMA SILVA ', '157.468.546-54', '01/02/1983', 'Masculino', 'PESQUEIRA', 'PE', 'AB-', 'Sim', 'Antígeno', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'CoronaVac', 'Antes', 'Não possuo doenças', 'Não'),
(37, 'FABRICIO JUNIOR FERREIRA', '198.342.135-21', '27/09/1995', 'Masculino', 'ESCADA', 'PE', 'AB-', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Sim', 'Sputinik V', 'Depois', 'Diabete', 'Sim'),
(11, 'MARIA JOSE DA SILVA', '235.342.545-75', '13/09/1959', 'Masculino', 'CARUARU', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Coriza', 'Sim', 'CoronaVac', 'Antes', 'Diabete', 'Não'),
(35, 'RAFAEL COSTA DA SILVA', '284.761.548-32', '04/05/1999', 'Masculino', 'TACAIMBO', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '2', 'Dificuldade de respirar', 'Sim', 'Oxford', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(33, 'ELYSA ISABELA PEREIRA', '312.468.547-85', '12/12/1938', 'Feminino', 'PESQUEIRA', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Cansaço(astenia)', 'Sim', 'Oxford', 'Antes', 'Não possuo doenças', 'Não'),
(10, 'HEITOR KALLEN JUNIOR FILHO', '341.212.312-31', '12/12/2000', 'Masculino', 'CARUARU', 'PE', 'AB+', 'Não', '---', '---', '---', 'Não', 'Não Tomei Vacina', '---', 'Não possuo doenças', 'Não'),
(3, 'MARIA JOANA DA SILVA AMORIM', '345.345.453-43', '12/07/1986', 'Feminino', 'São Paulo', 'SP', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dor de Garganta', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Sim'),
(34, 'FRANCISCO COSTA DE LIMA', '394.687.215-27', '30/10/1962', 'Masculino', 'SAO CAITANO', 'PE', 'AB+', 'Sim', 'RT-PCR Saliva', '2', 'Dor de Garganta', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(28, 'VITORIA ALVES DE OLIVEIRA', '417.864.895-47', '09/05/1997', 'Feminino', 'ARACAJU', 'PE', 'A+', 'Sim', 'RT-PCR Saliva', '1', 'Dificuldade de respirar', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças cardiovasculares', 'Não'),
(51, 'FERNANDO LUIZ DE CASTRO', '418.675.194-53', '12/10/1975', 'Masculino', 'CACHOEIRINHA', 'PE', 'B-', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Sim', 'Moderna', 'Antes', 'Hipertensão', 'Sim'),
(52, 'GILSON FRANCISCO MATHIAS', '426.759.130-78', '13/01/2000', 'Masculino', 'SAO CAITANO', 'PE', 'AB+', 'Sim', 'Outros', '1', 'Dificuldade de respirar', 'Sim', 'Sputinik V', 'Antes', 'Hipertensão', 'Sim'),
(61, 'KAROLINE FREITAS NATALIER DA SILVA', '454.645.819-05', '27/09/2000', 'Feminino', 'CARUARU', 'PE', 'B-', 'Sim', 'Outros', '1', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Sim', 'Pfizer', 'Antes', 'Não possuo doenças', 'Sim'),
(4, 'MARIA JOAQUINA FREITAS TORRES', '456.809.580-64', '28/03/2000', 'Feminino', 'Caruaru', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Cansaço(astenia)', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(30, 'BETÂNIA EDUARDA DE LIMA', '458.961.473-58', '01/11/1940', 'Feminino', 'CACHOEIRA SECA', 'PE', 'B+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Cansaço(astenia)', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(7, 'ANA CLARA NOGUEIRA', '552.456.445-23', '03/09/1980', 'Feminino', 'Caruaru', 'PE', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dificuldade de respirar', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças renais', 'Não'),
(5, 'ROBERTA SIQUEIRA ALVES', '574.525.187-95', '21/04/1998', 'Feminino', 'Caruaru', 'PE', 'AB+', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Coriza', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças respiratória', 'Não'),
(32, 'THAIS EMANUELLA DE MENEZES', '578.964.215-11', '01/01/2012', 'Feminino', 'BELO JARDIM', 'PE', 'B-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Distúrbios gastrintestinais (náuseas/vômitos/diarr', 'Sim', 'Moderna', 'Antes', 'Doenças cardiovasculares', 'Não'),
(44, 'vitoria NICOLLE de oliveira', '741.685.293-82', '27/02/1989', 'Feminino', 'SUZANO', 'SP', 'B-', 'Sim', 'RT-PCR SWAB Nasofaringe', '1', 'Dor de Garganta', 'Não', 'Não Tomei Vacina', 'Antes', 'Hipertensão', 'Sim'),
(57, 'PIETRO ISAAC COSTA FILHO', '741.864.527-17', '26/07/1964', 'Masculino', 'SALGUEIRO', 'PE', 'O-', 'Sim', 'Outros', '2', 'Dor de Garganta', 'Sim', 'Pfizer', 'Antes', 'Doenças respiratória', 'Sim'),
(48, 'LETICIA EDUARDA SOUZA', '746.853.147-85', '10/02/1970', 'Feminino', 'PIRACICABA', 'SP', 'O-', 'Sim', 'Antígeno', '1', 'Dificuldade de respirar', 'Sim', 'CoronaVac', 'Antes', 'Doenças respiratória', 'Sim'),
(41, 'AGATHA THAINÁ DE LIMA', '753.159.742-68', '12/11/1980', 'Feminino', 'BAURU', 'SP', 'B+', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Sim', 'Sputinik V', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(55, 'EDGAR MENEZES SILVA', '753.694.125-41', '09/10/2000', 'Masculino', 'RECIFE', 'PE', 'A-', 'Sim', 'Antígeno', '1', 'Dificuldade de respirar', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças renais', 'Não'),
(54, 'MARIA ISABELA BEATRIZ', '754.681.235-44', '01/10/1970', 'Feminino', 'PIRACICABA', 'SP', 'A-', 'Sim', 'RT-PCR Saliva', '1', 'Dor de Garganta', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(42, 'SAMUEL JOEL MAGAROTH', '754.861.234-78', '11/11/1920', 'Masculino', 'ITAQUAQUECETUBA', 'SP', 'B-', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Sim', 'Oxford', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(59, 'RIAN MATHEUS DE SOUZA', '754.861.943-21', '10/12/1973', 'Masculino', 'SANTOS', 'SP', 'AB-', 'Sim', 'Outros', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças cardiovasculares', 'Não'),
(8, 'BEATRIZ FREITAS NEVES', '765.856.845-86', '07/11/1996', 'Feminino', 'Caruaru', 'PE', 'O+', 'Sim', 'RT-PCR Saliva', '1', 'Febre', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Não'),
(26, 'BRUNA FERNANDA FERREIRA', '784.152.348-65', '12/03/1999', 'Feminino', 'BONITO', 'PE', 'AB-', 'Sim', 'RT-PCR Saliva', '1', 'Dificuldade de respirar', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Sim'),
(40, 'ISIS RODRIGUES DE OLIVEIRA', '784.215.636-41', '01/05/1975', 'Feminino', 'VENTUROSA', 'PE', 'B+', 'Sim', 'RT-PCR Saliva', '1', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'Pfizer', 'Antes', 'Hipertensão', 'Sim'),
(58, 'AMANDA NUNES DE ALENCAR', '785.418.632-74', '21/04/1949', 'Feminino', 'BEZERROS', 'PE', 'A+', 'Não', 'Antígeno', '1', 'Febre', 'Sim', 'Pfizer', 'Antes', 'Doenças respiratória', 'Não'),
(6, 'JULIO CESAR REGO', '789.636.298-74', '01/01/1997', 'Masculino', 'Caruaru', 'PE', 'O-', 'Não', 'Antígeno', '2', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Não', 'Não Tomei Vacina', 'Antes', 'Não possuo doenças', 'Sim'),
(39, 'AUGUSTO ALEXANDRE DE LIMA', '789.654.851-26', '17/12/1960', 'Masculino', 'VENTUROSA', 'PE', 'AB-', 'Sim', 'RT-PCR Saliva', '2', 'Coriza', 'Sim', 'Pfizer', 'Antes', 'Hipertensão', 'Sim'),
(60, 'ARTHUR GABRIEL ANTONELLI', '852.148.965-13', '01/01/1920', 'Masculino', 'BIRIGUI', 'SP', 'B+', 'Sim', 'Outros', '1', 'Dificuldade de respirar', 'Sim', 'Oxford', 'Antes', 'Hipertensão', 'Sim'),
(43, 'ZILMARA IRIS DE AZEVEDO', '852.763.492-13', '30/12/1970', 'Feminino', 'GUARULHOS', 'SP', 'B+', 'Não', 'Outros', '1', 'Febre', 'Não', 'Não Tomei Vacina', 'Antes', 'Doenças renais', 'Sim'),
(49, 'BIANCA BÁRBARA DE AZEVEDO', '854.697.132-28', '28/09/1976', 'Feminino', 'OSASCO', 'SP', 'B+', 'Sim', 'Outros', '1', 'Dor de Garganta', 'Sim', 'Sputinik V', 'Depois', 'Diabete', 'Sim'),
(50, 'RICARDO RODRIGO LEWIS', '856.741.294-32', '29/03/1984', 'Masculino', 'SAO MIGUEL', 'SP', 'B-', 'Sim', 'RT-PCR Saliva', '1', 'Coriza', 'Sim', 'Moderna', 'Antes', 'Não possuo doenças', 'Sim'),
(31, 'ANDERSON FELIPE DOS SANTOS OLIVEIRA', '947.851.325-48', '25/10/1998', 'Masculino', 'BONITO', 'PE', 'B+', 'Sim', 'RT-PCR Saliva', '1', 'Diminuição do apetite (hiporexia) e Dispnéia ( fal', 'Sim', 'Sputinik V', 'Antes', 'Doenças respiratória', 'Sim'),
(36, 'EDSON CACILIO DE SOUZA', '954.621.482-13', '20/04/1983', 'Masculino', 'SÃO BENTO DO UNA', 'PE', 'B+', 'Sim', 'RT-PCR Saliva', 'Mais de 2', 'Perda de Olfato(anosmia) e Paladar(ageusia)', 'Sim', 'Oxford', 'Antes', 'Doenças cardiovasculares', 'Sim'),
(53, 'KAIQUE FREDERICO LEWIS', '963.752.148-26', '30/11/1960', 'Masculino', 'PANELAS', 'PE', 'B-', 'Sim', 'RT-PCR SWAB Nasofaringe', '2', 'Coriza', 'Sim', 'Pfizer', 'Depois', 'Não possuo doenças', '---');

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
  MODIFY `Quantidade` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
