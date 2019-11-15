-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2019 a las 04:40:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `id_album` bigint(20) UNSIGNED NOT NULL,
  `nombre_album` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id_archivo` bigint(20) UNSIGNED NOT NULL,
  `nombre_archivo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` bigint(20) UNSIGNED NOT NULL,
  `id_album` bigint(20) NOT NULL,
  `nombre_imagen` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_album`, `nombre_imagen`, `tipo`, `created_at`, `updated_at`) VALUES
(38, 0, '1.jpg', 'carrusel', '2019-05-02 07:35:30', '2019-05-02 07:35:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_01_20_084450_create_roles_table', 1),
(4, '2015_01_20_084525_create_role_user_table', 1),
(5, '2015_01_24_080208_create_permissions_table', 1),
(6, '2015_01_24_080433_create_permission_role_table', 1),
(7, '2015_12_04_003040_add_special_role_column', 1),
(8, '2017_10_17_170735_create_permission_user_table', 1),
(9, '2019_04_01_204058_create__ima_table', 1),
(10, '2019_04_01_204457_create_album_table', 1),
(11, '2019_04_22_151559_create_documentos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ver Usuarios', 'users.index', 'Usuarios: Lista y navega todos los usuarios del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(2, 'Ver detalle de Usuario', 'users.show', 'Usuarios: Ver en detalle cada usuario del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(3, 'Editar de Usuario', 'users.edit', 'Usuarios: Edita cualquier dato de un usuario del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(4, 'Eliminar Usuario', 'users.destroy', 'Usuarios: Eliminar cualquier usuario del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(5, 'Ver Roles', 'roles.index', 'Roles: Lista y navega todos los roles del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(6, 'Ver detalle de Rol', 'roles.show', 'Roles: Ver en detalle cada rol del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(7, 'Crear de Rol', 'roles.create', 'Roles: Creacion de un rol del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(8, 'Editar Roles', 'roles.edit', 'Roles: Edita cualquier dato de un rol del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(9, 'Eliminar Rol', 'roles.destroy', 'Roles: Eliminar cualquier rol del sistema', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(10, 'Administrador', 'admi.admi', 'Administrador: Permite mostrar las funciones de edicion de contenido', '2019-04-28 23:18:10', '2019-04-28 23:18:10'),
(11, 'Editar Slide', 'admi.slide', 'Contenido: Permite modificar la seccion de Slide', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(12, 'Editar Cronograma', 'admi.cronograma', 'Contenido: Permite modificar la seccion de Cronograma', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(13, 'Editar Galeria', 'admi.galeria', 'Contenido: Permite modificar la seccion de Galeria', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(14, 'Editar Calendario', 'admi.calendario', 'Contenido: Permite modificar la seccion de Calendario', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(15, 'Editar Informacion', 'admi.informacion', 'Contenido: Permite modificar la seccion de Informacion', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(16, 'Editar Articulos', 'admi.articulos', 'Contenido: Permite modificar la seccion de Articulos', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(17, 'Editar Asesorias', 'admi.asesorias', 'Contenido: Permite modificar la seccion de Asesorias', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(18, 'Editar Brigada', 'admi.brigada', 'Contenido: Permite modificar la seccion de Brigada', '2019-04-28 23:18:11', '2019-04-28 23:18:11'),
(19, 'Ver Articulos', 'miembro.articulos', 'Miembro: Permite ver la pestaña de miembros de Articulos y Documentos', '2019-04-28 23:18:11', '2019-04-28 23:18:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(9, 10, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(10, 11, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(11, 12, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(12, 13, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(13, 14, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(14, 16, 4, '2019-04-28 23:38:07', '2019-04-28 23:38:07'),
(15, 19, 4, '2019-04-28 23:38:08', '2019-04-28 23:38:08'),
(16, 19, 19, '2019-05-02 07:37:29', '2019-05-02 07:37:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Admin', 'admin', 'Super Administrador: Control Total de la Aplicación', '2019-04-28 23:18:11', '2019-04-28 23:18:11', 'all-access'),
(4, 'Administrador de Contenido', 'sub', 'Administrador de contenido del sitio SMIE', '2019-04-28 23:38:07', '2019-04-28 23:38:29', NULL),
(19, 'Miembro', 'miembro', 'qwerty', '2019-05-02 07:37:29', '2019-05-02 07:37:29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(8, 19, 2, '2019-05-02 07:37:39', '2019-05-02 07:37:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rodrigo Rivera', 'gigino_44_@hotmail.com', NULL, '$2y$10$2pRDgZSqlBukDSyys.k4LeUQutLIqec2B652X/u2DLMaEVrmpI5jy', 'HlHuTSOlGoBKVRdzZq2IPfqLkY6MK10nCS8BPochN3sD24kqYnHOH9ka5HcV', '2019-04-28 23:22:57', '2019-05-02 06:51:47'),
(2, 'Alejandra Rivera', 'alejandra@gmail.com', NULL, '$2y$10$AA9bgrmoTmCVm1zNO1KMn.7XuyyOIDV4iDb6djbH0lDP6.Iqj9Y1W', 'niFssq8E1pT8FX55XbegP0NxJroaZxinipmXhslQx8aNbpBi0Lc2SV0WUhG5', '2019-04-28 23:32:09', '2019-05-02 07:29:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

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
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `album`
--
ALTER TABLE `album`
  MODIFY `id_album` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_archivo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
