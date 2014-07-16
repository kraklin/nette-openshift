Nette Framework on OpenShift
==============================

This git repository helps you get [Nette Framework] (http://www.nette.org) up and running quickly on OpenShift.

Nette Framework is a popular tool for PHP web development. It is designed to be
the most usable and friendliest as possible. It focuses on security and
performance and is definitely one of the safest PHP frameworks.

Nette Framework speaks your language and helps you to easily build better websites.

Running on OpenShift
----------------------------

Create an account at https://www.openshift.com and install the client tools (run 'rhc setup' first)

Create a php-5.4 application (you can call your application whatever you want)

    rhc app create nette php-5.4 --from-code=https://github.com/kraklin/nette-openshift

That's it, you can now checkout your application at:

    http://nette-$yournamespace.rhcloud.com

Notes
=====

Nette directories mapping
-------------------

Nette directories has been moved to directory structure used by OpenShift as follows:
    
		app -> misc
    vendor -> libs
    temp -> $_ENV['OPENSHIFT_TMP_DIR']
    log -> $_ENV['OPENSHIFT_LOG_DIR']