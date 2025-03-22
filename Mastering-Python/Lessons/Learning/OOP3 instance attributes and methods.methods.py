#      OBJECT ORIENTED PROGRAMING :  INSTANCE ATTRIBUTES AND METHODS 
# -----------------------------------------------------------------------
 
#  self : POINT TO INSTANCE CREATEDFROM CLASS 
#  instance atributes : INSTANCE ATTRIBUTES DEFINED INSIDE THE CONSTRUCTOR

#  instance methods : TAKE SELF PARAMETER XHICH POINT TO INSTANCE CREATED FROM CLASS
#  INSTANCE METHODS CAN HAVE LORE THAN ONE PARAMETRE LIKE ANY FUNCTION 
#  INSTANCE METHODS CAN FRRELY ACCESS ATTRIBUTES AND METHODS ON THE SAME OBJECT 
#  INSTANCE METHODS CAN ACESS THE CLASS ITSELF
# -----------------------------------------------------------------------------


class member :
    def __init__(self, first_name, midle_name , gender ):
        self.f_name = first_name 
        self.m_name = midle_name
        self.gender = gender
    
    def full_name(self):
        return f" {self.f_name} {self.m_name}"
    
    def name_with_title(self):

        if self.gender == "male":
            return f" hello Mr {self.f_name}"
        elif self.gender == "female":
            return f"Hello Miss {self.f_name}"
        else:
            return f" hello {self.f_name}"
        
    def all_info(self):

        return f" {self.name_with_title()} Your Full Name is {self.full_name()}"

    

member_one = member("mouhamed" , "talibi" , "male")
member_two = member("khalid" , "prince" , "male")
member_three = member("raja" , "amzil" , "female")

# print(member_one.f_name , member_one.m_name)
# print(member_two.f_name , member_two.m_name)
# print(member_three.f_name , member_three.m_name)

print(member_one.full_name())
print(member_three.name_with_title())
print(member_two.all_info())