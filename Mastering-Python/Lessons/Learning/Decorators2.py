#                          DECORATORS  >>>>>>>>>>>>>>>>>>>>>><    PRACTICAL SPEED TEST :
# ________________________________________________________________________________________________________________________________________
def mydecorator(func):
    def digits(*numbers):
        for number in numbers:
            if number < 0:
                print(" ONE OF NUMBERS IS LESS THAN ZERO!")
        func(*numbers)

    return digits
@mydecorator
def manipulation(n1,n2,n3):
    print(n1 + n2 + n3)

manipulation(-45 , 78 , 90)

print("=" * 50)
#  called the time 

from time import time

def speedtest(func):
    def wrapper():
        start = time()
        func()
        end = time()
        print(f" the time for this manipulation is {end - start}")
    return wrapper

@speedtest
def big_loop():
    for x in range(1 , 20000):
        print(x)
big_loop()