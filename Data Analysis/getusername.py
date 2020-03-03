from connection import mydb


mycursor = mydb.cursor()

mycursor.execute("SELECT  `name`  FROM user_info")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)