import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

cr.execute("SELECT * FROM movies")

"fetchone -> returns a single record or none if no more rows are available"
print(cr.fetchone())

"fetchmany(size) -> it's fetchall , but you write the size "
print(cr.fetchmany(1))

"fetchall -> fetches all the rows of a query result . it returns all the rows as a list of tuples. an empty list returned if there is no record to fetch"
print(cr.fetchall())

data = cr.fetchall()
for row in data:
    print(f"title -> {row[0]}, genre : {row[1]} , year : {row[2]}")
