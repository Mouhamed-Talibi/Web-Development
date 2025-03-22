print("welcome to the game :) ")
name = input("write your name please :\n").strip().lower()
help =  input(f"do you want to know the idea of this game .? :\n")
if help == "yes":
    print("""the game is :
          1 , you type any number to calculat in multiplication
          2 , you write sentences and you choose if you want to store them in a file 
          3 , create data base and store your info""")

choice = int(input("choose what you want to do first : 1 ,2 or 3"))
if choice != int:
    raise ValueError
       