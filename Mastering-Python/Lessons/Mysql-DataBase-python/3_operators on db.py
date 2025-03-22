import mysql.connector as sql 
try :
    db = sql.connect(host = "localhost" , user= 'root' , password = '12345')
    cr= db.cursor()
    
    cr.execute("SHOW DATABASES")
    for database in cr :
        print(database)
    
    # USE database : 
    cr.execute("USE school_website")
    
    # create table 
    cr.execute("""CREATE TABLE IF NOT EXISTS students(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
        name VARCHAR(255) NOT NULL , 
        age INT NOT NULL , 
        nat_date DATETIME NOT NULL 
        )""")
    
    describe = cr.execute("DESCRIBE students ")
    print(describe)
except sql.Error as error : 
    print("there is an error : " , error) 