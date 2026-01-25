--
-- Base de données : `youshoop`
--

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
    `id` int(11) NOT NULL,
    `product_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `product_id` (`product_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
    `id` int(11) NOT NULL,
    `commande_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `commande_id` (`commande_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `total` decimal(10,4) DEFAULT NULL,
    `status` enum('0','1','2') DEFAULT NULL,
    `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `commande_item_id` int(11) DEFAULT NULL,
    `product_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `commande_item_id` (`commande_item_id`),
    KEY `product_id` (`product_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes_items`
--

DROP TABLE IF EXISTS `commandes_items`;
CREATE TABLE IF NOT EXISTS `commandes_items` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `quantity` int(11) DEFAULT NULL,
    `price` decimal(10,4) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `migration` varchar(255) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `migrations`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) DEFAULT NULL,
    `description` varchar(255) DEFAULT NULL,
    `status` varchar(100) DEFAULT NULL,
    `price` decimal(10,4) DEFAULT NULL,
    `image_path` varchar(255) DEFAULT NULL,
    `stock` int(11) DEFAULT NULL,
    `commande_item_id` int(11) DEFAULT NULL,
    `category_id` int(11) DEFAULT NULL,
    PRIMARY KEY (`id`),
    KEY `commande_item_id` (`commande_item_id`),
    KEY `fk_category` (`category_id`)
    ) ENGINE=InnoDB;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `firstname` varchar(255) NOT NULL,
    `lastname` varchar(255) NOT NULL,
    `role` tinyint(4) NOT NULL DEFAULT '0',
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
    ) ENGINE=InnoDB;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
    ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
    ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`commande_id`) REFERENCES `commandes` (`id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
    ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`commande_item_id`) REFERENCES `commandes_items` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
    ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`commande_item_id`) REFERENCES `commandes_items` (`id`);
COMMIT;
