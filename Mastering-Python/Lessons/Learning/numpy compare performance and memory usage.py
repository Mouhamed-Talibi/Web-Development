# numpy =>    compare performance and memory usage :
# --------------------------------------------------
# - performance 
# - memory usage 
# ---------------

import numpy as np 
import time
import sys


# for comparing performance :
element = 10000000
list1 = range(element)
list2 = range(element)

array1 = np.arange(element)
array2 = np.arange(element)

list_start = time.time()
# for n1 , n2 in zip(list1 , list2):
#     print(n1 + n2)
list_result = [(n1 + n2) for n1 , n2 in zip(list1 , list2)]
print(f"List Time : {time.time() - list_start}")


array_start = time.time()
array_result = array1 + array2
print(f"Array time : {time.time() - array_start}")

# the array is better of list in performance and he is fast :)

# print(list_result)
# print(array_result)
print("=" * 50)


# for the memory usage:
array = np.arange(150)

print(array)
print(array.itemsize)
print(array.size)
print(f"All Bytes Of Array is : {array.itemsize *array.size } Bytes")

print("=" * 40)

list = range(150)
print(list)
print(sys.getsizeof(list[2]))
print(len(list))
print(f"All Bytes Of List is : {sys.getsizeof(list) * len(list) } Bytes ")
# the list take a big memory than array !!