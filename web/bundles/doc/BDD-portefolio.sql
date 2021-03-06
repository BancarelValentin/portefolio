-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '+01:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `portefolio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `portefolio`;

DROP TABLE IF EXISTS `document`;
CREATE TABLE `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(30) COLLATE utf8_bin NOT NULL,
  `idReal` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idReal` (`idReal`),
  CONSTRAINT `document_ibfk_1` FOREIGN KEY (`idReal`) REFERENCES `realisation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `document` (`id`, `url`, `titre`, `idReal`) VALUES
(3,	'http',	'script noIp',	'RPI1'),
(4,	'http',	'presentation MediVisy',	'S1'),
(5,	'http',	'presentation ArchivageVisy',	'S2'),
(6,	'http',	'presentation modification Medi',	'S3');

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `sousTitre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `idReal` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idReal` (`idReal`),
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idReal`) REFERENCES `realisation` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `image` (`id`, `url`, `titre`, `sousTitre`, `description`, `idReal`) VALUES
(23,	'shemaMontageFinal.png',	'Shema électronique',	'Shéma du montage réaliser pour le controle d\'appareil électrique',	'',	'RPI3'),
(24,	'photoMontageFinal.png',	'Montage électronique',	'Photo deu montage électronique effectier sur une breadboard',	'',	'RPI3');

DROP TABLE IF EXISTS `pin`;
CREATE TABLE `pin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numWiringPi` int(11) NOT NULL,
  `numGPIO` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `mode` varchar(10) COLLATE utf8_bin NOT NULL,
  `valeur` varchar(10) COLLATE utf8_bin NOT NULL,
  `equipement` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `pin` (`id`, `numWiringPi`, `numGPIO`, `nom`, `mode`, `valeur`, `equipement`) VALUES
(0,	0,	17,	'GPIO 0',	'IN',	'Low',	'lampe'),
(1,	1,	18,	'GPIO 1',	'OUT',	'Low',	'cafetiere'),
(2,	2,	21,	'GPIO 2',	'IN',	'Low',	'cliquer pour ajouter'),
(3,	3,	22,	'GPIO 3',	'IN',	'Low',	'cliquer pour ajouter'),
(4,	4,	23,	'GPIO 4',	'IN',	'Low',	'cliquer pour ajouter'),
(5,	5,	24,	'GPIO 5',	'IN',	'Low',	'cliquer pour ajouter'),
(6,	6,	25,	'GPIO 6',	'IN',	'Low',	'cliquer pour ajouter'),
(7,	7,	4,	'GPIO 7',	'IN',	'Low',	'cliquer pour ajouter');

DROP TABLE IF EXISTS `realisation`;
CREATE TABLE `realisation` (
  `id` varchar(10) COLLATE utf8_bin NOT NULL,
  `annee` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `urlImage` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `realisation` (`id`, `annee`, `titre`, `description`, `urlImage`, `date`) VALUES
('RPI1',	3,	'Mise en place serveur LAMP',	'Dés l\'achat de mon Raspberry, j\'y ai installer Raspbian, une distribution de Debian concu et optimiser pour les RPI puis n\'ayant pas besoin d\'interface graphique, j\'y ai activer le ssh afin d\'y acceder depuis mon PC.<br/>Ensuite, j\'ai installer un serveur LAMP (Linux, Apache, Mysql, PHP) pour ce faire, il m\'a suffit de taper quelques commande dans le teminal et de suivre les étapes de configuration, rien de bien compliquer. !!!!!commande!!!!!<br/>Pour terminer, ne disposant pas d\'adresse IP fixe, j\'ai proceder a l\'instalation de noip puis j\'ai recuperer un scipt <a href=\"#source\">ici</a> que j\'ai modifier a ma guise afin de lancer noip au demarage du RPI.<blockquote>noip<br/>srv lamp</blockquote>',	'head.png',	'2014-02-19 21:07:00'),
('RPI2',	3,	'Domotique-Developpement',	'Le domainde de la domotique étant je trouve trés interessant au vu des possibilités qu\' il pourrait nous apportait, j\'ai décidez de m\'y lancer por executer quelques tache automatiser simples.<br/>Pour commencer dans ce domaine aux possibilitées quasi infini, j\'ai mis en place un petit projet, me faire reveiller tout les matins par mon ordinateur, pour ce faire, ce dernier devra me jouer un morceau de musique de mon choix, allumer une lampe et me faire couler un petit cafe avant meme que je me reveille bien sure. Et pouvoir controller le tout via une interface web.<br/>Ne s\'achant absolument pas par où commencer ni meme comment j\'allais pouvoir controler les ports GPIO du RPI, j\'ai donc fait quelques recherche et je suis tomber sur le blog d\'un certain \"Idleman\" <a href=\"#source\">(voir source)</a> qui m\'aura bien aider pour débuter ce projet. En effet, il met a disposition tout le code qui lui a prmis de realiser des projets similaires. Voulant avoir quelque chose de plus personaliser, j\'ai don recuperer seulement quelques lignes de son code notament la fonction PHP exec() permettant d\'executer une ligne de commande dans le terminal. Bref apres quelques heures de developpement, me voila avec une interface web permettant de controler les ports GPIO de mon RPI ainsi qu\'un \"reveil en ligne\" dont le fonctionnement est expliquer ci dessous.<br/>Le code source de l\'interface web et de tout ce portefolio sera bientot disponible dans <a href=\"#source\">les sources</a> un peu plus bas.<br/>Le reveil:<br/>Dans un premier temps, le reveil était developper rapidement et pas tres proprement,je stocker les differents reveil (nom, heure, minutes, jour de la semaine et le morceau a jouer)dans une base de donées puis j\'ouvrais une page web \"reveil\" qui se rechargait toutes les 30 secondes et comparer la date et l\'heure actuelle a celles presentes dans la base de données, si il y avait une correspondance alors j\'activait tous les ports GPIO de mon raspberry et inserer une balise iframe dusite <a href=\'http://www.soundcloud.com\'>soundcloud</a> pour jouer une musique choisi dans la base de données. Pour ajouter ou modifier un reveil, j\'ai un formulaire symfony.<br/> Par la suite, je prevois de mettre a jour ce code pour utiliser des listener ou quelque chose de moins lourd que des requetes http toutes les 30 secondes, si cela est possible.<br/>L\'interface d\'administrtion:<br/>Il s\'agit d\'un simple tableau recapitulant le N° dechaque port GPIO avec l\'appareil luiétant associe et son état (ON/OFF), lors du clique sur la case état, une page est chargé en AJAX pour modifier l\'état.<blockquote>Idleman<br/>Repo</blockquote>',	'head.png',	'2014-02-19 21:57:00'),
('RPI3',	3,	'Domotique-Electronique',	'Aprés le developpement de l\'interface d\'administration, viens la partie électronique, étant loin d\'avoir les mêmes connaissances dans ce domaine que dans celui de la programation, je me suis beaucoup tourner vers des forums, notament celui de RPI qui m\'ont beaucoup aider.<br/>De plus cette partie du projet n\'est pas autant en lien avec ma formation, c\'est pourquoi je ne vais pas m\'atarder dessus trés longtemps, d\'autant plus que je serai incapable de rentrer dans le detail.<blockquote>\n<a href=\"\">http://www.raspberrypi.org/forum/</a></blockquote>',	'head.png',	'2014-02-19 22:44:00'),
('S1',	1,	'Developpement application de gestion de dossier médicaux',	'Lors de mon premier stage en BTS, ma mission était d\'adapter une applications PHP de gestion de dossier médicaux existante a un autre hospital.<br/>Cette application permet au centre hospitalier de rechercher les dossiers patients archiver chez <a>Michel Visy Archivage</a> afin de demander un rapatriments de ces derniers ou simplement une numerisation de ces derniers, si le dossier est demander numeriquement alors l\'operateur l\'upload grace a un formulaire et la personne ayant fait la demande peut le consulter au format .pdf simplement en effectuant une nouvelle recherche du dossier, et les fichiers numérisé reste disponible pour les prochaines recherches.<br/>Pour cette mission, j\'ai personellement effectuer:<ul><li>l\'adaptation du schema de base de données au nouvel hopital</li><li>un module d\'import de fichiers .CSV</li><li>des modifications sur les modules existant.</li></ul>Ayant terminer le developpement de l\'application, mon tuteur m\'a demander de voir si il m\'était possible de le mettre en production, j\'ai donc installer Apache, Mysql, PHP sur Windows 2008 R2 mais a cause de problemes de conflit entre les differentes versions,le PHP n\'était pas interprété lors de la fin de mon stage.',	'head.jpg',	'2014-02-19 21:21:00'),
('S2',	2,	'Developpement applications de gestions d\'archives',	'Lors de mon stage de deuxième année, mon objectif principale était le développement d\'une application PHP permettant aux clients de la société Michel Visy Archivage de gérer les stocker dans les locaux de l\'entreprise.<br/> Voila la situation qui m\'était imposer: <ul><li><li>l\'application devait permettre la connexion de different utilisateurs, </li><li>chaque utilisateurs devait avoir le droit de consulter les archives de un ou plusieurs organismes clients de MVA, </li><li>tel un site de e-commerce, l\'application devait proposer un systeme de panier d\'archives afin de les commander.</li></ul>De plus, tout les clients de MVA ne souhaiterons pas forcement effectuer des recherches sur leurs archives selon les memes critères (ex: là ou une banque souhaite rechercher des archives en fonction du numero de contrat, un hopital lui les recherche par numero de dossier patient).<br/>La recherche d\'archives est découper en plusieurs étapes:<ul><li>Selection de l\'organisme cible de la recherche,</li><li>Formulaires de recherche,</li><li>Affichage des resultats avec possibilitées d\'ajout au panier,</li></ul>L\'administrateur lui en plus de la recherche, il pourra:<ul><li>Ajouter/supprimer des utilisateurs/organismes,</li><li>Renseigner/modifier les criteres de recherche d\'un organisme,</li><li>Effectuer le suivi des commmandes en cours (visualisations,traitement,numerisation de documents,...),</li><li>Importer des données aux formats .CSV pour un organisme données,</li><li>Modifier les droits d\'un utilisateur sur tel ou tel client.</li></ul>',	'head.jpg',	'2014-02-19 22:33:00'),
('S3',	2,	'Modification MediVisy',	'En deuxième année, lors de mon stage j\'ai également était charger d\'apporter des modifications a l\'application <a>MediVisy</a> en partie développé l\'année précédente.<br/>En effet, j\'ai du corriger quelques bugs mineure et ajouter des fonctionnalités tel que:<ul><li>la modification des lieux de livraisons et des utilisateurs,</li><li>la suppression des lieux de livraisons et des utilisateurs et des poles demandeur,</li><li>la possibilités de filtrer la recherche de demandes en fonction du pole demandeur et/ou du lieu de livraison,</li><li>l\'ajout d\'un module de mise a jour des adresses mails par upload de fichier .CSV,</li><li>l\'ajout d\'un module statistique sur les demandes et consultations de dossier,</li><li>amelioration de la charte graphique.</li></ul>',	'head.jpg',	'2014-02-18 23:41:00'),
('SF21',	3,	'Developpement portefolio',	'Durant la première année de BTS, j\'ai commencer a créer mon portefolio a l\'aide de Wordpress mais le developpement web m\'interessant particulierement, j\'envisager de le developper entierement sans CMS puis, lorsque nous avons commencer a travailler sous Symfony 2 en 2ème année, j\'ai commencer le developpement en utilisant ce framework.<br/>Ce developpement m\'as permis de me familiariser un peu plus avec les notions de base de Sf2 notament les regles de routage ou encore le langage Twig.<br/>Par la suite, j\'ai également developper une interface d\'administration pour mon Raspberry Pi, un <a href=\'#\'>article</a> y est consacrer, le tout étant heberger sur ce dernier.',	'head.png',	'2014-02-19 23:33:00');

DROP TABLE IF EXISTS `reveil`;
CREATE TABLE `reveil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iframe` text COLLATE utf8_bin NOT NULL,
  `heure` varchar(11) COLLATE utf8_bin NOT NULL,
  `jour` varchar(100) COLLATE utf8_bin NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO `reveil` (`id`, `iframe`, `heure`, `jour`, `nom`) VALUES
(7,	'86436922',	'7H00',	'1*2*3*4*5',	'Au boulot fainéant !!'),
(12,	'86436922',	'10H30',	'0*6*15',	'Week-End !!');

-- 2014-03-21 14:41:02
