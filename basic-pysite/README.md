After a `cd`, build with ...
============================

`docker build -t basic-flask:latest -f Dockerfile .`


Launch with ...
==============

`docker container run -p 5000:5000 -dit --name flaskApp basic-flask:latest`