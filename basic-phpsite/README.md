After a `cd`, build with ...
============================

`docker build --no-cache --tag basic-php --file Dockerfile .`


Launch with ...
===============

`docker container run --publish 80:80 -dit --name phpApp basic-php`
