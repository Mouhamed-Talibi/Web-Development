#     OBJECT ORIENTED PROGRAMMING :  MULTIPLE INHERITANCE 
# __________________________________________________________________


class BaseOne:
    def __init__(self):
        
        print("Hello Frim baseOne")
    
    def one(self):
        print("One")
    

class BaseTwo:
    def __init__(self):

        print(" Hello Frim BaseTwo")

    def two(self):
        print("Two")

class derived(BaseOne , BaseTwo):
    pass

my_class = derived() 

print(my_class.one)
print(my_class.two)

print("=" * 50)

my_class.one()
my_class.two()

print("=" * 50)

#  THE MULTIPLE INHERITANCE IS THE SAME :

class Base:
    pass

class derived_One(Base):
    pass

class derived_two(derived_One):
    pass


