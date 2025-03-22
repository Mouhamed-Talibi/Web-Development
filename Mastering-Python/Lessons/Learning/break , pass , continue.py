my_numbers = [1 ,2, 4, 10 ,14, 15, 20 ,45, 9 ,60]
# continue 
for num in my_numbers:
    if num == 15:
        continue

    print(num)
print("=" * 20)

# break 
for number in my_numbers:
    if number == 15:
        break

    print(number)
print("=" * 20)

#pass
for n in my_numbers:
    if n == 15:
        pass

    print(n)