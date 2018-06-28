-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: space_army
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `candidate_id_id` int(11) DEFAULT NULL,
  `rdv_date` datetime DEFAULT NULL,
  `rdv_place` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A45BDDC147A475AB` (`candidate_id_id`),
  CONSTRAINT `FK_A45BDDC147A475AB` FOREIGN KEY (`candidate_id_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
INSERT INTO `application` VALUES (13,'John','Dog','john@gmail.com','0615642514','18 rue Danol, Epone','Machiniste',2,0,3,'2018-07-08 00:00:00','Mantes-la-Jolie'),(20,'Damien','Delamare','damien@gmail.com','0614251438','59 rue du clos, Paris','Artilleur',1,0,5,'2018-07-10 00:00:00','Paris'),(21,'Elyah','Traoré','elyah@gmail.com','0615694451','8 rue des lilas, Luc-en-Diois','Pilote de chasse',0,0,4,NULL,NULL),(22,'Elyah','Traoré','elyah@gmail.com','0615694451','8 rue des lilas, Luc-en-Diois','Machiniste',0,0,4,NULL,NULL);
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_seats` int(11) NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `contract_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_duration` int(11) NOT NULL,
  `rank` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequisite_temper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequisite_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prerequisite_education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristics_action` int(11) NOT NULL,
  `caracteristics_leadership` int(11) NOT NULL,
  `caracteristics_analytic` int(11) NOT NULL,
  `caracteristics_technophile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (3,'Analyse en renseignement géospatial','Votre travail consiste à analyser des données d’un haut intérêt géostratégique, au profit des décideurs politiques et militaires. Votre évaluation de la situation militaire et de la situation sécuritaire permet une protection accrue de nos soldats sur le terrain et contribue à défendre notre nation contre la menace ennemie.',11,'Intelligence Géospatiale',832000,'CDI',-1,'Lieutenant ou Capitaine','Vous dirigez votre département.','Vous maniez les chiffres avec brio. Vous possédez des qualités d’analyse et de discernement.  Vous avez un esprit de synthèse, et le sens du détail. Vous témoignez d’un bon sens du relationnel, et des qualités de communications.','25 ans','Baccalauréat général',1,5,10,8),(4,'Cartographe géospatial','Accompagné des capacités de traitement spatial des systèmes d’information géographique, votre rôle consiste à optimiser la visualisation et la compréhension des données géostratégiques et du renseignement géolocalisé en les transformant en cartes.',7,'Intelligence Géospatiale',578000,'CDI',-1,'Sous-lieutenant','Vous dirigez votre département.','Aucun','21 ans','Baccalauréat général',1,8,7,10),(5,'Architecte de données géoréférencées','Vous êtes en charge de concevoir la structure d’une base de données spatiales et d’en assurer la maintenance. Votre rôle est primordial car les cartographes et les analystes dépendent de la stabilité et du bon fonctionnement de votre travail.',3,'Intelligence Géospatiale',107000,'CDI',-1,'Colonel','Vous dirigez votre département.','Vous avez l’esprit logique et de synthèse. Vous possédez un excellent sens de l’organisation et de l’optimisation. Vous êtes précis et rigoureux. Vous savez travailler en équipe.','25 ans','Baccalauréat général',1,8,10,7),(6,'Pilote spatial B-2','Grade inférieur des pilotes de fusées et satellites de l’Intelligence Géospatiale (recherche scientifique / intérêts industriels et économiques)',198,'Escadre armée',780000,'CDI',-1,'Soldat','Vous vous chargez de mener à bien votre mission en groupe.','Capitaine Vous avez une excellente vue et un bon sens de la coordination. Vous êtes consciencieux et possédez un bon jugement. Vous aimez travailler en équipe et avec un bon sens de la communication.','21 ans','Baccalauréat général',10,3,7,5),(7,'Pilote spatial A-1','Vous piloterez des vaisseaux de guerre armés dans le cadre de missions spécifiques, d’attaques coordonnées ou de situation de défense.',59,'Escadre armée',1090000,'CDI',-1,'Commandant','Vous dirigez votre département.','Vous avez une excellente vue et un bon sens de la coordination. Vous êtes consciencieux et possédez un bon jugement. Vous avez d’excellentes capacités d’adaptation, et des nerfs d’acier.','21 ans','Baccalauréat général',8,8,8,5),(8,'Ingénieur spatial Classe M-1','Maintenance et vérification équipements humains (type Combinaison extra-véhiculaire), armes et armures spatiales',38,'Ingénierie',625000,'CDI',-1,'Sous-lieutenant','Vous vous chargez de mener à bien votre mission en groupe.','Vous savez gérer et intervenir en cas de problèmes techniques sur divers équipements militaires. Vous savez garder votre sang froid lors de situations critiques et travailler efficacement. Avoir une bonne analyse technique.','25 ans','master école d’ingénieur ou équivalent en BAC+5',8,3,7,10),(9,'Chef Ingénieur spatial Classe M-2','Maintenance et vérification des petits modules et vaisseaux de catégorie 1-2-3',15,'Ingénierie',657500,'CDI',-1,'Sous-lieutenant','Vous dirigez votre département.','Vous savez garder votre sang froid lors de situations critiques et travailler efficacement. Avoir une bonne analyse technique sur les composants et matériels spatial. Vous savez gérer et intervenir en cas de problèmes techniques sur divers machines milita','25 ans','master école d’ingénieur ou équivalent en BAC+5',8,5,7,10),(10,'Chef Ingénieur spatial Classe I','Gestion et maintenance des vaisseaux maires et vaisseaux d’attaques/défenses',40,'Ingénierie',700000,'CDI',-1,'Lieutenant','Vous dirigez votre département.','Vous devrez encadrer et gérer tout une équipe d’ingénieur sur un même vaisseau.Vous savez garder votre sang froid lors de situations critiques et travailler efficacement. Vous savez intervenir en cas de problèmes techniques sur divers machines militaires.','30 ans','master école d’ingénieur ou équivalent en BAC+5',6,10,9,7),(11,'Ingénieur structure principale','Gestion et maintenance de l’armature et structure des vaisseaux principaux',50,'Ingénierie',550000,'CDD',1095,'Major','Vous êtes en charge de l\'organisation de votre département.','Savoir répondre à l’imprévu. Avoir une bonne analyse technique sur les composants et matériels spatial. Vous savez gérer et intervenir en cas de problèmes techniques sur divers machines militaires. Savoir diriger une petite équipe d’ingénieur.','21 ans','École d’ingénieur ou formation BAC+3 en fin de cursus.',8,2,5,6),(12,'Ingénieur moteurs et turbo-compresseur','Gestion et maintenance des parties moteurs et mécaniques des vaisseaux.',46,'Ingénierie',650000,'CDI',-1,'Major','Vous êtes en charge de l\'organisation de votre département.','Avoir une bonne analyse technique sur les différents type de moteurs des flottes spatiales. Vous savez gérer et intervenir en cas de problèmes techniques sur divers moteurs présents à bord. Savoir diriger petite équipe d’ingénieurs spécialisé dans les méc','30 ans','master école d’ingénieur ou équivalent en BAC+5',6,9,8,8),(13,'Chargé ravitaillement R-1','Vous vous occuperez du ravitaillement des vaisseaux au front.',35,'Soutien',490000,'CDD',1095,'Soldat','Vous vous chargez de mener à bien votre mission en groupe.','Vous êtes rapides et agiles. Vous vous adaptez à toutes les situations.','19','Aucun',10,2,3,3),(14,'Chargé ravitaillement R-2','Vous vous occuperez du ravitaillement des vaisseaux à quai.',41,'Soutien',460000,'CDD',1095,'Soldat','Vous vous chargez de mener à bien votre mission en groupe.','Vous êtes rapides et agiles. Vous vous adaptez à toutes les situations.','22','Aucun',8,3,2,5),(15,'Chargé ravitaillement R-3','Vous vous occuperez du ravitaillement des vaisseaux en mission.',41,'Soutien',560000,'CDD',1095,'Soldat','Vous vous chargez de mener à bien votre mission en groupe.','Vous êtes rapides et agiles. Vous vous adaptez à toutes les situations. Vous savez garder votre sang froid.','22','Aucun',10,5,5,2);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180621152939'),('20180621171214'),('20180622133446'),('20180624173007'),('20180625104503'),('20180625114127'),('20180625114938'),('20180625115033'),('20180626092103'),('20180626093722'),('20180626094112'),('20180626135647'),('20180626141720'),('20180626142457'),('20180627070830'),('20180627114108'),('20180627140324');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (8,'Trump veut vraiment une armée américaine de l\'espace','L’espace, l’ultime frontière… de l’armée. Donald Trump a promis lundi d’assurer l’hégémonie des Etats-Unis pour l’exploration de la Lune et de Mars, mais aussi dans toute éventuelle guerre spatiale, avec la création future d’une force de l’espace.\r\n\r\n« L’Amérique sera toujours la première dans l’espace », a déclaré le président américain lors d’un discours à la Maison Blanche. « Nous ne voulons pas que la Chine et la Russie et d’autres pays nous dominent, nous avons toujours dominé », a-t-il poursuivi. « Mon administration va reprendre le flambeau en tant que premier pays de l’exploration spatiale ».\r\n\r\nLe commandant en chef a confirmé ce qu’il avait déjà évoqué auparavant : il souhaite la création d’une force spatiale indépendante de l’armée de l’air, un sujet controversé à Washington, où certains généraux et parlementaires trouveraient plus efficace et économe que le corps spatial se développe au sein de l’US Air Force. La décision en reviendra au Congrès, mais Donald Trump a ordonné lundi au département de la Défense d’en poser les jalons. « Nous allons avoir une armée de l’air, et une force spatiale, séparée mais égale », a-t-il dit, tranchant le débat actuel. « Pour défendre l’Amérique, une simple présence dans l’espace ne suffit pas, nous devons dominer l’espace », a déclaré Donald Trump.\r\n\r\nUn long processus\r\nAu Pentagone, la porte-parole a indiqué, sans enthousiasme, que le processus… serait long, dépendant des travaux d’une commission créée récemment. « En conjonction avec le Congrès, ce sera un processus mûrement réfléchi, qui prendra en compte les avis de multiples acteurs », a commenté Dana White.\r\n\r\nDepuis son arrivée au pouvoir en 2017, le milliardaire s’est investi dans les sujets spatiaux, reprenant à son compte le vocabulaire historique des « nouvelles frontières ». Il a cherché à augmenter le budget de la Nasa, et ordonné à l’agence spatiale américaine, en décembre, de retourner sur la Lune pour la première fois depuis 1972, et de préparer des missions vers Mars. L’administration Trump veut privatiser la station à partir de 2025, ce qui est controversé au Congrès, afin de consacrer la majorité des moyens de la Nasa au retour d’astronautes sur la Lune.','Extérieur','2018-04-28 14:39:55','230da4ef1f9bb05bb24afd3747afcf4f.jpeg'),(9,'La Russie se lance dans la conquête militaire de l\'espace','« Cette fois, nous établirons une présence de long terme », a promis le président. « La raison pour laquelle nous voulons retourner sur la Lune est que nous voulons faire atterrir des Américains à la surface de Mars », a expliqué Jim Bridenstine, le nouvel administrateur de la Nasa, un élu républicain nommé par Donald Trump.\n\nLa Nasa est également en train de construire la fusée la plus puissante de son histoire, « SLS », pour emmener dans l’espace suffisamment d’astronautes et de matériels pour des missions vers la Lune et, un jour, la planète rouge. Elle veut aussi construire une station en orbite autour de la Lune. Mais là encore le privé aura sa place. L’agence a déjà demandé au privé de concevoir des missions de livraison de matériel sur la surface lunaire.','Extérieur','2018-05-11 19:42:41','c8dce042b568213a510ae0c8e8f6538c.jpeg'),(10,'Un nouveau vaisseau rejoint la flotte française','Rebondir sur l’atmosphère comporte un avantage : plus besoin d’attendre que les astres s’alignent pour coordonner la rentrée au-dessus d’un point précis.\r\n\r\n« Le rebond nous permet de revenir de la Lune, par exemple, à n’importe quel moment du calendrier lunaire et d’arriver de n’importe quelle orientation. On peut arriver au-dessus du pôle Sud ou du Japon et rebondir au large de la Californie, là où on ira chercher la capsule. Ça ouvre toutes les « fenêtres de possibilités », dit M. Smith.\r\n\r\nUNE STATION SPATIALE AUTOUR DE LA LUNE\r\n\r\nAu départ, Orion avait été pensée pour ravitailler la Station spatiale internationale. Mais avec les entreprises privées comme SpaceX et Orbital Sciences qui font maintenant le boulot, le programme a été réorienté. « Aujourd’hui, Orion est considérée exclusivement comme un véhicule pour l’espace profond », dit Kelly Smith. \r\n\r\nOn compte notamment l’utiliser pour bâtir DeepSpace Gateway, une nouvelle station spatiale qui tournerait autour de la Lune et dont la construction a été proposée l’an dernier. « Comme la Station spatiale internationale, DeepSpace Gateway sera construite morceau par morceau, comme des blocs Lego qu’on assemble », dit M. Smith. \r\n\r\nCette station donnerait un accès facile et peu coûteux à la surface de la Lune et servirait de base de lancement pour des missions vers des destinations plus éloignées, dont la mythique planète Mars.','Matériel','2018-05-23 16:19:17','238667097c5f5f474798fef4bb29dc7d.jpeg'),(11,'A la conquête de mars!','OBJECTIF MARS\r\n\r\nLe module habitable d’Orion permet de loger six astronautes pour des missions près de la Terre, et quatre astronautes pour des voyages plus longs. \r\n\r\nUn voyage vers Mars, toutefois, durerait près de huit mois, et les neuf mètres cubes de la capsule seraient nettement insuffisants. Voilà pourquoi la NASA travaille sur l’idée d’un habitacle beaucoup plus spacieux qui pourrait être connecté à la capsule.\r\n\r\nLE GRAND FRÈRE D’APOLLO\r\n\r\nMême forme conique, même genre de hublots, même dessous arrondi : plus d’un demi-siècle sépare Orion de l’époque des capsules Apollo, mais la ressemblance entre les deux vaisseaux est frappante.','Objectifs','2018-05-27 06:22:34','dead06c854ba6fe192a0b0b6362dbd43.jpeg'),(12,'La recherche de vie sur mars prend plus de temps que prévu','Au Pentagone, la porte-parole a indiqué, sans enthousiasme, que le processus… serait long, dépendant des travaux d’une commission créée récemment. « En conjonction avec le Congrès, ce sera un processus mûrement réfléchi, qui prendra en compte les avis de multiples acteurs », a commenté Dana White.\r\n\r\nDepuis son arrivée au pouvoir en 2017, le milliardaire s’est investi dans les sujets spatiaux, reprenant à son compte le vocabulaire historique des « nouvelles frontières ». Il a cherché à augmenter le budget de la Nasa, et ordonné à l’agence spatiale américaine, en décembre, de retourner sur la Lune pour la première fois depuis 1972, et de préparer des missions vers Mars. L’administration Trump veut privatiser la station à partir de 2025, ce qui est controversé au Congrès, afin de consacrer la majorité des moyens de la Nasa au retour d’astronautes sur la Lune.','Recherche','2018-05-30 22:22:12','1ed52edae882c45d59f2ae314ac5100e.jpeg'),(13,'La Chine veut établir une base lunaire','« Cette fois, nous établirons une présence de long terme », a promis le président. « La raison pour laquelle nous voulons retourner sur la Lune est que nous voulons faire atterrir des Américains à la surface de Mars », a expliqué Jim Bridenstine, le nouvel administrateur du centre de recherche chinois, un élu républicain nommé par Tching Tchong.\r\n\r\nLa Chine est également en train de construire la fusée la plus puissante de son histoire, « SLS », pour emmener dans l’espace suffisamment d’astronautes et de matériels pour des missions vers la Lune et, un jour, la planète rouge. Elle veut aussi construire une station en orbite autour de la Lune. Mais là encore le privé aura sa place. L’agence a déjà demandé au privé de concevoir des missions de livraison de matériel sur la surface lunaire.','Recherche','2018-06-18 15:03:10','25c57ac4561e196669f758ce0d07b048.jpeg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC','admin@example.com','[\"ROLE_ADMIN\"]'),(2,'user','$2y$10$ei0eymcSVso5klVWdbHoteJKBMB0eTPxrGehbtOK608YCfp2t/cnW','user@example.com','[\"ROLE_USER\"]'),(3,'John','$2y$10$ei0eymcSVso5klVWdbHoteJKBMB0eTPxrGehbtOK608YCfp2t/cnW','john@gmail.com','[\"ROLE_USER\"]'),(4,'Elyah','$2y$10$ei0eymcSVso5klVWdbHoteJKBMB0eTPxrGehbtOK608YCfp2t/cnW','elyah@gmail.com','[\"ROLE_USER\"]'),(5,'Damien','$2y$10$ei0eymcSVso5klVWdbHoteJKBMB0eTPxrGehbtOK608YCfp2t/cnW','damien@gmail.com','[\"ROLE_USER\"]');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-28 18:23:49
