<?php 
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


