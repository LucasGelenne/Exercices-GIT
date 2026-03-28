<?php
// livres.php - Liste des livres avec recherche et filtres
$livres = [
    ["titre" => "Clean Code", "auteur" => "Robert C. Martin", "categorie" => "Informatique", "prix" => 29.90],
    ["titre" => "Dune", "auteur" => "Frank Herbert", "categorie" => "Sci-Fi", "prix" => 22.50],
    ["titre" => "L'Étranger", "auteur" => "Albert Camus", "categorie" => "Roman", "prix" => 12.00],
    ["titre" => "Le Petit Prince", "auteur" => "Antoine de Saint-Exupéry", "categorie" => "Roman", "prix" => 8.50],
    ["titre" => "PHP et MySQL", "auteur" => "Jean Dupont", "categorie" => "Informatique", "prix" => 35.00],
    ["titre" => "Fondation", "auteur" => "Isaac Asimov", "categorie" => "Sci-Fi", "prix" => 18.90]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres & Code - Nos livres</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
        <h1>Nos livres</h1>

        <!-- Recherche et filtres -->
        <div class="filtres">
            <input type="text" id="champRecherche" placeholder="Rechercher un livre ou un auteur..." onkeyup="filtrerLivres()">
            
            <select id="filtreCategorie" onchange="filtrerLivres()">
                <option value="">Toutes les catégories</option>
                <option value="Roman">Roman</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Informatique">Informatique</option>
            </select>
        </div>

        <div class="grille-livres" id="listeLivres">
            <!-- Les livres seront affichés par le fichier en JavaScript -->
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Livres & Code - Projet de formation IPPSI Marne-la-Vallée</p>
    </footer>

    <script src="script.js"></script>
    <script>
        // Données PHP vers JavaScript
        const livresDonnees = <?php echo json_encode($livres); ?>;
        afficherLivres(livresDonnees);
    </script>
</body>
</html>