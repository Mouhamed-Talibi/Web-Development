#             ERORS AND EXCEPTIONS RAISING //
#  ----------------------------------------------------------------------------
# EXCEPTIONS IS A RENTIME ERROR REPORTING MECHANISM 
#  EXCEPTION GIVES YOU THE MESAGE TO UNDERSTAND THR PROBLEM 
#   TRACEBACK  { تتبع الأثر }  GIVES YOU THE LINE TO LOOK FOR THE CODE IN THIS LINE 
#    EXCEPTINS HAVE TYPES ( synthaxerroe , endentationerror , keyerror ...)
#     EXCEPTIONS LIST {  https://docs.org/3/library/exceptions.html }
#      RAISE KEYWORD USED TO RAISE YOUR OWN EXCEPTIONS 
#  ----------------------------------------------------------------------------------------


x = int(input("type a number \n"))

if x < 0:
    print(f" the number {x} is less than zero")

    raise Exception(f" the number {x} is less than zero")   #      RAISE KEYWORD USED TO RAISE YOUR OWN EXCEPTIONS

    print("this will be print because the error ")
else:
    print("the number {x} is good ")

print(" print mesage after if condition ")
print("=" * 60)

#  EXEMPLE 2 //

names = ["mouhamed" , "khalid" , "achraf" , "mousa" , "youssef"]
user_name = input("enter your name \n")

if user_name not in names :
    raise NameError("your name not found , try again")
else:
    print(f" welcome {user_name} , have a good time")