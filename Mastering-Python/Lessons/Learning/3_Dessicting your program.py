# comments : 
"""
Python ignores comments, and you can use them to write notes or remind yourself what the code is trying to do. Any text for the rest of the line
following a hash mark (#) is part of a comment.

""" 

# the print() function : 
"""
The print() function displays the string value inside the parentheses on the screen.
print("hello world")
"""

# the input function : 
"""
The input() function waits for the user to type some text on the keyboard and press ENTER.
name = input("write your name ")
"""

# Printing the User’s Name :
"""
The following call to print() actually contains the expression 'It is good to
meet you, ' + myName between the parentheses.
➍ print('It is good to meet you, ' + myName)
"""

#  The len() Function :
"""
You can pass the len() function a string value (or a variable containing a
string), and the function evaluates to the integer value of the number of
characters in that string.
➎   print('The length of your name is:')
    print(len(myName)) 
"""

# The str(), int(), and float() Functions :
"""
If you want to concatenate an integer such as 29 with a string to pass to
print(), you'll need to get the value '29', which is the string form of 29. The
str() function can be passed an integer value and will evaluate to a string value
version of it, as follows:
>>> str(29)
'29'
>>> print('I am ' + str(29) + ' years old.')
I am 29 years old 
"""

string = str(24)
print("i am " + string + "years old ")
integer = int('19')
print(integer)
floating = float(integer)
print(floating) 

"""
The previous examples call the str(), int(), and float() functions and pass them values of the other data types to obtain a string, integer, 
or floating-point form of those values. """


