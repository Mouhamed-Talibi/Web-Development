#  object oriented programming         =>        @property decorator
# _________________________________________________________________________



name = input("write your name please \n").lower().strip()
age = int(input("write your age please \n "))

class info:
    
    def __init__(self , name , age ):
        self.name = name
        self.age = age 

    def say_hi(self):
        return f" hi {self.name}"
    
    @property
    def age_as_days(self):
        return f" Your Age Is : {self.age * 365 } Days"
    

get = info(name,age)
print(get.name)
print(get.age)

print("=" * 10)

print(get.say_hi())

# print(get.age_as_days())    # now it is method 

# bur when we write   { print(get.age_as_days) => this is a property } 
# so to print the data from the property we should call the poperty in the method by { @property }

print(get.age_as_days)