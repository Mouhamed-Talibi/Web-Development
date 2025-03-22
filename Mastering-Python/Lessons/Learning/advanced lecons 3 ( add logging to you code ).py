# advanced lecons   =>  add logging to your code :
# ---------------------------------------------------

# print out to console or file
# print logs of what happens 
# _______________________________

# - debug
# - info
# - warning
# - error
# - critcal
# -------------------
#  name => logging module give it the default logger
# ______________________________________________________

# basic config:
# - level => level of severity
# - filenme => filr name and extension
# - mode => mode of the file a => append
# - format => format for the log message 
# __________________________________________

# getlogger : return a logger with the specifiq name
# ______________________________________________________


import logging

logging.basicConfig(filename = "talibi.log",
                    filemode = "a" ,
                    format = "[%(asctime)s] => ( %(name)s ) :  %(levelname)s  => [ %(message)s ]",
                    datefmt = "%d  %B  %Y / %H : %M : %S ")

my_loger = logging.getLogger("talibi")
my_loger.error("Error Happens !!")
my_loger.warning("This is A Warning Message For You :_^")
my_loger.critical("This Is A Critical Message ...")