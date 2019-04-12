-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-04-2019 a las 12:25:05
-- Versión del servidor: 5.6.36-82.1-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pascualt_admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense` double(100,2) DEFAULT NULL,
  `entry` double(100,2) DEFAULT NULL,
  `transit` double(100,2) DEFAULT NULL,
  `notavailable` double(100,2) DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `bank_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `accounts`
--

INSERT INTO `accounts` (`id`, `created_at`, `updated_at`, `number`, `expense`, `entry`, `transit`, `notavailable`, `company_id`, `bank_id`) VALUES
(1, '2019-04-03 21:45:50', '2019-04-04 19:30:05', '01010101010101010101010101', NULL, 1000000.00, NULL, NULL, 1, 1),
(2, '2019-04-03 21:46:28', '2019-04-04 22:05:03', '0293940586649232', 1341000.00, NULL, NULL, NULL, 2, 1),
(3, '2019-04-03 22:43:55', '2019-04-03 22:43:55', '0101010101010101010101010101010', NULL, NULL, NULL, NULL, 1, 2),
(4, '2019-04-03 22:44:42', '2019-04-04 22:05:03', '27819238298192821', NULL, NULL, 300.00, 300.00, 2, 3),
(5, '2019-04-03 22:45:04', '2019-04-04 22:05:03', '123345466576645343434', -525000.00, NULL, NULL, NULL, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banks`
--

INSERT INTO `banks` (`id`, `created_at`, `updated_at`, `name`, `type`) VALUES
(1, '2019-04-03 21:45:50', '2019-04-03 21:45:50', 'Banesco', 'Banco Nacional'),
(2, '2019-04-03 22:43:55', '2019-04-03 22:43:55', 'Payoneer', 'Banco Internacional'),
(3, '2019-04-03 22:44:42', '2019-04-03 22:44:42', 'Banesco Pánama', 'Banco Internacional'),
(4, '2019-04-03 22:45:04', '2019-04-03 22:45:04', 'Provicial', 'Banco Nacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` text COLLATE utf8mb4_unicode_ci,
  `rif` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `created_at`, `updated_at`, `name`, `abbreviation`, `rif`, `address`) VALUES
(1, '2019-04-03 21:45:50', '2019-04-03 21:45:50', 'Wireplus', 'WP', 'j453729304', 'Una Dirección'),
(2, '2019-04-03 21:46:28', '2019-04-03 21:46:28', 'Ledplus', 'LP', 'J789348463', 'Una Dirección');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exchanges`
--

CREATE TABLE `exchanges` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci,
  `qty` double(100,2) DEFAULT NULL,
  `seller` text COLLATE utf8mb4_unicode_ci,
  `rate` double(100,2) DEFAULT NULL,
  `total` text COLLATE utf8mb4_unicode_ci,
  `responsable` text COLLATE utf8mb4_unicode_ci,
  `concept` text COLLATE utf8mb4_unicode_ci,
  `feed` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exchanges`
--

INSERT INTO `exchanges` (`id`, `created_at`, `updated_at`, `date`, `qty`, `seller`, `rate`, `total`, `responsable`, `concept`, `feed`) VALUES
(1, '2019-04-04 22:05:03', '2019-04-04 22:05:03', '2019-04-04', 300.00, 'HAMUDI', 3500.00, NULL, 'FL', 'COMPRA $$', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(108, '2014_10_12_000000_create_users_table', 1),
(109, '2014_10_12_100000_create_password_resets_table', 1),
(110, '2019_01_30_153036_create_banks_table', 1),
(111, '2019_02_04_175206_create_companies_table', 1),
(112, '2019_02_04_203428_create_accounts_table', 1),
(113, '2019_02_05_124630_create_registers_table', 1),
(114, '2019_02_05_130757_create_exchanges_table', 1),
(115, '2019_02_05_130814_create_transactions_table', 1),
(116, '2019_03_15_193608_add_verifyname_and_verify_column_to_registers_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `beneficiary` text COLLATE utf8mb4_unicode_ci,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `amount` double(100,2) DEFAULT NULL,
  `rate` double(100,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `contable` text COLLATE utf8mb4_unicode_ci,
  `feed` double(100,2) DEFAULT NULL,
  `account_id` int(10) UNSIGNED NOT NULL,
  `verify` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registers`
--

INSERT INTO `registers` (`id`, `created_at`, `updated_at`, `date`, `type`, `beneficiary`, `reason`, `status`, `amount`, `rate`, `description`, `contable`, `feed`, `account_id`, `verify`, `verifyName`) VALUES
(1, '2019-04-04 19:30:05', '2019-04-04 19:30:05', '2019-04-04', 'Ingreso', 'Héctor Damas', 'Equis', 'Disponible', 1000000.00, 3500.00, 'Equis De', 'Equis', NULL, 1, NULL, NULL),
(2, '2019-04-04 21:49:39', '2019-04-04 21:49:39', '2019-04-04', 'Egreso', 'ERIKA MOLINA', 'Equis', 'Pagado', 408000.00, 3400.00, 'ANTICIPO PROVEEDORES ERIKA MOLINA REF 10369', 'Equis', NULL, 2, NULL, NULL),
(3, '2019-04-04 21:49:54', '2019-04-04 21:49:54', '2019-04-04', 'Egreso', 'ERIKA MOLINA', 'Equis', 'Girado', 408000.00, 3400.00, 'ANTICIPO PROVEEDORES ERIKA MOLINA REF 10369', 'Equis', NULL, 2, NULL, NULL),
(4, '2019-04-04 22:05:03', '2019-04-04 22:05:03', '2019-04-04', 'Ingreso', ' | CUCHI | DIANA', 'Cambio de Divisa', 'Diferido', 300.00, 3500.00, 'COMPRA $$', NULL, NULL, 4, NULL, NULL),
(5, '2019-04-04 22:05:03', '2019-04-04 22:05:03', '2019-04-04', 'Egreso', 'CUCHI', 'Cambio de Divisa', 'Pagado', 525000.00, 3500.00, 'COMPRA $$', NULL, NULL, 2, NULL, NULL),
(6, '2019-04-04 22:05:03', '2019-04-04 22:05:03', '2019-04-04', 'Egreso', 'DIANA', 'Cambio de Divisa', 'Pagado', -525000.00, 3500.00, 'COMPRA $$', NULL, NULL, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `beneficiary` text COLLATE utf8mb4_unicode_ci,
  `amount` double(100,2) DEFAULT NULL,
  `exchange_id` int(10) UNSIGNED NOT NULL,
  `account_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id`, `created_at`, `updated_at`, `beneficiary`, `amount`, `exchange_id`, `account_id`) VALUES
(1, '2019-04-04 22:05:03', '2019-04-04 22:05:03', 'CUCHI', 525000.00, 1, 2),
(2, '2019-04-04 22:05:03', '2019-04-04 22:05:03', 'DIANA', -525000.00, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marcos Pérez Jiménez', 'mpj@gmail.com', NULL, '$2y$10$MMjyqetRfCDkYEgMo3IZx.wl.Qlz8a1.y82f6nx9mE1Q/SKn9lB3y', '91cG0t8MDcIlm3GSA8cnMiX9laapqk4SsxnowksZXI2UnNzd13VsqsuehDfy', '2019-04-03 21:44:42', '2019-04-03 21:44:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_number_unique` (`number`),
  ADD KEY `accounts_company_id_foreign` (`company_id`),
  ADD KEY `accounts_bank_id_foreign` (`bank_id`);

--
-- Indices de la tabla `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banks_name_unique` (`name`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_name_unique` (`name`);

--
-- Indices de la tabla `exchanges`
--
ALTER TABLE `exchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registers_account_id_foreign` (`account_id`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_exchange_id_foreign` (`exchange_id`),
  ADD KEY `transactions_account_id_foreign` (`account_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `exchanges`
--
ALTER TABLE `exchanges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT de la tabla `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`),
  ADD CONSTRAINT `accounts_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Filtros para la tabla `registers`
--
ALTER TABLE `registers`
  ADD CONSTRAINT `registers_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

--
-- Filtros para la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `transactions_exchange_id_foreign` FOREIGN KEY (`exchange_id`) REFERENCES `exchanges` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
