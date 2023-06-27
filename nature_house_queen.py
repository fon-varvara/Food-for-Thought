# FILE: Food for Thought

# An array to store the food items
food_items = []

# A function to add food items to the array
def add_food_item(item):
  food_items.append(item)

# A function to remove food items from the array
def remove_food_item(item):
  food_items.remove(item)

# A function to calculate the total cost of the food items
def calculate_total_cost():
  total = 0
  for item in food_items:
    total += item.cost
  return total

# A function to show the contents of the food items array
def show_food_items():
  for item in food_items:
    print(item.name)

# A class to represent individual food items
class FoodItem:
  def __init__(self, name, cost):
    self.name = name
    self.cost = cost

# Create some food items
bread = FoodItem("Bread", 2.50)
cheese = FoodItem("Cheese", 5.00)

# Add food items to the array
add_food_item(bread)
add_food_item(cheese)

# Show the contents of the array
show_food_items()

# Calculate the total cost
total_cost = calculate_total_cost()
print("Total cost:", total_cost)

# Remove a food item
remove_food_item(bread)

# Show the contents of the array
show_food_items()

# Calculate the total cost
total_cost = calculate_total_cost()
print("Total cost:", total_cost)