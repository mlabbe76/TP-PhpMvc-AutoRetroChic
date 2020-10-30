-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 27 oct. 2020 à 14:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `autoretrochic`
--

-- --------------------------------------------------------

--
-- Structure de la table `constructeur`
--

CREATE TABLE `constructeur` (
  `idConst` int(11) NOT NULL,
  `nomConst` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `resumHisto` varchar(1000) NOT NULL,
  `imgFond` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `constructeur`
--

INSERT INTO `constructeur` (`idConst`, `nomConst`, `logo`, `resumHisto`, `imgFond`) VALUES
(3, 'bugatti', 'image/logoBugatti.png', 'L’histoire que nous allons vous raconter aujourd’hui est celle d’une des plus prestigieuses marques automobiles françaises et au monde : Bugatti. Fondée par Ettore Bugatti au tout début du 20ème siècle, le marque au fer à cheval a accouché ne l’oublions pas, de la plus folle des voitures jamais fabriquée : la Bugatti Royale. Nous sommes alors en 1927, la voiture mesure 6 mètres de long, pèse 2 900 kg, elle est dotée d’un moteur 8 cylindres (12 763 cm3) en ligne développant 300 chevaux pour une vitesse de 180 km/h, en 1927. Voici l’histoire extraordinaire d’une marque de folie !', 'image/ettoreBugatti.jpg'),
(4, 'delage', 'image/logoDelage.png', 'Pendant la grande guerre, Louis DELÂGE travaille pour l\'armée et participe à l’effort d’armement, mais dès 1919, il sort le premier modèle de tourisme à freins avant en série.\r\nParti à ses débuts des voiturettes et voitures légères « de luxe », Louis Delage s’attaque dès lors au grand luxe avec la GL en 1924. En 1929, ce sont les prestigieuses D8 23 CV à 8 Cylindres … L\'effectif de l\'usine atteint alors 3.500 personnes.\r\nMais une récession sur le marché de la voiture de luxe, s\'ajoutant aux problèmes financiers créés par la mévente et la sous production de la magnifique usine contraignent Louis DELÂGE à mettre sa société en liquidation volontaire en Avril 1935.', 'image/louisdelage.jpg'),
(5, 'chenardEtwalker', 'image/chenardetwalker.png', 'Chenard et Walcker est une marque d\'automobiles française créée par Ernest Chenard et Henry Walcker en 1899. Quatrième constructeur français en volume vers 1922 sous la direction de l\'ingénieur Lucien Chenard, il est le premier vainqueur de la première édition des 24 Heures du Mans en 1923 et collectionne les victoires en compétition automobile. Son succès commercial est assuré par ses luxueuses automobiles de sport et de tourisme. Outre sa gamme automobile, des camions sont produits à partir de 1931.', 'image/chenardetwalker.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `idVoit` int(11) NOT NULL,
  `nomModele` varchar(200) NOT NULL,
  `idConst` varchar(255) NOT NULL,
  `anneeConst` year(4) NOT NULL,
  `resume` varchar(1000) NOT NULL,
  `visuel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`idVoit`, `nomModele`, `idConst`, `anneeConst`, `resume`, `visuel`) VALUES
(1, 'BugattiType32', '3', 1923, 'La type 32 étrennait une carrosserie pour le moins originale, en forme d\'aile d\'avion. Son style sans fioriture lui valut rapidement le surnom de tank. Basée sur la type 30, son châssis surbaissé passait sous les essieux. Ettore Bugatti, sans formation spécifique sur les questions d\'aérodynamique, s\'était aventuré sur un terrain qu\'il connaissait mal. La voiture devenait impossible à maîtriser à hautes vitesses, et tout le talent de Friederich fut nécessaire pour conduire le tank Bugatti à la troisième place lors de sa première course, le Grand Prix de l\'ACF en 1923. Malgré ce résultat mitigé, la voiture fut exposée sur le stand Bugatti du salon de Paris cette même année.\r\n\r\nEttore tirait les conclusions qui s\'imposaient, et orientait ses recherches vers un autre type d\'automobile radicalement différent. La Bugatti 35 allait bientôt prendre forme', 'image/Bugatti32(1923).png'),
(2, 'chenardaigle8', '5', 1937, 'La Chenard & Walcker Aigle 8 U16 fut produite en 1937 en 15 exemplaires.\r\n\r\ncaractéristiques: Le modèle U16 (phares en dehors et capot à l\'ancienne) avec le V8 Ford, 3,6 litres, est une présérie de 15 automobiles qui a servi de test pour relancer en 37 la marque CW qui avait fait faillite 4 mois avant.\r\n', 'image/Chenard—Walker-aigle8-1939.png'),
(3, 'delaged63l', '4', 1946, 'La Delage D6 3 Litres ou D6 - 75, photo d\'époque, cette ancienne voiture fut produite de 1946 à 1954 en 2 motorisations de 2.9 L présentant des puissances de 90 ch à 100 ch.\r\nLa gamme Delage de 1939 comportait 3 modèles principaux dont seul le D6-75 subsiste en 1946 dans une version avec moteur 3 litres dont les premiers exemplaires étaient apparus au printemps 1939. Ce 3 litres est le descendant de la famille des six cylindres créée en 1934 par l’ingénieur Michelat. Tout ces moteurs se caractérisaient par leur course commune de 90.5mm.\r\n', 'image/Delage-D6-3Litres-1953.png'),
(4, 'delaged8120', '4', 1936, 'La Delage D8-120 est un modèle automobile de grand luxe de la marque Delage fabriquée entre 1936 et 1939 par Delahaye.\r\n\r\nBasée sur un châssis court, la D8-120 est la version sport de la D8-100.\r\nLa D8-120 est la dernière Delage à moteur 8 cylindres. Celui-ci a été conçu par Delahaye.\r\nPrésentée pour la première fois au Salon de Paris 1936 sous la forme d\'un coach Aérosport sans montant central dû au carrossier Letourneur et Marchand, la D8-120 est l\'une des plus belles Delage.\r\nEn février 1937, apparaît une deuxième génération conservant le même style mais plus large et plus basse avec des marchepieds séparés et utilisant un châssis surbaissé et allégé.\r\nAu salon, est exposé un exemplaire effilé unique réalisé par Pourtout.\r\nDébut 1938, la D8-120 est remplacée par la D8-120 S dont la cylindrée est portée à 4 743 cm3 (27 CV).\r\nÀ cause de la guerre, la fabrication cesse définitivement. Certains châssis ne seront carrossés qu\'après la Libération.', 'image/Delage-D8-120-cabriolet-1939.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `constructeur`
--
ALTER TABLE `constructeur`
  ADD PRIMARY KEY (`idConst`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`idVoit`),
  ADD KEY `fk_constructeur` (`idConst`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `constructeur`
--
ALTER TABLE `constructeur`
  MODIFY `idConst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `idVoit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
