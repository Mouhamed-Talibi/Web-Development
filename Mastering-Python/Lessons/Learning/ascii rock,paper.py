import random

# ----------------------------------------------
ascii_rock = """
    _______
---'   ____)
      (_____)
      (_____)
      (____)
---.__(___)
"""

ascii_paper = """
     _______
---'    ____)____
           ______)
          _______)
         _______)
---.__________)
"""

ascii_scissors = """
    _______
---'   ____)____
          ______)
       __________)
      (____)
---.__(___)
"""
# _______________________________________________________________________

print(" Welcome to the rock , paper , scisors :) ")
user_input = input("Press 'enter' to continue or type  'help' for the roles\n ").strip().lower()

help = """
        ***  THE RULES ***
    1- you choose and the computer choose 
    2- rock smashes scissors => rock win
    3- scissors cut paper => scissors win 
    4- paper covers rock => paper win
    ------------------------------------
"""

if user_input == "help" :
    print(help)

# ask user to choose :
user_choice = input("Write your choice { rock , paper , scissors } : \n")

# check the user_choice is in list game  :
list_game = ["rock" ,"paper" ,"scissors"]
if user_choice not in list_game:
    print("invalid choice , please run the program and choose one of (rock , paper , scissors ) :)")
else:
    
    # transfer the user choice in ascii :
    if user_choice == "rock" :
        print(f"you choose :\n {ascii_rock}")
    elif user_choice == "paper" :
        print(f"you choose : \n {ascii_paper}")
    else :
        print(f"you choose : \n {ascii_scissors}")

# random choice of the computer :
computer_choice = random.choice(["rock" , "paper" , "scissors"])

if computer_choice == "rock" :
    print(f"computer choose : \n {ascii_rock}")
elif computer_choice == "paper":
    print(f"computer choose : \n {ascii_paper}")
else:
    print(f"computer choose : \n {ascii_scissors}")


# check who is the winner ? :

if user_choice == computer_choice :
    print("Oops! it is  a tie  , no one win -_^")
elif (
    (user_choice == "paper" and computer_choice == "rock")
       or (user_choice == "rock" and computer_choice == "scissors") 
       or (user_choice == "scissors" and computer_choice == "paper")
       ):
    print("Congratulations , you win :) 👏")

else : 
    print("Sorry , you lost ! try again 🤷‍♀️")