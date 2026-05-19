Dans ce dossier, j'ai regroupé mes travaux pratiques et livrables autour de la conception de bases de données (Merise, cahier des charges, MLD/MLD→SQL, LDD, LMD). Ci-dessous j'explique, fichier par fichier, ce que j'ai fait et ce que chaque livrable représente.

**TP1 — Merise**

- [TP1_Consignes.png](TP1_Merise/TP1_Consignes.png) — Consignes du TP : image contenant l'énoncé et les contraintes de modélisation demandées.
- [TP1.jpg](TP1_Merise/TP1.jpg) — Diagramme produit pour le TP (MCD / MPD selon la consigne) : j'y ai modélisé les entités, associations et cardinalités à partir du besoin.

Que j'ai fait : j'ai analysé l'énoncé, identifié les entités et relations, et dessiné le MCD. Ensuite j'ai dérivé le modèle physique (MPD) en respectant les cardinalités et les clés.

**TP2 — Cahier des charges**

- [TP2_consignes.png](TP2_cahier_des_charges/TP2_consignes.png) — Consignes et attentes du TP 2.
- [TP2.jpg](TP2_cahier_des_charges/TP2.jpg) — Document/résultat produit (ex : diagramme descriptif ou extrait du cahier des charges).

Que j'ai fait : j'ai formalisé le besoin au format cahier des charges, listé les cas d'utilisation principaux et proposé une structure de données adaptée au besoin métier.

**TP3 — BDD depuis un MPD (modélisation → SQL)**

- [TP3_consignes.png](TP3_BDD_depuis_un_MPD/TP3_consignes.png) — Consignes du TP 3.
- [TP3_UML.jpg](TP3_BDD_depuis_un_MPD/TP3_UML.jpg) — Diagramme UML / schéma conceptuel utilisé comme source.
- [TP3_MLD.jpg](TP3_BDD_depuis_un_MPD/TP3_MLD.jpg) — Modèle logique de données (MLD) dérivé.
- [TP3_BDD.png](TP3_BDD_depuis_un_MPD/TP3_BDD.png) — Schéma de la base finalisé (tables et relations).
- [TP3.sql](TP3_BDD_depuis_un_MPD/TP3.sql#L1) — Script SQL que j'ai écrit pour créer le schéma.
- [TP3.jpg](TP3_BDD_depuis_un_MPD/TP3.jpg) — Illustration générale du TP.

Que j'ai fait : j'ai transformé le MPD/MLD en script SQL. Le script contient la création des tables suivantes (extrait) : `Video`, `Acteur`, `Categories`, `Pays`, `Like_`, `Regardé_par`, `Type`, `Role` et des tables d'association `Joue`, `Possede`, `Est`. J'ai défini les clés primaires, les clefs étrangères et les relations plusieurs-à-plusieurs via des tables d'association.

Extrait du script : création de `Video(Id_Video, Titre)`, `Acteur(Id_Acteur, Nom, Prenom)`, relations `Joue(Id_Video, Id_Acteur, Id_Role)` avec contraintes `FOREIGN KEY`.

**TP4 — LDD (Logique de données / livrables)**

- [TP4_consignes.png](TP4_LDD/TP4_consignes.png) — Énoncé et consignes pour le TP4.
- [TP4_QU1_a_4.png](TP4_LDD/TP4_QU1_a_4.png) — Réponses / schémas pour les questions 1 à 4.
- [TP4_QU3.png](TP4_LDD/TP4_QU3.png) — Illustration réponse à la question 3.
- [TP4_QU5_a_7.png](TP4_LDD/TP4_QU5_a_7.png) — Réponses aux questions 5 à 7.
- [TP4_QU8.png](TP4_LDD/TP4_QU8.png) — Réponse / schéma pour la question 8.

Que j'ai fait : pour ce TP j'ai détaillé la logique des données (normalisation, clés, dépendances fonctionnelles) et répondu point par point aux questions du sujet, en fournissant les schémas et explications demandés.

**TP5 — LMD (Langage de Modélisation de Données / livrables finaux)**

- [TP5_consignes.png](TP5_LMD/TP5_consignes.png) — Consignes du TP5.
- [TP5](TP5_LMD/TP5) — Dossier de livrables (schémas, exports, documents de rendu).

Que j'ai fait : j'ai produit le livrable final demandant la formalisation complète du modèle (LMD), avec commentaires sur les choix de conception et les contraintes d'intégrité.