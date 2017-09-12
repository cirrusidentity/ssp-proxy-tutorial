<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Setting up an SP](#setting-up-an-sp)
- [Run a container](#run-a-container)
- [Configure It](#configure-it)
  - [Changing config.php](#changing-configphp)
  - [Log In](#log-in)
  - [Metadata](#metadata)
  - [Log In (for real)](#log-in-for-real)

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
  -v $PWD/1_SP_Setup/sp/cert:/var/simplesamlphp/cert \
  unicon/simplesamlphp
```

and you can now access the site

https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/

and see something like

![Install Image](./img/ssp_install_page.png)

# Configure It

Now that we have an SSP running we'll configure it as an SP and login to it through an IDP

The (SSP documentation)[https://simplesamlphp.org/docs/stable] is fairly thorough. However to aid in creating a smooth tutorial we've already done several steps for you.

## Changing config.php

You'll want to change several settings in `config.php` to lock things down.

In your favorite editor edit `sp/config/config.php` and change 

* `showerrors`
* `auth.adminpassword`
* `admin.protectindexpage`
* `secretsalt`
* `session.cookie.secure`

Once you save your changes are live. No need to restart anything

## Log In

If you are in the admin interface you can browse to (federation)[https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/frontpage_federation.php] tab and see that your the SSP instance already has a SP configured.

Where is that SP configured? If you look in `sp/config/authsources.php` you'll find out.

```php
    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'default-sp' => array(
        'saml:SP',
        //various options
       //....
     )
```

This is the `default-sp` authentication source which is of type
'saml:SP' which makes it a service provider. If you are accustom to
Shibboleth SP you may be expecting a Web Access Management approach
where you define which paths or folders are protected. SSP takes a
different approach where your app can trigger authentication by
calling the correct SSP libraries.

There are a few changes we'll need to make to `authsources.php`.
We'll want to enable SHA-256 signatures for `signature.algorithm` and
enable certs (`privatekey` and `certificate`).

If you aren't writing code you can trigger an authentication attempt
by visiting the Authentication tab and (testing auth
sources)[https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php]. Let's
do that now and select `default-sp` and you should see the default
discovery page as shown below.

![Disco](./img/select-idp.png)

No IdPs are listed because the SP doesn't have the metadata for any IdPs.

## Metadata

TODO: get metadata for Idps

## Log In (for real)

