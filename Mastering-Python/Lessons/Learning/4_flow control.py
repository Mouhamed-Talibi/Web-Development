#  What is Flow Control ? :
"tell Python to make intelligent decisions about what code to run, what code to skip, and what code to repeat based on the values it has."

# Boleean values : 
"""
the Boolean data type has only two values: True and False. (Boolean is capitalized because the data type is named after mathematician George 
Boole.)  """

true_value = True 
print(true_value)
false_value = False 
print(false_value)

#  Comparison operators : 
"""
==      : Equal 
!=      : Not equal 
>=      : Greather than or equal 
<=      : less than or equal 
<       : less 
>       : greather 
   -> These operators evaluate to True or False depending on the values you give them. Let's try some operators now, starting with == and !=."""

42 == 42            # -> 'true' 
'hello' != 7        # -> 'false'

#  THE DIFFERENCE BETWEEN THE == AND = OPERATORS 
"""
The ' == '   operator (equal to) asks whether two values are the same as each other.
The ' = '   operator (assignment) puts the value on the right into the variable on the left
"""

# Boolean operators : 
"""
The three Boolean operators (and, or, and not) are used to compare Boolean values. Like comparison operators, they evaluate these expressions 
down to a Boolean value.  """

# binary boolean operators :
"""
The and and or operators always take two Boolean values (or expressions), so they're considered binary operators. The and operator evaluates an 
expression to True if both Boolean values are True; otherwise, it evaluates to False.  """
True and True       # -> True 
False and True      # -> False  
True and False      # -> False 
False and False     # -> False 

"""
the or operator evaluates an expression to True if either of the two Boolean values is True. If both are False, it evaluates to False"""
False or False     # -> False
True or False      # ->  True 
True or True       # ->  True 
False or True      # ->  True 

# the NOT operator :
"""
Unlike and and or, the not operator operates on only one Boolean value (or expression). The not operator simply evaluates to the opposite 
Boolean value. """

not True   # -> False  
not False  # -> True 

(4 < 5) and (3 > 1)
(1 != 8) or (2 == 2)
5 + 5 == 10 and not 5 + 4 == 8 or 10 // 2 == 1 


# elements of flow control : 
"conditions : "
"           condition is just a more specific name in the context of flow control statements. "
"           ->  always evaluate down to a Boolean value, True or False. "   

# block of code : 
"""
Lines of Python code can be grouped together in blocks. You can tell when a
block begins and ends from the indentation of the lines of code. There are three
rules for blocks.

  1. Blocks begin when the indentation increases.
  2. Blocks can contain other blocks.
  3. Blocks end when the indentation decreases to zero or to a containing block's indentations 
"""
print("-" * 10)

# simple exemple of block of code and flow control : 
name = input("write you name please : \n").lower().strip()
if name == "mouhamed" :
   print("Correct name ✔")
   print(name) 

else:
   print("Sorry , please try again :(  ")
   
# block in another block :
age = int(input("write your age please  :\n"))
departement = input("write your departement : \n")

if name : 
   if age > 16 :
      print("hello" , name )
      print("You have A gift from Us , Enjoty playing vedio games for free this day 👍")
      
      if departement == "software engineer" : 
         print("Wow , You have A week for playing for free , Enjoy with us ")
else:
   print("enter your name please . ") 
   
# flow control statements  : 
"if statement : "

""" 
   -> an if statement could be read as,  If this condition is true, execute the code in the clause. 
In Python, an if statement consists of the following:
   -> The if keyword
   -> A condition (that is, an expression that evaluates to True or False)
   -> A colon
Starting on the next line, an indented block of code (called the if clause)
   ! -> All flow control statements end with a colon and are followed by a new block of code (the clause)
"""

"else statement : "

"""
An if clause can optionally be followed by an else statement. The else clause is executed only when the if statement's condition is False.
an else statement could be read as, “If this condition is true, execute this code. Or else, execute that code.” 
-> an else statement always consists of the following:
   - The else keyword
   - A colon
   - Starting on the next line, an indented block of code (called the else clause)
"""

"elif statement : "

"""
The elif statement is an “else if” statement that always follows an if or another elif statement. It provides another condition that is checked 
only if any of the previous conditions were False.
-> In code, an elif statement always consists of the following:
   - The elif keyword
   - A condition (that is, an expression that evaluates to True or False)
   - A colon
   - Starting on the next line, an indented block of code (called the elif clause)
"""
# exepmle : 
name = input("write your name please : \n")
note = int(input("write your note please : \n"))

if name == "mouhamed" : 
   print("hi Mohamed , here you are my Friend ")
elif note < 10 : 
   print("Ooops , I think that you should more hard work ok ? ")
elif note >= 10 : 
   print("Nice , Continue on this way , you will do great Bro ✔")
else:
   print("Sorry , Nothing For You , Have a good Tilme ")