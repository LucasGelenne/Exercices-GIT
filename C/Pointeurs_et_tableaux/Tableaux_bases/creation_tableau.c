#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
    float tableaux[4];
    tableaux[0] = 10;
    tableaux[1] = 11;
    tableaux[2] = 12;
    tableaux[3] = 13;

    printf("Case 1 : %f\n", tableaux[0]);
    printf("Case 2 : %f\n", tableaux[1]);
    printf("Case 3 : %f\n", tableaux[2]);
    printf("Case 4 : %f\n", tableaux[3]);

    return 0;
}