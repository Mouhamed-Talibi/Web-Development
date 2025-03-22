#  create your own function:

def function_name():
    print("hello my favourite friend ")
    # do this
    #  
# to on the function you should colled it 
function_name()
print("=" * 30)

# function => parametrs and arguments :
a , b ,c = "med" , "achraf" , "prince"
def sayhello():
    print(f"hello {a}\nhello  {b}\nhello {c}")
sayhello()
print("=" * 30)

# for arguments :
def howareyou(name):
    print("how are you ")

howareyou("mouhamed")
# howareyou : is the function 
# "moamed" : is the argument
# name : is the parameter
print("=" * 30)

def addition(n1 ,n2):
    if n1 or n2 != int:
        print("the input is not a number, please try again")
    else:

        print(int(n1) + int(n2))

addition(564 , 42)
print("=" * 30)

# function with input users:
name = input("enter your name\n")
age = input("entrer your age please\n")

def meet():
    print(f"hello {name} , you are {age} years old")
meet()