#  function recursion used for delete the things or the caracters who are dupplicate :


def cleanword(word):

    if len(word) == 1:
       return word

    if word[0] == word[1]:
       
       return cleanword(word[1:])
    
    return word[0] + cleanword(word[1:])

print(cleanword("wwwwoooorrrd"))




# lambda function :
    #  =>  it has no name  ,  you can call it inline without defined it  ,  you can ues it in retuen data from another  function
    #  =>  lambda used for simple functions and def headle the large tasks  ,   lambda is one single expression not block of code


def sayhello(name , age):
   
   return f"hello {name} your age is {age}"

hello = lambda name , age  : f"hello {name} tour age is {age}"

print(sayhello("mouhamed"))
print(hello("mouhamed"))

