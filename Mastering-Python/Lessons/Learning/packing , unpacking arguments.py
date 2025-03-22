print(1, 2,3,4,5)
my_list = [1,4,6,8,10]

print(my_list)
print(*my_list)
#  الفكرة بتاع النجمة * هي الا عندك قائمة فيها بزاف دالعناصر ونتا باغي تقرقهم وتحطهم حدا بعضياتهم
print("\\"* 20)

def hello(n1 , n2 , n3 , n4):
    peoples = [n1 , n2 , n3 , n4]
    for n in peoples :
        print(f"hello {n}")

hello("mouhmaed" , "achraf" , "khalid" , "reda")

# when we aren't know how many people:        => we use the * befor the arguments
print("\\"* 20)

def hi(*peoples):
    
      for n in peoples :
        print(f"hello {n}") 
hi("reda" , "karim" , "med")
print("\\" * 40)

# other exempels
skills = []
name = input("enter your name\n")
skill = input("enter your skills separated by a comma , \n")

skills.append(skill)

def showdetails():
    print(f"hello {name} , your skills is \n")
    
    print(f"=> {skills}")

showdetails()

# default parameters of arguments
print("=" * 40)

def function_name(name = "default parameters  "):
    # but the default para must be in all arg if you started with he , else in the last args just
    print("hi")
function_name()

# paking , unpacking args  ** keyword args:
print("=" * 40)

def show_skills (*skills):
    for skill in skills :
        print(f"the skill is {skill}")

show_skills("html" , "pyth" , "css")

#  ** it mean he wants a { dictionnary }
print("=" * 40)

def show_skills (**skills):

    for key , value  in skills.items() :
        print(f"the skill is {key} progress is {value}")

show_skills(html = "90%" , pyth =  "80%" , css ="40%")

