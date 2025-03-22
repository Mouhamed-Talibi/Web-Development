#    OBJECT ORIENTED PROGRAMMING :  =>  polymorphism
# ------------------------------------------------------------

# the polymorphism is a class or  a method who do something in a place , and in other place do something else , but it has the same name 
# __________________________________________________________________________________________________________________________________________


n1 = 89
n2 = 766
print(n1 +n2)

print("=" * 60)

print(len([1 , 2 , 3 ,4 , 5]))
print(len("Mouhamed Taibi"))
print(len({"key1" : 1 , "key2" : 2}))      # this is the idea of the { polymorphism } 

print("=" * 50)
 
#  polymorphism with classes : 

class  A:
    def print_something(self):

        print(" hello from A")
    
        raise NotImplementedError(" derived class must implement this method")

class B(A):
    pass

class C(A):
    def print_something(self):

        print(" hello from C")

my_instance = B()
print(my_instance.print_something())
my_instance = C()
my_instance.print_something()
