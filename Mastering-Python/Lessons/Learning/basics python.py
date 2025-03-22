# i will write exampels for any basic in level basic in python :

# variables :
x = 1
y = "mohamed"
z = 0.5


# conditions :   expressions that evaluate to a boolean value , either True or False,  it uses to control the flow of our program
a = 10
if a == 10:
    print("a is 10")
elif a > 10:
    print("a is greater than 10")
else:
    print(" a is less than 10")

print("=" * 20)

# chained conditionals :   are a way of writing multiple if-elif-else statemants that are indented at the same level :
b = 5
c = 3
d = 7
# check wich number is the smallest:
if b < c and b < d:
    print("b is the smallest")
elif c < b and c < d:
    print("c is the smallest")
else:
    print("d is the smallest")

print("=" * 20)


# operators :  are special symbols or keywords that perform some type of computation on values or variables :
x = 2
y = 5
# arithmetic operation:
print(x + y)
print(x - y)
print(x * y)
print(x / y)

print("=" * 20)

# comparison operators:  used to compare two value and retuen a boolean value 
print(x == y)
print("=" * 20)

# logical operators: used to check whether an expression is TRUE or FalSE , they are used in decision-making :
print((x >= 2 and y > 5))

# loops and iterables :
for x in range(10):
    print(f"=> {x}")

