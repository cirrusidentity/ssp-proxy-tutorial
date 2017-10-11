<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Setting up a MultiProtocol Proxy](#setting-up-a-multiprotocol-proxy)
  - [Answers](#answers)
- [Run a container](#run-a-container)
  - [macOS/Linux](#macoslinux)
  - [Windows](#windows)
- [Adding New Authsources](#adding-new-authsources)
- [Make the Proxy IdP use multiple auth sources](#make-the-proxy-idp-use-multiple-auth-sources)
  - [Virtual SSO Endpoints](#virtual-sso-endpoints)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


# Setting up a MultiProtocol Proxy

In this tutorial we are going to setup a proxy that can speack
multiple protocols and translate those into SAML

## Answers

We'll be using `multi` folder for the intial configuration and having you
adjust the files during the tutorial. The `multi-setup` folder contains configuration files that
have already been adjusted. You can reference those if you get stuck.


# Run a container

We are going to run a container for the service `https://proxy.tutorial.stack-dev.cirrusidentity.com`
and mount some configuration files. This is the same `entityId`/hostname used earlier in the tutorial
so you'll need to shut down the previous docker container

    docker stop proxy

We also enable the enable a few modules by setting an environment
variable. The docker startup script will then ensure the module is enabled.

## macOS/Linux
```bash
cd <git checkout>
FOLDER=multi
docker run -d --name multi-proxy \
  -e VIRTUAL_PORT=443 \
  -e VIRTUAL_PROTO=https \
  -e VIRTUAL_HOST=proxy.tutorial.stack-dev.cirrusidentity.com \
  -e SSP_ENABLED_MODULES='cron metarefresh authfacebook exampleauth' \
  -v $PWD/4_MultiProtocol/$FOLDER/config:/var/simplesamlphp/config \
  -v $PWD/4_MultiProtocol/$FOLDER/metadata:/var/simplesamlphp/metadata \
  -v $PWD/4_MultiProtocol/cert:/var/simplesamlphp/cert \
  cirrusid/ssp-base:1.14.16
```

## Windows
```bash
cd <git checkout>
set PWD=/c/Users/<current_user>/<path_to_tutorial_check_out>
set FOLDER=multi
docker run -d --name multi-proxy ^
  -e VIRTUAL_PORT=443 ^
  -e VIRTUAL_PROTO=https ^
  -e VIRTUAL_HOST=proxy.tutorial.stack-dev.cirrusidentity.com ^
  -e SSP_ENABLED_MODULES="cron metarefresh authfacebook exampleauth" ^
  -v %PWD%/4_MultiProtocol/%FOLDER%/config:/var/simplesamlphp/config ^
  -v %PWD%/4_MultiProtocol/%FOLDER%/metadata:/var/simplesamlphp/metadata ^
  -v %PWD%/4_MultiProtocol/cert:/var/simplesamlphp/cert ^
  cirrusid/ssp-base:1.14.16
```

and you can now access the site

https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/

and login as `admin/tutorial123`

# Adding New Authsources

Add two new authsources: one for [facebook (search the linked doc for `facebook`)](https://github.com/simplesamlphp/simplesamlphp/blob/v1.14.16/config-templates/authsources.php) and one for [exampleauth](https://simplesamlphp.org/docs/stable/simplesamlphp-idp#section_3). Use `facebook` and `exampleauth` as the names of the authsources.

For `facebook` you can use the following, pre-registered information

* API key: 133972730583345
* API secret: e6f64db13ce933958b1cc175567f9a7c
* Test user email: techex_qclvvnr_user@tfbnw.net
* Test user password: `TacoTaco`

<details>
  <summary>Enable Facebook. Need a hint? Click to expand.</summary>
  <p>

1. Edit `multi/config/authsources.php`
2. Add a `facebook` authsource

```php
     'facebook' => array(
        'authfacebook:Facebook',
        'api_key' => '133972730583345',
        'secret' => '36aefb235314bad5df075363b79cbbcd',
    ),

```

3. Test the [facebook authentication](https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php?as=facebook)
  </p>
</details>

<details>
  <summary>Enable Exampleauth. Need a hint? Click to expand.</summary>
  <p>

1. Edit `multi/config/authsources.php`
2. Add an `exampleauth` authsource

```php
    'exampleauth' => array(
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

3. Test the [exampleauth authentication](https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php?as=exampleauth)

  </p>
</details>

# Make the Proxy IdP use multiple auth sources

The Proxy IdP configuration (in
`multi-setup/metadata/saml20-idp-hosted.php`) has its `auth`
configured to use the `default-sp` authsource. How can it be
configured to use multiple authsources? How does a user indicate which
one to use, if there are multiple?

The
[multiauth](https://simplesamlphp.org/docs/stable/multiauth:multiauth)
enables this functionality.  Review the `multiauth` documentation,
create an `authsource` called `multi` that can make use of the three existing
authsources and update the IdP to use it.

<details>
  <summary>Enable multiauth. Need a hint? Click to expand.</summary>
  <p>

1. Edit `multi/config/authsources.php`
2. Add an `multi` authsource

```php
    'multi' => array(
        'multiauth:MultiAuth',
        'sources' => array(
            'default-sp' => array(
                'text' => array(
                    'en' => 'SAML Identity Providers',
                ),
            ),
            'facebook' => array(
                'text' => array(
                    'en' => 'Facebook',
                ),
            ),
            'exampleauth' => array(
                'text' => array(
                    'en' => 'Test Accounts',
                ),
            ),
        ),
    )
```

3. Test the [multiauth authentication](https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php?as=multi)

  </p>
</details>

TODO: issue authnrequest from SP


## Virtual SSO Endpoints

TODO: expand


