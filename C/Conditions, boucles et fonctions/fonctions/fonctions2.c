#include <stdio.h>
#include <stdlib.h>

void punition(int nombreDeLignes)
{
    int i;
    
    for (i = 0 ; i < nombreDeLignes ; i++)
    {
        printf("Je ne dois pas copier sur mon voisin\n");
    }    
}    

int main(int argc, char *argv[])
{    
    int lignes = 0;
    scanf("%d", &lignes);
    punition(lignes);
    
    return 0;
}