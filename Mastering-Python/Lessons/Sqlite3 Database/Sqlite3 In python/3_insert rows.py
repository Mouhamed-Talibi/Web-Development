"here we will insert data or rows to dataBase"
import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

cr.execute("INSERT INTO movies VALUES ('gantelman', 'action', 2011)")
cr.execute("INSERT INTO movies(title, genre) VALUES('oppenheimer', 'drama') ")

movies = [
    ("the godfather", "crime", 1970),
    ("the mechanic", "action", 1997),
    ("the whale", "drama", 2023),
    ("appels", "fantasy", 2021)
]

"executemany function it uses to do the command many times "
cr.executemany("INSERT INTO movies VALUES(?,?,?)", movies)
db.commit()