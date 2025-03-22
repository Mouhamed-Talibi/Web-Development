import sqlite3

# connect to new data base :
db = sqlite3.connect("medo.db")

# setting up the cursor :
cr = db.cursor()

# crete table and fields :
cr.execute("CREATE TABLE IF NOT EXISTS infos(name TEXT , user_id INTEGER , level_study TEXT , general_note INTEGER)")
cr.execute("CREATE TABLE IF NOT EXISTS people(name TEXT , user_id INTEGER , age INTEGER , job TEXT)")

# method to save and close:
def save_and_close():
    db.commit()
    print("all changes are saved :) ")
    db.close()
    print("connection to database is closed ^_'")

commands_list = ["a" , "u" , "s" , "d" , "q" ]

# the program:
message = ("""
a => add a person to infos table or people table  
u => update note in info table and update age in people table 
s => show all info or all people 
d => delete people or info for a person 
q => quit the program 
choose what are you want to do : \n""") 

choice = input(message)

# create method for any program:
def add_person():
    
    add_in = input("welcome , where you want to add data , [in infos table or in people table ] ? \n").strip().lower()
    if add_in == "infos table" :

       number_peoples = int(input("how many people you are ? \n"))
       if number_peoples == 1:
           id = 1
           print("let's add the person to infos table :) ")
           name = input("write your name please : \n").strip().capitalize()
           level = input("write the level of your study : \n ").strip().capitalize()
           general_note = int(input("write the generale note for this year : \n"))

           # insert the person :
           cr.execute(f"INERT INTO infos(name , user_id , level_study , general_note) values('{name}' , {id} , '{level}' , {general_note})")


       else:
            id = 0

            # add people using loop :
            for x in range(number_peoples):
               print("let's add the people to infos table :")
               print(f"for {x} :")
               name = input("write your name please : \n").strip().capitalize()
               level = input("write the level of your study : \n ").strip().capitalize()
               general_note = int(input("write the generale note for this year : \n"))
               id += 1

               # insert data to info table :
               cr.execute(f"INSERT INTO infos(name , user_id , level_study , general_note) values('{name}' , {id} , '{level}' , {general_note})")
               print("addeding is success ^:^ ")
            print("=" * 20)
            save_and_close()

    else:
        print("let's add to people table:")
        number_peoples = int(input("how many people you are ? \n"))

        if number_peoples == 1:
           id = 1
           print("let's add the person to people table :) ")
           name = input("write your name please : \n").strip().capitalize()
           age = int(input("write your age : \n "))
           work = input("what are your job : \n").strip().capitalize()

           # insert the person :
           cr.execute(f"INERT INTO people(name , user_id , age , job) values('{name}' , {id} , {age} , '{work}'))")

        else:
            id = 0
           # add people using loop :
            for x in range(number_peoples):
              
              print("let's add the persons to people table :")
              print(f"for {x} :")
              name = input("write your name please : \n").strip().capitalize()
              age = int(input("write your age : \n "))
              work = input("what are your job : \n").strip().capitalize()
              id += 1

               # insertdata to info table :
              cr.execute(f"INSERT INTO people(name , user_id , age , job) values('{name}' , {id} , {age} , '{work}')")
              print("addeding is success ^:^ ")
            print(">" * 20)
            save_and_close()
        print("all changes are saved , by :) ")

def update():
    update_what = input("do you want to update ( note in infos table ) or  ( update age in people table ) , answear by note or age : \n ").strip().lower()

    if update_what == "note":
        
        print("let's update note in infos table")
        name = input("write the name of the person who want to update note \n").strip().capitalize()
        new_note = int(input("write the new note : \n"))
        id = int(input("write the user_id : \n"))

        cr.execute(f"UPDATE infos set note = {new_note} where name = '{name}' and user_id = {id}")
        print("update is completed ✔")
        save_and_close()  
    else:
        
        print("let's update age in people table :")
        name = input("write the name of the person who want to update age \n").strip().capitalize()
        new_age = int(input("write the new age : \n"))
        id = int(input("write the user_id : \n"))

        cr.execute(f"UPDATE people SET age = {new_age} where name = '{name}' and user_id = {id}")
        print("update age is completed ✔")
        save_and_close()

def show():
    showing_what = input("do you want to show all infos or all people?:\n")
    if showing_what == "all infos":

        # select infos from infos table:
        cr.execute("select * from infos")
        results = cr.fetchall()
        print(f"we have {len(results)} infos of all people")

        for x in results:
            print(f"name =>{x[0]} , user_id => {x[1]} , " , end= " ")
            print(f"level_study => {x[2]} , general_note => {x[3]}")
        print("showing all infos is finished :) ")
    elif showing_what == "all people":

        # select people from people table
        cr.execute("select * from people")
        results = cr.fetchall()
        print(f"we have {len(results)} infos of all people")

        for row in results:
            print(f"name => {row[0]} , user_id => {row[1]} , " , end = " ")
            print(f"age => {row[2]} , job => {row[3]}")
        print("showing data of all people table finished successfuly :)")
    
    else:
        print("sorry we haven't more choises , run the program again and choose one of the two choices :)")
    
def delete():
    sure = input("are you sure you want to delete : \n").strip().lower()

    if sure == "yes" :
        delete_what = input("what do you want to delete ( person in people or person in infos )?\n").strip().lower()
        if delete_what == "person in people":

            name = input("write the name of the oerson who want to delete : \n").capitalize().strip()
            id = int(input("write th eid for the person : \n"))

            cr.execute(f"delete from people where name = '{name}' and user_id = {id}")
            save_and_close()
        elif delete_what == "person in infos":
            name = input("write the name of the oerson who want to delete : \n").capitalize().strip()
            id = int(input("write the id for the person : \n"))

            cr.execute(f"delete from infos where name = '{name}' and user_id = {id}")
            save_and_close()
        else:
            print("invalid choice , run the program again and choose the valid choice :)")


def quit_proram():
    print("quiting program is success :)")
    quit()

# check choice :
if choice in commands_list:

    print("your choice found :")

    if choice == "a":
        add_person()
    elif choice == "u" :
        update()
    elif choice == "s" :
        show()
    elif choice == "d":
        delete()
    elif choice == "q" :
        quit_proram()
    else:
        print("sorry , All commands are ended ): ")
