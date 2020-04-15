from flask import Flask, render_template, Response

app = Flask(__name__)
@app.route("/")
def index():
    return render_template('index.html')
@app.route("/streaming.html")
def stream():
    return render_template('streaming.html')
@app.route("/registro.html")
def registro():
    return render_template('registro.html')
@app.route("/Contactenos.html")
def contactenos():
    return render_template('contactenos.html')
@app.route("/verstreaming.html")
def verstreaming():
    return render_template('verstreaming.html')

if __name__=="__main__":
    app.run(host='192.168.1.9', debug=True)
