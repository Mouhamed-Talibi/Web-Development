import sqlite3

db = sqlite3.connect("year_2024")
cr = db.cursor()

def in_2024():
    
    people = "ALl People Who Don't Believe In You , And Those Who Are uselses"
    cr.execute(f"DELETE FROM year_2024 '{people}")
    
    db.commit()
