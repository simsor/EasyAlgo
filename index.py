#-*-coding: utf8

import web

urls = (
    "/", "index"
)

app = web.application(urls, globals())

class index:
    def GET(self):
        return "Bonjour, bienvenue à l'accueil."

if __name__ == "__main__":
    app.run()
