<?php

$config = array(

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),

    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'default-sp' => array(
        'saml:SP',

        'entityID' => 'https://proxy.tutorial.example.com/sp',
        'signature.algorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',
        'privatekey' => 'proxy.pem',
        'certificate' => 'proxy.crt',
    ),

    'facebook' => array(
        'authfacebook:Facebook',
        'api_key' => '133972730583345',
        'secret' => '36aefb235314bad5df075363b79cbbcd',
    ),

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
);
