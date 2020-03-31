# https://stackabuse.com/association-rule-mining-via-apriori-algorithm-in-python/

# mycursor = mydb.cursor()

# mycursor.execute("SELECT * FROM `user_log`")

# myresult = mycursor.fetchall()

# for x in myresult:
#   print(x)
import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
from apyori import apriori

store_data = pd.read_csv('A://Datasets/store_data.csv') 
store_data.head()
num_records = len(store_data)
print(num_records)
records = []
for i in range(0, num_records):
     records.append([str(store_data.values[i,j]) for j in range(0, 20)])

association_rules = apriori(records, min_support=0.0045, min_confidence=0.2, min_lift=3, min_length=2)
association_results = list(association_rules)
print(association_results)