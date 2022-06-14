-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 14 juin 2022 à 09:44
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leadada`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dateDeCreation` date NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `image`, `titre`, `contenu`, `dateDeCreation`, `category`) VALUES
(1, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmarionskitchen.com%2Fwp-content%2Fuploads%2F2019%2F09%2FJapanese-Chicken-Curry2.jpg&f=1&nofb=1', 'KATSU CURRY\r\n', 'Le poulet katsu c\'est un plat japonais qui consiste à paner le poulet avec du panko puis on le frit. Il est accompagné de curry japonais qui est plus doux que son cousin indien. Très consommé au Japon, ll est moins relevé et plus épais. C\'est une recette très facile à préparer.\r\nPoulet et légumes :\r\n4 blancs de poulet\r\n2 pommes de terre\r\n2 carottes\r\n1 oignon\r\n4 c. à s. de farine\r\n1 oeuf\r\n80 g de chapelure japonaise ou panko\r\nHuile de friture\r\n400 g de riz rond japonais cuit pour l\'accompagnement', '2022-06-13', 'japon'),
(2, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmarionskitchen.com%2Fwp-content%2Fuploads%2F2019%2F09%2FJapanese-Chicken-Curry2.jpg&f=1&nofb=1', 'mochi', 'hfjfjgdsg', '2022-06-14', 'vietnam'),
(3, 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmarionskitchen.com%2Fwp-content%2Fuploads%2F2019%2F09%2FJapanese-Chicken-Curry2.jpg&f=1&nofb=1', 'sushi', 'sfqdf', '2022-06-13', 'japon');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
