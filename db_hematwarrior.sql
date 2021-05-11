CREATE DATABASE hemat_warrior;
USE hemat_warrior;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mitra','pelanggan') NOT NULL DEFAULT 'pelanggan',
  `last_login` datetime NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Nom Nom Cafe', 'admin@nomnomcafe.id', '$2y$10$B2ztsNPm8JZyGR/E12rRU.itsFuvdnYCsDg/L4SZ.xCx7usFzvXUG', 'mitra', '2017-04-22 06:05:04', '1');
INSERT INTO `users` VALUES ('2', 'Hemat Warrior', 'admin@hematwarrior.id', '$2y$10$B2ztsNPm8JZyGR/E12rRU.itsFuvdnYCsDg/L4SZ.xCx7usFzvXUG', 'administrator', '2017-04-22 06:05:04', '1');


CREATE TABLE `promo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promo` varchar(100) NOT NULL,
  `mitra` varchar(100) NOT NULL,
  `harga_awal` int(11) NOT NULL,
  `harga_promo` int(11) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `promo` VALUES ('1', 'Fusce dictum finibus', 75000, 50000, 'Makanan enak lah pokoknya');