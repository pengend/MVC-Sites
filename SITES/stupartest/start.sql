CREATE DATABASE IF NOT EXISTS studapart;
USE studapart;
DROP TABLE IF EXISTS appart;
CREATE TABLE appart(
	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
	localname varchar(255) NOT NULL,  /* nom de l'appart */
	space int NOT NULL, /* le metre carre */
	address varchar(255) NOT NULL, /* */
	type int NOT NULL, /* type de l'appart */
	furniture varchar(255) NOT NULL, /* ameublement */
	rent int NOT NULL, /* loyer */
	imgpath varchar(255) /* path de l'image */
);
/* type values : 1 for location, 2 for colocation, 3 for herbergement */
INSERT INTO appart(localname, space, address,type, furniture, rent, imgpath)
VALUES 
('Appart de Superman', 1000, '123 rue de superheros', 1, 'oui', 1000000000, 'image/superheros.png'), 
('Appart très normal', 50, '34 rue de gens normal', 2, 'oui', 400, 'image/normal.png'), 
('Appart au bord de néant', 1, '12 place de l\'enfer', 3, 'oui', 10, 'image/neant.png'),
('Appart de samurai', 100, '12 rue de la delame', 2, 'oui', 100, 'image/samourai.png'),
('Appart de la Terra', 400000, '5 place de Soleil', 1, 'non', 100000000, 'image/earth.png'),
('My dream appart', 1000, '12 place de je-ne-sais-ou', 1, 'oui', 1, 'image/dream.png'),
('Appart imaginare', 404, '404 place de 404', 404, '404', 404, 'image/404.png');