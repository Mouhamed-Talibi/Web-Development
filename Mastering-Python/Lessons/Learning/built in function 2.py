                                #  <<<   Map  >>>>

#                             1   mape takee a funt and iterator
#                             2   map called ma because it map the funct on every element 
#                             3   the funct can be pre-defined funct or lambda funct


# use map with pre-defined function
# def formattext(text):
    # return f"_ {text} _ "

# my_text = ["mouha" , "khalid" , "achraf" ,"karim"]
# my_formateddata = map(formattext,my_text)    >>>>>>>>>    if you want to store them in variable

# print(my_formateddata)

# for x in map(formattext,my_text):
    # print(x)


# use map with lambda function



my_text = ["mouha" , "khalid" , "achraf" ,"karim"]
for name in list(map( lambda text :  f'_{text}_' , my_text)):
    print(name)
print("=" * 30)


                                                   #Filter
                                                   
    # filter take funcion + iterator
               # filter run a funct on every element
                  # the funct can be pre-defined fuct or lambda funct
    # filter out all elements for whish thr funct return true
    # the funct need to return boolean value 

def checknumber(number):
     
    return number > 10
numbers = [10,56,78,987]
myfilter = filter(checknumber,numbers)
for x in myfilter:
    print(x)
print("=" * 30)

# exemple 2  >>>>>>>   string
def checkword(word):
    return word.startswith("M")
mywords = ["Mouhamed", "Achraf", "Khalid", "Moussa"]
result = filter(checkword,mywords)
for y in result:
    print(y)
print("=" * 30)


# exemple 3 >>>>>>>>>>>>  lambda function 
myfriends =["khalid" ,"achraf","karim","said","moussa" , "badr"]
lam = filter(lambda name : name.startswith(("k")) , myfriends)
for x in lam:
    print(x)
    print()
print("=" * 30)

                                        #  reduce
    # take a funct + iterator
     # run a funct  on first and second element and give the result
    # then run funct on result and third element
     # till one element is left and this is the result of the reduc
     # # the funct can be pre-defined or lambda function

from functools import reduce
def sumall(num1,num2):
    return num1 + num2
numbers = [6376,367,39]
result = reduce(sumall, numbers)
print(result)
print("=" * 30)

# exemple with lambda function:
numbers = [6376,367,39]
result = reduce(lambda num1,num2 : num1 + num2, numbers)
print(result)
print("=" * 30)

#  enumerate (iterable , start : default = 0)
myskils = ["html","python","sql","css"]
myenumerateskils = enumerate(myskils,1)
for counter,skill in myenumerateskils :
     print(f"{counter} _ {skill}")
print("=" * 30)


# help
                              #  >>>>>>>>     print(help(the name of function or name of module))

# reversed(iterable)
mystring = "mouhamed talibi"
print(reversed(mystring))
for x in reversed(mystring):
    print(x)  


