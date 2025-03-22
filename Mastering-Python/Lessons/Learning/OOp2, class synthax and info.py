#          OBJECT ORIENTED PROGRAMMING :  => CLASS SYNTHW AND INFO 
# ________________________________________________________________________8

#  1 > CLASS IN BLUPRINT OR CONSTRUCTOR OF THE OBJECT 
#  2 > class instantiate means create instance of a class 

#  3 > INSTANCE : OBJECT CREATED FROM CLASS AND HAVE THEIR METHODS AND ATTRIBUTES

# 4 > class defined with keyword < class >
# 5 > CLASS NAME WRITTEN WITH PASCALSE [ UPPERCAMELCASE ] STYLE
 
# 6 > class may contains methods and attributes 
# 7 > WHEN CREATING OBJECT PYHTON LOK FOR THE BUILT IN  < __init__ > METHOD

# 8 > __init__ : method called every time you create object from class 
# 9 > __init__ : method is initialize the data for the object 

# 10 > ANY METHOD WITH TWO UNDERSCORE IN THE START AND END CALLED DUNDER OR MAGIC METHOD 
# 11 > SELF REFRE TO THE CURRENT INSTANCE CREATED FROM THE CLASS AND MUST BE FIRST PARAM

# 12 > self can be named anything 
# 13 > IN PYTHON YOU DON'T NEE TO CALL new() KEYWORD TO CREATE OBJECT 

# --------------------------------------------------------------------------------
# ===========================================================================
#  synthx :
#  class name :
    #    constructor => do instantiation [ create instance from a class ]
    #    each instance is separate object
    #    def __init__ ( self , other_data )
#             body of function 
# ===========================================================================



#  create our class 
class member:
    def __init__(self):
        print(" a new member has been added")

member()
member()

#  ho to know any class from ?
member_one = member()
member_two = member()

print(member_one.__class__)

print("=" * 50)

my_info = {
    "name" : "mohamed",
    "age" : 18,
    "mounthly_salary" : 5000 ,
    "yearly_salary" : ""
}
