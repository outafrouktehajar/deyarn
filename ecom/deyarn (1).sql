-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 25 oct. 2020 à 13:52
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `deyarn`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `password`) VALUES
(1, 'hajar', 'hajar@gmail.com', 'hajar'),
(3, 'haajr', 'outafrouktehajar123@gmail.com', 'hajar1');

-- --------------------------------------------------------

--
-- Structure de la table `carous`
--

CREATE TABLE `carous` (
  `id` int(25) NOT NULL,
  `caro_title` varchar(100) NOT NULL,
  `caro_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `carous`
--

INSERT INTO `carous` (`id`, `caro_title`, `caro_img`) VALUES
(1, 'caro1', 'BG.jpg'),
(2, 'caro2', 'bears.jpg'),
(3, 'caro3', '2698363.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `hooks`
--

CREATE TABLE `hooks` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `nv` int(11) NOT NULL,
  `idhookscat` int(11) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hooks`
--

INSERT INTO `hooks` (`id`, `nom`, `prix`, `nv`, `idhookscat`, `descr`) VALUES
(1, 'hooks', 12, 1, 1, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(2, 'crochet hooks', 5, 1, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(3, 'Crochet hooks', 5, 1, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(4, 'crochet hooks', 6, 1, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(5, 'Crochet hooks', 5, 1, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(6, 'crochet hooks', 6, 0, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(7, 'crochet hooks', 6, 0, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(8, 'crochet hooks', 6, 0, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(9, 'crochet hooks', 6, 0, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(10, 'crochet hooks', 7, 0, 2, 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.'),
(11, 'crochet hooks', 7, 0, 2, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(12, 'crochet hooks', 7, 0, 2, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(13, 'Needles hooks', 50, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(14, 'Needles hooks', 10, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(15, 'Needles hooks', 8, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(16, 'Needles hooks', 8, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(17, 'Needles hooks', 8, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(18, 'Needles hooks', 8, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(19, 'Needles hooks', 10, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(20, 'Needles hooks', 10, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(21, 'Needles hooks', 10, 0, 1, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(22, 'LOCK STITCH MARKERS', 35, 1, 3, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(23, 'BIRD SCISSORS', 25, 1, 3, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(24, 'BUBBLE STITCH MARKERS', 30, 0, 3, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.'),
(25, 'METAL RINGS', 20, 1, 3, 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.');

-- --------------------------------------------------------

--
-- Structure de la table `hookscat`
--

CREATE TABLE `hookscat` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hookscat`
--

INSERT INTO `hookscat` (`id`, `nom`) VALUES
(1, 'Needles'),
(2, ' Hooks'),
(3, 'Others');

-- --------------------------------------------------------

--
-- Structure de la table `nvproduits`
--

CREATE TABLE `nvproduits` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(10) NOT NULL,
  `description` text NOT NULL,
  `nv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nvproduits`
--

INSERT INTO `nvproduits` (`id`, `nom`, `prix`, `description`, `nv`) VALUES
(1, '', 54, '', '1'),
(2, 'Re-tape', 70, '', '1'),
(3, 'unspun yarns', 109, '', '1'),
(4, 'Fair cotton', 50, '', '1');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `fiber` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `nv` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `idhookscat` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `prix`, `fiber`, `date`, `nv`, `category`, `color`, `weight`, `idhookscat`, `type`) VALUES
(1, 'Fama', 'Fama is a basic acrylic yarn offered in a wide range of colours. Yarn suitable for long sleeve jumpers, women’s and kid’s jackets or autumnal waistcoats. This yarn can also be used to make amazing granny square blankets for the home.', 70, 'Acrylic', '2020-05-03', 1, 'Animal fiber yarns', 'bleu', '	 Superfine', 0, 'yarn'),
(2, 'Inca', 'Multicolour winter jaspe yarn for using with big size knitting needles and crochet hooks. Inca is suitable for making women’s and men’s jumper or striped ponchos. Inca is often used to make chunky hats, colourful neck warmers and easy to knit scarves to keep out the cold.', 70, 'Acrylic', '2020-05-03', 1, 'Animal fiber yarns', 'multicolors', 'Fine', 0, 'yarn'),
(3, ' Inca Ice', 'Fluffy blend of virgin wool and acrylic in autumnal jaspe melange colours. Inca Ice is a fantastic yarn for warm cosy garments like kid’s trench coats and basic jumpers. Thick yarn for making hats and scarves in both knit and crochet.', 50, 'Acrylic', '2020-05-10', 1, 'Plant fiber yarns', 'multicolors', '	 Superfine', 0, 'yarn'),
(4, 'Ingenious Big ', 'Soft blend of fluffy fibres in pale and wintry colours. Ingenious Big is ideal for making comfortable accessories like knit hats and protective scarves for both men and women. Ingenious Big is also perfect for colourful jumpers and knit or crochet coats.', 70, 'Acrylic', '2020-05-17', 1, 'Plant fiber yarns', 'grey', 'Fine', 0, 'yarn'),
(5, 'Kundalini', 'A fluffy and bulky 100% acrylic yarn in bright jaspe melange colours . Kundalini is a fantastic yarn for making chunky jumpers and cheerful winter jackets. This yarn is also suitable for making colourful hats and warm scarves.', 50, 'Acrylic', '2020-03-16', 0, 'Animal fiber yarns', 'multicolors', '	 Superfine', 0, ''),
(6, 'Laponia', 'Spongy fantasy yarn with an ondé effect created by a thick slub yarn wrapped in spiral around a base yarn. A voluminous yarn, easy to knit or crochet, with a subtle 3 colour degrade transition in each ball. We propose transforming a few balls of yarn into one of our knitting pattern proposals including long and short jackets, coats with short kimono sleeves or girl\'s waistcoats and capes. Knit a soft jacket with an astrakhan appearance and handle using only 5 balls of yarn.', 70, 'Acrylic', '2020-05-03', 1, 'Plant fiber yarns', 'multicolors', 'Fine', 0, 'yarn'),
(7, 'Merino Aran', 'Yarn available in a large range of colours including basics and saturated autumn and winter tones. Merino Aran is a fabulous yarn for contemporary checked jackets and jumpers for both teenagers and kids. Merino Aran is also suitable for soft cable cushions and decorative knit and crochet accessories for the home.', 60, 'Acrylic', '2020-05-03', 0, 'Animal fiber yarns', 'bleu', '	 Superfine', 0, 'yarn'),
(8, 'Merino Aran Natur ', 'Merino wool and acrylic blend in a range of autumnal colours, ideal for making all kinds of garments. This is a warm soft fiber ideal for making textural jumpers, feminine jackets and infant dresses. Merino Aran Natur is also suitable for making youthful coats and hooded jackets.', 50, 'Acrylic', '2020-05-03', 0, 'Plant fiber yarns', 'brown', 'Fine', 0, 'yarn'),
(9, 'Merino Classic ', 'Warm yarn available in a large variety of bright colours. Merino Classic is a fantastic yarn for textured adult’s jumpers and knitted kid’s jackets. A perfect yarn for novel home accessories: blankets, bed covers, knitted cushions.', 100, 'Acrylic', '2020-05-05', 0, 'Animal fiber yarns', 'grey', 'Bulky', 0, 'yarn'),
(10, 'Tout De Suite', 'XL yarn in bright and natural colours for making bulky hats and maxi scarves. Tout De Suite is suitable for home accessories like knitted cushions and sofa blankets. The warmth created by this soft blend of acrylic and wool is ideal for winter.', 90, 'Acrylic', '2020-05-05', 0, 'Plant fiber yarns', 'grey', '	 Superfine', 0, 'yarn'),
(11, 'COTTON-ALPACA', 'Soft comfortable cotton and baby alpaca blend with a matt finish in pale colours. Cotton-Alpaca is a fantastic yarn for making openwork stitch jackets and cardigans or striped tops for the spring season. This yarn is also perfect for making accessories for the warmer seasons like neck warmers and hats.', 20, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'bleu', 'Fine', 0, 'yarn'),
(12, 'Air Alpaca Degradé', 'Very lightweight, superfine Alpaca yarn with a degrade bi-colour effect. A high quality yarn ideal for making interesting garments and elegant accessories: asymmetrical jackets, oversize jumpers and maxi scarves. Designs knitted on large size needles to create voluminous, airy textures and delicate openwork patterns.', 20, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'bleu', '	 Superfine', 0, 'yarn'),
(13, 'Alpaca Gold', 'Concept Alpaca Gold is a delicate, soft yarn with downy surface hair and a touch of gold in natural autumnal colours. Its fibre blend is ideal for festive shawls, knitted scarves, and warm women\'s hats. Concept Alpaca Gold adds a touch of glamour to elegant garments and accessories.', 21, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'brown', 'Bulky', 0, 'yarn'),
(14, 'Alpaca Silver', 'Alpaca Silver combines a spongy short hair alpaca with a flash of silver. Spectacular silky wool to make the most of wide jackets and modern jumpers. Use Alpaca Silver to make luminous women’s ponchos and radiant winter scarves.', 21, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'brown', '	 Bulky', 0, 'yarn'),
(15, ' Atmosfera', 'Fluffy and spongy multicolour alpaca blend yarn with dark coloured hair. Concept Atmosfera is ideal for making fine lightweight accessories to wrap up in during autumn and winter. This fiber combination is suitable for making colourful ponchos, knitted shawls and unisex scarves.', 21, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'multicolors', 'Medium', 0, 'yarn'),
(16, 'Baby Alpaca 100%', 'Natural yarn in trend colours suitable for cold seasons. Soft alpaca yarn which can be knitted by young hands using 2 needles. Baby Alpaca 100% brings comfort and warmth to basic men’s and women’s jackets.', 20, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'yellow', 'Fine', 0, 'yarn'),
(17, 'Karina', 'A fantasy tape yarn made from the best selection of Alpaca fibre, with a silky natural shine. Make the most of this \"air yarn\" by working relief stitches, loops, eyelet patterns and drop stitch fabrics. Only a few balls are required to make a kimono style jacket, a bolero with bell sleeves or a delicate, chic jumper with vertical and horizontal stripes.', 21, 'Alpaca', '2020-06-21', 0, 'Animal fiber yarns', 'grey', 'Medium', 0, 'yarn'),
(18, 'Kena', 'Sweet Andean Alpaca \'chain\' yarn to make complete garments optimizing the number of balls of yarn used. Kena brings wamth and originality to long sleeve jumpers and occasion wear jackets. Light and vaporous yarn which gives feminine garments a spongy appearance.', 20, 'Alpaca', '2020-06-21', 1, 'Animal fiber yarns', 'bleu', 'Fine', 0, 'yarn'),
(19, 'Peru', 'Basic yarn in bright colours with an agreeable handle for making winter jackets, cosy ponchos or simple jumpers for adults and kid’s. The softness of Peru makes it a perfect choice for soft cushions and knitted blankets.', 22, 'Alpaca', '2020-06-21', 0, 'Plant fiber yarns', 'grey', 'Medium', 0, 'yarn'),
(20, ' Pisco', 'Pisco is a boucle alpaca yarn in natural colours with a curly loop surface. A fantastic yarn for making voluminous women’s jackets and simple winter jumpers. The softness and density of Pisco brings warmth to knitted scarves and shawls.', 23, 'Alpaca', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Fine', 0, 'yarn'),
(21, 'Fair Cotton Craft', 'A high yield ecologically sustainable organic cotton yarn suitable for making both garments and home accessories. Fair Cotton Craft\'s colour combination of white and bright colours make it ideal for making summer dresses, skirts and jumpers. Only 1 ball of yarn is required to make a knit or crochet blanket for the sofa.', 21, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Fine', 0, 'yarn'),
(22, 'Fair Cotton', 'Organic cotton, respectful of the environment and free of any toxic substances. Ideal cotton for sensitive skins, especially apt for baby jackets, comfortable onesies and soft blankets. Fair Cotton is also suitable for summer tops, light weight dresses and kid’s jumpers.', 22, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Fine', 0, 'yarn'),
(23, 'Duomo', 'A viscose cotton blend yarn available in a smooth, relaxing colour range for spring/summer garments. Concept Duomo is a soft, comfortable yarn for making both adult and kid\'s jumpers and strappy tops. Concept Duomo is also suitable for knitting home accessories like cushions', 21, 'Cotton', '2020-06-22', 0, 'Plant fiber yarns', 'brown', 'Fine', 0, 'yarn'),
(24, 'Big Alabama', 'Big Alabama is a matt cotton blend yarn in a range of bright colours. Yarn suitable for between season jumpers and jackets for both adults and kids. Big Alabama is excellent for making simple cushions and comfortable poufs.', 20, 'Cotton', '2020-06-22', 0, 'Plant fiber yarns', 'yellow', 'Medium', 0, 'yarn'),
(25, 'Cotton 100%', 'Cotton 100% is a soft matt yarn available in numerous colours. A cotton yarn suitable for lively kid’s jackets, cool knitted jumpers or openwork waistcoats for both spring & summer. Cotton 100% can also be used to make original amigurumis.', 21, 'Cotton', '2020-06-22', 0, 'Plant fiber yarns', 'brown', 'Fine', 0, 'yarn'),
(26, 'Cotton Stretch', 'Cotton Stretch is a slightly elastic yarn available in bright colours. An indispensable yarn for crochet bikinis and summer bathing suits. Soft matt yarn suitable for making comfortable dresses, cool jumpers for both adults and kids or baby jackets.', 15, 'Cotton', '2020-06-22', 0, 'Plant fiber yarns', 'bleu', 'Bulky', 0, 'yarn'),
(27, 'Candy', 'Multicolour cotton yarn in soft colours and pastels, especially for babies and kids. Candy is fabulous for striped dresses, spring cardigans and cosy booties. Matt yarn ideal for both knit and crochet projects.', 21, 'Cotton', '2020-06-22', 0, 'Plant fiber yarns', 'multicolors', 'Bulky', 0, 'yarn'),
(28, 'Boheme', 'A slub effect cotton & hemp blend yarn. Hemp is a natural and biodegradable fibre which has been used for centuries. It adds a rustic, but soft touch to this yarn. Available in various pastel colours and other spray effect contrast colour options with a cream base. Ideal for both feminine and kid\'s garments.', 20, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Super Bulky', 0, 'yarn'),
(29, 'Bora Bora', 'Satin finish cotton in white and intense colour combinations. Bora Bora gives a mottled variegated effect to summer jumpers and tops for women and children. A fabulous yarn for making lightweight ponchos and cheerful dresses for toddlers.', 22, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Super Bulky', 0, 'yarn'),
(30, 'Bahamas', 'Multicolour cotton yarn in cheerful, lively tones for knit and crochet. Make a simple spring/summer shawl from two balls of Bahamas. The yarn colours form striped fabrics with a youthful appearance. Also an ideal yarn for making children\'s dresses and light weight jumpers.', 23, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Super Bulky', 0, 'yarn'),
(31, 'Cotton-Alpaca', 'Soft comfortable cotton and baby alpaca blend with a matt finish in pale colours. Cotton-Alpaca is a fantastic yarn for making openwork stitch jackets and cardigans or striped tops for the spring season. This yarn is also perfect for making accessories for the warmer seasons like neck warmers and hats.', 16, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'yellow', 'Super Bulky', 0, 'yarn'),
(32, 'Alabama', 'Acrylic cotton yarn with a matt finish and a large colour range. Alabama is exceptional for making girl’s and boy’s jumpers or between seasons jackets for adults. A suitable yarn to make soft amigurumis, patterned cushions or baby blankets.', 21, 'Cotton', '2020-06-21', 0, 'Plant fiber yarns', 'Pink', 'Super Bulky', 0, 'yarn'),
(33, 'Cotton Cashmere', 'Silky soft yarn to knit or crochet women’s waistcoats and summer tops. A mix of satinized cotton in soft tones which are perfect for baby cardigans and toddler’s jumpers. The cashmere in Cotton-Cashmere makes it ideal for between season shawls.', 15, 'Cashmere', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Super Bulky', 0, 'yarn'),
(34, 'Kashwool ', 'Exquisite Superwash Yarn (machine washable on the wool cycle) for socks and much more. A versatile yarn perfect for making fisherman\'s rib stitch hat and scarf sets. Thank to its high yield you can crochet a maxi scarf with fringes using two balls. Only one ball is required to make a pair of size 9 1/2 - 10 1/2 (U.K.) / (43-44 Eur) adult socks or two pairs of size 10 - 11 (U.K.) / (28-29 Eur) kid\'s socks.', 21, 'Cashmere', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Super Bulky', 0, 'yarn'),
(35, 'Angora', 'Angora is a soft fine yarn for baby clothes and accessories. A light weight delicate yarn which is excellent for long sleeved jumpers and cosy newborn cardigans. Angora is also recommended for blankets and hand knit hats.', 12, 'Angora', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Jumbo', 0, 'yarn'),
(36, 'Cotton-Yak', 'Natural yarn with a satinized fibre finish, suitable for all seasons. Cotton-Yak gives between seasons jumpers, knitted jackets and women’s ponchos a fresh soft appearance and handle. The blend of cotton, wool and yak that gives extraordinary results when used for baby clothing and soft blankets.', 15, 'Yak', '2020-06-21', 0, 'Plant fiber yarns', 'brown', 'Jumbo', 0, 'yarn'),
(37, 'Bombay II Socks', 'Bombay II Socks', 20, 'Wool', '2020-06-22', 0, 'Plant fiber yarns', 'multicolors', 'Jumbo', 0, 'yarn'),
(38, 'Azteca', 'Very soft multicolor yarn with a wide range of colour combinations for all the family. Azteca is a very versatile yarn which can be used to make all types of garments and fun accessories: amusing kid’s jumpers, printed jackets for adults, youthful hats, unisex scarves, adorable granny square blankets.', 23, 'Wool', '2020-06-22', 0, 'Plant fiber yarns', 'multicolors', 'Jumbo', 0, 'yarn'),
(39, 'Azteca Degradé', 'Azteca Degradé is a multicolour roving yarn in bright colours with a jaspe melange effect. Using only two balls of Azteca Degradé you can knit or crochet fun accessories like knitted leg warmers, pom pom hats or fluffy neck warmers. This fabulous yarn is suitable for the whole family, especially for baby dresses and infant jackets.', 21, 'Wool', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Jumbo', 0, 'yarn'),
(40, 'Baby Paint', 'Baby Paint', 21, 'Wool', '2020-06-21', 0, 'Plant fiber yarns', 'multicolors', 'Jumbo', 0, 'yarn'),
(41, 'Big Merino', '\r\nChunky yarn with a wide range of colours ideal for all kinds of knit and crochet patterns. Big Merino is a sensational yarn for chunky jumpers, Winter jackets and youthful hats. This basic yarn is ideal for making warm blankets for the sofa and cosy cushions.', 21, 'Wool', '2020-06-21', 0, 'Plant fiber yarns', 'bleu', 'Jumbo', 0, 'yarn'),
(42, 'hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 12, '', '0000-00-00', 1, '', '', '', 1, 'hooks'),
(43, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 5, '', '0000-00-00', 1, '', '', '', 2, 'hooks'),
(44, 'Crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 5, '', '0000-00-00', 1, '', '', '', 2, 'hooks'),
(45, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 6, '', '0000-00-00', 1, '', '', '', 2, 'hooks'),
(46, 'Crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 5, '', '0000-00-00', 1, '', '', '', 2, 'hooks'),
(47, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 6, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(48, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 6, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(49, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 6, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(50, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 6, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(51, 'crochet hooks', 'Our crochet hooks are based on our own design. Next to the three shades, the hook has been processed carefully to create a smooth surface and tip for convenient crocheting. The handle is made from TPR for a comfortable grip to minimize fatigue. But it’s not only good for your hand but also for the world, as its recyclable. Each handle has been marked with the size in millimeters.', 7, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(52, 'crochet hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 7, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(53, 'crochet hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 7, '', '0000-00-00', 0, '', '', '', 2, 'hooks'),
(54, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 50, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(55, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 10, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(56, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 8, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(57, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 8, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(58, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 8, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(59, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 8, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(60, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 10, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(61, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 10, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(62, 'Needles hooks', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 10, '', '0000-00-00', 0, '', '', '', 1, 'hooks'),
(63, 'LOCK STITCH MARKERS', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 35, '', '0000-00-00', 1, '', '', '', 3, 'hooks'),
(64, 'BIRD SCISSORS', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 25, '', '0000-00-00', 1, '', '', '', 3, 'hooks'),
(65, 'BUBBLE STITCH MARKERS', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 30, '', '0000-00-00', 0, '', '', '', 3, 'hooks'),
(66, 'METAL RINGS', 'Make your crochet hook an eye-catcher with our own designed charm system. Each crochet hook you order comes with a circle charm. You’re able to attach (and detach) a charm of choice. With options as circles, leafs, roses and stars there is always an option for you. Click here to see and collect all charms.', 20, '', '0000-00-00', 1, '', '', '', 3, 'hooks');

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id`, `nom`) VALUES
(1, 'category'),
(2, 'fiber'),
(3, 'weight'),
(4, 'Color');

-- --------------------------------------------------------

--
-- Structure de la table `shopcat`
--

CREATE TABLE `shopcat` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id_shop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shopcat`
--

INSERT INTO `shopcat` (`id`, `nom`, `id_shop`) VALUES
(1, 'Animal fiber yarns', 1),
(2, 'Plant fiber yarns', 1),
(3, 'Synthetic fibers yarns', 1),
(4, 'Acrylic', 2),
(5, 'Alpaca', 2),
(6, 'Angora', 2),
(7, 'Bamboo', 2),
(8, 'Camel', 2),
(9, 'Cashmere', 2),
(10, 'Cotton', 2),
(11, 'Mako cotton', 2),
(12, 'Merino Wool', 2),
(13, 'Nylon', 2),
(14, 'Wool', 2),
(15, 'Yak', 2),
(16, 'Superfine', 3),
(17, 'Fine', 3),
(18, 'Light', 3),
(19, 'Medium', 3),
(20, 'Bulky', 3),
(21, 'Super Bulky ', 3),
(22, 'Jumbo', 3),
(23, 'white', 4),
(24, 'black', 4),
(25, 'bleu', 4),
(26, 'brown', 4),
(27, 'yellow', 4),
(30, 'grey', 4),
(31, 'multicolors', 4),
(32, 'pink', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`nom`, `email`, `passw`, `id`) VALUES
('Hajar', 'hajar@gmail.com', 'hajar', 2),
('Outafroukte', 'outafrouktehajar123@gmail.com', 'haajar', 3),
('hajar123', 'hajar123@gmail.com', 'hajar123', 4),
('Outafroukte', 'outafrouktehajar123@gmail.com', 'haajr', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carous`
--
ALTER TABLE `carous`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hooks`
--
ALTER TABLE `hooks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hookscat`
--
ALTER TABLE `hookscat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nvproduits`
--
ALTER TABLE `nvproduits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shopcat`
--
ALTER TABLE `shopcat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `passw` (`passw`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `carous`
--
ALTER TABLE `carous`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `hooks`
--
ALTER TABLE `hooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `hookscat`
--
ALTER TABLE `hookscat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `nvproduits`
--
ALTER TABLE `nvproduits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `shopcat`
--
ALTER TABLE `shopcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
