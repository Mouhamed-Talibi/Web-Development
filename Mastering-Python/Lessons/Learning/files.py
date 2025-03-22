# file handling

#   a :  append      =>          open file for appending values , create file if not exists 
#   r :  read         =>           [defult value] open file for read and give error if file is not FileExists
#   w :  write         =>            open file for writing , craete filr if not FileExists
#   x :  create         =>            create file , give error if filr exists


# file = open("file"  ,  "modes : a , r , w , x")

import os
# print(os.get())                         #   C:\Users\ce pc\.vscode\python               الفولدر لي نتا فيه
                   
           #  cwd    =>    current working directory                                                 #  os     :    Operating System

  
file = open("files.py")

print(os.path.abspath(__file__))           # c:\Users\ce pc\.vscode\python\files.py          مسار و اسم الملف كاملا  

print(os.path.dirname(os.path.abspath(__file__)))      #c:\Users\ce pc\.vscode\python         طبع لك اسم الفولدر لي نتا فيه


# change current working directory :
# os.chdir(os.path.dirname(os.path.abspath(__file__)))
# print(os.get())

print(file)                            #file data objet
# print(file.name)
# print(file.mode)
# print(file.encoding)

# print(file.read())   # read all in the file
# print(file.read(50))    # read how you want

print(file.readline(4))   #read line  , you can select the lines if you type there numbers

print(file.readlines())    # read many lines  and he type his in list , ou can select the lines if you type there numbers

# close the file          =>        file.close()

