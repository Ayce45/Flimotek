-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 avr. 2018 à 11:31
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `flimotek`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `adresse`, `tel`, `email`) VALUES
(19, 'matt-prod45', 'bdaae16837dd5768988bdd91205a77e8', '95 rue du maechal leclerc', '0699480038', 'matthieu.poirel@aliceadsl.fr'),
(17, 'Ayce', '47bce5c74f589f4867dbd57e9ca9f808', '510', '07', 'evan.j@hotmail.fr'),
(18, 'matt-prod45', 'bdaae16837dd5768988bdd91205a77e8', '95 rue du maechal leclerc', '0699480038', 'matthieu.poirel@aliceadsl.fr'),
(20, 'matt-45', 'bdaae16837dd5768988bdd91205a77e8', '95 reud dde ', '0628957534', 'matthieu.poirel@aliceaadsl.fr');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `user_id` varchar(16) NOT NULL,
  `film_id` varchar(16) NOT NULL,
  `commande_date` varchar(32) NOT NULL,
  PRIMARY KEY (`commande_date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`user_id`, `film_id`, `commande_date`) VALUES
('matt-prod45', '1', '2018/04/11 08:28:18'),
('Ayce', '2', '2018/04/18 08:22:01'),
('Ayce', '1', '2018/04/18 08:21:46'),
('admin', '1', '2018/04/10 12:38:43'),
('Ayce', '3', '2018/04/24 11:11:02'),
('Ayce', '8', '2018/04/24 11:11:05');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `film_num` int(8) NOT NULL,
  `film_titre` varchar(32) NOT NULL,
  `film_genre` varchar(16) NOT NULL,
  `film_format` varchar(16) NOT NULL,
  `film_date` varchar(16) NOT NULL,
  `film_prix` int(16) NOT NULL,
  `film_etat` varchar(16) NOT NULL,
  `film_image` varchar(32) NOT NULL,
  `film_resume` varchar(20000) NOT NULL,
  PRIMARY KEY (`film_num`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`film_num`, `film_titre`, `film_genre`, `film_format`, `film_date`, `film_prix`, `film_etat`, `film_image`, `film_resume`) VALUES
(1, 'Avatar', 'Action', 'DVD', '28/04/2015', 13, 'NOF', 'avatar.png', 'Malgré sa paralysie, Jake Sully, un ancien marine immobilisé dans un fauteuil roulant, est resté un combattant au plus profond de son être. Il est recruté pour se rendre à des années-lumière de la Terre, sur Pandora, où de puissants groupes industriels exploitent un minerai rarissime destiné à résoudre la crise énergétique sur Terre. Parce que l\'atmosphère de Pandora est toxique pour les humains, ceux-ci ont créé le Programme Avatar, qui permet à des \" pilotes \" humains de lier leur esprit à un avatar, un corps biologique commandé à distance, capable de survivre dans cette atmosphère létale. Ces avatars sont des hybrides créés génétiquement en croisant l\'ADN humain avec celui des Na\'vi, les autochtones de Pandora.\r\nSous sa forme d\'avatar, Jake peut de nouveau marcher. On lui confie une mission d\'infiltration auprès des Na\'vi, devenus un obstacle trop conséquent à l\'exploitation du précieux minerai. Mais tout va changer lorsque Neytiri, une très belle Na\'vi, sauve la vie de Jake...'),
(2, 'Mario', 'Action', 'DVD', '25/01/1999', 54, 'Neuf', 'mario.jpg', 'Mario et Luigi sont deux frères plombiers italo-américains à Brooklyn, qui se retrouvent transportés dans une autre dimension où ils doivent affronter Koopa, dictateur d\'un peuple constitué de dinosaures ayant évolué en forme humaine. Koopa a kidnappé la princesse Daisy, jeune et belle archéologue, qui détient une pierre possédant un pouvoir mystérieux.\r\nInspiré du jeu video \"Super Mario\", ce film raconte l\'histoire d\'un peuple de dinosaures vivant pacifiquement sous la Terre, menacés par un tyran qui, pour arriver à ses fins, kidnappe Daisy, jeune et belle archéologue. Les frères Mario, plombiers, se rendent dans ce monde souterrain afin d\'aider la jeune fille à s\'échapper.\r\nJe trouve ce film en effet très différent du jeu vide, mais il faut dire qu\'il est amusent. Notamment les célèbres répliques qu\'ils disent. Je l\'ai trouvé très bien.\r\nIncroyable!Jamais une adaptation de jeu vidéo en film n\'a été aussi médiocre!L\'univers coloré et mignon laisse place à un univers futuriste et noir(!).Peach laisse place à Daisy, Luigi sans moustache (!!)et Bowser est humain!C\'est une blague!Ce film n\'a de Mario que son nom!Quelle honte!Pire que la série!'),
(4, 'Taxi 5', 'Comédie', 'DVD', '20/03/2018', 20, 'Neuf', 'taxi5.jpg', 'Sylvain Marot, pilote d\'exception, est un des policiers les plus efficaces de Paris. Suite à une aventure avec la femme du préfet, ce dernier l\'oblige à quitter la capitale et à prendre ses quartiers dans la police municipale de Marseille. Alain Trésor, en poste depuis plus de 20 ans, lui présente l\'équipe en place. Lors d\'un contrôle de routine, Sylvain est renversé par un chauffeur VTC.  Il tente de le poursuivre à travers les rues de Marseille, mais à la suite d\'une distraction, la voiture plonge dans le Vieux-Port. Il est pris à partie par deux agents de la police nationale, qui connaissent ses origines parisiennes.Gibert, ancien commissaire devenu maire de Marseille, doit faire face au gang des Italiens : mené par un ancien pilote de rallye, c\'est une bande de braqueurs pillant des bijouteries, et opérant en Ferrari afin de s\'échapper rapidement. Craignant que le gang s\'en prenne à une future exposition de diamants au MuCEM, Sylvain est nommé chef de l\'« opération Mafia ». Réalisant que les véhicules de la police municipale ne sont pas assez puissantes, Alain lui parle de Daniel et d\'Émilien, ayant réussi à arrêter quatre gangs grâce à un taxi survitaminé. Dans ses recherches, Sylvain découvre que le neveu de Daniel, Eddy Maklouf, est également celui qui l\'a renversé lors de son contrôle de routine. Il lui propose un marché : s\'il retrouve le taxi, il passe l\'éponge sur toutes ses infractions.'),
(3, 'Fast & Furious 8', 'Action', 'DVD', '14/04/2017', 18, 'Neuf', 'ff8.jpg', 'Dom (Vin Diesel) et Letty (Michelle Rodríguez) sont en lune de miel à La Havane (Cuba) lorsqu\'une inconnue, qui se révélera être Cipher (Charlize Theron), aborde Dom et lui montre une vidéo qui va  le convaincre de travailler pour elle. Quant à Hobbs (Dwayne Johnson), il est devenu, pour faire plaisir à sa fille, l\'entraîneur de l\'équipe de football féminin où celle-ci joue. Lors d\'une mission  dirigée par Hobbs à Berlin afin de récupérer une bombe IEM, et alors que tout semble fini, Dom percute le véhicule de Hobbs afin de s\'emparer de cette dernière pour Cipher. Hobbs, envoyé en prison,  y retrouvera Deckard Shaw (Jason Statham), avec qui il s\'évadera avec l\'aide de M. Personne (Kurt Russell) et de son nouvel adjoint, Eric (Scott Eastwood). ce dernier ne pourra éviter de trahir ses proches qui vont faire face à des épreuves qu’ils n’avaient jamais rencontrées jusqu’alors. Des rivages de Cuba au rues de New York en passant par  les plaines gelées de la mer arctique de Barrents, notre équipe va sillonner le globe pour tenter d\'empêcher une anarchiste de déchaîner un chaos mondial et de ramener à la maison l’homme qui a fait d’eux une famille.'),
(5, '50 Nuances plus claires', 'Romantique', 'DVD', '16/12/2017', 15, 'Neuf', '20ndeg.jpg', 'Christian et Ana raccourcissent leur lune de miel exotique pour retourner à Seattle après avoir eu connaissance d\'un raid au siège social de Christian. Certains fichiers informatiques ont été volés, et les bandes de caméras de sécurité ont identifié le vandale  : Jack Hyde, l\'ancien patron d\'Ana qui a été renvoyé pour harcèlement sexuel. Pendant ce temps, Ana est présentée à sa nouvelle équipe de sécurité. Christian surprend Ana avec une nouvelle maison qu\'il a acheté et a embauché l\'architecte Gia Matteo pour la reconstruire.Ana est déçue lorsqu\'elle aperçoit Gia flirter avec Christian en sa présence.Pensant avoir laissé derrière eux les ombres du passé, les jeunes mariés Christian et Ana profitent pleinement de leur relation tortueuse et partagent une vie de luxe.  Mais alors qu’Anastasia commence tout juste à s’adapter à son nouveau rôle de Madame Grey et que Christian s’ouvre finalement à elle, de nouvelles menaces viennent mettre en péril leur vie  commune avant même qu’elle n’ait débuté. '),
(6, 'Love Addict', 'Comédie', 'DVD', '20/04/2018', 20, 'Neuf', 'LOVEADDICT.jpg', ' Gabriel est un love addict, un amoureux compulsif des femmes. Un sourire, un regard, un parfum… Il craque. Mais à force de dérapages de plus en plus acrobatiques entre sa vie sociale et  sa vie professionnelle, Gabriel est totalement grillé. Bien décidé à changer (ou du moins à essayer), il recourt aux services d’une agence de  « Minder », sorte de coach personnel 2.0. C’est Marie-Zoé, aux méthodes plutôt atypiques, qui va prendre en main le cas de Gabriel pour une thérapie de choc … Love Addict est le premier long-métrage réalisé par Frank Bellocq. Kev Adams a déjà collaboré avec le cinéaste sur la série Soda, Bellocq ayant participé à la réalisation et l\'écriture de plus de 300 épisodes du show porté par la star des ados.Pour interpréter ce personnage, Kev Adams a subi  un relooking complet ! Fini les cheveux en bataille, les survêtements et les sweats à capuche, place à la chemise, la cravate, les lunettes et la petite veste de costard. La vraie panoplie du golden boy. Le comédien de 26 ans entame une nouvelle étape dans sa carrière en incarnant enfin un rôle plus \"adulte\". Il n\'a pas hésité à donner de sa personne pour transformer son allure et son image avec un  entraînement sportif intensif à base de boxe, course à pied et corde à sauter.'),
(7, 'Escobar', 'Drame', 'DVD', '18/04/2018', 20, 'Neuf', 'Escobar.jpg', 'Impitoyable et cruel chef du cartel de medellin, Pablo Escobar (Javier Bardem) est le criminel le plus riche de l’Histoire avec une fortune de plus de 30 Milliards de dollars.  « L’empereur de la cocaïne » met la Colombie à feu à sang dans les années 80 en introduisant un niveau de violence sans précédent dans le commerce de la drogue.  Fascinée par son charisme et son pouvoir, la très célèbre journaliste Virginia Vallejo (Penélope Cruz), va s’apercevoir qu’on ne s’approche pas de l’homme le plus dangereux du monde impunément… «Escobar» n’est pas un film sur le narcotrafiquant parmi tant d’autres.Il apporte un autre éclairage sur ce personnage, souvent fantasmé. Encore un film sur Pablo Escobar ? Oui, mais celui-là aborde un aspect pas forcément connu de sa vie. Et l’interprétation du couple Javier Bardem et Penélope Cruz vaut le détour. « Escobar » s’intéresse à la liaison entre le cruel chef de cartel et Virginia Vallejo, journaliste vedette de la télé colombienne.'),
(8, 'We are your friends', 'Drame', 'DVD', '16/08/2015', 14, 'Neuf', 'WAYF.jpg', 'Cole, un DJ de 23 ans vit dans le milieu de l’électro et des nuits californiennes. La journée, il traîne avec ses amis d’enfance. La nuit il mixe, dans l’espoir de composer le son qui fera danser le monde entier. Son rêve semble alors possible lorsqu’il fait la connaissance de James, un DJ expérimenté, qui décide de le prendre sous son aile…\"We Are Your Friends\" est une impressionnante plongée  dans le milieu de la fête et des DJ à Los Angeles. Avec un Zac Efron parfait en roi des platines.Drame épicurien de cette californie façon bret easton Ellis, we are your friends, nous livre une partition  à nue de cette jeunesse américaine désabusée au carrefour de son existence et devant faire des choix douloureux à assumer ensuite toute la vie. Mention spéciale à Zac effron qui joue très justement et  très subtilement sans verser dans la mièvrerie absurde façon ado boutonneux !Si vous aimez les sons électros il est clair que vous allez apprécier ce film ! On a envie de se lever et de danser tellement  c\'est bon d\'entendre ces sons ! L\'amitié est au rdv et la passion aussi.'),
(9, 'Sexe entre amis', 'Romantique', 'DVD', '12/04/2016', 17, 'Neuf', 'sea.jpg', ' Lorsque Jamie, chasseuse de têtes à New York, tente de recruter Dylan, un directeur artistique de Los Angeles, tous deux s’aperçoivent vite qu’ils sont sur la même longueur d’onde. Leur premier point  commun est d’avoir totalement renoncé à l’amour, auquel ils ne croient plus, pour se consacrer uniquement au sexe.Dylan s’installe à New York, et tous deux commencent à sortir ensemble régulièrement, convaincus que l’amour est un mythe. Ils sont heureux de cette relation adulte, seulement basée sur le physique. En expérimentant le \"sexe entre amis\", ces deux célibataires sans attaches  pourront-ils éviter tous les pièges qui les guettent ? Ces adultes blasés des promesses trompeuses trop entendues dans les comédies romantiques vont être surpris par la tournure que leur relation  risque de prendre…\"Sexe entre amis\" a suffisamment d\'atouts - sexe, humour et émotion - dans sa poche pour plaire au plus grand nombre, des midinettes névrosées aux bourrins des coeurs. Justin Timberlake et Mila Kunis s\'amusent comme un duo de petits fous dans cette comédie de moeurs. Sa mécanique bien huilée et son interprétation enjouée font de \"Sexe entre amis\" le feel good movie de la rentrée.'),
(10, 'Lucy', 'Science fiction', 'DVD', '10/09/2014', 14, 'Neuf', 'lucy.jpg', 'Lucy Miller est une jeune femme vivant à Taipei (Taiwan), dans un monde où les humains n\'utilisent que 10 % des capacités de leur cerveau. Prise dans un guet-apens par la mafia coréenne, elle est contrainte de faire la « mule » pour des trafiquants de drogue qui insèrent un paquet de poudre bleue dans son ventre, le CPH4, produit de synthèse expérimental. Elle est ensuite enfermée et violentée dans une cellule, son agresseur la renverse à terre d\'un coup de poing au visage puis lui donne des coups de pied à l\'abdomen, ce qui déchire le paquet. La substance se répand dans son corps. Cela décuple ses facultés psychiques3. Dès lors, Lucy « colonise » son cerveau, acquiert un savoir et des pouvoirs illimités, contrôle les ondes, l\'électricité, la matière, le temps, le sommeil, peut changer d\'apparence et acquiert des pouvoirs télékinétiques et télépathiques. Elle se rapproche du professeur Samuel Norman, spécialiste du cerveau qui a théorisé les possibilités humaines  dans le cas où l\'on pourrait utiliser plus de 10 % des capacités cérébrales. Au cours du film, va s\'afficher, à l\'écran, la progression des capacités cérébrales de Lucy. Celle-ci rejoint le professeur Norman à Paris et doit affronter la mafia coréenne menée par son chef sanguinaire, Monsieur Jang.'),
(11, 'Night Call', 'Thriller', 'DVD', '20/11/2014', 11, 'Neuf', 'NC.jpg', 'Lou Bloom, est surpris à voler de l\'acier dans un chantier de construction par un agent de surveillance. Il l\'assaille de paroles en jouant l\'innocent pour mieux détourner l\'attention de celui-ci.  Puis il l\'attaque et lui vole sa montre par la même occasion. Il revend ensuite l\'acier volé dans une casse dans laquelle il demande un travail mais le gérant lui répond qu\'il n\'embauche pas de voleur. Sur le chemin du retour, il se retrouve devant le lieu d\'un accident de voiture. La police, les pompiers et quelques cameramans sont présents.Inspiré par une équipe de tournage indépendante qu\'il voit en train de filmer l\'accident, Lou décide de se lancer lui aussi dans la réalisation de vidéos. Il se procure un caméscope et un scanner radio pour se caler sur la fréquence de la police et écouter  ses messages pour être sur le lieu du crime et de l\'accident avant tout le monde et de filmer en toute discrétion. Il filme un homme blessé lors du vol de sa voiture et offre son film à une chaîne  de télévision locale. La directrice de l\'information de la nuit, Nina, achète la vidéo et encourage Lou à continuer son travail car sa chaîne perd des audiences et elle pense que Lou pourrait être  sa chance de remonter la pente. La chaîne est surtout intéressée par des vidéos d\'incidents violents dans les quartiers aisés et blancs perpétrés par des noirs et des hispaniques, puisqu\'ils attirent  le plus de téléspectateurs.'),
(12, 'La Rage au ventre', 'Drame', 'DVD', '11/04/2015', 15, 'Neuf', 'Rageav.jpg', 'Orphelin au passé difficile, Billy Hope mène aujourd\'hui une vie fastueuse avec sa superbe femme Maureen et sa fille Leila. Il a pu leur offrir cette vie de rêve grâce à ses titres de champion du monde  de boxe. Tout ce monde parfait s\'écroule lorsque sa femme est tuée. Ruiné, Billy perd la garde de sa fille, car la justice estime qu\'il n\'est plus apte à assumer son rôle de père. Alors que son entourage  l\'a abandonné, Billy tente de se reconstruire auprès de Tick Willis, un ancien boxeur aujourd\'hui entraîneur et gérant d\'une salle de boxe. Billy va devoir repartir en bas de l\'échelle pour regagner la  confiance et la garde de sa fille. On a déjà vu et revu la trame de ce film, au demeurant efficace et classique, de nombreuses fois au cinéma. Mais, à la faveur de l\'été, on cède et on veut bien le  revoir une fois encore, d\'autant que la performance de Jake Gyllenhaal, justifie à elle-seule le déplacement. L’intrigue, écrite par le scénariste de \"The Shield\" et de \"Sons of Anarchy\", tout comme la direction d’acteurs (Forest Whitaker est encore en roue libre) ne sont pas suffisamment dégrossies pour nous faire oublier \"Rocky\".');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
