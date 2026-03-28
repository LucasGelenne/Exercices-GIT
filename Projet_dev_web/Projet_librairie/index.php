<?php
// index.php - Page d'accueil
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres & Code - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Menu de navigation -->
    <header>
        <nav class="menu">
            <div class="logo">Livres & Code</div>
            <ul class="menu-liens">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="livres.php">Nos livres</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="menu-burger">☰</div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Bienvenue chez Livres & Code</h1>
            <p>La librairie qui réunit passion de la lecture et passion du code.</p>
        </section>

        <section class="livres-mis-en-avant">
            <h2>Nos coups de cœur du moment</h2>
            <div class="grille-livres">
                <div class="carte-livre">
                    <h3>Le Clean Code</h3>
                    <p class="categorie">Informatique</p>
                    <p class="prix">29,90 €</p>
                    <button onclick="ajouterAuPanier('Clean Code')">Ajouter au panier</button>
                </div>
                <div class="carte-livre">
                    <h3>Dune</h3>
                    <p class="categorie">Sci-Fi</p>
                    <p class="prix">22,50 €</p>
                    <button onclick="ajouterAuPanier('Dune')">Ajouter au panier</button>
                </div>
                <div class="carte-livre">
                    <h3>L'Étranger</h3>
                    <p class="categorie">Roman</p>
                    <p class="prix">12,00 €</p>
                    <button onclick="ajouterAuPanier('L\'Étranger')">Ajouter au panier</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Livres & Code - Projet de formation IPPSI Marne-la-Vallée</p>
        <p>Site fait par GELENNE Lucas</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>