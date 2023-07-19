#include <iostream>
#include <string>

using namespace std;

class FoodForThought 
{
public:
	FoodForThought(string message);
	void printMessage();
	
private:
	string message;
};

FoodForThought::FoodForThought(string m)
{
	message = m;
}

void FoodForThought::printMessage()
{
	cout << message << endl;
}

int main()
{
	string message = "Every moment is an opportunity to make a new beginning.";
	FoodForThought food(message);
	food.printMessage();
	
	string message1 = "The beginning is the most important part of the work.";
	FoodForThought food1(message1);
	food1.printMessage();
	
	string message2 = "What you get by achieving your goals is not as important as what you become by achieving your goals.";
	FoodForThought food2(message2);
	food2.printMessage();
	
	string message3 = "The world is changed by your example, not by your opinion.";
	FoodForThought food3(message3);
	food3.printMessage();
	
	string message4 = "The trick is to enjoy life. Don't wish away your days, waiting for better ones ahead.";
	FoodForThought food4(message4);
	food4.printMessage();
	
	string message5 = "If you want to live a happy life, tie it to a goal, not to people or objects.";
	FoodForThought food5(message5);
	food5.printMessage();
	
	string message6 = "We can't help everyone, but everyone can help someone.";
	FoodForThought food6(message6);
	food6.printMessage();
	
	string message7 = "You are the only one who can use your ability; it is an earthquake that can shake the world.";
	FoodForThought food7(message7);
	food7.printMessage();
	
	string message8 = "The most important thing in life is to learn how to give out love, and to let it come in.";
	FoodForThought food8(message8);
	food8.printMessage();
	
	string message9 = "The best way to predict the future is to create it.";
	FoodForThought food9(message9);
	food9.printMessage();
	
	string message10 = "It takes courage to grow up and become who you really are.";
	FoodForThought food10(message10);
	food10.printMessage();
	
	string message11 = "Life's most persistent and urgent question is: 'What are you doing for others?";
	FoodForThought food11(message11);
	food11.printMessage();
	
	string message12 = "Success is not final, failure is not fatal: it is the courage to continue that counts.";
	FoodForThought food12(message12);
	food12.printMessage();
	
	string message13 = "The highest form of wisdom is kindness.";
	FoodForThought food13(message13);
	food13.printMessage();
	
	string message14 = "If you want to go fast, go alone. If you want to go far, go together.";
	FoodForThought food14(message14);
	food14.printMessage();
	
	string message15 = "The noblest pleasure is the joy of understanding.";
	FoodForThought food15(message15);
	food15.printMessage();
	
	string message16 = "Opportunity is missed by most people because it is dressed in overalls and looks like work.";
	FoodForThought food16(message16);
	food16.printMessage();
	
	string message17 = "Knowledge speaks, but wisdom listens.";
	FoodForThought food17(message17);
	food17.printMessage();
	
	string message18 = "The greatest use of a life is to spend it on something that will outlast it.";
	FoodForThought food18(message18);
	food18.printMessage();
	
	string message19 = "If you want to make a difference, start by being the difference.";
	FoodForThought food19(message19);
	food19.printMessage();
	
	string message20 = "The future belongs to those who prepare for it today.";
	FoodForThought food20(message20);
	food20.printMessage();
	
	return 0;
}