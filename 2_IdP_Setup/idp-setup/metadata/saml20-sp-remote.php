<?php

$metadata['https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array (
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 => 
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 => 
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://service.tutorial.stack-dev.cirrusidentity.com/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
  'certData' => 'MIIEfTCCA2WgAwIBAgIJAOvDx3+nhPxKMA0GCSqGSIb3DQEBBQUAMIGFMQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMT4wPAYDVQQDEzVodHRwczovL3NlcnZpY2UudHV0b3JpYWwuc3RhY2stZGV2LmNpcnJ1c2lkZW50aXR5LmNvbTAeFw0xNzA5MTIyMjQ1NTlaFw0yNzA5MTIyMjQ1NTlaMIGFMQswCQYDVQQGEwJBVTETMBEGA1UECBMKU29tZS1TdGF0ZTEhMB8GA1UEChMYSW50ZXJuZXQgV2lkZ2l0cyBQdHkgTHRkMT4wPAYDVQQDEzVodHRwczovL3NlcnZpY2UudHV0b3JpYWwuc3RhY2stZGV2LmNpcnJ1c2lkZW50aXR5LmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAL5kTs+7PTqCQOLTUl7iQlHl7PtPP2YoABF7+2GIuR4YfZ8nbVm8+UzTKern8PRUoKCZg05idV5yjNakd7YK0wTepgQdDz6fOMXniIbnGTKLmEpIkphozUPqGBecM/klwoEsKm71VgXR01UG4w3RwTvNNPda5jp6DPZ0SugxEiU3j2iMNRmmmkC3GWrtY4s6XNzm86rCT4DuQttHQrUpXCPKzaCoHcTWLabL6VEDgagBiD70z9lsSLgpacCT2cZgSTmsGNjEPMcYkSNcy/YcKQwARNQM1S1J1QFa/R93J/tx97VqP4f95iBVLXAhrdIw97rc4DVM1BtB7vCyaFlDV48CAwEAAaOB7TCB6jAdBgNVHQ4EFgQU5uTDa7oaLO3t5JI8MZ1hH8fJYskwgboGA1UdIwSBsjCBr4AU5uTDa7oaLO3t5JI8MZ1hH8fJYsmhgYukgYgwgYUxCzAJBgNVBAYTAkFVMRMwEQYDVQQIEwpTb21lLVN0YXRlMSEwHwYDVQQKExhJbnRlcm5ldCBXaWRnaXRzIFB0eSBMdGQxPjA8BgNVBAMTNWh0dHBzOi8vc2VydmljZS50dXRvcmlhbC5zdGFjay1kZXYuY2lycnVzaWRlbnRpdHkuY29tggkA68PHf6eE/EowDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOCAQEAjplQMIWkXFhvlw4HYJW/XoUHEm6Eh52qsKq1RPPf9c8ixakSoGTA78vrDXGWHn3N5J2Ppr2MH+HU813vK0YRjJHfiDJ5eKCcyA9tjDPYE0UKps5Li8FaCHWYOP3cZPhvjF65/rDYXmaWXp0WZ0eloHswx3jNGEmBZN0HDt8UDUJS4tgOex0qwyV58IKfPvcJLy8x5zY2au38EjAfOPeC/GvGDGLp+0Lw7v7H4mCqSqG/zRudtRgbAt6rQoOWReypG5gt70Wxr4VvdjscO8SJfs/teOUlbDwq+SGA7tNd5aY3OGceqTPTTF0mSzLGhxV23BDavx4T5iktFfHrXjuXvg==',
);

$metadata['https://sp.testshib.org/shibboleth-sp'] = array (
  'entityid' => 'https://sp.testshib.org/shibboleth-sp',
  'description' => 
  array (
    'en' => 'TestShib Two Service Provider',
  ),
  'OrganizationName' => 
  array (
    'en' => 'TestShib Two Service Provider',
  ),
  'name' => 
  array (
    'en' => 'TestShib Test SP',
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
  'metadata-set' => 'saml20-sp-remote',
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SAML2/POST',
      'index' => 1,
      'isDefault' => true,
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SAML2/POST-SimpleSign',
      'index' => 2,
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SAML2/Artifact',
      'index' => 3,
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SAML/POST',
      'index' => 4,
    ),
    4 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SAML/Artifact',
      'index' => 5,
    ),
    5 => 
    array (
      'Binding' => 'http://schemas.xmlsoap.org/ws/2003/07/secext',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/ADFS',
      'index' => 6,
    ),
    6 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://www.testshib.org/Shibboleth.sso/SAML2/POST',
      'index' => 7,
    ),
    7 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'https://www.testshib.org/Shibboleth.sso/SAML/POST',
      'index' => 8,
    ),
  ),
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SLO/SOAP',
    ),
    1 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SLO/Redirect',
    ),
    2 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SLO/POST',
    ),
    3 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'https://sp.testshib.org/Shibboleth.sso/SLO/Artifact',
    ),
  ),
  'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => true,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => '
                            MIIEPjCCAyagAwIBAgIBADANBgkqhkiG9w0BAQUFADB3MQswCQYDVQQGEwJVUzEV
                            MBMGA1UECBMMUGVubnN5bHZhbmlhMRMwEQYDVQQHEwpQaXR0c2J1cmdoMSIwIAYD
                            VQQKExlUZXN0U2hpYiBTZXJ2aWNlIFByb3ZpZGVyMRgwFgYDVQQDEw9zcC50ZXN0
                            c2hpYi5vcmcwHhcNMDYwODMwMjEyNDM5WhcNMTYwODI3MjEyNDM5WjB3MQswCQYD
                            VQQGEwJVUzEVMBMGA1UECBMMUGVubnN5bHZhbmlhMRMwEQYDVQQHEwpQaXR0c2J1
                            cmdoMSIwIAYDVQQKExlUZXN0U2hpYiBTZXJ2aWNlIFByb3ZpZGVyMRgwFgYDVQQD
                            Ew9zcC50ZXN0c2hpYi5vcmcwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIB
                            AQDJyR6ZP6MXkQ9z6RRziT0AuCabDd3x1m7nLO9ZRPbr0v1LsU+nnC363jO8nGEq
                            sqkgiZ/bSsO5lvjEt4ehff57ERio2Qk9cYw8XCgmYccVXKH9M+QVO1MQwErNobWb
                            AjiVkuhWcwLWQwTDBowfKXI87SA7KR7sFUymNx5z1aoRvk3GM++tiPY6u4shy8c7
                            vpWbVfisfTfvef/y+galxjPUQYHmegu7vCbjYP3On0V7/Ivzr+r2aPhp8egxt00Q
                            XpilNai12LBYV3Nv/lMsUzBeB7+CdXRVjZOHGuQ8mGqEbsj8MBXvcxIKbcpeK5Zi
                            JCVXPfarzuriM1G5y5QkKW+LAgMBAAGjgdQwgdEwHQYDVR0OBBYEFKB6wPDxwYrY
                            StNjU5P4b4AjBVQVMIGhBgNVHSMEgZkwgZaAFKB6wPDxwYrYStNjU5P4b4AjBVQV
                            oXukeTB3MQswCQYDVQQGEwJVUzEVMBMGA1UECBMMUGVubnN5bHZhbmlhMRMwEQYD
                            VQQHEwpQaXR0c2J1cmdoMSIwIAYDVQQKExlUZXN0U2hpYiBTZXJ2aWNlIFByb3Zp
                            ZGVyMRgwFgYDVQQDEw9zcC50ZXN0c2hpYi5vcmeCAQAwDAYDVR0TBAUwAwEB/zAN
                            BgkqhkiG9w0BAQUFAAOCAQEAc06Kgt7ZP6g2TIZgMbFxg6vKwvDL0+2dzF11Onpl
                            5sbtkPaNIcj24lQ4vajCrrGKdzHXo9m54BzrdRJ7xDYtw0dbu37l1IZVmiZr12eE
                            Iay/5YMU+aWP1z70h867ZQ7/7Y4HW345rdiS6EW663oH732wSYNt9kr7/0Uer3KD
                            9CuPuOidBacospDaFyfsaJruE99Kd6Eu/w5KLAGG+m0iqENCziDGzVA47TngKz2v
                            PVA+aokoOyoz3b53qeti77ijatSEoKjxheBWpO+eoJeGq/e49Um3M2ogIX/JAlMa
                            Inh+vYSYngQB2sx9LGkR9KHaMKNIGCDehk93Xla4pWJx1w== 
                        ',
    ),
  ),
  'UIInfo' => 
  array (
    'DisplayName' => 
    array (
      'en' => 'TestShib Test SP',
    ),
    'Description' => 
    array (
      'en' => 'TestShib SP. Log into this to test your machine.
                        Once logged in check that all attributes that you expected have been
                        released.',
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

