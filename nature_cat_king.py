import random

# Create a class to represent a food
class Food:
  def __init__(self, name, calories, carbs):
    self.name = name
    self.calories = calories
    self.carbs = carbs

# Create list of food
food_list = []
food_list.append(Food("Apple", 95, 25))
food_list.append(Food("Banana", 105, 27))
food_list.append(Food("Yogurt", 125, 24))
food_list.append(Food("Cereal", 110, 32))
food_list.append(Food("Salad", 75, 16))

# Create a function to generate a random meal
def generateRandomMeal():
  meal_calories = 0
  meal_carbs = 0
  meal_items = []

  # Generate 3 random items from food list
  while meal_calories < 250 and meal_carbs < 75:
    food = random.choice(food_list)
    meal_calories = meal_calories + food.calories
    meal_carbs = meal_carbs + food.carbs
    meal_items.append(food.name)

  # Print outmeal information
  print("Random meal: " + ', '.join(meal_items))
  print("Calories: " + str(meal_calories))
  print("Carbs: " + str(meal_carbs))

# Call function to generate random meal
generateRandomMeal()

# Create a function to generate a healthy meal
def generateHealthyMeal():
  meal_calories = 0
  meal_carbs = 0
  meal_items = []

  # Generate 3 items from food list that meet calorie and carb requirements
  while meal_calories < 250 and meal_carbs < 75:
    # Choose random food item 
    food = random.choice(food_list)
    # Check if food meets calorie and carb requirements for the meal
    if (meal_calories + food.calories < 250) and (meal_carbs + food.carbs < 75):
      meal_calories = meal_calories + food.calories
      meal_carbs = meal_carbs + food.carbs
      meal_items.append(food.name)
    
  # Print out meal information
  print("Healthy meal: " + ', '.join(meal_items))
  print("Calories: " + str(meal_calories))
  print("Carbs: " + str(meal_carbs))

# Call function to generate healthy meal
generateHealthyMeal()