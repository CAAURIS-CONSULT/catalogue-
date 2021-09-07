-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 07 sep. 2021 à 14:18
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `caaurico_catalogue`
--

-- --------------------------------------------------------

--
-- Structure de la table `clienthasservices`
--

CREATE TABLE `clienthasservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_id` bigint(20) UNSIGNED NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `imgPrincipale` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clienthasservices`
--

INSERT INTO `clienthasservices` (`id`, `clients_id`, `services_id`, `imgPrincipale`, `created_at`, `updated_at`) VALUES
(15, 1, 2, 'storage/catalogue/fyt7fteVOMn2hA1zkaEyKpVmJAYOsdzuUrK47mWP.jpeg', '2021-06-10 11:03:49', '2021-06-10 11:03:49'),
(16, 3, 2, 'storage/catalogue/m0jhXZs6yRZotnG19ku3Glbm0bttDSZ3G344eiSK.jpeg', '2021-06-10 11:07:06', '2021-06-10 11:07:06'),
(17, 4, 2, 'storage/catalogue/A0V9LNQ5WOAkefeqWvAy5xnYtkLu3uuNiJCNWB1L.jpeg', '2021-06-10 11:07:48', '2021-06-10 11:07:48'),
(18, 5, 1, 'storage/catalogue/F1XaAW2cIXR6XaPohj0mEMLxhnwfjqQGTv4EN5n3.jpeg', '2021-06-10 11:10:09', '2021-06-10 11:10:09'),
(19, 4, 1, 'storage/catalogue/fyE8BuEavhXbIAs4rztvlGpBUgj3GDATSBoD7RgQ.jpeg', '2021-06-10 11:10:53', '2021-06-10 11:10:53'),
(20, 3, 1, 'storage/catalogue/cn4NcTz0XUyFCr11Sy2EqwlJMMWyVFLvzY2qYJLx.jpeg', '2021-06-10 11:12:13', '2021-06-10 11:12:13'),
(21, 2, 3, 'storage/catalogue/przdkigZNV5he9IgS4o2noU4NZEoS4RQBucPjpkw.jpeg', '2021-06-10 11:17:31', '2021-06-10 11:17:31'),
(22, 3, 3, 'storage/catalogue/JTHTzwxqKG65nco5aAnrjqBxC52MMO8IWgXPXIXp.jpeg', '2021-06-10 11:18:03', '2021-06-10 11:18:03'),
(23, 4, 3, 'storage/catalogue/b1QhNJZm67e962VXvBgHBL36AnyrXwI7G1P2uElf.jpeg', '2021-06-10 11:19:35', '2021-06-10 11:19:35'),
(24, 3, 2, 'storage/catalogue/f2A5fGJLlXpUsnBnOXbZVjNtfa0oXtkJEi412hJg.jpg', '2021-09-01 13:14:47', '2021-09-01 13:14:47');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomClt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nomClt`, `entreprise`, `numero`, `created_at`, `updated_at`, `date`) VALUES
(1, 'AKOTO YAO', 'DIGI TRANS', '0153808065', '2021-06-09 10:29:59', '2021-06-09 10:29:59', '10301277'),
(2, 'AKOTO YAO', 'DIGI TRANS', '0153808065', '2021-06-09 10:31:03', '2021-06-09 10:31:03', '10301277'),
(3, 'SANOGO ISSOUF', 'AYANO CONSULTING', '0153808065', '2021-06-09 11:59:26', '2021-06-09 11:59:26', '2021-11-15'),
(4, 'MBO BOUA', 'MENEYA', '0557852', '2021-06-09 12:00:40', '2021-06-09 12:00:40', '2022-10-12'),
(5, 'KOUAME NGUESS', 'MENEYA & CO', '78451263', '2021-06-09 12:01:39', '2021-06-09 12:01:39', '2022-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePublication` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceClt_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `nom`, `lien`, `datePublication`, `serviceClt_id`, `created_at`, `updated_at`) VALUES
(7, 'image2', 'storage/catalogue/TUgfeYrETWsLH5gUDCQM3e6wv53i4tzwtaFIp7NF.jpeg', '10/06/2021', 15, '2021-06-10 11:03:50', '2021-06-10 11:03:50'),
(8, 'image3', 'storage/catalogue/QKZF37c976MthxqSBpBHeR3KnhOwDo1BrwovLO9D.jpeg', '10/06/2021', 15, '2021-06-10 11:03:50', '2021-06-10 11:03:50'),
(9, 'image4', 'storage/catalogue/BNg4keSbG2MhNDU2wm2yHrxStnMiCq4aWgzG8uTE.jpeg', '10/06/2021', 15, '2021-06-10 11:03:50', '2021-06-10 11:03:50'),
(10, 'image2', 'storage/catalogue/tzfnhwEUs5IblLmxIn99rg3QQ153Iy6l5hZba7Kx.jpeg', '10/06/2021', 16, '2021-06-10 11:07:06', '2021-06-10 11:07:06'),
(11, 'image3', 'storage/catalogue/MVoqIkJ7YZTlAYJSxwaJ0Q9ehf9lUtmq0WBRrim5.jpeg', '10/06/2021', 16, '2021-06-10 11:07:07', '2021-06-10 11:07:07'),
(12, 'image4', 'storage/catalogue/sDeaFINWE5gZOneZJ0VaS5UgLARFnhpSgtr5Irhs.jpeg', '10/06/2021', 16, '2021-06-10 11:07:07', '2021-06-10 11:07:07'),
(13, 'image2', 'storage/catalogue/ImIMkdyktFMGQACFOnRl2xIjNdPuqI1BRY7WuT6Y.jpeg', '10/06/2021', 17, '2021-06-10 11:07:48', '2021-06-10 11:07:48'),
(14, 'image3', 'storage/catalogue/Mc13NGrFpc81u0Pz837RbJxZe5Vc7MbJceLiPlVP.jpeg', '10/06/2021', 17, '2021-06-10 11:07:48', '2021-06-10 11:07:48'),
(15, 'image4', 'storage/catalogue/u5N9fz5dbbOfXT7rB66FB0jOfPcJZ2eaJGvFDlCZ.jpeg', '10/06/2021', 17, '2021-06-10 11:07:48', '2021-06-10 11:07:48'),
(16, 'image2', 'storage/catalogue/JIOCHvV62PhwRNj4ivcHmnFnp8HuYgrkiP1kxfd3.jpeg', '10/06/2021', 18, '2021-06-10 11:10:09', '2021-06-10 11:10:09'),
(17, 'image3', 'storage/catalogue/dzWeqNCknCO0lkqyJ9lJb5MQxU7hSDPhMZk4c15a.jpeg', '10/06/2021', 18, '2021-06-10 11:10:10', '2021-06-10 11:10:10'),
(18, 'image4', 'storage/catalogue/MEatkD0DcoqIcvxthIASz1nZtWDpoSBWuG16c8f3.jpeg', '10/06/2021', 18, '2021-06-10 11:10:10', '2021-06-10 11:10:10'),
(19, 'image2', 'storage/catalogue/vNGBNG6HnBTHfIsrob5ikudJKeFfbfXfzakDv4Q7.jpeg', '10/06/2021', 19, '2021-06-10 11:10:54', '2021-06-10 11:10:54'),
(20, 'image3', 'storage/catalogue/zSiFJtFGLhELAM7doNVl4PzwgpjzdaFeahxSg6yV.jpeg', '10/06/2021', 19, '2021-06-10 11:10:54', '2021-06-10 11:10:54'),
(21, 'image4', 'storage/catalogue/5rL7L2SWl37z0goAX4nZeGZPZzGJXVCxVxjC1A64.jpeg', '10/06/2021', 19, '2021-06-10 11:10:54', '2021-06-10 11:10:54'),
(22, 'image2', 'storage/catalogue/E7ViPK0RUGUDENBHjcFI7FrKYl1PxuoLIWC3vL83.jpeg', '10/06/2021', 20, '2021-06-10 11:12:13', '2021-06-10 11:12:13'),
(23, 'image3', 'storage/catalogue/wSyxszjf4PbBoLQTIvg7C4cxXHZs4VC5Xg119M5b.jpeg', '10/06/2021', 20, '2021-06-10 11:12:13', '2021-06-10 11:12:13'),
(24, 'image4', 'storage/catalogue/6qjBKEj3MgENdO9b8xOzmOqOb1N1Dw73QFT5MoeY.jpeg', '10/06/2021', 20, '2021-06-10 11:12:13', '2021-06-10 11:12:13'),
(25, 'image2', 'storage/catalogue/67KPwi8Fjt1y4H6k413cNQ1vt8QPospSE9DweePn.jpeg', '10/06/2021', 21, '2021-06-10 11:17:31', '2021-06-10 11:17:31'),
(26, 'image3', 'storage/catalogue/rPgygs9UYztpsGCAMR4Arki9ZDjuX1K4JDMETHNa.jpeg', '10/06/2021', 21, '2021-06-10 11:17:31', '2021-06-10 11:17:31'),
(27, 'image4', 'storage/catalogue/dmTnZq3naAQdMzJAxHk4t7CTVtQdObR2nqLCzmlu.jpeg', '10/06/2021', 21, '2021-06-10 11:17:31', '2021-06-10 11:17:31'),
(28, 'image2', 'storage/catalogue/2P0tnSbenMHrUcD4V4ty6qnayBOGyoMVj0VahkNk.jpeg', '10/06/2021', 22, '2021-06-10 11:18:03', '2021-06-10 11:18:03'),
(29, 'image3', 'storage/catalogue/mViRzhJDxtjE7aRqKXB86cH7UsiJqnNs2LQKwmeQ.jpeg', '10/06/2021', 22, '2021-06-10 11:18:03', '2021-06-10 11:18:03'),
(30, 'image4', 'storage/catalogue/hLLEyYY7q6jEJuj746uh97BRo9ReqDeTFUAGfg4W.jpeg', '10/06/2021', 22, '2021-06-10 11:18:03', '2021-06-10 11:18:03'),
(31, 'image2', 'storage/catalogue/NFbkJv9c7pbjvmqHyO5926y9UnNgkmARU2Wnf7ZQ.jpeg', '10/06/2021', 23, '2021-06-10 11:19:35', '2021-06-10 11:19:35'),
(32, 'image3', 'storage/catalogue/fKzgSNONHBGZ9TZpLfD5HcR7HiZK5HJSnI6yFq2E.jpeg', '10/06/2021', 23, '2021-06-10 11:19:35', '2021-06-10 11:19:35'),
(33, 'image4', 'storage/catalogue/TCzy6taMZ3AstErGnItoQZRDqhWjdIXdUiT5STLJ.jpeg', '10/06/2021', 23, '2021-06-10 11:19:35', '2021-06-10 11:19:35');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `type`, `nom`, `date`, `created_at`, `updated_at`) VALUES
(1, 'APP', 'Application web', '1799-03-10', '2021-06-09 11:21:48', '2021-06-09 11:21:48'),
(2, 'WEB', 'SITE WEB', '2020-01-10', '2021-06-09 11:58:33', '2021-06-09 11:58:33'),
(3, 'CAMP', 'CAMPAGNE', '2022-02-10', '2021-06-09 12:02:29', '2021-06-09 12:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MBO', 'bouahubertmbo@gmail.com', NULL, '$2y$10$rp70aMPSSbqKJPPCoW9VrOyANY6un2DhZI1.ZmxeeCxGNaGWde00e', 'ozlFd9k0Q0XB0Pj1ALzw1epG6MzCA4yzjVZUGNZCCO5eCr3zBfDpDL4zDLKd', '2021-06-09 08:43:02', '2021-06-09 08:43:02'),
(2, 'MBO BOUA HUBERT', 'admin@caauri.com', NULL, '$2y$10$nVefReGw3qzUmMlQUMQojeSFtZtOTE2WDuf4yTt8BWEf6byoMGFd2', NULL, '2021-09-01 13:13:03', '2021-09-01 13:13:03'),
(3, 'MBO BOUA HUBERT', 'admin@academy.com', NULL, '$2y$10$IVwoqaDxgx4X2t/f/rRsQ.1aPrXPlve4Sz6CT4Wi4Fwn1ONbdtOV.', NULL, '2021-09-07 02:15:51', '2021-09-07 02:15:51');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clienthasservices`
--
ALTER TABLE `clienthasservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clienthasservices_clients_id_foreign` (`clients_id`),
  ADD KEY `clienthasservices_services_id_foreign` (`services_id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_service_id_foreign` (`serviceClt_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clienthasservices`
--
ALTER TABLE `clienthasservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `clienthasservices`
--
ALTER TABLE `clienthasservices`
  ADD CONSTRAINT `clienthasservices_clients_id_foreign` FOREIGN KEY (`clients_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clienthasservices_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_service_id_foreign` FOREIGN KEY (`serviceClt_id`) REFERENCES `clienthasservices` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
