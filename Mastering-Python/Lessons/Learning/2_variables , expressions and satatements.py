#  data types : 
" a data type : is  is a category for values, and every value belongs to exactly one data type."

"""
data type                              |        exemple 
integers                               ->       1 24 78178 910
floating-point numbers                 ->       15.89 81.617 18.167 
strings                                ->       hello , aa , human , also , called , characters """

# string concatenation and replication : 
'alice' + 'bob'                                             # ->  concatenation 
"mouhamed" * 5                                              # ->  replication 


# storing values in varaibles : 
" a variable : is like a box in the computer's memory where you can store a single value. we save data to variable to use it when we need it "

"assignement statement for variables is = "
variable = "my name is mouhamed" 
variable2 = 24 
variable3 = 15.929 
" When a new value is assigned to a   ( variable ) , the old one is forgotten. " 

# rule of varubales names : 
"""
1. It can be only one word.
2. It can use only letters, numbers, and the underscore (_) character.
3. It can't begin with a number. 
   -> A good variable name describes the data it contains.  + a descriptive name will help make your code more readable  """
   
# first program :

hello = print("hello World")
print("What Is Your Name ? ")
name = input() 
print("Is nice tp meet you " + name)
length = len(name)
print("the length of your name is  : " ,  str(length) )
age = int(input("how many years old ? ") )
print("you will be " +  str(age+ 1) + " in the next year." ) 