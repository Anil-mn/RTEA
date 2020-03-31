
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns
from matplotlib.backends.backend_agg import FigureCanvasAgg as FigureCanvas
from matplotlib.figure import Figure
df = pd.read_csv("A://Datasets/Mall_Customers.csv")
df.head()

df.drop(["CustomerID"], axis = 1, inplace=True)

from flask import Flask, render_template, Response
from matplotlib.figure import Figure
app = Flask(__name__)


plt.figure(figsize=(10,6))
plt.title("Ages Frequency")
sns.axes_style("dark")
sns.violinplot(y=df["Age"])
plt.savefig('Data Analysis/images/new_plot.png')
#plt.show()

# Initialize for web app
@app.route('/')
def index():
    return render_template('status.html')

# Entry point for web app
# @app.route('/video_viewer')
# def video_viewer():
#     return Response(plt.show(), mimetype='multipart/x-mixed-replace; boundary=frame')

@app.route('/plot.png')
def plot_png():
    fig = create_figure()
    output = io.BytesIO()
    FigureCanvas(fig).print_png(output)
    return Response(output.getvalue(), mimetype='image/png')

  
def create_figure():
          fig = Figure()
          axis = fig.add_subplot(1, 1, 1)
          xs = range(100)
          ys = [random.randint(1, 50) for x in xs]
          axis.plot(xs, ys)
          return fig   


if __name__ == '__main__':
    print("\n\nNote: Open browser and type http://127.0.0.1:5000/ or http://ip_address:5000/ \n\n")
    # Run flask for web app
    app.run(host='0.0.0.0', threaded=True, debug=True)