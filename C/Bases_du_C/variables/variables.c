#include <stdio.h>

int main() {
    const int VARIABLE_A_NOMBRE = 10;
    int Variable_exemple;
    Variable_exemple = 42;
    printf("La constante est %d et la variable d'exemple est %d\n", VARIABLE_A_NOMBRE, Variable_exemple);
    int age = 0; // On initialise la variable à 0
    printf("Quel age avez-vous ? ");
    scanf("%d", &age); // On demande d'entrer l'âge avec scanf
    printf("Ah ! Vous avez donc %d ans !\n\n", age);

    return 0;
}