# --------------------------------------------------------------searching algorithms----------------------------------------------------

"linear search"
def linear_search(array, target):
    for x in range(len(array)):
        current_ele = array[x]
        if current_ele == target:
            return x 
    return - 1

arr1 = [56, 78, 90, 34, 21]
res = linear_search(arr1, target = 34)
print(f"index for your target is :", res)
print("="* 20)

"binary_search"
def binary_search(arr, target):
    left = 0
    right = len(arr) - 1
    while left <= right:
        middle = (left + right) // 2
        if arr[middle] == target:
            return f"index for your target is :{middle}"
        if arr[middle] > target:
            return f"index for your target is :{middle - 1}"
        if arr[middle] < target:
            return f"index for your target is :{middle + 1}"
    return "-1, because your target isn't here !"

arr2 = [12, 56, 78, 0, 23, 56]
print(binary_search(arr2, target = 78))
print("-" * 10)

# ----------------------------------------------------------------------sorting algorithms--------------------------------------------------------

"bubble sort"
def bubble_sort(arr):
    isswapped = True
    i = 0
    while isswapped:
        isswapped = False
        for j in range(len(arr) - 1):
            if arr[j] > arr[j+1]:
                arr[j], arr[j+1] = arr[j+1], arr[j]
                isswapped = True
        i += 1
    
arr3 = [45, 78, 0, 5, 32, 24]
print("your array before sorting :", arr3)
bubble_sort(arr3)
print("your array after sorting by bubble sort:", arr3)
print("="* 20)

"selection sort"
def selection_sort(arr):
    n = len(arr)
    for x in range(n):
        min_ele = x
        for x in range(x+1, n):
            if arr[min_ele] > arr[x]:
                arr[min_ele], arr[x] = arr[x], arr[min_ele]

arr4 = [897, 567, 345, 324, 42, 156]
print("your array before sorting :", arr4)
selection_sort(arr4)
print("your array after sorting by selection sort : ", arr4)
print("-" * 10)

"insertion sort"
def insertion_sort(arr):
    n = len(arr)
    if n <= 1:
        return "the array already sorted"
    
    for x in range(1, n):
        key = arr[x]
        y = x - 1
        while y >= 0 and key < arr[y]:
            arr[y+1] = arr[y]
            y -= 1
        arr[y+1] = key

arr5 = [67, 89, 34, 5, 32, 12]
print(f"your array before sorting : {arr5}")
insertion_sort(arr5)
print(f"your array after sorting : {arr5}")
print("=" * 20)

"merge sort"
def merge_sort(arr):
    if len(arr) > 1:
        mid = len(arr) // 2
        left_half = arr[: mid]
        right_half = arr[mid:]

        merge_sort(left_half)
        merge_sort(right_half)

        i, j, k = 0, 0, 0
        while i < len(left_half) and j < len(right_half):
            if left_half[i] < right_half[j]:
                arr[k]  = left_half[i] 
                i += 1
            else:
                arr[k] = right_half[j]
                j += 1
            k += 1

        while i < len(left_half):
            arr[k] = left_half[i]
            i += 1

        while j < len(right_half):
            arr[k] = right_half[j]
            j += 1
            k += 1

arr6 = [56, 89, 2, 5, 167, 18]
print("your array before sorting :", arr6)
merge_sort(arr6)
print("your array after sorting by merge sort : ", arr6)
print("-" * 10)

"quick sort"
def quicksort(arr):
    if len(arr) <= 1:
        return arr  # Base case: already sorted

    pivot = arr[0]  # Choose the first element as the pivot
    left = [x for x in arr[1:] if x < pivot]
    right = [x for x in arr[1:] if x >= pivot]

    return quicksort(left) + [pivot] + quicksort(right)

# Example usage
data = [1, 7, 4, 1, 10, 9, -2]
print("Unsorted Array:", data)
sorted_data = quicksort(data)
print("Sorted Array in Ascending Order:", sorted_data)
print("=" * 20)


def partition(arr, low , high):
    pivot = arr[high]
    i = low - 1

    for j in range(low, high):
        if arr[j] <= pivot:
            i += 1
            arr[i], arr[j] = arr[j], arr[i]

    arr[i+1] , arr[high] = arr[high] , arr[i+1] 
    return i + 1

def quick_sort(arr, start, end):
    if start < end :
        pi = partition(arr, start, end)
        quick_sort(arr, start, pi - 1)
        quick_sort(arr, pi + 1 , end)
arr7 = [7, 44, 89, 0, 24]
print("your arry before sorting", arr7)
quick_sort(arr7, 0, len(arr7) - 1)
print("your arry afer sorting by merge sort :", arr7)