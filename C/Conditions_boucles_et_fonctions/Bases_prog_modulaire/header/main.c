#include <stdio.h>
#include <stdlib.h>
#include "aire.h"

int main()
{
    double resultat;
    resultat = aireRectangle(10.0, 20.0);

    printf("L'aire du rectangle est : %f\n", resultat);
    return 0;
}