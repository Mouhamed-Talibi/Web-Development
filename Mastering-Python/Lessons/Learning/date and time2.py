#            date And Time :           >>>>>>>>>>   Formate Date
# __________________________________________________________

#      https://strftime.org//          =>  the site give you all code for format Date 
# __________________________________________________________


import datetime

my_birthday = datetime.datetime(2005,11,26)
print(my_birthday)

print(my_birthday.strftime("%B"))
print(my_birthday.strftime("%b"))
print(my_birthday.strftime("%A"))

print(my_birthday.strftime("%d %B %Y"))