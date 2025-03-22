import termcolor
import pyfiglet
print(termcolor.COLORS)
first_name = input("enter your first name please\n").strip()
second_name = input("enter your second name please\n").strip()
# third_name = input("enter your Third name please\n").strip()


color_first_name = input(' type a color for your first name \n').strip().lower()
color_second_name = input(' type a color for your second name \n').strip().lower() 
# color_third_name = input(' type a color for your third name \n').strip().lower()


print(termcolor.colored(pyfiglet.figlet_format(first_name), color = color_first_name))
print(termcolor.colored(pyfiglet.figlet_format(second_name), color = color_second_name))
# print(termcolor.colored(pyfiglet.figlet_format(third_name), color = color_third_name))
