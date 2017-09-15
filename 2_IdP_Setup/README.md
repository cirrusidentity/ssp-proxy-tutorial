<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Setting up an IdP](#setting-up-an-idp)
  - [Answers](#answers)
- [Run a container](#run-a-container)
- [Enable SSP as an IdP](#enable-ssp-as-an-idp)
  - [Changing config.php](#changing-configphp)
  - [Chaning saml20-idp-hosted.php](#chaning-saml20-idp-hostedphp)
  - [Enable authsource](#enable-authsource)
- [Look Around](#look-around)
  - [Metadata](#metadata)
  - [Log In](#log-in)
- [Summary](#summary)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


# Setting up an IdP

In this tutorial we are going to setup a SAML IdP and integrate it with some SPs

## Answers

We'll be using `idp` folder for the intial configuration and having you
adjust the files during the tutorial. The `idp-setup` folder contains configuration files that
have already been adjusted. You can reference those if you get stuck.


# Run a container

We are going to run a container for the service `https://idp.tutorial.stack-dev.cirrusidentity.com`
and mount some configuration files.

We also enable the `exampleauth` module by setting an environment
variable. The docker startup script will then ensure the module is enabled.

```bash
FOLDER=idp
docker run -d --name idp \
  -e VIRTUAL_PORT=443 \
  -e VIRTUAL_PROTO=https \
  -e VIRTUAL_HOST=idp.tutorial.stack-dev.cirrusidentity.com \
  -e SSP_ENABLED_MODULES='exampleauth' \
  -v $PWD/2_IdP_Setup/$FOLDER/config:/var/simplesamlphp/config \
  -v $PWD/2_IdP_Setup/$FOLDER/metadata:/var/simplesamlphp/metadata \
  -v $PWD/2_IdP_Setup/cert:/var/simplesamlphp/cert \
  -v $PWD/scripts/ssp-startup.sh:/tmp/ssp-startup.sh \
  cirrusid/ssp-base:1.14.16
```

and you can now access the site

https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/

and login as `admin/tutorial123`

# Enable SSP as an IdP

Now that we have an SSP running we'll configure it as an IdP.

The [SSP documentation](https://simplesamlphp.org/docs/stable) is fairly thorough. However to aid in creating a smooth tutorial we've already done several steps for you.

## Changing config.php

 `config.php` has already been updated to set thing like `adminpassword` and `secretsalt`. There are you few options you'll configure
to enable IdP functionality.

In your favorite editor edit `idp/config/config.php` and change 

* `enable.saml20-idp` to enable IdP functionality

Once you save, your changes are live. No need to restart anything

## Enable authsource

Users will need to authenticate to the IdP in some way. For the
tutorial purposes we'll have them authenticate using some
usernames/passwords pre-configured in `authsources.php`

Edit that file now and uncomment `tutorial-idp`. This will allow two users (`student` and `employee`) to authenticate with the passwords `sudentpass` and `employeepass`

```php
    'tutorial-idp' => array(
        'exampleauth:UserPass',
        // Format is  username:passwor => array( attributes )
        'student:studentpass' => array(
            'uid' => array('test'),
            'eduPersonAffiliation' => array('member', 'student'),
        ),
        'employee:employeepass' => array(
            'uid' => array('employee'),
            'eduPersonAffiliation' => array('member', 'employee'),
        ),
    ),
```

You can (test the authentcation source)[https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php] and confirm the 

## Changing saml20-idp-hosted.php

The `saml20-idp-hosted.php` contains the configuration for the IdP
that you are running. The `saml20-idp-remote.php` file we saw earlier
in the tutorial is used for IdPs you trust. Similarily the
`saml20-sp-remote.php` contains Service Providers you trust.

TODO



# Look Around

If you are in the admin interface you can browse to [Federation
tab](https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/frontpage_federation.php)
and see that there are two trusted SPs already configured and the metadata for your new IdP

Where is that SP metadata configured? In this tutorial we are using
the `php` formatted metadata contained in
`idp/metadata/saml20-sp-remote.php`




## Metadata

Add metadata to SP from earlier

TODO: add steps (maybe as details so people can click to drop down

## Log In

TODO: provice links to authenticate to the service SP from the tutorial and to TestShib SP.

# Summary

You've learned about setting up a service provider, adding metadata and testing authentication.
In the next section you'll configure an IdP.
