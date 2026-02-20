#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main() {

double nombre_1 = 0;
double nombre_2 = 0;
double resultat = 0;

printf("Entrez un nombre (entier ou decimal) :");
scanf("%lf", &nombre_1);
printf("Entrez un deuxième nombre (toujours entier ou decimal) :");
scanf("%lf", &nombre_2);
resultat = nombre_1 + nombre_2;
printf("Le résultat de l'addition est : %lf", resultat);
    return 0;
}
