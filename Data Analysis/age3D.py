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