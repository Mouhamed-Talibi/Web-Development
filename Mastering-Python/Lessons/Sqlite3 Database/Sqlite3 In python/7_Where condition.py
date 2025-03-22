import sqlite3

db = sqlite3.connect("movies.db")
cr = db.cursor()

cr.execute("SELECT rowid,* FROM movies")
data1 = cr.fetchall()
for row in data1:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}")  

print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE year = 2023") 
data2 = cr.fetchall()
for row in data2:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}")  
   
print("-" * 24) 

cr.execute("SELECT rowid,* FROM movies WHERE title = LOWER('the mechanic')") # lower -> it makes all chars Small
data3 = cr.fetchall()
for row in data3:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE genre != 'action'") # != Is condition 
data4 = cr.fetchall()
for row in data4:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE genre = 'action' AND year = 1997")    # - AND -> for two condition should be ✔
data5 = cr.fetchall()
for row in data5:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 

print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE LOWER(genre) != 'action' OR year = 2023")     # OR -> for one of condition should be ✔
data6 = cr.fetchall()
for row in data6:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE LOWER(genre) LIKE 'acTioN'")     # LIKE -> It means any movies likes what you input
data7 = cr.fetchall()
for row in data7:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE title LIKE 'g%' ")     # % -> grether than One character 
data8 = cr.fetchall()
for row in data8:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE title LIKE '%a%' ")     # %a% -> it mens maybe before and after the charater there is characters
data9 = cr.fetchall()
for row in data9:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" *24)

cr.execute("SELECT rowid,* FROM movies WHERE genre LIKE '%e' ")     # %e -> it means any data ended by e and before it there is characters 
data10 = cr.fetchall()
for row in data10:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

cr.execute("SELECT rowid,* FROM movies WHERE title LIKE '_p%'")     # _(chracter) -> it mean there is one character before the chracter you input 
data11 = cr.fetchall()
for row in data11:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)

#   "we use between : WHERE column BETWEEN value AND value"
cr.execute("SELECT rowid,* FROM movies WHERE year BETWEEN 1997 AND 2023 ORDER BY year")     
data12 = cr.fetchall()
for row in data12:
    print(f"Id : {row[0]} - Title : {row[1]}  , Genre : {row[2]}  -  Year : {row[3]}") 
    
print("-" * 25)
data13 = cr.execute("SELECT rowid, * FROm movies WHERE rowid BETWEEN 1 AND 4 ORDER BY genre")
for row in data13:
   print(f"id = {row[0]} , title : {row[1]} - genre : {row[2]} ; year = {row[3]} ")

print("-"* 25)   
# "NOT BETWEEN -> WHERE column NOT BETWEEN value AND value"
data14 = cr.execute("SELECT rowid, * FROM movies WHERE rowid NOT BETWEEN 3 AND 5 ORDER BY title,year")
for row in data14 :
    print(f"id = {row[0]} , title : {row[1]} - genre : {row[2]} ; year = {row[3]} ")