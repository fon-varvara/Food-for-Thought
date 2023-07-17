Public Class FoodForThought
    ' Declare variables
    Dim phrase As String
    Dim means As String

    ' Store phrases and meanings in array
    Dim foodForThought(2000) As Tuple(Of String, String)

Sub Main()
        ' Populate array with phrases and meanings
        foodForThought(0) = New Tuple(Of String, String)("A stitch in time saves nine", "It's better to take care of small problems sooner rather than later")
        foodForThought(1) = New Tuple(Of String, String)("Absence makes the heart grow fonder", "When you are away from someone you love, the love grows stronger")
        foodForThought(2) = New Tuple(Of String, String)("Actions speak louder than words", "It is better to show that you care through actions rather than just talking about it")
        foodForThought(3) = New Tuple(Of String, String)("A bird in the hand is worth two in the bush", "It is better to keep something that you know is yours than to try to obtain something greater and risk possibly losing all of it")
        foodForThought(4) = New Tuple(Of String, String)("As you make your bed, so you must lie in it", "When we cause our own problems we must face the consequences")
        foodForThought(5) = New Tuple(Of String, String)("A watched pot never boils", "When we expect something to happen quickly, it often takes longer")
        foodForThought(6) = New Tuple(Of String, String)("When life gives you lemons, make lemonade", "When faced with a bad situation, make the best of it")
        foodForThought(7) = New Tuple(Of String, String)("What doesn't kill you makes you stronger", "Facing difficult situations makes us stronger")
        foodForThought(8) = New Tuple(Of String, String)("Beggars can't be choosers", "When you are in a desperate situation, you should take whatever help is offered")
        foodForThought(9) = New Tuple(Of String, String)("Look before you leap", "Think carefully before taking any action")
        foodForThought(10) = New Tuple(Of String, String)("Fortune favors the bold", "People who take risks often reap rewards")
        foodForThought(11) = New Tuple(Of String, String)("Don't count your chickens before they hatch", "Don't rely on something until it has actually happened")
        foodForThought(12) = New Tuple(Of String, String)("Haste makes waste", "When you rush, mistakes are more likely to be made")
        foodForThought(13) = New Tuple(Of String, String)("Slow and steady wins the race", "It is better to do something at a steady pace, rather than trying to rush it")
        foodForThought(14) = New Tuple(Of String, String)("It's better to be safe than sorry", "It is better to be cautious and prepared than to not be and regret it later")
        foodForThought(15) = New Tuple(Of String, String)("A penny saved is a penny earned", "Saving money is just as good as earning money")
        foodForThought(16) = New Tuple(Of String, String)("Two wrongs don't make a right", "Making mistakes doesn't justify other people making mistakes")
        foodForThought(17) = New Tuple(Of String, String)("The early bird catches the worm", "When you get an early start, you are in a better position to succeed")
        foodForThought(18) = New Tuple(Of String, String)("A rolling stone gathers no moss", "When you keep moving, you don't become stagnant")
        foodForThought(19) = New Tuple(Of String, String)("No man is an island", "Everyone needs help from other people")
        foodForThought(20) = New Tuple(Of String, String)("Greed is the root of all evil", "When someone is motivated too much by personal gain, it can lead to bad consequences")
        foodForThought(21) = New Tuple(Of String, String)("Great minds think alike", "When two people come up with similar ideas, it is usually a sign of genius")
        foodForThought(22) = New Tuple(Of String, String)("Familiarity breeds contempt", "Spending too much time with someone can make you lose respect for them")
        foodForThought(23) = New Tuple(Of String, String)("An ounce of prevention is worth a pound of cure", "It is better to prevent a problem than to fix it after it has happened")
        foodForThought(24) = New Tuple(Of String, String)("A chain is only as strong as its weakest link", "When a group of people are working together, the success of the group depends on the weakest member")
        foodForThought(25) = New Tuple(Of String, String)("A wolf in sheep's clothing", "Someone who pretends to be something they are not")
        ' ...

' Loop through array and output to console
        For i As Integer = 0 To foodForThought.Length - 1
            phrase = foodForThought(i).Item1
            means = foodForThought(i).Item2
            Console.WriteLine("Phrase: " & phrase & vbCrLf & "Meaning: " & means & vbCrLf)
        Next
    End Sub

End Class