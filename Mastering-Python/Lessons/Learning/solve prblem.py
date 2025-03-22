vegetables = ['potato' , 'toamto']
vege_dict = dict.fromkeys(vegetables)
print(vege_dict)   # output -> {'potato': None, 'toamto': None}

myname = 'sarab'
name_dict = dict.fromkeys(myname , 1)
print(name_dict)   # output -> {'s': 1, 'a': 1, 'r': 1, 'b': 1}

characters = ['R' , 'T' , 'O' , 'B']
char_dict = dict.fromkeys(characters, 'By Me :) ')
print(char_dict)   # output -> {'R': 'By Me :)', 'T': 'By Me :)', 'O': 'By Me :)', 'B': 'By Me :)'}


friends = ['yassmin' , 'sarab' , 'marwa']
frie_dict = dict.fromkeys(friends, 'is my friend ')
print(frie_dict)   # output -> {'yassmin': 'is my friend ', 'sarab': 'is my friend ', 'marwa': 'is my friend '} 


numbers = [1, 2, 3, 4, 5]
num_dict = dict.fromkeys(numbers, True)
print(num_dict)   # output -> {1: True, 2: True, 3: True, 4: True, 5: True} 

print("-"  * 10)

# 5 exemples of setdefault() :
me = {'name' : 'sarab' , 'age' : 19}
me.setdefault('departement' , 'software engineer')
print(me.setdefault('departement' , 'software engineer')) # -> software engineer
print(me) # ->  {'name': 'sarab', 'age': 19, 'departement': 'software engineer'}

data = {'list_num' : 14 , 
        'name' : "sarab" , 
        'age' : 19,
        'departement' : "cyber security"}
data_dep  = data.setdefault('departement') # -> to get the value of departement
print(data_dep) # -> cyber security

students_notes = {'ahmed' : 12 ,
                  'karim' : 16 , 
                  'sarab' : 19   }
student_note = students_notes.setdefault('sarab')
print(student_note) # ->  19  

# ---------------------------------------------------------------------------------------------------------------















