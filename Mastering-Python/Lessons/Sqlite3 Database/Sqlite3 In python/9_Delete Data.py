"we will delete data"
import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

cr.execute("SELECT rowid , * FROM movies")
data = cr.fetchall()
for row in data :
    print(f"id = {row[0]} - title : {row[1]} , genre -> {row[2]} - year : {row[3]}")

print("-" * 25)

cr.execute("DELETE FROM movies WHERE rowid = 1")  
cr.execute("SELECT rowid , * FROM movies")
print("table data ater removing rowid 1 : \n")
data2 = cr.fetchall()
for row in data2:
    print(f"id = {row[0]} - title : {row[1]} , genre -> {row[2]} - year : {row[3]}")
 
print("-" * 25)

cr.execute("DELETE FROM movies WHERE year >= 2020")
data3 = cr.execute("SELECT rowid, * FROM movies")
for row in data3:
    print(f"id = {row[0]} - title : {row[1]} , genre : {row[2]} - year : {row[3]}")
    