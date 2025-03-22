#            DAta Base =>  INtro 
# ____________________________________________________________

# - database is a : place where we can store data 
# - database organized into tables ( users , categories )
# - tables has column ( ID , USERNAME , PaSSWORD )
# - there's many types of databases ( MONGO BD , MYSQL , SQLITE )
# - SqL => stand for : { STURCTURES SQUERY LANGUAGE  }
# - SQLlite => can run in memory or in a single file 
# - you can browse file with {"    https://sqlitebrowser.org/   ""}
# - data inside batabase has types  ( text , integer , date )

# __________________________________________________________________________________________



#                         Data base =>   sqlite =>  crate daatabase and conect 
# -------------------------------------------------------------------------------------

# - conect
# - execute
# - close

# ---------------------------------------------------------------------------------------

# import sqlite module 
import sqlite3

# create batabase and conect :
db = sqlite3.connect("apps.db")

# create the table and fields :
db.execute("CREATE TABLE IF NOT EXISTS skills ( name TEXT , progress INTEGER , user_id INTEGER)")

# close batabase :
db.close()

