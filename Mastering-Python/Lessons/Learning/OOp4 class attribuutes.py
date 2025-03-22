#  OBJECT ORIENTED PEOGRAMING : // CLASS ATTRIBUTES 
# _____________________________________________________

# CLASS ATRIBUTES : attributes defined outside the constructor 

# ______________________________________________________________


class member :

    not_allowed_name = ["fact" , "shit" , "baloot" , "marzog"]
    users_number = 0

    def __init__(self, first_name, midle_name ,last_name ,  gender ):
        self.f_name = first_name 
        self.m_name = midle_name
        self.l_name = last_name
        self.gender = gender 

        member.users_number += 1
    
    def full_name(self):

        if self.f_name in member.not_allowed_name:

            raise ValueError (" The Name Is Not Allowed !!")
        else:
            return f" {self.f_name} {self.m_name}"
    
    def name_with_title(self):
        if self.f_name in member.not_allowed_name:
            raise ValueError (" Name Not Allowed !!")
        else:
        
          if self.gender == "male":
             return f" hello Mr {self.f_name}"
          elif self.gender == "female":
             return f"Hello Miss {self.f_name}"
          else:
             return f" hello {self.f_name}"
        
    def all_info(self):

        return f" {self.name_with_title()} Your Full Name is {self.full_name()}"
    def delete_users(self):
        member.users_number -= 1
        return f" user {self.f_name} Deleted. "
    
print(member.users_number)

member_one = member("mouhamed" , "talibi" , "palermo" , "male")
member_two = member("khalid" , "prince" , "pako" ,  "male")
member_three = member("marzog" , "9ador" , "bb" ,  "female")

print(member.users_number)
print(member_three.delete_users())
print(member.users_number)

# print(member_one.f_name , member_one.m_name)
# print(member_two.f_name , member_two.m_name)
# print(member_three.f_name , member_three.m_name)

# print(member_one.full_name())
# print(member_three.name_with_title())
# print(member_three.all_info())

