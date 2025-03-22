#                     GENERATORS
# --------------------------------------------------------------------------------------
#  =>  GENERATOR IS A FUNCT WITH "YIELD" KEYWORD INSTEAD OR "RETUEN "
#   => IT SYPPORT ITERATION AND RETURN GENERATOR ITERATOR BY CALLING "YIELD"
#    => GENERATOR FUNCTION CAN HAVE ONE OR MORE "yield" 
#     => BY USING NEXT() IT RESUME FROM WHERE IT CALLED "yield" NOT FROM BEGIGNING 
#       => WHEN CALLED ? ITS NOT START AUTOMATICALLY ? ITS ONLY GIVE YOU THE CONTROL
# --------------------------------------------------------------------------------------


def mygenerator():
    yield 1
    yield 2
    yield 3
    yield 4
    
print(mygenerator())

print("=" * 30)

gen =mygenerator()
print(next(gen))
print("hello from python ")
print(next(gen))
print("hello from python ")             #     => BY USING NEXT() IT RESUME FROM WHERE IT CALLED "yield" NOT FROM BEGIGNING 
print(next(gen))
print("hello from python ")
print(next(gen))

print("=" * 30)

for num in gen:
    print(num)

    