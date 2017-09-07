<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Tutorial Prerequisites](#tutorial-prerequisites)
- [Assumptions](#assumptions)
- [Install Software](#install-software)
  - [Docker](#docker)
  - [Pull docker images](#pull-docker-images)
  - [PhpStorm (Optional)](#phpstorm-optional)
  - [Git](#git)
  - [This tutorial](#this-tutorial)
- [Configure Things](#configure-things)
  - [Run `nginx-proxy`](#run-nginx-proxy)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

# Tutorial Prerequisites

The tutorial makes use of `docker` to reduce the amount of
configuration and steps you need to perform to get a running SSP
Proxy.

# Assumptions

* You have admin rights on the machine (you may need to edit `/etc/hosts`)
* You can run software to listen to port 80/443
* You are familiar with SAML terminology (metadata, IdP, SP, etc)
* Your Docker containers can be accessed on localhost/127.0.0.1


# Install Software

## Docker

Follow [Docker's instruction](https://www.docker.com/community-edition#download) to install the Community Edition.


## Pull docker images

It can take a while to pull down all the docker images required for
the tutorial. We recommend you do this *prior* to arriving at the tutorial.

```bash
images="nginx jwilder/nginx-proxy";
for name in $images;
do 
  docker pull $name
done
```

## PhpStorm (Optional)

It can be nice to have an IDE for edit `.php` files used in the tutorial.
[PhpStorm offers a free 30 day trial](https://www.jetbrains.com/phpstorm/).

## Git

We'll be using [git](https://git-scm.com/downloads) to download the tutorial.

## This tutorial

The tutorial contains files that you'll use to complete the tutorial.

**note** You should clone things somewhere under your home
  directory. We'll be mounting files from the tutorial into Docker
  containers and by default only certain paths (including your home
  dir) are allowed to be mounted.

    mkdir -p ~/somepath/techex
    cd ~/somepath/techex
    git clone https://github.com/cirrusidentity/ssp-proxy-tutorial.git


# Configure Things

## Run `nginx-proxy`

We'll be running several `containers` that are web servers as part of
this tutorial. They can't all be listening on port 80/443 at the same
time so we'll use an
[nginx-proxy](https://hub.docker.com/r/jwilder/nginx-proxy/) to listen
on 80/443 and route traffic appropriateley.

Launch nginx-proxy using some placeholder certificates
```bash
cd <tutorial_check_out>
docker run --name nginx-proxy \
  -d \
  -p 80:80 \
  -p 443:443 \
  -v $PWD/nginx-proxy/certs:/etc/nginx/certs \
  -v /var/run/docker.sock:/tmp/docker.sock:ro \
  jwilder/nginx-proxy
```

Now lets launch another HTTP server container to confirm proxying works.

```bash
docker run --name default-website \
  -e VIRTUAL_HOST=localhost \
  -d \
  -v $PWD/nginx-proxy/sample-index.html:/usr/share/nginx/html/index.html \
  -P \
  -d \
  nginx
```

And visit http://localhost/ in your browser
