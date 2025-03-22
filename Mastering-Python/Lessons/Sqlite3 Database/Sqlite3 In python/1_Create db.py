import sqlite3

db = sqlite3.connect("dataBase1.db")
"here between brackets we write name of Db file, if it exist it will connect if not it will create file and connect "

db.close() , 'to close db file'