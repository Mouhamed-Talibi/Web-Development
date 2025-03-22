# all()      =>   is role check if all iterable is true

x = [1,2,3,4 , ()]
if all(x):
    print("all elements is true")
else:
    print("one element in list is false")


# any         =>   role is to check if one element is true

x = [1,2,3,4 , ()]
if any(x):
    print("at list one element is true")
else:
    print("no element  true in list ")


# bin()      => return the binary representation of an integer
print(bin(4))        #       >>>>>>      0b100    machine language


# id()        =>    it give you the id { adress , position , carte } for your element
a = 10
b =45
print(id(a))            #       >>>>              140709515348696

# sum()      =>   it's addition manipulation
c = [1,2,3]
print(sum(c))     
                 #   >>>>>>>>   15
     

# round(number , num od digits)        =>         >>>>>>>>      it's rough the number
print(round(15.458, 2))   #   >>>>>>>  15.45


# rannge (start , end , step)      >>>>>>>>>>> youmust type the [ end ]  is necessary
for x in range(1 ,3):
    print(x)

# print()
print("hello" , "my favourite friend"  , sep= "/")    # sep it mean separator
print("first line", end = "\n"  )
print("second line")


# abs()   >>>>>    absolute value    : the distance between zero and your number it's positive not negative
print(abs(-178))    #    >>>>>>>    178 


# pow => power   :  the exponent
print(pow(2,5))    #   >>>>>>>  2*2*2*2*2  = 32

# min(item,item or itrator)  and max(utem, item, or iterator)
print(min(1,2,-6))
print(max(45,67,928))  #   >>>>  you can do the same with the string 


# slice(start,end,step)
my = ["A", "B","C","D"]
print(my[:4])   # >>>  A ,B, C
print(a[slice(0,4)])     #  >>>> the end is necessary


