#include <stdio.h>

int main() {
    // Food for thought

    /*
        An old adage says, "You are what you eat."
        This rings true for the physical body, but it can be 
        extended beyond food to encompass how we consume knowledge.
    */

    int num = 0;
    char ch;
    double a,b;
    while (num < 2000) {
    
        // Take in some information
        scanf("%c, %lf, %lf", &ch, &a, &b);
        
        // Do something with the information
        for (int i = 0; i < ch; ++i) {
            printf("%lf %lf\n", a*i, b/i);
        }
        
        ++num;
    }

    printf("Done!\n");
    
    return 0;
}