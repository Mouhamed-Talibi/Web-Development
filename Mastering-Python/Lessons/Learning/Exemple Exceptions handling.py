#      EXCEPTIONS HANDLING 
# ----------------------------
#                                 ADVANCED EXEMLE //
# ----------------------------

the_file = None
tries = 5

while tries > 0:
    try :
        print(" enter the file name with absolute path to open")
        print(f" You have {tries} left ")
        # print(" for exemple :   C:\Users\ce pc\.vscode\python ")
        file_name = input(" Type the file name ↡ \n").strip()
        the_file = open(file_name ,  "r")
        print(the_file.read())
        break

    except FileNotFoundError :
        print("file not found , please be sure the name is valid ")
        tries -= 1
        print(f"  {tries} left ")
    except :
        print(" Error Happens ")
    finally :
        if the_file is not None :

           the_file.close()
           print("your file is closed ")
else : 
    print("All tries id done  ")

     