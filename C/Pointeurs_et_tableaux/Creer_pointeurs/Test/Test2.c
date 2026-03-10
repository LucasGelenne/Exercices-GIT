#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{

int age = 24;
int *pointeurSurAge = &age;

printf("Mon âge est de : %d ans.\n", *pointeurSurAge);
printf("Ce numéro est stocké à l'adresse suivant dans mon pc : %d", pointeurSurAge);

return 0;
}
