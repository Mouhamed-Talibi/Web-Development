# modules    ==>>   built in modules
# ------------------------------------------------------------
# the module is a file contain a set of fonctions
# you can import the module in your app to help you 
#  you can mltiple modules
# you can create your modules
# modules saves your time

# --------------------------------------------------------------

# import main modules
import random
print(f' the number float random {random.random()}')  #  random for the float number

# print(f"the integer random number {random.randint(1,78)}")     # randint for the integer number


# when we called one or two function in the modules we don't write the name of module
# from random import randint
# print(f"the integer number is {randint(23,56)}") 

# if we want to called two function in moules we separated them od [, space]

# create your modules
# import sys
# sys.path.append(r"medo:\modules")
# print(sys.path)

import talibi 
talibi.sayhello("mohamed")
talibi.how_old_are_you(19)

