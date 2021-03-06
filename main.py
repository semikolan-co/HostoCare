from flask import Flask, render_template
app = Flask(__name__)


@app.route("/")
def hello():

    return render_template('index.html')


@app.route("/search")
def harry():
    name = "rohan das"
    return render_template('search.html', name2=name)


app.run(debug=True)
