-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql200.infinityfree.com
-- Tempo de geração: 15/12/2024 às 18:40
-- Versão do servidor: 10.6.19-MariaDB
-- Versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if0_37072552_esencia_bella`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Agenda`
--

CREATE TABLE IF NOT EXISTS `Agenda` (
  `DATA_AGENDA` date NOT NULL,
  `HORARIO` time NOT NULL,
  `COD_SERVICO` int(11) DEFAULT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_PROFISSIONAL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Agenda`
--

INSERT INTO `Agenda` (`DATA_AGENDA`, `HORARIO`, `COD_SERVICO`, `ID_CLIENTE`, `ID_PROFISSIONAL`) VALUES
('2024-12-04', '15:00:00', 15, 68, 19),
('2024-12-09', '08:00:00', 27, 44, 18),
('2024-12-11', '16:00:00', 27, 60, 17),
('2024-12-07', '08:00:00', 27, 43, 17),
('2024-12-04', '08:00:00', 27, 71, 16),
('2024-12-11', '13:00:00', 14, 60, 19),
('2024-12-07', '13:00:00', 28, 68, 16),
('2024-12-04', '13:00:00', 27, 56, 17),
('2024-12-04', '14:00:00', 16, 71, 20),
('2024-01-15', '16:00:00', 8, 69, 27),
('2024-06-10', '10:00:00', 5, 54, 28),
('2024-08-30', '11:00:00', 25, 63, 22),
('2024-08-13', '08:00:00', 11, 59, 28),
('2024-03-25', '16:00:00', 12, 68, 26),
('2024-12-04', '13:00:00', 27, 46, 18),
('2024-12-18', '15:00:00', 26, 49, 23),
('2024-10-02', '11:00:00', 14, 56, 19),
('2024-12-04', '16:00:00', 16, 60, 20),
('2024-09-04', '08:00:00', 20, 70, 21),
('2024-12-04', '10:00:00', 2, 43, 28),
('2024-12-06', '09:00:00', 3, 55, 27),
('2024-02-21', '10:00:00', 23, 58, 24),
('2024-04-11', '08:00:00', 27, 54, 17),
('2024-12-13', '08:00:00', 26, 56, 22),
('2024-11-08', '09:00:00', 26, 44, 23),
('2024-10-11', '11:00:00', 27, 55, 18),
('2024-04-15', '10:00:00', 25, 58, 22),
('2024-12-04', '10:00:00', 27, 53, 16),
('2024-02-13', '15:00:00', 11, 70, 28),
('2024-12-07', '08:00:00', 16, 48, 19),
('2024-12-14', '16:00:00', 17, 64, 20),
('2024-12-04', '13:00:00', 18, 58, 20),
('2024-12-06', '08:00:00', 19, 69, 20),
('2024-12-04', '14:00:00', 20, 54, 21),
('2024-12-05', '11:00:00', 21, 55, 21),
('2024-12-09', '09:00:00', 22, 45, 21),
('2024-12-04', '10:00:00', 23, 46, 22),
('2024-12-04', '14:00:00', 24, 47, 22),
('2024-12-07', '09:00:00', 25, 48, 22),
('2024-12-05', '15:00:00', 26, 49, 23),
('2024-12-09', '09:00:00', 23, 51, 23),
('2024-12-11', '11:00:00', 24, 52, 24),
('2024-12-14', '13:00:00', 25, 63, 24),
('2024-12-04', '14:00:00', 26, 64, 24),
('2024-12-12', '16:00:00', 1, 42, 26),
('2024-12-04', '14:00:00', 2, 58, 26),
('2024-12-05', '08:00:00', 3, 64, 26),
('2024-12-06', '16:00:00', 4, 55, 27),
('2024-12-04', '13:00:00', 5, 64, 27),
('2024-12-07', '08:00:00', 6, 70, 27),
('2024-12-11', '15:00:00', 7, 57, 29),
('2024-12-04', '13:00:00', 8, 68, 29),
('2024-12-07', '08:00:00', 9, 44, 29),
('2024-12-11', '14:00:00', 10, 55, 28),
('2024-12-04', '11:00:00', 11, 54, 28),
('2024-12-20', '09:00:00', 12, 53, 28),
('2024-12-10', '10:00:00', 13, 1, 29),
('2024-12-08', '14:00:00', 13, 1, 26),
('2024-12-05', '14:00:00', 5, 77, 28),
('2024-12-09', '13:00:00', 5, 50, 29),
('2024-12-13', '15:00:00', 21, 76, 19),
('2024-12-09', '14:00:00', 14, 50, 20),
('2024-12-12', '15:00:00', 16, 75, 19),
('2024-11-28', '15:00:00', 1, 50, 27),
('2024-10-25', '15:00:00', 11, 50, 26),
('2024-11-12', '13:00:00', 13, 50, 29),
('2024-12-04', '13:00:00', 23, 50, 23),
('2024-12-04', '11:00:00', 26, 50, 23),
('2024-12-11', '16:00:00', 27, 50, 16),
('2024-12-08', '09:00:00', 11, 50, 27),
('2024-12-11', '15:00:00', 21, 50, 20),
('2024-12-04', '09:00:00', 15, 50, 20),
('2024-12-09', '08:00:00', 1, 74, 26),
('2024-12-10', '09:00:00', 4, 50, 29),
('2024-12-04', '10:00:00', 14, 50, 20),
('2024-12-06', '08:00:00', 6, 50, 26),
('2024-12-06', '09:00:00', 29, 50, 23),
('2024-12-10', '08:00:00', 5, 50, 27);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(100) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CELULAR` varchar(15) NOT NULL,
  `DDD_CELULAR` smallint(6) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Cliente`
--

INSERT INTO `Cliente` (`ID_CLIENTE`, `EMAIL`, `DATA_NASC`, `NOME`, `CELULAR`, `DDD_CELULAR`) VALUES
(67, 'anajuliasilva@gmail.com', '1996-08-25', 'Ana Julia da Silva Santos', '991254382', 16),
(66, 'andressarocha@gmail.com', '1992-03-30', 'Andressa Lima Rocha', '995254285', 19),
(65, 'pabloluizgomes@gmail.com', '2003-08-18', 'Pablo Luiz Gomez', '981234249', 16),
(64, 'ceciliasantanna@gmail.com', '2005-10-15', 'Cecilia Alvez Santanna', '992023539', 16),
(63, 'biancacristina.silva@gmail.com', '2006-04-25', 'Bianca Cristina da Silva ', '993377182', 16),
(62, 'kaueherick@gmail.com', '2005-03-15', 'Herick Kaue Andrade', '992394935', 16),
(61, 'gustavoluis@gmail.com', '2008-05-09', 'Gustavo Luis Candido', '997325654', 16),
(60, 'fabianas.s@gmail.com', '2002-09-15', 'Fabiana Souza Sores Dias', '991241947', 16),
(59, 'raissal@gmail.com', '2003-06-25', 'Raissa Leal ', '997556781', 16),
(58, 'camila.sales@gmail.com', '1998-11-08', 'Camila Sales Pinheiro', '995628629', 16),
(57, 'cristinaeusebio@gmail.com', '1992-04-17', 'Cristina Ribeiro Eusebio', '993356386', 16),
(56, 'dudasenapeschi@gmail.com', '2000-06-25', 'Maria Eduarda Senapeschi Soriano', '995632621', 16),
(55, 'lojadajosi@gmail.com', '1977-04-21', 'Josiane Senapeschi', '998652353', 16),
(54, 'erikaaa@gmail.com', '2006-01-17', 'Erika Almeida de Andrade', '997563225', 16),
(53, 'vantonelli@gmail.com', '1980-06-20', 'Vanessa Antonelli da Silva', '998568965', 16),
(52, 'nickcarolina@gmail.com', '2006-12-15', 'Nicolly Carolina Candido Gomes', '997552541', 16),
(51, 'donaeliza@gmail.com', '1959-04-12', 'Maria Eliza Risoli', '99507717', 16),
(50, 'fsenapeschi@gmail.com', '2007-01-15', 'Fernanda Domingos Senapeschi', '997632007', 16),
(49, 'isabella11@gmail.com', '2013-04-08', 'Isabella Cristina Ribeiro EuzÃ©bio', '993218952', 17),
(48, 'joiceeuzebio@gmail.com', '1992-04-17', 'Joice Cristina Ribeiro EuzÃ©bio', '993356305', 11),
(47, 'brusouza1312@gmail.com', '2003-04-07', 'Bruna Cristina da Silva Souza', '993056386', 16),
(46, 'candidomariceia@gmail.com', '1972-09-09', 'Mariceia Carolina Candido Gomes', '994852775', 18),
(45, 'senape2014@gmail.com', '1983-08-05', 'Valdirene Aparecida Domingos Senapeschi', '9811542226', 16),
(44, 'cjosiane367@gmail.com', '1984-05-26', 'Josiane Cristina Gomes', '993255439', 16),
(42, 'beecristina4567@gmail.com', '2006-08-30', 'Beatriz Cristina da Silva', '993154879', 16),
(43, 'aclara09@gmail.com', '2004-05-09', 'Ana Clara Cristina Machado', '995097628', 11),
(68, 'claudiar.souza@gmail.com', '1989-04-15', 'Claudia Rodrigues Sousa', '98103539', 16),
(69, 'leonardoalencar@gmail.com', '1994-10-19', 'Leonardo Ferreira de Alencar', '997884249', 16),
(70, 'thalitag.lima@gmail.com', '1999-10-23', 'Thalita Gomes Lima ', '981354285', 19),
(71, 'regiane.soares@gmail.com', '1972-03-17', 'Regiane Cristina Soares', '997733965', 16),
(72, 'marcia.lima@gmail.com', '1980-05-12', 'Marcia Lima', '994345289', 16),
(73, 'teresagoncaves@gmail.com', '1975-11-28', 'Teresa Gonçalves', '997583562', 19),
(74, 'rodrigosenapeschi@gmail.com', '1978-09-18', 'Rodrigo Senapeschi', '982250000', 16),
(75, 'vbeckman98@gmail.com', '1941-11-22', 'VitÃ³ria Beckman', '997701657', 16),
(76, 'jana@gmail.com', '1999-06-05', 'janaina goulart', '995341547', 16),
(77, 'nicolly@gmail.com', '2006-12-12', 'nicolly carolina', '997552541', 16);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Feedback`
--

CREATE TABLE IF NOT EXISTS `Feedback` (
  `ID_FEEDBACK` int(11) NOT NULL AUTO_INCREMENT,
  `DATA` varchar(10) NOT NULL,
  `HORA` varchar(6) NOT NULL,
  `CLASSIFICACAO` int(11) NOT NULL,
  `ID_PROFISSIONAL` int(11) NOT NULL,
  `COD_SERVICO` int(11) NOT NULL,
  `MENSAGEM` text DEFAULT NULL,
  PRIMARY KEY (`ID_FEEDBACK`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Feedback`
--

INSERT INTO `Feedback` (`ID_FEEDBACK`, `DATA`, `HORA`, `CLASSIFICACAO`, `ID_PROFISSIONAL`, `COD_SERVICO`, `MENSAGEM`) VALUES
(1, '2024-12-01', '19:43:', 2, 20, 14, 'muito bom'),
(2, '2024-12-02', '10:04:', 2, 21, 17, 'perfeito'),
(3, '2024-12-02', '11:12:', 2, 27, 8, 'teste'),
(4, '2024-12-02', '19:14:', 2, 29, 9, 'estou exauta'),
(5, '2024-12-03', '11:13:', 3, 27, 5, 'fala muito'),
(6, '2024-12-03', '17:18:', 1, 19, 16, 'obrigada pelo serviÃ§o'),
(7, '2024-12-04', '09:06:', 1, 24, 24, 'Ã“timo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `EMAIL` varchar(100) NOT NULL,
  `SENHA` char(64) NOT NULL,
  `FUNCAO` int(11) NOT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL,
  `ID_PROFISSIONAL` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Login`
--

INSERT INTO `Login` (`EMAIL`, `SENHA`, `FUNCAO`, `ID_CLIENTE`, `ID_PROFISSIONAL`) VALUES
('camila.trindade@gmail.com', '$2y$10$j6nlb1ewU//VeCoGQHQQTeHOb7CpLNACYY1F.PNUVpxzvtQNxHxS2', 1, NULL, 15),
('Jugoulart@gmail.com', '$2y$10$WB2w9NgAVofW6PJfzZ5Iuew7cK1ip9z8hwL25BQyK4hAKGfabWEDG', 1, NULL, 16),
('kalebrocha@gmail.com', '$2y$10$0jpbFQ4hWh6oKHAkq5y0YOrlHqZWbl7fc4TJ6Ian30vBe3KW2Ryg.', 1, NULL, 17),
('fabisantos@gmail.com', '$2y$10$jTaii77oLJi9VdLVF/6VnOQjj0tm.bPt3U2ryRHcNR.YtKjYaPyNm', 1, NULL, 18),
('gomsday@gmail.com', '$2y$10$/OTXvXDMPZoKGxhcAphXxuIUz5wM9qErl6SBsu3sly4c6jsyQorYG', 1, NULL, 19),
('matheusssnts18@gmail.com', '$2y$10$dampkc6dQJSwqQns.ejRqu0wNaDV.Prf.UKlK5R7MWn7171F60ve6', 1, NULL, 20),
('silviamartins@gmail.com', '$2y$10$tzKYwKPuNN5eLmpHJXqp5Oa8zE1SM3uUIFbQseTdrv3yM8sNq4yJa', 1, NULL, 21),
('vivianesouza@gmail.com', '$2y$10$gYhVwX12nTEAY8kp0dQOoepB7hpuOqva/8aJStpReNXS4Fc7WTgKm', 1, NULL, 22),
('gio23@gmail.com', '$2y$10$ExGw8Od8T5A7dTtdS0f0NO7kKvD6L5F1eWx5Z1MAGn6MtzByvRu5K', 1, NULL, 23),
('gabitanakka@gmail.com', '$2y$10$Rm15Ea36XREuXmm6XVKnfOoQoBV2HhJIMgD09wDN/ZJDAvBSutIaS', 1, NULL, 24),
('satiroLdani@gmail.com', '$2y$10$rd9vFpgycvQVLN1/NFTwouI8X5GierRHV6KHmI12C3RlXxaQWzOnC', 1, NULL, 25),
('satiroLdani@gmail.com', '$2y$10$k0THFON983gOhJLXPCeJ6uRsKCv/bubf8ZUM8GFiXZWkWuiLLRK0O', 1, NULL, 26),
('sosoalvez@gmail.com', '$2y$10$bFnqN1imZHsECvv3D.T2MezAJnSgSFpckkYOhYd/Bc4IJ5JtKnW7O', 1, NULL, 27),
('nick.paschoala@gmail.com', '$2y$10$XeMcDlgbjRzl0qys9MlGYuD6LU7CROGH81auNOFOPmvlI2zoe9TwC', 1, NULL, 28),
('rafa.britto@gmail.com', '$2y$10$jOTqJ7reEGmUGI0NWpbpgukqYbndTSo.LpZIGQouiziS0QvZAhXO2', 1, NULL, 29),
('beecristina4567@gmail.com', '$2y$10$i/j1ZzPK9hRSMXndly7KFud6DkVQo/HcSL/3bgUkLtRVw.FawrcHK', 0, 42, NULL),
('aclara09@gmail.com', '$2y$10$jVI2x.gXr5E2MtoPySpOaekPV4gTrp/ksRQI7e1UJpV.17Cj3NZ0i', 0, 43, NULL),
('cjosiane367@gmail.com', '$2y$10$gXrU1T5gSak.GeOxKgClluL.px4irk00/OZWN4n4uf1npJb0pjQSa', 0, 44, NULL),
('senape2014@gmail.com', '$2y$10$1dNxEBcKc96HYucFjH9dh..EcLH/rhYHYui7zA5grwT6OyEqyeOqe', 0, 45, NULL),
('candidomariceia@gmail.com', '$2y$10$cCqiHZCGRWjzFyVb3aAXOuZBIkMaJwxOKDBZuEIbQiLaS5X8owwcm', 0, 46, NULL),
('brusouza1312@gmail.com', '$2y$10$G2YtX.xEeq8Dy.gzt/Mh9uVIpCjB0lrrgvVx7Ue.8k3BZHr/SodcW', 0, 47, NULL),
('joiceeuzebio@gmail.com', '$2y$10$LaRR9UB2lDcfLAZphHT.2uPXOTtQRQxBLV.DeSY68wyRAIHm9dAN2', 0, 48, NULL),
('isabella11@gmail.com', '$2y$10$e0QWnb0zj4UxnzOLVhmYJOizFmMGB6VKORjAIVO/1ZdMizWEBlegG', 0, 49, NULL),
('fsenapeschi@gmail.com', '$2y$10$EH1hOLgbq.ajfBp5oIFN0.cX/fQHQSZDpggDIM00NGfu76p8SOJUi', 0, 50, NULL),
('donaeliza@gmail.com', '$2y$10$IIshbHuHNj.fV4zRJsA/0u6TJnmO94Nyym8VIiyPhBRBGPOkK0tpq', 0, 51, NULL),
('nickcarolina@gmail.com', '$2y$10$AweeER6CjySAJDThqXVWyuSIJtTfLY.NMW46SSwtCmL/WJGkgqjBO', 0, 52, NULL),
('vantonelli@gmail.com', '$2y$10$f28CoyIShqGAU9n4SoZqjeYAzN4xOu4c01iehenCFm61SaSqLypSO', 0, 53, NULL),
('erikaaa@gmail.com', '$2y$10$p515QpGBIorBZ8aW9ATpJ.f3KFgtyr1zsfEtZXAozWkcLECaoyqpu', 0, 54, NULL),
('lojadajosi@gmail.com', '$2y$10$tMmPKijFMvRof7/GhN4FUecfdofUCUZxHFXR1YU70veCB0EQYroga', 0, 55, NULL),
('dudasenapeschi@gmail.com', '$2y$10$FMuNdUA9LQWmbUUgcIE2E.7TyB4JdO/P9X.OIk8VMe7kgMEZbi4t6', 0, 56, NULL),
('cristinaeusebio@gmail.com', '$2y$10$Kbwj9UKwvohRYttSkE2qkuY9MzRoHDpBjGmtZFW1YeHQLVQMAJtda', 0, 57, NULL),
('camila.sales@gmail.com', '$2y$10$M3uJ09pnqQn0cbLHEqCuB.f.EldAk9DRBv9UmsF7afjjdcrfRnPKy', 0, 58, NULL),
('raissal@gmail.com', '$2y$10$gZyXZlurx0TpPVcRYzCJTOc8FnxYHNFKcIun8brg36kkvBuJEB7ii', 0, 59, NULL),
('fabianas.s@gmail.com', '$2y$10$/I.dU/DvudPp41BvQz0BPuaPaWFM1VORzj3kAQg/WVj/A/W2mQeZW', 0, 60, NULL),
('gustavoluis@gmail.com', '$2y$10$0baE3VwlhOwyqGXPxhfcZum8xoNkB76rOmlYyzz2UumhUJxgq7v4.', 0, 61, NULL),
('kaueherick@gmail.com', '$2y$10$8G.aUtWEGIMn7WhjEhGBfOAXL7BXEndU5TiAHD0UFMnBsXyQcssMW', 0, 62, NULL),
('biancacristina.silva@gmail.com', '$2y$10$LFJFhBXLlMtXfLlw6rbBmuvgHUKmaiT0Q3JlnlZeFzpW/2XBNC.9S', 0, 63, NULL),
('ceciliasantanna@gmail.com', '$2y$10$n4IcES/eNKOyAIcwYE2p4O1nJ4Q9jJBC7VaPq.gJsCER8tZ2KKfU.', 0, 64, NULL),
('pabloluizgomes@gmail.com', '$2y$10$a42sgQGbCms2aDDc2e8KJuTLyfm.xoyEcTUlUk7/5s5igbXGMhKFO', 0, 65, NULL),
('andressarocha@gmail.com', '$2y$10$iFZWtBMVJTn05YKA/OEp4.Nls8ZZb0AABfW7FLi5aS8vNYrnpuoGu', 0, 66, NULL),
('anajuliasilva@gmail.com', '$2y$10$3aSc/QKCCK1LYaONj.BOKuu6eW6QwvOfGgczkM6oZwrw8qZ3k/xkm', 0, 67, NULL),
('claudiar.souza@gmail.com', '$2y$10$jfW288evaQYt9uHvVx0oyeFF/cAMuwEzogbZKCqUjfv.O3HmacloC', 0, 68, NULL),
('leonardoalencar@gmail.com', '$2y$10$a7ZoaBtC3Kk6akuuYrXEeePCUej.6kB.HlwqwTxHnoZ3HvIRPqmNG', 0, 69, NULL),
('thalitag.lima@gmail.com', '$2y$10$fwfqVC5ZvmdcLUpVrTPvYOg7kmXtReac9kAK0kheSKdO2teHE7kfa', 0, 70, NULL),
('regiane.soares@gmail.com', '$2y$10$7wQUsHNvu1iJKEEwr89o8uzhTax83QpQxAeK1dejnitDp0CI8uPrS', 0, 71, NULL),
('marcia.lima@gmail.com', '$2y$10$YWTfgONeyuQKweAJqvMiNOZcns02Bfg8OJ2Ubwib0rtioY4fNfmuu', 0, 72, NULL),
('teresagoncaves@gmail.com', '$2y$10$Kk1z17ukR6p.Pcy3tbmjGOJyY4bYUkwb8N0uLxzsvrHypkZPyjyRK', 0, 73, NULL),
('rodrigosenapeschi@gmail.com', '$2y$10$xCgMoH16x8ohFrz812dvoejJntNuQ/KSNxU73fNPesXfHyZPh7St2', 0, 74, NULL),
('vbeckman98@gmail.com', '$2y$10$v7DBEHjIfAi9uHXUPUvokeT1uKQ/ngsXEQGY7ErBD8L9amjCmzJGO', 0, 75, NULL),
('jana@gmail.com', '$2y$10$ij89YtrTflVOhqaZxabfsu8uX301uYlVDx0NsF8zFWRuZOe94A1eC', 0, 76, NULL),
('nicolly@gmail.com', '$2y$10$BKnjfsXnxG6nUg4fO41Kluprt71PPdf8ckG2syeg9pn55TQCNdIlC', 0, 77, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Profissional`
--

CREATE TABLE IF NOT EXISTS `Profissional` (
  `ID_PROFISSIONAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `DATA_NASC` date NOT NULL,
  `CELULAR` varchar(15) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `DDD_CELULAR` smallint(6) NOT NULL,
  `NUM_ENDERECO` int(11) NOT NULL,
  `CEP_ENDERECO` char(10) NOT NULL,
  `COMP_ENDERECO` varchar(255) DEFAULT NULL,
  `AREA_ATUACAO` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_PROFISSIONAL`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Profissional`
--

INSERT INTO `Profissional` (`ID_PROFISSIONAL`, `NOME`, `EMAIL`, `DATA_NASC`, `CELULAR`, `CPF`, `DDD_CELULAR`, `NUM_ENDERECO`, `CEP_ENDERECO`, `COMP_ENDERECO`, `AREA_ATUACAO`) VALUES
(20, 'Matheus Antonelli da Silva', 'matheus.antonelli@gmail.com', '2003-10-23', '991255964', '95558958797', 16, 1204, '13569631', '', 'cabeleireiro'),
(19, 'Dayene Candido Gomes', 'gomsday@gmail.com', '2001-01-19', '991242585', '63396939633', 11, 28, '', '', 'cabeleireira'),
(18, 'Fabiana Cristina dos Santos', 'fabisantos@gmail.com', '1990-09-21', '997725685', '00185869580', 16, 356, '13568601', '', 'maquiadora'),
(21, 'Silvia Santana Martins', 'silviamartins@gmail.com', '1966-03-05', '9981268968', '23046258223', 16, 301, '13066023', '', 'cabeleireira'),
(29, 'Rafaela Campos Britto', 'rafa.britto@gmail.com', '1997-03-12', '996427135', '36795542273', 16, 515, '13576809', '', 'esteticista'),
(16, 'Julia Goulart de Souza', 'Jugoulart@gmail.com', '2002-05-20', '98816385', '38520654419', 11, 652, '13569987', '', 'maquiadora'),
(17, 'Kaleb Rocha', 'kalebrocha@gmail.com', '2004-07-27', '9997658675', '87845745874', 16, 101, '13069825', '5°andar, bloco3', 'maquiador'),
(22, 'Viviane Cristina de Souza', 'vivianesouza@gmail.com', '1999-08-07', '991745264', '67589782925', 15, 928, '13589325', '', 'manicure'),
(23, 'Giovanna Fernandes', 'gio23@gmail.com', '2001-12-25', '999528474', '18974595845', 15, 928, '13589325', '', 'manicure'),
(24, 'Gabriella Cardoso Tanaka ', 'gabitanakka@gmail.com', '2000-11-04', '986312261', '00437365235', 11, 789, '13974730', '3°andar, bloco 7', 'manicure'),
(26, 'Daniela Lima Satiro', 'satiroLdani@gmail.com', '1997-03-06', '995021544', '20154862584', 15, 22, '14895854', '', 'esteticista'),
(27, 'Sophia Cristina da Silva Alves ', 'sosoalvez@gmail.com', '1994-01-25', '993525689', '35952670872', 11, 636, '13598487', '', 'esteticista'),
(28, 'Nicolas Paschoal Almeida', 'nick.paschoala@gmail.com', '1999-04-17', '994638580', '95589587474', 18, 201, '13569631', '', 'esteticista');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Realiza`
--

CREATE TABLE IF NOT EXISTS `Realiza` (
  `DATA_SERVICO` date NOT NULL,
  `FEEDBACK` int(11) NOT NULL,
  `COD_SERVICO` int(11) DEFAULT NULL,
  `ID_PROFISSIONAL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Realiza`
--

INSERT INTO `Realiza` (`DATA_SERVICO`, `FEEDBACK`, `COD_SERVICO`, `ID_PROFISSIONAL`) VALUES
('2024-11-15', 5, 1, 10),
('2024-12-16', 2, 2, 12),
('2024-04-25', 1, 22, 5),
('2024-02-14', 3, 17, 4),
('0000-00-00', 4, 2, 11),
('2024-09-17', 5, 18, 6),
('2024-01-15', 4, 8, 10),
('2024-06-10', 3, 5, 11),
('2024-08-30', 5, 25, 8),
('2024-08-13', 3, 11, 12),
('2024-03-25', 4, 12, 12),
('2024-01-20', 5, 27, 7),
('2024-12-18', 4, 26, 9),
('2024-10-02', 3, 14, 10),
('2024-12-05', 4, 16, 4),
('2024-09-04', 5, 20, 6),
('2024-12-04', 4, 2, 11),
('2024-12-06', 5, 3, 10),
('2024-05-06', 3, 9, 12),
('2024-02-21', 2, 23, 10),
('2024-04-11', 5, 27, 1),
('2024-12-13', 4, 26, 2),
('2024-11-08', 3, 26, 3),
('2024-10-11', 5, 27, 2),
('2024-04-15', 1, 25, 7),
('2024-03-09', 4, 23, 9),
('2024-02-13', 4, 11, 10),
('0000-00-00', 4, 17, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Servico`
--

CREATE TABLE IF NOT EXISTS `Servico` (
  `COD_SERVICO` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(255) NOT NULL,
  `PRECO` decimal(10,2) NOT NULL,
  PRIMARY KEY (`COD_SERVICO`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `Servico`
--

INSERT INTO `Servico` (`COD_SERVICO`, `DESCRICAO`, `PRECO`) VALUES
(1, 'Banho de lua', '47.00'),
(2, 'Brow  lamination', '140.00'),
(3, 'Depilacao meia perna', '55.00'),
(4, 'Depilacao perna total', '80.00'),
(5, 'Axila', '30.00'),
(6, 'Buco', '20.00'),
(7, 'Virilha', '55.00'),
(8, 'Virilha biquine', '20.00'),
(9, 'Virilha completa', '60.00'),
(10, 'Virilha estilizada', '140.00'),
(11, 'Sobrancelha', '35.00'),
(12, 'Micro pigmentacao', '200.00'),
(13, 'Limpeza de pele', '100.00'),
(14, 'Corte', '40.00'),
(15, 'Hidratacao', '50.00'),
(16, 'Selante', '100.00'),
(17, 'Progressiva', '100.00'),
(18, 'Tintura', '80.00'),
(19, 'Plastica dos fios', '200.00'),
(20, 'Escova', '30.00'),
(21, 'Penteados', '200.00'),
(22, 'Mega Hair', '250.00'),
(23, 'Esmaltacao', '35.00'),
(24, 'Unha em gel', '80.00'),
(25, 'Fibra de vidro', '90.00'),
(26, 'Limpeza de unha', '20.00'),
(27, 'Maquiagens', '200.00'),
(28, 'Maquiagem para Noiva', '300.00'),
(29, 'Blindagem de unha', '70.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
