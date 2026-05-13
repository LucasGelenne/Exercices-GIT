## Projet : Site Web "Livres & Code"

Projet réalisé dans le but de rentrer en 2e année à l'IPSSI Marne-la-Vallée

### Objectifs du Projet

Ce projet a pour but de mettre en pratique les compétences acquises en :

- Développement web (HTML, CSS, JavaScript)

- Programmation côté serveur (PHP)

- Gestion des formulaires (validation, traitement des données)

- Responsive Design (adaptation aux mobiles)

- Manipulation des données (tableaux, JSON, filtres)


### Structure du Projet

Le projet est organisé en 5 fichiers principaux :

#### index.php

Page d'accueil avec une section de présentation et des livres mis en avant.

PHP, HTML, intégration CSS/JS

#### livres.php

Page listant les livres avec recherche et filtres dynamiques.

PHP (tableaux), JavaScript (filtres, DOM)

#### contact.php

Formulaire de contact avec validation côté serveur et client.

PHP (traitement POST), JavaScript (validation)

#### style.css

Feuille de style pour l'ensemble du site (design responsive).

CSS (Flexbox, Grid, Media Queries)

#### script.js

Script pour l'affichage dynamique des livres, les filtres et le menu burger.

JavaScript (fonctions, événements, DOM)

### Analyse Technique

1. Page d'Accueil (index.php)

Contenu :

Section "hero" avec un message de bienvenue.

3 livres mis en avant (Clean Code, Dune, L'Étranger) sous forme de "cartes".

Fonctionnalité :

- Boutons "Ajouter au panier" (simulés avec une alerte JavaScript).

Points clés :

- Utilisation de HTML sémantique (header, main, footer).

- Intégration de CSS pour le style des cartes.


2. Page des Livres (livres.php)


Contenu :

Liste complète de 6 livres stockés dans un tableau PHP.

Barre de recherche et filtre par catégorie.

Fonctionnalités :

- Recherche en temps réel : filtre les livres par titre ou auteur à chaque frappe (onkeyup).

- Filtres par catégorie : menu déroulant pour sélectionner une catégorie.

- Affichage dynamique : les livres sont générés en JavaScript à partir des données PHP (json_encode).

Points clés :

- Passage de données PHP vers JavaScript : utilisation de json_encode pour convertir le tableau PHP en JSON.

- Manipulation du DOM : création d'éléments HTML dynamiquement avec document.createElement.

Exemple de code :

// Tableau PHP dans livres.php
$livres = [
    ["titre" => "Clean Code", "auteur" => "Robert C. Martin", "categorie" => "Informatique", "prix" => 29.90],
    ["titre" => "Dune", "auteur" => "Frank Herbert", "categorie" => "Sci-Fi", "prix" => 22.50],
    // ...
];

3. Formulaire de Contact (contact.php)


Contenu :


Formulaire avec 4 champs : nom, prénom, email, message.

Fonctionnalités :

- Validation côté serveur (PHP) :

- Vérification que tous les champs sont remplis.

- Validation du format de l'email avec filter_var($email, FILTER_VALIDATE_EMAIL).

- Validation côté client (JavaScript) :

- Vérification des champs avant envoi (validerFormulaire()).

- Messages de feedback avec l'affichage des erreurs ou d'une confirmation de succès.

Points clés :

- Sécurité : utilisation de htmlspecialchars() pour éviter les injections XSS.

- Méthode POST : récupération des données du formulaire avec $_POST.

Exemple de code :

// Validation côté serveur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom'] ?? '');
    if (empty($nom)) $erreurs[] = "Le nom est obligatoire.";
    // ...
    if (empty($erreurs)) {
        $messageConfirmation = "Merci $prenom ! Ton message a bien été envoyé.";
    }
}

4. Feuille de Style (style.css)

Contenu :

Styles pour l'ensemble du site (couleurs, polices, espacements).

Design responsive : adaptation aux écrans mobiles.

Points clés :

- Flexbox et Grid :

- Utilisation de display: flex pour le menu.

- Utilisation de display: grid pour la grille des livres.

- Media Queries : Adaptation du menu en menu burger pour les écrans plus "petits" que 768px.

Exemple de code :

/* Grille des livres */
.grille-livres {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    padding: 2rem;
}

/* Menu burger pour mobile */
@media (max-width: 768px) {
    .menu-liens {
        display: none;
    }
    .menu-liens.active {
        display: flex;
    }
    .menu-burger {
        display: block;
    }
}

5. Script JavaScript (script.js)

Fonctionnalités :

- afficherLivres(livres) : génère dynamiquement les cartes de livres dans le DOM.

- filtrerLivres() : filtre les livres en fonction de la recherche et de la catégorie.

- ajouterAuPanier(titre) : simule l'ajout au panier avec une alerte.

- Gestion du menu burger : affiche/masque les liens de navigation sur mobile.

Points clés :

- Écouteurs d'événements : utilisation de addEventListener pour les clics et soumissions.

- Manipulation du DOM : ajout/suppression d'éléments HTML dynamiquement.

Exemple de code :

// Filtrer les livres
function filtrerLivres() {
    const recherche = document.getElementById("champRecherche").value.toLowerCase().trim();
    const categorie = document.getElementById("filtreCategorie").value;

    const livresFiltres = livresDonnees.filter(livre => {
        const correspondRecherche =
            livre.titre.toLowerCase().includes(recherche) ||
            livre.auteur.toLowerCase().includes(recherche);

        const correspondCategorie = !categorie || livre.categorie === categorie;

        return correspondRecherche && correspondCategorie;
    });

    afficherLivres(livresFiltres);
}

## Outils Utilisés:

Éditeur de code : VS Code.

Serveur local : XAMPP pour exécuter le PHP et avoir un seveur en localhost.

Navigateur : Firefox pour tester le site.

## Améliorations Possibles

Si j'avais eu plus de temps, j'aurais remplacé le tableau PHP par une base MySQL pour stocker les livres.
J'aurais aussi créé un panier fonctionnel en stockant les articles du panier et fait en sorte d'y avoir accès dans une nouvelle page afin de le gérer.
Enfin, j'aurais créé un système de connexion/inscription avec des comptes utilisateurs.

Merci d'avoir tout lu !

Auteur : GELENNE Lucas
