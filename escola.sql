-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2024 às 17:40
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `action_logs`
--

CREATE TABLE `action_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `ip` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `action_logs`
--

INSERT INTO `action_logs` (`id`, `user_id`, `action`, `details`, `ip`, `created_at`, `updated_at`) VALUES
(1, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:24:53', '2024-12-18 01:24:53'),
(2, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:25:26', '2024-12-18 01:25:26'),
(3, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:36:32', '2024-12-18 01:36:32'),
(4, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:38:27', '2024-12-18 01:38:27'),
(5, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:42:52', '2024-12-18 01:42:52'),
(6, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:43:43', '2024-12-18 01:43:43'),
(7, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:44:07', '2024-12-18 01:44:07'),
(8, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:44:55', '2024-12-18 01:44:55'),
(9, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:48:57', '2024-12-18 01:48:57'),
(10, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:49:58', '2024-12-18 01:49:58'),
(11, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:54:58', '2024-12-18 01:54:58'),
(12, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:58:25', '2024-12-18 01:58:25'),
(13, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:59:07', '2024-12-18 01:59:07'),
(14, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 01:59:24', '2024-12-18 01:59:24'),
(15, 3, 'GET logs/3', '[]', '127.0.0.1', '2024-12-18 01:59:37', '2024-12-18 01:59:37'),
(16, 3, 'GET logs/3', '[]', '127.0.0.1', '2024-12-18 02:11:09', '2024-12-18 02:11:09'),
(17, 3, 'GET logs/3', '[]', '127.0.0.1', '2024-12-18 02:13:12', '2024-12-18 02:13:12'),
(18, 3, 'GET logs', '[]', '127.0.0.1', '2024-12-18 02:17:21', '2024-12-18 02:17:21'),
(19, 3, 'GET logs/3', '[]', '127.0.0.1', '2024-12-18 02:18:49', '2024-12-18 02:18:49'),
(20, 3, 'GET logs/3', '[]', '127.0.0.1', '2024-12-18 02:36:51', '2024-12-18 02:36:51'),
(21, 1, 'login', 'User logged in.', '127.0.0.1', '2024-12-18 07:27:56', '2024-12-18 07:27:56'),
(22, 1, 'POST /', '{\"_token\":\"th3037tQqdFFvGoFbaa9vs37S9AR9WsYDYfg99kU\",\"email\":\"jossefina@gmail.com\",\"password\":\"password\"}', '127.0.0.1', '2024-12-18 07:27:56', '2024-12-18 07:27:56'),
(23, 1, 'GET user', '[]', '127.0.0.1', '2024-12-18 07:27:57', '2024-12-18 07:27:57'),
(24, 1, 'GET logs', '[]', '127.0.0.1', '2024-12-18 07:28:10', '2024-12-18 07:28:10'),
(25, 1, 'GET logs/1', '[]', '127.0.0.1', '2024-12-18 07:28:43', '2024-12-18 07:28:43'),
(26, 1, 'GET logs/2', '[]', '127.0.0.1', '2024-12-18 07:29:03', '2024-12-18 07:29:03'),
(27, 1, 'GET logs/1', '[]', '127.0.0.1', '2024-12-18 07:29:31', '2024-12-18 07:29:31'),
(28, 1, 'GET /', '[]', '127.0.0.1', '2024-12-18 07:47:44', '2024-12-18 07:47:44'),
(29, 1, 'GET logs/1', '[]', '127.0.0.1', '2024-12-18 08:25:56', '2024-12-18 08:25:56'),
(30, 1, 'GET /', '[]', '127.0.0.1', '2024-12-18 08:26:03', '2024-12-18 08:26:03'),
(31, 1, 'GET auth', '[]', '127.0.0.1', '2024-12-18 08:35:05', '2024-12-18 08:35:05'),
(32, 1, 'GET auth', '[]', '127.0.0.1', '2024-12-18 08:36:23', '2024-12-18 08:36:23'),
(33, 1, 'GET auth/github', '[]', '127.0.0.1', '2024-12-18 08:36:40', '2024-12-18 08:36:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `role` enum('free','paid') NOT NULL,
  `validate` enum('lifetime','one_year') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2024_12_18_042654_create_user_logs_table', 2),
(7, '2014_10_12_000000_create_users_table', 3),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(9, '2019_08_19_000000_create_failed_jobs_table', 3),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(11, '2024_04_18_144458_create_courses_table', 3),
(12, '2024_12_18_042729_create_user_logs_table', 4),
(13, '2024_12_18_051411_add_role_to_users_table', 5),
(14, '2024_12_18_084413_create_logs_table', 6),
(15, '2024_12_18_091823_create_action_logs_table', 7),
(16, '2024_12_18_163002_add_github_columns_to_users_table', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `github_id` varchar(255) DEFAULT NULL,
  `github_token` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `github_id`, `github_token`, `avatar`) VALUES
(1, 'Jossefina Sitoe', 'jossefina@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'user', NULL, NULL, NULL),
(2, 'Davil Vilanculos', 'davil@gmail.com', NULL, '12345', NULL, NULL, NULL, 'user', NULL, NULL, NULL),
(3, 'Claudio Ussimane', 'claudionanla@gmail.com', NULL, '$2y$10$31LDS43t7bAS08c.oWuFueV5GRqOAny6CMObf6zAS0YvtGS8dVrVC', NULL, '2024-12-17 23:41:52', '2024-12-17 23:41:52', 'estudante', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `action_logs`
--
ALTER TABLE `action_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_logs_user_id_foreign` (`user_id`);

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_logs_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `action_logs`
--
ALTER TABLE `action_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `action_logs`
--
ALTER TABLE `action_logs`
  ADD CONSTRAINT `action_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `user_logs`
--
ALTER TABLE `user_logs`
  ADD CONSTRAINT `user_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
