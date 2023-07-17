import UIKit

//MARK: - Food for Thought

//Meal Ideas
let breakfastIdeas = ["Toast", "Oatmeal", "Yogurt", "Fruit and Cheese", "Quiche", "Smoothie", "Avocado Toast", "Omelette"]
let lunchIdeas = ["Salad", "Sandwich", "Pita and Hummus", "Stir Fry", "Soup", "Wraps", "Tacos", "Quesadilla"]
let dinnerIdeas = ["Pasta", "Casserole", "Roast", "Curry", "Stir Fry", "Grilled Cheese", "Veggie Burgers", "Pizza"]

//Snack Ideas
let fruitIdeas = ["Apples", "Bananas", "Oranges", "Pears", "Grapes", "Cherries", "Strawberries", "Kiwi"]
let veggieIdeas = ["Carrots", "Celery", "Cucumbers", "Bell Peppers", "Corn", "Zucchini", "Broccoli", "Brussels Sprouts"]
let saltyIdeas = ["Pretzels", "Popcorn", "Potato Chips", "Crackers", "Nuts", "Sunflower Seeds", "Cheese Cubes", "Tortilla Chips"]

//Food Preparation
func makeSandwich(bread: String, filling:String) -> String {
    return "Your \(filling) sandwich on \(bread) is ready!"
}

func makeSmoothie(fruits: [String]) -> String {
    return "Your smoothie with \(fruits.joined(separator: ", ")) is ready!"
}

func bakeCookie(flavor: String) -> String {
    return "Your \(flavor) cookie is ready!"
}

//Mealtime
enum MealType {
    case breakfast, lunch, dinner, snack
}

func serveMeal(mealType: MealType, choice: String) -> String {
    switch mealType {
    case .breakfast:
        return "Here is your \(choice) for breakfast!"
    case .lunch:
        return "Here is your \(choice) for lunch!"
    case .dinner:
        return "Here is your \(choice) for dinner!"
    case .snack:
        return "Here is your \(choice) for a snack!"
    }
}

//Healthy Eating
func countCalories(calories: Int) -> String {
    let calorieLimit = 500
    if calories > calorieLimit {
        return "Your snack is above the recommended calorie limit."
    } else {
        return "Your snack is at a healthy calorie level."
    }
}

//Food Waste
func repurposeLeftovers(leftovers: [String]) -> String {
    return "Try these recipes with your leftovers: \(leftovers.joined(separator: ", "))!"
}

//Food Safety
enum Temperature {
    case cold, hot
}

func storeFood(foodType: String, temperature: Temperature) -> String {
    switch temperature {
    case .cold:
        return "Store your \(foodType) in the refrigerator!"
    case .hot:
        return "Keep your \(foodType) warm in the oven!"
    }
}