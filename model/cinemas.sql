CREATE DATABASE IF NOT EXISTS `cinemas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cinemas`;

CREATE TABLE `diretor` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `nacionalidade` text NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
