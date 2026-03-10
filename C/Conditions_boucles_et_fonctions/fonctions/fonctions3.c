#include <stdio.h>
#include <stdlib.h>

double aireRectangle(double largeur, double hauteur)
{
    return largeur * hauteur;
}    

int main(int argc, char *argv[])
{    
    printf("Rectangle de largeur 5 et hauteur 10. Aire = %f\n", aireRectangle(5, 10));
    printf("Rectangle de largeur 2.5 et hauteur 3.5. Aire = %f\n", aireRectangle(2.5, 3.5));
    printf("Rectangle de largeur 4.2 et hauteur 9.7. Aire = %f\n", aireRectangle(4.2, 9.7));
      
    return 0;
}
/*C'est la même chose que ce programme (j'ai fait le test):

#include <stdio.h>
#include <stdlib.h>

void aireRectangle(double largeur, double hauteur)
{
    double aire = 0;
    
    aire = largeur * hauteur;
    printf("Rectangle de largeur %f et hauteur %f. Aire = %f\n", largeur, hauteur, aire);
}    

int main(int argc, char *argv[])
{    
    aireRectangle(5, 10);
    aireRectangle(2.5, 3.5);
    aireRectangle(4.2, 9.7);
       
    return 0;
}*/