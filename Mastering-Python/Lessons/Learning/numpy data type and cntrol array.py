# numpy =>   data type and control array :
# ----------------------------------------

# https://numpy.org/devdocs/user/basics.types.html
# https://docs.scipy.org/doc/numpy/reference/arrays.dtypes.html#specifying-and-constructing-data-type
# ---------------------------------------------------------------------------------------------------

# '?' : boolean
# 'b' : (signed) byte
# 'B' : unsigned byte
# 'i' : (signed) integer 
# 'u' : unsigned integer 
# 'f' : floating-point
# 'c' : complex floating-point
# 'm' : timedelta
# 'M' : datetime
# 'O' : (python) objects
# 'S' , 'a' : zero-terminated bytes(not recommended)
# 'U' : unicode string
# 'V' : raw data (void)
# ----------------------------------------------------


import numpy as np 

array1 = np.array([1,2,3,4])
array2 = np.array([0.4 , 1.6 , 5.7 , 8.2])
array3 = np.array(["mouhamed" , "karim" , "adam"])


# showing array data type :
print(array1.dtype)
print(array2.dtype)
print(array3.dtype)

print("=" * 50)


# create array with specific data :

array4 = np.array([1,3,4,], dtype = "f")  # dtype = ( 'f' or float or 'float' )
array5 = np.array([0.5 , 1.7 , 3.5] ,dtype = 'i')  # dtype = ('i' or 'integer' or integer )
# array6 = np.array(["hello med" , "how much" , "ABCD"] , dtype = "f") # value error 

print(array4.dtype)
print(array5.dtype)
# print(array6.dtype)

print("=" * 40)

# change daat of exicting array :

array7 = np.array([0 , 1, 2 , 3 , 0 , 4])
print(array7.dtype)
print(array7)
print(array7.astype("int"))
print(array7.astype("str"))
print(array7.astype("float"))


print("=" * 43)

my_array7 = array7.astype("bool")
print(my_array7.dtype)


# test capacity:
array8 = np.array([50 , 60 , 70 , 80] , dtype = 'f') # 'f' => float32
print(array8.dtype)
print(array8.itemsize)  # 4 bytes 

print("=" * 5)

array9 = np.array([10, 20, 30, 40] , dtype = 'float')
print(array9.dtype)
print(array9.itemsize)   # 8 bytes 

