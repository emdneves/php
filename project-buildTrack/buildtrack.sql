-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jun-2023 às 10:26
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `buildtrack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `budgets`
--

CREATE TABLE `budgets` (
  `id` int(11) NOT NULL,
  `utilizador_id` int(11) DEFAULT NULL,
  `tarefa_id` int(11) DEFAULT NULL,
  `quantidade` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'estrutura metálica'),
(2, 'alvenaria'),
(3, 'reboco'),
(4, 'pintura'),
(5, 'instalação elétrica'),
(6, 'hidráulica'),
(7, 'pavimento'),
(8, 'cobertura'),
(9, 'impermeabilização'),
(10, 'isolamento'),
(11, 'vidro'),
(12, 'carpintaria'),
(13, 'serralharia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `article` varchar(255) DEFAULT NULL,
  `measure` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tasks`
--

INSERT INTO `tasks` (`id`, `category_id`, `article`, `measure`, `type`, `cost`) VALUES
(1, 1, 'estrutura metálica para telhado', 'kg', 'fornecimento e montagem', 120.00),
(2, 1, 'estrutura metálica para pórticos', 'kg', 'fornecimento e montagem', 150.00),
(3, 1, 'estrutura metálica para escadas', 'kg', 'fornecimento e montagem', 180.00),
(4, 2, 'alvenaria de tijolo cerâmico furado', 'm2', 'fornecimento', 60.00),
(5, 2, 'alvenaria de tijolo cerâmico burro', 'm2', 'fornecimento', 75.00),
(6, 2, 'alvenaria de bloco de betão', 'm2', 'fornecimento', 90.00),
(7, 3, 'reboco projetado de argamassa de cimento e areia', 'm2', 'fornecimento', 30.00),
(8, 3, 'reboco de gesso em paredes', 'm2', 'fornecimento', 40.00),
(9, 3, 'reboco de gesso em tetos', 'm2', 'fornecimento', 50.00),
(10, 3, 'reboco estanhado em paredes', 'm2', 'fornecimento', 35.00),
(11, 3, 'reboco estanhado em tetos', 'm2', 'fornecimento', 45.00),
(12, 4, 'pintura de parede interior', 'm2', 'montagem', 25.00),
(13, 4, 'pintura de parede exterior', 'm2', 'montagem', 30.00),
(14, 4, 'pintura de teto interior', 'm2', 'montagem', 35.00),
(15, 4, 'pintura de teto exterior', 'm2', 'montagem', 40.00),
(16, 4, 'pintura de portas', 'm2', 'montagem', 20.00),
(17, 5, 'tomada elétrica', 'unidade', 'fornecimento', 10.00),
(18, 5, 'interruptor', 'unidade', 'fornecimento', 8.00),
(19, 5, 'luminária de teto', 'unidade', 'fornecimento', 25.00),
(20, 5, 'lâmpada LED', 'unidade', 'fornecimento', 5.00),
(21, 6, 'torneira', 'unidade', 'fornecimento', 15.00),
(22, 6, 'válvula de descarga', 'unidade', 'fornecimento', 20.00),
(23, 6, 'chuveiro', 'unidade', 'fornecimento', 40.00),
(24, 6, 'tubulação de PVC', 'metro', 'fornecimento', 10.00),
(25, 7, 'pavimento cerâmico', 'm2', 'montagem', 35.00),
(26, 7, 'pavimento flutuante', 'm2', 'montagem', 30.00),
(27, 7, 'pavimento de madeira', 'm2', 'montagem', 50.00),
(28, 7, 'pavimento de vinil', 'm2', 'montagem', 25.00),
(29, 8, 'telha cerâmica', 'unidade', 'fornecimento e montagem', 5.00),
(30, 8, 'telha de fibrocimento', 'unidade', 'fornecimento e montagem', 8.00),
(31, 8, 'telha metálica', 'unidade', 'fornecimento e montagem', 10.00),
(32, 8, 'telha de vidro', 'unidade', 'fornecimento e montagem', 15.00),
(33, 9, 'impermeabilização de terraço', 'm2', 'montagem', 20.00),
(34, 9, 'impermeabilização de piscina', 'm2', 'montagem', 30.00),
(35, 9, 'impermeabilização de laje', 'm2', 'montagem', 25.00),
(36, 9, 'impermeabilização de parede', 'm2', 'montagem', 18.00),
(37, 10, 'isolamento térmico de parede', 'm2', 'montagem', 30.00),
(38, 10, 'isolamento térmico de telhado', 'm2', 'montagem', 40.00),
(39, 10, 'isolamento térmico de piso', 'm2', 'montagem', 35.00),
(40, 11, 'vidro temperado', 'm2', 'fornecimento e montagem', 50.00),
(41, 11, 'vidro laminado', 'm2', 'fornecimento e montagem', 60.00),
(42, 11, 'espelho decorativo', 'm2', 'fornecimento e montagem', 70.00),
(43, 12, 'porta de madeira', 'unidade', 'fornecimento e montagem', 150.00),
(44, 12, 'janela de madeira', 'unidade', 'fornecimento e montagem', 120.00),
(45, 12, 'escada de madeira', 'unidade', 'fornecimento e montagem', 180.00),
(46, 13, 'portão de ferro', 'unidade', 'fornecimento e montagem', 200.00),
(47, 13, 'grade de ferro', 'unidade', 'fornecimento e montagem', 100.00),
(48, 13, 'corrimão de ferro', 'metro', 'fornecimento e montagem', 80.00),
(49, 10, 'isolamento térmico de janela', 'unidade', 'montagem', 25.00),
(50, 11, 'vidro comum', 'm2', 'fornecimento e montagem', 40.00),
(51, 11, 'janela de vidro', 'unidade', 'fornecimento e montagem', 90.00),
(52, 12, 'prateleira de madeira', 'unidade', 'fornecimento e montagem', 30.00),
(53, 12, 'armário de madeira', 'unidade', 'fornecimento e montagem', 200.00),
(54, 12, 'mesa de madeira', 'unidade', 'fornecimento e montagem', 150.00),
(55, 13, 'porta de alumínio', 'unidade', 'fornecimento e montagem', 180.00),
(56, 13, 'janela de alumínio', 'unidade', 'fornecimento e montagem', 120.00),
(57, 13, 'portão de alumínio', 'unidade', 'fornecimento e montagem', 250.00),
(58, 10, 'isolamento térmico de parede externa', 'm2', 'montagem', 35.00),
(59, 10, 'isolamento térmico de cobertura', 'm2', 'montagem', 45.00),
(60, 11, 'vidro acústico', 'm2', 'fornecimento e montagem', 80.00),
(61, 11, 'vidro antirreflexo', 'm2', 'fornecimento e montagem', 70.00),
(62, 11, 'vidro duplo', 'm2', 'fornecimento e montagem', 90.00),
(63, 12, 'escrivaninha de madeira', 'unidade', 'fornecimento e montagem', 100.00),
(64, 12, 'prateleira de MDF', 'unidade', 'fornecimento e montagem', 25.00),
(65, 12, 'armário embutido', 'unidade', 'fornecimento e montagem', 300.00),
(66, 13, 'porta de aço', 'unidade', 'fornecimento e montagem', 160.00),
(67, 13, 'janela de aço', 'unidade', 'fornecimento e montagem', 110.00),
(68, 13, 'portão de aço', 'unidade', 'fornecimento e montagem', 220.00),
(69, 10, 'isolamento térmico de porta', 'unidade', 'montagem', 40.00),
(70, 11, 'vidro serigrafado', 'm2', 'fornecimento e montagem', 60.00),
(71, 11, 'vidro fosco', 'm2', 'fornecimento e montagem', 55.00),
(72, 12, 'escada de madeira maciça', 'unidade', 'fornecimento e montagem', 250.00),
(73, 12, 'estante de madeira', 'unidade', 'fornecimento e montagem', 180.00),
(74, 12, 'painel de madeira', 'unidade', 'fornecimento e montagem', 120.00),
(75, 13, 'corrimão de inox', 'metro', 'fornecimento e montagem', 100.00),
(76, 13, 'grade de alumínio', 'unidade', 'fornecimento e montagem', 130.00),
(77, 13, 'portão de vidro', 'unidade', 'fornecimento e montagem', 280.00),
(78, 10, 'isolamento térmico de janela de vidro', 'unidade', 'montagem', 30.00),
(79, 10, 'isolamento térmico de parede interna', 'm2', 'montagem', 25.00),
(80, 11, 'vidro laminado de segurança', 'm2', 'fornecimento e montagem', 70.00),
(81, 11, 'vidro impresso', 'm2', 'fornecimento e montagem', 65.00),
(82, 11, 'vidro colorido', 'm2', 'fornecimento e montagem', 75.00),
(83, 12, 'cama de madeira', 'unidade', 'fornecimento e montagem', 200.00),
(84, 12, 'prateleira de madeira maciça', 'unidade', 'fornecimento e montagem', 35.00),
(85, 12, 'guarda-roupa de madeira', 'unidade', 'fornecimento e montagem', 280.00),
(86, 13, 'porta de vidro', 'unidade', 'fornecimento e montagem', 150.00),
(87, 13, 'janela de vidro temperado', 'unidade', 'fornecimento e montagem', 100.00),
(88, 13, 'portão de vidro temperado', 'unidade', 'fornecimento e montagem', 320.00),
(89, 10, 'isolamento térmico de janela de alumínio', 'unidade', 'montagem', 35.00),
(90, 11, 'vidro laminado antirreflexo', 'm2', 'fornecimento e montagem', 80.00),
(91, 11, 'vidro laminado de segurança', 'm2', 'fornecimento e montagem', 75.00),
(92, 11, 'vidro duplo insulado', 'm2', 'fornecimento e montagem', 95.00),
(93, 12, 'mesa de escritório', 'unidade', 'fornecimento e montagem', 120.00),
(94, 12, 'prateleira de vidro', 'unidade', 'fornecimento e montagem', 40.00),
(95, 12, 'rack de madeira', 'unidade', 'fornecimento e montagem', 220.00),
(96, 13, 'porta de alumínio com vidro', 'unidade', 'fornecimento e montagem', 200.00),
(97, 13, 'janela de alumínio com vidro', 'unidade', 'fornecimento e montagem', 150.00),
(98, 13, 'portão de alumínio com vidro', 'unidade', 'fornecimento e montagem', 350.00),
(99, 10, 'isolamento térmico de porta de madeira', 'unidade', 'montagem', 50.00),
(100, 11, 'vidro fosco acidato', 'm2', 'fornecimento e montagem', 70.00),
(101, 11, 'vidro temperado laminado', 'm2', 'fornecimento e montagem', 85.00),
(102, 11, 'vidro temperado serigrafado', 'm2', 'fornecimento e montagem', 90.00),
(103, 12, 'escrivaninha de vidro', 'unidade', 'fornecimento e montagem', 150.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilizador_id` (`utilizador_id`),
  ADD KEY `tarefa_id` (`tarefa_id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`category_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_ibfk_1` FOREIGN KEY (`utilizador_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `budgets_ibfk_2` FOREIGN KEY (`tarefa_id`) REFERENCES `tasks` (`id`);

--
-- Limitadores para a tabela `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
