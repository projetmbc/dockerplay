import requests

from flask import (
    Flask,
    render_template
)

app = Flask(__name__)

@app.route('/')
def xkcd():
    url   = "https://random-xkcd-img.herokuapp.com/"
    infos = requests.get(url).json()

    return render_template(
        "randxkcd.html",
        title = infos['title'].title(),
        url   = infos['url']
    )

if __name__ == '__main__':
    app.run(
        debug = False,
        host  = '0.0.0.0',
        port  = 5000,
    )
