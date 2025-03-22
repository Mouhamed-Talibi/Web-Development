import sqlite3

# create database:
db= sqlite3.connect("mouhamed.db")

# setting up the cursor:
cr = db.cursor()

# create data:
db.execute("CREATE TABLE IF NOT EXISTS languages(name TEXT , user_id INTEGER , progress INTEGER )")

# inserting data to table by user inputs :
id = 1
for x in range(1,5):
    name = input("write the name of your skill \n").strip().lower()
    progress = int(input("write the progress of this skill \n"))
    id += 1
    cr.execute(f"INSERT INTO languages(name , user_id , progress) values('{name}' , {id} , {progress})")
    print("skill added successfuly , the next :) ")

print("all skills are adeded ^_^")
db.commit()

# showing data 
choice = input(" do you want to see the data  write(yes or no )\n ").strip().lower()

if choice == "yes":
    def get_all_info():
        try :
            # selecct data from database:
            cr.execute("select * from languages")

            # fetch the data using a variable :
            results = cr.fetchall()
            # printing how rows we have on the table :
            print(f"the number of rows on the table is {len(results)}")

            # show the data now:
            for row in results:
                print(f"name => {row[0]} , " , end =" ")
                print(f"user_id is => {row[1]}," , end =" ")
                print(f"the peogress is => {row[2]} %")
            print("showing all data is success :) ")

        except sqlite3.Error:
            print("something's wrong, error happens :(")

        finally:
            db.close()
            print("database is closed , take care of your self ^_^ ")

else:
    print("ok , see you soon :) ")

get_all_info()
print(" -- BY MeDo ^:^ -- ")

db.close()
