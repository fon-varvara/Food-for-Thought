//Food for Thought

//1
const fruits = ["apple", "banana", "orange", "strawberry", "mango"];

//2
const vegetables = ["celery", "broccoli", "cabbage", "spinach", "tomato"];

//3
function addFruit(fruit) {
return fruits.push(fruit);
}

//4
function addVeggie(veggie) {
	return vegetables.push(veggie);
}

//5
function eatFruit() {
	let index = Math.floor(Math.random() * fruits.length);
	console.log("You just ate a " + fruits[index]);
}

//6
function eatVeggie() {
	let index = Math.floor(Math.random() * vegetables.length);
	console.log("You just ate a " + vegetables[index]);
}

//7
function mixFruitAndVeggies() {
	let randomFruit = fruits[Math.floor(Math.random() * fruits.length)];
	let randomVeggie = vegetables[Math.floor(Math.random() * vegetables.length)];

	console.log("You just ate a " + randomFruit + " and " + randomVeggie);
}

//8
function fruitForThought(thoughts) {
	let randomFruit = fruits[Math.floor(Math.random() * fruits.length)];

	console.log("Food for thought: " + thoughts + "  like a " + randomFruit);
}

//9
function veggieForThought(thoughts) {
	let randomVeggie = vegetables[Math.floor(Math.random() * vegetables.length)];

	console.log("Food for thought: " + thoughts + "  like a " + randomVeggie);
}

//10
function getFruitList() {
	return fruits;
}

//11
function getVeggieList() {
	return vegetables;
}

//12
function sortFruits() {
	return fruits.sort();
}

//13
function sortVeggies() {
	return vegetables.sort();
}

//14
function reverseFruits() {
	return fruits.reverse();
}

//15
function reverseVeggies() {
	return vegetables.reverse();
}

//16
function shuffleFruits() {
	let length = fruits.length;
	let temp;
	let index;

	while (length > 0) {
		index = Math.floor(Math.random() * length);

		length--;

		temp = fruits[length];
		fruits[length] = fruits[index];
		fruits[index] = temp;
	}
}

//17
function shuffleVeggies() {
	let length = vegetables.length;
	let temp;
	let index;

	while (length > 0) {
		index = Math.floor(Math.random() * length);

		length--;

		temp = vegetables[length];
		vegetables[length] = vegetables[index];
		vegetables[index] = temp;
	}
}

//18
function removeFruitByIndex(index) {
	let removedFruit = null;

	if (index > -1 && index < fruits.length) {
		removedFruit = fruits[index];
		fruits.splice(index, 1);
	}

	return removedFruit;
}

//19
function removeVeggieByIndex(index) {
	let removedVeggie = null;

	if (index > -1 && index < vegetables.length) {
		removedVeggie = vegetables[index];
		vegetables.splice(index, 1);
	}

	return removedVeggie;
}

//20
function findFruitByName(name) {
	let index = fruits.findIndex(function(fruit) {
		return fruit === name;
	})

	if (index > -1) {
		return fruits[index];
	} else {
		return null;
	}
}

//21
function findVeggieByName(name) {
	let index = vegetables.findIndex(function(veggie) {
		return veggie === name;
	})

	if (index > -1) {
		return vegetables[index];
	} else {
		return null;
	}
}

//22
function randomFruit() {
	let randomIndex = Math.floor(Math.random() * fruits.length);
	let fruit = fruits[randomIndex];

	return fruit;
}

//23
function randomVeggie() {
	let randomIndex = Math.floor(Math.random() * vegetables.length);
	let veggie = vegetables[randomIndex];

	return veggie;
}

//24
let numberOfFruits = fruits.length;
let numberOfVeggies = vegetables.length;

//25
let total = numberOfFruits + numberOfVeggies;

//26
let healthy = true;

//27
function isHealthy(food) {
	if (fruits.includes(food) || vegetables.includes(food)) {
		healthy = true;
	} else {
		healthy = false;
	}

	return healthy;
}

//28
function addFruitsAndVeggies(foods) {
	let newFruits = fruits.concat(foods.filter(function(food) {
		return fruits.includes(food) === false;
	}));

	let newVeggies = vegetables.concat(foods.filter(function(food) {
		return vegetables.includes(food) === false;
	}));

	fruits = newFruits;
	vegetables = newVeggies;
}

//29
function getFruitsAndVeggies() {
	return [fruits, vegetables];
}

//30
function divideFruitsAndVeggies(foods) {
	let fruitList = fruits.concat(foods.filter(function(food) {
		return fruits.includes(food) === false;
	}));

	let veggieList = vegetables.concat(foods.filter(function(food) {
		return vegetables.includes(food) === false;
	}));

	let result = {
		fruits: fruitList,
		veggies: veggieList
	}

	return result;
}

//31
function getRandomFruitAndVeggie() {
	let randomFruit = fruits[Math.floor(Math.random() * fruits.length)];
	let randomVeggie = vegetables[Math.floor(Math.random() * vegetables.length)];

	let result = {
		fruit: randomFruit,
		veggie: randomVeggie
	}

	return result;
}

//32
let fruitAndVeggieArray = [
	...fruits,
	...vegetables
];

//33
function getRandomFruitOrVeggie() {
	let randomIndex = Math.floor(Math.random() * fruitAndVeggieArray.length);
	let randomFruitOrVeggie = fruitAndVeggieArray[randomIndex];

	return randomFruitOrVeggie;
}

//34
function getRandomFruitOrVeggieList(number) {
	let result = [];

	while (result.length < number) {
		let randomIndex = Math.floor(Math.random() * fruitAndVeggieArray.length);
		let randomFruitOrVeggie = fruitAndVeggieArray[randomIndex];

		// Avoid duplicates
		if (result.includes(randomFruitOrVeggie) === false) {
			result.push(randomFruitOrVeggie);
		}
	}

	return result;
}

//35
function combineFruitsAndVeggies() {
	return [...fruits, ...vegetables];
}

//36
function sortCombinedFruitsAndVeggies() {
	return [...fruits, ...vegetables].sort();
}

//37
function reverseCombinedFruitsAndVeggies() {
	return [...fruits, ...vegetables].reverse();
}

//38
function shuffleCombinedFruitsAndVeggies() {
	let length = [...fruits, ...vegetables].length;
	let temp;
	let index;

	while (length > 0) {
		index = Math.floor(Math.random() * length);

		length--;

		temp = [...fruits, ...vegetables][length];
		[...fruits, ...vegetables][length] = [...fruits, ...vegetables][index];
		[...fruits, ...vegetables][index] = temp;
	}
}

//39
function findFruitOrVeggieByName(name) {
	let index = [...fruits, ...vegetables].findIndex(function(food) {
		return food === name;
	})

	if (index > -1) {
		return [...fruits, ...vegetables][index];
	} else {
		return null;
	}
}

//40
function removeFruitOrVeggieByIndex(index) {
	let removedFood = null;

	if (index > -1 && index < [...fruits, ...vegetables].length) {
		removedFood = [...fruits, ...vegetables][index];
		[...fruits, ...vegetables].splice(index, 1);
	}

	return removedFood;
}

//41
function removeFruitByName(name) {
	let index = fruits.findIndex(function(fruit) {
		return fruit === name;
	});

	if (index > -1) {
		fruits.splice(index, 1);
		return true;
	} else {
		return false;
	}
}

//42
function removeVeggieByName(name) {
	let index = vegetables.findIndex(function(veggie) {
		return veggie === name;
	});

	if (index > -1) {
		vegetables.splice(index, 1);
		return true;
	} else {
		return false;
	}
}

//43
function removeFruitOrVeggieByName(name) {
	let index = [...fruits, ...vegetables].findIndex(function(food) {
		return food === name;
	});

	if (index > -1) {
		[...fruits, ...vegetables].splice(index, 1);
		return true;
	} else {
		return false;
	}
}

//44
let uniqueFruits = [...new Set(fruits)];
let uniqueVeggies = [...new Set(vegetables)];

//45
function spliceFruitByIndex(index, number) {
	return fruits.splice(index, number);
}

//46
function spliceVeggieByIndex(index, number) {
	return vegetables.splice(index, number);
}

//47
function spliceFruitOrVeggieByIndex(index, number) {
	return [...fruits, ...vegetables].splice(index, number);
}

//48
let randomFruitAndVeggie = [
	fruits[Math.floor(Math.random() * fruits.length)],
	vegetables[Math.floor(Math.random() * vegetables.length)]
];

//49
let randomFruitOrVeggie = [
	fruits[Math.floor(Math.random() * fruits.length)],
	vegetables[Math.floor(Math.random() * vegetables.length)]
][Math.floor(Math.random() * 2)];

//50
function getFruitAndVeggieArray() {
	return [...fruits, ...vegetables];
}