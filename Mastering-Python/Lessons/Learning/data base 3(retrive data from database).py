#    data base  => sqlite =>  retrivedata from database
# ______________________________________________________

# - fetchone => returns a single record or none if no more rows are available
# - fetchall => fetches all the rows of a query result . it returns all the rows 
#               as a list of tuples. an empty list returned if there is no record to fetch
# - fetchmany(size) => it's fetchall , but you write the size 

# -------------------------------------------------------------------------------------------
# select *  : => it mean select all data
# _____________________________________________________

import sqlite3

# connection
db = sqlite3.connect(("app.db"))

# setthing up the cursor
cr = db.cursor()

# create table and fields
cr.execute("CREATE TABLE IF NOt EXISTS users(user_id INTEGER , name TEXT)")

# fetch data 
cr.execute("SELECT * FROM users ")
print(cr.fetchone())

print("\n")

print(cr.fetchall())

print("\n")

print(cr.fetchmany(2))
# save all changes:
db.commit()

# close data base 
db.close()