#                      Date and Time  :

import datetime

# print the current date and time :
print(datetime.datetime.now())             #    it give you the present date and time    >>>>>>    2023-11-17 11:06:14.157343
print("=" * 50)

# print the year only :
print(datetime.datetime.now().year)
# print the current month :
print(datetime.datetime.now().month)
# print the current day :
print(datetime.datetime.now().day)

print("=" * 50)

# print the start and the end of date :
print(datetime.datetime.min)
print(datetime.datetime.max)

print("=" * 50)

# print the current  time :
print(datetime.datetime.now().time())
# print the current  time hour:
print(datetime.datetime.now().time().hour)
# print the current  time :
print(datetime.datetime.now().time().minute)
# print the current  time :
print(datetime.datetime.now().time().second)

print("=" * 50)

# print the start and the end of time  :
print(datetime.time.min)
print(datetime.time.max)

print("=" * 50)

# print  a specific date :           ( year , mounth , day , hour , minute , second , microsecond)
print(datetime.datetime(1968,12,31))
print(datetime.datetime(2016,10,24,12,6,56))

print("=" * 50)

# print the life years:
birthday = datetime.datetime(2005,11,26)
datenow = datetime.datetime.now()
allyears = datenow - birthday
print(f" your birthday is {birthday} and date now is {datenow}")
print(f" the date and time between your birth and now is {allyears} ")
print(f" the date and time between your birth and now is {(allyears).days} days")