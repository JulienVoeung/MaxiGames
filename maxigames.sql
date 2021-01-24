-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 24 jan. 2021 à 21:05
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maxigames`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idAdmin` int(11) NOT NULL,
  `Pseudo` varchar(25) NOT NULL,
  `mdp` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aide`
--

DROP TABLE IF EXISTS `aide`;
CREATE TABLE IF NOT EXISTS `aide` (
  `idAide` int(11) NOT NULL AUTO_INCREMENT,
  `Question` mediumtext NOT NULL,
  PRIMARY KEY (`idAide`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` int(11) NOT NULL AUTO_INCREMENT,
  `DescriptionAvis` mediumtext NOT NULL,
  `PseudoAvis` varchar(50) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `Ping` tinyint(1) NOT NULL DEFAULT '0',
  `Note` int(11) NOT NULL DEFAULT '0',
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`idAvis`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `DescriptionAvis`, `PseudoAvis`, `idProduit`, `Ping`, `Note`, `Date`) VALUES
(23, 'c\'est bieng', 'cr7', 1, 0, 4, '2021-01-22'),
(24, 'c\'est pas bieng', 'cr7', 1, 0, 1, '2021-01-22'),
(25, 'Pas mal', 'cr7', 2, 0, 3, '2021-01-23'),
(26, 'Un très bon jeu avec de bons graphismes je vous le recommande', 'jvl', 8, 0, 5, '2021-01-24'),
(28, 'Ce nouveau call of est très décevant !!! Je préfère Modern warfare !!!', 'jvl', 11, 0, 1, '2021-01-24');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCategorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(50) NOT NULL,
  `PrenomClient` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Mdp` mediumtext NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Ban` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdClient`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`IdClient`, `NomClient`, `PrenomClient`, `Email`, `Adresse`, `Telephone`, `Username`, `Mdp`, `Admin`, `Ban`) VALUES
(7, 'Pastore', 'Javier', 'pastore@hotmail.fr', 'rue de argentine', '06917835', 'elflaco', 'd45b08a5a2b6e36d8d316a99dd448a024bd393f92afde750b6bf830d1b114f03', 0, 0),
(6, 'Mbappe', 'Kylian', 'kyky@hotmail.fr', 'rue de paris', '060606', 'lanoisette75', 'b03e01d7667d33ce74a76bfc9f2a6180c144d1eb005ba4f40fbe4c36387867db', 0, 0),
(5, 'Ronaldo', 'Cristiano', 'cr7@gmail.com', 'rue du goat', '77777', 'cr7', 'cd8cc3acf19a191b938470c520ccab4e6b5f6b40e95cbd2b92e4a4bba73c329c', 0, 0),
(4, 'Giroud', 'Olivier', 'gigi@gmail.com', '9 street of chelsea', '18', 'elmatador93', '697d29e72d776f9b2d4e94d7e92709224f9efaf17af26ae7419e278779e68fc5', 0, 0),
(8, 'Verratti', 'Marchisio', 'verratti75@gmail.com', 'rue de paris', '0656897845', 'hibou', '0b0c62be0d268296534d48302f1e419634b5053e04707a27c8bad4ae8b52040a', 0, 0),
(10, 'Pion', 'Mr', 'mrpion93@gmail.com', 'rue de mr pion', '06600660', 'MrPion', '9b1bd81a4341626f2ccdfbea2bf1eac1335c9b001317824043ad54d520730b41', 0, 0),
(11, 'Voeung', 'Julien', 'voeung.julien@hotmail.fr', '114b, rue Charles Infroit', '0781825759', 'Flamma', 'aacb63242c1b26065c20cad8a27f8e8b1d2753919245084b500c571bdda8e17a', 1, 0),
(15, 'jsp', 'jsp', 'jsp@gmail.com', 'jsp', '889', 'Jose', 'e19bbdc07df5f97fdbde3208050cebbb9cc02e1a68b982dd596383ab949de2ae', 0, 1),
(13, 'nasser', 'el khelafi', 'nasser75@gmail.com', 'rue du qatar', '0123456', 'admin', '9cf3fbabdbf951b753a119ea39104f74ef6de15c16bd5aba9a3e44d776e1a73e', 1, 0),
(16, 'ad', 'min', 'admin@gmail.com', 'ruez s', '456', 'admin2', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 1, 0),
(17, 'test', 'test', 'test@gmail.com', 'zqd', '456', 'testban', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 0, 1),
(18, 'Voeung', 'Julien', 'voeung@gmail.com', 'rue de la rue', '0660', 'jvl', 'fd01df815c55c6330f0decf9041d32f40110d8b770333c0e59b5269b2af0fd3c', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseExpedition` text NOT NULL,
  `DateCommande` date DEFAULT NULL,
  `detailCommande` text NOT NULL,
  `Pseudo` text NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `AdresseExpedition`, `DateCommande`, `detailCommande`, `Pseudo`) VALUES
(7, 'rue de la rue', '2021-01-24', '1 x NBA 2K21 PS5 : 74.99<br/>1 x Console Sony PS5 Edition Standard : 499.99<br/>1 x Marvel\'s Spider-Man Miles Morales PS5 : 59.99<br/>1 x FIFA 21 PS5 : 79.99<br/>1 x Call of Duty : Black Ops Cold War PS5 : 64.99<br/>TOTAL : 779.95', 'jvl'),
(8, 'rue de la rue', '2021-01-24', '1 x Far Cry 5 PS4 : 19.99<br/>TOTAL : 29.98', 'jvl'),
(9, 'rue de la rue', '2021-01-24', '2 x NBA 2K21 PS5 : 149.98<br/>TOTAL : 149.98', 'jvl'),
(10, 'rue de la rue', '2021-01-24', '3 x NBA 2K21 PS5 : 224.97<br/>TOTAL : 224.97', 'jvl'),
(11, 'rue de la rue', '2021-01-24', '1 x Super Smash Bros Nintendo Switch : 51.99<br/>TOTAL : 51.99', 'jvl'),
(12, 'rue de la rue', '2021-01-24', '9 x NBA 2K21 PS5 : 674.91<br/>TOTAL : 674.91', 'jvl'),
(13, 'rue de la rue', '2021-01-24', '29 x Far Cry 5 PS4 : 279.86<br/>TOTAL : 279.86', 'jvl'),
(14, 'rue de la rue', '2021-01-24', '1 x Marvel\'s Spider-Man Miles Morales PS5 : 59.99<br/>TOTAL : 59.99', 'jvl'),
(15, 'rue de la rue', '2021-01-24', '10 x Call of Duty Modern Warfare PS4 : 659.88<br/>TOTAL : 659.88', 'jvl'),
(16, 'rue de la rue', '2021-01-24', '1 x Porte clé Manette Super Nintendo : 4.99<br/>TOTAL : 14.98', 'jvl'),
(17, 'rue de la rue', '2021-01-24', '1 x CASQUE SONY PS4 LVL 40 NOIR : 45.99<br/>TOTAL : 55.98', 'jvl'),
(18, 'rue de la rue', '2021-01-24', '1 x Call of Duty : Black Ops Cold War PS5 : 64.99<br/>TOTAL : 64.99', 'jvl');

-- --------------------------------------------------------

--
-- Structure de la table `logiciel`
--

DROP TABLE IF EXISTS `logiciel`;
CREATE TABLE IF NOT EXISTS `logiciel` (
  `idLogiciel` int(11) NOT NULL AUTO_INCREMENT,
  `Reponse` mediumtext NOT NULL,
  PRIMARY KEY (`idLogiciel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `Message` mediumtext NOT NULL,
  `Retour` tinyint(1) NOT NULL,
  `PseudoClient` varchar(25) NOT NULL,
  `PseudoAdmin` varchar(25) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idMessage`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`idMessage`, `Message`, `Retour`, `PseudoClient`, `PseudoAdmin`, `Date`) VALUES
(7, 'yo', 0, 'cr7', 'admin', '2021-01-23 23:00:49'),
(6, 're rere re', 0, 'cr7', 'admin', '2021-01-23 22:25:02');

-- --------------------------------------------------------

--
-- Structure de la table `occasion`
--

DROP TABLE IF EXISTS `occasion`;
CREATE TABLE IF NOT EXISTS `occasion` (
  `idOccasion` int(11) NOT NULL AUTO_INCREMENT,
  `nomOccasion` varchar(25) NOT NULL,
  `imgOccasion` mediumtext NOT NULL,
  `prixOccasion` double NOT NULL,
  `Stock` int(11) NOT NULL DEFAULT '10',
  `Description` text NOT NULL,
  `Note` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idOccasion`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `occasion`
--

INSERT INTO `occasion` (`idOccasion`, `nomOccasion`, `imgOccasion`, `prixOccasion`, `Stock`, `Description`, `Note`) VALUES
(1, 'PS4 Slim 1To Occasion', 'img/imgProduits/ps4slim.jpg', 199.99, 10, 'Le système PS4 a été conçu pour offrir aux joueurs PlayStation les meilleurs jeux et les expériences les plus immersives. La PS4 permet aussi aux plus grands développeurs de jeux du monde de laisser libre cours à leur créativité. Elle connecte également le joueur de manière fluide au vaste monde d\'expériences de PlayStation à travers le système et les espaces mobiles, ainsi qu\'au PlayStation Network (PSN).\r\n\r\n', 0),
(2, 'Metro Exodus PS4 Occasion', 'img/imgProduits/PS4 _ 3.png', 9.99, 10, 'Nous sommes en 2036\r\n\r\nUn quart de siècle après qu’une guerre nucléaire a dévasté la Terre, quelques milliers de survivants se sont retranchés sous les ruines de Moscou, dans les tunnels du Métro.\r\n\r\nIls ont bravé la pollution, combattu des bêtes mutantes et autres abominations et subi les affres de la guerre civile.\r\n\r\nDans la peau d’Artyom, vous devez désormais fuir le Métro pour mener un groupe de Rangers Spartiates en quête d’une nouvelle vie à l’Est. Cette mission à l’échelle d’un continent vous entraînera dans un périple inoubliable à travers une Russie post-apocalyptique.\r\n\r\nMetro Exodus est un FPS narratif spectaculaire développé par 4A Games. Il mélange combat, infiltration, exploration et survival horror et propose l’un des univers les plus immersifs du jeu vidéo.\r\n\r\nExplorez les étendues sauvages de la Russie à travers des niveaux immenses et ouverts, et découvrez une histoire captivante qui commence au printemps pour vous mener jusqu’au coeur de l’hiver nucléaire.\r\n\r\nInspiré des romans de Dmitry Glukhovsky, Metro Exodus poursuit les aventures d’Artyom dans la plus grande aventure Metro à ce jour.', 0),
(3, 'GTA V Xbox Occasion', 'img/imgProduits/OCC-GRAND-THEFT-AUTO-V.jpg', 9.99, 10, 'GRAND THEFT AUTO V\r\nUn jeune arnaqueur, un braqueur de banque à la retraite et un terrifiant psychopathe doivent effectuer une série de braquages pour survivre dans une ville sans pitié où ils ne peuvent faire confiance à personne, et encore moins les uns aux autres.\r\n\r\nLE PACK D’ENTRÉE DANS LE MONDE CRIMINEL\r\nLE MOYEN LE PLUS RAPIDE DE LANCER VOTRE EMPIRE CRIMINEL DANS GRAND THEFT AUTO ONLINE\r\n\r\nLANCEZ VOTRE EMPIRE CRIMINEL\r\nLancez-vous dans les affaires depuis votre bureau de la branche ouest de la Maze Bank, recherchez de nouvelles technologies d\'armement depuis votre bunker souterrain de Trafic d\'armes et exploitez votre usine de fausse monnaie pour fonder une entreprise de contrefaçon rentable.\r\n\r\nUNE FLOTTE DE VÉHICULES PUISSANTS\r\nFilez à toute allure dans les rues de Los Santos dans une sélection de 10 véhicules haut de gamme, dont une supersportive, des motos, le Dune FAV armé, un hélicoptère, une voiture de rallye et plus encore. Vous disposerez aussi de propriétés, dont un garage 10 places pour entreposer votre nouvelle collection.\r\n\r\nARMES, VÊTEMENTS ET TATOUAGES\r\nVous aurez également accès au lance-grenades compact, au fusil à lunette et au fusil compact, ainsi qu\'aux tenues des courses casse-cou, aux tatouages de motards, et plus encore.\r\n\r\nPLUS UN BONUS DE 1 000 000 GTA$ À DÉPENSER DANS GTA ONLINE', 0);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `idPaiement` int(11) NOT NULL AUTO_INCREMENT,
  `NumCarte` mediumtext NOT NULL,
  `NomCarte` varchar(50) NOT NULL,
  `DateExpiration` mediumtext NOT NULL,
  `CodeSecurite` mediumtext NOT NULL,
  `PrenomCarte` mediumtext NOT NULL,
  PRIMARY KEY (`idPaiement`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idPaiement`, `NumCarte`, `NomCarte`, `DateExpiration`, `CodeSecurite`, `PrenomCarte`) VALUES
(3, 'f658c474954d055dc04ec72b58110151fa3b7047580d622e30f9c799511305b5', 'Pallois', '01/21', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Nicolas'),
(4, '485d353ba8e08ea2674f651d0ce1e189be2f9d3e53e6b361ad66999463bc25c6', 'Ronaldo', '01/21', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Cristiano');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `NombreProduit` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`idPanier`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`idPanier`, `NombreProduit`, `idProduit`, `Pseudo`) VALUES
(3, 2, 1, 'MrPion'),
(52, 2, 8, 'jvl'),
(27, 1, 1, 'cr7');

-- --------------------------------------------------------

--
-- Structure de la table `panierproduit`
--

DROP TABLE IF EXISTS `panierproduit`;
CREATE TABLE IF NOT EXISTS `panierproduit` (
  `idpanierproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(50) NOT NULL,
  `imgProduit` mediumtext NOT NULL,
  `prixProduit` double NOT NULL,
  `idProduit` int(11) NOT NULL,
  `Pseudo` varchar(50) NOT NULL,
  PRIMARY KEY (`idpanierproduit`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panierproduit`
--

INSERT INTO `panierproduit` (`idpanierproduit`, `nomProduit`, `imgProduit`, `prixProduit`, `idProduit`, `Pseudo`) VALUES
(1, 'NBA 2K21 PS5', 'img/imgProduits/PS5 _ 1', 74.99, 8, 'jvl');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(50) NOT NULL,
  `Prix` double NOT NULL,
  `Stock` int(11) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Image` mediumtext NOT NULL,
  `Note` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`IdProduit`, `NomProduit`, `Prix`, `Stock`, `Description`, `Image`, `Note`) VALUES
(1, 'Console Sony PS5 Edition Standard', 499.99, 10, 'RAPIDE COMME L\'ECLAIR\r\nProfitez de toute la puissance d\'un CPU, d\'un GPU et d\'un disque SSD personnalises integrant des operations d\'entrees/sorties redefinissant ce dont une console PlayStation est capable. \r\n\r\nDISQUE SSD ULTRA HAUTE VITESSE\r\nOptimisez vos sessions de jeu avec des temps de chargement quasi-instantanes pour les jeux PS5 installes.', 'img/imgProduits/CONSOLE _ PS5', 3),
(2, 'Console Sony PS5 Edition Digitale', 399.99, 10, 'RAPIDE COMME L\'ECLAIR\r\nProfitez de toute la puissance d\'un CPU, d\'un GPU et d\'un disque SSD personnalises integrant des operations d\'entrees/sorties redefinissant ce dont une console PlayStation est capable.\r\n\r\nDISQUE SSD ULTRA HAUTE VITESSE\r\nOptimisez vos sessions de jeu avec des temps de chargement quasi-instantanes pour les jeux PS5 installes.', 'img/imgProduits/sony-ps5-digital-edition.jpg', 0),
(3, 'Console Xbox Series X MICROSOFT', 499.99, 10, 'Voici la Xbox Series X, notre console la plus rapide et la plus puissante jamais conçue, pour une génération de consoles qui vous place, vous, le joueur, au centre.\r\nPuissance, Vitesse et compatibilité\r\nLa nouvelle Xbox embarque une puce graphique de 12 teraflops, compatible avec 4 générations de jeux, alliant puissance et rapidité.\r\n\r\nUne circulation d’air optimisée\r\nLes trois canaux de circulation d’air répartissent uniformément la chaleur générée par les composants, garantissant une console silencieuse. L’architecture innovante de refroidissement parallèle permet de ne pas faire de compromis entre des performances incroyables et un confort d’usage.\r\n\r\nPlus de compromis sur le stockage\r\nLa carte d’extension de stockage de la Xbox Series X fournit un stockage de jeu supplémentaire, et offre une vitesse et des performances optimales en reproduisant l’expérience SSD personnalisée interne de la console. La carte de 1 To est insérée directement à l’arrière de la console, dans le port d’extension de stockage dédié.\r\n\r\nOptimisé pour Xbox Series X\r\nLes jeux optimisés pour Xbox Series X sont conçus pour tirer parti des capacités uniques de la console. Certains jeux Xbox One seront optimisés Series X. Ils présenteront des niveaux inégalés de temps de chargement, de visuels, de réactivité et de fréquences d’images jusqu’à 120 FPS.', 'img/imgProduits/CONSOLE _ XBOX SERIES X', 0),
(4, 'Console Xbox Series S MICROSOFT', 299.99, 10, 'Xbox Series S, notre console 100% digital\r\nPower your Dreams - Decouvrez la toute nouvelle Xbox derniere generation, la plus compacte de tous les temps 100% Digital - Passez au tout-numerique avec la Xbox serie S et profitez d\'une console de jeux nouvelle generation sans disque a un prix accessible • 4K HDR - Plongez dans des univers ultra detailles avec une resolution interne 1080p HDR. Compatible avec la technologie 4K HDR en connectant votre Xbox Series S à votre televiseur 4K pour jouer dans de meilleurs conditions grace e la mise à l\'echelle (2160p) • 120 FPS - La Xbox Series S permet un rendu encore plus fluide et dynamique allant jusqu\'à 120 images par seconde.', 'img/imgProduits/CONSOLE _ XBOX SERIES S', 0),
(38, 'Console Nintendo Switch', 319.99, 10, 'Profitez de l\'expérience de votre console de salon même sans téléviseur.\r\nLa Nintendo Switch peut se transformer pour s\'adapter à votre situation, de manière à ce que vous puissiez profiter de vos jeux quel que soit votre rythme de vie.\r\n\r\nC\'est une nouvelle ère où vous ne devez plus adapter votre quotidien pour pouvoir jouer, c\'est désormais votre console qui s\'adapte à votre style de vie.\r\n\r\nProfitez de vos jeux où, quand et avec qui vous le souhaitez !', 'img/imgProduits/nintendoswitch', 0),
(5, 'Console Sony PS4 Pro 1To', 299.99, 10, 'Le système PS4 a été conçu pour offrir aux joueurs PlayStation les meilleurs jeux et les expériences les plus immersives. La PS4 permet aussi aux plus grands développeurs de jeux du monde de laisser libre cours à leur créativité. Elle connecte également le joueur de manière fluide au vaste monde d\'expériences de PlayStation à travers le système et les espaces mobiles, ainsi qu\'au PlayStation Network (PSN).', 'img/imgProduits/CONSOLE _ PS4.png', 0),
(6, 'Console Xbox ONE X 1To Microsoft', 259.99, 10, 'Avec son format encore réduit par rapport à son aînée et son nouveau coloris noir, la nouvelle Xbox One X s\'intègre encore mieux à votre mobilier. Plus petite et plus performante, sa puissance de 6 Téraflops en fait le console la plus puissante actuellement. Avec ses 12 Go de mémoire graphique, elle ne vous lâchera jamais, même avec les détails au maximum dans vos jeux les plus gourmands.', 'img/imgProduits/CONSOLE _ XBOX ONE X', 0),
(7, 'Console Xbox ONE S Microsoft', 299.99, 10, 'Découvrez le pack Xbox One S 1 To. Ce pack comprend une console One S (lecteur Blu-ray 4 K Ultra HD, streaming en 4 K et technologie High Dynamic Range), un mois d’essai au Xbox Live Gold et un mois d’essai au Xbox Game Pass.', 'img/imgProduits/CONSOLE _ XBOX ONE S', 0),
(8, 'NBA 2K21 PS5', 74.99, 5, 'NBA 2K21 est le dernier opus de la série des jeux de basket NBA 2k au succès mondial, développés par Visual Concepts et édités par 2K.\r\n2K21 donne le ton avec des innovations conçues pour les nouvelles consoles Playstation 5 et Xbox Series X, tout en continuant d\'offrir la meilleure expérience de jeu de sport sur Playstation 4, Xbox One et Nintendo Switch. Avec des graphismes réalistes et un gameplay encore plus approfondis, des fonctionnalités en ligne compétitives et communautaires, ainsi que des modes de jeu intenses et variés, NBA 2K21 offre une immersion exceptionnelle dans toutes les facettes de la NBA et de la culture du basket, le tout dans un seul et unique jeu.', 'img/imgProduits/PS5 _ 1', 0),
(9, 'NBA 2K21 Xbox Series X', 74.99, 10, 'NBA 2K21 est le dernier opus de la série des jeux de basket NBA 2k au succès mondial, développés par Visual Concepts et édités par 2K.\r\n2K21 donne le ton avec des innovations conçues pour les nouvelles consoles Playstation 5 et Xbox Series X, tout en continuant d\'offrir la meilleure expérience de jeu de sport sur Playstation 4, Xbox One et Nintendo Switch. Avec des graphismes réalistes et un gameplay encore plus approfondis, des fonctionnalités en ligne compétitives et communautaires, ainsi que des modes de jeu intenses et variés, NBA 2K21 offre une immersion exceptionnelle dans toutes les facettes de la NBA et de la culture du basket, le tout dans un seul et unique jeu.', 'img/imgProduits/NBA-2K21-Xbox-Series-X', 0),
(10, 'Marvel\'s Spider-Man Miles Morales PS5', 59.99, 9, 'Dans la toute nouvelle aventure de l’univers Marvel’s Spider-Man, l’adolescent Miles Morales vit une double vie, s’ajustant à son nouveau chez-lui tout en suivant les traces de son mentor, Peter Parker, en tant que nouveau Spider-Man. Mais quand une féroce lutte de pouvoir menace de détruire sa nouvelle vie, le héros en devenir réalise qu’avec de grands pouvoirs viennent de grandes responsabilités. Pour sauver tout le New York de Marvel, Miles doit reprendre le flambeau de Spider-Man et devenir un véritable héros.L’avènement de Miles Morales', 'img/imgProduits/PS5 _ 3', 0),
(11, 'Call of Duty : Black Ops Cold War PS5', 64.99, 9, 'La saga iconique Black Ops est de retour avec Call of Duty®: Black Ops Cold War - la suite directe de l\'épisode qui a changé la donne pour les fans du monde entier, Call of Duty®: Black Ops.\r\n\r\nBlack Ops Cold War plongera les joueurs au cœur des tensions géopolitiques de la Guerre Froide du début des années 80. Dans une Campagne solo haletante où la vérité et les théories du complot s\'entremêlent, les joueurs croiseront la route de certaines personnalités emblématiques de la période et devront faire face à la froide réalité du combat, dans une chasse à l\'homme qui les entrainera aux quatre coins du globe, de Berlin-Est au Vietnam, en passant par la Turquie, le quartier général du KGB et plus encore.\r\n\r\nAccompagné d\'une équipe d\'opérateurs d\'élite, vous remonterez la piste d\'un mystérieux espion connu sous le nom de Perseus, qui semble déterminé à bouleverser le cours de l\'Histoire en renversant l\'équilibre mondial du pouvoir. Dans votre plongée au cœur de cette sombre conspiration, vous retrouverez des personnages emblématiques comme Woods, Mason et Hudson ; mais également de nouveaux agents d\'élite qui se joindront à vous pour à mettre fin à cette menace qui couve depuis des décennies.\r\n\r\nEn plus de la Campagne, les joueurs retrouveront un arsenal d\'armes et d\'équipements iconiques de la Guerre froide pour les accompagner au combat dans un mode Multijoueur nouvelle génération, ainsi qu\'une toute nouvelle expérience Zombies.\r\n\r\nBienvenue au bord du gouffre. Bienvenue dans Call of Duty®: Black Ops Cold War.', 'img/imgProduits/PS5 _ 2', 0),
(12, 'Call of Duty : Cold War Xbox Series X', 64.99, 10, 'La saga iconique Black Ops est de retour avec Call of Duty®: Black Ops Cold War - la suite directe de l\'épisode qui a changé la donne pour les fans du monde entier, Call of Duty®: Black Ops.\r\n\r\nBlack Ops Cold War plongera les joueurs au cœur des tensions géopolitiques de la Guerre Froide du début des années 80. Dans une Campagne solo haletante où la vérité et les théories du complot s\'entremêlent, les joueurs croiseront la route de certaines personnalités emblématiques de la période et devront faire face à la froide réalité du combat, dans une chasse à l\'homme qui les entrainera aux quatre coins du globe, de Berlin-Est au Vietnam, en passant par la Turquie, le quartier général du KGB et plus encore.\r\n\r\nAccompagné d\'une équipe d\'opérateurs d\'élite, vous remonterez la piste d\'un mystérieux espion connu sous le nom de Perseus, qui semble déterminé à bouleverser le cours de l\'Histoire en renversant l\'équilibre mondial du pouvoir. Dans votre plongée au cœur de cette sombre conspiration, vous retrouverez des personnages emblématiques comme Woods, Mason et Hudson ; mais également de nouveaux agents d\'élite qui se joindront à vous pour à mettre fin à cette menace qui couve depuis des décennies.\r\n\r\nEn plus de la Campagne, les joueurs retrouveront un arsenal d\'armes et d\'équipements iconiques de la Guerre froide pour les accompagner au combat dans un mode Multijoueur nouvelle génération, ainsi qu\'une toute nouvelle expérience Zombies.\r\n\r\nBienvenue au bord du gouffre. Bienvenue dans Call of Duty®: Black Ops Cold War.', 'img/imgProduits/CALL-OF-DUTY-Black-Ops-Cold-War-Xbox-Series-X', 0),
(13, 'Watch Dogs Legion PS5', 64.99, 10, 'Sous l’emprise d’opportunistes corrompus, le destin de Londres repose entre vos mains. C’est à vous de forger la Résistance pour lutter contre l’oppression et rendre aux londoniens leur liberté. Avec toute une population remplie de recrues potentielles et la technologie de la ville à portée de main, utilisez le hacking, l’infiltration et le combat pour libérer Londres de l’oppression. Le futur vous appartient. Bienvenue dans la Résistance !', 'img/imgProduits/PS5 _ 4', 0),
(14, 'Watch Dogs Legion Xbox Series X', 64.99, 10, 'Sous l’emprise d’opportunistes corrompus, le destin de Londres repose entre vos mains. C’est à vous de forger la Résistance pour lutter contre l’oppression et rendre aux londoniens leur liberté. Avec toute une population remplie de recrues potentielles et la technologie de la ville à portée de main, utilisez le hacking, l’infiltration et le combat pour libérer Londres de l’oppression. Le futur vous appartient. Bienvenue dans la Résistance !', 'img/imgProduits/Watch-Dogs-Legion-Xbox-One', 0),
(15, 'Cyberpunk 2077 PS4', 56.99, 10, 'Cyberpunk 2077 est un jeu d’action-aventure en monde ouvert qui se déroule à Night City, une mégalopole obsédée par le pouvoir, la séduction et les modifications corporelles. Vous incarnez V, mercenaire hors-la-loi à la recherche d’un implant unique qui serait la clé de l’immortalité. Personnalisez les cyberlogiciels, les compétences et le style de jeu de votre personnage, et explorez cette ville immense où chacun de vos choix aura un impact direct sur l’histoire et le monde qui vous entoure.', 'img/imgProduits/PS4 _ 2', 0),
(16, 'Cyberpunk 2077 Xbox One ', 56.99, 10, 'Cyberpunk 2077 est un jeu d’action-aventure en monde ouvert qui se déroule à Night City, une mégalopole obsédée par le pouvoir, la séduction et les modifications corporelles. Vous incarnez V, mercenaire hors-la-loi à la recherche d’un implant unique qui serait la clé de l’immortalité. Personnalisez les cyberlogiciels, les compétences et le style de jeu de votre personnage, et explorez cette ville immense où chacun de vos choix aura un impact direct sur l’histoire et le monde qui vous entoure.', 'img/imgProduits/Cyberpunk-2077-Edition-Day-One-Xbox-One', 0),
(17, 'The Last of Us II PS4', 39.99, 10, 'Cinq ans plus tard... Une aventure intense, éprouvante et émouvante vous attend. Retrouvez Ellie et Joel dans la suite du jeu Naughty Dog salué par la critique.', 'img/imgProduits/PS4 _ 4', 0),
(18, 'Call of Duty Modern Warfare PS4', 54.99, 0, 'Préparez-vous pour le retour de Modern Warfare® !\r\nDans un tout nouvel opus aux enjeux plus élevés que jamais, les joueurs incarneront des agents d’élite des forces spéciales pris dans l’engrenage haletant d’un conflit à l’échelle globale qui menace l\'équilibre du pouvoir. Call of Duty®: Modern Warfare® entrainera les joueurs dans une expérience à l\'intensité sans pareille, brute, sombre et provocatrice ; mettant en avant la nature changeante de la guerre contemporaine. Développé par le studio Infinity Ward à l’origine de la série, Call of Duty: Modern Warfare propose une expérience épique, réimaginée de fond en comble.\r\nÀ travers une Campagne solo viscérale et sans concessions, Call of Duty: Modern Warfare repousse les limites de la série vers des sommets que seul Modern Warfare est capable d\'atteindre. Aux côtés d’agents des forces spéciales internationales et de combattants de la liberté, les joueurs prendront part à des opérations secrètes qui les conduiront aux quatre coins du globe, dans des villes emblématiques d\'Europe et jusqu’aux confins du Moyen-Orient.\r\nEt l’histoire ne fait que commencer.\r\nDans Call of Duty: Modern Warfare, les joueurs seront plongés dans une trame narrative palpitante qui se prolongera à travers tous les aspects du jeu. Plongez dans l\'expérience en ligne ultime avec le célèbre mode Multijoueur adoubé par les fans, ou prenez part à une série d’opérations d\'élite en coopération accessibles pour les joueurs de tous niveaux.', 'img/imgProduits/PS4 _ 5', 0),
(19, 'Call of Duty Modern Warfare Xbox One', 49.99, 10, 'Préparez-vous pour le retour de Modern Warfare® !\r\nDans un tout nouvel opus aux enjeux plus élevés que jamais, les joueurs incarneront des agents d’élite des forces spéciales pris dans l’engrenage haletant d’un conflit à l’échelle globale qui menace l\'équilibre du pouvoir. Call of Duty®: Modern Warfare® entrainera les joueurs dans une expérience à l\'intensité sans pareille, brute, sombre et provocatrice ; mettant en avant la nature changeante de la guerre contemporaine. Développé par le studio Infinity Ward à l’origine de la série, Call of Duty: Modern Warfare propose une expérience épique, réimaginée de fond en comble.\r\nÀ travers une Campagne solo viscérale et sans concessions, Call of Duty: Modern Warfare repousse les limites de la série vers des sommets que seul Modern Warfare est capable d\'atteindre. Aux côtés d’agents des forces spéciales internationales et de combattants de la liberté, les joueurs prendront part à des opérations secrètes qui les conduiront aux quatre coins du globe, dans des villes emblématiques d\'Europe et jusqu’aux confins du Moyen-Orient.\r\nEt l’histoire ne fait que commencer.\r\nDans Call of Duty: Modern Warfare, les joueurs seront plongés dans une trame narrative palpitante qui se prolongera à travers tous les aspects du jeu. Plongez dans l\'expérience en ligne ultime avec le célèbre mode Multijoueur adoubé par les fans, ou prenez part à une série d’opérations d\'élite en coopération accessibles pour les joueurs de tous niveaux.', 'img/imgProduits/Call-of-Duty-Modern-Warfare-Xbox-One', 0),
(20, 'Metro Exodus PS4', 29.99, 10, 'Nous sommes en 2036\r\n\r\nUn quart de siècle après qu’une guerre nucléaire a dévasté la Terre, quelques milliers de survivants se sont retranchés sous les ruines de Moscou, dans les tunnels du Métro.\r\n\r\nIls ont bravé la pollution, combattu des bêtes mutantes et autres abominations et subi les affres de la guerre civile.\r\n\r\nDans la peau d’Artyom, vous devez désormais fuir le Métro pour mener un groupe de Rangers Spartiates en quête d’une nouvelle vie à l’Est. Cette mission à l’échelle d’un continent vous entraînera dans un périple inoubliable à travers une Russie post-apocalyptique.\r\n\r\nMetro Exodus est un FPS narratif spectaculaire développé par 4A Games. Il mélange combat, infiltration, exploration et survival horror et propose l’un des univers les plus immersifs du jeu vidéo.\r\n\r\nExplorez les étendues sauvages de la Russie à travers des niveaux immenses et ouverts, et découvrez une histoire captivante qui commence au printemps pour vous mener jusqu’au coeur de l’hiver nucléaire.\r\n\r\nInspiré des romans de Dmitry Glukhovsky, Metro Exodus poursuit les aventures d’Artyom dans la plus grande aventure Metro à ce jour.', 'img/imgProduits/PS4 _ 3', 0),
(21, 'Minecraft PS4', 29.99, 10, 'Minecraft est un jeu qui consiste à placer des blocs et à vivre des aventures incroyables. Construisez tout ce que vous pouvez imaginer avec des ressources illimitées en mode créatif, ou participez à de grandes expéditions dans Survival. Cachez-vous des monstres ou forgez-vous une armure et des armes pour riposter. Et pas besoin d\'y aller seul... Vous pouvez partager l\'aventure avec vos amis en mode multijoueur !', 'img/imgProduits/PS4 _ 1', 0),
(22, 'Minecraft Xbox One', 29.99, 10, 'Créez. Explorez. Survivez.\r\n\r\nUn monde immense à découvrir. Explorez d’immenses montagnes et des océans vivants dans des mondes infinis ou sur des environnements créés par la communauté.\r\n\r\nUn jeu où l’imagination est la seule limite. Minecraft met au cœur du jeu la construction et l’aventure. Re´alisez tout ce que vous pouvez imaginez.\r\n\r\nDécouvrez les Minecoins. Utilisez 700 Minecoins pour découvrir de nouveaux mondes, des skins, des packs de texture et bien plus en encore sur la Place de Marché Minecraft.\r\n\r\nLe pack de démarrage. Profitez de packs incroyables tels que le pack Mythologie Grecque, Texture plastique, pack de skin 1 ainsi que le pack de skins de vilains.', 'img/imgProduits/Minecraft-Starter-Collection-Xbox-One', 0),
(23, 'Metro Exodus Xbox One', 29.99, 10, 'Nous sommes en 2036\r\n\r\nUn quart de siècle après qu’une guerre nucléaire a dévasté la Terre, quelques milliers de survivants se sont retranchés sous les ruines de Moscou, dans les tunnels du Métro.\r\n\r\nIls ont bravé la pollution, combattu des bêtes mutantes et autres abominations et subi les affres de la guerre civile.\r\n\r\nDans la peau d’Artyom, vous devez désormais fuir le Métro pour mener un groupe de Rangers Spartiates en quête d’une nouvelle vie à l’Est. Cette mission à l’échelle d’un continent vous entraînera dans un périple inoubliable à travers une Russie post-apocalyptique.\r\n\r\nMetro Exodus est un FPS narratif spectaculaire développé par 4A Games. Il mélange combat, infiltration, exploration et survival horror et propose l’un des univers les plus immersifs du jeu vidéo.\r\n\r\nExplorez les étendues sauvages de la Russie à travers des niveaux immenses et ouverts, et découvrez une histoire captivante qui commence au printemps pour vous mener jusqu’au coeur de l’hiver nucléaire.\r\n\r\nInspiré des romans de Dmitry Glukhovsky, Metro Exodus poursuit les aventures d’Artyom dans la plus grande aventure Metro à ce jour.\r\n\r\nPoints forts', 'img/imgProduits/Metro-Exodus-Xbox-One', 0),
(24, 'Far Cry 5 PS4', 19.99, 0, 'Far Cry débarque aux États-Unis pour le prochain volet de la franchise à succès.\r\n\r\nBienvenue à Hope County, dans le Montana. Terre de liberté et de bravoure qui abrite un culte de fanatiques survivalistes : Le Projet Eden’s Gate. Jospeh Seed, prophète charismatique et sa famille, les « Messagers ». Eden’s Gate a petit à petit étendu son emprise sur tout Hope County et ses habitants, une ville autrefois calme et sans histoire. Votre arrivée pousse ces fanatiques à prendre le contrôle de la région par la force. Vous allez devoir combattre et mener la résistance afin de libérer les habitants pris au piège de ce culte.\r\n\r\nExplorez librement les rivières, les terres et les cieux d’Hope County, avec le plus grand choix d’armes et de véhicules à personnaliser jamais vu à ce jour dans un Far Cry. Soyez le héros d’une toute nouvelle aventure prenant place dans un monde trépidant où chaque coup vous sera rendu. Les lieux que vous découvrirez et les habitants que vous rallierez à votre cause façonneront votre expérience pour un scénario plein de surprises.', 'img/imgProduits/farcry5ps4', 0),
(25, 'Far Cry 5 Xbox One', 19.99, 10, 'Far Cry débarque aux États-Unis pour le prochain volet de la franchise à succès.\r\n\r\nBienvenue à Hope County, dans le Montana. Terre de liberté et de bravoure qui abrite un culte de fanatiques survivalistes : Le Projet Eden’s Gate. Jospeh Seed, prophète charismatique et sa famille, les « Messagers ». Eden’s Gate a petit à petit étendu son emprise sur tout Hope County et ses habitants, une ville autrefois calme et sans histoire. Votre arrivée pousse ces fanatiques à prendre le contrôle de la région par la force. Vous allez devoir combattre et mener la résistance afin de libérer les habitants pris au piège de ce culte.\r\n\r\nExplorez librement les rivières, les terres et les cieux d’Hope County, avec le plus grand choix d’armes et de véhicules à personnaliser jamais vu à ce jour dans un Far Cry. Soyez le héros d’une toute nouvelle aventure prenant place dans un monde trépidant où chaque coup vous sera rendu. Les lieux que vous découvrirez et les habitants que vous rallierez à votre cause façonneront votre expérience pour un scénario plein de surprises.', 'img/imgProduits/Far-Cry-5-Xbox-One', 0),
(26, 'FIFA 21 PS5', 79.99, 10, 'Ressentez le niveau supérieur dans FIFA 21 sur PlayStation®5, Xbox Series X, et Xbox Series S avec une nouvelle technologie qui fait passer le Jeu Universel dans une autre dimension. Sur le terrain et dans les tribunes, la technologie de niveau supérieur délivrée par la puissance des consoles de nouvelle génération vous permet de jouer, de voir et de vous déplacer au niveau supérieur avec des stades ultra réalistes qui vous plongent dans des matchs qui n’ont jamais été aussi criants de vérité dans toute l’histoire de la franchise EA SPORTS FIFA. EA SPORTS FIFA 21 sur PlayStation®5 et Xbox Series X|S contient toutes les fonctionnalités déjà disponibles dans FIFA 21 sur PlayStation®4 et XBOX One.', 'img/imgProduits/FIFA-21-PS5', 0),
(27, 'FIFA 21 Xbox Series X', 79.99, 10, 'Ressentez le niveau supérieur dans FIFA 21 sur PlayStation®5, Xbox Series X, et Xbox Series S avec une nouvelle technologie qui fait passer le Jeu Universel dans une autre dimension. Sur le terrain et dans les tribunes, la technologie de niveau supérieur délivrée par la puissance des consoles de nouvelle génération vous permet de jouer, de voir et de vous déplacer au niveau supérieur avec des stades ultra réalistes qui vous plongent dans des matchs qui n’ont jamais été aussi criants de vérité dans toute l’histoire de la franchise EA SPORTS FIFA. EA SPORTS FIFA 21 sur PlayStation®5 et Xbox Series X|S contient toutes les fonctionnalités déjà disponibles dans FIFA 21 sur PlayStation®4 et XBOX One.', 'img/imgProduits/FIFA-21-Xbox-Series-X', 0),
(28, 'eFootball PES 2021 PS4', 19.99, 10, 'eFootball PES 2021 SEASON UPDATE reprend tout ce qui a fait le succès d\'eFootball PES 2020, qui a reçu le prix « Meilleur jeu de sport » à l\'E3 2019, et l\'améliore. Disposant des dernières données sur les joueurs et les clubs pour cette nouvelle saison, le jeu comprend aussi le mode exclusif UEFA EURO 2020™ et du contenu en prévision du véritable tournoi reprogrammé.', 'img/imgProduits/eFootball-PES-2021-PS4', 0),
(29, 'eFootball PES 2021 Xbox One', 19.99, 10, 'eFootball PES 2021 SEASON UPDATE reprend tout ce qui a fait le succès d\'eFootball PES 2020, qui a reçu le prix « Meilleur jeu de sport » à l\'E3 2019, et l\'améliore. Disposant des dernières données sur les joueurs et les clubs pour cette nouvelle saison, le jeu comprend aussi le mode exclusif UEFA EURO 2020™ et du contenu en prévision du véritable tournoi reprogrammé.', 'img/imgProduits/eFootball-PES-2021-Xbox-One', 0),
(30, 'Grand Theft Auto V Edition Premium PS4', 19.99, 10, 'GRAND THEFT AUTO V\r\nUn jeune arnaqueur, un braqueur de banque à la retraite et un terrifiant psychopathe doivent effectuer une série de braquages pour survivre dans une ville sans pitié où ils ne peuvent faire confiance à personne, et encore moins les uns aux autres.\r\n\r\nLE PACK D’ENTRÉE DANS LE MONDE CRIMINEL\r\nLE MOYEN LE PLUS RAPIDE DE LANCER VOTRE EMPIRE CRIMINEL DANS GRAND THEFT AUTO ONLINE\r\n\r\nLANCEZ VOTRE EMPIRE CRIMINEL\r\nLancez-vous dans les affaires depuis votre bureau de la branche ouest de la Maze Bank, recherchez de nouvelles technologies d\'armement depuis votre bunker souterrain de Trafic d\'armes et exploitez votre usine de fausse monnaie pour fonder une entreprise de contrefaçon rentable.\r\n\r\nUNE FLOTTE DE VÉHICULES PUISSANTS\r\nFilez à toute allure dans les rues de Los Santos dans une sélection de 10 véhicules haut de gamme, dont une supersportive, des motos, le Dune FAV armé, un hélicoptère, une voiture de rallye et plus encore. Vous disposerez aussi de propriétés, dont un garage 10 places pour entreposer votre nouvelle collection.\r\n\r\nARMES, VÊTEMENTS ET TATOUAGES\r\nVous aurez également accès au lance-grenades compact, au fusil à lunette et au fusil compact, ainsi qu\'aux tenues des courses casse-cou, aux tatouages de motards, et plus encore.\r\n\r\nPLUS UN BONUS DE 1 000 000 GTA$ À DÉPENSER DANS GTA ONLINE', 'img/imgProduits/Grand-Theft-Auto-V-Edition-Premium-Online-PS4', 0),
(31, 'Grand Theft Auto V Edition Premium Xbox', 19.99, 10, 'GRAND THEFT AUTO V\r\nUn jeune arnaqueur, un braqueur de banque à la retraite et un terrifiant psychopathe doivent effectuer une série de braquages pour survivre dans une ville sans pitié où ils ne peuvent faire confiance à personne, et encore moins les uns aux autres.\r\n\r\nLE PACK D’ENTRÉE DANS LE MONDE CRIMINEL\r\nLE MOYEN LE PLUS RAPIDE DE LANCER VOTRE EMPIRE CRIMINEL DANS GRAND THEFT AUTO ONLINE\r\n\r\nLANCEZ VOTRE EMPIRE CRIMINEL\r\nLancez-vous dans les affaires depuis votre bureau de la branche ouest de la Maze Bank, recherchez de nouvelles technologies d\'armement depuis votre bunker souterrain de Trafic d\'armes et exploitez votre usine de fausse monnaie pour fonder une entreprise de contrefaçon rentable.\r\n\r\nUNE FLOTTE DE VÉHICULES PUISSANTS\r\nFilez à toute allure dans les rues de Los Santos dans une sélection de 10 véhicules haut de gamme, dont une supersportive, des motos, le Dune FAV armé, un hélicoptère, une voiture de rallye et plus encore. Vous disposerez aussi de propriétés, dont un garage 10 places pour entreposer votre nouvelle collection.\r\n\r\nARMES, VÊTEMENTS ET TATOUAGES\r\nVous aurez également accès au lance-grenades compact, au fusil à lunette et au fusil compact, ainsi qu\'aux tenues des courses casse-cou, aux tatouages de motards, et plus encore.\r\n\r\nPLUS UN BONUS DE 1 000 000 GTA$ À DÉPENSER DANS GTA ONLINE', 'img/imgProduits/OCC-GRAND-THEFT-AUTO-V', 0),
(32, 'Manette sans fil Sony PS5 Blanc', 69.99, 10, 'Description produit\r\nDécouvrez une expérience de gaming plus intense qui porte l’action au creux de vos mains.\r\nLa manette sans fil DualSense™ offre un immersif retour tactile, des gâchettes adaptatives et un microphone intégré, tout cela dans un design confortable.\r\n\r\nDonnez vie à des mondes de jeux\r\n\r\nRetour tactile\r\nProfitez d\'un retour tactile lors de vos actions dans les jeux grâce à deux mécanismes qui remplacent les moteurs de vibration traditionnels. Dans vos mains, ces vibrations dynamiques peuvent simuler des interactions avec l\'environnement ainsi que le recul de diverses armes\r\n\r\nGâchettes adaptatives\r\nProfitez de différents niveaux de force et tension lorsque vous interagissez avec votre équipement et les environnements dans les jeux. De la sensation de bander un arc à celle d\'écraser les freins dans une voiture de course, vous sentirez un lien physique avec vos actions à l\'écran\r\n\r\nTrouvez votre voix, partagez votre passion\r\n\r\nMicrophone intégré et sortie casque\r\nChattez avec des amis en ligne à l\'aide du microphone intégré ou en connectant un casque sur la prise casque 3,5 mm. Vous pouvez couper la capture vocale à tout moment grâce à la touche Silencieux dédiée.\r\n\r\nTouche Create\r\nCapturez et diffusez vos moments de gaming les plus épiques grâce à la touche Create. S\'inspirant du succès de la touche SHARE, la touche Create permet aux joueurs de produire du contenu vidéo ludique et de partager leurs aventures en direct avec le monde entier.\r\n\r\nUne icône vidéo ludique entre les mains\r\n\r\nDesign repensé\r\nPrenez le contrôle avec un design bicolore évolué qui combine une disposition emblématique et intuitive avec des sticks améliorés et une barre lumineuse revisitée\r\n\r\nFonctionnalités familières\r\nLa manette sans fil DualSense a gardé de nombreuses fonctionnalités de la manette DUALSHOCK®4, mais elle s\'adresse à toute une nouvelle génération de jeux\r\n\r\nHaut-parleur intégré\r\nChargez tout en jouant via l\'USB Type-C®4.\r\n\r\nMicrophone intégré\r\nCertains jeux prennent une nouvelle dimension grâce aux effets sonores en hi-fi sortant de la manette.\r\n\r\nDétection de mouvements\r\nProfitez de la détection de mouvements intuitive dans les jeux compatibles grâce à l\'accéléromètre et au gyroscope intégrés.', 'img/imgProduits/MANNETTE _ PS5', 0),
(33, 'Manette PS4 Sony Dualshock 4 Noir', 59.99, 10, 'Vivez une expérience de jeu toujours plus immersive et partagez vos triomphes avec vos amis sur les réseaux sociaux, avec la nouvelle touche Share qui permet le partage et la diffusion de vidéo en streaming.', 'img/imgProduits/MANNETTE _ PS4', 0),
(34, 'Manette Xbox Series Sans Fil Blanc', 59.99, 10, '•Découvrez le design modernisé de la manette sans fil Xbox – Blanc, avec ses surfaces texturées et sa géométrie raffinée, pour un confort de jeu accru\r\n\r\n•Technologie Xbox sans fil et Bluetooth*\r\n\r\n•Prise casque 3,5 mm\r\n\r\n•Personnalisation des boutons avec l\'application Xbox Accessories\r\n\r\n•Nouvelle croix multidirectionnelle pour une prise en main précise\r\n\r\n•Surface antidérapante sur les gâchettes et l\'arrière de la manette\r\n\r\n•Bouton de partage : Enregistrez et partagez du contenu facilement, avec le nouveau bouton de partage\r\n\r\n•*Informations importantes : Compatible avec certains appareils et versions des systèmes d’exploitation. Certaines fonctionnalités ne sont pas prises en charge sur Android ou via Bluetooth. Rendez-vous sur xbox.com/controller-compatibility pour plus d’informations. Réattribution des boutons avec l’application Accessoires Xbox pour Xbox Series X, Xbox One et Windows10.', 'img/imgProduits/MANNETTE _ XBOX SERIES S', 0),
(35, 'Manette Xbox Series Sans Fil Noir', 59.99, 10, '•Découvrez le design modernisé de la manette sans fil Xbox – Carbon Black, avec ses surfaces texturées et sa géométrie raffinée, pour un confort de jeu accru\r\n\r\n•Technologie Xbox sans fil et Bluetooth*\r\n\r\n•Prise casque 3,5 mm\r\n\r\n•Personnalisation des boutons avec l\'application Xbox Accessories\r\n\r\n•Nouvelle croix multidirectionnelle pour une prise en main précise\r\n\r\n•Surface antidérapante sur les gâchettes et l\'arrière de la manette\r\n\r\n•Bouton de partage : Enregistrez et partagez du contenu facilement, avec le nouveau bouton de partage\r\n\r\n•*Informations importantes : Compatible avec certains appareils et versions des systèmes d’exploitation. Certaines fonctionnalités ne sont pas prises en charge sur Android ou via Bluetooth. Rendez-vous sur xbox.com/controller-compatibility pour plus d’informations. Réattribution des boutons avec l’application Accessoires Xbox pour Xbox Series X, Xbox One et Windows10.', 'img/imgProduits/MANNETTE _ XBOX SERIES X', 0),
(36, 'Casque PDP Level 50 Gris pour Xbox One', 38.99, 10, 'Le casque LVL50 vous aidera à améliorer votre niveau de jeu. Coussins d\'oreille confortables en nylon respirant. Volume accessible sur l’oreillette droite. Microphone bidirectionnel antibruit avec filtre antiparasite. Flip-up Mic Mute: le microphone est mis en sourdine lorsque la flèche du micro est relevé. Léger: 300g', 'img/imgProduits/casque-pdp-level-50-gris-pour-xbox-one-2', 0),
(37, 'CASQUE SONY PS4 LVL 40 NOIR', 45.99, 9, 'Il est temps de mettre votre casque à niveau avec le casque de jeu stéréo filaire LVL40 pour PS4 et PS5 de PDP Gaming ! Sa construction légère offre un confort durable, que vous passiez la journée en mission de coopération ou que vous jouiez un match rapide. Entendez vos ennemis avant de les voir grâce aux deux puissants pilotes audio de 40 mm. Donnez des ordres clairs à votre équipe grâce au microphone flexible à col de cygne qui réduit les bruits, ou bien relevez-le pour le mettre en sourdine instantanément. Gardez les yeux sur le jeu et effectuez des réglages audio rapides grâce au contrôle du volume sur les oreilles, tandis que les coussins d\'oreilles respirants vous aident à rester au frais et à éviter la fatigue. Gardez une longueur d\'avance grâce au casque de jeu stéréo filaire LVL40 !', 'img/imgProduits/casque-ps4-lvl40', 0),
(39, 'Assassin\'s Creed Valhalla PS5', 56.99, 10, 'IXe siècle de notre ère. Les conflits incessants et la raréfaction des ressources en Norvège amènent un clan mené par Eivor, Viking à la renommée naissante, à traverser la mer du Nord pour rejoindre les riches terres d\'Angleterre que se partagent des royaumes fragiles. Sa mission est de s\'y établir à titre permanent, quel qu\'en soit le prix.\r\nDans Assassin\'s Creed® Valhalla, vous incarnerez Eivor, redoutable Viking dont l\'esprit a été bercé, dès sa plus tendre enfance, par de glorieux récits de combats. Vous explorerez un mystérieux et splendide monde ouvert situé dans la violente Angleterre médiévale des Âges obscurs. Vous mènerez des raids contre vos ennemis, ferez prospérer votre peuple et affermirez votre pouvoir politique en vue de vous assurer une place parmi les dieux, au Valhalla.\r\nLa guerre fera rage. Des royaumes tomberont. Car telle est l\'époque des Vikings.', 'img/imgProduits/Aain-s-Creed-Valhalla-PS5.jpg', 0),
(40, 'Assassin\'s Creed Valhalla Xbox', 56.99, 10, 'IXe siècle de notre ère. Les conflits incessants et la raréfaction des ressources en Norvège amènent un clan mené par Eivor, Viking à la renommée naissante, à traverser la mer du Nord pour rejoindre les riches terres d\'Angleterre que se partagent des royaumes fragiles. Sa mission est de s\'y établir à titre permanent, quel qu\'en soit le prix.\r\nDans Assassin\'s Creed® Valhalla, vous incarnerez Eivor, redoutable Viking dont l\'esprit a été bercé, dès sa plus tendre enfance, par de glorieux récits de combats. Vous explorerez un mystérieux et splendide monde ouvert situé dans la violente Angleterre médiévale des Âges obscurs. Vous mènerez des raids contre vos ennemis, ferez prospérer votre peuple et affermirez votre pouvoir politique en vue de vous assurer une place parmi les dieux, au Valhalla.\r\nLa guerre fera rage. Des royaumes tomberont. Car telle est l\'époque des Vikings.', 'img/imgProduits/Aain-s-Creed-Valhalla-Xbox.jpg', 0),
(41, 'Pack PS5 Standard Editiont+SpiderMan', 519.99, 10, 'RAPIDE COMME L\'ECLAIR Profitez de toute la puissance d\'un CPU, d\'un GPU et d\'un disque SSD personnalises integrant des operations d\'entrees/sorties redefinissant ce dont une console PlayStation est capable. DISQUE SSD ULTRA HAUTE VITESSE Optimisez vos sessions de jeu avec des temps de chargement quasi-instantanes pour les jeux PS5 installes.\r\nINCLUS Spider-Man Miles Morales : Dans la toute nouvelle aventure de l’univers Marvel’s Spider-Man, l’adolescent Miles Morales vit une double vie, s’ajustant à son nouveau chez-lui tout en suivant les traces de son mentor, Peter Parker, en tant que nouveau Spider-Man. Mais quand une féroce lutte de pouvoir menace de détruire sa nouvelle vie, le héros en devenir réalise qu’avec de grands pouvoirs viennent de grandes responsabilités. Pour sauver tout le New York de Marvel, Miles doit reprendre le flambeau de Spider-Man et devenir un véritable héros.L’avènement de Miles Morales.\r\n', 'img/imgProduits/PackPS5Morales', 0),
(42, 'Super Mario Odyssey Nintendo Switch', 45.99, 10, 'CAP SUR L’AVENTURE !\r\n\r\nEmbarquez pour une aventure inoubliable avec Mario à bord de son tout nouveau vaisseau, l’Odyssée, et offrez-vous votre plus grand voyage avec Super Mario Odyssey ! Pour sa toute nouvelle aventure en 3D, la première dans le style de Super Mario 64 (1997) et Super Mario Sunshine (2002), Mario va devoir tenter de déjouer les plans machiavéliques de Bowser qui a de nouveau kidnappé la Princesse Peach, cette fois pour la forcer à se marier avec lui ! Heureusement, pour y arriver, Mario est accompagné d’un tout nouvel ami, Cappy, qui prend possession de sa célèbre casquette ! Lancez-le pour prendre le contrôle d’objets et même d’ennemis et utiliser leurs compétences ! Bien au-delà du Royaume Champignon, partez à la découverte d’univers incroyables, des gratte-ciels de New Donk City au pays de la cuisine dominé par le Piton du Frouno, et tentez de délivrer Peach des griffes de Bowser !', '\r\nimg/imgProduits/marioOdyssey', 0),
(43, 'Zelda : Breath of the wild Nintendo Switch', 51.99, 10, 'Entrez dans un monde d\'aventure\r\n\r\nOubliez tout ce que vous savez sur les jeux The Legend of Zelda. Plongez dans un monde de découverte, d\'exploration et d\'aventure dans The Legend of Zelda: Breath of the Wild, un nouveau jeu qui vient bouleverser la série à succès. Voyagez à travers champs, traversez des forêts et grimpez sur des sommets dans votre périple où vous explorez le royaume d\'Hyrule en ruines à travers cette aventure à ciel ouvert', 'img/imgProduits/zeldaswitch.jpg', 0),
(44, 'Animal Crossing Nintendo Switch', 46.99, 10, 'Vous avez soif de liberté et d’évasion ? Vous voulez échapper à l’agitation du monde moderne ? L’idée de partir vous installer sur une île déserte vous a déjà traversé l’esprit ? Ne cherchez plus : Animal Crossing: New Horizons et sa formule « Évasion île déserte » sont faits pour vous !\r\n\r\nLa proposition est simple : partir vous installer sur une île inhabitée, y créer votre petit paradis et prendre le temps d’y développer votre communauté. Commencez par installer votre campement, et libre à vous ensuite de mener votre vie comme vous l’entendez. Récoltez des ressources, utilisez-les pour créer les objets qui vous plaisent et, bien sûr, faites connaissance avec les nombreux animaux qui visitent votre île. Qui sait, ils auront peut-être envie de s’y installer et de prendre part à votre aventure. Que vous soyez plutôt pêche, jardinage, déco, ou tout simplement balade en bord de mer à admirer un coucher de soleil, les possibilités sont infinies ! Et parce que les plus beaux souvenirs sont ceux que l’on partage avec les gens que l’on aime, vivez l’aventure jusqu’à 4 joueurs sur un écran et jusqu’à 8 joueurs en réseau local et en ligne*.', 'img/imgProduits/animalcrossing', 0),
(45, 'Mario Kart 8 Deluxe Nintendo Switch', 48.99, 10, 'Menu maxi carapace Deluxe à emporter partout !\r\n\r\nPrésentation :\r\n\r\nAppuyez sur le champignon et affûtez vos carapaces, Mario Kart 8 Deluxe va tout retourner sur\r\n\r\nNintendo Switch ! Foncez à fond les ballons la tête à l\'envers avec les pneus anti-gravité ! Irez-vous plus vite en passant par le plafond ? Ou allez-vous tracer au sol entre les bananes et les batailles de carapace ? Tous les coups les plus fourbes sont permis pour se hisser à la première place !\r\n\r\nMaîtrisez tous les pouvoirs comme la plume pour éviter les mauvaises surprises, ou encore le fantôme pour devenir invisible dans les 48 circuits légendaires ! D\'autant plus que de nouveaux invités de marque s\'invitent à la fête comme le roi Boo ou encore les Inklings de Splatoon !\r\n\r\nSous l\'eau, dans les airs, en moto, en deltaplane ou en kart, contrôlez dérapages et lancers de boomerang et commencez une partie de Mario Kart sur la TV de votre salon, avant de rejoindre vos amis dans un avion pour continuer à balancer des carapaces en multi-joueur, dès le 28 avril !', 'img/imgProduits/mariokart', 0),
(46, 'UFC 4 Xbox', 69.99, 10, 'Façonnez votre légende dans EA SPORTS™ UFC 4. Dans EA SPORTS UFC 4, votre athlète est façonné par votre style de combat, vos exploits et votre personnalité. Développez et personnalisez votre personnage via un système de progression unifié à travers tous les modes. Passez du statut d’amateur anonyme à superstar de l’UFC dans le nouveau mode Carrière. Vivez les origines des sports de combat dans deux tout nouveaux environnements, Kumite et La cour, ou défiez la planète dans les nouveaux combats éclair ou les championnats du monde en ligne pour devenir le champion ou la championne incontestable. La jouabilité, avec ses transitions clinch-frappes fluides permet un combat debout plus authentique et réactif tandis que les takedowns et les mécaniques au sol remaniés vous offrent plus de contrôle dans ces moments clé du combat. Peu importe où et comment vous jouez à EA SPORTS UFC 4, vous êtes au centre de chaque combat.', 'img/imgProduits/ufc4Xbox.jpg', 0),
(47, 'UFC 4 PS4', 69.99, 10, 'Façonnez votre légende dans EA SPORTS™ UFC 4. Dans EA SPORTS UFC 4, votre athlète est façonné par votre style de combat, vos exploits et votre personnalité. Développez et personnalisez votre personnage via un système de progression unifié à travers tous les modes. Passez du statut d’amateur anonyme à superstar de l’UFC dans le nouveau mode Carrière. Vivez les origines des sports de combat dans deux tout nouveaux environnements, Kumite et La cour, ou défiez la planète dans les nouveaux combats éclair ou les championnats du monde en ligne pour devenir le champion ou la championne incontestable. La jouabilité, avec ses transitions clinch-frappes fluides permet un combat debout plus authentique et réactif tandis que les takedowns et les mécaniques au sol remaniés vous offrent plus de contrôle dans ces moments clé du combat. Peu importe où et comment vous jouez à EA SPORTS UFC 4, vous êtes au centre de chaque combat.', 'img/imgProduits/ufc4PS4.jpg', 0),
(48, 'Super Smash Bros Nintendo Switch', 51.99, 10, 'Des mondes de jeux et des combattants légendaires se retrouvent pour l’affrontement ultime dans le nouvel opus de la série Super Smash Bros. sur Nintendo Switch ! De nouveaux combattants comme l\'Inkling de la série Splatoon et Ridley de la série Metroid, font leur débuts dans Super Smash Bros. aux côtés de tous les combattants ayant jamais figuré dans la série Super Smash Bros. !', 'img/imgProduits/smashbros.jpg', 0),
(49, '1 2 Switch Nintendo Switch', 36.99, 10, 'Il s\'agit du tout premier jeu invitant les joueurs à s\'affronter à travers une série d\'activités amusantes non pas en fixant un téléviseur, mais en se regardant dans les yeux. Les joueurs se défient au travers de duels au Far West ou en copiant des mouvements de danse dans les jeux de 1-2- Switch qui exploitent de manière créative une grande variété de fonctionnalités de la Nintendo Switch. Rien de plus simple pour mettre de l\'animation en soirée, en vacances, en famille ou entre amis. 1-2-Switch sortira le 3 mars, en même temps que la console Nintendo Switch', 'img/imgProduits/12switch', 0),
(50, 'Splatoon 2 Nintendo Switch', 45.99, 10, 'Les traditionnelles guerres de territoire à 4 contre 4 sont de retour dans le deuxième volet de ce grand succès, avec de nouveaux stages, de nouvelles tenues et de nouvelles armes comme le Splat Dualies qui s\'utilise à deux mains. Les joueurs peuvent s\'affronter sur le téléviseur ou partout ailleurs. Qu\'ils utilisent la manette Pro Nintendo Switch (vendue séparément) ou les Joy-Con, les joueurs peuvent viser en utilisant les contrôles gyroscopiques. Splatoon 2 permet également de jouer des matchs multijoueur en ligne. Le jeu proposera également une fonctionnalité de chat vocal en exploitant l\'application mobile de la Nintendo Switch (une version gratuite et limitée de l\'application sera disponible cet été), et proposera de nouveaux stages, de nouvelles tenues ainsi que de nouvelles armes après le lancement, tout comme dans le jeu original. Splatoon 2 est prévu pour cet été.\r\n\r\n', 'img/imgProduits/splatoon2.jpg', 0),
(51, 'Pokemon Let\'s Go Evoli Nintendo Switch', 46.99, 10, 'Les nouveaux jeux de la série Pokémon, Pokémon : Let\'s Go, Pikachu et Pokémon : Let\'s Go, Évoli, sortent cet automne sur Nintendo Switch. Inspirés du jeu Pokémon Version Jaune : Édition Spéciale Pikachu, sorti en 2000 sur Game Boy, ces deux opus ont été conçus pour les joueurs qui débutent dans l\'univers des jeux vidéo Pokémon. Dotés d\'une connectivité innovante avec le jeu mobile Pokémon GO, qui compte de nombreux adeptes, Pokémon : Let\'s Go, Pikachu et Pokémon : Let\'s Go,\r\nÉvoli devraient ravir les joueurs novices comme les Dresseurs confirmés.', 'img/imgProduits/pokemon-lets-go-eevee-switch-cover.jpg', 0),
(52, 'Manette Nintendo Switch Pro', 69.99, 10, 'Contrôlez le jeu avec la manette pro pour console Nintendo Switch.', 'img/imgProduits/manetteSwitch.jpg', 0),
(53, 'Manette Nintendo Switch Joy-Con', 69.99, 10, 'Contrôlez le jeu avec la manette pour console Nintendo Switch.', 'img/imgProduits/manetteSwitchJoyCon.jpg', 0),
(54, 'Porte clé Manette Super Nintendo', 4.99, 9, 'Porte clé de la manette de l\'emblématique de Nintendo.', 'img/imgProduits/porteclef.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reduction`
--

DROP TABLE IF EXISTS `reduction`;
CREATE TABLE IF NOT EXISTS `reduction` (
  `idReduction` int(11) NOT NULL AUTO_INCREMENT,
  `codeReduction` mediumtext NOT NULL,
  PRIMARY KEY (`idReduction`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `idTicket` int(11) NOT NULL AUTO_INCREMENT,
  `Probleme` mediumtext NOT NULL,
  PRIMARY KEY (`idTicket`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
