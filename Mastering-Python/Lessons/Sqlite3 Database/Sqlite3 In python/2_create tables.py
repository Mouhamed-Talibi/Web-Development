"we will create tables in the data base"
import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor() # --> cursor : all operations in sql do by the cursor of the connection itself 

"excecute function it uses to write data and create table in database file"

cr.execute("CREATE TABLE IF NOT EXISTS movies(title Text, genre Text, year INTEGER)")
db.commit() # --> to save changes 