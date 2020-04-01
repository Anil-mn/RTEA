
from connection import mydb
import matplotlib.pyplot as plt
mycursor = mydb.cursor()
import seaborn as sns
mycursor.execute("SELECT `Gender` FROM `user_info`")

myresult = mycursor.fetchall()
# print(type(myresult))
for x in myresult:
  print(x)

# plt.figure(figsize=(10,6))
# plt.title("Ages Frequency")
# sns.axes_style("dark")
# sns.violinplot(y=myresult[0])
# plt.show() 

#print(myresult[0])
# genders = myresult[5].Gender.value_counts()
# sns.set_style("darkgrid")
# plt.figure(figsize=(10,10))
# sns.barplot(x=genders.index, y=genders.values)
# plt.show()