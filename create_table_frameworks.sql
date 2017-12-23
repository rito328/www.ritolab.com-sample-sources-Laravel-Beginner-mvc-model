CREATE TABLE `frameworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  INDEX type_index(type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;