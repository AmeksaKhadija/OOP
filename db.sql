-- database:

CREATE TABLE administrateur(
	id_administrateur INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastename VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255)
);

CREATE TABLE users(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastename VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255)
    phone INT,
    CIN INT
);

CREATE TABLE article(
	id_article INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255),
    contenu VARCHAR(255),
    date_de_creation DATE,
    id_users INT,
    FOREIGN KEY(id_users) REFERENCES users(id_users)
);
