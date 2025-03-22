#   object orieted programing :  GETTERS AND SETTERS 
# ________________________________________________________


class member:
    def __init__(self , name):
        self.__name = name

    def say_hello(self):
        return f"hello {self.__name}"

    def get_name(self):  # getter 
        return self.__name

    def set_name(self , new_name):
        self.__name = new_name

one = member("mouhamed")
#  sadnessely we can access to the private operty by this way :
print(one._member__name)

# ------------------------------------------
# {one._member__name = "khalid"
#                print(one._member__name)}
# :_____________________________________________

#    =>  there are not the correct ways to fet or set the data 

# the god ways are as :
print(one.get_name())
one.set_name("hamza")
print(one.get_name())