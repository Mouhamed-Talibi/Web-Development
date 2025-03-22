#    data base => sqlite =>   training on everything 
# __________________________________________________________


import sqlite3

def get_all_data():

    try :

        # connection to data 
        db = sqlite3.connect("app.db")
        print("Connection To Data Base Successfuly :)")

        #setting up the cursor :
        cr = db.cursor()

        # fetch data from DataBase :
        cr.execute("SELECT * FROM users")

        # assing the data to variable
        results = cr.fetchall()
        print(results)
        print("<>" * 20)

        # print number of rows :
        print(f"The Database has {len(results)} rows .")

        # showing database by loop on results :
        print("Let's showing the data ")
        for row in results:
            print(f"UserID => {row[0]} ,", end = " ")
            print(f"UserName => {row[1]} ")
        print("Showing data IS Finished ^_^ ")
         
    except sqlite3.Error as sqe :

        # showing error if the connection failed:
        print(f"error raiding data {sqe} :( ")
    
    finally:

        # close the data base :
        db.close()
        print("Closing Database is successfuly :) ")

get_all_data()
