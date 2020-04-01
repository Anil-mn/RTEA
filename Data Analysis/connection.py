import mysql.connector  


mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="rtea"
)


mycursor = mydb.cursor()

mycursor.execute("SELECT  `name`  FROM user_info")

myresult = mycursor.fetchall()

# for x in myresult:
#   print(x)