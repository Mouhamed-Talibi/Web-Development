"we will update data intpo data base"
import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

data = cr.execute("SELECT rowid, * FROM movies ")
for row in data:
    print(f"Id = {row[0]} -  title -> {row[1]} , genre : {row[2]} - year -> {row[3]}")
    
print("-" * 25)

cr.execute("UPDATE movies SET title = 'the last kingdom' WHERE rowid = 4")
data1 = cr.execute("SELECT rowid,* FROM movies")
print("The Data After Updating :\n")
for row in data1:
    print(f"Id = {row[0]} -  title -> {row[1]} , genre : {row[2]} - year -> {row[3]}")
    
print("-" * 25)

cr.execute("UPDATE movies SET genre = 'comedy' WHERE rowid >= 5")
print("Data After Updating Genre : \n") 
data2 = cr.execute("SELECT rowid,* FROM movies")
for row in data2:
    print(f"Id = {row[0]} -  title -> {row[1]} , genre : {row[2]} - year -> {row[3]}")
    
db.commit()
db.close()