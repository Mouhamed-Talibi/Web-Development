#    ITERABLE :

#         >>>>>>>>>     OBJECT CONTAINS THAT CAN BE ITERATED UPON
#          >>>>>>>>    EXAMPLES (  STRING . LIST . SET . TUPLE . DICTIONNARY )

# ITERATOR :
#        <<<<<<<<     OBJECT USED TO ITERATE OVER ITERABLE USING NEXT() METHOD RETURN 1 ELEMENT AT A TIME
#         <<<<<<<<     YOU CAN GENERATE ITERATOR FROM ITARABLE WHEN USING ITER() METHOD 
#           <<<<<<<     FOR LOOP ALREADY CALLS ITER() METHOD ON THE ITERABLE BEHIND THE SCENCE 
#           <<<<<<<<<<<        GIVES " STOPITERATION " IF THERES NO NEXT ELEMENT 


myname = "mohamed"
for character in myname:
    print(character)

print("=" * 50)

mynumbers = [1, 2,3,4,5,6]
for num in mynumbers:
    print(num)

print("=" * 50)

#  the iterable is a thing you can arrive any part only


mystirng = "rael madrid "
myiterator = iter(mystirng)
print(next(myiterator))
print(next(myiterator))
print(next(myiterator))
print(next(myiterator))

print("=" *30)

for x in mystirng:
    print(x)
    #  the for lop do the same thing , because he called alraedy iter()--||-------v