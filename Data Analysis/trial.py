
from connection import mydb
import matplotlib.pyplot as plt
mycursor = mydb.cursor()
import seaborn as sns
import pandas as pd
import numpy as np


mycursor.execute("SELECT `Gender` FROM `user_info`")

myresult = mycursor.fetchall()
#print(type(myresult))


# myarray = np.asarray(myresult)
# print(type(myresult))
# print (myresult)


arry=[]
# print(type(myresult))
for x in myresult:
    for i in x:
        #print(type(i))
        arry.append(i) 
    #arry =arry.insert(x)

#print(arry)
#df = pd.DataFrame({'Gender':arry})
df = pd.DataFrame([arry])
df.head()
df.columns =['Gender','Gender','Gender','Gender']
print(df.head())


# plt.figure(figsize=(10,6))
# plt.title("Ages Frequency")
# sns.axes_style("dark")
# sns.violinplot(y=myresult[0])
# plt.show() 

#print(myresult[0])
genders = df.Gender.value_counts()
sns.set_style("darkgrid")
plt.figure(figsize=(10,10))
sns.barplot(x=genders.index, y=genders.values)
plt.show()