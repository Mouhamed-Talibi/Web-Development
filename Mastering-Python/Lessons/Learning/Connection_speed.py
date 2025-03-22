from speedtest import Speedtest

wifi = Speedtest()

print("Getting Download Speed ....")
download_sp = wifi.download()
print(f"Your Download Speed: {download_sp / 1024 / 1024:.2f} Megab/s")

print("*" * 10)

print("Getting Upload Speed ....")
upload_sp = wifi.upload()
print(f"Your Upload Speed: {upload_sp / 1024 / 1024:.2f} Megab/s") 