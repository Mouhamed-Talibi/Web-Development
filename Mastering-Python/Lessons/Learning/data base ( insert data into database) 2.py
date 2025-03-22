#  data base   => sqlite  => insert data into data base 
# ______________________________________________________

# - cursor : ALL OPERATIONS IN SQL DONE BY CURSOR OT THE CONNECTION ITSELF 
# - commit : SAVE ALL CHANGES

#  ! you should commit thr data after the inserton , because without the insertion the daat will never save 
# __________________________________________________________________________________________________________


import sqlite3

# connection
db = sqlite3.connect(("app.db"))

# setthing up the cursor
cr = db.cursor()

# create table and fields
cr.execute("CREATE TABLE IF NOt EXISTS users(user_id INTEGER , name TEXT)")


#  inserting data to table for users :
cr.execute("INSERT INTO users(user_id , name) values(1 , 'mohamed')")
cr.execute("INSERT INTO users(user_id , name)values(2 , 'khalid')")
cr.execute("INSERT INTO users(user_id , name) values(3 , 'achraf')")

db.commit()
# table about users with loop  :
name_list = ["mouhamed" , "morad" , "rachid" ]

for id , user in enumerate(name_list):
    cr.execute(f"INSERT INTO users(user_id , name) values({id + 4} , '{user}')")

db.commit()

# close daat base 
db.close()