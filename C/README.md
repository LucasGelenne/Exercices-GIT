# README — Dossier `C` (explications fichier par fichier)

Ici j'explique, fichier par fichier, ce que font les programmes que j'ai écrits pendant mes exercices en C. Les descriptions sont rédigées à la première personne comme si je présentais mon travail.

**Bases du C**

- [Mon_premier_programme.c](Bases_du_C/Mon_premier_programme/Mon_premier_programme.c) — Mon premier programme : affiche "Hello world!" et montre la structure minimale d'une application C (`main`, includes, `printf`).
- [variables.c](Bases_du_C/variables/variables.c#L1) — Exemple sur les variables et constantes : je déclare une constante, une variable, j'affiche leur valeur et j'utilise `scanf` pour demander l'âge à l'utilisateur.
- [calculs_variables.c](Bases_du_C/Calculs_variables/calculs_variables.c#L1) — Petit programme de calcul : je lis deux nombres en flottant, je calcule leur somme et j'affiche le résultat.

**Conditions, boucles et fonctions**

- [exercice_conditions.c](Conditions_boucles_et_fonctions/Conditions/exercice_conditions.c#L1) — Menu et conditions : je construis un menu avec `printf`, je récupère le choix via `scanf` et j'utilise un `switch` pour afficher le menu choisi.
- [exo_boucles.c](Conditions_boucles_et_fonctions/Boucles/exo_boucles.c#L1) — Exemples de boucles : boucle `while` qui attend une valeur (47), boucle `while` avec compteur, et un `for` qui affiche une séquence (pas à pas de 2 en 2).
- [fonctions/fonctions1.c](Conditions_boucles_et_fonctions/fonctions/fonctions1.c#L1) — Fonction `triple` : je demande un nombre puis j'affiche son triple (retour via valeur).
- [fonctions/fonctions2.c](Conditions_boucles_et_fonctions/fonctions/fonctions2.c#L1) — Procédure `punition` : fonction `void` qui affiche une phrase N fois (démonstration d'un appel de fonction et d'une boucle interne).
- [fonctions/fonctions3.c](Conditions_boucles_et_fonctions/fonctions/fonctions3.c#L1) — Fonction `aireRectangle` (retour `double`) : je calcule et j'affiche l'aire pour plusieurs exemples (démonstration de paramètres en virgule flottante).
- [fonctions/fonctions4.c](Conditions_boucles_et_fonctions/fonctions/fonctions4.c#L1) — Exemple de menu modulaire : la fonction `menu()` valide l'entrée de l'utilisateur avant de la retourner, puis `main` fait un `switch` selon le choix.

**Programmation modulaire (prototypes et header)**

- [test prototypes.c](Conditions_boucles_et_fonctions/Bases_prog_modulaire/test%20prototypes.c#L1) — Démonstration de prototype : je montre comment déclarer un prototype en haut du fichier puis définir la fonction plus bas (ici `aireRectangle`).
- [Bases_prog_modulaire/header/main.c](Conditions_boucles_et_fonctions/Bases_prog_modulaire/header/main.c#L1) — Exemple d'utilisation d'un module : `main` inclut `aire.h` et utilise `aireRectangle` fournie par `aire.c`.
- [Bases_prog_modulaire/header/aire.c](Conditions_boucles_et_fonctions/Bases_prog_modulaire/header/aire.c#L1) — Implémentation de `aireRectangle` séparée dans un fichier source, accompagnée de l'en-tête [Bases_prog_modulaire/header/aire.h](Conditions_boucles_et_fonctions/Bases_prog_modulaire/header/aire.h#L1) qui contient le prototype.

**Pointeurs et tableaux**

- [Creer_pointeurs/Test/Test1.c](Pointeurs_et_tableaux/Creer_pointeurs/Test/Test1.c#L1) — Exemple de passage par valeur (intentionnellement non modifiant) : je tente de découper 90 minutes en heures/minutes sans utiliser de pointeurs, ce qui illustre pourquoi il faut passer les adresses quand on veut modifier l'appelant.
- [Creer_pointeurs/Test/Test2.c](Pointeurs_et_tableaux/Creer_pointeurs/Test/Test2.c#L1) — Petit test de pointeur : je montre comment obtenir l'adresse d'une variable et accéder à sa valeur via un pointeur (affichage de la valeur et de l'adresse mémoire).
- [Envoyer_des_pointeurs/Test3.c](Pointeurs_et_tableaux/Envoyer_des_pointeurs/Test3.c#L1) — Exemple de modification par pointeur : la fonction `triple` prend un pointeur et multiplie la valeur pointée par 3 (effet sur la variable appelante).
- [Envoyer_des_pointeurs/Exercice_heures_minutes.c](Pointeurs_et_tableaux/Envoyer_des_pointeurs/Exercice_heures_minutes.c#L1) — Version correcte de l'exercice minutes→heures : j'utilise des pointeurs pour mettre à jour les variables `heures` et `minutes` depuis la fonction.
- [Tableaux_bases/creation_tableau.c](Pointeurs_et_tableaux/Tableaux_bases/creation_tableau.c#L1) — Initialisation et affichage : je crée un tableau de `float`, j'initialise chaque case puis j'affiche les valeurs.
- [Tableaux_bases/Exercice_affichage_tableau.c](Pointeurs_et_tableaux/Tableaux_bases/Exercice_affichage_tableau.c#L1) — Passage de tableau à une fonction : la fonction `affichage` reçoit un tableau et sa taille et affiche chaque élément (démonstration du passage d'un tableau en C comme pointeur).
- [Tableaux_bases/initialiser_tableau_2.c](Pointeurs_et_tableaux/Tableaux_bases/initialiser_tableau_2.c#L1) — Différentes façons d'initialiser : j'initialise toutes les cases à zéro via une boucle puis j'affiche le résultat (exemple alternatif commenté montrant une initialisation littérale).