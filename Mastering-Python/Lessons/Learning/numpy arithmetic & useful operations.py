# numpy =>  Arithmetic & useful operations :
# -------------------------------------------

# - addition 
# - subtraction 
# - multiplication
# - dividation

# min
# max
# sum
# ravel => returns flattened array 1 imansion with same type :
# ------------------------------------------------------------


import numpy as np 

# arithmetic on array:
array1 = np.array([1,2,3])
array2 = np.array([2.5 , 5.8 , 6.5])

print(array1 + array2)
print(array1 - array2)
print(array1 * array2)
print(array1 / array2)

print("=" * 50)

# arithmetic for 2 dimansions array :
array3 = np.array([[1,3,5] , [3,8,2] ])
array4 = np.array([[4,6,1] , [3,2,5]])

print(array3 + array4)
print(array3 - array4)
print(array3 * array4)
print(array3 / array4)

print("=" * 20)

# operation on array :
print(array1.max())
print(array2.min())
print(array3.sum())

print("=" * 30)

array5 = np.array([[3,4] , [6,9]])
print(array5.ravel())
print(array5.ndim)

array6 = np.array([[1,4] , [7,8] , [9,4] , [2,6]])
print(array6.ndim)
print(array6.ravel())
x = array6.ravel()
print(x.ndim)
# when we store the ravel in varialble , hereturns a 1 dimantional array :)