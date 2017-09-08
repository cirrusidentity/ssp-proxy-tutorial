<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Setting up an SP](#setting-up-an-sp)
- [Run a container](#run-a-container)
- [Configure It](#configure-it)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


# Setting up an SP

In this tutorial we are going to setup a SAML service provider and get a feel for the layout of SSP.

# Run a container

We are going to run a container for the service `https://service.tutorial.stack-dev.cirrusidentity.com`
and mount some configuration files.

```bash
docker run -d --name service-provider \
  -e VIRTUAL_PORT=443 \
  -e VIRTUAL_PROTO=https \
  -e VIRTUAL_HOST=service.tutorial.stack-dev.cirrusidentity.com \
  -v $PWD/1_SP_Setup/sp/config:/var/simplesamlphp/config \
  -v $PWD/1_SP_Setup/sp/metadata:/var/simplesamlphp/metadata \
  -v $PWD/1_SP_Setup/sp/config:/var/simplesamlphp/config \
  unicon/simplesamlphp
```

and you can now access the site

https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/

and see something like

![Install Image](./img/ssp_install_page.png)

# Configure It