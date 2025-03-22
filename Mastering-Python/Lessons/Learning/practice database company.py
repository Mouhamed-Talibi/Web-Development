import sqlite3

db = sqlite3.connect("Company.db")
cr = db.cursor()

# creet table and fields :
cr.execute("create table if not exists infos(name text , age integer , salary integer , user_id integer )")

# save and close the data :
def save_and_close():
  print("all changes are saved :)")
  db.commit()
  print("connection to data base is closed :)")

# message for the program:
name = input("write your name please \n").strip().lower()
message= f"""hello {name}
Welcome to the app :)
choose what whould you do from this list : 
a : add your info the to table 
u : update your info in the table
d : delete your info from the table 
s : show ypur info from the table 
q : quite the program 
 """
# ask the user for the choice :
choice = input(message)

# method of the program :
def add_info():
    number = int(input("what is the number of people who wants to add : \n"))
    if number == 1:
        name = input("write the name please : \n").strip().capitalize()
        age = int(input("write your age please : \n"))
        id = 1
        salary = int(input("write your salary please : \n"))
        cr.execute(f"insert into infos(name , age , salary , user_id ) values('{name}' , {age} , {salary} , {id})")
        save_and_close()
    else:
       print("tommorow all tasks will be available :) ")

# run the methods:
if choice == "a" or "add info":
   add_info()