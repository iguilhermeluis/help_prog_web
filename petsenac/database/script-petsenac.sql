CREATE DATABASE IF NOT EXISTS zoosenac  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE zoosenac; 

CREATE TABLE IF NOT EXISTS user_client(
	id_user INT AUTO_INCREMENT,
	email VARCHAR(150),
	password_user VARCHAR(32),
	name_user VARCHAR(50),
	PRIMARY KEY(id_user)
);

CREATE TABLE IF NOT EXISTS  category (
	id_category INT NOT NULL AUTO_INCREMENT,
	name_category VARCHAR(150) NOT NULL,
	PRIMARY KEY(id_category)
);

CREATE TABLE IF NOT EXISTS  product (
	id_product INT NOT NULL AUTO_INCREMENT,
	name_product VARCHAR(150) NOT NULL,
	description VARCHAR(150) NOT NULL,
	id_category INT,
	image VARCHAR(200) NOT NULL,
	price VARCHAR(12) NOT NULL,
	PRIMARY KEY(id_product),
	FOREIGN KEY(id_category) REFERENCES category(id_category)
);


CREATE TABLE IF NOT EXISTS purchase_order (
	id_po INT(11) NOT NULL AUTO_INCREMENT,
	amount INT(11) NOT NULL,
	subtotal FLOAT(10,2) NOT NULL,
	total FLOAT(10,2) NOT NULL,
   id_user INT(11) NOT NULL,
	id_product INT(11) NOT NULL,
	purchase_date TIMESTAMP NOT NULL,
	PRIMARY KEY (`id_po`),
	FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
	FOREIGN KEY (`id_user`) REFERENCES `user_client` (`id_user`)
);


INSERT INTO `zoosenac`.`category` (`id_category`,`name_category`) VALUES (1, 'cachorro');
INSERT INTO `zoosenac`.`product` (`name_product`, `description`, `id_category`, `image`, `price`) VALUES ('Caixa de Transporte Atlas 10 Ferplast para Cães', 'Indicada para cães e gatos; Desenvolvida para que você possa levar seu amigo...', 1, 'casinha.jpg', '129.00');
