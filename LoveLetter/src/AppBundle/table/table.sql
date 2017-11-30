drop table cimetiere_carte_manche;
drop table appartient;
drop table deck_carte_manche;
drop table partie_manche;
drop table cimetiere;
drop table deck;
drop table main;
drop table manche;
drop table partie;
drop table joueur;
drop table carte;



create table Carte (
carte_nom varchar(50) NOT NULL,
carte_url varchar(100) NOT NULL,
PRIMARY KEY (carte_nom)
);

create table Joueur (
joueur_id varchar(100) NOT NULL ,
PRIMARY KEY (joueur_id)
);


create table Partie(
partie_id int NOT NULL AUTO_INCREMENT,
partie_j1 varchar(100) NOT NULL,
partie_j2 varchar(100) NOT NULL,
FOREIGN KEY (partie_j1) references Joueur(joueur_id),
FOREIGN KEY (partie_j2) references Joueur(joueur_id),
PRIMARY KEY(partie_id)
);


create table Manche(
manche_id int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(manche_id)
);


create table Partie_manche(
pm_partie_id int NOT NULL,
pm_manche_id int NOT NULL,
FOREIGN KEY (pm_partie_id) references Partie(partie_id),
FOREIGN KEY (pm_manche_id) references Manche(manche_id),
PRIMARY KEY(pm_partie_id,pm_manche_id)
);


create table Deck(
deck_id int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(deck_id)
);

create table deck_carte_manche(
dcm_deck_id int NOT NULL ,
dcm_manche_id int NOT NULL ,
dcm_carte_nom varchar(50) NOT NULL,
FOREIGN KEY (dcm_deck_id) references Deck(deck_id),
FOREIGN KEY (dcm_manche_id) references Manche(manche_id),
FOREIGN KEY (dcm_carte_nom) references Carte(carte_nom),
PRIMARY KEY(dcm_deck_id, dcm_manche_id, dcm_carte_nom)
);

create table Cimetiere(
cimetiere_id int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(cimetiere_id)
);


create table cimetiere_carte_manche(
ccm_cimetiere_id int NOT NULL ,
ccm_manche_id int NOT NULL ,
ccm_carte_nom varchar(50) NOT NULL,
FOREIGN KEY (ccm_cimetiere_id) references Cimetiere(cimetiere_id),
FOREIGN KEY (ccm_manche_id) references Manche(manche_id),
FOREIGN KEY (ccm_carte_nom) references Carte(carte_nom),
PRIMARY KEY(ccm_cimetiere_id, ccm_manche_id, ccm_carte_nom)
);

create table main(
main_id int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(main_id)
);

create table appartient(
app_main_id int NOT NULL,
app_manche_id int NOT NULL,
app_joueur_id varchar(100) NOT NULL,
app_carte_nom varchar(50) NOT NULL,
FOREIGN KEY (app_main_id) references Main(main_id),
FOREIGN KEY (app_manche_id) references Manche(manche_id),
FOREIGN KEY (app_joueur_id) references Joueur(joueur_id),
FOREIGN KEY (app_carte_nom) references Carte(carte_nom),
PRIMARY KEY(app_main_id, app_manche_id, app_joueur_id, app_carte_nom)
);