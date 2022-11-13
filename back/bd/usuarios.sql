-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2022 às 23:47
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
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE `publicacoes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `datahoje` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `usuario`, `texto`, `imagem`, `datahoje`) VALUES
(1, 'Miguel Back', 'Caro visualizador do meu site,\r\n\r\nPrimeiramente, obrigado por utilizar o meu projeto. \r\n\r\nSegundamente, peço que não utilize senhas as quais são utilizadas verdadeiramente em suas contas. Este site é um estudo, um projeto feito por um estudante do Ensino Médio Técnico para a disciplina de Programação Web, ministrada pelo professor Ayslan.\r\n\r\nObrigado! =D', '839572EPj5EYUW4AEBylT (1).jpg', '24-10-2022'),
(2, 'Ana Luiza', 'Bom dia pessoal. Hoje me deparei com essa belezinha. Confesso que fiquei com medo, mas, fica aqui o meu registro.', '157105WhatsApp Image 2022-11-13 at 19.13.12.jpeg', '13-11-2022'),
(3, 'Miguel Back', 'E essa aranha-lince que registrei dia 14/04/2022? Tão estranha. Ao mesmo tempo, tão linda. Família Oxyopidae.', '426079WhatsApp Image 2022-11-13 at 19.13.14.jpeg', '13-11-2022'),
(4, 'João da Silva', 'Nunca vi uma aranha-de-jardim tão parecida com uma armadeira! Até a posição das pernas dianteiras imitam a armadeira em situação de ameaça. Coisa de louco. Gênero Lycosa.', '274874WhatsApp Image 2022-11-13 at 19.13.14 (1).jpeg', '13-11-2022'),
(5, 'Friedrich Nietzsche', 'Peguei esta bela miniatura de viúva-marrom há alguns meses. Mal peguei na mão e já me veio uma ideia: escrever Humano, demasiado Humano. Vendi tanto que fiquei muito rico. Vale a pena viajar nos pensamentos às vezes. #soufeliz', '520860WhatsApp Image 2022-11-13 at 19.13.14 (2).jpeg', '13-11-2022'),
(6, 'Miguel Back', 'Vai dizer que não é linda? Miniatura de papa-mosca, família Salticidae.', '859145WhatsApp Image 2022-11-13 at 19.13.14 (3).jpeg', '13-11-2022'),
(7, 'Miguel Back', 'O gênero Lycosa sempre irá morar em meu coração. São dóceis, parecem até animais de estimação.', '63691WhatsApp Image 2022-11-13 at 19.13.14 (4).jpeg', '13-11-2022');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;
