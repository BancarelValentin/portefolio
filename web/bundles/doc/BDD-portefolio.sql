--
-- Base de données :  `portefolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

CREATE TABLE IF NOT EXISTS `realisation` (
  `id` varchar(10) COLLATE utf8_bin NOT NULL,
  `annee` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `urlImage` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(30) COLLATE utf8_bin NOT NULL,
  `idReal` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idReal` (`idReal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `sousTitre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `idReal` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idReal` (`idReal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Structure de la table `pin`
--

CREATE TABLE IF NOT EXISTS `pin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numWiringPi` int(11) NOT NULL,
  `numGPIO` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `mode` varchar(10) COLLATE utf8_bin NOT NULL,
  `valeur` varchar(10) COLLATE utf8_bin NOT NULL,
  `equipement` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Structure de la table `reveil`
--

CREATE TABLE IF NOT EXISTS `reveil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iframe` text COLLATE utf8_bin NOT NULL,
  `heure` varchar(11) COLLATE utf8_bin NOT NULL,
  `jour` varchar(100) COLLATE utf8_bin NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;


--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`idReal`) REFERENCES `realisation` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idReal`) REFERENCES `realisation` (`id`);
