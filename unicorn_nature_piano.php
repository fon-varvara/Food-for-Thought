<?php 

//1
$food = array('strawberries', 'chocolate', 'apples', 'pasta', 'salmon');
 
//2
function randomFood() {
  global $food;
  return $food[array_rand($food)];
}
 
//3
echo 'Random food of the day: '.randomFood();
 
//4
echo "<br><br>";
 
//5
$thought = array('Life is short, make every moment count.','Always strive to be better than you were yesterday.','Celebrate your wins, no matter how small.','Don’t be scared to fail, because failure is part of the learning process.');
 
//6
function randomThought() {
  global $thought;
  return $thought[array_rand($thought)];
}
 
//7
echo 'Food for Thought: '.randomThought();

//8
echo "<br><br>";
 
//9
$array1 = array("Carrots", "Beans", "Celery", "Onions");
$array2 = array("Fries", "Potatoes", "Butter", "Cheese");
 
//10
$array3 = array_merge($array1, $array2);
 
//11
function shuffleArray() {
  global $array3;
  shuffle($array3);
  echo implode(", ", $array3);
}
 
//12
echo 'Random Food and Ingredients: ';
shuffleArray();
 
//13
echo "<br><br>";
 
//14
$veggies = array("Tomatoes", "Peppers", "Carrots", "Onions", "Mushrooms");
 
//15
foreach($veggies as $veg) {
	echo "I love ".$veg."!<br>";
}

//16
echo "<br>";
 
//17
$fruits = array("Apples", "Pears", "Oranges", "Kiwis", "Grapes");
 
//18
$fruitsString = implode(", ", $fruits);
 
//19
echo 'My favorite fruits are: '.$fruitsString;
 
//20
echo "<br><br>";
 
//21
$book = array("Divergent", "Fifty Shades of Grey", "Gone Girl", "The Hunger Games");
 
//22
function randomBook() {
  global $book;
  return $book[array_rand($book)];
}
 
//23
echo 'My random book of the day is: '.randomBook();
 
//24
echo "<br><br>";
 
//25
$meals = array("pizza", "pasta", "burritos", "tacos", "sandwiches");
 
//26
foreach($meals as $meal) {
	echo "I would love to eat some ".$meal."!<br>";
}

//27
echo "<br>";
 
//28
$desserts = array("Ice Cream", "Cookies", "Cake", "Pie", "Cheesecake");
 
//29
$dessertsString = implode(", ", $desserts);
 
//30
echo 'My favorite desserts are: '.$dessertsString;

//31
echo "<br><br>";
 
//32
$soup = array("Tomato Soup", "Broccoli Soup", "Chicken Soup", "Miso Soup", "Clam Chowder");
 
//33
shuffle($soup);
 
//34
echo "My favorite soups are: ".implode(", ", $soup);
 
//35
echo "<br><br>";
 
//36
$meat = array("Salmon", "Steak", "Lamb", "Chicken", "Pork");
 
//37
function randomMeat() {
  global $meat;
  return $meat[array_rand($meat)];
}
 
//38
echo 'Random protein of the day: '.randomMeat();

//39
echo "<br><br>";
 
//40
$drinks = array("Coffee", "Tea", "Soda", "Juice", "Smoothies");
 
//41
$drinksString = implode(", ", $drinks);
 
//42
echo 'My favorite drinks are: '.$drinksString;
 
//43
echo "<br><br>";
 
//44
$breakfast = array("Pancakes", "Omelet", "Cereal", "Fruit", "Toast");
 
//45
foreach($breakfast as $br) {
	echo "I love ".$br." for breakfast!<br>";
}

//46
echo "<br>";
 
//47
$snacks = array("Chips", "Popcorn", "Pretzels", "Crackers", "Nuts");
 
//48
shuffle($snacks);
 
//49
echo "My favorite snacks are: ".implode(", ", $snacks);
 
//50
echo "<br><br>";
 
//51
$chocolate = array("Milky Way", "Snickers", "Hershey's", "Twix", "Kit Kat");
 
//52
function randomChocolate() {
  global $chocolate;
  return $chocolate[array_rand($chocolate)];
}
 
//53
echo 'Random chocolate of the day: '.randomChocolate();
 
//54
echo "<br><br>";
 
//55
$veganFood = array("Tofu", "Vegetables", "Beans", "Nuts", "Grains");
 
//56
$veganFoodString = implode(", ", $veganFood);
 
//57
echo 'My favorite vegan foods are: '.$veganFoodString;

//58
echo "<br><br>";
 
//59
$dairy = array("Cheese", "Milk", "Yogurt", "Ice Cream", "Butter");
 
//60
foreach($dairy as $dair) {
	echo "I love ".$dair."!<br>";
}

//61
echo "<br>";
 
//62
$vegetarian = array("Pasta", "Tofu", "Nuts", "Beans", "Grains");
 
//63
shuffle($vegetarian);
 
//64
echo "My favorite vegetarian foods are: ".implode(", ", $vegetarian);
 
//65
echo "<br><br>";
 
//66
$dishes = array("Casserole", "Stir Fry", "Chili", "Lasagna", "Soup");
 
//67
function randomDish() {
  global $dishes;
  return $dishes[array_rand($dishes)];
}
 
//68
echo 'Random dish of the day: '.randomDish();
 
//69
echo "<br><br>";
 
//70
$salad = array("Lettuce", "Tomatoes", "Carrots", "Cucumbers", "Onions");
 
//71
$saladString = implode(", ", $salad);
 
//72
echo 'My favorite salad ingredients are: '.$saladString;

//73
echo "<br><br>";
 
//74
$rice = array("Jasmine Rice", "Basmati Rice", "Brown Rice", "Sushi Rice", "Wild Rice");
 
//75
foreach($rice as $ric) {
	echo "I love ".$ric."!<br>";
}

//76
echo "<br>";
 
//77
$cookies = array("Chocolate Chip", "Sugar Cookies", "Oatmeal", "Peanut Butter", "Gingerbread");
 
//78
shuffle($cookies);
 
//79
echo "My favorite cookies are: ".implode(", ", $cookies);
 
//80
echo "<br><br>";
 
//81
$sushi = array("California Rolls", "Shrimp Tempura", "Dragon Rolls", "Tuna Rolls", "Caterpillar Rolls");
 
//82
function randomSushi() {
  global $sushi;
  return $sushi[array_rand($sushi)];
}
 
//83
echo 'Random sushi of the day: '.randomSushi();
 
//84
echo "<br><br>";
 
//85
$dumplings = array("Pot Stickers", "Pierogies", "Egg Rolls", "Gyoza", "Shumai");
 
//86
$dumplingsString = implode(", ", $dumplings);
 
//87
echo 'My favorite dumplings are: '.$dumplingsString;

//88
echo "<br><br>";
 
//89
$smoothie = array("Strawberry", "Mango", "Peach", "Banana", "Blueberry");
 
//90
foreach($smoothie as $smooth) {
	echo "I love ".$smooth." smoothies!<br>";
}

//91
echo "<br>";
 
//92
$pie = array("Apple Pie", "Chocolate Pie", "Cherry Pie", "Pecan Pie", "Blueberry Pie");
 
//93
shuffle($pie);
 
//94
echo "My favorite pies are: ".implode(", ", $pie);
 
//95
echo "<br><br>";
 
//96
$nuts = array("Cashews", "Pecans", "Walnuts", "Almonds", "Pistachios");
 
//97
function randomNut() {
  global $nuts;
  return $nuts[array_rand($nuts)];
}
 
//98
echo 'Random nut of the day: '.randomNut();
 
//99
echo "<br><br>";
 
//100
$fruitSalad = array("Apples", "Pears", "Oranges", "Kiwis", "Grapes");
 
//101
$fruitSaladString = implode(", ", $fruitSalad);
 
//102
echo 'My favorite fruit salad ingredients are: '.$fruitSaladString;

//103
echo "<br><br>";
 
//104
$sauce = array("Marinara", "Alfredo", "Pesto", "Garlic", "Teriyaki");
 
//105
foreach($sauce as $sauc) {
	echo "I love ".$sauc." sauce!<br>";
}

//106
echo "<br>";
 
//107
$bread = array("Sourdough", "Rye", "Wheat", "White", "Biscuits");
 
//108
shuffle($bread);
 
//109
echo "My favorite breads are: ".implode(", ", $bread);
 
//110
echo "<br><br>";
 
//111
$taco = array("Beef", "Chicken", "Fish", "Veggie", "Black Bean");
 
//112
function randomTaco() {
  global $taco;
  return $taco[array_rand($taco)];
}
 
//113
echo 'Random taco filling of the day: '.randomTaco();
 
//114
echo "<br><br>";
 
//115
$dip = array("Hummus", "Salsa", "Cheese", "Guacamole", "Yogurt");
 
//116
$dipString = implode(", ", $dip);
 
//117
echo 'My favorite dips are: '.$dipString;

//118
echo "<br><br>";
 
//119
$spices = array("Garlic", "Cumin", "Cinnamon", "Oregano", "Paprika");
 
//120
foreach($spices as $spice) {
	echo "I love ".$spice."!<br>";
}

//121
echo "<br>";
 
//122
$sandwich = array("Grilled Cheese", "Turkey Club", "BLT", "Ham and Cheese", "PB&J");
 
//123
shuffle($sandwich);
 
//124
echo "My favorite sandwiches are: ".implode(", ", $sandwich);
 
//125
echo "<br><br>";
 
//126
$muffin = array("Blueberry", "Banana", "Apple", "Cranberry", "Chocolate");
 
//127
function randomMuffin() {
  global $muffin;
  return $muffin[array_rand($muffin)];
}
 
//128
echo 'Random muffin of the day: '.randomMuffin();
 
//129
echo "<br><br>";
 
//130
$salmon = array("Lemon Pepper", "Garlic Herb", "Honey Mustard", "Teriyaki", "Coconut Curry");
 
//131
$salmonString = implode(", ", $salmon);
 
//132
echo 'My favorite salmon recipes are: '.$salmonString;

//133
echo "<br><br>";
 
//134
$dinner = array("Pasta", "Pizza", "Curry", "Stir Fry", "Chili");
 
//135
foreach($dinner as $din) {
	echo "I love ".$din." for dinner!<br>";
}

//136
echo "<br>";
 
//137
$yogurt = array("Plain", "Honey", "Maple", "Vanilla", "Chocolate");
 
//138
shuffle($yogurt);
 
//139
echo "My favorite yogurts are: ".implode(", ", $yogurt);
 
//140
echo "<br><br>";
 
//141
$candy = array("Snickers", "Reese's", "Jolly Rancher", "Twix", "Milky Way");
 
//142
function randomCandy() {
  global $candy;
  return $candy[array_rand($candy)];
}
 
//143
echo 'Random candy of the day: '.randomCandy();
 
//144
echo "<br><br>";
 
//145
$bbq = array("Ribs", "Brisket", "Chicken", "Pork", "Sausage");
 
//146
$bbqString = implode(", ", $bbq);
 
//147
echo 'My favorite BBQ dishes are: '.$bbqString;

//148