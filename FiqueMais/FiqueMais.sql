create database base;
CREATE TABLE `ranq` (
  `nome` char(20) DEFAULT NULL,
  `tempo` int DEFAULT NULL
);

INSERT INTO `ranq` VALUES 
('Caramelo',1852),
('Bolinho',2159),
('Marshmallow',1143),
('DaniBoy',1963),
('HmPaçoquinha',1181);

CREATE TABLE `visitas` (
  `id` int DEFAULT NULL,
  `visitas` int DEFAULT NULL
);

INSERT INTO `visitas` VALUES 
('1',0),