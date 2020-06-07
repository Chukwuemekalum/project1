from flask import Flask, render_template

app=Flask(__name__)

@app.route('/')
def home():
    return render_template("home.php")

@app.route('/about/')
def about():
    return render_template("about.html")

@app.route('/videos/')
def videos():
    return render_template("videos.html")

@app.route('/accounts/')
def accounts():
    return render_template("user.html")

@app.route('/images/')
def images():
    return render_template("images.html")


if __name__=="__main__":
    app.run(debug=True)