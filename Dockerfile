FROM php:latest
MAINTAINER Damien Puig <damien.puig@affectv.com>

COPY . /opt/website

WORKDIR /opt/website

ENTRYPOINT  /usr/bin/tail -f /dev/null