#include <stdio.h>
#include <stdlib.h>


void affichage(int *Tableau, int TailleTableau);
 
int main(int argc, char *argv[])
{
    int Tableau[4] = {10, 15, 3};
 

    affichage(Tableau, 4);
 
    return 0;
}
 
void affichage(int *Tableau, int TailleTableau)
{
    int i;
 
    for (i = 0 ; i < TailleTableau ; i++)
    {
        printf("%d\n", Tableau[i]);
    }
}