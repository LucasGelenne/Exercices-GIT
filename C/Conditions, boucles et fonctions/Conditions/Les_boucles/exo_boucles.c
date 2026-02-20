#include <stdio.h>
#include <stdlib.h>

int main() {

int nombreEntre = 0;

while (nombreEntre != 47)
{
    printf("Entrez le nombre 47 !\n");
    scanf("%d", &nombreEntre);
}
int compteur = 10;

while (compteur > 0)
{
    printf("Bienvenue dans l'univers du langage C !\n");
    compteur--;
}


int TicTac;
for (TicTac = 0 ; TicTac <= 10 ; TicTac += 2)
{
    printf("%d\n", TicTac);
}
return 0;
}

