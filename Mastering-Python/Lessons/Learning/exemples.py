# import webbrowser
# import pyautogui
# from time import sleep

# def send(text, phone):
#     webbrowser.open("whatsapp://send?text=" + text.replace('n', '%0A') + "&phone=" + phone.replace('+', ''))

# usage: send("Your Message!", "+212 607479568")

# import pywhatkit as pwk

# # Syntax: phone number with country code, message, hour, and minutes
# for x in range (100):
#     pwk.sendwhatmsg('+212 607479568', 'You are Hacked By Aicha !', 22, 28)
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import pyautogui

# Initialize Chrome WebDriver
driver = webdriver.Chrome(executable_path="path/to/chromedriver.exe")
driver.get("https://web.whatsapp.com/")

# Wait for user to scan QR code
input("Press Enter after scanning QR code...")

# Find the chat input box
input_box = driver.find_element_by_xpath("//div[@contenteditable='true'][@data-tab='1']")

# Your message
text = "Hello, this is an automated message From The Hacker ): !"

# Type the message and press Enter
input_box.send_keys(text + Keys.ENTER)

# Wait for a few seconds (optional)
time.sleep(1)

# Close the browser
driver.quit()

