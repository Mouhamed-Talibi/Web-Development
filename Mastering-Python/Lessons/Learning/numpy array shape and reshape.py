#  numpy =>   array shape and reshape :
# ------------------------------------

# shape returnes a =>  TUPLE CONATINS THE NUMBER OF ELEMENTS IN EACH DIMANSION:
# --------------------------------------------------------------------------


import numpy as np 

# for shape :

array1 = np.array([1, 2, 3, 4, 5])
print(array1.ndim)
print(array1.shape)

print("=" * 40)

array2 = np.array([[1, 2, 3, 4, 5]  , [1, 2, 3, 4, 5] , [1, 2, 3, 4, 5]])
print(array2.ndim)
print(array2.shape)

print("=" * 40)

array3 = np.array([[[1, 2, 3, 4, 5], [1, 2, 3, 4, 5]] , [[1, 2, 3, 4, 5], [1, 2, 3, 4, 5]]])
print(array3.ndim)
print(array3.shape)

print("=" * 40)

# for reshape:

array4 = np.array([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12])
reshape_array4 = array4.reshape(4 , 3)
print(reshape_array4)
print(reshape_array4.shape)
print(reshape_array4.ndim)

print("=" * 40)

array5 = np.array([[1, 2, 3, 4, 5, 6, 7, 8] , [1, 2, 3, 4, 5, 6, 7, 8]])
reshape_array5 = array5.reshape(8 , 2)
print(reshape_array5)
print(reshape_array5.ndim)
print(reshape_array5.shape)

print("=" * 40)

array6 = np.array([[1, 2, 3, 4, 5, 6, 7, 8] , [1, 2, 3, 4, 5, 6, 7, 8]])
# reshape_array6 = array6.reshape(-1)
reshape_array6 = array6.reshape(2 , 4, 2)
print(reshape_array6.ndim)
print(reshape_array6.shape)
print(reshape_array6)