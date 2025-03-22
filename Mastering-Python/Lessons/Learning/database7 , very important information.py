# database       =>      important informations :
# -----------------------------------------


import sqlite3

db = sqlite3.connect("app.db")
cr = db.cursor()

# you can insert data to any table without write as ex : skills(name , id , prog)  you can just write skills and then insert data :
# cr.execute("INSERT INTO skills values('django' , 5 , 60)")
# db.commit()

# to secure your data you have two choice : 1 to put the ata on the variable and then insert her:
my_info = ('php' , 6 , 50)
# cr.execute("insert into skills values(? , ? , ?)" , my_info)
# db.commit()

# 2 : to write the data without variable :
# cr.execute("insert into skills  values(? , ? , ?)" , ('pascal' , 7 , 40))
# db.commit()

# show skills :


# order by :   row in table + asc => ascending ⬆  and desc => descending => ⬇
# limit => the output will give you the number of limite who you write 
# offset => it mmean the output wille start from the number who you write after offset
cr.execute("select * from skills order by name limit 5 offset 2")
# where => you can use it for select special data of alot of people 
cr.execute("select * from skills where user_id >= 3 ")

# in and not in :
cr.execute("select * from skills where user_id in(1,2,3)")
results = cr.fetchall()

for row in results:
    print(f"name => {row[0]} , user_id => {row[1]} , progress => {row[2]} ")
