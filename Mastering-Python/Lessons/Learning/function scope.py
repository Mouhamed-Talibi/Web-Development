# we hace two type of scope :

# 1 => global scope as :
                        #  x = 1          =>         you can arrive him from a lot of methos
x = 3
def one():

    x = 2
    # => it is a   {  local scope  }        :  you  can arrive him just  when you called the function
    print(f'print variable from function scope { x }')

one()

print("=" * 40)

def two():
    global x

    #  global x => it mean a x = 4 whould be a global scope { you can arrive him with the print of x }
    
    x = 4
    print(f" print variable from function scope { x }")

print(f" print variable from global scope { x }")

print("=" * 40)
two()