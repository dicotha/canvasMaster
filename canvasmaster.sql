-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jan-2017 às 01:52
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canvasmaster`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `canvas`
--

CREATE TABLE `canvas` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `parceiros` varchar(255) NOT NULL,
  `atividades` varchar(255) NOT NULL,
  `recursos` varchar(255) NOT NULL,
  `proposta` varchar(255) NOT NULL,
  `relacao` varchar(255) NOT NULL,
  `canais` varchar(255) NOT NULL,
  `segmentos` varchar(255) NOT NULL,
  `custos` varchar(255) NOT NULL,
  `fontes` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `canvas`
--

INSERT INTO `canvas` (`id`, `userId`, `titulo`, `parceiros`, `atividades`, `recursos`, `proposta`, `relacao`, `canais`, `segmentos`, `custos`, `fontes`, `data`) VALUES
(5, '1', '', '<li id="cont"><p>asdasdasdasd<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '', '', '', '', '', '', '', '<li><p>sadasdasdasd<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', 'domingo, 8 de janeiro de 2017'),
(8, '1', '', '<li id="cont"><p> xzczczxscaascascc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li id="cont"><p> xzczczxc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '', '<li id="cont"><p>zxczxczxc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li id="cont"><p>zxczxczxc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '<li id="cont"><p>acascascac<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li id="cont"><p>acascascac<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li id="cont"><p>acasca', '<li id="cont"><p>ascascasca<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li id="cont"><p>ascascasca<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '<li><p>ascascascasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '<li><p>ascascascascasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '<li><p>ascsacsacascasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li><p>ascsacsacascasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li>', '<li><p>csacsacsacasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li><p>csacsacsacasc<a href="#" class="remover glyphicon glyphicon-trash" style="float: right;"></a></p></li><li><p>csacsacsacasc<a href="#" class', 'Domingo, 8 de janeiro de 2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'C:xampphtdocscanvasMasterpublic/img/avatar/default.png',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `facebook_id`, `name`, `telefone`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `complemento`, `estado`, `cidade`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1341601565883684', 'Waldir Bertuqui Neto', '12313213213213', '05401164912', '', '', '', '', '', 'wbn_k@hotmail.com', '', 'https://graph.facebook.com/v2.8/1341601565883684/picture?type=normal', 'w.discordias@gmail.com', '$2y$10$ffQ7S6NWwkFE6e7JYhPaKu/Z93i8/Dh/p7nyAsiYQP6rqmLegGZi6', 'fhAqGRweZYy52uPDWFUMHfs4PM58ka8YlkxjbIj4M0JQgZkRsX3SZ44PEBXR', '2017-01-08 05:57:43', '2017-01-09 02:52:26'),
(2, '', 'waldir batuque', '', '05401164912', '', '', '', '', '', 'wbn_k@hotmail.com', '', '/img/avatar/1483847995.jpg', 'wbn_k@hotmail.comww', '$2y$10$.qvCbMrF9X38muRZDv3r..bvADhLMr8t2WMfrM.kG/i27bVZ9Z8qG', 'aSu6kASTbuDmjhAVBKAJ64XxhzOGWNoVFk6laK6odmD5G0sSKhMNw5YyjLI8', '2017-01-08 05:58:59', '2017-01-08 08:11:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canvas`
--
ALTER TABLE `canvas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canvas`
--
ALTER TABLE `canvas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
