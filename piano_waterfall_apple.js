// Create a new array to store our food items
let foodItems = [];

// Function to add food items to our array
const addFoodItem = (item) => {
   foodItems.push(item);
   console.log(`${item} was successfully added.`);
};

// Function to remove food items from our array
const removeFoodItem = (item) => {
   let index = foodItems.indexOf(item); 
   let removedItem = foodItems.splice(index, 1); 
   console.log(`${removedItem} was successfully removed.`);
};

// Function to calculate total calories for all food items in our array
const calculateTotalCalories = () => {
   let totalCalories = 0;
   foodItems.forEach(item => {
      totalCalories += item.cal;
   });
   console.log(`Total calories in food items: ${totalCalories}`);
};

// Function to display all food items in our array
const displayFoodItems = () => {
   console.log("Food Items:");
   foodItems.forEach(item => {
      console.log(`- ${item.name} - ${item.cal}`);
   });
};

// Let's play around with our functions
addFoodItem({name: 'apple', cal: 50});
addFoodItem({name: 'orange', cal: 80});
addFoodItem({name: 'banana', cal: 90});
removeFoodItem({name: 'apple', cal: 50});
displayFoodItems();
calculateTotalCalories();