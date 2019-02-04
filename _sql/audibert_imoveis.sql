-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2019 às 03:07
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audibert_imoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovels`
--

CREATE TABLE `imovels` (
  `id` int(10) UNSIGNED NOT NULL,
  `discriminator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `areatt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `obs` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notas` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_prop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matricula` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_prop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular_prop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor_real` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areapv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garagem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jardim` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `churras` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quartos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banheiros` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aguaq` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sala` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lavanderia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quiosque` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cozinha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sacada` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elevador` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `festas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portaria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medidores` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cerca` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `energia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_23_023757_create_imovels_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imovels`
--
ALTER TABLE `imovels`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `imovels`
--
ALTER TABLE `imovels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
