import sqlite3

db = sqlite3.connect("class.db")
cr = db.cursor()

cr.execute("CREATE TABLE student(name, )")