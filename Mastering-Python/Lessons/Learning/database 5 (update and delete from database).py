#   database => sqlite =>  delete and update from database :
# ____________________________________________________________



import sqlite3

# connection
db = sqlite3.connect(("app.db"))

# setthing up the cursor
cr = db.cursor()

# update database :
cr.execute("UPDATE users SET name = 'kawtar'  WHERE user_id = 9")
cr.execute("UPDATE users SET name = 'arij'  WHERE user_id = 3")
cr.execute("UPDATE users SET name = 'morad'  WHERE user_id = 5")

# delete data:
cr.execute("DELETE FROM users where user_id = 3")
cr.execute("DELETE FROM users where user_id = 9")
cr.execute("DELETE FROM users where user_id = 1")


# fetch data 
cr.execute("SELECT * FROM users ")

print(cr.fetchone())
print(cr.fetchone())
print(cr.fetchone())

# save all changes:
db.commit()

# close data base 
db.close()
