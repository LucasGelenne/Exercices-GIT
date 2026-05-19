
# README — Scripts Unity (Jeu Balle)

Voici le readme de mon premier jeu créé sur Unity à l'aide des cours en ligne disponibles directement sur le site officiel de unity. Il faut noter que de tout le dossier, j'ai codé moi-même de zéro tous les scripts du jeu en C#.

Mon jeu est disponible en cliquant sur [ce lien](https://play.unity.com/en/games/5d2d54cd-afe1-449c-a175-f56fa145cbaf/projetjeu2).

Voici une explication condensée de ce que font mes scripts :

- `DeplacementsJoueur.cs` — Gère les mouvements du joueur et la logique de collecte / victoire / défaite.
  - Utilise un `Rigidbody` pour appliquer une force en `FixedUpdate` en fonction de l'entrée (système `InputSystem` via `OnMove`).
  - Compte les objets ramassés (`PickUp`) et affiche le compteur via `TextMeshProUGUI` (`Compteur`).
  - Active `WinTextObject` quand le compteur atteint une limite (12) et détruit les ennemis restants.
  - Gère la collision avec les objets taggés `Enemy` : en cas de collision le joueur est détruit et le texte affiche "Perdu!".

- `DeplacementsCamera.cs` — Caméra suiveuse simple.
  - Stocke un `offset` entre la caméra et le joueur et met à jour la position de la caméra dans `LateUpdate` pour suivre le joueur sans décalage visible.

- `EnnemiMouvements.cs` — Mouvement des ennemis via NavMesh.
  - Récupère un `NavMeshAgent` et appelle `SetDestination` avec la position de la cible (`Sphere`) à chaque `Update`.
  - Nécessite qu'un NavMesh soit bakes dans la scène et que l'agent ait un composant `NavMeshAgent`.

- `Rotation.cs` — Rotation visuelle continue.
  - Fait pivoter l'objet chaque frame avec `transform.Rotate(...) * Time.deltaTime`.
  - Typiquement utilisé pour rendre les pickups plus visibles (effet de rotation).

Remarques techniques (mises en place dans Unity)

- Les scripts exposent des champs publics (`speed`, `Compteur`, `WinTextObject`, `player`, `Sphere`) qu'il faut lier depuis l'éditeur Unity.
- `DeplacementsJoueur.cs` suppose l'existence d'objets avec les tags `PickUp` et `Enemy` pour la logique de ramassage et de collision.
- `DeplacementsJoueur.cs` utilise `TextMeshProUGUI` : importer TextMesh Pro et lier le composant UI.