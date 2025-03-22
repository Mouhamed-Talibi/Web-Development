"we will read the data from tha tables and print it"
import sqlite3

db =  sqlite3.connect("movies.db")
cr = db.cursor()

"to read data from tables we have to the command SELECT columns FRom table"  , "SELECT * FROm table" # --> * : it select all columns
data = cr.execute("SELECT * FROM movies")
for row in data:
    print(f"title is : {row[0]},   genre -> {row[1]},  year in -> {row[2]} ")

print("-" * 25)

data2 = cr.execute("SELECT rowid,title,year FROM movies")
for row in data2:
    print(f"id : {row[0]},  title -> {row[1]},  year : {row[2]}")

db.commit()
db.close()