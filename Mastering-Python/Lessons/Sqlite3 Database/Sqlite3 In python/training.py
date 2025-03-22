name = input("write your name please : \n ").lower().strip()
age = int(input("writ your age please : \n").lower().strip())
parents = input("write names of your parents : \n  ").lower().strip()
note_english = int(input("write your english note :"))
note_math = int(input("write your math note :"))

print("-" * 24)

print(f"Hello , my name is {name} , i am {age} years old , My parents name is  {parents}")
print(f"My note in Rnglish is {note_english} and my note in math is {note_math}")