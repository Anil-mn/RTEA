
from connection import mydb
import matplotlib.pyplot as plt
mycursor = mydb.cursor()
import seaborn as sns
import pandas as pd
import numpy as np


mycursor.execute("SELECT `Behaviour` FROM `user_log`")

myresult = mycursor.fetchall()


arry=[]

for x in myresult:
    for i in x:
        arry.append(i) 
   


df = pd.DataFrame(np.array([arry]).T)
df.head()
df.columns =['Behaviour']
print(df.head())




genders = df.Behaviour.value_counts()
sns.set_style("darkgrid")
plt.figure(figsize=(10,10))
sns.barplot(x=genders.index, y=genders.values)
plt.show()