import os

name = str(input("Beri nama untuk mengupload: "))
os.system("git add .")
os.system(f'git commit -m "{name}"')
os.system("git push")

print("\n Tidak Ada Branch \n")