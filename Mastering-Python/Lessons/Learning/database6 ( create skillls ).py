#               database   =>   sqlite   =>       create skills app part 1 !
# _____________________________________________________________________________

import sqlite3
# connection to database;
db = sqlite3.connect("app.db")

# setting up the cursor :
cr = db.cursor()

message = """ 
what do you want to do ?
"s" => show all skill
"a" => add a skill 
"d" => delete a skill
"u" => update skill progress 
"q" => quite the program 
choose one of this choices
"""
# user choice input :
choice = input(message).strip().lower()


# command list :
commands = ["s" , "a" , "d" , "u" , "q"]

# function to save and clode database:
def save_and_close():
    db.commit()
    print("all chananges are saved :)")
    db.close()
    print("connection to database is closed ^_^")


# define methods :

# metod to show skills :
def show_skill():
    print("showing skills :")

    cr.execute("select * from skills")
    results = cr.fetchall()
    print(f"you have {len(results)} skills ")
    print("=" * 56)

    # showing the skills and the progress:
    for row in results:
        print(f"skill => {row[0]}," , end = " ")
        print(f"progress => {row[2]} ," , end =" ")
        print(f"id => {row[1]}")
    print("showing skills finished , by :)")

# method to add skill:
def add_skill():

    print(" let's add a skill :) ")
    number_skills = int(input("how many skill you have : \n"))
    id = 0
    
    for x in range(number_skills):
         
        skill_name = input("write skill name : \n").strip().capitalize()
        # select skills data:
        cr.execute(f"select name from skills where name ='{skill_name}'")
        results = cr.fetchone()

        if results == None:

           print(f"for {x} skill : ")
           skill_name = input("write the name of the skill who you want to add : \n").strip().capitalize()
           progress = int(input("write the progress of this skill : \n"))
           id += 1
       
           #add the skill at the table :
           cr.execute(f"INSERT INTO skills(name , user_id , progress) values('{skill_name}' , {id} , {progress})")
        else:
            print("skill exists , sorry you cannot add this skill ")

    save_and_close()

    print("addeding skills is success :) ")
    
# method to delete a skill :
def delete_a_skill():
     
    choice = input("are you sure you want to delete this skilll ?:\n").lower().strip()

    if choice == "yes":
        skill_name = input("write the name of the skill which you want to delete \n ").strip().capitalize()
        id = input("write the id of this skill\n")
        cr.execute("select * from skills")
        cr.execute(f"delete from skills where name = '{skill_name}' and user_id ='{id}'")
        save_and_close()
    else:
        print("ok , take care of yourself .")

    
    

# method t update a skill:
def update_skill():
    print("update a skill:")
    skill_name = input("write the name of the skill who you want to update  : \n").strip().capitalize()
    progress = int(input("write the new  progress of this skill : \n"))
    id = int(input("write the id for your skilll :"))
    cr.execute(f"UPDATE skills set progress = '{progress}'where name = '{skill_name}' and user_id = '{id}'")

    save_and_close()

# method to quit program: 
def quit_program():
    print("quiet the program ^:")
    quit()

# check the choice and run the methods  :
if choice in commands:
    print(f"command {'[choice]'} founds ")

    # run the methods :
    if choice == "s" :
        show_skill()
    elif choice == "a":
        add_skill()
    elif choice == "d" :
        delete_a_skill()
    elif choice == "u" :
        update_skill()
    else:
        choice_quit = input("are you sure, you want to quit (yes or no)?\n").strip().lower()
        if choice_quit == "yes":
           quit()
        else:
            print("ok :) ")
        
else:
    print("sorry :( , you command choice not found , run the program and try again ")

