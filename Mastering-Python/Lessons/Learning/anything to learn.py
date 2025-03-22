# import random
# import string

# print("welcome to the generate password :)")
# length_password = int(input("write the number of all character in password :\n"))

# number_chracter = int(input("write the number of characters you want in password : \n"))
# number_of_numbers = int(input("write the number of numbers you want in password :\n"))
# number_symbols = int(input("write the number of symbols you want in password :\n"))


# # check length password equal number of all characters :
# if length_password != number_chracter + number_of_numbers + number_symbols :
#     print("sorry , the sum of numbers , characters and symbols does't equal the length of the password :(")
# else:
#     print("ok , lets give you the random password")

    
# # check if the user inputs are integer and raise error to user:
# if length_password and number_chracter and number_symbols   and number_of_numbers != int :
#     print("sorry , the input must be integer !!")
# else:
#     pass 

# --------------------------------------------------------------------------------------------------

# name = input("write your name please :\n").strip().lower()
# level_study = input("write your level study please : \n").strip().lower()
# age = (input("write your age please : \n"))


# if  not age.isdigit() :
#     print("sorry , the input must be integer !")
# else:
    # print(f"i am {name} and my age is {age} years . my level study is : {level_study}")


# --------------------------------------------------------------------------------------------------



# class student:
#     def __init__(self , name , age ):
#         self.name = name
#         self.age = age 
#         self.marks = []
#         print(f"welcome {name} in the school :)")

#     def get_marks(self,mark):
#         self.marks.append(mark)

#     def average(self):
#         print("the result is :")
#         return sum(self.marks) /len(self.marks)
    

# name = input("write your name please : \n").strip().lower()
# age = int(input("write your age please :\n"))

# user = student(name , age )
# print(user.marks)

# for s in range(4):
#     mark = int(input("write your mark please :\n"))
#     user.get_marks(mark)

# print(user.marks)

# print(user.average())

# --------------------------------------------------------------------------------------------------

# class calculator:
#     def __init__(self, a, b):
#         self.a = a
#         self.b = b 

#     def addition(self):
#         print("the addition of numbers is :\n")
#         return self.a + self.b
    
#     def division(self):
#         print("the dividion of the numbers is : \n")
#         return self.a / self.b
    
#     def multiplication(self):
#         print("the multiplication of the numbers is :\n")
#         return self.a * self.b

# a = int(input("please write a number :\n"))
# b = int(input("write a number again : \n"))

# operat = calculator(a , b)
# print(operat.addition())
# print(operat.multiplication())
# print(operat.division())

# --------------------------------------------------------------------------------------------------

# class animal:
#     def suond(self):
#         print("animal suond")

# class dog(animal):
#     def suond(suond):
#         print("hwohowhowhow")

# class cat(animal):
#     def suond(self):
#         print("meaow")

# class lion(animal):
#     print("khooow")

# dog = dog()
# dog.suond()

# cat = cat()
# cat.suond()

# lion = lion()
# lion.suond()



# ----------------------------------------------------------------------------------------------------------

#  class calculator :
#     def __init__(self , a , b):
#         self.a = a
#         self.b = b 
    
#     def addition(self ):
#         print("the addtition of the numbers is :\n")
#         print(self.a + self.b) 
    

# class scientific(calculator):
#     def __init__(self , a , b):
#         self.a = a
#         self.b = b

#     def power(self):
#         print("the multiplicatio of the numbers is : \n")
#         print(self.a * self.b) 
#         print("thanks , have a nice day :)")

# num = calculator(2 , 45)
# num.addition()
# num2 = scientific(23 , 56)
# num2.addition()
# num2.power()


# ----------------------------------------------------------------------------------------------------------

# class polymorphism:
  
#     def calculator(self , age , date_birth):
#         print("the days are :\n")
#         print(date_birth - age)

# class polymorphism2 :
#     def calculator(self, x ,y ):
#         print("the sum of the numbers is :\n")
#         print(x + y)

# s = polymorphism()
# s2 = polymorphism2()
# s.calculator(69 , 1989)
# s2.calculator(45 , 67)

# ----------------------------------------------------------------------------------------------------------

# class animal:
#     def __init__(self , name ):
#         self.name = name 

# class dog(animal):
#     def __init__(self , name ):
#         super(dog , self).__init__( name )
#         self.food = "fish"

# d1 = animal("karimao")
# d1.name
# d2 = dog("bawbaw")
# print(d2.food)



# from rembg import remove
# from PIL import Image

# input_path = 'path/to/input/image.png'
# output_path = 'path/to/output/image.png'

# input = Image.open(input_path)
# output = remove(input)

# output.save(output_path)



# class user:
#     def __init__(self , name ):
#         self.name = name    # public : you can access it outside the classe 

#     def hi(self):
#         return f"hi {self.name}"

# user_one = user("mouhamed")
# print(user_one.name)


# class animal :
#     def __init__(self , food ):
#         self._food = food   # protected : reallity you can access them outside the class , but you as devloper you should'nt do this mistake 

#     def dog(self):
#         return f'the best food of dog is {self._food}'
    
# dog = animal("chicken")
# print(dog._food)

# # we can access the protected by this method :
# dog._food = "i am"
# print(dog._food)



# class student :
#     def __init__(self , name , age ):
#         self.__name = name 
#         self.__age = age     # private : it mean you can just access it inside the class , but you can access them outside , but the devloper should not this big mistake 

#     def info_student(self):
#         return f"hello {self.__name} , your age is {self.__age}"
    
# student1 = student("karim" , 19)
# # print(student1.__name)        # here the output is error , teht's mean its a private property 

# # the way to access the private property is :
# print(student1._student__name)
# print(student1._student__age)

# # the best way for devloper to access the private properties is by usin getters and setters :
# class house:
#     def __init__(self , number_room):
#         self.__number_room = number_room    # private property

#     # define function to get number of rom and to return it for the user 
#     def get_number_room(self):
#         return  self.__number_room
    
#     # define a method to set the number of room :
#     def set_number_room(self , number_room ) -> int :
#         self.__number_room = number_room


# house1 = house(18)
# print(house1.get_number_room())

# # object to set a new number room:
# house1.set_number_room(10)

# # get te number of room :
# print(house1.get_number_room())



# from abc import ABCMeta , abstractmethod

# class student:

#     @abstractmethod
#     def has_name(self):
#         pass 

#     @abstractmethod
#     def does_he_success(self):
#         pass



# class student1(metaclass=ABCMeta):

#     def has_name(self , question):
#         # question = input("do you have name : yes or no \n").strip().capitalize()
#         if question == "Yes":
#             return "Yes"
#         else:
#             return "No"
    
#     def does_he_success(self , question):
#         # question = input("do you success this year : yes or no : \n").strip().capitalize()
#         if question == "Yes":
#             return "Yes"
#         else:
#             return "NO"
        

# s = student1()
# question = input("so you have name : yes or no :\b").strip().capitalize()
# print(s.has_name(question))



# for decotaors in python 

# def my_decorator(funct):

    
#     print("before decorator  ")
#     funct()
#     print("after decorator")


# @my_decorator    # the decorator is used with function and we call them by typing @ and after we write the name of the decorstor
# def name():
#     name = input("write your name please : \n").strip().lower()
#     print(f"my name is {name}")


# user = name()


# def is_leap(year):
#     leap = False
    
#     # Write your logic here
#     if (year % 4 == 0 and year % 100 == 0) and year % 400 == 0:
#        return  True
#     else:
#         return leap 

# year = int(input())
# print(is_leap(year))

# n = int(input("write a number please : "))

# for x in range(1 , n +1):
#     print(x , end = "")
# print("=" * 10)
# a = {1 ,2 , 3, 4}
# b = {1 , 2 , 3}
# c = {1 , 2, 3 ,4,7}

# print(a.issuperset(b))
# print(a.issuperset(c))
 

# a = {1, 2, 3, 4}
# n = {1, 2, 3}
# n = {1, 2, 3, 4, 7}

# if a.issuperset(n):
#     print("True")
# else:
#     print("False")


# set_A = set(input("write a set : \n").split()) # create a set 
# n = int(input("write the number of all other sets :\n")) # number of all other sets 
# result = True

# for i in range(n):  
#     set_B = set(input("write a new set : \n").split()) # create new other set
#     if not set_B.issubset(set_A) or set_B == set_A:
#         result = False
#         break

# print(result)


# def wrapper(fun):
#     def fun(l_ist):
#         # complete the function
#         formatted_number = []
#         for num in l_ist:
#             if len(num) == 10:
#                 newnum = "+91 "+ num[:5]+" "+ num[5:]
#                 formatted_number.append(newnum)

#             elif len(num) == 11:
#                 newnum = "+91 "+num[1:6]+" "+num[6:]
#                 formatted_number.append(newnum)

#             elif len(num) == 12:
#                 newnum = "+91 "+num[2:7]+" "+num[7:]
#                 formatted_number.append(newnum)

#             elif len(num) == 13:
#                 newnum = "+91 "+num[3:8]+" "+num[8:]
#                 formatted_number.append(newnum)

#         result = sorted(formatted_number)
#         for val in result:
#             print(val)
    
#     return fun

# @wrapper
# def sort_phone(l_ist):
#     print(*sorted(l_ist), sep='\n')

# if __name__ == '__main__':
#     l = [input() for _ in range(int(input()))]
#     sort_phone(l) 


# if __name__ == '__main__':
#     x = int(input())
#     y = int(input())
#     z = int(input())
#     n = int(input())
#     lst=[]
#     for i in range(x+1):
#         for j in range(y+1):
#             for k in range(z+1):
#                 if i+j+k !=n:
                    
#                     lst.append([i, j, k])
                    
#     print(lst)





# participants = int(input())
# scores = list(map( int, input().split() ))

# max_score = max(scores)
# no_max_score = filter(max_score.__ne__, scores)
# runner_up = max(no_max_score)

# print(runner_up)
    
# if __name__ == '__main__':
#     n = int(input())
#     arr = list(map(int, input().split()))
    
#     max_score = max(arr)
#     no_max_score = filter(max_score.__ne__, arr)
    
#     runner_up = max(no_max_score)
#     print(runner_up)

# ----------------------------------------------------------------------------------
# if __name__ == '__main__':
    
#     number_students = int(input("write the number of students : \n"))
#     students = []
    
#     for st in range(number_students):
#         inner_list = []
#         name = input("write the name of student : \n")
#         score = float(input(("write his(her) score :\n")))
#         students.append(inner_list)
        
#     # select the two lowest score and store i in a variable :
#     scores = [s for s in students]
#     scores.remove(min(scores))
#     second_lowest_score = min(scores)
        
#      # select the multiple students with same lowest and oredered 
#     names = []
#     for s in students:
#         if s == second_lowest_score:
#             names.append(s)
#             names.sort()
#             for name in names:
#                 print(name)


# -----------------------------------------------------------------------

# if __name__ == "__main__":

    
#     num_students = int(input("write the number of students : \n"))
#     print("=" * 10)
#     for st in range(num_students):
#         info_students = []
#         # ls = []
        
#         name = input("write the name : \n").strip().capitalize()
#         score = float(input("write the score : \n"))
#         # ls.append(name , score)
#         info_students.append([name , score])
        

#     # for li_st in info_students :
#     #     print(f"name is : {li_st[0]}")
#     #     print(f"score = {li_st[1]}")

#     # info_students.append(ls)
#     print(info_students)


# if __name__ == '__main__':
#     students = []

#     for st in range(int(input("write the number of students : "))):
#         name = input("write the name :")
#         score = float(input("write the score : "))

#         students.append([name, score])

#     students.sort(key=lambda x: (x[1], x[0]))

#     lowest_grade = students[0][1]

#     for student in students:
#         if student[1] > lowest_grade:
#             second_lowest_grade = student[1]
#             break

#     second_lowest_students = [student[0] for student in students if student[1] == second_lowest_grade]

#     for student in second_lowest_students:
#         print(student)
        
# import time
# start = time.time()
# n = int(input())
# for i  in range(n + 1) :
#     for j  in range(n + 1):
#         print(i,j)
# print("end")

# end = time.time()

# all_time = start - end 
# print(f"the time for the operation is : {all_time}")

# n = int(input())
# for x in range(0 , n , 2) :
#     print(x)


