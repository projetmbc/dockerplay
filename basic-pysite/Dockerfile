FROM alpine:3.15 as base
RUN apk add --nocache --update python3 py3-pip

FROM base as pybuilder
RUN pip3 install flask

WORKDIR /tinyapp
COPY . ./

ENV FLASK_APP pyapp.py
ENTRYPOINT  ["python3", "-m", "flask", "run", "--host=0.0.0.0"]
