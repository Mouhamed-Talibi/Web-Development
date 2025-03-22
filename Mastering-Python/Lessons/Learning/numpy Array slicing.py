# numpy =>   array slicing :
# ---------------------------


import numpy as np 

# slicing [start : end : steps] not including end :

a = np.array(["A" , "B" , "C" , "D" , "E" , "F"])

print(a.ndim)
print(a[0])
print(a[1:3])
print(a[:])
print(a[:4])

print("=" * 50)

b = np.array([["A" , "B" , "C"], ["D" , "E" , "F"] , ["J" , "H" , "I"], ["G" , "K" , "L"]])

print(b.ndim)
print(b[:])
print(b[1,0])
print(b[2, 1:])