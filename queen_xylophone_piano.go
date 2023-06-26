package main

import (
	"fmt"
	"math"
)

func main() {
	//1. Food for thought
	fmt.Println("Food for thought: Anything is possible with a never-give-up attitude.")

	//2. Develop a logic to find the sum of two numbers
	num1 := 5
	num2 := 10
	sum := num1 + num2
	fmt.Println("The sum of", num1, "and", num2, "is", sum)

	//3. Develop a logic to check if a number is prime or not
	num := 7
	flag := true
	for i := 2; i <= int(math.Sqrt(float64(num))); i++ {
		if num%i == 0 {
			flag = false
			break
		}
	}
	if flag {
		fmt.Println(num, "is a Prime number")
	} else {
		fmt.Println(num, "is not a Prime number")
	}

	//4. Develop a logic to find the maximum of three numbers
	a := 10
	b := 7
	c := 8
	max := a
	if b > max {
		max = b
	}
	if c > max {
		max = c
	}
	fmt.Println("Maximum of", a, ",", b, "and", c, "is", max)

	//5. Develop a logic to generate a Fibonacci series
	fmt.Print("Fibonacci series of length 5: ")
	n := 5
	first := 0
	second := 1
	fmt.Print(first, ",", second, ",")
	for i := 2; i < n; i++ {
		next := first + second
		fmt.Print(next, ",")
		first = second
		second = next
	}
	fmt.Println()

	//6. Develop a logic to check if a number is an armstrong number or not
	numArm := 407
	check := 0
	ori := numArm
	for numArm > 0 {
		r := numArm % 10
		check += r * r * r
		numArm /= 10
	}
	if check == ori {
		fmt.Println(ori, "is an Armstrong number")
	} else {
		fmt.Println(ori, "is not an Armstrong number")
	}

	//7. Develop a logic to calculate the factorial of a number
	factNum := 4
	factorial := 1
	for i := 1; i <= factNum; i++ {
		factorial = factorial * i
	}
	fmt.Println("Factorial of", factNum, "is", factorial)

	//8. Develop a logic to convert a given number from decimal to binary
	dec := 36
	fmt.Print("Binary of", dec, "is ")
	binary := 0
	base := 1
	for dec > 0 {
		rem := dec % 2
		binary = binary + rem*base
		dec /= 2
		base *= 10
	}
	fmt.Println(binary)

	//9. Develop a logic to convert a given number from binary to decimal
	bin := 101
	fmt.Print("Decimal of", bin, "is ")
	decimal, base := 0, 1
	for bin > 0 {
		rem := bin % 10
		decimal = decimal + rem*base
		bin /= 10
		base *= 2
	}
	fmt.Println(decimal)

	//10. Develop a logic to calculate the GCD of two numbers
	aGCD := 56
	bGCD := 24
	for bGCD > 0 {
		rem := aGCD % bGCD
		aGCD = bGCD
		bGCD = rem
	}
	fmt.Println("GCD of", aGCD, "and", bGCD, "is", aGCD)
}