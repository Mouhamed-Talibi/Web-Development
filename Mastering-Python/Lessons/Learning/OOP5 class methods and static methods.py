#  OBJECT OEINTED PROGRAMMING : => CLASS METHODS AND STATIC METHODS 
# ----------------------------------------------------------------------6

# CLASS METHODS : 
#       - marked with @classmethod decorator to flag it as class method
#       - it take cls parameter not self to point to the class not the instance 
#       - it doesn't erquire creation of a class instance 
#       - used when you want todo ssomething with the cass itself 
# -----------------------------------------------------------------------------------

# STATIC METHOD :
#         - it takes no parameters
#         - its bound to the class not instance 
#         - used when doing soething have access to object or class but ralated to class 
# -----------------------------------------------------------------------------------------

class member:

    not_allowed_name : ["baloot" ," marzog" , "kador"]
    users_number = 0

    @classmethod
    def show_users_count(cls):
        print(f" we have {cls.users_number} users in our system")

    @staticmethod
    def say_helo():
        print(" Hello From Mouhamed")

    def __init__(self , first_name , midle_name , last_name , gender ):
        self.f_name = first_name
        self.m_name = midle_name
        self.l_name = last_name
        self.gender = gender

        member.users_number += 1
    def full_name(self):
        return f" {self.f_name} {self.m_name}"

    def name_with_title(self):
        if self.gender == "male":
            return f" hello mr {self.f_name} "
        elif self.gender == "female":
            return f" Hello miss {self.f_name}"
        else:
            return f" Hello {self.f_name}"
        
    def get_all_info(self):
        return f"Hello {self.name_with_title()} Your full name is {self.full_name()}"
    def delete_users(self):
        member.users_number -= 1
        return f" User {self.f_name} Is Deleted."
    
print(member.users_number)

member_one = member("Mouhamed" , "talibi" , "palermo" , "male")
member_two = member("khalid" , "kadar" , "pako" , "male")
member_three = member("raja" , "amzil" , "tagno" , "female")

# print(member_one.full_name())
# print(member_three.get_all_info())
# print(member_two.name_with_title())

print(member.users_number)
print(member_two.delete_users())
print(member.users_number)

print("=" * 60)

member.show_users_count()

print("=" * 60)

