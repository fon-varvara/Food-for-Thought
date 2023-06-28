#include <stdio.h>

/*
  Food for Thought
*/

// Constants
#define SIZE 10
#define PI 3.14159
#define OFFSET 5

// Function Prototype
void calculateArea(float radius);

// Main Function
int main() 
{
  int i, arr[SIZE]; 
  
  // Initialize Array Values
  for(i = 0; i < SIZE; i++) 
  {
    arr[i] = OFFSET * i;
  }
  
  // Display Array Values
  printf("Array Values:\n");
  for (i = 0; i < SIZE; i++) 
  {
    printf("%d\n", arr[i]);
  }
  
  // Function Usage
  calculateArea(4.3);
  
  return 0;
}

// Function Definition
void calculateArea(float radius) 
{
  float area = PI * radius * radius;
  printf("Area of Circle: %f\n", area);
}