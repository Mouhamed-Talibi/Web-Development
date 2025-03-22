#       DOC STRING //    COMMENTING //    DOCUMENTING 
# ----------------------------------------------------------------------
#   DOCUMENTING STRING FOR CLASS ; MODULE FOR FUNCTION
#    CAN BE ACESSED FROM THE HELP AND DOC ATTRIBUTES
#     MADE FOR UNDERTANDING THE FUNCTIONALY OF THE COMPLEX CODE 
#      THERES ONE LINE AND MULTIPLE LINE DOC STRINGS 
# --------------------------------------------------------------------------


def medfunction(name):
    ''' this is function to sah hello from med'''                     # SIMPLE EXEMPLE FOR DOC STING IT USE FOR ANY ONE WANT TO UNDERSTAND THE CODE

    #  exemple for multiple line documentation :/
    """ 
    MED FUNCTION 
     it say hello from med
    PARAMETER : 
      name => person name that use function 
    RETURN 
       retuen hello message for the person
    """

    print(f"hello {name} from med ")

medfunction("ahmed")

print("=" * 50)

print(dir(medfunction))
print("=" * 50)
print(medfunction.__doc__)    #   IT GIVE YOU THE DOCUMENTATION OF THE FUNCTION
help(medfunction)           #   IT GIVE YOU THE DOCUMENTATION OF THE FUNCTION
