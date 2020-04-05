from connection import mydb
import matplotlib.pyplot as plt
mycursor = mydb.cursor()
import seaborn as sns
import pandas as pd
import numpy as np


mycursor.execute("SELECT * FROM `user_log`")

myresult = mycursor.fetchall()
arr=[[]]
length = len(myresult)
for i in range(length):
      for x in myresult[i]:
          arr.append([x])


print(arr)          