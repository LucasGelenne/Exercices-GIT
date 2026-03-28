// Fonction qui affiche les livres
function afficherLivres(livres) {
    const conteneur = document.getElementById("listeLivres");
    if (!conteneur) return;
    
    conteneur.innerHTML = "";

    livres.forEach(livre => {
        const carte = document.createElement("div");
        carte.className = "carte-livre";
        
        carte.innerHTML = `
            <h3>${livre.titre}</h3>
            <p><strong>${livre.auteur}</strong></p>
            <p class="categorie">${livre.categorie}</p>
            <p class="prix">${livre.prix.toFixed(2)} €</p>
            <button onclick="ajouterAuPanier('${livre.titre.replace(/'/g, "\\'")}')">Ajouter au panier</button>
        `;
        
        conteneur.appendChild(carte);
    });
}

// Filtrer les livres (recherche + caté)
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

// Ajouter au panier
function ajouterAuPanier(titre) {
    alert(`"${titre}" a été ajouté à ton panier !`);
}

// Validation du formulaire côté client
function validerFormulaire() {
    const nom = document.getElementById("nom").value.trim();
    const prenom = document.getElementById("prenom").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    if (nom === "" || prenom === "" || email === "" || message === "") {
        alert("Tous les champs sont obligatoires !");
        return false;
    }
    
    if (!email.includes("@")) {
        alert("L'email n'est pas valide !");
        return false;
    }
    
    return true;
}

// Menu burger
document.addEventListener("DOMContentLoaded", () => {
    const burger = document.querySelector(".menu-burger");
    const liens = document.querySelector(".menu-liens");

    if (burger) {
        burger.addEventListener("click", () => {
            liens.classList.toggle("active");
        });
    }

    // Validation formulaire
    const form = document.getElementById("formContact");
    if (form) {
        form.addEventListener("submit", function(e) {
            if (!validerFormulaire()) {
                e.preventDefault();
            }
        });
    }
});