#  OBJECT ORIENTED PROGRAMMING :  => MAGIC (DUNDER) METHODS
# ----------------------------------------------------------6

#   eveything in pyhthon is =>  OBJECT 
#   __init__  CALLED AUTOMATICALY WHEN INSTNTAITING CLASS
#   self.__class__  the class tp which a class instance belongs
#   __str__ GIVES A HUMAN_READABLE OUTPUT THE OBJECT 
#   __len__ retuens the length of the container 
            # called when we use the built-in len() function on the object 

# ______________________________________________________________________________


class skill:
    def __init__(self):
        self.skills = ["html" ,"css" ,"pyhton"]

    def __str__(self):
        return f" this is my skills {self.skills}"
    
    def __len__(self):
        return len(self.skills)
    
profile = skill()
print(profile)

print(len(profile))

profile.skills.append("MySql")
profile.skills.append("java")

print(len(profile))

print("\n" , "=" * 60)


# print(profile.__class__)

# print("=" * 50)

# integer = 12
# my_str = "mouhamed"
# print(type(integer))
# print(integer.__class__)
# print(dir(int))

# print("=" * 50)

# print(type(my_str))
# print(my_str.__class__)
# print(str.upper(my_str))
# # print(dir(str))

# print("=" * 50)
# --------------------------------------------------------------

#    OBJECT ORIENTED PROGRAMMING :   INHERITANCE 
# _____________________________________________________


class food:       # Base Class

    def __init__(self, name , price):

        self.name = name
        self.price = price

        print(f"{self.name} is created fromBase class")
    
    def eat(self):
        print("eat methods from base class ")
    
class apple(food):   # Derived class
    
    def __init__(self,name , price , amount):

        # food.__init__(self,name)   # Create instance from base class
        super().__init__(name , price)       # Create instance from base class

        self.amount = amount

        print(f"{self.name} is created from derived class  and price is {self.price} and amount is {self.amount}")
    
    def get_from_three(self):
        print("get from three derived class")

    def eat(self):
        print(" eat method from derived class")



# food_one = food("Pizza")
food_two = apple("banana" , 50 , 400 )


print("\n")

food_two.eat()
food_two.get_from_three()
food_two.eat()