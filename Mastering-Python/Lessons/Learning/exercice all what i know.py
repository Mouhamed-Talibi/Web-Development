import sqlite3

db =sqlite3.connect("trying.db")
cr = db.cursor()

# method for save and close():
def save_and_close():
    print("all changes are saved :) ")
    db.commit()
    print("connection to database is closed . ")
    db.close()

# create table and fields :
cr.execute("create table if not exists users(name TEXT age INTEGER job TEXT  salary INTEGER user_id INTEGER ) ")

message = """
  welcome to our Program ^_^

    to add data of a person => a 
    to update a data        => u 
    to delete a data        => d
    to show data of person  => s 
    to quite the program    => q :
"""
choice = input(f"{message} \n" )

# methods of any task in our program :
def add_person():
    num_person = int(input("how many people you want to add ? : \n"))
    if num_person == 1:
        try:
           name = input("write the name of this person : \n").strip().lower()
           age = int(input("write his age : \n"))
           job = input("write his job please : \n").lower().strip()
           salary = int(input(f"write {name}'s salary"))
           id = 2
           cr.execute(f"insert into users(name , age , job , salary , user_id) values('{name}' , {age} , '{job}' , {salary} , {id})")
           print("addeding successful :) ")
           save_and_close()
        except UserWarning:
            print("error happens , please try again with true data !")
        finally:
            save_and_close()

    else :
        print("by")


# test user choice :
if choice == "a":
    add_person()