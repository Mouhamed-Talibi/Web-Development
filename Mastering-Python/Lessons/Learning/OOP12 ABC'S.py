#   object oriented programming =>     ABCS      =>      abstract  base class 
# ______________________________________________________________________________

# - class called abstract class if it has one or more abstract methods 
# - abc module in python provides infrastructure for defining custom abstract base classes 
# - by adding @abstractmethod decorator on the methods 
# - ABCMeta Class IS Method Used For Defining Abstract Base Classes  

# _____________________________________________________________________________


from abc import ABCMeta , abstractmethod

class mohamed(metaclass = ABCMeta):
    
    @abstractmethod
    def has_friend(self):
        pass
    #  the abstract method is realized for the other classes to foloow her 

    def has_money(self):
        pass 
    
class khalid(mohamed):

    def has_friend(self):
        return "maybe ^_"

class achraf(mohamed):
    
    def has_friend(self):
        return "Of course"
    
name = khalid()
print(name.has_friend())
