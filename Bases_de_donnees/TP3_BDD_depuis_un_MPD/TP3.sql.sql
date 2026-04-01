CREATE TABLE Video(
   Id_Video INT AUTO_INCREMENT,
   Titre VARCHAR(50) ,
   PRIMARY KEY(Id_Video)
);

CREATE TABLE Acteur(
   Id_Acteur INT AUTO_INCREMENT,
   Nom VARCHAR(50) ,
   Prenom VARCHAR(50) ,
   PRIMARY KEY(Id_Acteur)
);

CREATE TABLE Categories(
   Id_Categories INT AUTO_INCREMENT,
   Label VARCHAR(50) ,
   PRIMARY KEY(Id_Categories)
);

CREATE TABLE Pays(
   Id_Pays INT AUTO_INCREMENT,
   Etat VARCHAR(50) ,
   PRIMARY KEY(Id_Pays)
);

CREATE TABLE Like_(
   Id_Like INT AUTO_INCREMENT,
   Date_like DATE,
   Id_Video INT NOT NULL,
   PRIMARY KEY(Id_Like),
   FOREIGN KEY(Id_Video) REFERENCES Video(Id_Video)
);

CREATE TABLE Regardé_par(
   Id_Regardé_par INT AUTO_INCREMENT,
   Date_vue VARCHAR(50) ,
   Id_Pays INT,
   Id_Video INT,
   PRIMARY KEY(Id_Regardé_par),
   FOREIGN KEY(Id_Pays) REFERENCES Pays(Id_Pays),
   FOREIGN KEY(Id_Video) REFERENCES Video(Id_Video)
);

CREATE TABLE Type(
   Id_Type INT AUTO_INCREMENT,
   Type VARCHAR(50) ,
   PRIMARY KEY(Id_Type)
);

CREATE TABLE Role(
   Id_Role INT AUTO_INCREMENT,
   Role VARCHAR(50) ,
   PRIMARY KEY(Id_Role)
);

CREATE TABLE Joue(
   Id_Video INT,
   Id_Acteur INT,
   Id_Role INT,
   PRIMARY KEY(Id_Video, Id_Acteur, Id_Role),
   FOREIGN KEY(Id_Video) REFERENCES Video(Id_Video),
   FOREIGN KEY(Id_Acteur) REFERENCES Acteur(Id_Acteur),
   FOREIGN KEY(Id_Role) REFERENCES Role(Id_Role)
);

CREATE TABLE Possede(
   Id_Video INT,
   Id_Categories INT,
   PRIMARY KEY(Id_Video, Id_Categories),
   FOREIGN KEY(Id_Video) REFERENCES Video(Id_Video),
   FOREIGN KEY(Id_Categories) REFERENCES Categories(Id_Categories)
);

CREATE TABLE Est(
   Id_Video INT,
   Id_Type INT,
   PRIMARY KEY(Id_Video, Id_Type),
   FOREIGN KEY(Id_Video) REFERENCES Video(Id_Video),
   FOREIGN KEY(Id_Type) REFERENCES Type(Id_Type)
);
