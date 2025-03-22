# import sys 
# from PyQt5.QtWidgets import *

# app = QApplication([])
# w = QWidget()
# w.setGeometry(30, 30, 1000, 1000)
# l = QLabel(w)
# l.setText("I love Programming 😍")

# w.show()
# sys.exit(app.exec_())

# ---------------------------------------------------------------------

import os

print("Current work dir: " , os.getcwd())
"making Directory"
# os.mkdir("mouhamed") 

"joinig paths"
file_name = "Qt5.py"
parent_dir = "backend devloper roadmap"
proj_dir = "2_python lessons"

current_file = os.path.join(parent_dir, proj_dir, file_name) 
print("the current file is : ", current_file )

file_name_working_now = os.path.basename(current_file)
print("the name of the file where are you now is : ", file_name_working_now)





