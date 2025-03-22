#                  DECORATORS : UnFO // :
# ------------------------------------------------------------------------------------------
#  SOMETIMES CALLED META PROGRAMMING 
#   EVERYTHING IN PYTHON IS OBJECT EVEN FUNCIONS 
#    DECORATOR TAKE A FUNCTION AND ADD SOME FUNCTIONALITY AND RETUEN IT 
#     DECORATOR WRAP OTHER FUNCTION AND ENHANCE THEIR BEHAVIOUR 
#      DECOATOR IS HRIGHER ORDER FUNCTION ( FUNCTION ACCEPT FUNCTION AS PARAMETER )
# ------------------------------------------------------------------------------------------


def mydecorator(func):     # DECORATOR
    def nestedfunc():                #  ANY NAME ITS INLY FOR DECORATION
        
        print("BEFOR ")                      #  MESSAGE FROM DECORATOR
        func()                          # EXECUTE FUNCTION
        print("AFTER ")                      #  MESSAGE FROM DECORATOR

    return nestedfunc                   #  RETURN ALL DATA


@mydecorator                          #  THE BETTER METHOF FOR PRINT THE DECORATOR            

def sayhello():
    print("hello from function say hello")
sayhello()

# after_decoration = mydecorator(sayhello)             >>>>>>>>>>>>>>>>>>>>>>   WE SHOULD NOT PRINT THE DECORATOR BY THIS METHOD 
# after_decoration()                                   >>>>>>>>>>>>>>>>>>>>>>   WE SHOULD NOT PRINT THE DECORATOR BY THIS METHOD



# ---------------------------------------------------------------------------------------------------------------------------------------------
#  DECORATORS    =>  FUNCTIONS WITH PARAMETERS

def mydecorator(func):     
    def nestedfunc(num1,num2):               
        
        print("BEFOR ")

        if num1 < 0 or num2 < 0:
            print("one of this number is  less than zero !")
                                 
        func(num1,num2)                         
        print("AFTER ")                      

    return nestedfunc

print("=" *30)

#  called decoration for the calculate :

@mydecorator
def calculate(n1,n2):

    print(n1 + n2)

calculate(-7 , 36)