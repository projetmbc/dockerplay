After a `cd`, build with ...
============================

`docker build --no-cache --tag basic-flask:latest --file Dockerfile .`


Launch with ...
===============

`docker container run --publish 5000:5000 -dit --name flaskApp basic-flask:latest`
