<?php
// contact.php - formulaire

$messageConfirmation = "";
$erreurs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation côté serveur (simple)
    if (empty($nom)) $erreurs[] = "Le nom est obligatoire.";
    if (empty($prenom)) $erreurs[] = "Le prénom est obligatoire.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = "Email invalide.";
    if (empty($message)) $erreurs[] = "Le message ne peut pas être vide.";

    if (empty($erreurs)) {
        // Petit pop-up sympa
        $messageConfirmation = "Merci $prenom ! Ton message a bien été envoyé. On te répondra vite !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres & Code - Contact</title>
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
        <h1>Contactez-nous</h1>

        <?php if ($messageConfirmation): ?>
            <p class="confirmation"><?= htmlspecialchars($messageConfirmation) ?></p>
        <?php endif; ?>

        <?php if (!empty($erreurs)): ?>
            <ul class="erreurs">
                <?php foreach ($erreurs as $erreur): ?>
                    <li><?= htmlspecialchars($erreur) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form id="formContact" method="POST" action="contact.php">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit">Envoyer le message</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2026 Livres & Code - Projet de formation IPPSI Marne-la-Vallée</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>