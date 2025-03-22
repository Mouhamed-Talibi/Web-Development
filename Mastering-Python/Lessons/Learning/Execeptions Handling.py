#         EXCEPTIONS HANDLING //
# ---------------------------------------------------
# TRY / EXCEPT / ELSE / FINALLY
# _________________________________________
# Try => testing the code for errors 
# Except => handle the errors 
#  ________________________________________
# Else => if not errors 
#  Funally => run the code 
# ---------------------------------------------------------



try:       # TRY THE CODE AND TEST ERROS  :
   
   number = int(input ("type your age \n "))
   print("Success , this is INTEGER ")   # the try can do the same of else if theres no errors 

except:    # HANDLE THE ERROR IF IT IS FOUND :
   
   ValueError = print(" this is not INTEGER , Try again !!")

else:   # IF THERES NO ERRORS :
   print("Success , this is INTEGER ")

finally :
   print(" print from finally whatever happens ")

print("=" * 60)

try:
   print(10 / 0)
   print(x)
except ZeroDivisionError :
    print(" Devision Error , can't devide  manipulation!!")
except NameError:
    print("The Name Isn't Defined !")
except ValueError:
   print("Value Error , try Again ....")
except:
   print(" Error happens")

finally:
   print("try again")