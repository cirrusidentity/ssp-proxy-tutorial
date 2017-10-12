<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Scope Checking](#scope-checking)
- [Scoping and ADFS](#scoping-and-adfs)
- [ForceAuth](#forceauth)
- [Incorrect AuthnInstant](#incorrect-authninstant)
- [NameID required](#nameid-required)
- [SessionNotOnOrAfter and short proxy sessions](#sessionnotonorafter-and-short-proxy-sessions)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

# Scope Checking

The proxy needs to perform scope checking on any scoped attributes. This is not enabled by default. You'll need to use a FilterScopes module:

* In a future version of SSP: https://simplesamlphp.org/docs/development/saml:filterscopes
* Optional module: https://github.com/NIIF/simplesamlphp-module-attributescope

# Scoping and ADFS
If one or more of the SAML IdPs you are "fronting" use ADFS as the IdP technology, you'll have a problem (at least thru version 3.x of ADFS, don't know  yet with the latest ADFS, ADFS 2016.)
   When used as a proxy, SimpleSAMLphp will "do the right thing" and include a Scoping element in the SAML AuthnRequest it sends to the proxied IdP. This can include several things, but one example of this element is:

```xml
 <samlp:Scoping>
        <samlp:RequesterID>EntityID_of_Originating_SP</samlp:RequesterID>
 </samlp:Scoping>

```

This (usefully in some cases, we've taken advantage of that RequesterId info in a couple of deployments) tells the "proxied IdP" the actual service (SP entityID) that is asking for authentication. But ADFS will reject any AuthnRequests containing that Scoping element, replying with a SAML error that there it doesn't know how to deal with a Scoping element.

So if you want to proxy ADFS, you need to modify SimpleSAMLphp to *not* include that Scoping element when the IdP is an ADFS-based one. One fix for this which we have made, and proposed be included in future releases of SimpleSAMLphp, can be found here:

  https://github.com/simplesamlphp/simplesamlphp/issues/498
    (as a comment by "mapgrady" on May 15)

# ForceAuth

If, for some reason, you want to configure a saml:SP authn source for SimpleSAMLphp (acting as a proxy), such that you want the AuthnRequests sent to the  "proxied IdP" to always ask for ForceAuthn, SimpleSAMLphp will not put a ForceAuthn flag in the AuthnRequest sent to the "proxied IdP". This behavior is discussed in the following SimpleSAMLphp Google Group thread, which includes one way of "fixing" SimpleSAML if you need that functionality:

 https://groups.google.com/forum/#!searchin/simplesamlphp/forceauthn$20proxy%7Csort:relevance/simplesamlphp/kMFZhJZFf3A/SCzSPupPfAwJ

# Incorrect AuthnInstant

SimpleSAMLphp does not pass thru, in the SAML response it generates, the AuthnInstant returned by the proxied IdP. It will just send an AuthnInstant of "now" (the time at which it generates the response), making it "impossible" for the SP to judge when the actual authentication instant really was. (E.g. to know if ForceAuthn was really honored.) This issue, and a fix for that, that will allow the AuthnInstant returned by the proxied IdP to be passed thru as the AuthnInstant returned to the SP, can be found here:
  
  https://github.com/simplesamlphp/simplesamlphp/pull/683

# NameID required

SimpleSAMLphp always expects to get a NameID (Subject value) returned from a proxied IdP. This is not a problem when proxying a Shibboleth IdP, because it will always return at least a transient-type NameID. But other SAML IdPs may not return a NameID (Subject value) by default, with ADFS being an example. So you'll need to make sure that such SAML IdPs (e.g. ADFS) are configured to return a NameID of some type.

# SessionNotOnOrAfter and short proxy sessions

SimpleSAMLphp will always return a `SessionNotOnOrAfter` attribute in the `<saml:AuthnStatement>` element of the SAML response sent to the SP. And SimpleSAMLphp ties that timestamp to the length of the session you have configured the SimpleSAMLphp IdP to "keep". That could be a problem if you actually don't want the IdP Proxy to keep much of a session, but rather rely on the "proxied IdP SSO sessions" for the SSO behavior. If the SP "honors" SessionNotOnOrAfter (note that not only does the Shibboleth SP "honor" that, you cannot configure the SP to "ignore it"), that could result in a very short SP session that you did not intend to ask for. This is discussed in the following SimpleSAMLphp Google Group thread:

  https://groups.google.com/forum/#!topic/simplesamlphp/-gxLjrqOIg0