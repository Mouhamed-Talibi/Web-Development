"we will ordered and limited data "
import sqlite3

db = sqlite3.connect("movies.db")
cr = db .cursor()

cr.execute("SELECT * FROM movies ORDER BY title ASC") # ASC : ascending order

data = cr.fetchall()
for row in data:
    print(f"Title : {row[0]} -  genre : {row[1]} -  Year : {row[2]}")

print("-" * 25)

cr.execute("SELECT * FROM movies ORDER BY year DESC") # -> DESC  : descending order
data2 = cr.fetchall()
for row in data2:
    print(f"Title : {row[0]} -  genre : {row[1]} -  Year : {row[2]}")

print("-" * 25)

cr.execute("SELECT rowid,* FROM movies ORDER BY genre DESC LIMIT 3 ") # limit (num lines)
data3 = cr.fetchall()
for row in data3:
    print(f"Id : {row[0]} - Title : {row[1]} , Genre -> {row[2]} - Year : {row[3]}")
    
