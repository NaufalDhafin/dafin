import os

name = str(input("Beri nama untuk mengupload: "))
print("\n Menyiapkan Folder/File \n")
os.system("git add .")
os.system(f'git commit -m "{name}"')
print("\n Mengupload Folder/File \n")
os.system("git push")
print("\n Program Selesai, Terimakasih. \n")