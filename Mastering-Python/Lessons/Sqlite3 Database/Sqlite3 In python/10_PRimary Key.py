import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

cr.execute(""" CREATE TABLE IF NOT EXISTS students (
          
        user_id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        age INTEGER,
        note INTEGER  )""") # NOT NULL -> it means should the user input the name

# PRIMARY KEY -> it means no repetition for any user_id
# AUTOINCREMENT -> it means that the users_id will automatically given by sqlite

# cr.execute("DROP TABLE students") # DROP -> it means Remove table 
cr.execute("""INSERT INTO students(user_id , name , age , note )
           Values( 1, 'mohamed' , 18, 19) """)

cr.execute("SElECT * FROM students")
data = cr.fetchall()
for row in data:
    print(row)
    
print("-" * 25)

cr.execute(""" INSERT INTO students (user_id, name, age, note) 
           VALUES (2, 'achraf' , 20, 19  )""")
cr.execute("SELECT * FROM students")
data2 = cr.fetchall()
for row in data2:
    print(row)
    
print("-" * 25)

cr.execute(""" INSERT INTO students (name, age, note) 
           VALUES ('achraf' , 20, 19  )""")
cr.execute("SELECT * FROM students")
data3 = cr.fetchall()
for row in data3:
    print(row) 

