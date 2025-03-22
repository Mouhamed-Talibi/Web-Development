import mysql.connector as sql 

db = sql.connect(
    host =  'localhost ' , user = 'root' , password = "12345"
)
cr = db.cursor() 

cr.execute("CREATE DATABASE IF NOT EXISTS website ")
# make mysql know the arabic characters : 
cr.execute("CREATE DATABASE IF NOT EXISTS school_website DEFAULT CHARACTER SET utf8 DEFAULT  COLLATE utf8_general_ci")

# use database and create table :
cr.execute("USE website")
cr.execute("""CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY , 
    user_name VARCHAR(255) NOT NULL UNIQUE , 
    age INT NOT NULL , 
    note FLOAT NOT NULL , 
    birth_date DATETIME NOT NULL )""")

# alter table and change the type of the birth_date field : 
cr.execute("ALTER TABLE users CHANGE birth_date birth_date DATE NOT NULL ")

# insert data into table users : 
cr.execute("""INSERT INTO users(user_name , age , note , birth_date)
           VALUES ("mouhamed talibi" , 19 , 10.56 , '2005-11-26' )""")

# select data from table :
print("the data inserted is : \n")
cr.execute("SELECT * FROM users ORDER BY id")
cr.execute("DROP TABLE users")
cr.execute("SHOW TABLES ")

# to show databases we should run loop for the cr : 
for x in cr:
    print(x)
    
print("-" * 20)

data = cr.execute("SHOW DATABASES;")
