/*En console, pour faire un menu, on fait des printf qui affichent les différentes options possibles. Chaque option est numérotée, et l'utilisateur doit entrer le numéro du menu qui l'intéresse.

Voici par exemple ce que la console devra afficher :

=== Menu ===
1. Royal Cheese
2. Mc Deluxe
3. Mc Bacon
4. Big Mac
Votre choix ?

Votre mission (si vous l'acceptez) :

    Reproduire ce menu à l'aide de printf.

    Ajouter un scanf pour enregistrer le choix de l'utilisateur dans une variable choixMenu.

    Faire un switch pour dire à l'utilisateur "tu as choisi le menu Royal Cheese", par exemple.*/

#include <stdio.h>
#include <stdlib.h>

int main() {
printf("=== Menu ===\n");
printf("1. Royal Cheese\n");
printf("2. Mc Deluxe\n");
printf("3. Mc Bacon\n");
printf("4. Big Mac\n");
printf("Votre choix ?\n");

int choixMenu = 0;
scanf("%d", &choixMenu);
switch (choixMenu)
{
case 1:
    printf("Tu as choisi le menu Royal Cheese.");
    break;
case 2:
    printf("Tu as choisi le menu Mc Deluxe.");
    break;
case 3:
    printf("Tu as choisi le menu Mc Bacon.");
    break;
case 4:
    printf("Tu as choisi le menu Big Mac.");
    break;
default:
    printf("Il faut choisir un menu parmi les quatre propositions !");
    break;
}
return 0;
} 