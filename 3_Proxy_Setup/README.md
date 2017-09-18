<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Setting up a SAML Proxy](#setting-up-a-saml-proxy)
  - [Answers](#answers)
- [Run a container](#run-a-container)
- [Combining SP and IdP](#combining-sp-and-idp)
- [Authproc](#authproc)
- [Automated Metadata](#automated-metadata)
- [Authfacebook](#authfacebook)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


# Setting up a SAML Proxy

In this tutorial we are going to setup a SAML Proxy. A SAML Proxy is a
SAML Service Provider and SAML Identity Provider combined together. In
a proxy's simplest form, a regular SP will make an `authNRequest` to
the proxy, the proxy would then make an `authNRequest` to an upstream
IdP. The upstream IdP would respond with a signed SAML assertion. The
proxy would then create it's own assertion (based on data in the
upstream one), sign it and have the browser POST it the the original SP.

## Answers

We'll be using `proxy` folder for the intial configuration and having you
adjust the files during the tutorial. The `proxy-setup` folder contains configuration files that
have already been adjusted. You can reference those if you get stuck.


# Run a container

We are going to run a container for the service `https://proxy.tutorial.stack-dev.cirrusidentity.com`
and mount some configuration files.

We also enable the enable a few modules by setting an environment
variable. The docker startup script will then ensure the module is enabled.

```bash
cd <git checkout>
FOLDER=proxy
docker run -d --name proxy \
  -e VIRTUAL_PORT=443 \
  -e VIRTUAL_PROTO=https \
  -e VIRTUAL_HOST=proxy.tutorial.stack-dev.cirrusidentity.com \
  -e SSP_ENABLED_MODULES='cron metarefresh authfacebook' \
  -v $PWD/3_Proxy_Setup/$FOLDER/config:/var/simplesamlphp/config \
  -v $PWD/3_Proxy_Setup/$FOLDER/metadata:/var/simplesamlphp/metadata \
  -v $PWD/3_Proxy_Setup/cert:/var/simplesamlphp/cert \
  cirrusid/ssp-base:1.14.16
```

and you can now access the site

https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/

and login as `admin/tutorial123`

# Combining SP and IdP

If you visit the [federation
tab](https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/frontpage_federation.php)
in the SSP admin console you'll notice there is proxy metadata for an
`SP` and for an `IdP`. Both the `SP` and the `IdP` for the proxy are
configured in a similar fashion to `SP` and `IdP` you created earlier
in the tutorial.

To enable `proxy` mode you need to tie the `SP` and `IdP`
together. You can do this by editing the `IdP` metadata file and
setting the `auth` to the `authsource` name of the `SP`. Doing this
will tell the IdP to use the SP side for authentication.

<details>
  <summary>Need help setting `auth` name? Click to expand.</summary>
  <p>

     The `IdP` configuration is in `3_Proxy_Setup/proxy/metadata/saml20-idp-hosted.php` and you want to set the `auth` value to the name of the SP's Auth source in `3_Proxy_Setup/proxy/config/authsources.php`. It should be `defatul-sp`

  </p>
</details>


# Authproc

TODO

# Automated Metadata

TODO

# Authfacebook