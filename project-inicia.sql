-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2018 a las 01:08:16
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project-inicia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `id_city`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'san pedro', '2018-06-08 13:01:56', '2018-06-08 13:01:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sale', '2018-06-08 05:09:13', '2018-06-08 05:09:13'),
(2, 'rental', '2018-06-08 05:09:13', '2018-06-08 05:09:13'),
(3, 'anticretico', '2018-06-08 05:09:13', '2018-06-08 05:09:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cochabamba', '2018-06-08 13:01:38', '2018-06-08 13:01:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identy_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1','2','3','4','5','6','7') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `addres` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galleries`
--

INSERT INTO `galleries` (`id`, `id_user`, `title`, `brief_description`, `filename`, `created_at`, `updated_at`) VALUES
(1, 1, 'head', 'headheadhead', 'jF4tUIUHl7UmJHke04z7_d1b9f0bc905fdae23215613e3d345113', '2018-06-08 14:06:56', '2018-06-08 14:06:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local_notifications`
--

CREATE TABLE `local_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_01_20_084450_create_roles_table', 1),
(4, '2015_01_20_084525_create_role_user_table', 1),
(5, '2015_01_24_080208_create_permissions_table', 1),
(6, '2015_01_24_080433_create_permission_role_table', 1),
(7, '2015_12_04_003040_add_special_role_column', 1),
(8, '2017_10_17_170735_create_permission_user_table', 1),
(9, '2018_04_09_165448_create_cities_table', 1),
(10, '2018_04_09_170016_create_areas_table', 1),
(11, '2018_04_10_234530_create_categories_table', 1),
(12, '2018_04_12_234415_create_type_operations_table', 1),
(13, '2018_04_12_234416_create_type_properties_table', 1),
(14, '2018_04_12_234529_create_owners_table', 1),
(15, '2018_04_12_234531_create_propierties_table', 1),
(16, '2018_04_12_234534_create_photos_table', 1),
(17, '2018_04_22_184608_create_galleries_table', 1),
(18, '2018_04_24_123951_create_socials_table', 1),
(19, '2018_05_01_204159_create_clients_table', 1),
(20, '2018_05_02_130546_create_local_notifications_table', 1),
(21, '2018_05_08_225932_create_trackers_table', 1),
(22, '2018_05_17_195140_create_tags_table', 1),
(23, '2018_05_17_195412_create_propierty_tag_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `owners`
--

CREATE TABLE `owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'head', 'head', 'head', NULL, NULL);

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
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_property` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `primary` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`id`, `id_property`, `img`, `status`, `primary`, `created_at`, `updated_at`) VALUES
(5, 3, 'VRq892v9lF5vBJFWgZw9_3d86c5f65fcbe005a17507b12b7ca7c4', 1, 1, '2018-07-05 23:27:38', '2018-07-06 00:00:13'),
(6, 3, 'TmQrvype8DEGpp8uQXhY_4efdd2f969559e8b1c92e99f32ded48e', 1, 0, '2018-07-05 23:27:38', '2018-07-05 23:27:38'),
(7, 2, 'Akn97lgB00loqac85opJ_6dc01a57fe1fea131d58027c21b5d1e4', 1, 1, '2018-07-05 23:28:20', '2018-07-06 00:00:52'),
(8, 2, 'XAavmPVursI25AzaelsS_1e50cf88ada8e243325ac793605b6e6c', 1, 0, '2018-07-05 23:28:21', '2018-07-05 23:28:21'),
(9, 1, 'OQpP4ZuhlPORAkjH2Acx_6dc01a57fe1fea131d58027c21b5d1e4', 1, 0, '2018-07-05 23:28:56', '2018-07-05 23:28:56'),
(10, 1, 'hHH2ddqQt9LuVBZOrBPh_1d8aae098f56e5152a09b34c19daa95c', 1, 1, '2018-07-05 23:28:56', '2018-07-06 00:01:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propierties`
--

CREATE TABLE `propierties` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_operation` int(10) UNSIGNED NOT NULL,
  `auxiliary_zone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plant` int(11) DEFAULT NULL,
  `id_type_property` int(10) UNSIGNED NOT NULL,
  `type_street` enum('0','1','2','3','4','5','6','7','8','9') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_city` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `property_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_area` int(10) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anticretico` tinyint(1) DEFAULT NULL,
  `n_simple_rooms` int(11) DEFAULT NULL,
  `n_rooms` int(11) DEFAULT NULL,
  `years_construction` int(11) DEFAULT NULL,
  `n_bathrooms` int(11) DEFAULT NULL,
  `n_parking` int(11) DEFAULT NULL,
  `community` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n_toilets` int(11) DEFAULT NULL,
  `n_plants` int(11) DEFAULT NULL,
  `suite` tinyint(1) DEFAULT NULL,
  `key_chain` tinyint(1) DEFAULT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `important_announcement` text COLLATE utf8mb4_unicode_ci,
  `c_number` int(11) DEFAULT NULL,
  `c_ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_of` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_observation` text COLLATE utf8mb4_unicode_ci,
  `real_estate_price` int(11) DEFAULT NULL,
  `owner_price` int(11) DEFAULT NULL,
  `price_open_mode` int(10) DEFAULT NULL,
  `avaluo` int(11) DEFAULT NULL,
  `commission_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calculation` int(11) DEFAULT NULL,
  `in_exclusive_from` datetime DEFAULT NULL,
  `in_exclusive_to` datetime DEFAULT NULL,
  `rental_price` int(11) DEFAULT NULL,
  `rental_month` enum('1','2','3','4','5','6','7','8','9','10','11','12') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honorarium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_included` tinyint(1) DEFAULT NULL,
  `option_to_buy` tinyint(1) DEFAULT NULL,
  `heating_included` tinyint(1) DEFAULT NULL,
  `minimum_period` int(11) DEFAULT NULL,
  `admits_foreigners` tinyint(1) DEFAULT NULL,
  `max_tenants` tinyint(1) DEFAULT NULL,
  `pets_allowed` tinyint(1) DEFAULT NULL,
  `maximum_period` int(11) DEFAULT NULL,
  `students` tinyint(1) DEFAULT NULL,
  `preferences` text COLLATE utf8mb4_unicode_ci,
  `useful_meters` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kitchen_meter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meters_built` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_metro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meters_lot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_metro` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_floor` tinyint(1) DEFAULT NULL,
  `hot_water` tinyint(1) DEFAULT NULL,
  `kitchen` tinyint(1) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `id_user` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `propierties`
--

INSERT INTO `propierties` (`id`, `id_category`, `title`, `property_description`, `slug`, `id_type_operation`, `auxiliary_zone`, `plant`, `id_type_property`, `type_street`, `door`, `id_city`, `city_name`, `property_address`, `id_area`, `number`, `building`, `anticretico`, `n_simple_rooms`, `n_rooms`, `years_construction`, `n_bathrooms`, `n_parking`, `community`, `n_toilets`, `n_plants`, `suite`, `key_chain`, `priority`, `created_by`, `contact_by`, `important_announcement`, `c_number`, `c_ref`, `folio`, `register_of`, `property_observation`, `real_estate_price`, `owner_price`, `price_open_mode`, `avaluo`, `commission_value`, `calculation`, `in_exclusive_from`, `in_exclusive_to`, `rental_price`, `rental_month`, `honorarium`, `m_included`, `option_to_buy`, `heating_included`, `minimum_period`, `admits_foreigners`, `max_tenants`, `pets_allowed`, `maximum_period`, `students`, `preferences`, `useful_meters`, `kitchen_meter`, `meters_built`, `hall_metro`, `meters_lot`, `front_metro`, `type_floor`, `hot_water`, `kitchen`, `first_name`, `last_name`, `phone`, `cell_phone`, `work_phone`, `description`, `id_user`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Propiedad1 test country', 'Propiedad1 test country', 'propiedad1 test country', 1, NULL, NULL, 1, NULL, NULL, 1, 'Cochabamba, Bolivia', 'Propiedad', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1452, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-06-08 13:08:01', '2018-06-08 13:08:01'),
(2, 1, 'test', 'Propiedad', 'propiedad', 1, NULL, NULL, 1, NULL, NULL, 1, 'Camiri, Bolivia', 'Propiedad', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-06-08 13:08:01', '2018-06-08 13:08:01'),
(3, 1, 'Propiedad', 'Propiedad', 'propiedad', 1, NULL, NULL, 1, NULL, NULL, 1, 'Cochabamba, Bolivia', 'Propiedad', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2018-06-08 13:08:01', '2018-06-08 13:08:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propierty_tag`
--

CREATE TABLE `propierty_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `propierty_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'head', 'head', 'head', NULL, NULL, 'all-access');

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
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `use` tinyint(1) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `extras` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trackers`
--

CREATE TABLE `trackers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_property` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_operations`
--

CREATE TABLE `type_operations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_operations`
--

INSERT INTO `type_operations` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'venta', 1, '2018-06-08 13:02:16', '2018-06-08 13:02:16'),
(2, 'Alquiler', 1, '2018-07-06 00:17:28', '2018-07-06 00:17:28'),
(3, 'Anticrético', 1, '2018-07-06 00:18:19', '2018-07-06 00:18:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_properties`
--

CREATE TABLE `type_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `type_properties`
--

INSERT INTO `type_properties` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'casa', 1, '2018-06-08 13:02:08', '2018-06-08 13:02:08'),
(2, 'Apartamento', 1, '2018-07-06 00:56:47', '2018-07-06 00:56:47'),
(3, 'Terreno', 1, '2018-07-06 00:57:17', '2018-07-06 00:57:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `confirmed`, `avatar`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'alfredo', 'alfredoj322@gmail.com', '04163118777', '$2y$10$owlNqZ24QK5EJRA2/Rq0m.dbflHj/7D2v9hCw.M7WpiJmloCQ1bju', 1, 'default.png', NULL, NULL, '2018-06-08 12:59:13', '2018-06-08 12:59:13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `areas_name_unique` (`name`),
  ADD KEY `areas_id_city_foreign` (`id_city`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_identy_license_unique` (`identy_license`),
  ADD KEY `clients_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `local_notifications`
--
ALTER TABLE `local_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `local_notifications_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `owners`
--
ALTER TABLE `owners`
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
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photos_img_unique` (`img`),
  ADD KEY `photos_id_property_foreign` (`id_property`);

--
-- Indices de la tabla `propierties`
--
ALTER TABLE `propierties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propierties_id_category_foreign` (`id_category`),
  ADD KEY `propierties_id_type_operation_foreign` (`id_type_operation`),
  ADD KEY `propierties_id_type_property_foreign` (`id_type_property`),
  ADD KEY `propierties_id_city_foreign` (`id_city`),
  ADD KEY `propierties_id_area_foreign` (`id_area`),
  ADD KEY `propierties_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `propierty_tag`
--
ALTER TABLE `propierty_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propierty_tag_propierty_id_foreign` (`propierty_id`),
  ADD KEY `propierty_tag_tag_id_foreign` (`tag_id`);

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
-- Indices de la tabla `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `socials_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD KEY `tags_id_category_foreign` (`id_category`);

--
-- Indices de la tabla `trackers`
--
ALTER TABLE `trackers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trackers_ip_address_unique` (`ip_address`),
  ADD KEY `trackers_id_property_foreign` (`id_property`);

--
-- Indices de la tabla `type_operations`
--
ALTER TABLE `type_operations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_operations_name_unique` (`name`);

--
-- Indices de la tabla `type_properties`
--
ALTER TABLE `type_properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_properties_name_unique` (`name`);

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
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `local_notifications`
--
ALTER TABLE `local_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `propierties`
--
ALTER TABLE `propierties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `propierty_tag`
--
ALTER TABLE `propierty_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trackers`
--
ALTER TABLE `trackers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `type_operations`
--
ALTER TABLE `type_operations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `type_properties`
--
ALTER TABLE `type_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `local_notifications`
--
ALTER TABLE `local_notifications`
  ADD CONSTRAINT `local_notifications_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `propierties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propierties`
--
ALTER TABLE `propierties`
  ADD CONSTRAINT `propierties_id_area_foreign` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierties_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierties_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierties_id_type_operation_foreign` FOREIGN KEY (`id_type_operation`) REFERENCES `type_operations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierties_id_type_property_foreign` FOREIGN KEY (`id_type_property`) REFERENCES `type_properties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierties_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propierty_tag`
--
ALTER TABLE `propierty_tag`
  ADD CONSTRAINT `propierty_tag_propierty_id_foreign` FOREIGN KEY (`propierty_id`) REFERENCES `propierties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propierty_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `socials`
--
ALTER TABLE `socials`
  ADD CONSTRAINT `socials_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trackers`
--
ALTER TABLE `trackers`
  ADD CONSTRAINT `trackers_id_property_foreign` FOREIGN KEY (`id_property`) REFERENCES `propierties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
