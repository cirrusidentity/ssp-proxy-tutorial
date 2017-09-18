<?php 
$metadata['https://proxy.tutorial.example.org/idp'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://proxy.tutorial.example.org/idp',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://proxy.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEWjCCA0KgAwIBAgIJAJqmSNipWtlAMA0GCSqGSIb3DQEBBQUAMHsxCzAJBgNVBAYTAkFVMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQxNDAyBgNVBAMTK3Byb3h5LnR1dG9yaWFsLnN0YWNrLWRldi5jaXJydXNpZGVudGl0eS5jb20wHhcNMTcwOTE4MjExOTEzWhcNMjcwOTE4MjExOTEzWjB7MQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMTQwMgYDVQQDEytwcm94eS50dXRvcmlhbC5zdGFjay1kZXYuY2lycnVzaWRlbnRpdHkuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsxex1N28oz6jKEFNWg3TTEJhVRFHjxGksMeh1kHszijydMK/dfrUTCMZu8Pa+KiAySGh0eSm3P8kf/TWShqBapzm54ZCWA3GYlfCLsZUF8S6+MFC5IUA/ZxdlDopD01Am/fLk5g43SBPVoEoi09kKHaa/jm7fEopeR9HXSO54/PVaaK6bBgapkS7Gs+ZIKHsoiUiros/GqUk6TDA4RETY8P1eEYg9iE3NasDO5GrzgzbNkK9OS5mY4qc5sy7ygyL3D2b0vMjm7/M5Vz2VluYZQ8pg6lWlBtyJBjuc99yFThXZH8cjmOB0Y6vBMSBXULbf4Ihm5PI2CIaaHmg2t5E7QIDAQABo4HgMIHdMB0GA1UdDgQWBBRekSBFmRoSV2R5uaH4otns8/ID0TCBrQYDVR0jBIGlMIGigBRekSBFmRoSV2R5uaH4otns8/ID0aF/pH0wezELMAkGA1UEBhMCQVUxEzARBgNVBAgTClNvbWUtU3RhdGUxITAfBgNVBAoTGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDE0MDIGA1UEAxMrcHJveHkudHV0b3JpYWwuc3RhY2stZGV2LmNpcnJ1c2lkZW50aXR5LmNvbYIJAJqmSNipWtlAMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBABYLs2tAlmOxBw7mHGNQZBr7d4Rnecih+PJ1fY+Lw4lZjMG0HjFLBPsvfvMjmcd+8SZTrf0jU/FMIYkPlmpQ+AuDVGMC36ffEwek1yXT9xjcl0+0qFjXklw/dAZCQ7QRyfzv9XcDC7peHkSofB1JCBEvFRuVvGhEi0ryj4hbCLfBj8Z2EHNQpOIEbicBJOmdeUwJoN7qFn5FrAd7b0iejuqPimpfi6mpImPApa4I+umdcsoXSnGUnEOdIUwChnMxeLvG3LdoldL3/wvvT31x0tY6/rmc9QjKUViaqpU5BqhZpgoAkFYQMwf8DKEBL59rRNX7NTM1dnbfF9M7QDmvqLo=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

$metadata['https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/metadata.php'] = array (
  'metadata-set' => 'saml20-idp-remote',
  'entityid' => 'https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/metadata.php',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/SSOService.php',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.tutorial.stack-dev.cirrusidentity.com/simplesaml/saml2/idp/SingleLogoutService.php',
    ),
  ),
  'certData' => 'MIIEVDCCAzygAwIBAgIJAIN96sYKvcRoMA0GCSqGSIb3DQEBBQUAMHkxCzAJBgNVBAYTAkFVMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQxMjAwBgNVBAMTKWlkcC50dXRvcmlhbC5zdGFjay1kZXYuY2lycnVzaWRlbnRpdHkuY29tMB4XDTE3MDkxNTIzMDEzMVoXDTI3MDkxNTIzMDEzMVoweTELMAkGA1UEBhMCQVUxEzARBgNVBAgTClNvbWUtU3RhdGUxITAfBgNVBAoTGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDEyMDAGA1UEAxMpaWRwLnR1dG9yaWFsLnN0YWNrLWRldi5jaXJydXNpZGVudGl0eS5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC98cWW+kGypy6cV1qvOQol7A9/spl9jMScq5zPUXcKqEYh8SdcBuyzMNTxqac+/haAL2OQssk9ttMtt8qW194Emqe/dKtjaDFN+iiMs4g2JQMlFY2jETuVkuN7zmOFVtKKS9nbEsBHmq8PlwaxAYqstFgHqbv5AgoKE5wJWP1m7VdhIIVfdj8pIeRZu6NuwfEjPrFamN8fyfqpYrgO198uTh2uQNKALhGQgZjOO3qm97Z442+hzXNzBQ3krlL6bp//d4jZnoMzPHFKK2+w5lpbqGRigitNUeBUAUtX7q1K34nl3ONN5WSSdUSEr+zdM114UtvYx3EjeUaJweeBDZkXAgMBAAGjgd4wgdswHQYDVR0OBBYEFPnJrkWSGIXmVxh1HKn/WIZyucZ3MIGrBgNVHSMEgaMwgaCAFPnJrkWSGIXmVxh1HKn/WIZyucZ3oX2kezB5MQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMTIwMAYDVQQDEylpZHAudHV0b3JpYWwuc3RhY2stZGV2LmNpcnJ1c2lkZW50aXR5LmNvbYIJAIN96sYKvcRoMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQEFBQADggEBAE8cL31WjjGO49NYd+rQGQgkJRcTtI75A1/Oibcl+hXJPCALinv4/OZCJP7lctzYKTIBAgYZpMCPrDiibpTAshjp3amwAqLDptyW1C5THgdPLGfPNT309qmTFkbvQuzoqNWYcvkJBxkPreNd9BUgKtpG0xiFp5HXZ+HeVZnuqMb4b1LEVUNpSfnjbKdZXQPKhETD5E4CY+5JDOhNxJHhaebHl/Fl8F7MsxDb/2odlzEfMiFSZ0/dfMRnbx5gLFsCxQtmf+P6QgsOP20jp4MLkUENgyh7Y+wknCE+rgqwGL1eUbGrEN0H02d7tm9k9wasO1ng1xeOhtSb/wPf9Tddta8=',
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
);

$metadata['https://idp.testshib.org/idp/shibboleth'] = array (
  'entityid' => 'https://idp.testshib.org/idp/shibboleth',
  'description' => 
  array (
    'en' => 'TestShib Two Identity Provider',
  ),
  'OrganizationName' => 
  array (
    'en' => 'TestShib Two Identity Provider',
  ),
  'name' => 
  array (
    'en' => 'TestShib Test IdP',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'TestShib Two',
  ),
  'url' => 
  array (
    'en' => 'http://www.testshib.org/testshib-two/',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'http://www.testshib.org/testshib-two/',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'givenName' => 'Nate',
      'surName' => 'Klingenstein',
      'emailAddress' => 
      array (
        0 => 'ndk@internet2.edu',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
      'Location' => 'https://idp.testshib.org/idp/profile/Shibboleth/SSO',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/POST/SSO',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/Redirect/SSO',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://idp.testshib.org/idp/profile/SAML2/SOAP/ECP',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
      'Location' => 'https://idp.testshib.org:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
      'index' => 1,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://idp.testshib.org:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
      'index' => 2,
    ),
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:mace:shibboleth:1.0:nameIdentifier',
    1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
                            MIIDAzCCAeugAwIBAgIVAPX0G6LuoXnKS0Muei006mVSBXbvMA0GCSqGSIb3DQEB
                            CwUAMBsxGTAXBgNVBAMMEGlkcC50ZXN0c2hpYi5vcmcwHhcNMTYwODIzMjEyMDU0
                            WhcNMzYwODIzMjEyMDU0WjAbMRkwFwYDVQQDDBBpZHAudGVzdHNoaWIub3JnMIIB
                            IjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAg9C4J2DiRTEhJAWzPt1S3ryh
                            m3M2P3hPpwJwvt2q948vdTUxhhvNMuc3M3S4WNh6JYBs53R+YmjqJAII4ShMGNEm
                            lGnSVfHorex7IxikpuDPKV3SNf28mCAZbQrX+hWA+ann/uifVzqXktOjs6DdzdBn
                            xoVhniXgC8WCJwKcx6JO/hHsH1rG/0DSDeZFpTTcZHj4S9MlLNUtt5JxRzV/MmmB
                            3ObaX0CMqsSWUOQeE4nylSlp5RWHCnx70cs9kwz5WrflnbnzCeHU2sdbNotBEeTH
                            ot6a2cj/pXlRJIgPsrL/4VSicPZcGYMJMPoLTJ8mdy6mpR6nbCmP7dVbCIm/DQID
                            AQABoz4wPDAdBgNVHQ4EFgQUUfaDa2mPi24x09yWp1OFXmZ2GPswGwYDVR0RBBQw
                            EoIQaWRwLnRlc3RzaGliLm9yZzANBgkqhkiG9w0BAQsFAAOCAQEASKKgqTxhqBzR
                            OZ1eVy++si+eTTUQZU4+8UywSKLia2RattaAPMAcXUjO+3cYOQXLVASdlJtt+8QP
                            dRkfp8SiJemHPXC8BES83pogJPYEGJsKo19l4XFJHPnPy+Dsn3mlJyOfAa8RyWBS
                            80u5lrvAcr2TJXt9fXgkYs7BOCigxtZoR8flceGRlAZ4p5FPPxQR6NDYb645jtOT
                            MVr3zgfjP6Wh2dt+2p04LG7ENJn8/gEwtXVuXCsPoSCDx9Y0QmyXTJNdV1aB0AhO
                            RkWPlFYwp+zOyOIR+3m1+pqWFpn0eT/HrxpdKa74FA3R2kq4R7dXe4G0kUgXTdqX
                            MLRKhDgdmA==
                        ',
    ),
  ),
  'scope' => 
  array (
    0 => 'testshib.org',
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'en' => 'TestShib Test IdP',
    ),
    'Description' => 
    array (
      'en' => 'TestShib IdP. Use this as a source of attributes
                        for your test SP.',
    ),
    'InformationURL' => 
    array (
    ),
    'PrivacyStatementURL' => 
    array (
    ),
    'Logo' => 
    array (
      0 => 
      array (
        'url' => 'https://www.testshib.org/testshibtwo.jpg',
        'height' => 88,
        'width' => 253,
      ),
    ),
  ),
);

$metadata['urn:example:idp'] = array (
  'entityid' => 'urn:example:idp',
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.oktadev.com',
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://idp.oktadev.com/logout',
    ),
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDPDCCAiQCCQDydJgOlszqbzANBgkqhkiG9w0BAQUFADBgMQswCQYDVQQGEwJVUzETMBEGA1UECBMKQ2FsaWZvcm5pYTEWMBQGA1UEBxMNU2FuIEZyYW5jaXNjbzEQMA4GA1UEChMHSmFua3lDbzESMBAGA1UEAxMJbG9jYWxob3N0MB4XDTE0MDMxMjE5NDYzM1oXDTI3MTExOTE5NDYzM1owYDELMAkGA1UEBhMCVVMxEzARBgNVBAgTCkNhbGlmb3JuaWExFjAUBgNVBAcTDVNhbiBGcmFuY2lzY28xEDAOBgNVBAoTB0phbmt5Q28xEjAQBgNVBAMTCWxvY2FsaG9zdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMGvJpRTTasRUSPqcbqCG+ZnTAurnu0vVpIG9lzExnh11o/BGmzu7lB+yLHcEdwrKBBmpepDBPCYxpVajvuEhZdKFx/Fdy6j5mH3rrW0Bh/zd36CoUNjbbhHyTjeM7FN2yF3u9lcyubuvOzr3B3gX66IwJlU46+wzcQVhSOlMk2tXR+fIKQExFrOuK9tbX3JIBUqItpI+HnAow509CnM134svw8PTFLkR6/CcMqnDfDK1m993PyoC1Y+N4X9XkhSmEQoAlAHPI5LHrvuujM13nvtoVYvKYoj7ScgumkpWNEvX652LfXOnKYlkB8ZybuxmFfIkzedQrbJsyOhfL03cMECAwEAATANBgkqhkiG9w0BAQUFAAOCAQEAeHwzqwnzGEkxjzSD47imXaTqtYyETZow7XwBc0ZaFS50qRFJUgKTAmKS1xQBP/qHpStsROT35DUxJAE6NY1Kbq3ZbCuhGoSlY0L7VzVT5tpu4EY8+Dq/u2EjRmmhoL7UkskvIZ2n1DdERtd+YUMTeqYl9co43csZwDno/IKomeN5qaPc39IZjikJ+nUC6kPFKeu/3j9rgHNlRtocI6S1FdtFz9OZMQlpr0JbUt2T3xS/YoQJn6coDmJL5GTiiKM6cOe+Ur1VwzS1JEDbSS2TWWhzq8ojLdrotYLGd9JOsoQhElmz+tMfCFQUFLExinPAyy7YHlSiVX13QH2XTu/iQQ==',
    ),
  ),
);


