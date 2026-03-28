#include <stdio.h>
#include <stdlib.h>


void decoupeMinutes(int *Pointheures, int *Pointminutes);

int main(int argc, char *argv[])
{
    int heures = 0, minutes = 90;

    decoupeMinutes(&heures, &minutes);

    printf("%d heures et %d minutes", heures, minutes);

    return 0;
}

void decoupeMinutes( int *PointHeures, int *PointMinutes)
{
    *PointHeures = *PointMinutes / 60;
    *PointMinutes = *PointMinutes % 60;
}