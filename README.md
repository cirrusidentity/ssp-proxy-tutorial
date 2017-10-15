<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Overview](#overview)
- [Usecases](#usecases)
- [Gotchas](#gotchas)
- [SSP Layout](#ssp-layout)
- [Tutorial](#tutorial)
  - [Schedule](#schedule)
  - [Stages](#stages)
- [Debugging Things](#debugging-things)
  - [Enable `showerrors`](#enable-showerrors)
  - [View logs](#view-logs)
  - [Modules not enabled](#modules-not-enabled)
  - [PHP errors](#php-errors)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

# Overview

SimpleSAMLphp Proxy tutorial for Techex 2017

This tutorial will take you through setting up an SP, an IdP and SAML
Proxy with SimpleSAMLphp. The tutorial uses docker to minimize the
amount of configuration changes and software you need to install on
your machine.

The tutorial was created by

* [Cirrus Identity](https://www.cirrusidentity.com/) Patrick Radtke patrick@cirrusidentity.com
* [Unicon](https://www.unicon.net/) Michael Grady mgrady@unicon.net 

# Usecases

Unsure why you would even want to use a SAML Proxy?
[View some use cases](USE_CASES.md)

# Gotchas

There can be some surprises when using a proxy.
[View some gotchas](GOTCHAS.md)

# SSP Layout

New to SSP? Here is where the installation files are

```
/var/simplesamlphp
|-- attributemap
|   |-- facebook2name.php
|   |-- name2oid.php
|   `-- etc
|-- cert
|   |-- saml.crt
|   `-- saml.pem
|-- config
|   |-- authsources.php
|   `-- config.php
|-- config-templates
|   `-- various sample configuraltion files
|-- data (storage of temp files)
|-- dictionaries
|   `-- text strings for supporting i18n
|-- lib (part the code base)
|-- metadata
|   |-- saml20-idp-hosted.php
|   |-- saml20-idp-remote.php
|   `-- saml20-sp-remote.php
|-- modules
|   |-- authfacebook (option module to use facebook for auth)
|   |-- core (the core functionality)
|   `-- numerous other modules
|-- templates (UI templates you can override)
|-- vendor (dependencies)
`-- www (main webapp. Modules can extend)
```

# Tutorial

## Schedule

| Time | Topic |
| ---  | ---   |
| 1 - 1:10 | Overview |
| 1:10 - 1:40 | [Setup an SP](1_SP_Setup) |
| 1:40 - 2:25 | [Setup an IdP](2_IdP_Setup) |
| 2:25 - 3:00 | [Setup a Proxy](3_Proxy_Setup) |
| 3:00 - 3:30 | Break |
| 3:30 - 4:15 | [Multiple Protocols](4_MultiProtocol) |
| 4:15 - 5:00 | Q & A|

## Stages

We've broken the tutorial into several stages. If you get stuck, see
the debugging section below.

1. [Prerequisites](0_Prereqs)
2. [Setup an SP](1_SP_Setup)
3. [Setup an IdP](2_IdP_Setup)
4. [Setup a Proxy](3_Proxy_Setup)
5. [Multiple Protocols](4_MultiProtocol)

# Debugging Things

Here are some tips if you run into issues.

## Enable `showerrors`

In `config.php` we've disabled `showerrors` as a security best
practice. Feel free to re-enable this to get better error messages
displayed in your browser.

## View logs

SSP is configured to log to STDOUT/STDERR so you can use `docker logs`
to view what is happening.

There can be a lot of log lines. You can tail the logs for a specific
container, and then trigger the error to narrows down the cause

```bash
docker logs -f --tail 5 CONTAINER_NAME

172.17.0.5:443 172.17.0.2 - - [26/Sep/2017:00:12:04 +0000] "GET /simplesaml/module.php/core/authenticate.php HTTP/1.1" 200 1736 "https://github.com/cirrusidentity/ssp-proxy-tutorial/tree/master/2_IdP_Setup" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36"
[Tue Sep 26 00:12:17.167449 2017] [:error] [pid 23] [client 172.17.0.2:44512] simplesamlphp ERR [903fcc9267] SimpleSAML_Error_Error: UNHANDLEDEXCEPTION, referer: https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php
[Tue Sep 26 00:12:17.167679 2017] [:error] [pid 23] [client 172.17.0.2:44512] simplesamlphp ERR [903fcc9267] Backtrace:, referer: https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php
[Tue Sep 26 00:12:17.167762 2017] [:error] [pid 23] [client 172.17.0.2:44512] simplesamlphp ERR [903fcc9267] 0 /var/simplesamlphp/www/module.php:180 (N/A), referer: https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/core/authenticate.php
```

## Modules not enabled

The `docker run` commands in the tutorial *should* enable the required
SSP modules. However there are cases, where on a Windows host, the modules were not enabled.

In the below example we check if the `exampleauth` or the `cron`
module are enabled, and we see `exampleauth` is enabled (there is a
file named `enable`) while `cron` is not.

```bash
docker exec CONTAINER_NAME  ls -l /var/simplesamlphp/modules/{exampleauth,cron}/enable

ls: cannot access /var/simplesamlphp/modules/cron/enable: No such file or directory
-rw-r--r-- 1 root root 0 Sep 15 22:40 /var/simplesamlphp/modules/exampleauth/enable

# Enable modules.
docker exec CONTAINER_NAME  touch /var/simplesamlphp/modules/{exampleauth,cron}/enable
```

**note:** modules can also be enabled if there is a `default-enable`
  file present and no `disable` file.

## PHP errors

It can be easy to make a typo in the `php` config files rendering them unparsable.
You can check by running the `php` cli.

```bash
docker exec CONTAINER_NAME php -f /var/simplesamlphp/config/authsources.php

PHP Parse error:  syntax error, unexpected ''tutorial-idp'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' in /var/simplesamlphp/config/authsources.php on line 14
```




