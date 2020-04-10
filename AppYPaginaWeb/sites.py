from flask import Flask, render_template, Response

app = Flask(__name__)
@app.route("/")
def index():
    return render_template('index.html')
@app.route("/streaming")
def stream():
    return render_template('streaming.html')
@app.route("/registro")
def registro():
    return render_template('registro.html')
@app.route("/contactenos")
def contactenos():
    return render_template('contactenos.html')

if __name__=="__main__":
    app.run()
