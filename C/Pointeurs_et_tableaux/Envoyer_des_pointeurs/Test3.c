#include <stdio.h>
#include <stdlib.h>

void triple(int *nombre){
    *nombre *= 3;
}

int main(int argc, char *argv[]) {
    int value = 10;
    triple(&value);
    printf("La valeur de value est : %d\n", value);
    return 0;
}