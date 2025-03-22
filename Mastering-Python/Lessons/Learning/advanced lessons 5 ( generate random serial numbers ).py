# advanced  lessons   =>     generate random serial numbers :
# -----------------------------------------------------------

import string
import random

uppercase_ascii = print(string.ascii_uppercase)
lower_case_asci = print(string.ascii_lowercase)
asci_letters = print(string.ascii_letters)
digits = print(string.digits)



def make_serial(count):
    
    all_chars = string.ascii_letters + string.digits
    len_chars = len(all_chars) 
    serial_list = []

    while count > 0:
        random_number = random.randint(0 , len_chars - 1)
        random_character = all_chars[random_number]
        serial_list.append(random_character)
        count -=1
        print(serial_list)
         
    print("make serial is finished :) ")

make_serial(12)
    
