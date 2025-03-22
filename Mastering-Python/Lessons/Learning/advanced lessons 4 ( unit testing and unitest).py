# advanced lessons =>   unit testing and unitest :
# ____________________________________________________

# TEST RUNNER :
#      - the module that run the unit testing ( unittest , pytest )
                     #---------------------- 
# TEST CASE :
#       - smallesst unit of testing 
#       - it use asserts methods to check for actions and respons 
                      #---------------------- 
# TEST SUIT :
#       - collection of multiple tests or test cases
                      #---------------------- 
# TEST REPORT :
#       - a full report contains the failure or succeed 
# ----------------------------------------------------------

# unitest:
#       - it tests into classes as methds
#       - use a series of special assertion methods
# https://docs.python.org/3/library/unitest.html
# ----------------------------------------------------------


assert 100 * 5 == 500 , "shoud be 500"

def test_case_one():
    assert 20 + 30 == 50 , "should be 50"


def test_case_two():
    assert 10 / 2 == 5 , "should be 5"

if __name__ == "__main__":
    test_case_one()
    test_case_two()

# for the modue of  testing :
import unittest

class my_testings(unittest.TestCase):

    def test_one(self):
        self.assertTrue(10 > 9, "should be 0")

    def test_two(self):
        self.assertGreaterEqual(10,10,"should be true")


if __name__ == "__main__":
   unittest.main() 