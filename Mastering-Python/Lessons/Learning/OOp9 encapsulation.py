#  object oriented programming :   ENCAPSULATION 
# _____________________________________________________________

#  ENCAPSULATION : 
#                  restrict access to the data stored in attributes and methods 
# _______________________________________________________________________________

# PUBLIC : 
#            every atribute and method that we used so far is PUBLIC 
#            attributes and methods can be modified and run from everywhere 
#             inside our outsid the class 
# _________________________________________________________

# PROTECTED :
#              attributes and methods can be accessed from whithin the class and sub classes
#               attributes and methods prefixed with one underscore_
# _______________________________________________________________________________________

# PRIVATE : 
#           attributes and methods can be accessed from within the class  or object only
#            attributes cannot  be modified from outside the class
#            attributes and methods prefixed with two underscore__
# -------------------------------------------------------------------------------------------

#  ATTRIBUTES = VARIABLES = PROPERTIES
# ___________________________________________



class member:
    def __init__(self , name):
        self.name = name
    
one = member("mouhamed")
print(one.name)
one.name = "khalid"
print(one.name)

print("=" * 50)

class member:
    def __init__(self , name):

        self._name = name       # Protected
    
one = member("mouhamed")
print(one._name)
one._name = "khalid"
print(one._name)        #  Sadness we can access to the private out the class because python hasn't the properties of protected as other language 
#  but you should tell who works with you to this is protected opertie

print(">" * 50)

class member:
    def __init__(self , name):

        self.__name = name       # Private 

    def say_hello(self):   # the method xho access to the private operty
        return f"Hello {self.__name}"  
    
one = member("mouhamed")
# print(one.__name)  
# here the output show you error because it is private properties , so if you whant to access to hm you shoud craete a method  who access  to the private operty

print(one.say_hello())  
