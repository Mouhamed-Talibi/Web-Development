import sqlite3

db = sqlite3.connect("data base with oop.db")
cr = db.cursor()

# define function to save and close the databse :
def save_close():
    print("all changes are saved :)")
    db.commit()
    print("connection to data base is closed .")
    db.close()


message = input("""the program is :
                a for add members 
                u for update members
                d for delete members 
                s for show data of members 
                q for quite the program 
                """).strip().lower()


# make classe for add and update :
class add_and_update :

    def add(self ,number_of_people , name , user_id ):
        number_of_people = int(input("how many people you want to add ? : \n"))
        if number_of_people == 1:
            name = input("write the name please : \n").capiatlize().strip()


