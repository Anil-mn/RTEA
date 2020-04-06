from connection import mydb
import matplotlib.pyplot as plt
mycursor = mydb.cursor()
import seaborn as sns
import pandas as pd
import numpy as np


mycursor.execute("SELECT Count('UserId') FROM `user_info`")
myresult = mycursor.fetchall()
arry=[]
for x in myresult:
    for i in x:
        arry.append(i) 

mycursor.execute("SELECT Count('ShopID') FROM `shop_info`")
myShop = mycursor.fetchall()
for x in myShop:
    for i in x:
        arry.append(i)  

mycursor.execute("SELECT Count('Distribution_ID') FROM `distribution_info`")
myDis = mycursor.fetchall()
for x in myDis:
    for i in x:
        arry.append(i)           

mycursor.execute("SELECT Count('id') FROM `inventory`")
myin = mycursor.fetchall()
for x in myin:
    for i in x:
        arry.append(i) 

df = pd.DataFrame(np.array([arry]).T)
#df = pd.DataFrame(arry)
df.head()
df.columns =['Count']
print(df.head())
print(df)

plt.figure(figsize=(15,6))
x = [arry[3],arry[2],arry[1],arry[0],20]
y = [arry[0],arry[1],arry[2],arry[3],20]

# genders = df.Count.value_counts()
sns.set_style("darkgrid")
sns.barplot(x=x, y=y, palette="rocket")
plt.show()

print(arry)