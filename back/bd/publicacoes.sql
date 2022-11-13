-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2022 às 23:46
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `biodex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `cep`, `cidade`, `estado`, `senha`, `imagem`) VALUES
(1, 'Miguel Back', 'miguelbackifpr@gmail.com', '87703-624', 'Paranavaí', 'PR', '1234567', 'af428d042d35eaa1ff838a989632be7f.png'),
(3, 'Ana Luiza', 'analuizaandrade503@gmail.com', '87780000', 'Paraíso do Norte', 'PR', '1234567', '9cbbfcda19b3d0492d2ed684ac07bc5f.png'),
(4, 'João da Silva', 'joao@gmail.com', '69030-418', 'Manaus', 'AM', '1234567', '126b738cae9647ad6877ff757011c242.jpg'),
(5, 'Friedrich Nietzsche', 'filosofia@gmail.com', '65036-140', 'São Luís', 'MA', '1234567', '16e408ad4b88ea6899df81e431416fd4.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
