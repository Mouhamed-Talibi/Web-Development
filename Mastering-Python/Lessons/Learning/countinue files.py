                        #  write and append in file :

my_file = open("medo.text", "w")
my_file.write(" my name is mouhamed i'm 18 years old and i study at the university  , and i learn python with elzero web school")
my_file.write("i love pyhton it is easy to understand")


myfile = open("sentences.txt", "w")
myfile.write("python is easy\n" * 100)

                        #   write lines ask you list:
# myfr = ["med\n" , "achraf\n" ,"mousa\n" , "hamza\n"]
my_file = open("medo.text", "w")
my_file.writelines(my_file)

                        #   apend:
myfriends= ["med\n" , "achraf\n" ,"mousa\n" , "hamza\n"]
my_file = open("medo.text", "a")
my_file.writelines(my_file)

myfile = open("sentences.txt", "r")
myfile.write("hello my dear friend \n i love real madrid and raja casablanca")

myfile = open("sentences.txt", "a")
myfile.truncate(20) 

# position of the curser of typing:
print(myfile.tell())     #  =>   20   : position of the curser

myfile = open("sentences.txt", "r")
myfile.seek(10)
print(myfile.read())

# import os

# os.remove("sentences.txt")   
#                         # delet the file
