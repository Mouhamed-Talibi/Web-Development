# advaced lessons 2 =>   timing your code with timeit :
# _______________________________________________________

# timeit : GET EXECUTION TIME OF CODE BY RUNING 1M TIME AND GIVE YOU MINIMAL TIME
#         -IT USED FOR PERFORMANCE BY TESTING ALL FUNCTIONALITY 
# timeit(stmt , setup , timer , number)
#  timeit(pass , pass , default , 1.000.000) default values
# ____________________________________________________________________

# stmt : code you want to measure the execution time 
# setup : setup done befor the code execution ( import module or anything )
# timer : the timer value 
# number : how many execution that will run 
# --------------------------------------------------------------------------------------------


import timeit

print(timeit.timeit("'mouhamed * 1000'"))
print(timeit.timeit("name = 'mouhamed' ; name * 6000"))

print(timeit.repeat(stmt = "random.randint(0,200)" , setup = "import random" , repeat=4))